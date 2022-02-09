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
    return view('top');
})->name('top');

Route::get('/user/register', function () {
    return view('user.register');
});

Route::get('/user/login', function () {
    return view('user.login');
});

Route::post('/user/register', 'UserController@register');
Route::post('/user/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');

Route::get('/user/home', function () {
    return view('user.home');
})->name('userhome');