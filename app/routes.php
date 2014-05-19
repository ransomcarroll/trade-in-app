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
	Route::get('users/new','UsersController@create');
	Route::post('users/new',['as'=>'user.store','uses'=>'UsersController@store','before'=>'csrf']);
	Route::get('users/edit/{user_id}',['as'=>'user.edit','uses'=>'UsersController@edit']);
	Route::post('users/edit/{user_id}',['as'=>'user.update','uses'=>'UsersController@update','before'=>'csrf']);

	Route::get('clubs','ClubsController@index');
	Route::get('clubs/new','ClubsController@create');
	Route::post('clubs/new',['as'=>'club.store','uses'=>'ClubsController@store','before'=>'csrf']);
	Route::get('clubs/edit/{club_id}',['as'=>'club.edit','uses'=>'ClubsController@edit']);
	Route::post('clubs/edit/{club_id}',['as'=>'club.update','uses'=>'ClubsController@update','before'=>'csrf']);

	Route::get('types','TypesController@index');
	Route::get('types/new','TypesController@create');
	Route::post('types/new',['as'=>'type.store','uses'=>'TypesController@store','before'=>'csrf']);
	Route::get('types/edit/{type_id}',['as'=>'type.edit','uses'=>'TypesController@edit']);
	Route::post('types/edit/{type_id}',['as'=>'type.update','uses'=>'TypesController@update','before'=>'csrf']);

	Route::get('brands','BrandsController@index');
	Route::get('brands/new','BrandsController@create');
	Route::post('brands/new',['as'=>'brand.store','uses'=>'BrandsController@store','before'=>'csrf']);
	Route::get('brands/edit/{brand_id}',['as'=>'brand.edit','uses'=>'BrandsController@edit']);
	Route::post('brands/edit/{brand_id}',['as'=>'brand.update','uses'=>'BrandsController@update','before'=>'csrf']);

	Route::get('conditions','ConditionsController@index');
	Route::get('conditions/new','ConditionsController@create');
	Route::post('conditions/new',['as'=>'condition.store','uses'=>'ConditionsController@store','before'=>'csrf']);
	Route::get('conditions/edit/{condition_id}',['as'=>'condition.edit','uses'=>'ConditionsController@edit']);
	Route::post('conditions/edit/{condition_id}',['as'=>'condition.update','uses'=>'ConditionsController@update','before'=>'csrf']);

});