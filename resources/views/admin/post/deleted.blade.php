@extends('admin.layout.index')
@section('content')
<div id="content-container">
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
   <h1 class="page-header text-overflow">Danh sách bài viết đã xóa</h1>
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
            <!-- Theem -->
            <div class="clearfix">
               <div class="btn-group">
            
                   <i class="icon-plus"></i>
                
               </div>
               
               <!--===================================================-->
               <!-- Row selection (single row) -->
               <!--===================================================-->
               <div class="panel">
                  <div class="panel-heading">
                  <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('post.index') }}"> Quay lại</a>
	        </div>
                  </div>
                  <div class="panel-body">
                     <table id="demo-dt-selection" class="table table-striped table-bordered  toggle-circle" cellspacing="0" width="100%">
                        <thead>
                           <tr align="center">
                           <tr>
                           <tr>
                              <th data-toggle="true">STT</th>
                              <th>Tiêu đề</th>
                              <th>Thể loại</th>
                              <th>Tạo bởi</th>
                        
                              <th width="180px">ngày sửa</th>
                              <th width="80px">Thực hiện</th>
                          
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($post as $key => $item)
                        
                           <tr>
                         
                              <td>{{++$i}}</td>
                              <td>{{ $item->title }}</td>
                              <td>{{ $item->Category->name }}</td>
                              <td>{{ $item->User->name }}</td>
                             
                              <td>{{ dateTimeFormat($item->updated_at) }}</td>
                              <td>	<a class="btn btn-primary btn-sm" href="{{ route('post.restore',$item->id) }}">Khôi phục</a></td>
            
                           </tr>
                     
                           @endforeach
                         
                        </tbody>
                     </table>
                  </div>
               </div>
               <!--===================================================-->
               <!-- End Row selection (single row) -->
               {!! $post->render() !!}
            </div>
         </div>
      </div>
   </div>
</div>
<!--Default Bootstrap Modal-->
<!--===================================================-->
<div class="modal fade" id="myModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <!--Modal header-->
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
            <h4 class="modal-title">Chi tiết bài viết</h4>
         </div>
         <!--Modal body-->
         <div class="modal-body">
            <p class="text-semibold text-main">Bootstrap Modal Vertical Alignment Center</p>
            <p id="nameCate"> </p>
            <br>
         </div>
         <!--Modal footer-->
         <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
         </div>
      </div>
   </div>
</div>
<!--===================================================-->
<!--End Default Bootstrap Modal-->
@endsection
<!-- <style>
   #demo-dt-selection_paginate {
   display:none;
   }

</style> -->