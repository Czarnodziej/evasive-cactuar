<?php

use App\Services\Validators\CommentValidator;

class CommentsController extends BaseController
{
    public function postComment()
    {
        $validation = new CommentValidator;
        $slug       = Input::get('slug');
        if ($validation->passes()) {
            $comment             = new Comment();
            $comment->article_id = Input::get('article_id');
            $comment->name       = Input::get('author');
            $comment->body       = Input::get('body');
            $comment->save();

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
                return Redirect::route('article', array('slug' => $slug));
            }
        } else {
            Notification::error('Wypełnienie pól autora i'
                    . ' treści komentarza jest wymagane.');
            return Redirect::route('article', array('slug' => $slug));
        }
    }
}