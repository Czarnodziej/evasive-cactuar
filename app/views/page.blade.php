@include('_partials/header')
@include('_partials/navigation')

<h2>{{ $entry->title }}</h2>
{{ $entry->body }}

@include('_partials/footer')