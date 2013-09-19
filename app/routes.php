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

Route::get('kontakt', array('as' => 'kontakt', function()
{
    return View::make('pages.kontakt');
}));

// Contact form route
Route::post('kontakt', function()
{
    $rules = array(
        'message' => 'required',
        );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails())
    {
        return Redirect::route('kontakt')->withErrors($validator)->withInput();
    }
    else
    {
        $data = array(
            'message' => Input::get('message'),
            );
        Mail::send('pages.kontakt', $data, function($message) use ($data)
        {
            $message->to('pagodemc@gmail.com');
            $message->subject('email_subject');
            $message->from('sender_email', 'sender_name');;
            $message->body('email_content');
        });
    }
    Session::flash('success', true);
    return Redirect::route('kontakt');
});



















// Article list
Route::get('teksty', array('as' => 'article.list', function()
{
    return View::make('articles.articles')->with('entries', Article::orderBy('created_at', 'desc')->get());
}));

// Single article
Route::get('teksty/{slug}', array('as' => 'article', function($slug)
{
    $article = Article::where('slug', $slug)->first();

    if ( ! $article) App::abort(404, 'Article not found');

    return View::make('articles.article')->with('entry', $article);
}));

// 404 Page
App::missing(function($exception)
{
    return Response::view('pages.404', array(), 404);
});