@extends('admin.layout.main')

@section('title')   
Website Details  
@endsection

@section('content')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-tools text-success">
                    </i>
                </div>
                <div><strong>Website Details</strong>
                    <div class="page-title-subheading">Change Website Details
                    </div>
                </div>
            </div>
            
          </div>
    </div>   
           
        <div class="tab-pane tabs-animation" >
            @if(session('status'))    
            <div class="alert alert-success hide-alert" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Success!</strong> {{ session('status') }}
              </div>
            @endif
             <div class="main-card mb-3 card">
                 
                <div class="card-body">
                    <form action="{{ url('admin/save-detail/'.$detail->id) }}" method="POST">
                        @csrf
                       
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Full Address:</label>
                        <div class="col-sm-4">
            <input type="text" name="address1" placeholder="Address 1" 
            value="<?php if($detail->address1){ echo $detail->address1; } ?>" >
                        </div>
                        </div>

                        {{-- <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Address 3:</label>
                        <div class="col-sm-4">
            <input type="text" name="address3" placeholder="Address 3" 
            value="<?php if($detail->address3){ echo $detail->address3; } ?>" >
                        </div>
                        </div> --}}

                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Phone 1:</label>
                        <div class="col-sm-4">
            <input type="text" name="phone1" placeholder="Phone 1" 
            value="<?php if($detail->phone1){ echo $detail->phone1; } ?>" >
                        </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Phone 2:</label>
                        <div class="col-sm-4">
            <input type="text" name="phone2" placeholder="Phone 2" 
            value="<?php if($detail->phone2){ echo $detail->phone2; } ?>" >
                        </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Mobile:</label>
                        <div class="col-sm-4">
            <input type="text" name="address2" placeholder="Address 2" 
            value="<?php if($detail->address2){ echo $detail->address2; } ?>" >
                        </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Email 1:</label>
                        <div class="col-sm-4">
            <input type="text" name="email1" placeholder="Email 1" 
            value="<?php if($detail->email1){ echo $detail->email1; } ?>" >
                        </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Email 2:</label>
                        <div class="col-sm-4">
            <input type="text" name="email2" placeholder="Email 2" 
            value="<?php if($detail->email2){ echo $detail->email2; } ?>" >
                        </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Extra 1:</label>
                        <div class="col-sm-4">
            <input type="text" name="extra1" placeholder="Extra 1" 
            value="<?php if($detail->extra1){ echo $detail->extra1; } ?>" >
                        </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Extra 2:</label>
                        <div class="col-sm-4">
            <input type="text" name="extra2" placeholder="Extra 2" 
            value="<?php if($detail->extra2){ echo $detail->extra2; } ?>" >
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