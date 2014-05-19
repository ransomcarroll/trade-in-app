<?php

class ClubsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clubs = Club::all();

		return View::make('clubs')->withClubs($clubs);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$data = [
			'conditions' => Condition::all()->lists('name'),
			'types' => Type::all()->lists('name'),
			'brands' => Brand::all()->lists('name')
		];

		return View::make('clubs.new',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::except('_token');
		$validator = Validator::make(
		    array(
		        'type' => $input['type'],
		        'condition' => $input['condition'],
		        'brand' => $input['brand'],
		        'model' => $input['model'],
		        'shaft' => $input['shaft'],
		        'value' => $input['value'],
		        'length' => $input['length'],
		        'orientation' => $input['orientation']
		    ),
		    array(
		        'type' => 'required',
		        'condition' => 'required',
		        'brand' => 'required',
		        'model' => 'required',
		        'shaft' => 'required',
		        'value' => 'required|numeric',
		        'length' => 'required|numeric',
		        'orientation' => 'required'
		    )
		);
		if ($validator->fails())
	    {
	    	$notifications = [
	    		'notification.type'=>'danger',
	    		'notification.message'=>$validator->messages()->first()
	    	];
	        return Redirect::to('clubs/new')->with($notifications)->withInput();
	    }
		$club = new Club;
		$club->create($input);
		$notifications = [
			'notification.type'=>'success',
			'notification.message'=>'Your club was created successfully!'
		];
		return Redirect::to('clubs/new')->with($notifications);
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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