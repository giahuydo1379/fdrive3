@extends('admin.layout.index')
@section('content')
<div id="content-container">
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
   <h1 class="page-header text-overflow">Chi tiết vai trò</h1>
</div>
<div id="page-content">
   <div class="row">
      <div class="col-lg-12 margin-tb">
         <div class="pull-left">
            <h2> Xem  vai trò</h2>
         </div>
         <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Quay lại</a>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Tên:  </strong>
            {{ $role->display_name }}
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Miêu tả:  </strong>
            {{ $role->description }}
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Quyền:  </strong>
            @if(!empty($rolePermissions))
            @foreach($rolePermissions as $v)
            <label class="btn btn-success">{{ $v->display_name }}</label>
            @endforeach
            @endif
         </div>
      </div>
   </div>
</div>
@endsection