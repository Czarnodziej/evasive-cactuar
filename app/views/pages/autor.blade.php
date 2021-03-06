@extends('layouts.base')
@section('main_content')
<header>
    <h1>Autorskie motywacje</h1>
</header>
<p>Powstannie strony jest spowodowane specyficzną potrzebą, zwaną "ciekawość".
    Katastrofalna w skutkach, manifestująca się w nieskończonych "jak to działa
    / dlaczego tak / jak to zmienię to co się stanie?". Dodatkową przyczyną była
    chęć podzielenia się ze światem swym własnym punktem widzenia, którego forma
    tekstowa ilością znaków przekraczała standardową objętość wiadomości na forum
    czy jakże ciekawego wpisu na fb lub twitterze. Dlatego umieszczam tutaj tylko
    najciekawsze treści.
    Żadne inne.</p>
<p>Główne założenia techniczne:</p>
<ul class="icons-ul">
    <li><i class="icon-li icon-ok icon-large"></i>przejrzystość (to, co dobrze
        wygląda, jest fajniejsze. Zazwyczaj)</li>
    <li><i class="icon-li icon-ok icon-large"></i>minimalizm szaty graficznej
        (nadmiar szat wskazany w zimowej porze roku, a tutaj panuje wiecznie
        radosne lato<span class="hide-ie6">
            <i class="icon-fixed-width icon-spin icon-smile"></i>
            <i class="icon-fixed-width icon-sun"></i></span>)</li>
    <li><i class="icon-li icon-ok icon-large"></i>czysty kod (ułatwia dalszy
        rozwój strony)</li>
    <li><i class="icon-li icon-ok icon-large"></i>idea hucznie zwana
        <abbr title="Responsive Web Design">RWD</abbr>, która pozwala na sprawne
        wyświetlanie strony na wielkich monitorach oraz mniejszych ekranach
        tabletowo-komórkowo-smartfonowych</li>
</ul>
<p>Rezultat graficzny jest wyraźnie widoczny, choć daleki od perfekcjonistycznych
    zapędów autora. Kod źródłowy dostępny jest dla
    <a href="https://github.com/Czarnodziej">wtajemniczonych</a>.
    <abbr title="nie mylić z oznaczeniami samochodowymi czy samolotowymi">RWD
    </abbr> manifestuje samo siebie podczas gdy okno przeglądarki zmienia swój
    rozmiar. Polecam sprawdzić osobiście, bo to wspaniale rozrywkowy przerywnik,
    w przeciwieństwie do czytania wątpliwie interesującego tekstu.
</p>
<p>Autorskie umiejętności<span class="hide-ie7">, dla wielbiących gwiazdki oraz
        statystyki bez wyraźnego punktu odniesienia</span>:</p>
