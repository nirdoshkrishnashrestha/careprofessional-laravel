    @extends('admin.layout.main')

    @section('title')   
    Edit News
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-news-paper icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div><strong>News</strong>
                        <div class="page-title-subheading">Edit {{ $news->title; }}
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
                    <form action="{{ url('admin/news/'.$news->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                <input type="text" name="title" id="exampleEmail" value="{{ $news->title }}" class="form-control">
                            </div>
                            </div>                        
                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Excerpt:</label>
                                <div class="col-sm-10">
                                    <textarea name="excerpt" id="excerpt" class="form-control" required>{{ $news->excerpt }}</textarea>
                                </div>
                            </div>

                            <div class="position-relative row form-group"><label for="datepicker" class="col-sm-2 col-form-label">Published Date:</label>
                                <div class="col-sm-4">
                                    <input type="text" name="published_at" id="datepicker" placeholder="Published Date" class="form-control" required value="{{ $news->published_at }} ">
                                </div>
                                </div>
                            
                            <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Content:</label>
                                <div class="col-sm-10">
                  <textarea name="content" id="content" class="form-control">{{ $news->content }}</textarea>
                                </div>
                            </div>
                            <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Image: <small class="form-text text-muted">Please Insert Image Only.</small></label>
                                <div class="col-sm-10">
                                    <input name="image_name" type="file" id="exampleFile" class="form-control-file" accept="image/*">
                                    <br><img height="70px" width="80px" src="{{ asset('uploads/'.$news->image_name) }}" alt="No Previous Image.">
                                </div>
                            </div>
                           
                            <div class="position-relative row form-group">
                                <label for="checkbox2" class="col-sm-2 col-form-label">Hide Feature Image:</label>
                                <div class="col-sm-10">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                 <input id="checkbox2" type="checkbox" class="form-check-input" name="hide" value="yes" @if($news->hide =="yes") checked @endif >Check to hide feature image</label>
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
