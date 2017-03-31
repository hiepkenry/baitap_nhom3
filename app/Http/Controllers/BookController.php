<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getList(){
		return view('admin.book.list');
	}
    public function getAdd(){
    	return view('admin.book.add');
    }
    public function postAdd(){

    }
    public function getEdit(){
    	return view('admin.book.edit');
    }
    public function postEdit(){
    	
    }
}
