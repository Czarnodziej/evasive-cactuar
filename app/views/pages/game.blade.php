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
  Instrukcje: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae necessitatibus eius assumenda fugiat recusandae ratione quae. Quaerat, asperiores, doloribus odio aspernatur magnam itaque suscipit accusamus dolore a quisquam praesentium nulla.

</div>

<div id="game">
</div>

@stop

@section('bottom_scripts')
  <!--[if lt IE 9]>
  <script src="{{ asset('assets/js/vendor/respond.min.js') }}" type="text/javascript"></script>
  <![endif]-->
  <script src="{{ asset('assets/js/script.min.js') }}"></script>
  <script src="{{ asset('assets/js/game.js') }}"></script>
@stop