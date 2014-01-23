@extends('layouts.base')
@section('main_content')
<h1>
    Teksty
</h1>
<p><a href="{{ URL::route('admin.articles.create') }}"> Dodaj nowy tekst</a></p>

<hr>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Tytuł</th>
            <th>Data powstania</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td><a href="{{ URL::route('admin.articles.show',
                   $article->id) }}">{{ $article->title }}</a></td>
            <td>{{ Daty::showTimeAgo($article->created_at) }}</td>
            <td>
                <span>
                    <form action="{{ URL::route('admin.articles.edit',
                         $article->id) }}">
                        <input type="submit" value="Edytuj">
                    </form>

                    {{ Form::open(array('route' => array('admin.articles.destroy',
                $article->id), 'method' => 'delete', 'data-confirm' =>
                'Na pewno?', 'onsubmit' =>
                'return confirm(\'Na pewno chcesz usunąć ten artykuł?\')'))}}
                    <button type="submit" href="{{ URL::route(
                        'admin.articles.destroy', $article->id) }}">Usuń</button>
                    {{ Form::close() }}</span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop