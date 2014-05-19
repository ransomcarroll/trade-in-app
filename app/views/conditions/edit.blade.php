@extends('layouts.single')
@section('title', 'Edit Condition #{{$condition->id}} - GolfMundo Trade In Administration')
@section('bodyclass', 'update-condition')

@section('content')
	<h1>Edit Club Condition #{{$condition->id}}</h1>
	{{ Form::model($condition,['route'=>['condition.update',$condition->id]]) }}
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('name','Condition Name') }}
			{{ Form::text('name',null,['class'=>'form-control']) }}
		</div>
	<div class="form-group col-lg-12 col-md-12 col-sm-12">
		{{ Form::button('<span class="glyphicon glyphicon-plus"></span> Update Condition',['class'=>'btn btn-primary','type'=>'submit']) }}
	</div>
	{{ Form::close() }}
@stop