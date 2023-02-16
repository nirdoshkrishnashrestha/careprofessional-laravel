@extends('admin.layout.main')

@section('title')   
Account Setting  
@endsection

@section('content')

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-config text-success">
                    </i>
                </div>
                <div><strong>Account Setting</strong>
                    <div class="page-title-subheading">Change Account Setting
                    </div>
                </div>
            </div>
            
          </div>
    </div>   
           
        <div class="tab-pane tabs-animation" >
            @error('new_pass_one')
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ $message }}
              </div>
            @enderror

            @if(Session::has('succcess_setting'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ session('succcess_setting') }}
              </div>
            @endif

            @if(Session::has('fail_setting'))
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 {{ session('fail_setting')}}
              </div>
            @endif
            <div class="main-card mb-3 card">
               
                <div class="card-body">
                    <form action="{{ url('admin/account-setting/'.$user->id) }}" method="POST">
                        @csrf
                       
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Full Name:</label>
                        <div class="col-sm-4">
                            <input type="text" name="name" id="exampleEmail" placeholder="Full Name" class="form-control" value="{{ $user->name }}" required>
                        </div>
                        </div>
                        
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Username:</label>
                        <div class="col-sm-4">
                            <input type="text" name="user" id="exampleEmail" placeholder="Username" class="form-control" value="{{ $user->user }}" required>
                        </div>
                        </div>                      
                        
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Old Password:</label>
                        <div class="col-sm-4">
                            <input type="password" name="pass" id="exampleEmail" placeholder="Enter Old Password" class="form-control" value="" required>
                        </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Do you want to change password?</label>
                            <div class="col-sm-4">
                                <select class="mb-2 form-control" id="change" name="change">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">New Password:</label>
                        <div class="col-sm-4">
                            <input type="password" name="new_pass_one" id="new_pass_one" placeholder="Enter New Password" class="form-control" value="" required>
                        </div>
                        </div> 

                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Confirm Password:</label>
                        <div class="col-sm-4">
                            <input type="password" name="new_pass_one_confirmation" id="new_pass_one_confirmation" placeholder="Confirm New Password" class="form-control" value="" required>
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

<script type="text/javascript">
  
  $( "#change" ).change(function() 
  {
      var change = document.getElementById('change').value;
      if(change == "No")
      {
        $("#new_pass_one,#new_pass_one_confirmation").attr("disabled", "disabled"); 
        $("#new_pass_one_confirmation").attr("disabled", "disabled");       
      }
      else
      {
        $("#new_pass_one").removeAttr('disabled');    
        $("#new_pass_one_confirmation").removeAttr('disabled');   
      }    
 });
    
</script>

@endsection