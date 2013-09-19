<?php namespace App\Controllers\Admin;

use App\Models\Article;
use Input, Notification, Redirect, Sentry, Str;

class ArticlesController extends \BaseController {

	public function index()
	{
		return \View::make('admin.articles.index')->with('articles', Article::all());
	}

	public function show($id)
	{
		return \View::make('admin.articles.show')->with('article',Article::find($id));
	}

	public function create()
	{
		return \View::make('admin.articles.create');
	}

	public function store()
	{

			$article = new Article;
			$article->title = Input::get('title');
			$article->slug = Str::slug(Input::get('title'));
			$article->body = Input::get('body');
			$article->user_id = Sentry::getUser()->id;
			$article->save();

			Notification::success('Artykuł został zapisany.');

			return Redirect::route('admin.articles.edit', $article->id);
	}

	public function edit($id)
	{
		return \View::make('admin.articles.edit')->with('articles.article', Article::find($id));
	}

	public function update($id)
	{

			$article = Article::find($id);
			$article->title = Input::get('title');
			$article->slug = Str::slug(Input::get('title'));
			$article->body = Input::get('body');
			$article->user_id = Sentry::getUser()->id;
			if (Input::hasFile('image')) $article->image = Image::upload(Input::file('image'), 'articles/' . $article->id);
			$article->save();

			Notification::success('Artykuł został zapisany.');

			return Redirect::route('admin.articles.edit', $article->id);
	}

	public function destroy($id)
	{
		$article = Article::find($id);
		$article->delete();

		Notification::success('Artykuł został usunięty.');

		return Redirect::route('admin.articles.index');
	}

}

