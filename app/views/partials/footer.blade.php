<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
{{ HTML::script('/assets/js/frontend.js') }}

<p>
	<a href="http://www.cartdesigners.com" target="_TOP">&copy; Cart Designers 2013</a>
	@if(Auth::User())
		<a href="/user/logout" title="Logout of Account" class="logout">Logout</a>
	@else
		<a href="/user/login" title="Sign In To Your Account" class="login">Login</a>
	@endif
</p>
