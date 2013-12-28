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

        if (Request::ajax()) {
            echo('<div class="comment">
                  <p>' . $comment->name . ':<br>
                    ' . $comment->body . '<br>
                  <span>Napisany przed chwilą</span>
                  </p>
                  </div>
                  <hr>');
        } else {
            Notification::success('Komentarz został zapisany!');
            return Redirect::route('article', array('slug' => $slug)); // change to current article view
        }
    }
}