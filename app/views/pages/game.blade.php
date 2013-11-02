@extends('layouts.base')
@section('head')
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!--[if lt IE 8]>
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-ie7.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-ie7.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-ie6.css') }}">
  <![endif]-->
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
@stop
@section('main_content')
<div>
  Gra polega na klikaniu. Żeby zdobyć punkt należy klikać w zielone buźki. Brak kliknięcia w zieloną buźkę będzie oznaczał utracenie 1 z 5 szans. Kliknięcie na złośliwą czerwoną buźkę również będzie oznaczać utracenie szansy. Prędkość gry wzrasta co 5 punktów.
</div>

<div id="game">
</div>

@stop

@section('bottom_scripts')
  <!--[if lt IE 9]>
  <script src="{{ asset('assets/js/vendor/respond.min.js') }}" type="text/javascript"></script>
  <![endif]-->
  <script src="{{ asset('assets/js/script.min.js') }}"></script>
  <script src="{{ asset('assets/js/game.min.js') }}"></script>
@stop