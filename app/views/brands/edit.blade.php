@extends('layouts.single')
@section('title', 'Edit Brand #{{$brand->id}} - GolfMundo Trade In Administration')
@section('bodyclass', 'update-brand')

@section('content')
	<h1>Edit Club Brand #{{$brand->id}}</h1>
	{{ Form::model($brand,['route'=>['brand.update',$brand->id]]) }}
		<div class="form-group col-lg-4 col-md-4 col-sm-6">
			{{ Form::label('name','Brand Name') }}
			{{ Form::text('name',null,['class'=>'form-control']) }}
		</div>
	<div class="form-group col-lg-12 col-md-12 col-sm-12">
		{{ Form::button('<span class="glyphicon glyphicon-plus"></span> Update Brand',['class'=>'btn btn-primary','type'=>'submit']) }}
	</div>
	{{ Form::close() }}
@stop