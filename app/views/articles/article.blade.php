@extends('layouts.base')
@section('main_content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<h2>{{ $entry->title }}</h2>
<h4>Utworzony {{ Daty::showTimeAgo($entry->created_at) }}</h4>
<div class="fb-like" data-href="{{ route('article', $entry->slug) }}"
     data-layout="standard" data-action="like" data-show-faces="true"
     data-share="true"></div>
<br>
{{ $entry->body }}
<hr>
<div id="komentarze">
    <p>Komentarze:</p>

    {{ Form::open(array('route' => 'comment', 'id' => 'form')) }}

    <div>
        <span class="add-on hide-ie8"><i class="icon-user"></i></span>
        {{ Form::text('author', null, array('class' => 'textinput',
        'placeholder' => 'Nazwa użytkownika')) }}
    </div>

    <div>
        {{ Form::textarea('body', null, array('class' => 'textinput',
        'id' => 'comment_content', 'placeholder' => 'Treść komentarza')) }}
    </div>

    <div>
        {{ Form::hidden('article_id', "$entry->id") }}
        {{ Form::hidden('slug', "$entry->slug") }}
        {{ Form::submit('Zapisz', array('class' => 'submitbutton',
        'id' => 'submit')) }}
        {{ Notification::showAll() }}
    </div>

    {{ Form::close() }}
</div>
<hr>
<div id="comments">
    @foreach($entry->comments as $comment)
    <div class="comment">
        <p>{{ $comment->name }}:<br>
            {{ $comment->body }}<br>
            <span>Napisany {{ Daty::showTimeAgo($comment->created_at) }}</span>
        </p>
    </div>

    <hr>
    @endforeach
    
</div>
@stop
@section('bottom_scripts')
<!--[if lt IE 9]>
<script src="{{ asset('js/vendor/respond.min.js') }}" type="text/javascript"></script>
<![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script> window.jQuery || document.write('<script src ="{{ asset('assets/js/vendor/jquery-1.10.2.min.js') }}">\x3C/script>');</script>
<script src="{{ asset('assets/js/vendor/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/script.min.js') }}"></script>
<script src="{{ asset('assets/js/ajax.js') }}"></script>
@stop