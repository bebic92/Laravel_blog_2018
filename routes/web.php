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

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'PostsController@createComment');

//Auth routes

Route::get('/register','AuthController@showRegisterPage');

Route::post('/register','AuthController@createUser');

Route::get('/login', 'AuthController@showLoginPage');

Route::post('/login', 'AuthController@loginUser');

Route::get('/logout', 'AuthController@logoutUser');

//Tag routes

Route::get('/posts/tags/{tag}', 'TagsController@index');
