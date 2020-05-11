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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/post', 'PostController')->middleware('auth');
Route::resource('/user', 'UserController');
Route::view('group', 'groups.index')->name('group.index');
Route::view('group/show', 'groups.show')->name('group.show');
Route::view('group/create', 'groups.create')->name('group.create');