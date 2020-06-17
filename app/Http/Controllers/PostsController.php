<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;
use Srmklive\PayPal\Services\ExpressCheckout;


class PostsController extends Controller
{
      
    public function index()
    {
        if(auth()->user()!=null){
            
            $users = auth()->user()->following()->pluck('profiles.user_id');

            $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);

            return view('welcome', compact('posts'));
        }

        else{
            return view('welcome');
        }
    }

    public function create()
    {
        
        $category = Category::pluck('category','id')->all();
        return view('posts.create', compact('category'));
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'category' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads','public');
        $imagePath2 = request('image')->store('upload','public');
        
        $image = Image::make(public_path("storage/{$imagePath}"));
        $image2 = Image::make(public_path("storage/{$imagePath}"));
        $image2->insert(public_path('/storage/profile/outline.png'), 'bottom-right', 100, 100);

        $image->save();
        $image2->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'category' => $data['category'],
            'image' => $imagePath,
            'image2' => $imagePath2,
        ]);

        return redirect('/profile/' . auth()->user()->id)->with('message','Image uploaded successfully');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        $relate = Post::where([['id','!=',$id],['category',$post->category]])->get();
        return view('posts.show',compact('post','relate'));
    }

    // Deleting a post from user profile

    public function delete(Post $post)
    {
        $post->delete();
        return redirect(route('profile.show',auth()->user()->id));
    }

    // Downloading a photo

    public function download($id){
        $post = Post::find($id);
        return Storage::download($post->path, $post->id);
    }

    // Buy and Sell image
    public function sellImage($id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.sell', compact('posts'));
    }

    public function sellUpdate(Request $request, $id)
    {
        $data = $request->all();
        $posts = Post::findOrFail($id);
        
        $posts->update([
            'price'=>$data['price'],
            'status'=> 1,
        ]);

        return view('posts.success');
    }

    public function sellSuccess()
    {
        return view('posts.success');
    }

    public function buyImage($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.buy', compact('post'));
    }

    // Order

    public function buyDownload($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.download', compact('post'));
    }

}
