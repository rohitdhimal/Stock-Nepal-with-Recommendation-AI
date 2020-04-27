<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome')->name('welcome');
});

Auth::routes();
//     !*!*!  Users Route !*!*!
// Followers route
Route::post('follow/{user}', 'FollowsController@store');

// Post route image
Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::get('/p/{post}', 'PostsController@show')->name('profile.delete');
Route::get('/p/delete/{post}', 'PostsController@delete')->name('post.delete');
Route::get('/p/download/{id}', 'PostsController@download')->name('download');

// Profile Controller
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

// Search Controller Home Page
Route::post('/search', 'UserController@search');

//Admin


Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function ()
{
    Route::get('/', 'AdminController@index')->name('admin_home');
    Route::get('/Dashboard', 'AdminController@index')->name('admin.home');

    // Listing in admin pannels
    Route::get('/AllUserList', 'AdminController@allUser')->name('admin.alluser');
    Route::get('/ImageList', 'AdminController@allImage')->name('admin.allimage');

    // Search, Delete, Edit User
    Route::get('admin/AllUserList/edit/{id}', 'AdminController@editUser')->name('admin.editUsers');
    Route::patch('admin/AllUserList/update/{id}', 'AdminController@updateUser')->name('admin.updateUsers');
    Route::get('admin/AllUserList', 'AdminController@searchUser')->name('search');
    Route::get('admin/AllUserList/{id}', 'AdminController@deleteUser')->name('delete');
    
    
    // Search, Delete Edit Image
    Route::get('admin/ImageList/edit/{id}', 'AdminController@editImage')->name('admin.editImages');
    Route::put('admin/ImageList/update/{id}', 'AdminController@updateImage')->name('admin.updateImages');
    Route::get('admin/ImageList', 'AdminController@searchImage')->name('admin.search');
    Route::get('ImageList/{id}', 'AdminController@deleteImage')->name('admin.delete');



});