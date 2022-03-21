@extends('backend.layouts.master')

@section('title')
    Sản phẩm
@endsection

@section('content')
<div class="col-md-12 graphs">
    <div class="xs">
    <h3>Danh Sách Sản Phẩm</h3>
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
                <select name="category" id="list_category"  class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" required=""><option  value=""></option>
                    <option value="{{url('admin/product/')}}">Tất cả</option></a>
                    @foreach ($categories as $category)
                        <option value="{{url('admin/product/'.$category->slug)}}">{{$category->name}}</option></a>
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
                             
                             <th>Tên Sản Phẩm</th>
                             <th>Số lượng</th>
                             <th>Tình trạng</th>
                             <th>Trạng Thái</th>
                             <th>Thao Tác</th>
                         </tr>
                     </thead>
                     <tbody id="listproduct">
                        @foreach ($product as $products)
                        <tr id="pid{{$products->id}}" >
                           
                            <td>{{$products->name}}</td>
                            <td>{{$products->quantity}}</td>
                            @if ($products->quantity == 0)
                                <td><span class="label btn_7 label-info">Hết hàng</span></td>
                            @elseif($products->quantity < 10 && $products->quantity >1 )
                                <td><span class="label label-warning">sắp hết hàng</span></td>
                            @else
                                <td><span class="label label-success">Còn hàng</span></td>
                            @endif
                            <td>
                                @if ($products->status==0)
                                    <span class="label label-success">Đang Bán</span>
                                 @elseif($products->status==1)
                                     <span class="label label-warning">Sắp Bán</span>
                                @elseif($products->status==2)
                                    <span class="label label-default">Dừng bán</span>
                                @endif
                            </td>
                            <td>
                                <a href="javascript:void(0)" onclick="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Chi Tiết</a>
                              <a href="javascript:void(0)" onclick="editProduct({{$products->id}})" data-id="{{$products->id}}" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Sửa</a>
                               <a href="javascript:void(0)" onclick="deleteProduct({{$products->id}})"  data-id="{{$products->id}}" class="btn btn-success warning_2">xóa</a>
                               
                            </td>
                        </tr>
                        @endforeach 
                     </tbody>
                    
                 </table>
             </div>
        </div>
 <!-- /.table-responsive -->

        {{-- modal --}}
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h2 class="modal-title">Sửa sản phẩm</h2>
                    </div>
                    @error('name')
                               <div class="alert alert-danger" role="alert">
                                 <strong>{{$message}}</strong>
                                </div>          
                     @enderror
                    <div class="modal-body">
                        <form id="editProduct" action="{{url('admin/edit-category')}}" method="POST" class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()">
                            @csrf
                             <fieldset>
                                 <div class="form-group">
                                     <input type="hiden" id="id" name="user_id" value="{{Auth::user()->id}}" style="display: none">
                                 </div>
                               <div class="form-group">
                                 <label class="control-label">Tên sản phẩm</label>
                                 <input type="text" id="name" name="name" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
                               </div>
                               <div class="form-group">
                                 <label class="control-label">Mô Tả</label>
                                 <input type="text" id="description" name="description" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" ng-model="model.url" required="">
                               </div>
                              <div class="form-group">
                                <label for="exampleInputFile">số lượng</label>
                                    <div class="row">
                                        <div class="col-md-2 grid_box1">
                                            <input id="quantity" type="number" name="quantity" class="form-control1" >
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Giá</label>
                                    <div class="row">
                                        
                                        <div class="col-md-2 grid_box1">
                                            <input type="text" id="origin_price" name="origin_price" class="form-control1" placeholder="Gốc" >
                                        </div>
                                        <div class="col-md-2 grid_box1">
                                            <input type="text" id="sale_price" name="sale_price" class="form-control1" placeholder="sale" >
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    
                            </div>
                            <div class="form-group">
                              <label for="exampleInputFile">Trạng Thái</label>
                              <div class="checkbox1">
                                <div class="radio block"><label><input id="status" name="status" type="radio" value="0"> bán ngay</label></div>
                                <div class="radio block"><label><input id="status" name="status" type="radio" value="1"> Sắp Bán</label></div>
                                <div class="radio block"><label><input id="status" name="status" type="radio" value="2"> Dừng bán</label></div>
                                
                              </div>
                            </div>
                             <div class="form-group">
                                <label for="exampleInputFile">Chọn Ảnh Bìa</label>
                                <input name="image" type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                              </div>
                               
                               <div class="form-group">
                                 <input type="submit" class="btn-success btn" value="Lưu">
                               </div>
                             </fieldset>
                           </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

        </div>
    </div>
</div>
@section('scrip')
    <script>
         $(function(){
      // bind change event to select
      $('#list_category').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
    </script>

    <script>
        function deleteProduct(id){
        if(confirm("Bạn có chắc xóa danh mục này?")){
            $.ajax({
                url:'delete-product/'+id,
                type:'DELETE',
                data:{
                    // _token: $("input[name=_token]").val()
                    "_token":"{{csrf_token()}}"
                },
                success:function(response)
                {
                    $("#pid"+id).remove();
                }
            });
        }
   }
    </script>

<script>
    function editProduct(id){
        $.get('product/'+id,function(product){
            $("#name").val(product.name);
            $("#quanttity").val(product.quantity);
            $("#origin_price").val(product.origin_price);
            $("#sale_price").val(product.sale_price);
            $("#status").val(product.status);
            $("#mymodal").modal('toggle');
        })
    }
    
</script>

   
@endsection
@endsection