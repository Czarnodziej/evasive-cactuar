<div id="gora-kontener">
 <nav id="topbar">
	<span id="logo">
	 <a href="{{ URL::route('home') }}"><i class="icon-fixed-width icon-home"></i>SuperLogo</a></span>
	 <a href="{{ URL::route('article.list') }}">Teksty</a>
	 <a href="{{ URL::route('page', 'javascript') }}">Javascript</a>
	 <a href="{{ URL::route('page', 'autor') }}">Autor</a>
 </nav>
</div>
<div id="main-container">
	<nav id="lewa-kolumna">
	 <ul id="sidenav">
		<li>
		 <a href="{{ URL::route('article.list') }}"><i class="icon-fixed-width icon-book"></i>Teksty dowolne</a>
	 </li>
	 <li id="rozwin">
		 <a href="{{ URL::route('page', 'javascript') }}"><i class="icon-fixed-width icon-magic"></i>Javascript</a>
		 <a href="{{ URL::route('page', 'javascript') }}">"Czysty" Javascript</a>
		 <a href="{{ URL::route('page', 'javascript') }}">jQuery</a>
	 </li>
	 <li>
		 <a href="{{ URL::route('page', 'autor') }}"><i class="icon-fixed-width icon-thumbs-up"></i>Autorskie opisy</a>
	 </li>
 </ul>
 <div class="social">
	<a href="https://www.facebook.com/marcin.marcinowy.5">
	 <span class="fb"></span>
 </a>
 <a href="https://twitter.com/Czarnodziej">
	 <span class="tw"></span>
 </a>
 <a href="{{ URL::route('page', 'kontakt') }}">
	 <span class="mail"></span>
 </a>
 <a href="https://github.com/Czarnodziej">
	 <span class="gh"></span>
 </a>

 <a href="http://laravel.com"><img src="{{ asset('assets/img/laravel.png') }}" alt="laravel logo"></a>
</div>

</nav>
<article class="clearfix"><!--żeby float zachowywał wysokość kontenera-->
<!--content start-->
