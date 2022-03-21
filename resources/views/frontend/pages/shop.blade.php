@extends('frontend.layouts.master')

@section('title')
    Mua ngay
@endsection

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
         <li>Shop Now</li>
      </ul>
   </div>
</div>
<!-- //short-->
<!--show Now-->  
<!--show Now-->  
<section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
   <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Toys Shop</h3>
      <div class="row">
         <div class="side-bar col-lg-3">
            <div class="search-hotel">
               <h3 class="agileits-sear-head">Search Here..</h3>
               <form action="#" method="post">
                  <input type="search" placeholder="Product name..." name="search" required="">
                  <input type="submit" value=" ">
               </form>
            </div>
                      <!-- price range -->
                      <div class="range">
                        <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <label class="input-group-text" for="inputGroupSelect01">danh mục</label>
                              </div>
                              <select class="custom-select" id="inputGroupSelect01">
                                 <option selected="">Tất Cả</option>
                                 @foreach ($categories as $category)
                                    <option value="{{url('shop/'.$category->slug)}}" >{{$category->name}}</option>
                                 @endforeach
                              </select>
                        </div>
                      </div>
            
            <!-- //reviews -->
            <!-- deals -->
            
            <!-- //deals -->
         </div>
         <div class="left-ads-display col-lg-9">
            <div class="row">
               @foreach ($products as $product)
                     <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">
                                 <img style="height: 260px;width:237px;" src="/frontend/images/{{$product->image}}" class="img-thumbnail img-fluid" alt="">
                                 <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="{{url('shop/product/'.$product->id)}}" class="link-product-add-cart">Xem Ngay</a>
                                    </div>
                                 </div>
                                 <span class="product-new-top">New</span>
                              </div>
                              <div class="item-info-product">
                                 <div class="info-product-price">
                                    <div class="grid_meta">
                                       <div class="product_price">
                                          <h4>
                                             <a href="single.html">{{$product->name}}</a>
                                          </h4>
                                          @if ($product->sale_price ==0)
                                             <div class="grid-price mt-2">
                                                <span class="money ">{{number_format($product->origin_price)}} đ</span>
                                             </div>
                                          @else 
                                          <div class="grid-price mt-2">
                                             <span class="money ">Sale: {{$product->sale_price}}</span>
                                          </div>
                                          @endif
                                          
                                       </div>
                                       {{-- <ul class="stars">
                                          <li>
                                             <a href="#">
                                             <i class="fas fa-star"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fas fa-star"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fas fa-star"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fas fa-star" ></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="far fa-star-half-o"></i>
                                             </a>
                                          </li>
                                       </ul> --}}
                                    </div>
                                    <div class="">
                                       <a href="javascript:void(0)" id="" class="btn btn-outline-secondary add_to_cart" data-url="{{url('addproduct/'.$product->id)}}">
                                             <i class="fas fa-cart-plus"></i>
                                       </a>
                                            
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                     </div> 
               @endforeach
               
              
            </div>
            
         </div>

      </div>
   </div>
</section>

@endsection

@section('scrip')
<script>
   $(function(){
      
      $('#inputGroupSelect01').on('change', function () {
       var url = $(this).val(); // get selected value
       if (url) { // require a URL
           window.location = url; // redirect
       }
       return false;
   });
 });

</script>

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


@endsection