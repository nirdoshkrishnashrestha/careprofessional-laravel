    @extends('admin.layout.main')

    @section('title')   
    Vacancy   
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
                        <div class="page-title-subheading">View, Create, Edit & Delete Vacancy
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Vacancy List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Add New Vacancy</span>
                            </a>
                        </li>
                    </ul>
                </div>  
              </div>
        </div>       
            
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">  
                @if(session('status'))    
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> {{ session('status') }}
                  </div>
                @endif
              
                @error('image_name')
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sorry!</strong> {{ "Only PDF or DOC Files Are Allowed!" }}
                  </div>
            @enderror        
                <div class="main-card mb-3 card">

                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">S.N.</th>
                                <th>Title</th>
                                <th class="text-center">Publish Date</th>
                                <th class="text-center">Deadline</th>
                                <th class="text-center">No. of Vacancy</th>
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
                           @foreach ($vacancy as $item)                              
                         
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
                                <td class="text-center">{{ $item->published_at }}</td>
                                <td class="text-center">{{ $item->deadline }}</td>
                                <td class="text-center">{{ $item->post_number }}</td>
                                <td class="text-center">
            <a href="{{ url('admin/vacancy/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a> 
            <a href="{{ url('admin/vacancy/'.$item->id.'/delete') }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php  $i++; ?>        
                            @endforeach
                           </tbody>
                        </table>
                    </div>
                    <div class="d-block text-center card-footer">
                        <div class="d-flex justify-content-center">
                            {{ $vacancy->links(); }}
                        </div>    
                        {{-- <button class="btn-wide btn btn-success">Pagination</button> --}}
                    </div>
                </div>
               
            </div>

                {{-- This is Edit Section Below --}}
               
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
              <h5 class="card-title">Add a New Vacancy</h5>
                <div class="main-card mb-3 card">
                 
                    <div class="card-body">
                        <form action="{{ url('admin/vacancy') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                                <input type="text" name="title" id="exampleEmail" placeholder="Enter Title Here" class="form-control" value="{{ old('title') }}" required>
                            </div>
                            </div>                        
                           
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">No. of Vacancies:</label>
                            <div class="col-sm-1">
                                <input type="number" name="post_number" id="exampleEmail" class="form-control" required value="{{ old('post_number') }}" >
                            </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Published Date:</label>
                            <div class="col-sm-4">
                                <input type="text" name="published_at" id="published_at" placeholder="" class="form-control" required value="{{ old('published_at') }}" >
                            </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Deadline:</label>
                            <div class="col-sm-4">
                                <input type="text" name="deadline" id="deadline" placeholder="" class="form-control" required value="{{ old('deadline') }}" >
                            </div>
                            </div>                            
                          
                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File:<small class="form-text text-muted">Please Pdf or Docx FIle Only.</small></label>
                                <div class="col-sm-10">
                                    <input name="image_name" type="file" accept="application/msword, application/pdf" id="exampleFile" class="form-control-file" required>
                                    
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
