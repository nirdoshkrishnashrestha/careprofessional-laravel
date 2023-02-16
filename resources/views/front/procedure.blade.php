@extends('front.layout.main')
@section('title')
{{ $procedure->title }}
@endsection
@section('content')
<section class="container-page">
	<div class="container">
		<div class="content-page">
		  <h1> {{ $procedure->title }} </h1>
		  @if ($procedure->image_name != NULL) 
		  @if($procedure->hide == NULL )      
			<div class="page-image">
        <img src="{{ url('uploads/'.$procedure->image_name) }}" alt="Care Professional Service - {{ $procedure->title }}"/>
      </div>
      @endif
      @endif
			{!! $procedure->content !!}
		</div>
	</div>
</section>
@endsection
  