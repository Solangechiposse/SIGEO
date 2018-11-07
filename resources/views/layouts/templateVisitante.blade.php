<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SIGEO Visitante</title>

  <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
  <link href="{{ asset('css/header-fixed.css') }}" rel="stylesheet">
  <link href="{{ asset('css/footer-distributed-with-address-and-phones.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body>

  <header class="header-fixed">

  	<div class="header-limiter">

  		<h1><a href="#">Company<span>logo</span></a></h1>

  		<nav>
  			<a href="#">Home</a>
  			<a href="#" class="selected">Blog</a>
  			<a href="#">Pricing</a>
  			<a href="#">About</a>
  			<a href="#">Faq</a>
  			<a href="#">Contact</a>
  		</nav>

  	</div>

  </header>

  <!-- You need this element to prevent the content of the page from jumping up -->
  <div class="header-fixed-placeholder"></div>

<!-- The content of the page goes here. -->

<div>
   @yield('content')
</div>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Company<span>logo</span></h3>

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

				<p class="footer-company-name">Company Name &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> Paris, France</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

</body>

</html>
