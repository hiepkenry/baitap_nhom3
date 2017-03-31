@extends('site.master')
@section('content')
   @include('site.blocks.slider')
     @include('site.blocks.otherddetails')
 
<section id="featured" class="row mt40">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Sách cập nhật mới nhất</span><span class="subtext"> Đầu sách được xuất bản mới nhất</span></h1>
      <ul class="thumbnails">
        <li class="span3">
          <a class="prdocutname" href="product.html">tiểu thuyết</a>
          <div class="thumbnail">
            <span class="sale tooltip-test">Sale</span>
            <a href="#"><img alt="" src="{!! url('public/site/img/product/khoahoc5.jpg') !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">Giỏ Hàng</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="{!! url('public/site/img/product/khoahoc5.jpg') !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">Giỏ Hàng</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="offer tooltip-test" >Offer</span>
            <a href="#"><img alt="" src="{!! url('public/site/img/product/khoahoc5.jpg') !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">Giỏ Hàng</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="{!! url('public/site/img/product/khoahoc5.jpg') !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">Giỏ Hàng</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  
  <!-- Latest Product-->
  <section id="latest" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Sách Bán Chạy Nhất</span><span class="subtext">Đầu sách được bán ra nhiều nhất</span></h1>
      <ul class="thumbnails">
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="{!! url('public/site/img/product/khoahoc5.jpg') !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">Giỏ Hàng</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="{!! url('public/site/img/product/khoahoc5.jpg') !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">Giỏ Hàng</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <span class="new tooltip-test" >New</span>
            <a href="#"><img alt="" src="{!! url('public/site/img/product/khoahoc5.jpg') !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">Giỏ Hàng</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
        <li class="span3">
          <a class="prdocutname" href="product.html">Product Name Here</a>
          <div class="thumbnail">
            <a href="#"><img alt="" src="{!! url('public/site/img/product/khoahoc5.jpg') !!}"></a>
            <div class="pricetag">
              <span class="spiral"></span><a href="#" class="productcart">Giỏ Hàng</a>
              <div class="price">
                <div class="pricenew">$4459.00</div>
                <div class="priceold">$5000.00</div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  @endsection()