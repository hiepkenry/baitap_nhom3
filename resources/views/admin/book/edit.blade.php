@extends('admin.master')
@section('content')
<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h5>Danh mục</h5>
            <span>Quản lý thể loại</span>
        </div>
        
        <div class="horControlB menu_action">
            <ul>
                <li><a href="{!! route('admin.product.getAdd') !!}">
                    <img src="{{ url('public/admin/images/icons/control/16/add.png') }}" />
                    <span>Thêm mới</span>
                </a></li>
                
                <li><a href="{!! route('admin.product.list') !!}">
                    <img src="{{ url('public/admin/images/icons/control/16/list.png') }}" />
                    <span>Danh sách</span>
                </a></li>
            </ul>
        </div>
        
        <div class="clear"></div>
    </div>
</div>
<div class="wrapper">

    <!-- Form -->
    <form enctype="multipart/form-data" method="post" action="" id="form" class="form">
        <fieldset>
            <div class="widget">
                <div class="title">
                    <img class="titleIcon" src="{{ url('public/admin/images/icons/dark/add.png') }}">
                    <h6>cập nhật Sản phẩm</h6>
                </div>

                <ul class="tabs">
                    <li class="activeTab"><a href="#tab1">Thông tin chung</a></li>
                    <li class="" ><a href="#tab2">SEO Onpage</a></li>
                    <li class="" ><a href="#tab3">Bài viết</a></li>

                </ul>

                <div class="tab_container">
                    <div class="tab_content pd0" id="tab1" style="display: block;" >
                        <div class="formRow">
                            <label for="param_name" class="formLeft">Tên:<span class="req">*</span></label>
                            <div class="formRight">
                                <span class="oneTwo"><input type="text" _autocheck="true" id="param_name" value="" name="name"></span>
                                <span class="autocheck" name="name_autocheck"></span>
                                <div class="clear error" name="name_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label class="formLeft">Hình ảnh:<span class="req">*</span></label>
                            <div class="formRight">
                                <div class="left">
                                    <input type="file" name="image" id="image" size="25">
                                    <img src="{{ url('public/upload/product/product7.jpg') }}" style="widht:100px;height:70px" >                                </div>
                                <div class="clear error" name="image_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                       

                        <div class="formRow">
                            <label class="formLeft">Ảnh kèm theo:</label>
                            <div class="formRight">
                                <div class="left"><input type="file" multiple="" name="image_list[]" id="image_list" size="25"></div>
                                  
                                <img src="{{ url('public/upload/product/product6.jpg') }}" style="width:100px;height:70px;margin:5px" >
                               
                                <div class="clear error" name="image_list_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <!-- Price -->
                        <div class="formRow">
                            <label for="param_price" class="formLeft">
                                Giá :
                                <span class="req">*</span>
                            </label>
                            <div class="formRight">
		<span class="oneTwo">
			<input type="text" value="" _autochek="true" class="format_number" id="param_price" style="width:100px" name="price">
			<img src="{{ url('public/admin/crown/images/icons/notifications/information.png') }}" style="margin-bottom:-8px" original-title="Giá bán sử dụng để giao dịch" class="tipS">
		</span>
                                <span class="autocheck" name="price_autocheck"></span>
                                <div class="clear error" name="price_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <!-- Price -->
                        <div class="formRow">
                            <label for="param_discount" class="formLeft">
                                Giảm giá (VND)
                                <span></span>:
                            </label>
                            <div class="formRight">
		<span>
			<input type="text" value="" class="format_number" id="param_discount" style="width:100px" name="discount">
			<img src="{{ url('public/admin/crown/images/icons/notifications/information.png') }}" style="margin-bottom:-" title="số tiền giảm giá" class="tipS">
		</span>
                                <span class="autocheck" name="discount_autocheck"></span>
                                <div class="clear error" name="discount_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>


                        <div class="formRow">
                            <label for="param_cat" class="formLeft">Thể loại:<span class="req">*</span></label>
                            <div class="formRight">
                                <select name="catalog" class="left">
                                    <option value=""></option>
                                    <!-- kiem tra danh muc co danh muc con hay khong -->
                                    
                                            <optgroup label="">
                                             
                                                    <option value="" >	name</option>
                                                
                                            </optgroup>
                                       
                                           

                                </select>
                                <span class="autocheck" name="cat_autocheck"></span>
                                <div class="clear error" name="cat_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>


                        <!-- warranty -->
                        <div class="formRow">
                            <label for="param_warranty" class="formLeft">
                                Bảo hành :
                            </label>
                            <div class="formRight">
                                <span class="oneFour"><input type="text" id="param_warranty" name="warranty" value=""></span>
                                <span class="autocheck" name="warranty_autocheck"></span>
                                <div class="clear error" name="warranty_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label for="param_sale" class="formLeft">Tặng quà:</label>
                            <div class="formRight">
                                <span class="oneTwo"><textarea cols="" rows="4" id="param_gifts" name="gifts"></textarea></span>
                                <span class="autocheck" name="sale_autocheck"></span>
                                <div class="clear error" name="sale_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>					         <div class="formRow hide"></div>
                    </div>

                    <div class="tab_content pd0" id="tab2" style="display: none;">

                        <div class="formRow">
                            <label for="param_site_title" class="formLeft">Title:</label>
                            <div class="formRight">
                                <span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_site_title" name="site_title"></textarea></span>
                                <span class="autocheck" name="site_title_autocheck"></span>
                                <div class="clear error" name="site_title_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label for="param_meta_desc" class="formLeft">Meta description:</label>
                            <div class="formRight">
                                <span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_desc" name="meta_desc"></textarea></span>
                                <span class="autocheck" name="meta_desc_autocheck"></span>
                                <div class="clear error" name="meta_desc_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <div class="formRow">
                            <label for="param_meta_key" class="formLeft">Meta keywords:</label>
                            <div class="formRight">
                                <span class="oneTwo"><textarea cols="" rows="4" _autocheck="true" id="param_meta_key" name="meta_key"> </textarea></span>
                                <span class="autocheck" name="meta_key_autocheck"></span>
                                <div class="clear error" name="meta_key_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow hide"></div>
                    </div>

                    <div class="tab_content pd0" id="tab3" style="display: none;">
                        <div class="formRow">
                            <label class="formLeft">Nội dung:</label>
                            <div class="formRight">
                                <textarea class="editor" id="param_content" name="content" style="display: none;"> </textarea>
                                <div class="clear error" name="content_error"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="formRow hide"></div>
                    </div>


                </div><!-- End tab_container-->

                <div class="formSubmit">
                    <input type="submit" class="redB" value="cập nhật">
                    <input type="reset" class="basic" value="Hủy bỏ">
                </div>
                <div class="clear"></div>
            </div>
        </fieldset>
    </form>
</div>
<div class="clear mt30"></div>
@endsection