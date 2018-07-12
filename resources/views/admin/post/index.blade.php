@extends('admin.layout.index')
@section('content')
<div id="content-container">
<!--Page Title-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
   <h1 class="page-header text-overflow">Danh sách bài viết</h1>
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
               @permission('post-create')
                  <a  class="btn btn-success" href="{{ route('post.create') }}"> Thêm bài viết</a>
                  @endpermission
                   <i class="icon-plus"></i>
                  </button>
               </div>
               <a  class="btn btn-success" href="{{ route('post.notactive') }}">
               Danh sách bài viết chưa kích hoạt 
              </a>


            @permission('post-restore')
              <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('post.deleted') }}">Bài viết đã xóa</a>
              @endpermission
	        </div>
               <!--===================================================-->
               <!-- Row selection (single row) -->
               <!--===================================================-->
               <div class="panel">
                  <div class="panel-heading">
                  </div>
                  <div class="panel-body">
                     <table id="demo-dt-selection" class="table table-striped table-bordered  toggle-circle" cellspacing="0" width="100%">
                        <thead>
                           <tr align="center">
                           <tr>
                           <tr>
                              <th data-toggle="true" class="footable-visible footable-first-column footable-sortable">STT</th>
                              <th>Tiêu đề</th>
                              <th>Thể loại</th>
                              <th>Tạo bởi</th>
                        
                              <th width="80px">ngày sửa</th>
                              <th width="80px">Thực hiện</th>
                            
                              <th data-hide="all" class="footable-sortable">Tóm tắt</th>
                              <th data-hide="all" class="footable-sortable">Status
                               
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($post as $key => $item)
                           @if($item->active=="1")
                           <tr>
                         
                              <td></td>
                              <td>{{ $item->title }}</td>
                              <td>{{ $item->Category->name }}</td>
                              <td>{{ $item->User->name }}</td>
                             
                              <td>{{ dateTimeFormat($item->updated_at) }}</td>
                              <td>
                              @permission('role-delete')
                                 <!-- {!! Form::open( ['method' => 'DELETE','route' => ['post.destroy', $item->id], 'style' => 'display: inline', 'onSubmit' => 'return confirm("Bạn có chắc chắn muốn xóa?")']) !!}
										 	<button type="submit" class="btn btn-danger">
										Xóa
										 	</button> 
											 {!! Form::close() !!}  -->
                       <button data-id="{{$item->id}}" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">
                                    <i class="fa fa-trash" aria-hidden="true"></i> Xoá
                                </button>
                                 @endpermission
                        
                                </td>
                        
                              <td>{{ $item->summary }}</td>
                              <td>
                             <!-- <input type="button" name="view" value="Xem chi tiết" id="" onclick="loadDetail(this);" class="btn btn-primary btn-sm" /> -->
                             <input type="button" class="show-modal btn btn-primary btn-sm"  onclick="showModal("<?php echo $item->id  ?>")" value="Xem chi tiết" />
                                @permission('post-edit')
                              <a  class="btn btn-success btn-sm" href="{{ route('post.edit',$item->id) }}"> Sửa bài viết</a>
                                </td>
                                @endpermission
                           </tr>
                           @endif


                           <!-- Modal Delete-->
                           <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Xóa Bài Viết</h4>
        </div>
        <div class="modal-body">
            <form id="form-delete">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="del-id">
                <p>Bạn có chắc muốn xóa bài viết  này?</p>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="{{ route('post.destroy', $item->id) }}" class="btn btn-danger" id="delete">Xóa</a>
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
               {!! $post->render() !!}
            </div>
         </div>
      </div>
   </div>
</div>



<div id= "details">
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           
      <p id="nameCate"> </p>

    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div> 


 <!-- <script>
 function showModal($nameCate) {
  var data = {
				
						_token:$('input[name ="_token"]').val()
						};
    var $this = $("#myModal");
    $.ajax({
      type: 'POST',
      url: '/post/detail/' + $nameCate,
      data,
      success: function(result) {
        console.log(result);
      }
    });
  
    $this.modal("show");
    $this.find("#nameCate").html($nameCate);
   };

// Show function

 
</script> -->
<!--===================================================-->
<!--End Default Bootstrap Modal-->
@endsection
<!-- <style>
   #demo-dt-selection_paginate {
   display:none;
   }

</style> -->
