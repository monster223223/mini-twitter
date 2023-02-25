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

Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::resource('/tweets', 'TweetController');
Route::resource('/follows', 'FollowController');
Route::resource('/timelines', 'TimelineController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('{locale}', 'LocalizationController@index');

