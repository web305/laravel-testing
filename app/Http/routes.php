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
Route::get('/', [
	'uses' => 'HomeController@index',
	'as' => 'home'
]);
Route::get('/signup', [
	'uses' => 'SignUpController@index',
	'as' => 'signup'
]);
Route::get('/signin', [
	'uses' => 'SignInController@index',
	'as' => 'signin'
]);
Route::post('/signup', [
	'uses' => 'SignUpController@postSignUp',
	'as' => 'signup'
]);
Route::post('/signin', [
	'uses' => 'SignInController@postSignIn',
	'as' => 'signin'
]);
Route::get('/dashboard', [
	'uses' => 'DashboardController@index',
	'as' => 'dashboard',
	'middleware' => 'auth'
]);
	