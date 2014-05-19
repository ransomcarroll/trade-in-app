@extends('layouts.single')
@section('title', 'Edit Club #{{$club->id}} - GolfMundo Trade In Administration')
@section('bodyclass', 'new-club')

@section('content')
	<h1>Edit Club #{{$club->id}}</h1>
	{{ Form::model($club,['route'=>['club.update',$club->id],'files'=>true]) }}
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

	<div class="form-group col-lg-12 col-md-12 col-sm-12">
		{{ Form::button('<span class="glyphicon glyphicon-plus"></span> Update Club',['class'=>'btn btn-primary','type'=>'submit']) }}
	</div>
	{{ Form::close() }}
@stop