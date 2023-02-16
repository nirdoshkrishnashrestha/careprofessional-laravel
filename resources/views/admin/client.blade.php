    @extends('admin.layout.main')

    @section('title')   
    Client   
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
                    <div>
                        <strong>Client</strong>
                        <div class="page-title-subheading">Add or Edit Client
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Client List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Add New Client</span>
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
                                <th>Name</th>
                                <th class="text-center">URL</th>                              
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
                           @foreach ($client as $item)                              
                         
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
                                <td class="text-center">{{ $item->url }}</td>
                               
                                <td class="text-center">
                                  
                  <img width="80" class="rounded" src="{{ asset('uploads/'.$item->image_name) }}" alt="No Image Found."> 
                                 </td>
        <td class="text-center">
        <form method="POST" action=" {{ url('admin/client/'.$item->id) }} ">
            @csrf
            @method('DELETE')
           <a href="{{ url('admin/client/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a> 
           <a href="{{ url('admin/client/'.$item->id.'/delete') }}" class="btn btn-danger btn-sm">Delete</a>   
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
                            {{ $client->links(); }}
                        </div>    
                        {{-- <button class="btn-wide btn btn-success">Pagination</button> --}}
                    </div>
                </div>
               
            </div>
               
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
              <h5 class="card-title">Add a New Client</h5>
                <div class="main-card mb-3 card">
                 
                    <div class="card-body">
                        <form action="{{ url('admin/client') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Client Name:</label>
                            <div class="col-sm-4">
                                <input type="text" name="title" id="exampleEmail" placeholder="Enter Client Name Here" class="form-control" required value="{{ old('title') }}">
                            </div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Url:</label>
                                <div class="col-sm-4">
                                    <input type="text" name="url" id="exampleEmail" placeholder="Enter Url Here" class="form-control" required value="{{ old('url') }}">
                                </div>
                                </div>
  
                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Image:<small class="form-text text-muted">Please Insert Image Only.</small></label>
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
    // '/ckfinder/ckfinder.html',
	filebrowserUploadMethod: 'form'
} );
    </script>
    
        @endsection
