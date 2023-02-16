@extends('front.layout.main')
@section('title')
{{ $group->title }}
@endsection
@section('content')
<section class="container-page">
	<div class="container">
		<div class="content-page">
		  <h1> {{ $group->title }} </h1>
		  @if ($group->image_name != NULL) 
		  @if($group->hide == NULL )      
			<div class="page-image">
        <img src="{{ url('uploads/'.$group->image_name) }}" alt="Care Professional Service - {{ $group->title }}"/>
      </div>
      @endif
      @endif
			{!! $group->content !!}
		</div>
	</div>
</section>
@endsection
  