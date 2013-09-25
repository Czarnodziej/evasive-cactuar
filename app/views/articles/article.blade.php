@extends('layouts.base')
@section('main_content')

<h2>{{ $entry->title }}</h2>
<h4>Utworzony {{ Daty::showTimeAgo($entry->created_at) }}</h4>
{{ $entry->body }}
<hr>
<p style="margin-top:50px;">Utwórz nowy komentarz:</p>


{{ Form::open(array('route' => 'comment')) }}

    <div>
        {{ Form::label('author', 'Nazwa użytkownika:') }}
        <div>
            {{ Form::text('author') }}
        </div>
    </div>

    <div>
        {{ Form::label('body', 'Treść komentarza:') }}
        <div>
            {{ Form::textarea('body') }}
        </div>
    </div>

    <div>
    {{ Form::hidden('foreign_id', "$entry->id") }}
    {{ Form::hidden('slug', "$entry->slug") }}
        {{ Form::submit('Zapisz') }}
        {{ Notification::showAll() }}
    </div>

{{ Form::close() }}

<p style="margin-top:50px;">Komentarze:</p><br>

@foreach($entry->comments as $comment)
	<div class="comment">
		<p>{{ $comment->name }}:<br>
			{{ $comment->body }}<br>
		<span style="font-size: 0.7em">Napisany {{ Daty::showTimeAgo($comment->created_at) }}</span>
		</p>
	</div>
	<hr>
@endforeach



@stop