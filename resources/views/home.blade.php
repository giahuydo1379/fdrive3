@extends('admin.layout.index')
 @section('content')

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
	<div id="page-head">

		<!--Page Title-->
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div id="page-title">
			<h1 class="page-header text-overflow">Trang chủ</h1>
		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<!--End page title-->

		

	</div>


	
	<!--===================================================-->
	<div id="page-content">
				
					
								<h1>Chào {{ Auth::user()->name }}</h1>
								<div class="panel panel-bordered panel-primary">
					                <div class="panel-heading">
									
					                    <h3 class="panel-title">Lịch</h3>
					                </div>
					                <div class="panel-body">
					                    <p>Hôm nay là: {{ getWeekDay() }}, Ngày {{ date('d/m/Y') }}.</p>
											<!--<p>Thời gian hiện tại: <span id="timestamp"></span></p>-->
					                </div>
					            </div>
								
								<div class="clearfix"></div>
						


	</div>
	<!--===================================================-->
	<!-- <div class="panel-heading">
						<h1 class="page-header text-overflow">Danh sách khách hàng cần hỗ trợ</h1>
					    </div> -->

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!-- <div id="page-title">
            <h1 class="page-header text-overflow">Danh sách người cần hỗ trợ</h1>
        </div> -->
            <div id="page-content">

                <div class="panel">
                    <div class="panel-body">
                        <div class="row mar-top">

                        	
							<div class="panel-heading">
						<h1 class="page-header text-overflow">Danh sách khách hàng cần hỗ trợ</h1>
					    </div>
                    <!-- Row selection (single row) -->
					<!--===================================================-->
					<div class="panel">
					   
					    <div class="panel-body">
				
					        <table id="demo-dt-selection" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
									<tr align="center">
													<tr>
									<th>STT</th>
									<th>Tiêu đề </th>			
									<th>Tên </th>	
									<th>Hòm thư</th>
									<th>Công ty</th>					
									<th>Chức vụ </th>				
									<th>Xem chi tiết</th>
								
								</tr>
							</thead>
					            <tbody>
					        
							       @foreach ($users  as $key => $user)
										<tr>
											<td>{{ ++$i }}</td>
											<td>{{ $user->title }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->company }}</td>
											<td>{{ $user->job_title }}</td>
											<td>
								
											<a class="btn btn-primary" href="{{ route('feedback.show',$user->id) }}">Hiển thị</a>
											
											</td>
										</tr>
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



<!--===================================================-->
<!--END CONTENT CONTAINER-->
<style>
#demo-dt-selection_paginate {
    display:none;
}
</style>
<script>
$(document).ready(function(){
	function timestamp(){
		$.ajax({
			url: 'timestamp',
			type: 'GET',
			success:function(data){
				$('#timestamp').html(data);
			}
		});
	}
}
</script>
@endsection