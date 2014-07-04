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

//Pagination parameter override in order for it to be shown in Polish language
Paginator::setPageName('strona');

// Admin Section
Route::get('admin/logout', array('as' => 'admin.logout', 'uses' =>
    'App\Controllers\Admin\AuthController@getLogout'));
Route::get('admin/login', array('as' => 'admin.login', 'uses' =>
    'App\Controllers\Admin\AuthController@getLogin'));
Route::post('admin/login', array('as' => 'admin.login.post', 'uses' =>
    'App\Controllers\Admin\AuthController@postLogin'));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
    Route::any('/', 'App\Controllers\Admin\ArticlesController@index');
    Route::resource('articles', 'App\Controllers\Admin\ArticlesController');
    Route::get('elfinder', array('as' => 'elfinder', function()
{
    return View::make('admin.elfinder');
}));
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

Route::get('game', array('as' => 'game', function()
{
return View::make('pages.game');
}));

Route::get('impress', array('as' => 'impress', function()
{
return View::make('pages.impress');
}));

// Article list
Route::get('teksty', array('as' => 'article.list', function()
{
return View::make('articles.index')->with('entries', Article::orderBy('created_at', 'desc')->paginate(10));
}));

// Single article
Route::get('teksty/{slug}', array('as' => 'article', function($slug)
{
$article = Article::where('slug', $slug)->with('comments')->first();

if (!$article)
{
    App::abort(404, 'Artykuł nie został odnaleziony');
}
return View::make('articles.article')->with('entry', $article);
}));

//Post comments
Route::post('teksty/comment', array('as' => 'comment',
    'uses' => 'CommentsController@postComment'));

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

Route::post('kontakt', 'KontaktController@sendMail');
