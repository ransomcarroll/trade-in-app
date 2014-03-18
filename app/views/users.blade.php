@extends('layouts.single')
@section('title', 'Users - GolfMundo Trade In Administration')
@section('bodyclass', 'users')

@section('content')
	<h1>All Users</h1>
	<div class="table-responsive">
		<table class="table table-striped">
			<tbody>
				<thead>
					<th>Name</th>
					<th>Email</th>
					<th>Edit</th>
				</thead>
				@foreach($users as $user)
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td><a href="/users/edit/{{ $user->id }}"><span class="glyphicon glyphicon-edit"></span></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop