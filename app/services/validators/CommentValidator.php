<?php

namespace App\Services\Validators;

class CommentValidator extends Validator {

    public static $rules = array(
        'author' => 'required',
        'body'  => 'required',
    );

}