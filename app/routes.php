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
    Route::any('/', 'App\Controllers\Admin\PagesController@index');
    Route::resource('articles', 'App\Controllers\Admin\ArticlesController');
    Route::resource('pages', 'App\Controllers\Admin\PagesController');
});

// Home page
Route::get('/', array('as' => 'home', function()
{
return View::make('index');
}));

// Autor page
Route::get('autor', array(function()
{
return View::make('autor');
}));

// Javascript page
Route::get('javascript', array('as' => 'javascript', function()
{
return View::make('javascript');
}));

// Article list
Route::get('teksty', array('as' => 'article.list', function()
{
return View::make('articles')->with('entries', Article::orderBy('created_at', 'desc')->get());
}));

// Single article
Route::get('teksty/{slug}', array('as' => 'article', function($slug)
{
$article = Article::where('slug', $slug)->first();

if ( ! $article) App::abort(404, 'Article not found');

return View::make('article')->with('entry', $article);
}));

// Single page
Route::get('{slug}', array('as' => 'page', function($slug)
{
$page = Page::where('slug', $slug)->first();

if ( ! $page) App::abort(404, 'Page not found');

return View::make('site::page')->with('entry', $page);

}))->where('slug', '^((?!admin).)*$');

// 404 Page
App::missing(function($exception)
{
return Response::view('404', array(), 404);
});