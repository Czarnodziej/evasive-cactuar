<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Admin Section
Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'App\Controllers\Admin\AuthController@getLogout'));
Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'App\Controllers\Admin\AuthController@getLogin'));
Route::post('admin/login', array('as' => 'admin.login.post', 'uses' => 'App\Controllers\Admin\AuthController@postLogin'));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
    Route::any('/', 'App\Controllers\Admin\ArticlesController@index');
    Route::resource('articles', 'App\Controllers\Admin\ArticlesController');
});

// Single pages
Route::get('/', array('as' => 'home', function()
{
    return View::make('pages.home');
}));

Route::get('autor', array('as' => 'autor', function()
{
    return View::make('pages.autor');
}));

Route::get('javascript', array('as' => 'javascript', function()
{
    return View::make('pages.javascript');
}));

// Article list
Route::get('teksty', array('as' => 'article.list', function()
{
    return View::make('articles.index')->with('entries', Article::orderBy('created_at', 'desc')->get());
}));

// Single article
Route::get('teksty/{slug}', array('as' => 'article', function($slug)
{
    $article = Article::where('slug', $slug)->with( array('author', 'comments') )->first();;

    if ( ! $article) App::abort(404, 'Artykuł nie został odnaleziony');

    return View::make('articles.article')->with('entry', $article);
}));

//Post comments
Route::post('comment', array('as' => 'comment', function()
{
   $comment = new Comment();
   $comment->foreign_id = Input::get('foreign_id');
   $comment->name    = Input::get('author');
   $comment->body    = Input::get('body');
   $comment->save();

   $slug = Input::get('slug');

   Notification::success('Komentarz został zapisany!');
   return Redirect::route('article', array('slug' => $slug)); // change to current article view
}));

// 404 Page
App::missing(function($exception)
{
    return Response::view('pages.404', array(), 404);
});

// Contact form
Route::get('kontakt', array('as' => 'kontakt', function()
{
    return View::make('pages.kontakt');
}));

Route::post('kontakt', function()
{
   $data = array(
    'email_content' => Input::get('email_content'),
    'subject' => Input::get('email_subject'),
    'sender_email' => Input::get('sender_email'),
    'sender_name' => Input::get('sender_name'),
    );
   Mail::send('emails.default', $data, function($message) use ($data)
   {
    $message->to('pagodemc@gmail.com');
    $message->subject('laraveil@czarnodziej.sanfree.eu');
});

   Session::flash('success', true);
   return Redirect::route('kontakt');
});