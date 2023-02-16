@extends('front.layout.main')
@section('title')
About Us
@endsection
@section('content')
<section class="container-page">
	<div class="container">
		<div class="content-page">
		  <h1> {{ $abouts->title }} </h1>
      @if ($abouts->image_name != NULL) 
			@if($abouts->hide == NULL )
			<div class="page-image">
        <img src="{{ url('uploads/'.$abouts->image_name) }}" alt="Care Professional Service - {{ $abouts->title }}"/>
      </div>
	  @endif
      @endif
			{!! $abouts->content !!}
		</div>
	</div>
</section>
@endsection
  