@extends('layouts.single')
@section('title', 'New Type - GolfMundo Trade In Administration')
@section('bodyclass', 'new-type')

@section('content')
	<h1>New Club Type</h1>
	{{ Form::open(['route'=>'type.store']) }}
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('name','Type Name') }}
			{{ Form::text('name',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-12 col-md-12 col-sm-12">
			{{ Form::button('<span class="glyphicon glyphicon-plus"></span> Add Type',['class'=>'btn btn-primary','type'=>'submit']) }}
		</div>
	{{ Form::close() }}
@stop