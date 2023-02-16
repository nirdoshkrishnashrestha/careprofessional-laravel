@extends('front.layout.main')
@section('title')
{{ $service->title }}
@endsection
@section('content')
<section class="container-page">
	<div class="container">
		<div class="content-page">
		  <h1> {{ $service->title }} </h1>
		  @if ($service->image_name != NULL) 
		  @if($service->hide == NULL )       
			<div class="page-image">
        <img src="{{ url('uploads/'.$service->image_name) }}" alt="Care Professional Service - {{ $service->title }}"/>
      </div>
      @endif
      @endif
			{!! $service->content !!}
			<div class="clearfix"></div>
		</div>
	</div>
	
</section>
@endsection
  