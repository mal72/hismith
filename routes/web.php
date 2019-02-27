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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('books', 'Admin\BookController')->except(['show','destroy'])->middleware('auth');

Route::resource('users', 'Admin\UserController')->except(['show','destroy'])->middleware('auth');
