@extends('frontend.footer.policy_privacy.index')

@section('content')

<div class="container">
	<div class="col-lg-9">	
        <div class="content-body">
          <h1>{{ $post->title }}</h1>

			<p>
				{!! $post->content !!}
			</p>

	</div>
	</div>

		<div class="col-md-3">

	

</div>
</div>
</div>
</div>
@endsection




