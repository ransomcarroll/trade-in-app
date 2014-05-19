@extends('layouts.single')
@section('title', 'New User - GolfMundo Trade In Administration')
@section('bodyclass', 'new-user')

@section('content')
	<h1>New User</h1>
	{{ Form::open(['route'=>'users.store']) }}
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('name','Full Name') }}
			{{ Form::text('name',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('email','Email Address') }}
			{{ Form::email('email',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('password','Password') }}
			{{ Form::password('password',['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-12 col-md-12 col-sm-12">
			{{ Form::button('<span class="glyphicon glyphicon-plus"></span> Add User',['class'=>'btn btn-primary','type'=>'submit']) }}
		</div>
	{{ Form::close() }}
@stop