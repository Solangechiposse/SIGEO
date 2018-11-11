<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>User Dropdown Header</title>

  <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
  <link href="{{ asset('css/header-user-dropdown.css') }}" rel="stylesheet">
  <link href="{{ asset('css/footer-distributed.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

  @section('links')
  <!-- Mais links -->
  @show

  @section('scripts')
  <!-- Mais scripts -->
  @show

  @section('style')
  <!-- Mais css -->
  @show
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>

  	$(document).ready(function(){

  		var userMenu = $('.header-user-dropdown .header-user-menu');

  		userMenu.on('touchend', function(e){

  			userMenu.addClass('show');

  			e.preventDefault();
  			e.stopPropagation();

  		});

  		// This code makes the user dropdown work on mobile devices

  		$(document).on('touchend', function(e){

  			// If the page is touched anywhere outside the user menu, close it
  			userMenu.removeClass('show');

  		});

  	});

  </script>
</head>

<body>

<header class="header-user-dropdown">

	<div class="header-limiter">
		<h1><a href="#"><span>SIGEO</span></a></h1>

	</div>

</header>

<!-- The content of the page goes here. -->

<div>
   @yield('content')
</div>

<footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p>SIGEO &copy; 2018</p>
			</div>

		</footer>

<!-- Demo ads. Please ignore and remove. -->
<script src="http://cdn.tutorialzine.com/misc/enhance/v3.js" async></script>

</body>

</html>
