<?php namespace App\Models;

class Article extends \Eloquent {

	public function author()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}

	public function comments()
	{
		return $this->hasMany('Comment', 'foreign_id')->orderBy('created_at', 'desc');
	}

}