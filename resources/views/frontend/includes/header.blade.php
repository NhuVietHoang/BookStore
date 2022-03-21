<div class="header-outs" id="home">
    <div class="header-bar">
       <div class="info-top-grid">
          <div class="info-contact-agile">
             <ul>
                <li>
                   <span class="fas fa-phone-volume"></span>
                   <p>0367 898 643</p>
                </li>
                <li>
                   <span class="fas fa-envelope"></span>
                   <p><a href="nuoccam2k@gmail.com">nuoccam2k@gmail.com</a></p>
                </li>
                <li>
                </li>
             </ul>
          </div>
       </div>
       <div class="container-fluid">
          <div class="hedder-up row">
             <div class="col-lg-3 col-md-3 logo-head">
                <h1><a class="navbar-brand" href="{{url('home')}}">Book Store</a></h1>
             </div>
             <div class="col-lg-5 col-md-6 search-right">
                <form class="form-inline my-lg-0">
                   <input class="form-control mr-sm-2" type="search" placeholder="Search">
                   <button class="btn" type="submit">Search</button>
                </form>
             </div>
             <div class="col-lg-4 col-md-3 right-side-cart">
                <div class="cart-icons">
                   <ul>
                        @if (Auth::guard('customer')->check())
                        <li>
                           <button type="button" data-toggle="modal" data-target="#exampleModal-two">
                              <span class="far fa-user"></span>
                           </button>
                        </li>
                        @else
                        <li>
                           <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                        </li>
                        @endif
                        <li class="toyscart toyscart2 cart cart box_1">
                           <a href="{{url('checkout')}}">
                              <button type="button" >
                                 <span class="fas fa-cart-arrow-down"></span>
                                 </button>
                           </a>
                             
                              
                           </form>
                        </li>
                      
                   </ul>
                </div>
             </div>
          </div>
       </div>
       <nav class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
             <ul class="navbar-nav ">
                <li class="nav-item ">
                   <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                   <a href="" class="nav-link">Review Sách</a>
                </li>
                <li class="nav-item">
                   <a href="" class="nav-link">Dịch vụ</a>
                </li>
                <li class="nav-item">
                   <a href="{{url('shop')}}" class="nav-link">Shop Now</a>
                </li>
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Đọc miễn phí
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="nav-link" href="icon.html">404 Page</a>
                      <a class="nav-link " href="typography.html">Typography</a>
                   </div>
                </li>
                <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Danh mục
                   </a>
                   <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     
                        @foreach ($categories as $category)
                           <a class="nav-link" href="">{{$category->name}}</a>
                        @endforeach
                   </div>
                </li>
                <li class="nav-item">
                   <a href="contact.html" class="nav-link">liên hệ</a>
                </li>
             </ul>
          </div>
       </nav>
    </div>
    @yield('slide')
</div>
