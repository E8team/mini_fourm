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
Route::middleware('auth')->get('/', function () {
    echo '这里是首页 ' . Auth::user()->username . ' 欢迎👏👏登录<br>';

    echo '<form action="' . route('logout') . '" method="post">' .
        csrf_field() . '<input type="submit" value="退出登录"></form>';
});


Route::auth();

Route::get('/posts/{post}', 'PostsController@show');
