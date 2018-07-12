@extends('admin.layout.index')
@section('content')
<div id="content-container">
   <div id="page-head">
      <!--Page Title-->
      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      <div id="page-title">
         <h1 class="page-header text-overflow">Sửa vai trò</h1>
      </div>
      <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Quay lại</a>
	        </div>
      <div id="page-content">
         <div class="panel">
            <div class="panel-body">
               <div class="row mar-top">
                  <div id="page-wrapper">
                     <div class="container-fluid">
                        <div class="row">
                           <!-- /.col-lg-12 -->
                           @if (count($errors) > 0)
                           <div class="alert alert-danger">
                              <strong>Ôi!</strong> Bạn phải nhập lại.<br><br>
                              <ul>
                                 @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                                 @endforeach
                              </ul>
                           </div>
                           @endif
                           {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                           <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                 <div class="form-group  {{ $errors->has('display_name') ? 'has-error' : '' }}">
                                    <strong>Name:</strong>
                                    {!! Form::text('display_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    <span class="text-danger">{{ $errors->first('display_name') }}</span>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                 <div class="form-group  {{ $errors->has('description') ? 'has-error' : '' }}">
                                    <strong>Description:</strong>
                                    {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                 <div class="form-group  {{ $errors->has('permission') ? 'has-error' : '' }}">
                                    <strong>Permission:</strong>
                                    <br/>
                                    @foreach($permission as $value)
                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                    {{ $value->display_name}}    :     {{  $value->description}}</label>
                                    <br/>
                                    @endforeach
                                    <span class="text-danger">{{ $errors->first('permission') }}</span>
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
		<script
				$(document).ready(function(){
				$('input:radio[name="change_password"]').on('change',function(){
				if(this.checked && this.value == 0)
				$('.disabled-field').attr('disabled',true);
				else
				$('.disabled-field').attr('disabled',false);
				});
				}
		</script>
@endsection