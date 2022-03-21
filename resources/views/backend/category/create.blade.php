@extends('backend.layouts.master')

@section('title')
    TẠO DANH MỤC
@endsection

@section('content')              
    <div class="xs">
                <h3>Tạo Danh Mục</h3>
                <div class="well1 white">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{session('success')}}</strong>
                       </div>
                    @endif
              <form action="{{url('admin/create-category')}}" method="POST" class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" novalidate="novalidate" ng-submit="submit()">
               @csrf
                <fieldset>
                    <div class="form-group">
                        <input type="text" name="phone" value="{{Auth::user()->phone}}" style="display: none">
                    </div>
                  <div class="form-group">
                    <label class="control-label">Tên Danh Mục</label>
                    <input type="text" name="name" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
                  </div>
                  @error('name')
                  <div class="alert alert-danger" role="alert">
                    <strong>{{$message}}</strong>
                   </div>          
                    @enderror
                  <div class="form-group">
                    <label class="control-label">Mô Tả</label>
                    <input type="text" name="description" class="form-control1 ng-invalid ng-valid-url ng-invalid-required ng-touched" ng-model="model.url" required="">
                  </div>
                  
                  <div class="form-group">
                    <input type="submit" class="btn-success btn" value="Tạo">
                    {{-- <input type="submit" class="btn btn-primary" value="Tạo"> --}}
                  </div>
                </fieldset>
              </form>
            </div>
          </div>              
@endsection