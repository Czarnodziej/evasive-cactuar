@extends('layouts.base')
@section('main_content')
<h2>Artykuły</h2>

<ul>
    @foreach ($entries as $entry)
        <li>
            <h3>{{ $entry->title }}</h3>
            <h5>Utworzony {{ date($entry->created_at) }} przez {{ $entry->author->email }}</h5>
            {{ Str::limit($entry->body, 200) }}
        </li>
    @endforeach
</ul>
@stop