@extends('front.layout.main')
@section('title')
{{ $jobs_details->title }}
@endsection
@section('content')
<section class="container-page">
	<div class="container">
		<div class="content-page">
		  <h1>{{ $jobs_details->title }}</h1>
			
            <div class="job-details">
				<div class="row">
					<div class="col-lg-6">
				<table class="table table-bordered align-middle">
						<tbody>
						<tr>
						<th scope="row">Company</th>
						<td>{{ $jobs_details->company_name }}</td>
						</tr>
						<tr>
						<th scope="row">Duration of Contract</th>
						<td>{{ $jobs_details->duration }}</td>
						</tr>
						<tr>
						<th scope="row">Place of Employment</th>
						<td style="color: #FF0004;">{{ $jobs_details->country }}</td>
						</tr>
						<tr>
							<th scope="row">Salary</th>
							<td>{{ $jobs_details->salary }}</td>
							</tr>
						<tr>
							<th scope="row">Last Date</th>
							<td>{{ $jobs_details->last_date }}</td>
							</tr>
						<tr>
						<th scope="row">Probation Period</th>
						<td>{{ $jobs_details->probation_period }}</td>
						</tr>
						<tr>
						<th scope="row">Working Hours</th>
						<td>{{ $jobs_details->working_hours}}</td>
						</tr>
						<tr>
						<th scope="row">Resident Permit Fees</th>
						<td>{{ $jobs_details->resident_fee }}</td>
						</tr>
						<tr>
						<th scope="row">Air Ticket</th>
						<td>{{ $jobs_details->air_ticket }}</td>
						</tr>
						<tr>
						<th scope="row">Accommodation</th>
						<td>{{ $jobs_details->accommodation }}</td>
						</tr>
						<tr>
						<th scope="row">Local Transportation</th>
						<td>{{ $jobs_details->local_transportation }}</td>
						</tr>
						<tr>
						<th scope="row">Uniforms</th>
						<td>{{ $jobs_details->uniform }}</td>
						</tr>
						<tr>
						<th scope="row">Medical Insurance</th>
						<td>{{ $jobs_details->medical_insurance }}</td>
						</tr>
						<tr>
						<th scope="row">Food</th>
						<td>{{ $jobs_details->food }}</td>
						</tr>
						<tr>
						<th scope="row">In case of death</th>
						<td>{{ $jobs_details->death_case }}</td>
						</tr>						
						<tr>
						<th scope="row">Visa Fees</th>
						<td>{{ $jobs_details->visa_fees }}</td>
						</tr>
						</tbody>
				</table>
					</div>
					<div class="col-lg-6">
						<h2>Job Description</h2>
						{!! $jobs_details->content !!}
						
						<h2>Required Documents</h2>
						<ol>
						<li>Passport</li>
						<li>Photo (Passport Size - 6)</li>
						<li>Citizenship Card</li>
						<li>Police Clearance Report</li>
						</ol>
					<a href="{{ url('contact') }}" class="btn btn-sm btn-outline-danger mt-2" role="button"><i class="fas fa-file-upload me-1"></i> Enquiry</a>
										
					<a href="{{ url('manpower-category/Non-Skilled') }}" class="btn btn-sm btn-outline-primary mt-2 ms-2" role="button"><i class="fas fa-search me-1"></i> Find Other Jobs</a>
					<div class="clearfix">
					<hr>
					
					<span style="color: #0c4da2; font-style: italic; font-size: 13px;">Share this page to your family & friends</span>
					<div class="social-share">
						<a href="#" id="share-fb" class="sharer button"><i class="fab fa-facebook-f facebook"></i></a>
						<a href="#" id="share-tw" class="sharer button"><i class="fab fa-twitter twitter"></i></a>
						<a href="#" id="share-li" class="sharer button"><i class="fab fa-linkedin-in linkedin"></i></a>
						<a href="#" id="share-em" class="sharer button"><i class="fas fa-envelope email"></i></a>
					</div>
					</div>
				</div>		
			</div>
		</div>
	</div>
</section>
@endsection
  