<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'An awesome blog - Domain Requirements')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
	<style type="text/css">

		/* Sticky footer styles
		  -------------------------------------------------- */

		html,
		body {
			height: 100%;
			/* The html and body elements cannot have any padding or margin. */
		}

		/* Wrapper for page content to push down footer */
		#wrap {
			min-height: 100%;
			height: auto !important;
			height: 100%;
			margin: 0 auto;
		}

		/* Set the fixed height of the footer here */
		#footer {
			height: 60px;
			background-color: #f5f5f5;
		}
	</style>

</head>
<body>
<div id="wrap" class="container">
	@include('partials.header')
	@yield('content')
</div>
@include('partials.footer')
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
