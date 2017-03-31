<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('test',function(){
	return view('admin.master');
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'cate'], function(){
		Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
	});
	Route::group(['prefix'=>'book'],function(){
		Route::get('list',['as'=>'admin.book.list','uses'=>'BookController@getList']);
		Route::get('add',['as'=>'admin.book.getAdd','uses'=>'BookController@getAdd']);
		Route::post('add',['as'=>'admin.book.postAdd','uses'=>'BookController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.book.getDelete','uses'=>'BookController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.book.getEdit','uses'=>'BookController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.book.postEdit','uses'=>'BookController@postEdit']);
		Route::get('delimg/{id}',['as'=>'admin.book.getDelImg','uses'=>'BookController@getDeleImg']);

	});
	Route::group(['prefix'=>'user'], function(){
		Route::get('list',['as'=>'admin.user.list','uses'=>'UserController@getList']);
		Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
		Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
	});
	Route::get('comment',['as'=>'admin.comment.comment','uses'=>'CommentController@getComment']);
	Route::get('order',['as'=>'admin.order.order','uses'=>'OrderController@getOrder']);

});
//site
Route::get('index',function(){
	return view('site.pages.home');
});
Route::get('cate',function(){
	return view('site.pages.categrory');
});
Route::get('cart',function(){
	return view('site.pages.cart');
});
Route::get('checkout',function(){
	return view('site.pages.checkout');
});
Route::get('contact',function(){
	return view('site.pages.login');
});
