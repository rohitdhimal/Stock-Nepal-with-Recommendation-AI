<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function register()
    // {
    //     // return view('User.fregister');

    // }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return  view(User.fregister);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    // Search

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'min:4',
        ]);
        $search = $request->get('search');
        $users = DB::table('users')->where('fname','like', '%'.$search.'%')->orwhere('lname','like', '%'.$search.'%')->get();
        $posts = DB::table('posts')->where('category','like', '%'.$search.'%')->orwhere('caption','like', '%'.$search.'%')->get();
        return view('user.searchresults', compact('posts','users','search'));
    }

    public function explore(Post $post)
    {
        $post = Post::latest()->get();
        return view('User.explore', compact('post'));
    }

    public function about()
    {
        return view('User.aboutUs');
    }

    public function lisence()
    {
        return view('User.lisence');
    }


}
