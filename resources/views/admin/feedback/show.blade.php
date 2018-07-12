@extends('admin.layout.index')

@section('content')
 <div id="content-container">
        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Chi tiết khách hàng cần hỗ trợ</h1>
        </div>
            <div id="page-content">

        <div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2> Chi tiết</h2>
	        </div>
	        <div class="pull-right">
	            <a class="btn btn-primary" href="/home"> Quay lại</a>
	        </div>
	    </div>
		</div>
			<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên khách hàng:</strong>
                {{ $users->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hòm thư:</strong>
                {{ $users->email }}
            </div>
        </div> 

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Công ty:</strong>
                {{ $users->company }}
            </div>
        </div>
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nội dung:</strong>
                {{ $users->content }}
            </div>
        </div>
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ngày gửi:</strong>
                {{ $users->senddate }}
            </div>
        </div>
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Trạng thái:</strong>
                {{ $users->status }}
            </div>
        </div>
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Chức vụ:</strong>
                {{ $users->job_title }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Địa chỉ:</strong>
                {{ $users->address }}
            </div>
        </div>
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Số điện thoại:</strong>
                {{ $users->phone }}
            </div>
        </div>
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>fax:</strong>
                {{ $users->fax }}
            </div>
        </div>
         
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dịch vụ cung cấp:</strong>
                {{ $users->contact_service }}
            </div>
        </div>
       
	</div>
     
   </div>       
@endsection