<!DOCTYPE HTML>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,
              user-scalable=no">
        <meta name="description" content="Wojaże związane z tworzeniem stron
              internetowych, źródłowo udokumentowane oraz zabawnie podane.
              Tego drugiego nie jestem pewien.">
        <meta name="keywords" content="web design, web development, humor,
              portfolio, php, laravel, cakephp, jquery, javascript, js"/>
        <title>Wesoła wycieczka w treść - praktyczny Web Developing.</title>
        @section('head')
        <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="{{ asset('assets/css/style-ie8.css') }}">
        <![endif]-->
        <!--[if lt IE 8]>
        <link rel="stylesheet"
              href="{{ asset('assets/css/font-awesome-ie7.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-ie7.css') }}">
        <![endif]-->
        <!--[if lt IE 7]>
        <link rel="stylesheet" href="{{ asset('assets/css/style-ie6.css') }}">
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"
              type="image/x-icon">
        @show
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="chromeframe">Używasz <strong>prehistorycznej</strong> przeglądarki,
            co stwarza <strong>realne zagrożenie dla Ciebie </strong> i wszystkich
            informacji jakie zamieszczasz w sieci.
            Ochoczo zalecam <a href="http://browsehappy.com/">aktualizację</a>
            lub <a href="http://www.google.com/chromeframe/?redirect=true">aktywację
                Google Chrome Frame</a>.
            Aktualna przeglądarka to podstawa prawidłowego wyświetlania stron i
            bezpiecznego korzystania z internetu.</p>
        <![endif]-->
        @section('topbar_nav')
        <div id="gora-kontener">
            <nav id="topbar">
                @if (Sentry::check())
                <span id="logo">
                    <a href="{{ URL::route('home') }}"><i class="icon-fixed-width
                                                          icon-home"></i></a>
                    <span>
                        <a href="{{ URL::route('admin.articles.index') }}"><i class="icon-edit"></i></a>
                        <a href="{{ URL::route('admin.logout') }}"><i class="icon-off"></i></a>
                    </span>
                    @else
                    <span id="logo">
                        <a href="{{ URL::route('home') }}"><i class="icon-fixed-width
                                                              icon-home"></i>SuperLogo</a>
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
                        <a href="{{ URL::route('article.list') }}">
                            <i class="icon-fixed-width icon-book"></i>Teksty dowolne</a>
                    </li>
                    <li id="rozwin">
                        <a href="{{ URL::route('javascript') }}">
                            <i class="icon-fixed-width icon-magic"></i>Javascript</a>
                        <a href="{{ URL::route('game') }}">Czysty JavaScript</a>
                        <a href="{{ URL::route('javascript') }}">jQuery</a>
                    </li>
                    <li>
                        <a href="{{ URL::route('autor') }}">
                            <i class="icon-fixed-width icon-thumbs-up">
                            </i>Autorskie opisy</a>
                    </li>
                </ul>
                <div class="social">
                    <a href="https://www.facebook.com/marcin.marcinowy.5"
                       target="_blank">
                        <span class="fb"></span>
                    </a>
                    <a href="https://twitter.com/Czarnodziej"
                       target="_blank">
                        <span class="tw"></span>
                    </a>
                    <a href="{{ URL::route('kontakt') }}">
                        <span class="mail"></span>
                    </a>
                    <a href="https://github.com/Czarnodziej"
                       target="_blank">
                        <span class="gh"></span>
                    </a>

                    <p>
                        <a href="http://laravel.com" target="_blank">
                            <img src="{{ asset('assets/img/laravel.png') }}"
                                 alt="laravel logo">
                        </a>
                    </p>

                    <p>
                        <a href="http://www.phptherightway.com" target="_blank">
                            <img
                                src="{{ asset('assets/img/phptrw.png') }}"
                                alt="PHP: The Right Way"/>
                        </a>
                    </p>
                </div>
            </nav>
            @show
            <article class="clearfix"><!--żeby float zachowywał wysokość kontenera-->
                <noscript>
                <p>Strona wymaga przeglądarki z włączoną obsługą JavaScript.</p>
                </noscript>
                <!--content start-->
                @yield('main_content')
            </article>
            @section('footer')
            <footer id="stopka-strony">
                <div class="social">
                    <a href="https://www.facebook.com/marcin.marcinowy.5"
                       target="_blank">
                        <span class="fb"></span>
                    </a>
                    <a href="https://twitter.com/Czarnodziej" target="_blank">
                        <span class="tw"></span>
                    </a>
                    <a href="{{ URL::route('kontakt') }}">
                        <span class="mail"></span>
                    </a>
                    <a href="https://github.com/Czarnodziej" target="_blank">
                        <span class="gh"></span>
                    </a>
                </div>
                <p>©2013. Kopiowanie treści tekstów zawartych na stronie
                    bez zgody autora jest czynem niegodnym.<br>
                    <a href="https://github.com/Czarnodziej/evasive-cactuar/commits/master"
                       target="_blank">Ostatnia modyfikacja:
                        {{daty::dateMod("l j f Y", daty::get_page_mod_time())}}</a></p>
            </footer>
            @show
        </div>
        @section('bottom_scripts')
        <!--[if lt IE 9]>
        <script async src="{{ asset('assets/js/vendor/respond.min.js') }}"></script>
        <![endif]-->
        <script async
        src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
        <script async src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script> window.jQuery || document.write('<script async src="{{ asset('assets / js / vendor / jquery - 1.10.2.min.js') }}">\x3C/script>');</script>
        <script>
                $(document).ready(function(){
            $.ajax({
            url: fontFile,
                beforeSend: function (xhr) {
                xhr.overrideMimeType("application/octet-stream");
                },
                success: function(data) {
                $("<link />", {
                'rel': 'stylesheet'
                    'href': '//fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext'
                }).appendTo('head');
                }
            });
            });
        </script>
        <script async src="{{ asset('assets/js/script.min.js') }}"></script>
        @show
    </body>
</html>