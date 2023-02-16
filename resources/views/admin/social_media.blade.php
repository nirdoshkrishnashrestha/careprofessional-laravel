@extends('admin.layout.main')

@section('title')   
Socail Media 
@endsection

@section('content')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-network text-success">
                    </i>
                </div>
                <div><strong>Socail Media</strong>
                    <div class="page-title-subheading">Socail Media URL
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
                    <form action="{{ url('admin/save-social/'.$social->id) }}" method="POST">
                        @csrf
                       
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Facebook URL:</label>
                        <div class="col-sm-4">
            <input type="text" name="facebook" value="<?php if($social->facebook){ echo $social->facebook; } ?>" >
                        </div>
                        </div> 

                        <div class="position-relative row form-group">
        <label for="exampleEmail" class="col-sm-2 col-form-label">Twitter URL:</label>
                        <div class="col-sm-4">
            <input type="text" name="twitter" placeholder="Twitter URL" 
            value="<?php if($social->twitter){ echo $social->twitter; } ?>" >
                        </div>
                        </div>                        

                    <div class="position-relative row form-group">
                    <label for="exampleEmail" class="col-sm-2 col-form-label">Instagram URL:</label>
                    <div class="col-sm-4">
                    <input type="text" name="instagram" placeholder="Instagram URL" 
                    value="<?php if($social->instagram){ echo $social->instagram; } ?>" >
                    </div>
                    </div> 

                    <div class="position-relative row form-group">
                    <label for="exampleEmail" class="col-sm-2 col-form-label">Linkedin URL:</label>
                    <div class="col-sm-4">
                    <input type="text" name="linkedin" placeholder="linkedin URL" 
                    value="<?php if($social->linkedin){ echo $social->linkedin; } ?>" >
                    </div>
                    </div> 

                    <div class="position-relative row form-group">
                    <label for="exampleEmail" class="col-sm-2 col-form-label">Youtube URL:</label>
                    <div class="col-sm-4">
                    <input type="text" name="youtube" placeholder="Youtube URL" 
                    value="<?php if($social->youtube){ echo $social->youtube; } ?>" >
                    </div>
                    </div> 

                    <div class="position-relative row form-group">
                    <label for="exampleEmail" class="col-sm-2 col-form-label">Extra 1 URL:</label>
                    <div class="col-sm-4">
                    <input type="text" name="extra1" placeholder="Extra 1 URL" 
                    value="<?php if($social->extra1){ echo $social->extra1; } ?>" >
                    </div>
                    </div> 

                    <div class="position-relative row form-group">
                    <label for="exampleEmail" class="col-sm-2 col-form-label">Extra 2 URL:</label>
                    <div class="col-sm-4">
                    <input type="text" name="extra1" placeholder="Extra 2 URL" 
                    value="<?php if($social->extra1){ echo $social->extra1; } ?>" >
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