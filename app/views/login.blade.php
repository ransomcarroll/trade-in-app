@extends('layouts.single')
@section('title', 'Login - GolfMundo Trade In Administration')
@section('bodyclass', 'home')

@section('content')
	{{ Form::open(['role'=>'form','class'=>'form-signin']) }}
		<h2 class="form-signin-heading">Please sign in</h2>
		@if (Session::has('login_notification'))
			<?php $alertType = Session::get('login_notification.type'); ?>
			<div class="flash-message alert alert-{{$alertType}} alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ Session::get('login_notification.message') }}
			</div>
		@endif
		<div class="form-group">
			{{ Form::email('email', null, ['placeholder'=>'Email address', 'required','autofocus','class'=>'form-control']) }}
			{{ Form::password('password',['placeholder'=>'Password','required','class'=>'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::button('Sign in <span class="glyphicon glyphicon-log-in"></span>',['class'=>'btn btn-lg btn-primary btn-block','type'=>'submit'])}}
		</div>
	{{ Form::close() }}
@stop