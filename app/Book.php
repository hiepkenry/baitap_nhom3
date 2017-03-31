<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
	protected $fillable = ['title','alias','price','pages','couter','quantity','status','image','info','authors_name', 'publisher_name','publisher_date','sale','user_id','cate_id'];
	//public $timestamp = flase;

	public function comment(){
		return $this->hasMany('App\Comment');

	public function orderdetail(){
		return $this->hasMany('App\Orderdetail');
	}
	public function user(){
		return $this->belongTo('App\User');
	}
	 public function category(){
		return $this->belongTo('App\Cate');
	}
}
