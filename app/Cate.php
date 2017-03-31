<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $table = 'categorys';
	protected $fillable = ['name','description','parent_id'];
	//public $timestamp = flase;

	public function product(){
		return $this->hasMany('App\Book');
	}
}
