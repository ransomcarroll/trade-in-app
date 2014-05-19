<!doctype html>
<html lang='en'>
<head>
	@include('partials.html-header')
</head>

<body class='@yield('bodyclass')' id="master">
<div class="comtainer">
	<header class="row">
		<div class="col-lg-12">
			@include('partials.nav')
		</div>
	</header>
	<div class="row">
		<aside class="col-lg-4">
			[side navigation]
		</aside>
		<section class="col-md-8">
			@include('partials.notifications')
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