<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/signup', 'SignUpController@index');
Route::get('/signin', 'SignInController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::post('/signup', [
	'uses' => 'SignUpController@postSignUp',
	'as' => 'signup'
]);
Route::post('/signin', [
	'uses' => 'SignInController@postSignIn',
	'as' => 'signin'
]);
	
	