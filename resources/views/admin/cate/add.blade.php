@extends('admin.master')
@section('content')
@include('admin.cate.header')

<div class="line"></div>
<div class="wraper">
	<div class="widget">
		<div class="title">
			<h6>Thêm mới danh mục sản phẩm</h6>
		</div>
		<form id="form" class="form" enctype="multipart/form-data" method="post" action="">
		  <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
		<fieldset>
	<div class="formRow">
	    <label for="param_name"  class="formLeft">Tên sản phẩm<span class="req"></span> </label>
	<div class="formRight">
		<span class="oneTwo">
		<input type="text"  _autocheck="true" id="param_name" value="" name="name"></input></span>
			<br><p>@include('admin.errors')</p>
		<span class="autocheck" name="name_autocheck"></span>
		
	</div>
	<div class="clear"></div>
	</div>
	<div class="formRow">
	    <label for="param_name"  class="formLeft">Tên thư mục cha </label>
	<div class="formRight">
		<span class="oneTwo"><select type="text"  _autocheck="true" id="parent_id" " name="parent_id">
			<option value="0">Là danh mục cha</option>
			 <?php cate_parent($cate); ?>
			
		</select></span>
		<span class="autocheck" name="parent_id_autocheck"></span>
		<div class="clear error" name="name_error"></div>
	</div>
	<div class="clear"></div>
	</div>
	
	<div class="formRow">
	    <label for="param_sort_order"  class="formLeft">Mô tả danh mục</span> </label>
	<div class="formRight">
		<span class="oneTwo">
		<textarea type="text"  _autocheck="true" id="param_sort_order" value="1" name="txtDes"></textarea></span>
		<span class="autocheck" name="sort_oder_autocheck"></span>
		<div class="clear error" name="sort_order_error"></div>
	</div>
	<div class="clear"></div>
</div>
	
	<div class="formSubmit">
        <input class="redB" type="submit" value="Thêm mới">
        
    </div>
    <div class="clear"></div>
 </fieldset>
 </form>
	</div>
</div>
@endsection()