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
// 中间件
Route::get('/', 'PostsController@index')->name('index');
Route::get('/categories/{category}', 'PostsController@index')->name('category');


Route::auth();

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::put('/users/{user}', 'UsersController@ajaxUpdate')->name('users.ajaxUpdate');

