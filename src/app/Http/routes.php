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

Route::get('/', 'WelcomeController@index');
Route::post('/login','RegisterConttroller@register_user');
Route::post('/register','RegisterConttroller@register_user');
Route::get('/dashboard', 'HomeController@index');
Route::get('/college','CollegeController@index');
Route::get('/course','CourseController@index');
Route::get('/dashboard','HomeController@index');
Route::get('/forum','ForumController@index');
Route::get('/ambassador','AmbassadorController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);