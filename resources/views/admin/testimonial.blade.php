    @extends('admin.layout.main')

    @section('title')   
    Testimonial   
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-comment text-success">
                        </i>
                    </div>
                    <div>
                        <strong>Testimonial</strong>
                        <div class="page-title-subheading">Add or Edit Testimonial
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Testimonial List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Add New Testimonial</span>
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
                                <th class="text-center">Created</th>
                                <th class="text-center">Updated</th>
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
                           @foreach ($testimonial as $item)                              
                         
                            <tr>
                                <td class="text-center text-muted">{{ $i }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            
                                            <div class="widget-content-left flex2">
                                                <div class="widget-heading">{{ $item->name; }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">{{ date("Y-m-d", strtotime($item->created_at)) }}</td>
                                <td class="text-center">{{ date("Y-m-d", strtotime($item->updated_at)) }}</td>
                                <td class="text-center">
                                  
                  <img height="50" class="rounded" src="{{ asset('uploads/'.$item->image_name) }}" alt="No Image Found."> 
                                 </td>
        <td class="text-center">
        <form method="POST" action=" {{ url('admin/testimonial/'.$item->id) }} ">
            @csrf
            @method('DELETE')
           <a href="{{ url('admin/testimonial/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a> 
           <a href="{{ url('admin/testimonial/'.$item->id.'/delete') }}" class="btn btn-danger btn-sm">Delete</a>
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
                            {{ $testimonial->links(); }}
                        </div>    
                        {{-- <button class="btn-wide btn btn-success">Pagination</button> --}}
                    </div>
                </div>
               
            </div>

                {{-- This is Edit Section Below --}}
               
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
              <h5 class="card-title">Add a New Testimonial</h5>
                <div class="main-card mb-3 card">
                 
                    <div class="card-body">
                        <form action="{{ url('admin/testimonial') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-4">
                                <input type="text" name="name" id="exampleEmail" placeholder="Enter Name Here" class="form-control" required value="{{ old('name') }}">
                            </div>
                            </div>
                            
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Country:</label>
                                <div class="col-sm-4">
                                    <input type="text" name="country" id="exampleEmail" placeholder="Enter Country Here" class="form-control" required value="{{ old('country') }}">
                                </div>
                                </div>

                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Content:</label>
                                <div class="col-sm-10">
                                    <textarea name="content" id="content" class="form-control" required>{{ old('content') }}</textarea>
                                </div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Image:<small class="form-text text-muted">Please Insert Image Only.</small></label>
                                <div class="col-sm-10">
                                    <input name="image_name" type="file" id="exampleFile" class="form-control-file" accept="image/*">
                                    
                                </div>
                            </div>
                            
                            <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Hide Feature Image:</label>
                                <div class="col-sm-10">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                           <input id="checkbox2" type="checkbox" name="hide" value="yes" class="form-check-input">
                           Check to hide feature image
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
