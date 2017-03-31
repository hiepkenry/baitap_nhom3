<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
	protected $fillable = ['comment','book_id','user_id'];
	//public $timestamp = flase;

	 public function books(){
		return $this->belongTo('App\Book');
	}
	 
}
