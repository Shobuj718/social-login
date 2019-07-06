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
Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/{provider}/callback', 'SocialController@Callback');

/* 
	for login using twitter   start
	commnet  this route
	Route::get('login/{provider}/callback', 'SocialController@Callback');

*/

Route::get('login/twitter', 'TwitterLoginController@twitterRedirect');
Route::get('login/twitter/callback', 'TwitterLoginController@TwitterCallback');

/* 
	for login using twitter   end
*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

