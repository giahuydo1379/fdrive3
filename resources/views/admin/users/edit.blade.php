@extends('admin.layout.index')

@section('content')

<div id="content-container">
   <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Dashboard</h1>
        </div>
        <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('users.index') }}"> Quay lại</a>
	        </div>
            <div id="page-content">

                <div class="panel">
                    <div class="panel-body">
                        <div class="row mar-top">

                            <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý Người Dùng
                            <small>> {{ $user->name }}</small>
                        </h1>
                    </div>
                    
                    <!-- /.col-lg-12 -->
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
	{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
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
        <div class="form-group">
                                <p><label>Bạn có muốn thay đổi mật khẩu?</label></p>
                                <p>
                                    <label class="radio-inline">
                                        <input name="change_password" id="yes" class="radio-change" value="1"
                                         type="radio"><span for="yes">Có</span>
                                    </label>
                                    <label class="radio-inline">
                                        <input name="change_password" id="no" class="radio-change" value="0"
                                         type="radio" checked=""><span for="no">Không</span>
                                    </label>
                                </p>
                                <input class="form-control input-width disabled-field" type="password" name="password" placeholder="Nhập mật khẩu" disabled="" />
                            </div>

                            <div class="form-group">
                                <p><label>Xác nhận Mật khẩu</label></p>
                                <input class="form-control input-width disabled-field" type="password" name="password_again" placeholder="Nhập lại mật khẩu" disabled="" />
                            </div>

        <div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
                                <label for="roles" class="col-md-4 control-label">Roles</label>

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <select id="role" name="roles[]" multiple>
                                        @foreach ($roles as $role)
                                            <option value="{{$role->id}}" {{in_array($role->id, $userRoles) ? "selected" : null}}>
                                                {{$role->display_name}}
                                            </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('roles'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('roles') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
        </div>
	</div>
	{!! Form::close() !!}

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>

                        </div>
                   </div>
                </div>
            </div>
        </div>
        </div>
   

@endsection
<script type="text/javascript">
  
</script>