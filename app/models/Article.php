<?php namespace App\Models;

class Article extends \Eloquent {

	public function comments()
	{
		return $this->hasMany('Comment')->orderBy('created_at', 'desc');
	}

}