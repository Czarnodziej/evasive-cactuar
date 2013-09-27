@extends('layouts.base')
@section('main_content')

<h2>{{ $entry->title }}</h2>
<h4>Utworzony {{ Daty::showTimeAgo($entry->created_at) }}</h4>
{{ $entry->body }}
<hr>
<div class="komentarze">
    <p>Komentarze:</p>

    {{ Form::open(array('route' => 'comment')) }}

    <div>
    {{ Form::text('author', null, array('class' => 'textinput', 'placeholder' => 'Nazwa użytkownika')) }}
    </div>

    <div>
    {{ Form::textarea('body', null, array('class' => 'textinput', 'placeholder' => 'Treść komentarza')) }}
    </div>

    <div>
        {{ Form::hidden('foreign_id', "$entry->id") }}
        {{ Form::hidden('slug', "$entry->slug") }}
        {{ Form::submit('Zapisz', array('class' => 'submitbutton')) }}
        {{ Notification::showAll() }}
    </div>

    {{ Form::close() }}
</div>
<hr>

@foreach($entry->comments as $comment)
<div class="comment">
  <p>{{ $comment->name }}:<br>
     {{ $comment->body }}<br>
     <span>Napisany {{ Daty::showTimeAgo($comment->created_at) }}</span>
 </p>
</div>
<hr>
@endforeach



@stop