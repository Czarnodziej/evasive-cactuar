@extends('layouts.base')
@section('head')
@parent
<link rel="stylesheet" href="{{ asset('assets/css/style-edit-fix.css') }}">
@stop

@section('main_content')

<h2>Utwórz nowy artykuł:</h2>
{{ Notification::showAll() }}
{{ Form::open(array('route' => 'admin.articles.store')) }}

<div>
    {{ Form::label('title', 'Tytuł') }}
    <div>
        {{ Form::text('title', null, array('id' => 'title')) }}
    </div>
    {{ Form::label('slug', 'Slug') }}
    <div>
        {{ Form::text('slug', null, array('id' => 'slug')) }}
    </div>
</div>

<div>
    {{ Form::label('body', 'Zawartość:') }}
    <div>
        {{ HTML::decode(Form::textarea('body', null, array('class' => 'nomargin'))) }}
    </div>
</div>
<br>
<div>
    {{ Form::submit('Zapisz') }}
    <a href="{{ URL::route('admin.articles.index') }}">Anuluj</a>
</div>

{{ Form::close() }}

@stop

@include('admin.articles.partials.wysiwyg')