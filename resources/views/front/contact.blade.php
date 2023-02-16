@extends('front.layout.main')
@section('title')
Contact Us
@endsection
@section('content')

<section class="container-page">
	<div class="container">
		<div class="content-page">
<div class="contact-page">

<div class="row">
<div class="col-lg-6 col-md-6">
<div class="col-box h-100">
<h2>Inquiry</h2>
<form>
  <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Full Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="">
    </div>
  </div>
	
	<div class="row mb-3">
    <label class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" id="">
    </div>
  </div>
	<div class="row mb-3">
    <label class="col-sm-3 col-form-label">Mobile</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="">
    </div>
  </div>
	
	<div class="row mb-3">
    <label class="col-sm-3 col-form-label">Inquiry</label>
    <div class="col-sm-9">
      <textarea name="" class="form-control" rows="3"> 
		</textarea>
    </div>
  </div>
  <div class="row"><div class="col-3"></div><div class="col-9"><button type="submit" class="btn btn-outline-primary">Submit</button></div></div>
</form>
</div>			
</div>
<div class="col-lg-6 col-md-6 mb-4 mb-md-0 mb-lg-0">
<div class="col-box h-100">
	<h2>Contact Us</h2>
	<div class="row mb-3">
		<div class="col-lg-1 col-md-2">
			<i class="fas fa-phone"></i>
		</div>
		<div class="col-lg-11 col-md-10">
			<h5>Call Us</h5>
			<p>+977-1-{{ $contact[0]->phone1 }}, {{ $contact[0]->phone2 }}</p>
		</div>
	</div>
	
	<div class="row mb-3">
		<div class="col-lg-1 col-md-2">
			<i class="fas fa-envelope"></i>
		</div>
		<div class="col-lg-11 col-md-10">
			<h5>Mail Us</h5>
			<p>{{ $contact[0]->email1 }}<br>
				{{ $contact[0]->email2 }}</p>
		</div>
	</div>
	<div class="row mb-3">
		<div class="col-lg-1 col-md-2">
			<i class="fas fa-map-marker-alt"></i>
		</div>
		<div class="col-lg-11 col-md-10">
			<h5>Visit Us</h5>
			<p>{{ $contact[0]->address1 }}</p>
		</div>
	</div>
	
	
<div class="social-bottm">
			
	<?php if($socials[0]->facebook != ""){ ?>
		<a href="{{ $socials[0]->facebook }}" title="Facebook" target="_blank"><i class="fab fa-facebook-f facebook"></i></a>
		<?php } if($socials[0]->twitter != ""){ ?>
		<a href="{{ $socials[0]->twitter }}" title="Twitter" target="_blank"><i class="fab fa-twitter twitter"></i></a>
		<?php } if($socials[0]->instagram != ""){ ?>
		<a href="{{ $socials[0]->instagram }}" title="LinkedIn" target="_blank"><i class="fab fa-linkedin-in linkedin"></i></a>
		<?php } if($socials[0]->linkedin != ""){ ?>
		<a href="{{ $socials[0]->linkedin }}" title="Instagram" target="_blank"><i class="fab fa-instagram insta"></i></a>
		<?php } if($socials[0]->youtube != ""){ ?>
		<a href="{{ $socials[0]->youtube }}" title="Youtube" target="_blank"><i class="fab fa-youtube youtube"></i></a>
		<?php } ?>


			</div>	
	
	</div>
</div>	
<div class="col-lg-12 mt-4">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14126.975530650892!2d85.341131!3d27.725193!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19693c88645f%3A0xbf69e587bc07a866!2sDhumbarahi%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1640930701738!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

</div>
</div>			
	</div>
	</div>
</section>

@endsection
  