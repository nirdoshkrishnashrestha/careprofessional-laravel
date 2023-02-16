    @extends('admin.layout.main')

    @section('title')   
    Job   
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-speaker text-success">
                        </i>
                    </div>
                    <div>
                        <strong>Job</strong>
                        <div class="page-title-subheading">Add or Edit Job
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Job List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Add New Job</span>
                            </a>
                        </li>
                    </ul>
                </div>  
              </div>
        </div>       
            
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">  
                @if(session('status'))    
                <div class="alert alert-success hide-alert" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> {{ session('status') }}
                  </div>
                @endif
                @error('image_name')
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sorry!</strong> {{ "Only Images Are Allowed!" }}
                  </div>
            @enderror          
                <div class="main-card mb-3 card">

                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">S.N.</th>
                                <th>Title</th>
                                <th class="text-center">Country</th> 
                                <th class="text-center">Last Date</th>                              
                                <th class="text-center">Image</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if(isset($_GET['page']))
                                    {
                                        if($_GET['page'] > 1)
                                        $i = ($_GET['page']-1)*15+1;
                                        else
                                        $i = 1;
                                    }
                                    else
                                    $i = 1; ?>
                           @foreach ($job as $item)                              
                         
                            <tr>
                                <td class="text-center text-muted">{{ $i }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $item->title; }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ $item->country }}</td>
                                <td class="text-center">{{ date("Y-m-d", strtotime($item->last_date)) }}</td>
                               
                                <td class="text-center">
                                  
                  <img height="50" class="rounded" src="{{ asset('uploads/'.$item->image_name) }}" alt="No Image Found."> 
                                 </td>
        <td class="text-center">
        <form method="POST" action=" {{ url('admin/job/'.$item->id) }} ">
            @csrf
            @method('DELETE')
           <a href="{{ url('admin/job/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a> 
           <a href="{{ url('admin/job/'.$item->id.'/delete') }}" class="btn btn-danger btn-sm">Delete</a>   
        </form> 
        </td>
                            </tr>
                            <?php  $i++; ?>        
                            @endforeach
                           </tbody>
                        </table>
                    </div>
                    <div class="d-block text-center card-footer">
                        <div class="d-flex justify-content-center">
                            {{ $job->links(); }}
                        </div>    
                        {{-- <button class="btn-wide btn btn-success">Pagination</button> --}}
                    </div>
                </div>
               
            </div>

               
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
              <h5 class="card-title">Add a New job</h5>
                <div class="main-card mb-3 card">
                 
                    <div class="card-body">
                        <form action="{{ url('admin/job') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="position-relative row form-group"><label for="title" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                                <input type="text" name="title" id="title" placeholder="Enter Title Here" class="form-control" required value="{{ old('title') }}">
                            </div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Country:</label>
                                <div class="col-sm-4">
                                    <input type="text" name="country" id="exampleEmail" placeholder="Enter Country Here" class="form-control" required value="{{ old('country') }}">
                                </div>
                                </div>

                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Category:</label>
                                    <div class="col-sm-4">
                                        <select class="form-control select-menu" name="category" required>
                                            <option selected>Choose Job Category</option>
                                            <option value="Non-Skilled">Non-Skilled</option>
                                            <option value="Semi-Skilled">Semi-Skilled</option>
                                            <option value="Skilled">Skilled</option>
                                            <option value="Professional">Professional</option>
                                        </select>
                                    </div>
                                </div> 
                                
                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Company Name:</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="company_name" id="exampleEmail" placeholder="Enter Comany Name" class="form-control" required value="{{ old('company_name') }}">
                                    </div>
                                    </div>

                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Salary:</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="salary" id="exampleEmail" placeholder="Enter Salary Here" class="form-control" required value="{{ old('salary') }}">
                                    </div>
                                    </div>     

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Duration of Contract:</label>
                            <div class="col-sm-4">
                            <input type="text" name="duration" id="exampleEmail" placeholder="Enter Duration of Contract" class="form-control" required value="{{ old('duration') }}">
                            </div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Probation Period:</label>
                            <div class="col-sm-4">
                            <input type="text" name="probation_period" id="exampleEmail" placeholder="Enter Probation Period" class="form-control" required value="{{ old('probation_period') }}">
                            </div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Working Hours:</label>
                            <div class="col-sm-4">
                            <input type="text" name="working_hours" id="exampleEmail" placeholder="Enter Working Hours" class="form-control" required value="{{ old('working_hours') }}">
                            </div>
                            </div>  
                              
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Resident Permit Fees:</label>
                            <div class="col-sm-4">
                            <input type="text" name="resident_fee" id="exampleEmail" placeholder="Enter Resident Permit Fees" class="form-control" required value="{{ old('resident_fee') }}">
                            </div>
                            </div> 

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Air Ticket:</label>
                            <div class="col-sm-4">
                            <input type="text" name="air_ticket" id="exampleEmail" placeholder="Enter Air Ticket" class="form-control" required value="{{ old('air_ticket') }}">
                            </div>
                            </div>
                            
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Accommodation:</label>
                            <div class="col-sm-4">
                            <input type="text" name="accommodation" id="exampleEmail" placeholder="Enter Accommodation Here" class="form-control" required value="{{ old('accommodation') }}">
                            </div>
                            </div>        
                            
                            
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Local Transportation:</label>
                                <div class="col-sm-4">
                                <input type="text" name="local_transportation" id="exampleEmail" placeholder="Enter Local Transportation" class="form-control" required value="{{ old('local_transportation') }}">
                                </div>    
                                </div>

                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Uniforms:</label>
                                <div class="col-sm-4">
                                <input type="text" name="uniform" id="exampleEmail" placeholder="Enter Uniforms Here" class="form-control" required value="{{ old('uniform') }}">
                                </div>
                                </div>

                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Medical Insurance:</label>
                                <div class="col-sm-4">
                                <input type="text" name="medical_insurance" id="exampleEmail" placeholder="Enter Medical Insurance" class="form-control" required value="{{ old('medical_insurance') }}">
                                </div>
                                </div>    
                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Food:</label>
                                <div class="col-sm-4">
                                <input type="text" name="food" id="exampleEmail" placeholder="Enter Food Here" class="form-control" required value="{{ old('food') }}">
                                </div>
                                </div>        
                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">In case of death:</label>
                                <div class="col-sm-4">
                                <input type="text" name="death_case" id="exampleEmail" placeholder="In case of death" class="form-control" required value="{{ old('death_case') }}">
                                </div>
                                </div>

                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Visa Fees:</label>
                                <div class="col-sm-4">
                                <input type="text" name="visa_fees" id="exampleEmail" placeholder="Enter Visa Fees" class="form-control" required value="{{ old('visa_fees') }}">
                                </div>
                                </div>                              
                            
                            <div class="position-relative row form-group"><label for="datepicker" class="col-sm-2 col-form-label">Submission Last Date:</label>
                                <div class="col-sm-4">
                                    <input type="text" name="last_date" id="datepicker" placeholder="Submission Last Date" class="form-control" required value="{{ old('last_date') }}">
                                </div>
                                </div> 
                                                   
                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Content:</label>
                                <div class="col-sm-10">
                                    <textarea name="content" id="content" class="form-control" required>{{ old('content') }}</textarea>
                                </div>
                            </div>
                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Company Logo:<small class="form-text text-muted">Please Insert Image Only.</small></label>
                                <div class="col-sm-10">
                                    <input name="image_name" type="file" id="exampleFile" class="form-control-file" accept="image/*">
                                    
                                </div>
                            </div>
                            <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Hide Image:</label>
                                <div class="col-sm-10">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                           <input id="checkbox2" type="checkbox" name="hide" value="yes" class="form-check-input">
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
                    {{ $job->links() }}
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
