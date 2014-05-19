<?php

class BrandsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = [
			'brands' => Brand::all()
		];
		return View::make('brands')->with($data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('brands.new');
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
	        return Redirect::to('brands/new')->with($notifications)->withInput();
	    }
		$brand = new Brand;
		$brand->create($input);
		$notifications = [
			'notification.type'=>'success',
			'notification.message'=>'Brand successfully created'
		];
		return Redirect::to('brands/new')->with($notifications);
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
			'brand' => Brand::find($id)
		];

		return View::make('brands.edit')->with($data);
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
	        return Redirect::to("brands/edit/$id")->with($notifications)->withInput();
	    }
		$brand = Brand::find($id);
		$brand->update($input);
		$notifications = [
			'notification.type'=>'success',
			'notification.message'=>"Brand #$id was updated successfully!"
		];
		return Redirect::to('brands/')->with($notifications);
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