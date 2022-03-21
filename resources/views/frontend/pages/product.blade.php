@extends('frontend.layouts.master')
@section('content')
<div class="inner_page-banner one-img">
</div>
<!--//banner -->
<!-- short -->
<div class="using-border py-3">
   <div class="inner_breadcrumb  ml-4">
      <ul class="short_ls">
         <li>
            <a href="index.html">Home</a>
            <span>/ /</span>
         </li>
         <li>Single Page</li>
      </ul>
   </div>
</div>
<!-- //short-->
<!--//banner -->
<!--/shop-->
@if (session('success'))
      <div class="alert alert-success" role="alert">
         {{ session('success') }}
      </div>
@endif
<section class="banner-bottom py-lg-5 py-3">
    <div class="container">
       <div class="inner-sec-shop pt-lg-4 pt-3">
          <div class="row">
             <div class="col-lg-4 single-right-left ">
                <div class="grid images_3_of_2">
                   <div class="flexslider1">
                      <ul class="slides">
                         <li data-thumb="images/f2.jpg">
                            <div class="thumb-image"> <img src="/frontend/images/{{$products->image}}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                         </li>
                      </ul>
                      <div class="clearfix"></div>
                   </div>
                </div>
             </div>
             <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                <h3>{{$products->name}}</h3>
                @if ($products->sale_price ==0)
                <p><span class="item_price">{{number_format($products->origin_price)}} đ</span>  
               </p>
                  @else 
                  <p><span class="item_price">{{number_format($products->sale_price)}} đ</span>
                     <del>{{number_format($products->origin_price)}}</del>
                  </p>
                @endif
                <div class="rating1">
                  <p><span class="item_price" >giá thuê: {{number_format($products->rent_price)}} đ</span>
                </div>
                <div class="description">
                   {{-- <form action=""  > --}}
                     <div class="form-group">
                        <button class="btn btn-primary" onclick="tamtinh()">
                           tạm tính
                        </button>
                     </div>
                     <form action="{{url('admin/order-rent')}}" method="GET">
                           <div class="form-group">
                              <label for="inputAddress">Ngày Nhận</label>
                              <input type="date" name="start_day" class="form-control" id="d1">
                           </div>
                           <div class="form-group">
                              <label for="inputAddress">Ngày Trả</label>
                              <input type="date" name="expiration_date"  class="form-control" id="d2" >
                           </div>
                     
                     
                           @if (Auth::guard('customer')->check())
                           <input type="hiden" name="customer_id" value="{{Auth('customer')->user()->id}}" style="display: none">
                           @endif
                           <input type="hiden" name="name_product" value="{{$products->name}}" style="display: none">
                           <input type="hiden" name="time_rent" id="time_rent" value="" style="display: none">
                           <input type="hiden" name="total" id="total" value="" style="display: none">
                           <div class="form-group">
                              <div class="color-quality-right">
                                 <h5>Hình Thức Nhận Sách:</h5>
                                 <select id="country1" name="type" onchange="change_country(this.value)" class="frm-field required sect">
                                    <option value="nhận tại cửa hàng">Nhận tại cửa hàng</option>
                                    <option value="nhận tại nhà">Nhận tại nhà</option>
                                    
                                 </select>
                              </div>
                           </div>
                           <div class="form-group">
                              <input type="hidens" style="display: none">
                              <label for="inputAddress"><div>Số Ngày:<p  id="thoigian"></p></div></label>
                           
                           </div>
                     
                           <div class="form-group">
                              <label for="inputAddress"><div>Tổng tính VNĐ:<p  id="tongtinh"></p></div></label>
                           </div>
                     
                      {{-- <input type="submit" value="Thuê Ngay"> --}}
                           @if (Auth::guard('customer')->check())
                                 <input type="submit" value="Thuê Ngay">
                           @else
                                 <input type="buyton" class="btn btn-primary" onclick="noaccout()" value="Thuê Ngay">
                           @endif
                   </form>
                </div>
                {{-- <div class="occasion-cart">
                   <div class="toys single-item singlepage">
                      <a href="javascript:void(0)" id="" class="btn btn-outline-secondary add_to_cart" data-url="{{url('addproduct/'.$products->id)}}">
                           Add to Cart
                      </a>
                         
                     
                   </div>
                </div> --}}
                @if (Auth::guard('customer')->check())
                     <div class="occasion-cart">
                        <div class="toys single-item singlepage">
                           <a href="javascript:void(0)" id="" class="btn btn-outline-secondary add_to_cart" data-url="{{url('addproduct/'.$products->id)}}">
                              Add to Cart
                           </a>
                              
                        
                        </div>
                     </div>
                  @else
                  <div class="occasion-cart">
                     <div class="toys single-item singlepage">
                        <a href="javascript:void(0)" onclick="noaccout()" id="" class="btn btn-outline-secondary add_to_cart" >
                           Add to Cart
                        </a>
                           
                     
                     </div>
                  </div>
                @endif
                <ul class="footer-social text-left mt-lg-4 mt-3">
                   <li>Share On : </li>
                   <li class="mx-1">
                      <a href="#">
                      <span class="fab fa-facebook-f"></span>
                      </a>
                   </li>
                   <li class="">
                      <a href="#">
                      <span class="fab fa-twitter"></span>
                      </a>
                   </li>
                   <li class="mx-1">
                      <a href="#">
                      <span class="fab fa-google-plus-g"></span>
                      </a>
                   </li>
                   <li class="">
                      <a href="#">
                      <span class="fab fa-linkedin-in"></span>
                      </a>
                   </li>
                   <li class="mx-1">
                      <a href="#">
                      <span class="fas fa-rss"></span>
                      </a>
                   </li>
                </ul>
             </div>
             <div class="clearfix"> </div>
             <!--/tabs-->
             <div class="responsive_tabs">
                <div id="horizontalTab">
                   <ul class="resp-tabs-list">
                      <li>Nội Dung</li> 
                   </ul>
                   <div class="resp-tabs-container">
                      <!--/tab_one-->
                      <div class="tab1">
                         <div class="single_page">
                            <h6>{{$products->name}}</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                               blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                               ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                               magna aliqua.
                            </p>
                            <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                               blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                               ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                               magna aliqua.
                            </p>
                         </div>
                      </div>
                      <!--//tab_one-->
                   </div>
                </div>
             </div>
             <!--//tabs-->
          </div>
       </div>
    </div>
