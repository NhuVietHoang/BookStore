@extends('backend.layouts.master')

@section('title')
    Nhà Cung Cấp
@endsection

@section('content')
<div class="col-md-12 graphs">
    <div class="xs">
        <h3>Danh Sách Nhà Cung Cấp</h3>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
          <strong>{{session('success')}}</strong>
         </div>
         @endif
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Tạo Nhà Cung Cấp
        </button>
        <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
            <div class="panel-body no-padding">
                <table class="table table-striped">
                    <thead>
                        <tr class="warning">
                            <th>#</th>
                            <th>Tên Nhà Cung Cấp</th>
                            <th>Chi Tiết</th>
                            <th>Đặt Hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $supplies)
                        <tr>
                            <td>1</td>
                            <td>{{$supplies->name}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Chi Tiết</button>
                            </td>
                            <td>
                                <button type="button" data-id=""  class="btn btn-primary order"  data-toggle="modal" data-target="#myModal1">Đặt Hàng</button>
                            </td>
                        </tr>
                        @endforeach
                        {{-- <tr>
                            <td>1</td>
                            <td></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">Chi Tiết</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Đặt Hàng</button>
                            </td>
                        </tr> --}}
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
                <h2 class="modal-title">Tạo Nhà Cung Cấp</h2>
            </div>
            <div class="modal-body">
                <form action="{{url('admin/create-supplier')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Tên</label>
                        <input type="text" name="name" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">email</label>
                        <input type="email" name="email" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Địa Chỉ</label>
                        <input type="text" name="address" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Số Điện Thoại</label>
                        <input type="text" name="phone" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
                    </div>
                    <div class="form-group">
                        <label for="radio" class="control-label" >Mặt hàng cung cấp</label>  
                            <div style="display: block">
                                @foreach ($products as $product)
                                <div class="checkbox-inline"><label><input name="id_product[]" value="{{$product->id}}" type="checkbox"> {{$product->name}}</label></div> 
                                @endforeach
                                   
                                    
                            </div>
                               
                           
                            
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
                
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title">Đặt Hàng</h2>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title">Đặt Hàng</h2>
            </div>
            <div class="modal-body">
                @foreach ($supplier as $supplies)
                    
                
                <h2>{{$supplies->name}}</h2>
                <div class="form-group">
                    <label class="control-label">Địa Chỉ: {{$supplies->address}}</label>
                </div>
                <div class="form-group">
                    <label class="control-label">email: {{$supplies->email}}</label>
                </div>
                <div class="form-group">
                    <label class="control-label">SĐT: {{$supplies->phone}}</label>
                </div>
                @endforeach 
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

@section('script')
    <script>
        $(document).ready(function(){
            $('.order').click(function(){
                var id = $(this).data('id');
                alert(id);
            });
        });
    </script>
@endsection
@endsection