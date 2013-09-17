@include('_partials/header')
@include('_partials/navigation')

<h2>{{ $entry->title }}</h2>
<h4>Published at {{ $entry->created_at }} &bull; by {{ $entry->author->first_name }}</h4>
{{ $entry->body }}

@include('_partials/footer')