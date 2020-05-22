<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Post;

class ProfilesController extends Controller
{
    public function index(User $user)
    {

        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        $postCount = Cache::remember(
            'count.posts.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return $user->posts->count();
            });

        $followersCount = Cache::remember(
            'count.followers.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return $user->profile->followers->count();
            });

        $followingCount = Cache::remember(
            'count.following.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return $user->following->count();
            });

        $sellCount = Cache::remember(
            'count.sell.' . $user->status='1',
            now()->addSeconds(30),
            function () use ($user) {
                return $user->posts->count();
            });

        return view('profiles.index',compact('user',  'follows', 'postCount', 'followersCount', 'followingCount', 'sellCount' ));

    }
    
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update',$user->profile);

        $data = request()->validate([
            'phoneno' => '',
            'address' => 'required',
            'interest' => 'required',
            'gender' => '',
            'image' => '',
        ]);
        
        
        if (request('image')){
            $imagePath = request('image')->store('profile','public');
    
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
            $imageArray = ['image' => $imagePath];
           }
        //    dd($data);
            auth()->user()->profile->update(array_merge(
                $data,
                $imageArray ?? []
           ) );
        
        return redirect("/profile/{$user->id}");

    }

    public function sellLists()
    {
        $posts = Post::where('status',1)->get();
        return view('profiles.sellListed',compact('posts'));
    }
}
