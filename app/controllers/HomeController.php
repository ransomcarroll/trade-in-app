<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showDashboard()
	{
		return View::make('dashboard');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function login()
	{
		$input = [
		    'email'    => Input::get( 'email' ), // May be the username too
		    'password' => Input::get( 'password' )
		];

		if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password'])))
		{
		    return Redirect::intended('dashboard');
		}
		else
		{
			return Redirect::to('login')->withLoginNotification(['type'=>'danger','message'=>'Invalid Login Credentials']);
		}
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::to('login');
	}

}