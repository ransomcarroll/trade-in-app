@extends('layouts.single')
@section('title', 'Club Brands - GolfMundo Trade In Administration')
@section('bodyclass', 'brands')

@section('content')
	<h1>All Club Brands</h1>
	<div class="table-responsive">
		<table class="table table-striped">
			<tbody>
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Edit</th>
				</thead>
				@foreach($brands as $brand)
					<tr>
						<td>{{ $brand->id }} </td>
						<td>{{ $brand->name }}</td>
						<td><a href="/brands/edit/{{ $brand->id }}"><span class="glyphicon glyphicon-edit"></span></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop