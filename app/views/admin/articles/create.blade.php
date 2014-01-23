@extends('layouts.base')
@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/smoothness/jquery-ui-1.8.13.custom.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/elrte.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/elfinder.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style-edit-fix.css') }}">
<!--[if lt IE 8]>
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome-ie7.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style-ie7.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style-ie6.css') }}">
<![endif]-->
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
@stop

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
        {{ HTML::decode(Form::textarea('body', null, array('class' => 'nomargin'))) }}
    </div>
</div>

<div>
    {{ Form::submit('Zapisz') }}
    <a href="{{ URL::route('admin.articles.index') }}">Anuluj</a>
</div>

{{ Form::close() }}

@stop

@section('bottom_scripts')
<!--[if lt IE 9]>
<script src="{{ asset('assets/js/vendor/respond.min.js') }}" type="text/javascript"></script>
<![endif]-->
<script src="{{ asset('assets/js/jquery-1.6.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui-1.8.13.custom.min.js') }}"></script>
<script src="{{ asset('assets/js/script.min.js') }}"></script>
<script src="{{ asset('assets/js/elrte.min.js') }}"></script>
<script src="{{ asset('assets/js/elfinder.min.js') }}"></script>
<script src="{{ asset('assets/js/i18n/elrte.pl.js') }}"></script>
<script src="{{ asset('assets/js/i18n/elfinder.pl.js') }}"></script>
<script type="text/javascript">
$().ready(function() {
    var opts = {
        lang: 'pl', // set your language
        styleWithCSS: false,
        height: 400,
        toolbar: 'maxi',
        allowSource: true,
        fmOpen: function(callback) {
            $('<div />').dialogelfinder({
                url: '../../../php/connector.php',
                lang: 'pl',
                commandsOptions: {
                    getfile: {
                        oncomplete: 'destroy' // destroy elFinder after file selection
                    }
                },
                getFileCallback: callback // pass callback to file manager
            });
        }
    };
    // create editor
    $('#body').elrte(opts);
});
</script>
@stop