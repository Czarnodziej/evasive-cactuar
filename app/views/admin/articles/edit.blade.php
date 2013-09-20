@extends('layouts.base')
@section('main_content')
<h2>Edycja artykułu</h2>
{{ Notification::showAll() }}
{{ Form::model($article, array('method' => 'put', 'route' => array('admin.articles.update', $article->id))) }}

<div>
    {{ Form::label('title', 'Tytuł') }}
    <div>
        {{ Form::text('title') }}
    </div>
</div>

<div>
    {{ Form::label('body', 'Treść') }}
    <div>
        {{ Form::textarea('body') }}
    </div>
</div>

<div>
    {{ Form::submit('Zapisz') }}
    <button><a href="{{ URL::route('admin.articles.index') }}">Cofnij zmiany</a></button>
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