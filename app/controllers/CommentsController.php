<?php

class CommentsController extends BaseController
{

    public function postComment()
    {
        $comment             = new Comment();
        $comment->article_id = Input::get('article_id');
        $comment->name       = Input::get('author');
        $comment->body       = Input::get('body');
        $comment->save();

        $slug = Input::get('slug');

//        Notification::success('Komentarz został zapisany!');
//        return Redirect::route('article', array('slug' => $slug)); // change to current article view


        $article = Article::where('slug', $slug)->with('comments')->first();

        return View::make('articles.article')->with('entry', $article);
    }
}