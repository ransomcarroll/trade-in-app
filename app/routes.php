<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('login', ['as'=>'login','uses'=>'HomeController@showLogin']);
Route::get('logout', ['as'=>'logout','uses'=>'HomeController@logout']);
Route::post('login', ['as'=>'do_login','uses'=>'HomeController@login']);

Route::group(array('before' => 'auth'), function()
{
	Route::get('dashboard','HomeController@showDashboard');
	Route::get('users','UsersController@index');
	Route::get('clubs','ClubsController@index');
	Route::get('clubs/new','ClubsController@create');

});