<?php namespace App\Services\Validators;

abstract class Validator {

    protected $data;

    public $errors;

    public static $rules;

    public function __construct($data = null)
    {
        $this-&gt;data = $data ?: \Input::all();
    }

    public function passes()
    {
        $validation = \Validator::make($this-&gt;data, static::$rules);

        if ($validation-&gt;passes()) return true;

        $this-&gt;errors = $validation-&gt;messages();

        return false;
    }

}