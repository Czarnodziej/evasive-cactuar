@extends('layouts.base')
@section('main_content')
<h2>Artykuły</h2>

<table>
    <thead>
        <tr>
            <th>Tytuł:</th>
            <th>Utworzony:</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($entries as $entry)
        <tr>
            <td><a href="{{ route('article', $entry->slug) }}">{{ $entry->title }}</a></td>
            <td>{{ Daty::showTimeAgo($entry->created_at) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop