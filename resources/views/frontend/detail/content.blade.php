@extends('frontend.detail.index')

@section('content')

<div class="container">
	<div class="col-lg-9">	
        <div class="content-body">
          <h1>{{ $post->title }}</h1>
			<p class="lead">
				{!! $post->summary !!}
			</p>

			<p>
				{!! $post->content !!}
			</p>

	</div>
	</div>

		<div class="col-md-3">



		<div class="panel panel-default">
			<div class="panel-heading"><b>Tin nổi bật</b></div>
			<div class="panel-body">
				@foreach($hotNews as $hotNews)
					<!-- item -->
					<div class="row" style="margin-top: 10px;">
						<div class="col-md-5">
								<a  href="{{ $hotNews->slug }}-{{ $hotNews->id}}.html">
								<img class="img-responsive" src="/upload/tintuc/<?= $hotNews->image ?>"alt="Hình ảnh của bài viết">
							</a>
						</div>
						<div class="col-md-7">
									<a  href="{{ $hotNews->slug }}-{{ $hotNews->id}}.html"><b>{{ $hotNews->TieuDe }}</b></a>
						</div>
						<p class="sum-p">
							{!! $hotNews->summary !!}
						</p>
						<div class="break"></div>
					</div>
					<!-- end item -->
				@endforeach
				
			</div>
		</div>

		</div>

		 <div class="col-xs-12 other-news">
            <div class="col-xs-12 other-news-title">CÁC TIN TỨC KHÁC</div>
            <div class="col-xs-12 other-news-item">
               <ul>
               @foreach ($postRandom as $key => $item)
                  <li> <a href="{{ $item->slug }}-{{ $item->id}}.html"> {{ $item->title }}</a></li>
				  @endforeach
               </ul>
            </div>
         </div>
      </div>
      
</div>
</div>
</div>
@endsection




