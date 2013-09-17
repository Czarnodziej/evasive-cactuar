@include('_partials/header')
@include('_partials/navigation')
<h2>Artykuły</h2>

<ul>
    @foreach ($entries as $entry)
        <li>
            <h3>{{ $entry->title }}</h3>
            <h5>Created at {{ $entry->created_at }} &bull; by {{ $entry->author->email }}</h5>
            {{ Str::limit($entry->body, 100) }}
        </li>
    @endforeach
</ul>
@include('_partials/footer')