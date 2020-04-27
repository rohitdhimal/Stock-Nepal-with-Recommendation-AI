<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Profile;
use DB;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // 
    }

    public function allUser()
    {
        $users = User::all();
        return view('admin.allusers')->with('users',$users);
    }

    public function allImage()
    {
        $posts = Post::all();
        return view('admin.allimage')->with('posts',$posts);
    }

    // User Search
    public function searchUser(Request $request)
    {
        $search = $request->input('search');
        $users = User::where('fname','like', '%'.$search.'%')->orwhere('lname','like', '%'.$search.'%')->get();
        return view('admin.allUsers')->with('users',$users);
    }

    // User Delete
    public function deleteUser($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->back();
    }


    // Image Search
    public function searchImage(Request $request)
    {
        $search = $request->input('search');
        $posts = Post::where('caption','like', '%'.$search.'%')->orwhere('category','like', '%'.$search.'%')->get();
        return view('admin.allImage')->with('posts',$posts);
    }
    
    // Image Delete
    public function deleteImage($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
        return redirect()->back();
    }

    // Edit and Update Image info

    public function editImage($id)
    {
        $posts = Post::findOrFail($id);
        return view('admin.editImage')->with('posts', $posts);
    }

    public function updateImage(Request $request, $id)
    {
        $updatePosts = Post::findOrFail($id);
        $updatePosts->caption = $request->input('caption');
        $updatePosts->category = $request->input('category');
        $updatePosts->update();
        
        $posts = Post::all();
        return view('admin.allImage',compact('posts'));
    }

    // Edit and update user info

    public function editUser($id)
    {
        $users = User::findOrFail($id);
        return view('admin.editUser')->with('users', $users);
    }

    public function updateUser(Request $request, $id)
    {
        $updateUsers = User::findOrFail($id);
        $updateProfile = Profile::findOrFail($id);
        $updateUsers->fname = $request->input('fname');
        $updateUsers->lname = $request->input('lname');
        $updateUsers->email = $request->input('email');
        $updateProfile->address = $request->input('address');
        $updateProfile->phoneno = $request->input('phoneno');
        $updateProfile->gender = $request->input('gender');
        $updateUsers->update();
        $updateProfile->update();
        
        $users = user::all();
        $profiles = Profile::all();
        return view('admin.allUsers',compact('users','profiles'));
    }




}
