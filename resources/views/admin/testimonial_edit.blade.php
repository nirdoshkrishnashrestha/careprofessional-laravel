    @extends('admin.layout.main')

    @section('title')   
    Edit Testimonial
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-comment icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div><strong>Testimonial</strong>
                        <div class="page-title-subheading">Edit {{ $testimonial->title; }}
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
                    <form action="{{ url('admin/testimonial/'.$testimonial->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-4">
                <input type="text" name="name" id="exampleEmail" value="{{ $testimonial->name }}" class="form-control">
                            </div>
                            </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Country:</label>
                                <div class="col-sm-4">
                    <input type="text" name="country" id="exampleEmail" value="{{ $testimonial->country }}" class="form-control">
                                </div>
                                </div> 

                                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Content:</label>
                                    <div class="col-sm-10">
                                        <textarea name="content" id="content" class="form-control" required>{{ $testimonial->content }}</textarea>
                                    </div>
                                </div>

                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Image: <small class="form-text text-muted">Please Insert Image Only.</small></label>
                                <div class="col-sm-10">
                                    <input name="image_name" type="file" id="exampleFile" class="form-control-file" accept="image/*">
                                    <br><img height="70px" width="80px" src="{{ asset('uploads/'.$testimonial->image_name) }}" alt="No Previous Image.">
                                </div>
                            </div>
                           
                            <div class="position-relative row form-group">
                                <label for="checkbox2" class="col-sm-2 col-form-label">Hide Image:</label>
                                <div class="col-sm-10">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                 <input id="checkbox2" type="checkbox" class="form-check-input" name="hide" value="yes" @if($testimonial->hide == "yes") checked @endif >Check to hide image</label>
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
