<?php

use Input, Redirect, Notification;

class CommentsController extends BaseController {

	public function postComment()
	{
		$comment = new Comment();
		$comment->foreign_id = Input::get('foreign_id');
		$comment->name    = Input::get('author');
		$comment->body    = Input::get('body');
		$comment->save();

		$slug = Input::get('slug');

		Notification::success('Komentarz został zapisany!');
   return Redirect::route('article', array('slug' => $slug)); // change to current article view

}
}