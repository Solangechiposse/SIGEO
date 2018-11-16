<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Pagina inicial</title>

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
  			<a href="#" class="selected">Eventos</a>
  			<a href="#">Visitas</a>
  			<a href="#">Galeria</a>
  			<a href="#">Sobre nos</a>
  			<a href="#">Contacto</a>
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
					<a href="#">Eventos</a>
					·
					<a href="#">Visitas</a>
					·
					<a href="#">Galeria</a>
					·
					<a href="#">Sobre nos</a>
					·
					<a href="#">Contacto</a>
				</p>

				<p class="footer-company-name">Primeiro de Maio &copy; 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Av. Julius Nyerere</span> Maputi, Mocambique</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+258 84 2582019</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="betolas:support@company.com">primeirodemaio@orfanato.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Sobre o orfanato</span>
					O Orfanato Primeiro de Maio nao descansa sem o bem garantir das criancas desamparadas. Juntos em prol de um mundo melhor!
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
