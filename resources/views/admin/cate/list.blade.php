@extends('admin.master')
@section('content')
@include('admin.cate.header')
<!-- Main content wrapper -->
<div class="wrapper">
 @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
         @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
         @endforeach
                </ul>
            </div>

 @endif   
	<!-- Static table -->
	<div class="widget" id='main_content'>
	
		<div class="title">
		    <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh sách Danh mục</h6>
			<div class="num f12">Tổng số: <b>{!! $item['id']->count()  !!}</b></div>
		</div>
		
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable taskWidget" id="checkAll">
			<thead>
				<tr>
				    <td style="width:21px;"><img src="{{ url('public/admin/images/icons/tableArrows.png') }}" /></td>
					<td>Tên</td>
					<td>Mô tả</td>
					<td>Danh mục cha</td>
					
					<td style="width:150px;">Hành động</td>
				</tr>
			</thead>
			
			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="3">
					     <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="admin/cat/del_all.html">
									<span style='color:white;'>Xóa hết</span>
								</a>
						 </div>
							
					     <div class='pagination'>
			               &nbsp;<strong>1</strong>&nbsp;<a href="admin/cat/index/10">2</a>&nbsp;<a href="admin/cat/index/10">Trang kế tiếp</a>&nbsp;			            </div>
					</td>
				</tr>
			</tfoot>
			
			<tbody>
			@foreach($cate as $item)
			     <tr class='row_18'>
			        <td><input type="checkbox" name="id[]" value="18" /></td>
					<td>{!! $item['name'] !!}</td>
					<td>{!! $item['description'] !!}</td>  
					<td> @if ($item["parent_id"] == 0) 
                                    {!! "None" !!}
                                @else 
                                <?php
                                    $cate = DB::table('categorys')->where('id',$item['parent_id'])->first();
                                    echo $cate->name;
                                 ?> 
                                @endif</td> 
					
					<td class="option">
						<a href="{!! URL::route('admin.cate.getEdit',$item['id']) !!}" title="Chỉnh sửa" class="tipS ">
							<img src="{{ url('public/admin/images/icons/color/edit.png') }}" />
						</a>
						
						<a href="{!! URL::route('admin.cate.getDelete',$item['id']) !!}" title="Xóa" class="tipS verify_action" >
						    <img src="{{ url('public/admin/images/icons/color/delete.png') }}" />
						</a>
					</td>
				</tr>
			@endforeach		
								
			</tbody>
		</table>
	</div>
</div>
<div class="clear mt30"></div>
		
@endsection()