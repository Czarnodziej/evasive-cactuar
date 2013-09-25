@extends('layouts.base')
@section('main_content')
<header>
	<h1>Wspaniały tytuł strony.</h1>
</header>
<p>
	<a href="#">
		<img class="obrazek" src="{{ asset('assets/img/1min.gif') }}" alt="randomowy obrazek kunsztownie wykonany w paincie">
	</a>
</p>
<p>Strona ma charakter rozwojowy. Co oznacza tyle, że jest tu mało zawartości, a docelowo będzie więcej. Dodatkowo znaczy to też, że do świetnego wyświetlania strony niezbędna jest aktualna przeglądarka internetowa.
	<br>Plany w kolejności chronologicznej:
</p>
<ul class="icons-ul">
	<li><i class="icon-li icon-screenshot icon-large"></i>Wielce użyteczne formularze z wykorzystaniem AJAX</li>
	<li><i class="icon-li icon-screenshot icon-large"></i>Wykorzystanie Javascript do stworzenia prostej gry przeglądarkowej</li>
	<li><i class="icon-li icon-screenshot icon-large"></i>Kilka artykułów nt. technologii internetowo-komputerowych z naciskiem na dostępność dla zwykłych użytkowników</li>
</ul>
<p>Wszystkie powyższe założenia będą wdrażane z zachowaniem wysokiej przejrzystości strony i dostępności zawartych tutaj informacji. Idąc rozwojowym torem, powyższych celów będzie więcej, bo apetyt na ów rozwój rośnie wraz z ilością poznawanych technologii (<i class="icon-food icon-large"></i> + <i class="icon-cogs icon-large"></i> = <i class="icon-smile icon-large"></i>). A tych nie brakuje.</p>
<p>
	Wersje strony:
	<ul>
		<li><a href="//czarnodziej.sanfre.eu/">Laravel 4 (obecna wersja)</a></li>
		<li><a href="//www.cake.czarnodziej.sanfre.eu">CakePHP</a></li>
		<li><a href="//old.czarnodziej.sanfre.eu">HTML</a></li>
	</ul>
</p>
@stop