<div id="sekcja-gwiazd">
    <p class="hide-ie7">
        <button id="button" type="button" class="button">Pokaż sensowniejszy
            opis</button>
    </p>
    <ul id="skills">
        <li>HTML5/CSS3 <span class="four-star"></span>
            <p><a href="http://en.wikipedia.org/wiki/Responsive_web_design">RWD</a>,
                <a href="http://en.wikipedia.org/wiki/Sprite_%28computer_graphics%29#Sprites_by_CSS">
                    CSS Sprite</a>,
                <abbr title="virtualbox IE6, 7, 8, 9, 10, 11,
                      Chrome, Firefox, Safari, Opera">
                    <a href="http://caniuse.com/">
                        Kompatybilność z przeglądarkami</a></abbr><br>
                <a href="http://developers.google.com/speed/pagespeed/insights/?url={{ URL::to('/') }}%2F">
                    Google PageSpeed 100/100</a>.
                <br>Todo: <a href="http://getbootstrap.com/">Bootstrap 3</a>,
                preprocesory CSS.
            </p>
        </li>
        <li>JavaScript <span class="three-star-half"></span>
            <p><a href="{{ URL::route('game') }}">Manipulacja DOM, OOP.</a>
                <a href="{{ URL::route('javascript') }}">jQuery</a>.
                <a href="https://getfirebug.com/">Debugowanie</a>,
                AJAX. Kod zgodny z <a href="http://www.jshint.com/">JShint.</a>
                <br>Todo: JavaScript MVC Frameworks
            </p>
        </li>
        <li>PHP <span class="three-star"></span>
            <p>Podstawowe zagadnienia,
                <abbr title="Klasy, interfejsy, abstrakcja, enkapsulacja,
                      polimorfizm, dziedziczenie, widoczność">OOP</abbr>,
                <a href="http://symfony.com/">Symfony 2</a>,
                <a href="http://laravel.com/">Laravel</a>,
                <a href="http://cakephp.org">CakePHP</a>,
                <a href="http://ellislab.com/codeigniter">CodeIgniter</a>,
                <a href="https://www.pyrocms.com/">PyroCMS</a>,
                <a href="http://getcomposer.org/">Composer</a>.
                <br>Todo:
                <a href="http://pl.wikipedia.org/wiki/Test-driven_development">
                    Test-driven development</a>.
            </p>
        </li>
        <li>DB <span class="three-star-half"></span>
            <p>Podstawowe zagadnienia, <a href="http://www.mysql.com/">MySQL</a>,
                <a href="http://www.sqlite.org/">SQLite</a>.
                <br>Todo:
                <a href="http://www.postgresql.org">PostgreSQL</a>,
                <a href="http://en.wikipedia.org/wiki/NoSQL">NoSQL</a>.
            </p>
        </li>
        <li>Apache <span class="three-star-half"></span>
            <p>Konfiguracja i administracja <a href="http://www.apachefriends.org/en/xampp.html">
                    XAMPP</a>, <a href="https://wiki.debian.org/LaMp">LAMP</a>,
                <a href="http://pl.wikipedia.org/wiki/Memcached">
                    Memcached</a>.
                <br>Todo: <a href="http://pl.wikipedia.org/wiki/Nginx">
                    Nginx</a>.
            </p>
        </li>
        <li>Narzędzia <span class="four-star"></span>
            <p>
                <a href="http://netbeans.org/features/index.html">Netbeans IDE</a>,
                <a href="http://www.jetbrains.com/phpstorm/">PhpStorm</a>,
                <a href="http://www.geany.org/">Geany</a>,
                <a href="http://git-scm.com/">Git</a>,
                <a href="http://www.sublimetext.com/">Sublime Text 3</a>,
                <a href="http://notepad-plus-plus.org/">Notepad++</a>,
                <a href="http://pl.libreoffice.org/">Libre Office</a>,
                <a href="http://www.getpaint.net/">Paint.net</a>,
                <a href="http://www.photoshop.com/">Adobe Photoshop CS6</a>,
                <a href="http://www.gimp.org/">GIMP</a>,
                <a href="http://audacity.sourceforge.net/">Audacity</a>,
                <a href="https://www.virtualbox.org/">VirtualBox</a>,
                <a href="http://www.samba.org/">Samba</a>,
                <a href="http://www.9bis.net/kitty/">SSH</a>,
                <a href="http://www.vim.org">VIM</a>.
            </p>
        </li>
        <li>Linux <span class="four-star"></span>
            <p><a href="http://www.debian.org/">Debian</a>: administracja
                lokalna oraz poprzez ssh.
        </li>
        <li>Windows <span class="four-star"></span>
            <p>Windows 95, 98, XP, 7, 8. Zaawansowana konfiguracja, obsługa
                narzędzi administracyjnych, optymalizacja usług i działania,
                diagnostyka błędów.
            </p>
        </li>
        <li>Sprzęt komputerowy <span class="four-star-half"></span>
            <p>Diagnostyka działania, instalacja podzespołów, zaawansowana
                konfiguracja, najnowsze trendy,
                <a href="http://valid.canardpc.com/2877857">zaawansowany
                    overclocking.</a></p>
        </li>
        <li>Technologie mobilne <span class="two-star-half"></span>
            <p>Android: Diagnostyka działania, zaawansowana konfiguracja,
                najnowsze trendy, kompilacja źródeł.</p>
        </li>
        <li>Marketing <span class="two-star"></span>
            <p>Tworzenie sloganów i tekstów reklamowych.</p>
        </li>
        <li>Język polski <span class="four-star-half"></span>
            <p>Poprawny gramatycznie i bogaty leksykalnie.</p>
        </li>
        <li>Język angielski <span class="four-star"></span>
            <p>Zaawansowana znajomość mowy oraz pisma.</p>
        </li>
        <li>Spryt <span class="four-star"></span>
            <p>Wysoce rozwinięty, sprawnie wspomagany technologiami
                informatycznymi.</p>
        </li>
        <li>Potrzeba zdobywania wiedzy <span class="five-star"></span>
            <p>Nieustanna i ściśle współgrająca ze sprytem.</p>
        </li>
        <li>Poczucie humoru <span class="three-star-half"></span>

            <p>
                <br>
                Co zero powiedziało do ósemki?
                <br>"Fajny masz pasek."
                <br>
                <br>
                Jak nazywa się bumerang, który nie wraca po rzucie?
                <br>Patyk.
                <br>
                <br>Todo: Coś śmieszniejszego.</p>
        </li>
    </ul>
</div>
@stop
