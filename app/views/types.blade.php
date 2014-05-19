@extends('layouts.single')
@section('title', 'Club Types - GolfMundo Trade In Administration')
@section('bodyclass', 'types')

@section('content')
	<h1>All Club Types</h1>
	<div class="table-responsive">
		<table class="table table-striped">
			<tbody>
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Edit</th>
				</thead>
				@foreach($types as $type)
					<tr>
						<td>{{ $type->id }} </td>
						<td>{{ $type->name }}</td>
						<td><a href="/types/edit/{{ $type->id }}"><span class="glyphicon glyphicon-edit"></span></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop