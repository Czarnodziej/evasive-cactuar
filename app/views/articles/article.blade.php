@extends('layouts.base')
@section('main_content')

<h2>{{ $entry->title }}</h2>
<h4>Utworzony {{ $entry->created_at }}</h4>
{{ $entry->body }}
@stop