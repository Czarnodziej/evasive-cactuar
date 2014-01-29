@extends('layouts.base')
@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style-edit-fix.css') }}">
<!--[if lt IE 8]>
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome-ie7.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style-ie7.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style-ie6.css') }}">
<![endif]-->
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
@stop
@section('main_content')
<h2>Edycja artykułu</h2>
{{ Notification::showAll() }}
{{ Form::model($article, array('method' => 'put', 'route' =>
array('admin.articles.update', $article->id))) }}

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
    {{ Form::label('body', 'Treść') }}
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
