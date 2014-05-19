<?php

class ConditionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [
			'conditions' => Condition::all()
		];
		return View::make('conditions')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('conditions.new');
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
	        return Redirect::to('conditions/new')->with($notifications)->withInput();
	    }
		$condition = new Condition;
		$condition->create($input);
		$notifications = [
			'notification.type'=>'success',
			'notification.message'=>'Condition successfully created'
		];
		return Redirect::to('conditions/new')->with($notifications);
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
			'condition' => Condition::find($id)
		];

		return View::make('conditions.edit')->with($data);
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
	        return Redirect::to("conditions/edit/$id")->with($notifications)->withInput();
	    }
		$condition = Condition::find($id);
		$condition->update($input);
		$notifications = [
			'notification.type'=>'success',
			'notification.message'=>"Condition #$id was updated successfully!"
		];
		return Redirect::to('conditions/')->with($notifications);
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