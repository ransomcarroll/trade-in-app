@if(Session::has('notification'))
	<div class="flash-message alert alert-{{Session::get('notification.type')}}">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ Session::get('notification.message') }}
	</div>
@endif