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
    return view('home');
})->name('home');

Route::resource('/post', 'PostController');
// Route::resource('/user', 'UserController');
Route::view('user/edit', 'users.edit')->name('user.edit');
Route::view('user/show', 'users.show')->name('user.show'); 
Route::view('group', 'groups.index')->name('group.index');
Route::view('group/show', 'groups.show')->name('group.show');
Route::view('group/create', 'groups.create')->name('group.create');