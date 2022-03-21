@extends('backend.layouts.master')

@section('title')
    Tạo Sản Phẩm
@endsection

@section('content')
<div class="col-md-12 graphs">
    <div class="xs">
       <h3>Tạo Sản Phẩm</h3>
       <div class="well1 white">
        @error('name')
        <div class="alert alert-danger" role="alert">
          <strong>{{$message}}</strong>
         </div>          
          @enderror

        @if (session('success'))
        <div class="alert alert-success" role="alert">
          <strong>{{session('success')}}</strong>
         </div>
        @endif  
     <form action="{{url('admin/create-product')}}" method="POST" class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()">
      @csrf
        <fieldset>
        <input type="hiden" name="user_id" value="{{Auth::user()->id}}" style="display: none">
         <div class="form-group">
           <label class="control-label">Tên sản phẩm</label>
           <input type="text" name="name" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
         </div>

         <div class="form-group filled">
           <label class="control-label">danh mục</label>
           <select name="category[]"  class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" required=""><option  value="? undefined:undefined ?"></option>
            @foreach ($categories as $category)
                <option value="{{$category->name}}">{{$category->name}}</option>
            @endforeach
            
           </select>
         </div>
         <div class="form-group">
            <label for="exampleInputFile">Mô tả</label>
            <textarea name="description" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">số lượng</label>
                <div class="row">
                    <div class="col-md-2 grid_box1">
                        <input type="number" name="quantity" class="form-control1" >
                    </div>
                    <div class="clearfix"> </div>
                </div>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Giá</label>
                <div class="row">
                    
                    <div class="col-md-2 grid_box1">
                        <input type="text" name="origin_price" class="form-control1" placeholder="Gốc" >
                    </div>
                    <div class="col-md-2 grid_box1">
                        <input type="text" name="sale_price" class="form-control1" placeholder="sale" >
                    </div>
                    <div class="clearfix"> </div>
                </div>
                
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Trạng Thái</label>
          <div class="checkbox1">
            <div class="radio block"><label><input name="status" type="radio" value="0"> bán ngay</label></div>
            <div class="radio block"><label><input name="status" type="radio" value="1"> Sắp Bán</label></div>
            <div class="radio block"><label><input name="status" type="radio" value="2"> Dừng bán</label></div>
            
          </div>
        </div>
         <div class="form-group">
            <label for="exampleInputFile">Chọn Ảnh Bìa</label>
            <input name="image" type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
         <div class="form-group">
           <button type="submit" class="btn btn-primary">Tạo</button>
           
         </div>
       </fieldset>
     </form>
   </div>
 </div>
</div>
@endsection