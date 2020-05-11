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

Route::prefix('user')->name('user.')->group(function() {
  Route::middleware('auth')->group(function() {
    Route::put('/follow/{user}', 'UserController@follow')->name('follow');
    Route::delete('/follow/{user}', 'UserController@unfollow')->name('unfollow');
  });
  Route::get('/followings/{user}', 'UserController@followings')->name('followings');
  Route::get('/followers/{user}', 'UserController@followers')->name('followers');
});


Route::view('group', 'groups.index')->name('group.index');
Route::view('group/show', 'groups.show')->name('group.show');
Route::view('group/create', 'groups.create')->name('group.create');