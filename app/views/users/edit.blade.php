@extends('layouts.single')
@section('title', 'Edit User #{{$user->id}} - GolfMundo Trade In Administration')
@section('bodyclass', 'update-user')

@section('content')
	<h1>Edit Club User #{{$user->id}}</h1>
	{{ Form::model($user,['route'=>['user.update',$user->id]]) }}
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('name','User Name') }}
			{{ Form::text('name',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('password','Password') }}
			{{ Form::password('password',['class'=>'form-control']) }}
		</div>
	<div class="form-group col-lg-12 col-md-12 col-sm-12">
		{{ Form::button('<span class="glyphicon glyphicon-plus"></span> Update User',['class'=>'btn btn-primary','type'=>'submit']) }}
	</div>
	{{ Form::close() }}
@stop