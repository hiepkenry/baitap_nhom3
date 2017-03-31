<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
	protected $fillable = ['username','fullname','address','phone', 'email', 'birthday', 'image','gender','password','remember_token'];
	//public $timestamp = flase;

	public function Order(){
		return $this->hasMany('App\Order');
	}
	
}
