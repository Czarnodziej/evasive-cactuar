@extends('layouts.base')
@section('main_content')
<h2>Artykuły</h2>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Tytuł</th>
            <th>Data powstania</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($entries as $entry)
        <tr>
            <td>{{ $entry->id }}</td>
            <td><a href="{{ route('article', $entry->slug) }}">{{ $entry->title }}</a></td>
            <td>{{ $entry->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop