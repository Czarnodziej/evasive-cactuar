@extends('layouts.base')
@section('main_content')
<header>
	<h1>Wspaniały tytuł strony.</h1>
</header>
<p>
	<a href="#">
		<img class="obrazek" src="{{ asset('assets/img/1min.png') }}" alt="randomowy obrazek kunsztownie wykonany w paincie">
	</a>
</p>
<p>Strona ma charakter rozwojowy. Co oznacza tyle, że jest tu mało zawartości, a docelowo będzie więcej. Dodatkowo znaczy to też, że do świetnego wyświetlania strony niezbędna jest aktualna przeglądarka internetowa.
</p>
Plany w kolejności chronologicznej:
<ul class="icons-ul">
	<li><i class="icon-li icon-screenshot icon-large"></i>Wykorzystanie Javascript do stworzenia prostej gry przeglądarkowej</li>
	<li><i class="icon-li icon-screenshot icon-large"></i>Wielce użyteczne formularze z wykorzystaniem AJAX</li>
	<li><i class="icon-li icon-screenshot icon-large"></i>Kilka artykułów nt. technologii internetowo-komputerowych z naciskiem na dostępność dla zwykłych użytkowników</li>
</ul>
<p>Wszystkie powyższe założenia będą wdrażane z zachowaniem wysokiej przejrzystości strony i dostępności zawartych tutaj informacji. Idąc rozwojowym torem, powyższych celów będzie więcej, bo apetyt na ów rozwój rośnie wraz z ilością poznawanych technologii<span class="hide-ie6"> (<i class="icon-food icon-large"></i> + <i class="icon-cogs icon-large"></i> = <i class="icon-smile icon-large"></i>)</span>. A tych nie brakuje.</p>
<p>
Przyszłe projekty:
<ul class="icons-ul">
	<li><i class="icon-li icon-screenshot icon-large"></i>Agregator newsów</li>
	<li><i class="icon-li icon-screenshot icon-large"></i>Wrapper Youtube</li>
	<li><i class="icon-li icon-screenshot icon-large"></i>Wrapper Twitch.tv</li>
	<li><i class="icon-li icon-screenshot icon-large"></i>Aplikacja z dziedziny social media</li>
</ul>
</p>
Główne założenia projektów:
<ul class="icons-ul">
	<li><i class="icon-li icon-screenshot icon-large"></i>Prosta idea</li>
	<li><i class="icon-li icon-screenshot icon-large"></i>Intuicyjny interfejs</li>
	<li><i class="icon-li icon-screenshot icon-large"></i>Responsywność</li>
</ul>
</p>
<p>
	Wersje strony:
	<ul>
		<li><a href="//czarnodziej.sanfre.eu/">Laravel 4 (obecnie rozwijana wersja)</a></li>
		<li><a href="//www.cake.czarnodziej.sanfre.eu">CakePHP</a></li>
		<li><a href="//old.czarnodziej.sanfre.eu">HTML</a></li>
	</ul>
</p>
@stop