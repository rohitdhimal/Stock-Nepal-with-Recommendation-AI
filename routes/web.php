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

Route::post('follow/{user}', 'FollowsController@store');

Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::get('/p/{post}', 'PostsController@show')->name('profile.delete');
Route::get('/p/delete/{post}', 'PostsController@delete')->name('post.delete');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

// Route::get('/fregister', 'UserController@register')->name('fregister');
// Auth::routes();


//Admin

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function ()
{
    Route::get('/', 'HomeController@index')->name('admin_home');
    Route::get('/alluser/', 'HomeController@alluser')->name('admin.alluser');
});



