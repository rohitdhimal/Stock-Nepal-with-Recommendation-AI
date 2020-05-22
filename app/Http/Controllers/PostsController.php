<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;


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
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'category' => 'required',
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagePath}"));
        $image->save();
        
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'category' => $data['category'],
            'image' => $imagePath,
        ]);

        return redirect('/profile/' . auth()->user()->id)->with('message','Image uploaded successfully');
    }

    public function show(Post $post)
    {
        // $post = Post::all();
        // return $post;
        return view('posts.show',compact('post'));
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

    // public function sold()
    // {
    //     $posts->users()->attach(Auth()->user()->id);
    //     return redirect()->back()->with('message','This Image has been listed');
    // }

    public function buyImage($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.buy', compact('post'));
    }

}
