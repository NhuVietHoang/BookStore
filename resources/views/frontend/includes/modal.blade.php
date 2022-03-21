<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="register-form">
                    <form action="{{url('logincustomer')}}" method="post">
                        @csrf
                        <div class="fields-grid">
                            <div class="styled-input">
                                <input type="text" placeholder="Tên" name="name" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="password" name="password" required="">
                            </div>
                            <button type="submit" class="btn subscrib-btnn">Login</button>
                            <div class="styled-input">
                                <a href="{{url('register')}}" class="card-link">chưa có tài khoản đăng kí ngay</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal-two" tabindex="-1" role="dialog" aria-labelledby="exampleModal-twoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModal-twoLabel">Tài Khoản</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
             </button>
          </div>
        @if (Auth::guard('customer')->check())
        <div class="modal-body"> 
            xin chào {{Auth('customer')->user()->name}}
          </div>
        @endif
          
         
          
          <div class="modal-footer">
             <a href="{{url('logoutcustomer')}}"><button type="button" class="btn btn-primary">logout</button></a>
             
          </div>
       </div>
    </div>
 </div>

 {{-- <div class="modal fade" id="exampleModal-cart" tabindex="-1" role="dialog" aria-labelledby="exampleModal-twoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal-twoLabel">Giỏ Hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">×</span>
           </button>
            </div>
            <div class="modal-body">
                   
                    
                       <!--end shopping-cart-header -->
                  
                      <ul class="shopping-cart-items">
                        <li class="clearfix" style="display: flex">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
                          <div>
                            <span class="item-name">Sony DSC-RX100M III</span>
                            <span class="item-price">$849.99  x</span>
                            <span class="item-quantity">Quantity: 01</span>
                          </div>

                        </li>
                        <li class="clearfix" style="display: flex">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
                          <div>
                            <span class="item-name">Sony DSC-RX100M III</span>
                            <span class="item-price">$849.99  x</span>
                            <span class="item-quantity">Quantity: 01</span>
                          </div>

                        </li>
                        <li class="clearfix" style="display: flex">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
                          <div>
                            <span class="item-name">Sony DSC-RX100M III</span>
                            <span class="item-price">$849.99  x</span>
                            <span class="item-quantity">Quantity: 01</span>
                          </div>

                        </li>
                  
                        
                      </ul>
                      <div class="shopping-cart-header"  >
                        <div class="shopping-cart-total" style="justify-content: space-between">
                          <span class="lighter-text">Total:</span>
                          <span class="main-color-text">$2,229.97</span>
                        </div>
                      </div>
                  
                      
                     <!--end shopping-cart -->
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">CheckOut</button>
            </div>
        </div>
    </div>
</div> --}}