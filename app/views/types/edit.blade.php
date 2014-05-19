@extends('layouts.single')
@section('title', 'Edit Type #{{$type->id}} - GolfMundo Trade In Administration')
@section('bodyclass', 'update-type')

@section('content')
	<h1>Edit Club Type #{{$type->id}}</h1>
	{{ Form::model($type,['route'=>['type.update',$type->id]]) }}
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('name','Type Name') }}
			{{ Form::text('name',null,['class'=>'form-control']) }}
		</div>
	<div class="form-group col-lg-12 col-md-12 col-sm-12">
		{{ Form::button('<span class="glyphicon glyphicon-plus"></span> Update Type',['class'=>'btn btn-primary','type'=>'submit']) }}
	</div>
	{{ Form::close() }}
@stop