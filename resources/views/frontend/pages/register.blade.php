@extends('frontend.layouts.master')

@section('title')
    Đăng kí
@endsection

@section('register')
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
         <li>Đăng Kí</li>
      </ul>
   </div>
</div>
<!-- //short-->
<!--//banner -->
<!--Typography-->
<section class="inner-pages py-5">
   <div class="container py-xl-5 py-sm-3">
      <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Đăng kí</h3>
      @if (session('success'))
      <div class="alert alert-success" role="alert">
          <strong>{{session('success')}}</strong>
         </div>
      @endif
      <!-- forms -->
      <section class="typo-section py-4 border-top border-bottom">
         <h3 class="typo-main-heading mb-lg-4 mb-3 pr-3 pb-1">Forms</h3>
         
         <form action="{{url('postregister')}}" method="POST">
            @csrf
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label>
               <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Tên Đăng Nhập">
               </div>
               @error('name')
                  <p style="color: red;">{{ $message }}</p>
               @enderror
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
               <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
               </div>
               @error('email')
                  <p style="color: red;">{{ $message }}</p>
               @enderror
            </div>
            <div class="form-group row">
               <label for="inputEmail3"  class="col-sm-2 col-form-label">Số Điện Thoại</label>
               <div class="col-sm-10">
                  <input type="text" name="phone" class="form-control" id="inputEmail3" placeholder="SĐT">
               </div>
               @error('phone')
                  <p style="color: red;">{{ $message }}</p>
               @enderror
            </div>
            <div class="form-group row">
               <label for="inputEmail3" class="col-sm-2 col-form-label">Địa chỉ</label>
               <div class="col-sm-10">
                  <input type="address" name="address" class="form-control" id="inputEmail3" placeholder="địa chỉ">
               </div>
               @error('address')
                  <p style="color: red;">{{ $message }}</p>
               @enderror
            </div>
            <div class="form-group row">
               <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                  <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
               </div>
               @error('password')
                  <p style="color: red;">{{ $message }}</p>
               @enderror
            </div>
            <div class="form-group row">
               <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Sign in</button>
               </div>
            </div>
         </form>
         <!--// form2 -->
      </section>
   </div>
</section>

@endsection