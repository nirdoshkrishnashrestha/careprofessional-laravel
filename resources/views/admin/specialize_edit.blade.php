    @extends('admin.layout.main')

    @section('title')   
    Edit Specialized
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-like2 icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div><strong>Specialize</strong>
                        <div class="page-title-subheading">Edit {{ $specialize->title; }}
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
                    <form action="{{ url('admin/specialize/'.$specialize->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                <input type="text" name="title" id="exampleEmail" value="{{ $specialize->title }}" class="form-control" disabled>
                            </div>
                            </div>  
                           
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">{{ $specialize->title }} 1:</label>
                                <div class="col-sm-4">
                    <input type="text" name="construction1" id="exampleEmail" value="{{ $specialize->construction1 }}" class="form-control">
                                </div>
                                </div> 

                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">{{ $specialize->title }} 2:</label>
                                    <div class="col-sm-4">
                        <input type="text" name="construction2" id="exampleEmail" value="{{ $specialize->construction2 }}" class="form-control">
                                    </div>
                                    </div>

                                    <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">{{ $specialize->title }} 3:</label>
                                        <div class="col-sm-4">
                            <input type="text" name="construction3" id="exampleEmail" value="{{ $specialize->construction3 }}" class="form-control">
                                        </div>
                                        </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">{{ $specialize->title }} 4:</label>
                                <div class="col-sm-4">
                    <input type="text" name="construction4" id="exampleEmail" value="{{ $specialize->construction4 }}" class="form-control">
                                </div>
                                </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">{{ $specialize->title }} 5:</label>
                                <div class="col-sm-4">
                    <input type="text" name="construction5" id="exampleEmail" value="{{ $specialize->construction5 }}" class="form-control">
                                </div>
                                </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">{{ $specialize->title }} 6:</label>
                                <div class="col-sm-4">
                    <input type="text" name="construction6" id="exampleEmail" value="{{ $specialize->construction6 }}" class="form-control">
                                </div>
                                </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">{{ $specialize->title }} 7:</label>
                                <div class="col-sm-4">
                    <input type="text" name="construction7" id="exampleEmail" value="{{ $specialize->construction7 }}" class="form-control">
                                </div>
                                </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">{{ $specialize->title }} 8:</label>
                                <div class="col-sm-4">
                    <input type="text" name="construction8" id="exampleEmail" value="{{ $specialize->construction8 }}" class="form-control">
                                </div>
                                </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">{{ $specialize->title }} 9:</label>
                                <div class="col-sm-4">
                    <input type="text" name="construction9" id="exampleEmail" value="{{ $specialize->construction9 }}" class="form-control">
                                </div>
                                </div>

                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">{{ $specialize->title }} 10:</label>
                                <div class="col-sm-4">
                    <input type="text" name="construction10" id="exampleEmail" value="{{ $specialize->construction10 }}" class="form-control">
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
