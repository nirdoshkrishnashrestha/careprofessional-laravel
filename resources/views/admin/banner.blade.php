    @extends('admin.layout.main')

    @section('title')   
    Banner   
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-photo text-success">
                        </i>
                    </div>
                    <div>
                        <strong>Banner</strong>
                        <div class="page-title-subheading">Add or Edit Banner Images</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Banner List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Add New Banner</span>
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
                                <th class="text-center">Published Date</th>                              
                                <th class="text-center">Order</th>
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
                           @foreach ($banner as $item)                              
                         
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
                               
                                <td class="text-center">
                                    {{ $item->order; }}
                                 </td>
                                <td class="text-center">
                                  
                  <img width="80" class="rounded" src="{{ asset('uploads/'.$item->image_name) }}" alt="No Image Found."> 
                                 </td>
        <td class="text-center">
        <form method="POST" action=" {{ url('admin/banner/'.$item->id) }} ">
            @csrf
            @method('DELETE')
           <a href="{{ url('admin/banner/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a> 
           <a href="{{ url('admin/banner/'.$item->id.'/delete') }}" class="btn btn-danger btn-sm">Delete</a>   
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
                            {{ $banner->links(); }}
                        </div>    
                        {{-- <button class="btn-wide btn btn-success">Pagination</button> --}}
                    </div>
                </div>
               
            </div>

               
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
              <h5 class="card-title">Add a New Banner</h5>
                <div class="main-card mb-3 card">
                 
                    <div class="card-body">
                        <form action="{{ url('admin/banner') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="position-relative row form-group"><label for="title" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                                <input type="text" name="title" id="title" placeholder="Enter Title Here" class="form-control" required value="{{ old('title') }}">
                            </div>
                            </div> 
                            
                            <div class="position-relative row form-group"><label for="order" class="col-sm-2 col-form-label">Order:</label>
                                <div class="col-sm-4">
                                    <input type="text" name="order" id="order" placeholder="Enter Order Here" class="form-control" required value="{{ old('order') }}">
                                </div>
                                </div> 
                            
                            <div class="position-relative row form-group"><label for="file" class="col-sm-2 col-form-label">Image:<small class="form-text text-muted">Please Insert Image Only.</small></label>
                                <div class="col-sm-10">
                                    <input name="image_name" type="file" id="file" class="form-control-file" required accept="image/*">
                                    
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
