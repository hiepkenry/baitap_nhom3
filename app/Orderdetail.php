<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    //
    protected $table = 'ordersdetail';
	protected $fillable = ['sale','price','quantity','book_id','order_id'];
	//public $timestamp = flase;

    public function books(){
		return $this->belongTo('App\Book');
	}
	 public function order(){
		return $this->belongTo('App\Order');
	}
}
