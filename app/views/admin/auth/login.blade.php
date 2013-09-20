@extends('layouts.base')
@section('main_content')
<div>
		{{ Form::open() }}

		@if ($errors->has('login'))
		<div>{{ $errors->first('login', ':message') }}</div>
		@endif

		<div>
				{{ Form::label('email', 'Adres e-mail:') }}
				<div>
						{{ Form::text('email') }}
				</div>
		</div>

		<div>
				{{ Form::label('password', 'Hasło:') }}
				<div>
						{{ Form::password('password') }}
				</div>
		</div>

		<div>
				{{ Form::submit('Zaloguj')}}
		</div>

		{{ Form::close() }}
</div>

@stop