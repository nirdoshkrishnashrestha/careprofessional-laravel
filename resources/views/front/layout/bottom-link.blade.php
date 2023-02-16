
<section class="bottom-link">
	<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
		<img src="{{ url('public/front/images/logo-white.png') }}" alt="Care Professional White Logo"/><br>
			<i class="fas fa-map-marker-alt"></i>{{ $contact[0]->address1 }}<br>
	<i class="fas fa-phone-alt"></i>+977-1-{{ $contact[0]->phone1 }}, {{ $contact[0]->phone2 }}<br>
	<i class="fas fa-mobile-alt"></i>+977-{{ $contact[0]->address2 }}<br>
			<i class="fas fa-envelope"></i>{{ $contact[0]->email1 }}<br>
		<!--	<i class="fas fa-envelope"></i>{{ $contact[0]->email2 }} -->
		</div>
		<div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
			<span class="title-head">About Us</span>
			<hr class="bg-light">
			<li><a href="{{ url('about/about-us') }}">Who We Are?</a></li>
			<li><a href="{{ url('about/board-members') }}">Board Members</a></li>
			<li><a href="{{ url('about/organization-chart') }}">Organization Chart</a></li>
			<li><a href="{{ url('about/legal-documents') }}">Legal Documents</a></li>
		<!--	<li><a href="terms.php">Terms & Conditions</a></li> -->
	  	</div>
		<div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
			<span class="title-head">Quick Links</span>
			<hr class="bg-light">
			<li><a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('service/recruitment') }}">Recruitment</a></li>
			<li><a href="{{ url('/service/recruitment') }}">Trainings</a></li>
			<li><a href="{{ url('/service/recruitment') }}">Speciment</a></li>
			
	  	</div>
		<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
			<span class="title-head">Connect with Us</span>
			<hr class="bg-light">
			
			<div class="fb-page" data-href="https://www.facebook.com/ittradersnepal202" data-tabs="timeline" data-width="" data-height="150" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/ittradersnepal202" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ittradersnepal202">Trikon management service sanepa lalitpur</a></blockquote></div>
	  	
		</div>
	</div>
	</div>
</section>	