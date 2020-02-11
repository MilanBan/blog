<?php

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
    return view('welcome'); 
});

Route::get('/posts', ['as' => 'all-posts', 'uses' => 'PostController@index']);

Route::get('/posts/create', 'PostController@create');
Route::post('/posts', ['as' => 'store-post', 'uses' => 'PostController@store']);


Route::get('/posts/tags/{tag}', 'TagController@index');
Route::get('/posts/{id}', ['as' => 'single-post', 'uses' => 'PostController@show']);

Route::post('/posts/{id}/comments', ['as' => 'comment-post', 'uses' => 'CommentController@store']);

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store')->middleware('age');

Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::get('/users/{id}', 'UserController@show');

Route::get('/send/mail', 'PostController@mail');   //prinudno post controller