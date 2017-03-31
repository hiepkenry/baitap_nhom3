<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
	protected $fillable = ['user_id','order_sum','status','customer_id'];
	//public $timestamp = flase;

	public function Orderdetail(){
		return $this->hasMany('App\Orderdetail');
	}
	public function customer(){
		return $this->belongTo('App\Customer');
	}
}
