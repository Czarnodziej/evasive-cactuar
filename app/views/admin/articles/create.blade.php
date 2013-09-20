@extends('layouts.base')
@section('main_content')

<h2>Utwórz nowy artykuł:</h2>
{{ Notification::showAll() }}
{{ Form::open(array('route' => 'admin.articles.store')) }}

    <div>
        {{ Form::label('title', 'Tytuł') }}
        <div>
            {{ Form::text('title') }}
        </div>
    </div>

    <div>
        {{ Form::label('body', 'Zawartość:') }}
        <div>
            {{ Form::textarea('body') }}
        </div>
    </div>

    <div>
        {{ Form::submit('Zapisz') }}
        <a href="{{ URL::route('admin.articles.index') }}">Cofnij zmiany</a>
    </div>

{{ Form::close() }}

@stop

@section('bottom_scripts')
  <script src="{{ asset('assets/js/vendor/tinymce/tinymce.min.js') }}">
  </script>
<script>
 tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen emmet",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
@stop