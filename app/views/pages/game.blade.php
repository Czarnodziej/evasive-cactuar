@extends('layouts.base')
@section('main_content')
<div>
    Gra polega na klikaniu. Żeby zdobyć punkt należy klikać w zielone buźki.
    Brak kliknięcia w zieloną buźkę będzie oznaczał utracenie 1 z 5 szans.
    Kliknięcie na złośliwą czerwoną buźkę również będzie oznaczać utracenie
    szansy. Prędkość gry wzrasta co 5 punktów.
</div>

<div id="game">
</div>

@stop

@section('bottom_scripts')
@parent
<script src="{{ asset('assets/js/game.min.js') }}"></script>
@stop