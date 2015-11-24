<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
	@yield('titleblock', '<title>Grace Admin Template</title>')
	<!-- start: META -->
	<meta charset="utf-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	@yield('matablock')

	@include('partials.cssheader')
	@yield('pagecss')
	@include('partials.jsheader')
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body @yield('bodyschema')>
	@include('partials.mainheader')
	<!-- start: MAIN CONTAINER -->
	<div class="main-container">
		<div class="navbar-content">
			@include('partials.sidebar')
		</div>
		<!-- start: PAGE -->
		<div class="main-content">
			@include('partials.configmodal')
			<div class="container">
				@include('partials.pageheader')
				<!-- start: PAGE CONTENT -->
				@yield('main-content')
				<!-- end: PAGE CONTENT-->
			</div>
		</div>
		<!-- end: PAGE -->
	</div>
	<!-- end: MAIN CONTAINER -->
	@include('partials.scripts')
	@yield('scripts')
	@yield('footer-scripts')
	<script>
		jQuery(document).ready(function() {
		Main.init();
	});
	$(".pulse2").pulsate({color:"#09f"})
</script>
</body>
<!-- end: BODY -->
</html>