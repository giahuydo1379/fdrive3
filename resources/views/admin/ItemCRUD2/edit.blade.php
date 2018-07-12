@extends('admin.layout.index')

@section('content')
<script src="admin_asset2/dist/js/extra.js"></script>
<div id="content-container">
   <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Dashboard</h1>
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
									<strong>Whoops!</strong> There were some problems with your input.<br><br>
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							{!! Form::model($item, ['method' => 'PATCH','route' => ['itemCRUD2.update', $item->id]]) !!}
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<strong>Title:</strong>
										{!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<strong>Description:</strong>
										{!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
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