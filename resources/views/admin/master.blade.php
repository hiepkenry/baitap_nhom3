<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ban quản trị</title>
<meta name="robots" content="noindex, nofollow" />
<link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="{{ url('public/admin/crown/css/main.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('public/admin/css/css.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ url('public/admin/js/jquery/colorbox/colorbox.css') }}" media="screen" />
<!-- <link rel="stylesheet" type="text/css" href="{{ url('public/admin/bootstrap/css/bootstrap.min.css') }}" media="screen" /> -->
</head>
<body>
	<!-- Left side content -->
	<div id="left_content">
		<div id="leftSide" style="padding-top:30px;">
		
		    <!-- Account panel -->
			
<div class="sideProfile">
	<a class="profileFace" title="" href="#"><img width="40" src="{{ url('public/admin/images/user.png') }}"></a>
	<span>Xin chào: <strong>Admin!</strong></span>
	<span>Cấn Văn Hiệp</span>
	<div class="clear"></div>
</div>
<!-- Left side content -->
 <div class="col-lg-12">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-{!! Session::get('flash_level') !!}">
                                {!! Session::get('flash_message') !!}
                            </div>
                        @endif
                    </div>
<div class="sidebarSep"></div>		    
		    <!-- Left navigation -->
<ul id="menu" class="nav">

	<li class="home">
		<a href="admin/home.html" class="" >
				<span>Bảng điều khiển</span>
				<strong></strong>
		</a>
	</li>
	<li class="tran">
		<a href="admin/tran.html" class=" exp" >
				<span>Quản lý bán hàng</span>
				<strong>2</strong>
		</a>
			
<ul class="sub">
	<li >
		<a href="admin/tran.html">Giao dịch</a>
	</li>
	<li >
		<a href="{!! route('admin.order.order') !!}">Đơn hàng sản phẩm</a>
	</li>
</ul>
	</li>
		<li class="product">
		<a href="admin/product.html" class=" exp" >
				<span>Sản phẩm</span>
				<strong>3</strong>
		</a>
<ul class="sub">
	<li >
		<a href="{!! route('admin.book.list') !!}">Sản phẩm</a>
	</li>
	<li class="this">
		<a href="{!! route('admin.cate.list') !!}">Danh mục</a>
	</li>
	<li >
		<a href="{!! route('admin.comment.comment') !!}">Phản hồi</a>
	</li>
</ul>
	</li>
	<li class="account">
		<a href="admin/account.html" class=" exp" >
				<span>Tài khoản</span>
				<strong>3</strong>
		</a>
<ul class="sub">
	<li >
		<a href="admin/admin.html">Ban quản trị</a>
	</li>
	<li ><a href="admin/admin_group.html">Nhóm quản trị</a>
	</li>
	<li ><a href="admin/user.html">Thành viên</a>
	</li>
</ul>
	</li>
	<li class="support">
		<a href="admin/support.html" class=" exp" >
				<span>Hỗ trợ và liên hệ</span>
				<strong>2</strong>
		</a>
<ul class="sub">
	<li >
		<a href="admin/support.html">Hỗ trợ</a>
	</li>
	<li >
		<a href="admin/contact.html">Liên hệ</a>
	</li>
</ul>
	</li>
	<li class="content">
		<a href="admin/content.html" class=" exp" >
				<span>Nội dung</span>
				<strong>4</strong>
		</a>
<ul class="sub">
	<li >
		<a href="admin/slide.html">Slide</a>
	</li>
	<li >
		<a href="admin/news.html">Tin tức</a>
	</li>
	<li >
		<a href="admin/info.html">Trang thông tin</a>
	</li>
	<li >
		<a href="admin/video.html">Video</a>
	</li>
ul>
	</li>
</ul>
			
		</div>
		<div class="clear"></div>
	</div>
	
	
	<!-- Right side -->
	<div id="rightSide">
	
	    <!-- Account panel top -->
		
<div class="topNav">
	<div class="wrapper">
		<div class="welcome">
			<span>Xin chào: <b>admin!</b></span>
		</div>
		
		<div class="userNav">
			<ul>
				<li><a href="" target="_blank">
					<img style="margin-top:7px;" src="{{ url('public/admin/images/icons/light/home.png') }}" />
					<span>Trang chủ</span>
				</a></li>
				
				<!-- Logout -->
				<li><a href="admin/home/logout.html">
					<img src="{{ url('public/admin/images/icons/topnav/logout.png') }} "" alt="" />
					<span>Đăng xuất</span>
				</a></li>
				
			</ul>
		</div>
		
		<div class="clear"></div>
	</div>
</div>		
@yield('content')
  <!-- Footer -->
	    <div id="footer">
	    		        <div class="wrapper">
	        	<div>Bản quyền © 2012-2020 hiepkenry</div>
	        </div>
	     </div>
	</div>
	<div class="clear"></div>
</body>
<script type="text/javascript" src="{{ url('public/admin/js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/js/jquery/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/spinner/jquery.mousewheel.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/forms/uniform.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/forms/jquery.tagsinput.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/forms/autogrowtextarea.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/forms/jquery.maskedinput.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/forms/jquery.inputlimiter.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/tables/datatable.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/tables/tablesort.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/tables/resizable.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/ui/jquery.tipsy.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/ui/jquery.collapsible.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/ui/jquery.progress.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/ui/jquery.timeentry.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/ui/jquery.colorpicker.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/ui/jquery.jgrowl.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/ui/jquery.breadcrumbs.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/plugins/ui/jquery.sourcerer.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/crown/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/js/ckeditor/ckeditor.js')}}"></script> 
<script type="text/javascript" src="{{ url('public/admin/js/jquery/chosen/chosen.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/js/jquery/scrollTo/jquery.scrollTo.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/js/jquery/number/jquery.number.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/admin/js/jquery/formatCurrency/jquery.formatCurrency-1.4.0.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/js/jquery/zclip/jquery.zclip.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/js/custom_admin.js') }}"></script>
<script type="text/javascript" src="{{ url('public/admin/js/jquery/colorbox/jquery.colorbox.js') }}"></script>
<!-- <script type="text/javascript" src="{{ url('public/admin/bootstrap/js/bootstrap.min.js') }}"></script>
 -->


</html>