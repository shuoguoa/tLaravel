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

//Route::get('login/getInfo', 'admin\LoginController@getInfo');


// 登录退出
Route::get('/login', 'Auth\LoginController@showLoginForm');
//Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
