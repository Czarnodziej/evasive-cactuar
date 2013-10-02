<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,
	user-scalable=no">
	<meta name="description" content="Wojaże związane z tworzeniem stron internetowych, źródłowo udokumentowane oraz zabawnie podane. Tego drugiego nie jestem pewien.">
	<meta name="keywords" content="web design, web development, humor, portfolio, php, laravel, cakephp, jquery" />
	<title>Wesoła wycieczka w treść - praktyczny Web Developing.</title>
	@section('head')
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext' rel='stylesheet'>
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<!--[if lt IE 9]>
    <link rel="stylesheet" href="{{ asset('assets/css/style-ie8.css') }}">
  <![endif]-->
  <!--[if lt IE 8]>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-ie7.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-ie7.css') }}">
  <![endif]-->
  <!--[if lt IE 7]>
    <link rel="stylesheet" href="{{ asset('assets/css/style-ie6.css') }}">
  <![endif]-->
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	<script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
	@show
</head>
<body>
<!--[if lt IE 8]>
  <p class="chromeframe">Używasz <strong>prehistorycznej</strong> przeglądarki, co stwarza <strong>realne zagrożenie dla Ciebie </strong> i wszystkich informacji jakie zamieszczasz w sieci.
  Ochoczo zalecam <a href="http://browsehappy.com/">aktualizację</a>
  lub <a href="http://www.google.com/chromeframe/?redirect=true">aktywację Google Chrome Frame</a>.
  Aktualna przeglądarka to podstawa prawidłowego wyświetlania stron i bezpiecznego korzystania z internetu.</p>
<![endif]-->
  @section('topbar_nav')
  <div id="gora-kontener">
  	<nav id="topbar">
  		<span id="logo">
  			<a href="{{ URL::route('home') }}"><i class="icon-fixed-width icon-home"></i>SuperLogo</a>
  			@if (Sentry::check())
  			<span>
  				<a href="{{ URL::route('admin.articles.index') }}"><i></i> Artykuły</a>
  				<a href="{{ URL::route('admin.logout') }}"><i></i> Wyloguj</a>
  			</span>
  			@endif
  		</span>
  		<a href="{{ URL::route('article.list') }}">Teksty</a>
  		<a href="{{ URL::route('javascript') }}">Javascript</a>
  		<a href="{{ URL::route('autor') }}">Autor</a>
  	</nav>
  </div>
  @show
  <div id="main-container">
  	@section('sidebar_nav')
  	<nav id="lewa-kolumna">
  		<ul id="sidenav">
  			<li>
  				<a href="{{ URL::route('article.list') }}"><i class="icon-fixed-width icon-book"></i>Teksty dowolne</a>
  			</li>
  			<li id="rozwin">
  				<a href="{{ URL::route('javascript') }}"><i class="icon-fixed-width icon-magic"></i>Javascript</a>
  				<a href="{{ URL::route('javascript') }}">Czysty JavaScript</a>
  				<a href="{{ URL::route('javascript') }}">jQuery</a>
  			</li>
  			<li>
  				<a href="{{ URL::route('autor') }}"><i class="icon-fixed-width icon-thumbs-up"></i>Autorskie opisy</a>
  			</li>
  		</ul>
  		<div class="social">
  			<a href="https://www.facebook.com/marcin.marcinowy.5">
  				<span class="fb"></span>
  			</a>
  			<a href="https://twitter.com/Czarnodziej">
  				<span class="tw"></span>
  			</a>
  			<a href="{{ URL::route('kontakt') }}">
  				<span class="mail"></span>
  			</a>
  			<a href="https://github.com/Czarnodziej">
  				<span class="gh"></span>
  			</a>
  			<p>
  				<a href="http://laravel.com">
  					<img src="{{ asset('assets/img/laravel.png') }}" alt="laravel logo">
  				</a>
  			</p>
  		</div>
  	</nav>
  	@show
  	<article class="clearfix"><!--żeby float zachowywał wysokość kontenera-->
  		<!--content start-->
  		@yield('main_content')
  	</article>
  	@section('footer')
  	<footer id="stopka-strony">
  		<div class="social">
  			<a href="https://www.facebook.com/marcin.marcinowy.5">
  				<span class="fb"></span>
  			</a>
  			<a href="https://twitter.com/Czarnodziej">
  				<span class="tw"></span>
  			</a>
  			<a href="{{ URL::route('kontakt') }}">
  				<span class="mail"></span>
  			</a>
  			<a href="https://github.com/Czarnodziej">
  				<span class="gh"></span>
  			</a>
  		</div>
  		<p>©2013. Kopiowanie treści tekstów zawartych na stronie bez zgody autora jest czynem karygodnym.<br>
  			<a href="//github.com/Czarnodziej/evasive-cactuar/commits/master">Ostatnia modyfikacja: {{daty::dateMod("l j f Y", daty::get_page_mod_time())}}</a></p>
  		</footer>
  		@show
  	</div>
  	@section('bottom_scripts')
	<!--[if lt IE 9]>
	<script src="{{ asset('assets/js/vendor/respond.min.js') }}"></script>
	<![endif]-->
	<script src="{{ asset('assets/js/script.min.js') }}"></script>
	@show
</body>
</html>