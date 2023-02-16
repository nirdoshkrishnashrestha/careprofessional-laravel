<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class JobController extends Controller
{
    
    function show_job()
    { 
        $job = Job::orderBy('id', 'desc')->paginate(15);
        return view('admin.job',compact('job'));
    }

    function add_job(Request $req)
    {  
        $job = new Job;

        $validated = $req->validate([
            'image_name' => 'mimes:webp,jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $job->title = $req->title;            
        $job->category = $req->category;            
        $job->company_name = $req->company_name;            
        $job->country = $req->country;            
        $job->salary = $req->salary;            
        $job->position = $req->position;            
        $job->last_date = $req->last_date;            
        $job->content = $req->content;
        $job->duration = $req->duration;
        $job->probation_period = $req->probation_period;
        $job->working_hours = $req->working_hours;
        $job->resident_fee = $req->resident_fee;
        $job->air_ticket = $req->air_ticket;
        $job->accommodation = $req->accommodation;
        $job->local_transportation = $req->local_transportation;
        $job->uniform = $req->uniform;
        $job->medical_insurance = $req->medical_insurance;
        $job->food = $req->food;
        $job->death_case = $req->death_case;
        $job->visa_fees = $req->visa_fees;
         $job->hide = $req->hide;     
        if($req->hasFile('image_name')) {   
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $job->image_name = $upload_image_name;}
        
        $job->save();
        return redirect()->back()->with('status','Job Added Successfully.');
    }

    function edit_job($id)
    {
        $job = Job::find($id);
        return view('admin.job_edit',compact('job'));
    }

    function save_job(Request $req, $id)
    {        
        $job = Job::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:webp,jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $job->title = $req->input('title');
        $job->category = $req->input('category');
        $job->company_name = $req->input('company_name');
        $job->content = $req->input('content');
        $job->hide = $req->hide;

        $job->duration = $req->duration;
        $job->probation_period = $req->probation_period;
        $job->working_hours = $req->working_hours;
        $job->resident_fee = $req->resident_fee;
        $job->air_ticket = $req->air_ticket;
        $job->accommodation = $req->accommodation;
        $job->local_transportation = $req->local_transportation;
        $job->uniform = $req->uniform;
        $job->medical_insurance = $req->medical_insurance;
        $job->food = $req->food;
        $job->death_case = $req->death_case;
        $job->visa_fees = $req->visa_fees;

        $job->salary = $req->salary;
        $job->country = $req->country;
        $job->position = $req->position;
        $job->last_date = $req->last_date;
        if($req->hasFile('image_name')){
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $job->image_name = $upload_image_name;}             
        else
        $job->image_name = $job->image_name;        
             
        $job->update();
        return redirect('admin/job')->with('status','Job Edited Successfully.');
            
    }

    function delete_job($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect()->back()->with("status","Job Deleted Successfully!");
    }

}
