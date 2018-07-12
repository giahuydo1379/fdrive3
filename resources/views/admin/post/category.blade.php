@extends('admin.layout.index')

@section('content')
<div id="content-container">
<div id="page-content">

	
 <div class="panel">
					    <div class="panel-heading">
					        <h3 class="panel-title">Danh sách thể loại</h3>
					    </div>
					    <div class="panel-body">
					        <div class="row">
					            <div class="col-md-6">
					                <div id="demo-nestable" class="dd">
					                    <ol class="dd-list">
										@foreach($category as $category)
					                        <li class="dd-item" data-id="Item <?=  $category['id'] ?>">
					                            <div class="dd-handle dd-bg dd-anim" rows="2">{{$category['name']}}</div>
												@foreach($category['childs'] as $sub)
					
												<ol class="dd-list">
													<li class="dd-item" data-id=" Item<?=  $sub['id'] ?>"><div class="dd-handle dd-bg dd-anim" >   {{$sub['name']}}</div></li>
													
												</ol>
												@endforeach
					                        </li>
					                        
											@endforeach
					                    </ol>
					                </div>
					            </div>
					            
					        </div>
					    </div>
					</div>
					
					

</div>
</div>

	
   
				
@endsection
