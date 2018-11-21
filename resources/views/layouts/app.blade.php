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
		<h1><a href="">Orfanato<span>Primeiro De Maio</span></a></h1>

		<nav>
			<a href="{{url('doacoes')}}">Doacoes</a>
			<a href="">Publicacao</a>
			<a href="#">Funcionarios</a>
			<a href="{{url('/secretaria/visitas')}}">Visitas</a>
		</nav>


		<div class="header-user-menu">
      @guest
      @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
        @endguest
		</div>

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
					<a href="#">Doacoes</a>
					.
					<a href="#">Publicacao</a>
					.
					<a href="#">Funcionarios</a>
					.
					<a href="#">Visitas</a>
				</p>

				<p>Primeiro de Maio &copy; 2018</p>
			</div>

		</footer>

<!-- Demo ads. Please ignore and remove. -->
<script src="http://cdn.tutorialzine.com/misc/enhance/v3.js" async></script>

</body>

</html>
