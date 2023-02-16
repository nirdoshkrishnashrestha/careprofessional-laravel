<section class="top-info">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<span class="me-2"><strong>Lic. No.:</strong> 1308/074/75</span> <span><strong>Reg. No.:</strong> 174805/074/075</span>
			</div>
			<div class="col-lg-6 col-md-6">
				<div class="social-bottm">
					<?php //echo "<pre>"; var_dump($socials);die;?>
					<a href="{{ $socials[0]->facebook }}" title="Facebook" target="_blank"><i class="fab fa-facebook-f facebook"></i></a>
					<a href="{{ $socials[0]->twitter }}" title="Twitter" target="_blank"><i class="fab fa-twitter twitter"></i></a>
					<a href="{{ $socials[0]->linkedin }}" title="LinkedIn" target="_blank"><i class="fab fa-linkedin-in linkedin"></i></a>
					<a href="{{ $socials[0]->instagram }}" title="Instagram" target="_blank"><i class="fab fa-instagram insta"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>