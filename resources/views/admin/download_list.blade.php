    @extends('admin.layout.main')

    @section('title')   
    Download   
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-cloud-download text-success">
                        </i>
                    </div>
                    <div><strong>Download</strong>
                        <div class="page-title-subheading">View, Create, Edit & Delete Download
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Download List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Add New Download</span>
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
                                <th class="text-center">File Name</th>
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
                           @foreach ($download as $item)                              
                         
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
            <td class="text-center">{{ date("Y-m-d", strtotime($item->created_at)) }}</td>
            <td class="text-center">{{ substr($item->image_name, strpos($item->image_name, "_") + 1); }}</td>
                                <td class="text-center">
            <a href="{{ url('admin/download/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a> 
            <a href="{{ url('admin/download/'.$item->id.'/delete') }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <?php  $i++; ?>        
                            @endforeach
                           </tbody>
                        </table>
                    </div>
                    <div class="d-block text-center card-footer">
                        <div class="d-flex justify-content-center">
                            {{ $download->links(); }}
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
                        <form action="{{ url('admin/download') }}" method="POST" enctype="multipart/form-data" >
                            @csrf                           
                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                                <input type="text" name="title" id="exampleEmail" placeholder="Enter Title Here" class="form-control" value="{{ old('title') }}" required>
                            </div>
                            </div> 
                            
                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Content:</label>
                                <div class="col-sm-10">
                  <textarea name="content" id="content" class="form-control">{{ old('content') }}</textarea>
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


    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/admin/css/nepali.datepicker.v2.2.min.css') }}" />
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
    </script> --}}
    @endsection
