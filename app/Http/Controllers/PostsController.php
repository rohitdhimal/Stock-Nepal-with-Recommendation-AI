<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

    public function show(\App\Post $post)
    {
        return view('posts.show',compact('post'));
    }

    public function delete(Post $post)
    {
       
        $post->delete();
        return redirect(route('profile.show',auth()->user()->id));
    }

}
