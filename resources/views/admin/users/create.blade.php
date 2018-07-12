@extends('admin.layout.index')
@section('content')
<div id="content-container">
   <div id="page-head">
      <!--Page Title-->
      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      <div id="page-title">
         <h1 class="page-header text-overflow">Thêm người dùng</h1>
      </div>
      <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('users.index') }}"> Quay lại</a>
	        </div>
      <div id="page-content">
         <div class="panel">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
               <strong>Ôi!</strong> Nhập chưa chính xác.<br><br>
               <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
            @endif
            {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                     <strong>Name:</strong>
                     {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                     <span class="text-danger">{{ $errors->first('name') }}</span>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group  {{ $errors->has('email') ? 'has-error' : '' }}">
                     <strong>Email:</strong>
                     {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                     <span class="text-danger">{{ $errors->first('email') }}</span>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group  {{ $errors->has('password') ? 'has-error' : '' }}">
                     <strong>Password:</strong>
                     {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                     <span class="text-danger">{{ $errors->first('password') }}</span>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                     <strong>Confirm Password:</strong>
                     {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                     <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                     <strong>Role:</strong>
                     {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                  </div>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </div>
            {!! Form::close() !!}
         </div>
      </div>
   </div>
</div>
</div>
@endsection