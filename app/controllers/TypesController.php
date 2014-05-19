<?php

class TypesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [
			'types' => Type::all()
		];
		return View::make('types')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('types.new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::except('_token');
		$orientations = ['left','right'];
		$validator = Validator::make(
		    array(
		        'name' => $input['name']
		    ),
		    array(
		        'name' => 'required'
		    )
		);
		if ($validator->fails())
	    {
	    	$notifications = [
	    		'notification.type'=>'danger',
	    		'notification.message'=>$validator->messages()->first()
	    	];
	        return Redirect::to('types/new')->with($notifications)->withInput();
	    }
		$type = new Type;
		$type->create($input);
		$notifications = [
			'notification.type'=>'success',
			'notification.message'=>'Type successfully created'
		];
		return Redirect::to('types/new')->with($notifications);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
			'type' => Type::find($id)
		];

		return View::make('types.edit')->with($data);
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
		        'name' => $input['name']
		    ),
		    array(
		        'name' => 'required'
		    )
		);
		if ($validator->fails())
	    {
	    	$notifications = [
	    		'notification.type'=>'danger',
	    		'notification.message'=>$validator->messages()->first()
	    	];
	        return Redirect::to("types/edit/$id")->with($notifications)->withInput();
	    }
		$type = Type::find($id);
		$type->update($input);
		$notifications = [
			'notification.type'=>'success',
			'notification.message'=>"Type #$id was updated successfully!"
		];
		return Redirect::to('types/')->with($notifications);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}