@extends('layouts.base')
@section('main_content')
<p>Formularz kontaktowy</p>
{{ Form::open(array('url' => 'kontakt'))}}

{{ Form::label('sender_name', 'Twe imię:') }}
{{ Form::text('sender_name') }}

{{ Form::label('sender_email', 'Twój e-mail kontaktowy:')}}
{{ Form::email('sender_email') }}

{{ Form::label('email_subject', 'Temat wiadomości:') }}
{{ Form::text('email_subject') }}

{{ Form::label('mail_content_title', 'Treść wiadomości:') }}
{{ Form::textarea('email_content') }}
</br>
{{ Form::submit('Wyślij') }}
{{ Form::close() }}
@if(Session::has('success'))
<div>
	<h2>Wiadomość wysłana pomyślnie!</h2>
</div>
@endif
@stop