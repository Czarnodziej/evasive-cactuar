@extends('layouts.base')
@section('head')
  <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/smoothness/jquery-ui-1.10.3.custom.min.css') }}">
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-ie7.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-ie7.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-ie6.css') }}">
  <![endif]-->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
@stop
@section('main_content')
<header>
  <h2>Czary-mary przeglądarkowe.</h2>
</header>
<p>Przykłady skryptów z wykorzystaniem jQuery:</p>
<p>1. Wybór daty:
  <input type="text" id="datepicker" class="button" value="Klik mnie!" title="No kliknij." />
</p>
<p>2. Dymki tekstowe:
  <a href="#" title="Cudna chmurka-dymek!">Tutaj kursorem najedź!</a>
</p>
<p>3. Zakładki:</p>
<div id="tabs" class="ui-tabs" style="visibility: hidden">
  <ul>
    <li>
      <a href="#tabs-1">Pierwsza</a>
    </li>
    <li>
      <a href="#tabs-2">Kolejna</a>
    </li>
    <li>
      <a href="#tabs-3">Ostatnia</a>
    </li>
  </ul>
  <div id="tabs-1">
    <p>
      <strong>Możesz zmieniać kolejność zakładek za pomocą "przeciągnij i upuść".</strong>
    </p>
    <p>Super łacina. Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum
      quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula
      eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin.
      Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
  </div>
  <div id="tabs-2">
    <p>Jeszcze bardziej super łacina. Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque
      molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem.
      Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat
      nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere,
      felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>
  <div id="tabs-3">
    <p>Najbardziej super łacina. Znowu. Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent
      viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros,
      id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Ehehe. Donec nisi lectus, feugiat porttitor,
      tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a
      libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div>
<p><a href="{{ URL::route('game') }}">Gra JavaScript</a></p>
@stop

@section('bottom_scripts')
  <!--[if lt IE 9]>
  <script src="{{ asset('assets/js/vendor/respond.min.js') }}" type="text/javascript"></script>
  <![endif]-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="{{ asset('assets/js/vendor/jquery-ui-1.10.3.custom.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.min.js') }}"></script>
@stop