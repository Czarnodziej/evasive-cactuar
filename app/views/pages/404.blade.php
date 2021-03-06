@extends('layouts.base')
@section('main_content')
<header>
	<h1>Kod Cztery-Zero-Cztery</h1>
</header>
<p><i class="icon-frown icon-2x"></i>
</p>
<p>Strona nie została odnaleziona.
</p>
<p>Możliwe, że adres został nieprawidłowo wpisany albo strona została usunięta
    lub przeniesiona.
</p>
<p>To nie koniec świata!<i class="icon-fixed-width icon-smile icon-2x"></i>
</p>
<p>Zawsze możesz skorzystać z odnośników umieszczonych na górnym pasku,
    ewentualnie w stopce strony.
</p>
<p>Dodatkowo możesz napisać do mnie <a href="{{ URL::route('kontakt') }}">
        maila</a> odnośnie problemu ze stroną, który postaram się rozwiązać.
        A zazwyczaj staram się skutecznie<span class="hide-ie6">
            <i class="icon-fixed-width icon-screenshot"></i></span>.
</p>
<p>Możesz także włączyć radosną muzykę i zatańczyć.
    Nie naprawi to awarii tutejszej witryny internetowej, ale poczujesz się
    lepiej, bo ruch to radość, a radość to zdrowie<span class="hide-ie6">
        <i class="icon-fixed-width icon-heart"></i></span>.
</p>
@stop