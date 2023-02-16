    @extends('admin.layout.main')

    @section('title')   
    Edit Vacancy   
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-add-user text-success">
                        </i>
                    </div>
                    <div><strong>Vacancy</strong>
                        <div class="page-title-subheading">Edit Vacancy
                        </div>
                    </div>
                </div>
                
              </div>
        </div>   
               
            <div class="tab-pane tabs-animation" >
              {{-- <h5 class="card-title">Add a New Post</h5> --}}
                <div class="main-card mb-3 card">
                 
                    <div class="card-body">
                        <form action="{{ url('admin/vacancy/'.$vacancy->id.'/save') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            {{-- @method('PUT') --}}
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                                <input type="text" name="title" id="exampleEmail" placeholder="Enter Title Here" class="form-control" value="{{ $vacancy->title; }}" required>
                            </div>
                            </div>                        
                           
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">No. of Vacancies:</label>
                            <div class="col-sm-1">
                                <input type="number" name="post_number" id="exampleEmail" class="form-control" required value="{{ $vacancy->post_number; }}" >
                            </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Published Date:</label>
                            <div class="col-sm-4">
                                <input type="text" name="published_at" id="published_at" placeholder="" class="form-control" required value="{{ $vacancy->published_at; }}" >
                            </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Deadline:</label>
                            <div class="col-sm-4">
                                <input type="text" name="deadline" id="deadline" placeholder="" class="form-control" required value="{{ $vacancy->deadline; }}" >
                            </div>
                            </div>                            
                          
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Previous File Name:</label>
                            <div class="col-sm-4">
                                <?php echo substr($vacancy->image_name, strpos($vacancy->image_name, "_") + 1);  ?>                                
                            </div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File:<small class="form-text text-muted">Please Pdf or Docx FIle Only.</small></label>
                                <div class="col-sm-10">
                                    <input name="image_name" type="file" accept="application/msword, application/pdf" id="exampleFile" class="form-control-file" >
                                  
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

    @section('datepicker')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/css/nepali.datepicker.v2.2.min.css') }}" />
    <script type="text/javascript" src="{{ asset('public/admin/js/jquery.js') }}"></script> 
    <script type="text/javascript" src="{{ asset('public/admin/js/nepali.datepicker.v2.2.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#published_at,#deadline').nepaliDatePicker({
                npdMonth: true,
                npdYear: true,
                npdYearCount: 10
            });
        });
    </script>
    @endsection
