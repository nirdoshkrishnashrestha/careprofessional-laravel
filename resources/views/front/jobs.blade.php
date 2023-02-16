@extends('front.layout.main')
@section('title')
Foreign Employment
@endsection
@section('content')
<section class="container-page">
	<div class="container">
		<div class="content-page">
		<center>
		<h1>Opening Jobs</h1>
		</center>
		<div class="opening-jobs">		  		
			<div class="row">
				@foreach ($jobs as $job)
			<div class="col-lg-3 col-md-6 mb-4">
				<div class="job-box">
					@if($job->image_name == NULL or $job->hide != NULL)
					<img src="{{ url('public/front/images/logo3.png') }}" />
					@else
					<img src="{{ url('uploads/'.$job->image_name) }}" alt="Care Professional Service - {{ $job->title }}"/>
					@endif
					<h2><a href="{{ url('jobs/'.$job->id) }}">{{ $job->title }}</a></h2>
					<span><strong>Country :</strong> {{ $job->country }}</span><br>
					<strong>Salary :</strong> {{ $job->salary }}<br>
			<strong>Last Date :</strong>{{ date("d M, Y", strtotime($job->last_date)) }}<br>
					<strong>Position :</strong> {{ $job->position }}<br>
<a href="{{ url('jobs/'.$job->id) }}" class="btn btn-sm btn-outline-job mt-2" role="button"><i class="fas fa-search me-1"></i> Details</a>
			  </div>
			</div>
			@endforeach	
		</div>
		{{ $jobs->links(); }}
		</div>
		</div>
	</div>
</section>
@endsection
  