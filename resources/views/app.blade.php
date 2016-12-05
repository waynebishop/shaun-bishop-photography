<!doctype html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<title>Document Title</title>
	<!-- Bootstrap CDN -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

</head>

<body>
	
	@include ('_topnav')

	<div class="container">
		
		@yield('content')

	</div>

	@yield('footer')

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	@include('_javascript')

	<!-- jQuery -->
    <script src="public/js/jquery.js"></script>


</body>

</html>