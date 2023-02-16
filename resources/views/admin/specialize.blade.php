    @extends('admin.layout.main')

    @section('title')   
    Specialize   
    @endsection

    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-like2 text-success">
                        </i>
                    </div>
                    <div>
                        <strong>Specialized Area</strong>
                        <div class="page-title-subheading">Add or Edit Specialized
                        </div>
                    </div>
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
                                <th class="text-center">Created</th>
                                <th class="text-center">Updated</th>
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
                           @foreach ($specialize as $item)                              
                         
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
                                <td class="text-center">{{ date("Y-m-d", strtotime($item->updated_at)) }}</td>
                               
        <td class="text-center">
        <form method="POST" action=" {{ url('admin/specialize/'.$item->id) }} ">
            @csrf
           <a href="{{ url('admin/specialize/'.$item->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a> 
          
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
                            {{ $specialize->links(); }}
                        </div>    
                        
                    </div>
                </div>
               
            </div>

                {{-- This is Edit Section Below --}}              
           
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
