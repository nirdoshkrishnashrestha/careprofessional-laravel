    @extends('admin.layout.main')

    @section('title')   
    Edit Legal Document
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-file icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div><strong>Legal Document</strong>
                        <div class="page-title-subheading">Edit {{ $legal_document->title; }}
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
                    <form action="{{ url('admin/legal_document/'.$legal_document->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                <input type="text" name="title" id="exampleEmail" value="{{ $legal_document->title }}" class="form-control">
                            </div>
                            </div>  
                            
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Order:</label>
                                <div class="col-sm-4">
                                    <input type="number" name="order" id="exampleEmail" placeholder="Enter Order Here" class="form-control" required value="{{ $legal_document->order }}">
                                </div>
                                </div>
                                                     
                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Image: <small class="form-text text-muted">Please Insert Image Only.</small></label>
                                <div class="col-sm-10">
                                    <input name="image_name" type="file" id="exampleFile" class="form-control-file" accept="image/*">
                                    <br><img height="70px" width="80px" src="{{ asset('uploads/'.$legal_document->image_name) }}" alt="No Previous Image.">
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
