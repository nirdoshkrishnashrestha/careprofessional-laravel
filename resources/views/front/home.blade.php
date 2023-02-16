@extends('front.layout.main')
@section('content')

	<section class="slider-banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
			<?php $iba = 0;
			foreach($banners as $banner){  ?>	
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $iba }}" <?php if($iba == 0){ ?>class="active" aria-current="true" <?php } ?> aria-label="Slide {{ $iba }}"></button>
			<?php $iba++; } ?>
		  </div>
		  <div class="carousel-inner">
		<?php $ib = 0;
			  
		foreach($banners as $banner){  ?>
			
			<div class="carousel-item <?php if($ib == 0) { ?>active<?php } ?>">
			  <img src="{{ url('uploads/'.$banner->image_name) }}" class="d-block w-100" alt="{{ $banner->title }}">
			</div>
		<?php $ib++; } ?>
			 
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
		</div>
		</section>		  

		  <section class="welcome">
			  <div class="container">
			  
				  <div class="welcome-txt">
						  <h1> {!! $home[0]->title !!}</h1>
						  <p>{!! $home[0]->content !!}</p>
						  <a href="{{ url('about/about-us') }}" class="btn btn-outline-primary" role="button"><i class="fas fa-bars me-1"></i> Read More</a>
					  </div>
			  </div>
		  </section>		
	
	<!----------------------------------Vision-Mission Start----------------------->
	<section class="vision-mission">
	<div class="container">
	<div class="row">
	<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
		<div class="vision-mission-col">
				<div class="row d-flex align-items-center">
					<div class="col-lg-3 col-md-2">
						<i class="far fa-eye icon"></i>
					</div>
					<div class="col-lg-9 col-md-10">
						<h1>{!! $home[1]->title !!}</h1>
						<p>{!! $home[1]->content !!}</p>
					</div>
				</div>
		</div>
	</div>
		
	<div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
		<div class="vision-mission-col">
				<div class="row d-flex align-items-center">
					<div class="col-lg-3 col-md-2">
						<i class="fas fa-rocket icon"></i>
					</div>
					<div class="col-lg-9 col-md-10">
						<h1>{!! $home[2]->title !!}</h1>
						<p>{!! $home[2]->content !!}</p>
					</div>
				</div>
		</div>
	</div>
		
	<div class="col-lg-4 col-md-12">
		<div class="vision-mission-col">
				<div class="row d-flex align-items-center">
					<div class="col-lg-3 col-md-2">
						<i class="fas fa-crosshairs icon"></i>
					</div>
					<div class="col-lg-9 col-md-10">
						<h1>{!! $home[3]->title !!}</h1>
						<p>{!! $home[3]->content !!}</p>
					</div>
				</div>
		</div>
	</div>
	
	
	</div>
	</div>
	</section>
	<!----------------------------------Vision-Mission End----------------------->	
	
	<section class="chairman">
		<div class="container">
			<div class="row d-flex align-items-center">
			<!--<div class="col-lg-6">
				<div class="ch-photo"><img src="{{ url('uploads/'.$home[4]->image_name) }}" alt="Care Professional Chairman"/></div>
			</div>-->
			
			<div class="col-lg-6">
				<h1>Message from<br><span>Chairman</span></h1>
				
			</div>
			<div class="col-lg-6">
				<div class="ch-message">
							
				<p>{!! $home[4]->content !!}</p>
					
				</div>
			 </div>
			</div>
		</div>
	</section>	
	
	<section class="recent-jobs">
		<div class="container">
	<center>
	<h1>Available Jobs</h1>
	</center>
			
			<div class="row">
				
				@foreach ($jobs as $job)	
				<div class="col-lg-4 col-md-6 mb-4">
					<a href="{{ url('jobs/'.$job->id) }}"><div class="job-box">
						
						<div class="row d-flex align-items-center">
							<div class="col-lg-3 col-md-4 offset-lg-0 offset-md-4">
								<div class="company-logo">
									@if($job->image_name == NULL or $job->hide == "yes")
									<img src="{{ url('public/front/images/logo.png') }}" />
									@else
									<img src="{{ url('uploads/'.$job->image_name) }}" alt="{{ $job->title }}"/>
									@endif
								</div>
						  </div>
							<div class="col-lg-9 col-md-12">
								<h2>{{ $job->title }}</h2>
								<h5>{{ $job->company_name }}</h5>
								<span><i class="fas fa-globe-asia"></i> Country: {{ $job->country }}</span>
								<span><i class="far fa-money-bill-alt"></i> Salary: {{ $job->salary }}</span><br>
								<span><i class="far fa-calendar-alt"></i> Last Date: {{ date("d M, Y", strtotime($job->last_date)) }}</span>
														
							</div>
						</div>
				  </div></a>
				</div>
				@endforeach
				
			</div>
			<center>
	<a href="{{ url('manpower-category/Non-Skilled') }}" class="btn btn-outline-primary mt-2" role="button"><i class="fas fa-search me-1"></i> View All Jobs</a>
	</center>
		</div>
	</section>
	
	
	
	
	
	<section class="news-events">
		<div class="container">
			<center>
	<h1>Work Force</h1>
				<p class="lead text-light">List of categories available for foreign employment.</p>
	</center>
			
			<div class="row">
				<div class="col-lg-3 col-md-3 mt-3">
					<a href="{{ url('manpower-category/Non-Skilled') }}">
						<div class="news-box h-100">
							<div class="news-box-image">
								<img src="{{ url('public/front/images/manpower/non-skilled.png') }}" alt=""/>
							</div>
							<h2>Non-Skilled</h2>
							
					</div>
					</a>
				</div>
				
				<div class="col-lg-3 col-md-3 mt-3">
					<a href="{{ url('manpower-category/Semi-Skilled') }}">
						<div class="news-box h-100">
							<div class="news-box-image">
								<img src="{{ url('public/front/images/manpower/semi-skilled.png') }}" alt=""/>
							</div>
							<h2>Semi-Skilled</h2>
					</div>
					</a>
				</div>
				
				<div class="col-lg-3 col-md-3 mt-3">
					<a href="{{ url('manpower-category/Skilled') }}">
						<div class="news-box h-100">
							<div class="news-box-image">
								<img src="{{ url('public/front/images/manpower/skilled.png') }}" alt=""/>
							</div>
							<h2>Skilled</h2>
					</div>
					</a>
				</div>
				
				<div class="col-lg-3 col-md-3 mt-3">
					<a href="{{ url('manpower-category/Professional') }}">
						<div class="news-box h-100">
							<div class="news-box-image">
								<img src="{{ url('public/front/images/manpower/professional.png') }}" alt=""/>
							</div>
							<h2>Professional</h2>
					</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	
	<section class="how-work">
			  <div class="container">
				  
				  <div class="row d-flex align-items-center">
					  <div class="col-lg-6">
						  <h1>How to<br>
							<span>Apply?</span></h1>
							<div class="lead text-center">{!! $home[5]->content !!}</div>						
					  </div>
					  <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0">
						  <div class="work-process">
							  <div class="row">
							  <div class="col-lg-2 col-md-3">
								  <div class="process-icon">
								  <i class="fas fa-search"></i>
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-9">
								  <div class="process">
									  <h2>1. {!! $home[6]->title !!}</h2>
									  {!! $home[6]->content !!}
								  </div>
							  </div>
							  </div>
						  </div>
						  <div class="work-process">
							  <div class="row">
							  <div class="col-lg-2 col-md-3">
								  <div class="process-icon">
								  <i class="fas fa-file-upload"></i>
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-9">
								  <div class="process">
									  <h2>2. {!! $home[7]->title !!}</h2>
									  {!! $home[7]->content !!}
								  </div>
							  </div>
							  </div>
						  </div>
						  <div class="work-process">
							  <div class="row">
							  <div class="col-lg-2 col-md-3">
								  <div class="process-icon">
								  <i class="fas fa-user-friends"></i>
								  </div>
							  </div>
							  <div class="col-lg-10 col-md-9">
								  <div class="process">
									  <h2>3. {!! $home[8]->title !!}</h2>
									  {!! $home[8]->content !!}
								  </div>
							  </div>
							  </div>
						  </div>
					  </div>
				  </div>
			  </div>
		  </section>
	
	<section class="partners">
		<div class="container">
			
	<center>
	<h1>Valuable Clients</h1>
	</center>
			
	  <div class="regular slider responsive">
		@foreach ($clients as $client)
		
			<div class="partners-image">
				<a href=" {{ $client->url }} " target="_blank">
					@if($client->image_name == NULL or $client->hide == "yes")
			<img src="{{ url('public/front/images/logo.png') }}" />
			@else	
		  <img src="{{ url('uploads/'.$client->image_name) }}">
		  @endif
				</a>
			</div>
		
		@endforeach
	
		</div>
		</div>
	</section>
		  
		  
	<section class="testimonials">
	<div class="container">	
	<center>
	<h1>Testimonials</h1>
	</center>
		
	<div class="row">
		<div class="col-md-12">
			<div id="testimonial-slider" class="owl-carousel">
				@foreach ($testimonials as $testimonial)						
				
				<div class="testimonial">


					<div class="pic">
					<div class="testi-pic">
					
						@if($testimonial->image_name == NULL or $testimonial->hide == "yes")
									<img src="{{ url('public/front/images/demo-pp.png') }}" />
									@else
				<img src="{{ url('uploads/'.$testimonial->image_name) }}">
				@endif
					</div>
				</div>



					<div>
						{!! $testimonial->content !!}
					</div>
					<div class="testimonial-profile">
						<h3 class="title">{{ $testimonial->name }}</h3>
						<span class="post">{{ $testimonial->country }}</span>
					</div>
				</div>

				@endforeach
			</div>
		</div>
	</div>
		</div>
	</section>
      @endsection 
	  
