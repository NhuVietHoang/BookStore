@extends('backend.layouts.master')

{{-- @section('link-js')
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


@endsection --}}

@section('title')
    Danh mục
@endsection

@section('content')
<div class="col-md-12 graphs">
    <div class="xs">
    <h3>Danh Sách Danh Mục</h3>
   

 <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
             <div class="panel-body no-padding">
                 <table class="table table-striped">
                     <thead>
                         <tr class="warning">
                             <th>STT</th>
                             <th>Tên Danh Mục</th>
                             <th>Người Tạo</th>
                             <th>Thao Tác</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($categories as $cat)
                         <tr id="cid{{$cat->id}}">
                            <td>1</td>
                            
                            <td>{{$cat->name}}</td>
                                {{-- {{dd($cat->info()->name)}} --}}
                            <td>{{$cat->user->name}}</td>
                            <td>
                               
                              <a href="javascript:void(0)" onclick="editCategory({{$cat->id}})" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Sửa</a>
                               <a href="javascript:void(0)" onclick="deleteCategory({{$cat->id}})"  data-id="{{$cat->id}}" class="btn btn-success warning_2">xóa</a>
                               
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
                        <h2 class="modal-title">Sửa Danh Mục</h2>
                    </div>
                    @error('name')
                               <div class="alert alert-danger" role="alert">
                                 <strong>{{$message}}</strong>
                                </div>          
                     @enderror
                    <div class="modal-body">
                        <form id="editCategory" action="{{url('admin/edit-category')}}" method="POST" class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()">
                            @csrf
                           
                             <fieldset>
                                 <div class="form-group">
                                     <input type="text" id="phone" name="phone" value="{{Auth::user()->phone}}" style="display: none">
                                 </div>
                                 <div class="form-group">
                                    <input type="hiden" name="id" id="id" style="display: none">
                                </div>
                               <div class="form-group">
                                 <label class="control-label">Tên Danh Mục</label>
                                 <input type="text" id="name" name="name" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
                               </div>
                               <div class="form-group">
                                 <label class="control-label">Mô Tả</label>
                                 <input type="text" id="description" name="description" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" ng-model="model.url" required="">
                               </div>
                               
                               <div class="form-group">
                                 <input type="submit" class="btn-success btn" value="Lưu">
                                 {{-- <input type="submit" class="btn btn-primary" value="Tạo"> --}}
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
<script >
   function deleteCategory(id){
        if(confirm("Bạn có chắc xóa danh mục này?")){
            $.ajax({
                url:'delete-category/'+id,
                type:'DELETE',
                data:{
                    // _token: $("input[name=_token]").val()
                    "_token":"{{csrf_token()}}"
                },
                success:function(response)
                {
                    $("#cid"+id).remove();
                }
            });
        }
   }
        
</script>

<script>
    function editCategory(id){
        $.get('category/'+id,function(category){
            $("#id").val(category.id);
            $("#description").val(category.descriptions);
            $("#name").val(category.name);
           
            $("#mymodal").modal('toggle');
        })
    }
    
</script>
@endsection
@endsection