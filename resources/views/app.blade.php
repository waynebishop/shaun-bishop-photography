<!doctype html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	
	<title>SBP @yield('title')</title>
	<!-- Bootstrap CDN -->
	<!-- Latest compiled and minified CSS -->
	<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

	<!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/main.css" rel="stylesheet">

	@yield('stylesheets')

    @yield('scripts')


    <script type="text/javascript">
    	var baseURL = "{{ url('/') }}";
    </script>    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	@include('partials._nav')

	<div class="container">

		@yield('content')

	</div>

	@yield('footer')

	<!-- jQuery -->
    <script src="/js/jquery.js"></script>
	<!-- Custom JS -->
    <script type="text/javascript" src="/js/app.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script id="dsq-count-scr" src="//shaunbishopphotography.disqus.com/count.js" async></script>
</body>

</html>