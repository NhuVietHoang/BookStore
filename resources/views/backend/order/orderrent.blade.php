@extends('backend.layouts.master')

@section('title')
    Đơn Hàng Cho Thuê
@endsection

@section('content')
<div class="col-md-12 graphs">
    <div class="xs">

        <h3>Danh Sách Đơn Cho Thuê</h3>
        
        <a href="{{url('admin/update-rent')}}"><button type="button" class="btn btn_5 btn-lg btn-primary">Cập Nhật</button></a>
        <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static=""> 
            <div class="panel-body no-padding">
                <table class="table table-striped">
                    <thead>
                        <tr class="warning">
                          
                            <th>Tên Sản Phẩm</th>
                            <th>Khách Hàng</th>
                            <th>Ngày Thuê</th>
                            <th>Ngày Trả</th>
                            <th>Tổng Tiền</th>
                            <th>Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                         
                            <td>{{$product->name_product}}</td>
                            <td>{{$product->customer->name}}</td>
                            <td>{{$product->start_day}}</td>
                            <td>{{$product->expiration_date}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                @if ($product->this_day < $product->start_day)
                                     <span class="label label-primary">Đặt Hàng</span>
                                @elseif($product->this_day >= $product->start_day && $product->this_day < $product->expiration_date  )
                                    <span class="label label-success">Đang Thuê</span>
                                @elseif($product->this_day == $product->expiration_date)
                                    <span class="label label-info">  Hết hạn</span>
                                @elseif($product->status == 3 )
                                    <span class="label label-warning">Đã bàn giao</span>
                                @endif
                                {{-- @elseif($product->status ==3 )
                                    <span class="label label-warning">Quá Hạn</span>
                                @endif --}}

                                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal">Cập Nhật</button>
                            </td>

                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>
            </div>
        </div>

    </div>
   

</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title">Cập nhật đơn</h2>
            </div>
           
            <div class="modal-body">
                <form action="{{url('admin/edit-order')}}" method="GET">
                    <input type="hiden" name="id" value="{{$product->id}}" style="display: none">
                    <div class="form-group">
                        <label for="exampleInputFile">Tên Khách Hàng: {{$product->customer->name}}</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Địa chỉ: {{$product->customer->address}}</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Tên Sản Phẩm : {{$product->name_product}}</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Trạng Thái : </label>
                        <select name="status"  class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" required=""><option  value="? undefined:undefined ?"></option>                      
                                
                                <option value="1">Đã Giao </option>
                                <option value="2">Hết Hạn</option>
                                <option value="3">Đã Bàn Giao</option>
                           </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                      </div>
                </form>
                    
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@endsection