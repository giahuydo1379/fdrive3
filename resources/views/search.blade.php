@extends('admin.layout.index')

@section('content')
 <div id="content-container">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h4><b>Tìm thấy tổng cộng {{ count($user) }} tin tức có liên quan đến từ khóa "{{ $keyword }}".</b></h4>
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
									<th>Name</th>				
									<th>Email</th>
									<th>Vai trò</th>
									<th width="280px">Action</th>
								</tr>
							</thead>
					            <tbody>
					        
							       @foreach ($user  as $key => $user)
										<tr>
											<td>{{ ++$i }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td>
												@if(!empty($user->roles))
													@foreach($user->roles as $v)
														<label class="label label-success">{{ $v->display_name }}</label>
													@endforeach
												@endif
											</td>
											<td>
											
												<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>


												{!! Form::open( ['method' => 'DELETE','route' => ['users.destroy', $user->id], 'style' => 'display: inline', 'onSubmit' => 'return confirm("Bạn có chắc chắn muốn xóa?")']) !!}
											<button type="submit" class="btn-delete btn btn-xs btn-danger">
												<i class="glyphicon glyphicon-trash"></i>
											</button>
										{!! Form::close() !!}
									 
												<!-- {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
												{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
												{!! Form::close() !!} -->
											</td>
										</tr>
						      	@endforeach
					        
					            </tbody>
					        </table>
					    </div>
					</div>
					<!--===================================================-->
					<!-- End Row selection (single row) -->
					
                </div>
                    </div>
                </div>  
     
   </div>       
@endsection