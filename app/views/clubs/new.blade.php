@extends('layouts.single')
@section('title', 'New Club - GolfMundo Trade In Administration')
@section('bodyclass', 'new-club')

@section('content')
	<h1>New Club</h1>
	{{ Form::open(['route'=>'clubs.store','files'=>true]) }}
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('type','Club Type') }}
			{{ Form::select('type',$types,null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('condition','Condition') }}
			{{ Form::select('condition',$conditions,null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('brand','Brand') }}
			{{ Form::select('brand',$brands,null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('model','Model') }}
			{{ Form::text('model',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('shaft','Shaft Type') }}
			{{ Form::text('shaft',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('value','Trade Value') }}
			{{ Form::text('value',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('length','Club Length') }}
			{{ Form::text('length',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('orientation','Orientation (left/right)') }}
			{{ Form::select('orientation',['left','right'],null,['class'=>'form-control']) }}
		</div>

	{{ Form::button('<span class="glyphicon glyphicon-plus"></span> Add Club',['class'=>'btn btn-primary','type'=>'submit']) }}

	{{ Form::close() }}
@stop