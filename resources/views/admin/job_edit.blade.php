    @extends('admin.layout.main')

    @section('title')   
    Edit Job
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-speaker icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div><strong>Job</strong>
                        <div class="page-title-subheading">Edit {{ $job->title; }}
                        </div>
                    </div>
                </div>
                
              </div>
        </div>   
               
            <div class="tab-pane tabs-animation" >
            
               @error('image_name')
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Sorry!</strong> {{ "Only Images Are Allowed!" }}
                      </div>
                @enderror 
                <div class="main-card mb-3 card">
                     
                    <div class="card-body">
                    <form action="{{ url('admin/job/'.$job->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                                <input type="text" name="title" id="exampleEmail" placeholder="Enter Title Here" class="form-control" required value="{{ $job->title }}">
                            </div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Country:</label>
                                <div class="col-sm-4">
                                    <input type="text" name="country" id="exampleEmail" placeholder="Enter Country Here" class="form-control" required value="{{ $job->country }}">
                                </div>
                                </div>

                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Category:</label>
                                    <div class="col-sm-4">
                                        <select class="form-control select-menu" name="category" required>
                                            <option selected>{{ $job->category }}</option>
                                            <option value="Non-Skilled">Non-Skilled</option>
                                            <option value="Semi-Skilled">Semi-Skilled</option>
                                            <option value="Skilled">Skilled</option>
                                            <option value="Professional">Professional</option>
                                        </select>
                                    </div>
                                </div>       


                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Company Name:</label>
                <div class="col-sm-4">
                <input type="text" name="company_name" id="exampleEmail" placeholder="" class="form-control" required value="{{ $job->company_name }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Duration of Contract:</label>
                <div class="col-sm-4">
                <input type="text" name="duration" id="exampleEmail" placeholder="" class="form-control" required value="{{ $job->duration }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Salary:</label>
                <div class="col-sm-4">
                <input type="text" name="salary" id="exampleEmail" placeholder="Enter Salary Here" class="form-control" required value="{{ $job->salary }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Probation Period:</label>
                <div class="col-sm-4">
                <input type="text" name="probation_period" id="exampleEmail" placeholder="Enter Probation Period Here" class="form-control" required value="{{ $job->probation_period }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Working Hours:</label>
                <div class="col-sm-4">
                <input type="text" name="working_hours" id="exampleEmail" placeholder="Enter Working Hours Here" class="form-control" required value="{{ $job->working_hours }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Resident Permit Fees:</label>
                <div class="col-sm-4">
                <input type="text" name="resident_fee" id="exampleEmail" placeholder="Enter Resident Permit Fees" class="form-control" required value="{{ $job->resident_fee }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Air Ticket:</label>
                <div class="col-sm-4">
                <input type="text" name="air_ticket" id="exampleEmail" placeholder="Enter Air Ticket" class="form-control" required value="{{ $job->air_ticket }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Accommodation:</label>
                <div class="col-sm-4">
                <input type="text" name="accommodation" id="exampleEmail" placeholder="Enter Accommodation Here" class="form-control" required value="{{ $job->accommodation }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Local Transportation:</label>
                <div class="col-sm-4">
                <input type="text" name="local_transportation" id="exampleEmail" placeholder="Enter Local Transportation" class="form-control" required value="{{ $job->local_transportation }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Uniform:</label>
                <div class="col-sm-4">
                <input type="text" name="uniform" id="exampleEmail" placeholder="Enter Uniform Here" class="form-control" required value="{{ $job->uniform }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Medical Insurance:</label>
                <div class="col-sm-4">
                <input type="text" name="medical_insurance" id="exampleEmail" placeholder="Enter Medical Insurance Here" class="form-control" required value="{{ $job->medical_insurance }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Food:</label>
                <div class="col-sm-4">
                <input type="text" name="food" id="exampleEmail" placeholder="Enter Food Here" class="form-control" required value="{{ $job->food }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">In case of death:</label>
                <div class="col-sm-4">
                <input type="text" name="death_case" id="exampleEmail" placeholder="In case of death" class="form-control" required value="{{ $job->death_case }}">
                </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Visa Fees:</label>
                <div class="col-sm-4">
                <input type="text" name="visa_fees" id="exampleEmail" placeholder="Enter Visa Fees" class="form-control" required value="{{ $job->visa_fees }}">
                </div>
                </div> 
                                    
               <div class="position-relative row form-group"><label for="datepicker" class="col-sm-2 col-form-label">Submission Last Date:</label>
                    <div class="col-sm-4">
                        <input type="text" name="last_date" id="datepicker" placeholder="Submission Last Date" class="form-control" required value="{{ $job->last_date }}">
                    </div>
                    </div>    
                                                   
                    <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Content:</label>
                        <div class="col-sm-10">
                            <textarea name="content" id="content" class="form-control" required>{{ $job->content }}</textarea>
                        </div>
                    </div>
                   
                    <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Company Logo: <small class="form-text text-muted">Please Insert Image Only.</small></label>
                        <div class="col-sm-10">
                            <input name="image_name" type="file" id="exampleFile" class="form-control-file" accept="image/*">
                            <br>
    <img height="70px" width="80px" src="{{ asset('uploads/'.$job->image_name) }}" alt="No Previous Image.">
                        </div>
                    </div>

                    <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Hide Image:</label>
                        <div class="col-sm-10">
                            <div class="position-relative form-check">
                                <label class="form-check-label">
                    <input id="checkbox2" type="checkbox" name="hide" value="yes" @if($job->hide == "yes") checked @endif class="form-check-input">
                    Check to hide image
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <button class="btn btn-secondary" type="submit">Submit</button>
                        </div>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
       
    </div>
  
    @endsection

    @section('ckeditor')
    <script src="https://cdn.ckeditor.com/4.16.1/full-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content', {
	filebrowserUploadUrl: '{{ route('post.uploads',['_token' => csrf_token() ]) }}',
	filebrowserUploadMethod: 'form'
        } );
    </script>
    @endsection
