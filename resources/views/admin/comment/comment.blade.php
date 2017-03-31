@extends('admin.master')
@section('content')		
<!-- Common -->
<!-- Title area -->
<div class="titleArea">
	<div class="wrapper">
		<div class="pageTitle">
			<h5>Phản hồi</h5>
			<span>Quản lý phản hồi</span>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="line"></div>
<!-- Main content wrapper -->
<div class="wrapper">

	<!-- Static table -->
	<div class="widget">
	
		<div class="title">
			<span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
			<h6>Danh sách Phản hồi</h6>
			<div class="num f12"><b>0</b> Phản hồi</div>
		</div>
		
		<ul class="tabs">
			<li class=""><a href="admin/comment.html?status=0">Chưa kiểm duyệt</a></li>
			<li class="activeTab"><a href="admin/comment.html?status=1">Đã kiểm duyệt</a></li>
		</ul>
            
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable taskWidget" id="checkAll">
			<thead>
				<tr>
				    <td style="width:21px;"><img src="{{ url('public/admin/images/icons/tableArrows.png') }}" /></td>
					<td style="width:240px;">Tên</td>
					<td style="width:240px;">Sản phẩm</td>
					<td>Nội dung</td>
					<td style="width:90px;">Ngày tạo</td>
					<td style="width:80px;">Hành động</td>
				</tr>
			</thead>
			
 			<tfoot class="auto_check_pages">
				<tr>
					<td colspan="6">
						 <div class="list_action itemActions">
								<a href="#submit" id="submit" class="button blueB" url="admin/comment/del_all.html">
									<span style='color:white;'>Xóa hết</span>
								</a>
						 </div>
						<div class='pagination'>
			            </div>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<tr class='row_3'>
			        <td><input type="checkbox" name="id[]" value="3" /></td>
					<td>
					    <a class="wUserPic" title="" href="#"><img src="{{ url('public/admin/images/user.png') }}" width="60px" align="left"/></a>
						<ul class="leftList">
	                            <li><a href='mailto:hoang@gmail.com'><strong>hoang@gmail.com</strong></a></li>
	                            <li>abc</li>
                        </ul>
					</td>
					
					<td>
						<div class="image_thumb">
							<img src="../upload/product/product6.jpg" height="50">
							<div class="clear"></div>
						</div>
						
						<a href="product/view/7.html" class="tipS" title="" target="_blank">
						<b>Tivi Toshiba</b>
						</a>	
					</td>
					
					<td>
					   <a href="" target="_blank">
					      <strong> </strong>
					   </a>
					   <br>Test comment<span style='color:#006400'>(<strong>Like:</strong> 8)</span>
					</td>
					
					<td class="textC">23-08-2014</td>
					
					<td class="option">
					    <a href="admin/comment/unactive/3.html" title="Khóa phản hồi này" class="tipS">
							<img src="{{ url('public/admin/images/icons/color/block.png') }}" />
						</a>
						<a href="admin/comment/view/3.html" title="Xem" class="tipS lightbox">
							<img src="{{ url('public/admin/images/icons/color/view.png') }}" />
						</a>
						<a href="admin/comment/del/3.html" title="Xóa" class="tipS verify_action" >
							<img src="{{ url('public/admin/images/icons/color/delete.png') }}" />
						</a>
					</td>
					</tr>
					<tr class='row_2'>
			        <td><input type="checkbox" name="id[]" value="2" /></td>
					<td>
					     <a class="wUserPic" title="" href="#"><img src="{{ url('public/admin/images/user.png') }}" width='60px' align='left'/></a>
						<ul class="leftList">
	                            <li><a href='mailto:anh@gmail.com'><strong>anh@gmail.com</strong></a></li>
	                            <li>Vu van Anh</li>
                        </ul>
					</td>
					
					<td>
						<div class="image_thumb">
							<img src="../upload/product/product6.jpg" height="50">
							<div class="clear"></div>
						</div>
						
						<a href="product/view/7.html" class="tipS" title="" target="_blank">
						<b>Tivi Toshiba</b>
						</a>	
					</td>
					
					<td>
					   <a href="" target="_blank">
					      <strong> </strong>
					   </a>
					   <br>San pham nay van con hang<span style='color:#006400'>(<strong>Like:</strong> 3)</span>
					</td>
					<td class="textC">23-08-2014</td>
					<td class="option">
					    <a href="admin/comment/unactive/2.html" title="Khóa phản hồi này" class="tipS">
							<img src="{{ url('public/admin/images/icons/color/block.png') }}" />
						</a>
						<a href="admin/comment/view/2.html" title="Xem" class="tipS lightbox">
							<img src="{{ url('public/admin/images/icons/color/view.png') }}" />
						</a>
						<a href="admin/comment/del/2.html" title="Xóa" class="tipS verify_action" >
							<img src="{{ url('public/admin/images/icons/color/delete.png') }}" />
						</a>
					</td>
					</tr>
					<tr class='row_1'>
			        <td><input type="checkbox" name="id[]" value="1" /></td>
					<td>
					    <a class="wUserPic" title="" href="#"><img src="{{ url('public/admin/images/user.png') }}" width='60px' align='left'/></a>
						<ul class="leftList">
	                        <li><a href='mailto:hoangvantuyencnt@gmail.com'><strong>hoangvantuyencnt@gmail.com</strong></a></li>
	                         <li>Hoang van tuyen</li>
                         </ul>
					</td>
					
					<td>
						<div class="image_thumb">
							<img src="../upload/product/product6.jpg" height="50">
							<div class="clear"></div>
						</div>
						
						<a href="product/view/7.html" class="tipS" title="" target="_blank">
						<b>Tivi Toshiba</b>
						</a>	
					</td>
					<td>
					   <a href="" target="_blank">
					      <strong> </strong>
					   </a>
					   <br>San pham noi con khong admin?<span style='color:#006400'>(<strong>Like:</strong> 10)</span>
					</td>
					<td class="textC">23-08-2014</td>
					
					<td class="option">
					    <a href="admin/comment/unactive/1.html" title="Khóa phản hồi này" class="tipS">
							<img src="{{ url('public/admin/images/icons/color/block.png') }}" />
						</a>
						<a href="admin/comment/view/1.html" title="Xem" class="tipS lightbox">
							<img src="{{ url('public/admin/images/icons/color/view.png') }}" />
						</a>
						
						<a href="admin/comment/del/1.html" title="Xóa" class="tipS verify_action" >
							<img src="{{ url('public/admin/images/icons/color/delete.png') }}" />
						</a>
					</td>
				</tr>
			</tbody>
			
		</table>
	</div>
</div>
    <div class="clear mt30"></div>
		
@endsection()