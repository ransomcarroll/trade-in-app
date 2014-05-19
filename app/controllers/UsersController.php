<?php

class UsersController extends \BaseController {

	public function index()
	{
		$users = User::all();

		return View::make('users')->withUsers($users);
	}

	public function create()
	{
		return View::make('users.new');
	}

	public function store()
	{
		$input = Input::except('_token');
		$validator = Validator::make(
		    array(
		        'name' => $input['name'],
		        'email' => $input['email'],
		        'password' => $input['password']
		    ),
		    array(
		        'name' => 'required|alpha',
		        'email' => 'required|email|unique:users',
		        'password' => 'required|between:5,24'
		    )
		);
		if ($validator->fails())
	    {
	    	$notifications = [
	    		'notification.type'=>'danger',
	    		'notification.message'=>$validator->messages()->first()
	    	];
	        return Redirect::to('users/new')->with($notifications)->withInput();
	    }
		$club = new User;
		$club->create($input);
		$notifications = [
			'notification.type'=>'success',
			'notification.message'=>'User created successfully!'
		];
		return Redirect::to('users/new')->with($notifications);
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$data = [
			'user' => User::find($id)
		];

		return View::make('users.edit')->with($data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::except('_token');
		$validator = Validator::make(
		    array(
		        'name' => $input['name'],
		        'password' => $input['password']
		    ),
		    array(
		        'name' => 'required|alpha',
		        'password' => 'required|between:5,24'
		    )
		);
		if ($validator->fails())
	    {
	    	$notifications = [
	    		'notification.type'=>'danger',
	    		'notification.message'=>$validator->messages()->first()
	    	];
	        return Redirect::to("users/edit/$id")->with($notifications)->withInput();
	    }
		$user = User::find($id);
		$user->update($input);
		$notifications = [
			'notification.type'=>'success',
			'notification.message'=>"User #$id was updated successfully!"
		];
		return Redirect::to('users/')->with($notifications)->withUser(User::find($id));
	}
}