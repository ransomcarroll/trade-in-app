<!doctype html>
<html lang='en'>
<head>
	@include('partials.html-header')
</head>

<body class='@yield('bodyclass')' id="master">
<div class="container">
	<header class="row">
		<div class="col-lg-12">
			@include('partials.nav')
		</div>
	</header>
	<div class="row">
		<section class="col-lg-12">
			@if (Session::has('notification'))
				<?php $alertType = Session::get('notification.type'); ?>
				<div class="flash-message alert alert-{{$alertType}} alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					{{ Session::get('notification.message') }}
				</div>
			@endif

			@yield('content')
		</section>
	</div>
	<footer>
		@include('partials.footer')
		@yield('footer-scripts')
	</footer>
</div>
</body>
</html>