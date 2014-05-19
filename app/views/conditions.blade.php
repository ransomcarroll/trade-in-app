@extends('layouts.single')
@section('title', 'Club Conditions - GolfMundo Trade In Administration')
@section('bodyclass', 'conditions')

@section('content')
	<h1>All Club Conditions</h1>
	<div class="table-responsive">
		<table class="table table-striped">
			<tbody>
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>Edit</th>
				</thead>
				@foreach($conditions as $condition)
					<tr>
						<td>{{ $condition->id }} </td>
						<td>{{ $condition->name }}</td>
						<td><a href="/conditions/edit/{{ $condition->id }}"><span class="glyphicon glyphicon-edit"></span></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop