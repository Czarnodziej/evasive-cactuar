<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,
	user-scalable=no">
	<title>Wesoła wycieczka w treść</title>
	@section('head')
	<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
	<script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
	@show
</head>
<body>
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
						<a href="{{ URL::route('javascript') }}">"Czysty" Javascript</a>
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
					<a href="http://laravel.com">
						<img src="{{ asset('assets/img/laravel.png') }}" alt="laravel logo">
					</a>
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
						<a href="//github.com/Czarnodziej/evasive-cactuar/commits/master">@include('addons.date_mod')</a></p>
				</footer>
				@show
		</div>
	@section('bottom_scripts')
	<!--[if lt IE 9]>
	<script src="{{ asset('js/vendor/respond.min.js') }}" type="text/javascript"></script>
	<![endif]-->
	<script defer async src="{{ asset('assets/js/script.min.js') }}"></script>
	@show
</body>
</html>