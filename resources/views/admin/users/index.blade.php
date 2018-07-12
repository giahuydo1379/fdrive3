@extends('admin.layout.index')

@section('content')

 <div id="content-container">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Danh sách người dùng</h1>
        </div>
            <div id="page-content">

                <div class="panel">
                    <div class="panel-body">
                        <div class="row mar-top">

                        	@if ($message = Session::get('success'))
								<div class="alert alert-success">
									<p>{{ $message }}</p>
								</div>
							@endif
							<div class="clearfix">
               <div class="btn-group">
               @permission('user-create')
                  <a  class="btn btn-success" href="{{ route('users.create') }}"> Thêm người dùng</a>
                  @endpermission
                   <i class="icon-plus"></i>
                  </button>
               </div>

                    <!-- Row selection (single row) -->
					<!--===================================================-->
					<div class="panel">
					    <div class="panel-heading">
					       
					    </div>
					    <div class="panel-body">
					        <table id="demo-dt-selection" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
									<tr align="center">
													<tr>
									<th>STT</th>
									<th>Tên </th>				
									<th >Hòm thư</th>
									<th>Vai trò</th>
									<th width="280px">Thực hiện</th>
								</tr>
							</thead>
					            <tbody>
					        
							       @foreach ($users  as $key => $user)
										<tr>
											<td>{{ ++$i }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td>
												@if(!empty($user->roles))
													@foreach($user->roles as $v)
														<label>{{ $v->display_name }}</label>
													@endforeach
												@endif
											</td>
											<td>
											@permission('user-edit')
												<a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>
											@endpermission

											@permission('user-delete')
												 <!-- {!! Form::open( ['method' => 'DELETE','route' => ['users.destroy', $user->id], 'style' => 'display: inline', 'onSubmit' => 'return confirm("Bạn có chắc chắn muốn xóa?")']) !!}
										 	<button type="submit" class="btn btn-danger">
										Xóa
										 	</button> 
											 
											 {!! Form::close() !!}  -->

												<button data-id="{{$user->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">
													<i class="fa fa-trash" aria-hidden="true"></i> Xoá
												</button>
											 @endpermission
											


									 
												<!-- {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
												{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
												{!! Form::close() !!} -->
											</td>
										</tr>
										<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Xóa người dùng</h4>
										</div>
										<div class="modal-body">
											<form id="form-delete">
												{{ csrf_field() }}
												<input type="hidden" name="id" id="del-id">
												<p>Bạn có chắc muốn xóa người dùng này?</p>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<a href="{{ route('users.destroy', $user->id) }}" class="btn btn-danger" id="delete">Xóa</a>
											</div>
											</form> 
										</div>
									</div>
								</div>
								</div>

						      	@endforeach
					        
					            </tbody>
					        </table>
					    </div>
					</div>
					<!--===================================================-->
					<!-- End Row selection (single row) -->
					{!! $users ->render() !!}

                </div>
                    </div>
                </div>  
     
   </div>  
</div>   

@endsection
<!-- <style>
#demo-dt-selection_paginate {
    display:none;
}
</style> -->