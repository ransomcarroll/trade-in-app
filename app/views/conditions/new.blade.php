@extends('layouts.single')
@section('title', 'New Condition - GolfMundo Trade In Administration')
@section('bodyclass', 'new-condition')

@section('content')
	<h1>New Club Condition</h1>
	{{ Form::open(['route'=>'condition.store']) }}
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('name','Condition Name') }}
			{{ Form::text('name',null,['class'=>'form-control']) }}
		</div>
		<div class="form-group col-lg-12 col-md-12 col-sm-12">
			{{ Form::button('<span class="glyphicon glyphicon-plus"></span> Add Condition',['class'=>'btn btn-primary','type'=>'submit']) }}
		</div>
	{{ Form::close() }}
@stop