</section>
<!--subscribe-address-->



@endsection

@section('scrip')
<script>
 function addTocart(event){
      event.preventDefault();
      let urlCart= $(this).data('url');
      $.ajax({
         type: "GET",
         url: urlCart,
         dataType: 'json',
         success: function (data) {
            if(data.code === 200){
               alert('thêm sản phẩm thành công');
            }
         }
      });
     
   }

   $(function(){
      $('.add_to_cart').on('click',addTocart);
   });
 </script>

<script>
   function tamtinh(){
      let rent = {{$products ->rent_price}}
      var d1= document.getElementById("d1").value;
      var d2= document.getElementById("d2").value;
    const dateOne= new Date(d1);
    const dateTwo= new Date(d2);
    const time = Math.abs(dateTwo - dateOne);
    const days = Math.ceil(time / (1000 * 60 *60 * 24));
    const total= rent * days;
    document.getElementById("thoigian").innerHTML= days;
    document.getElementById('time_rent').value = days;
    document.getElementById('total').value = total;
    document.getElementById("tongtinh").innerHTML= total;
     
   }    
 </script>

 <script>
    function noaccout(){
       alert("đăng nhập để sử dụng dịch vụ")
    }
 </script>

<!-- price range (top products) -->
<script>
   //<![CDATA[ 
   $(window).load(function () {
       $("#slider-range").slider({
           range: true,
           min: 0,
           max: 9000,
           values: [50, 6000],
           slide: function (event, ui) {
               $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
           }
       });
       $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
   
   }); //]]>
</script>
<!-- //price range (top products) -->
<!-- single -->
<script src="frontend/js/imagezoom.js"></script>
<!-- single -->
<!-- script for responsive tabs -->
<script src="frontend/js/easy-responsive-tabs.js"></script>
<script>
   $(document).ready(function () {
       $('#horizontalTab').easyResponsiveTabs({
           type: 'default', //Types: default, vertical, accordion           
           width: 'auto', //auto or any width like 600px
           fit: true, // 100% fit in a container
           closed: 'accordion', // Start closed if in accordion view
           activate: function (event) { // Callback function if tab is switched
               var $tab = $(this);
               var $info = $('#tabInfo');
               var $name = $('span', $info);
               $name.text($tab.text());
               $info.show();
           }
       });
       $('#verticalTab').easyResponsiveTabs({
           type: 'vertical',
           width: 'auto',
           fit: true
       });
   });
</script>
<!-- FlexSlider -->
<script src="frontend/js/jquery.flexslider.js"></script>
<script>
   // Can also be used with $(document).ready()
   $(window).load(function () {
       $('.flexslider1').flexslider({
           animation: "slide",
           controlNav: "thumbnails"
       });
   });
</script>
<!-- //FlexSlider-->
<!-- start-smoth-scrolling -->
<script>
   jQuery(document).ready(function ($) {
       $(".scroll").click(function (event) {
           event.preventDefault();
           $('html,body').animate({
               scrollTop: $(this.hash).offset().top
           }, 900);
       });
   });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
   $(document).ready(function () {
   
       var defaults = {
           containerID: 'toTop', // fading element id
           containerHoverID: 'toTopHover', // fading element hover id
           scrollSpeed: 1200,
           easingType: 'linear'
       };
   
   
       $().UItoTop({
           easingType: 'easeOutQuart'
       });
   
   });
</script>

@endsection