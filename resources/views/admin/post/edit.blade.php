@extends('admin.layout.index')
@section('content')
<script src="admin_assets/dist/js/extra.js"></script>
<div id="content-container">
   <div id="page-head">
      <!--Page Title-->
      <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      <div id="page-title">
         <h1 class="page-header text-overflow">Sửa bài viết</h1>
      </div>
      <div class="pull-right">
	            <a class="btn btn-primary" href="{{ route('post.index') }}"> Quay lại</a>
	        </div>
      <div id="page-content">
         @if (count($errors) > 0)
         <div class="alert alert-danger">
            <strong>Ôi!</strong> Có một số lỗi trong phần nhập.<br><br>
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif
         {!! Form::open(['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['post.update', $post->id]]) !!}

         <!-- Form bắt buộc phải có thuộc tính enctype thì mới up được file lên -->
         {{ csrf_field() }}

         <div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
            <label for="category_id">thể loại:</label>
            <div class="form-group">
            
               <select class="form-control m-bot15"   name='category_id' value= " {{ old('category_id') }}">
                  @foreach($category as $categorypost)
                  
                  <option name="{{$categorypost['id']}}"   @if($categorypost['id'] == $post->category_id)
                                            {{ 'selected' }}
                                        @endif  value="{{$categorypost['id']}}"   
                
                                        >--{{$categorypost['name']}}</option>
                  @foreach($categorypost['childs'] as $sub)
                
                  <option  name="{{$sub['id']}}"   @if($sub['id'] == $post->category_id)
                                            {{ 'selected' }}
                                        @endif  value="{{$sub['id']}}" 
                   
                    >----{{$sub['name']}}</option>
                  @endforeach 
                  @endforeach
               </select>
               <span class="text-danger">{{ $errors->first('category_id') }}</span>
            </div>
         </div>
         
         <p><label>Thêm Hình Ảnh</label></p>
         <p>
                 <img width="400px" src="upload/tintuc/{{ $post->image }}">
                                </p>
         {!! Form::file('image', array('class' => 'image')) !!}     

         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group  {{ $errors->has('title') ? 'has-error' : '' }}">
               <strong>Tiêu đề:</strong>
               {!! Form::text('title', $post->title, array('placeholder' => ' TieuDe','class' => 'form-control')) !!}
               <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
         </div>

         <div id="page-wrapper">
            <div class="container-fluid">
               <div class="row">
               <div class="form-group  {{ $errors->has('summary') ? 'has-error' : '' }}">
                     <p><label>Văn bản giới thiệu</label></p>
                     {!! Form::textarea('summary', $post->summary, array('placeholder' => ' Tomtat','class' => 'form-control')) !!}
                  
                     <span class="text-danger">{{ $errors->first('summary') }}</span>
                  </div>
                  
                  <div class="form-group  {{ $errors->has('content') ? 'has-error' : '' }}">
                     <p><label>Nội Dung Bài Viết</label></p>
                     {!! Form::textarea('content', $post->content, array('placeholder' => ' Noidung','class' => 'form-control ckeditor')) !!}
              
                     <span class="text-danger">{{ $errors->first('content') }}</span>
                  </div>
               </div>
            </div>
         </div>
     
         <div class="form-group">
            <p><label>Trạng thái hiển thị?</label></p>
            <label class="radio-inline">
            <input name="active" value="1" checked="" type="radio">Có
            </label>
            <label class="radio-inline">
            <input name="active" value="0" type="radio">Không
            </label>
         </div>

        <div class="form-group">
            <p><label>Tin nổi bật?</label></p>
            <label class="radio-inline" >
            <input name="oustand" value="1"  type="radio">Có
            </label>
            <label class="radio-inline">
            <input name="oustand" value="0" checked="" type="radio">Không
            </label>
         </div>

         <button class="btn btn-success" type="submit">Cập nhập</button>
         <button class="btn btn-warning" type="reset">Nhập Lại</button>

         
         {!! Form::close() !!}
      </div>
   </div>
</div>
</div>
@endsection
