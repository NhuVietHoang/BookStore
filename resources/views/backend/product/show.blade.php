@extends('backend.layouts.master')

@section('title')
    Sản phẩm
@endsection

@section('content')
<div class="col-md-12 graphs">
    <div class="xs">
    <h3>Danh Sách Danh Mục</h3>
    <form action="{{url('admin/search')}}" method="GET">
        <div class="input-group">
            
            <input type="text" name="keywork" id="keyword" class="form-control1 input-search" placeholder="Search...">
            <span class="input-group-btn">
                <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
            </span>
        </div><!-- Input Group -->
    </form>
    <div class="form-group filled">
        <label class="control-label">danh mục</label>
        <div class="row">
            <div class="col-md-3 grid_box1">
                <select name="category" id="list_category"  class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" required=""><option  value="{{url('admin/prouduct')}}"></option>
                        <option value="{{url('admin/product/')}}">Tất cả</option>
                    @foreach ($categories as $category)
                        <option value="{{url('admin/product/'.$category->slug)}}">{{$category->name}}</option>
                    @endforeach
               </select>
            </div>
            
        </div>
      </div>
    
 <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
             <div class="panel-body no-padding">
                 <table class="table table-striped">
                     <thead>
                         <tr class="warning">
                             <th>STT</th>
                             <th>Tên Sản Phẩm</th>
                             <th>Số lượng</th>
                             <th>Tình trạng</th>
                             <th>Trạng Thái</th>
                             <th>Thao Tác</th>
                         </tr>
                     </thead>
                     <tbody id="listproduct">
                        @foreach ($products as $product)
                        <tr >
                            <td>1</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->quantity}}</td>
                            @if ($product->quantity == 0)
                                <td><span class="label btn_7 label-info">Hết hàng</span></td>
                            @elseif($product->quantity < 10 && $product->quantity >1 )
                                <td><span class="label label-warning">sắp hết hàng</span></td>
                            @else
                                <td><span class="label label-success">Còn hàng</span></td>
                            @endif
                            <td>
                                @if ($product->status==0)
                                    <span class="label label-success">Đang Bán</span>
                                 @elseif($product->status==1)
                                     <span class="label label-warning">Sắp Bán</span>
                                @elseif($product->status==2)
                                    <span class="label label-default">Dừng bán</span>
                                @endif
                            </td>
                            <td>
                                <a href="javascript:void(0)" onclick="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Chi Tiết</a>
                              <a href="javascript:void(0)" onclick="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Sửa</a>
                               <a href="javascript:void(0)" onclick=""  data-id="{{$product->id}}" class="btn btn-success warning_2">xóa</a>
                               
                            </td>
                        </tr>
                        @endforeach 
                     </tbody>
                    
                 </table>
             </div>
        </div>
 <!-- /.table-responsive -->

        {{-- modal --}}
    

        </div>
    </div>
</div>
@section('scrip')
   <script>
         $(function(){
      
         $('#list_category').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
    </script>

   
@endsection
@endsection