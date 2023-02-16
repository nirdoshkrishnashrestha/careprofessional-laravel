@extends('front.layout.main')
@section('title')
Gallery
@endsection
@section('content')

<section class="container-page">
	<div class="container">
		<div class="content-page">
		  <h1>Gallery</h1>
			
<div class="gallery-page">
	
<div class="row">
@foreach ($gallery as $galleries)
<div class="col-lg-3 col-md-4">
	<div class="thumbsize">
		<div class="gallery-thumbnail">
			<a href="{{ url('uploads/'.$galleries->image_name) }}"><img src="{{ url('uploads/'.$galleries->image_name) }}" /></a>
		</div>
	</div>
</div>	
@endforeach
</div>

</div>		
		</div>
	</div>
</section>

@endsection

@section('lightbox')
<link rel="stylesheet" href="{{ url('public/front/css/jquery.lightbox.css') }}">
<script src="{{ url('public/front/js/jquery.lightbox.js') }}"></script>  
<script>
  $(function() {
    $('.thumbsize a').lightbox();
  });
</script>	
@endsection
  