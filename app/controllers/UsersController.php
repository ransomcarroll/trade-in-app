<?php

class UsersController extends \BaseController {

	public function index()
	{
		$users = User::all();

		return View::make('users')->withUsers($users);
	}

}