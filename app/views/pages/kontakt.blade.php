@extends('layouts.base')
@section('main_content')
<p>Formularz kontaktowy</p>
{{ Form::open(array('url' => 'kontakt'))}}
<div class="input-prepend">
<span class="add-on"><i class="icon-user"></i></span>
{{ Form::text('sender_name', null, array('class' => 'textinput', 'id' => 'sender_name', 'placeholder' => 'Twe imię')) }}
</div>
<div class="input-prepend">
<span class="add-on"><i class="icon-envelope"></i></span>
{{ Form::email('sender_email', null, array('class' => 'textinput', 'id' => 'sender_email', 'placeholder' => 'Twój e-mail')) }}
</div>
<div class="input-prepend">
<span class="add-on"><i class="icon-pencil"></i></span>
{{ Form::text('email_subject', null, array('class' => 'textinput', 'id' => 'email_subject', 'placeholder' => 'Temat wiadomości')) }}
</div>
<div>
{{ Form::textarea('email_content', null, array('class' => 'textinput', 'id' => 'email_content', 'placeholder' => 'Treść wiadomości')) }}
</div>
{{ Form::submit('Wyślij', array('class' => 'submitbutton')) }}
{{ Form::close() }}
@if(Session::has('success'))
<div>
	<h2>Wiadomość wysłana pomyślnie!</h2>
</div>
@endif
@stop
@section('bottom_scripts')
  <!--[if lt IE 9]>
  <script src="{{ asset('assets/js/vendor/respond.min.js') }}" type="text/javascript"></script>
  <![endif]-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script> window.jQuery || document.write('<script src ="{{ asset('assets/js/vendor/jquery-1.10.2.min.js') }}">\x3C/script>');
  </script>
  <script src="{{ asset('assets/js/vendor/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.min.js') }}"></script>
@stop