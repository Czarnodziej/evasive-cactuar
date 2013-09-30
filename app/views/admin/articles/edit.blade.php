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
        {{ HTML::decode(Form::textarea('body')) }}
    </div>
</div>

<div>
    {{ Form::submit('Zapisz') }}
    <a href="{{ URL::route('admin.articles.index') }}">Anuluj</a>
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
@section('bottom_scripts')
  <!--[if lt IE 9]>
  <script src="{{ asset('js/vendor/respond.min.js') }}" type="text/javascript"></script>
  <![endif]-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script> window.jQuery || document.write('<script src ="{{ asset('assets/js/vendor/jquery-1.10.2.min.js') }}">\x3C/script>');
  </script>
  <script src="{{ asset('assets/js/script.min.js') }}"></script>
@stop