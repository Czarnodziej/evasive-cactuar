<?php

class Comment extends Eloquent {

	public function article()
	{
		return $this->belongsTo('Article');
	}
	public function user()
	{
		return $this->belongsTo('User', 'name');
	}
}