@extends('frontend.layouts.master')

@section('title')
    giỏ hàng
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="/frontend/css/checkout.css">
@endsection

@section('content')
<div class="inner_page-banner one-img">
</div>
<!-- short -->
<div class="using-border py-3">
   <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
         <li>
            <a href="index.html">Home</a>
            <span>/ /</span>
         </li>
         <li>Checkout</li>
      </ul>
   </div>
</div>
<!-- //short-->
<!--Checkout-->  
<!-- //banner -->
<!-- top Products -->
<section class="checkout py-lg-4 py-md-3 py-sm-3 py-3">
   <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="shop_inner_inf">
         <div class="privacy about">
            <h3>Chec<span>kout</span></h3>
            <div class="checkout-right">
               <h4>Your shopping cart contains: <span>3 Products</span></h4>
               <table class="timetable_sub">
                  <thead>
                     <tr>
                        <th>id</th>
                        <th>sản phẩm</th>
                        <th>Số Lượng</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Giá thuê</th>
                        <th>Remove</th>
                     </tr>
                  </thead>
                  <tbody>
                      <?php 
                           $total = 0;
                      ?>
                      @foreach ($carts as $id=> $cart)
                      <?php 
                           $total = $cart['price']*$cart['quantity'];
                      ?>
                      <tr class="rem1">
                        <td class="invert">{{$id}}</td>
                        <td class="invert-image"><a href="single.html"><img src="/frontend/images/{{$cart['image']}}" alt=" " class="img-responsive"></a></td>
                        <td class="invert">
                           <div class="quantity">
                              <div class="quantity-select" style="display: flex">
                                 <div class="entry value-minus">&nbsp;</div>
                                 <div class="entry value"><span>{{$cart['quantity']}}</span></div>
                                 <div class="entry value-plus active">&nbsp;</div>
                              </div>
                           </div>
                        </td>
                        <td class="invert">{{$cart['name']}}</td>
                        <td class="invert">{{number_format($cart['price'])}} VNĐ</td>
                        <td class="invert">{{number_format($cart['rent'])}} VNĐ/ ngày</td>
                        <td class="invert">
                           <div style="display: flex">
                              <a href="" class=" btn btn-primary"> cập nhật</a>
                              <a href="" class=" btn btn-danger"> xóa</a>

                           </div>
                           
                        </td>
                     </tr>  
                      @endforeach
                      
                      
                     
                     
                  </tbody>
               </table>
            </div>
            <div class="checkout-left">
               <div class="col-md-4 checkout-left-basket">
                  <h4>Continue to basket</h4>
                  <ul>
                     @foreach ($carts as $cart)
                     <li>{{$cart['name']}} <i>-</i> <span>{{$cart['price']*$cart['quantity']}} </span></li>
                     
                     @endforeach
                     <li>Total <i>-</i> <span>{{$total}}</span></li>
                  </ul>
               </div>
               <div class="col-md-8 address_form">
                  <h4>Tiến hành đặt hàng</h4>
                  
                  <div class="checkout-right-basket">
                     <a href="">Đặt Hàng </a>
                  </div>
               </div>
               <div class="clearfix"> </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <!-- //top products -->
   </div>
</section>
@endsection

@section('scrip')
<script>
    $('.value-plus').on('click', function () {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) + 1;
        divUpd.text(newVal);
    });
    
    $('.value-minus').on('click', function () {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) - 1;
        if (newVal >= 1) divUpd.text(newVal);
    });
 </script>
 <!--quantity-->
 <!--closed-->
 <script>
    $(document).ready(function (c) {
        $('.close1').on('click', function (c) {
            $('.rem1').fadeOut('slow', function (c) {
                $('.rem1').remove();
            });
        });
    });
 </script>
 <script>
    $(document).ready(function (c) {
        $('.close2').on('click', function (c) {
            $('.rem2').fadeOut('slow', function (c) {
                $('.rem2').remove();
            });
        });
    });
 </script>
 <script>
    $(document).ready(function (c) {
        $('.close3').on('click', function (c) {
            $('.rem3').fadeOut('slow', function (c) {
                $('.rem3').remove();
            });
        });
    });
 </script>
@endsection