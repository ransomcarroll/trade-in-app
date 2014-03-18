@extends('layouts.single')
@section('title', 'Clubs - GolfMundo Trade In Administration')
@section('bodyclass', 'clubs')

@section('content')
	<h1>All Clubs</h1>
	<div class="table-responsive">
		<table class="table table-striped">
			<tbody>
				<thead>
					<th>Type</th>
					<th>Condition</th>
					<th>Brand</th>
					<th>Model</th>
					<th>Shaft</th>
					<th>Value</th>
					<th>Length</th>
					<th>Orientation</th>
					<th>Edit</th>
				</thead>
				@foreach($clubs as $club)
					<tr>
						<td>{{ $club->type }}</td>
						<td>{{ $club->condition }}</td>
						<td>{{ $club->brand }}</td>
						<td>{{ $club->model }}</td>
						<td>{{ $club->shaft }}</td>
						<td>{{ $club->value }}</td>
						<td>{{ $club->length }}</td>
						<td>{{ $club->orientation }}</td>
						<td><a href="/clubs/edit/{{ $club->id }}"><span class="glyphicon glyphicon-edit"></span></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop