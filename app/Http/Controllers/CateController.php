<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CateRequest;
use App\Cate;

class CateController extends Controller
{
	public function getList(){
        $cate = Cate::select('id','name','description','parent_id')->orderBy('id','DESC')->get()->toArray();
		return view('admin.cate.list',compact('cate'));
	}
    public function getAdd(){
        $cate = Cate::select('id','name','description','parent_id')->get()->toArray();
    	return view('admin.cate.add',compact('cate'));
    }
    public function postAdd(CateRequest $request){
        $cate = new Cate();
        $cate->name = $request->name;
        $cate->parent_id = $request->parent_id;
        $cate->description = $request->txtDes;
        $cate->save();
     return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Success ! Thêm danh mục thành công']);
    }
    public function getEdit($id){
        $data = Cate::findOrfail($id)->toArray();
        $cate = Cate::select('id','name','description','parent_id')->get()->toArray();
    	return view('admin.cate.edit',compact('cate','data','id'));
    }
    public function postEdit($id,CateRequest $request){
        $cate = Cate::find($id);
        $cate->name = $request->input('name');
        $cate->parent_id = $request->input('parent_id');
        $cate->description = $request->input('txtDes');
        $cate->save();
        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success','flash_message'=>'Success ! Sửa danh mục thành công']);

    }
}
