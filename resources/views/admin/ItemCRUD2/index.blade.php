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
	<table class="table table-bordered">
		<tr>
			<th>STT</th>
			<th>Tiêu đề</th>
			<th>Miêu tả</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($items as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td>{{ $item->description }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('itemCRUD2.show',$item->id) }}">Show</a>
			@permission('item-edit')
			<a class="btn btn-primary" href="{{ route('itemCRUD2.edit',$item->id) }}">Edit</a>
			@endpermission
			@permission('item-delete')

			
			{!! Form::open( ['method' => 'delete', 'route' => ['itemCRUD2.destroy', $item->id], 'style' => 'display: inline', 'onSubmit' => 'return confirm("Bạn có chắc chắn muốn xóa?")']) !!}
        <button type="submit" class="btn-delete btn btn-xs btn-danger">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    {!! Form::close() !!}

			<!-- {!! Form::open(['method' => 'DELETE','route' => ['itemCRUD2.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!} -->
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $items->render() !!}
                </div>
                    </div>
                </div>  
     
   </div>       
@endsection