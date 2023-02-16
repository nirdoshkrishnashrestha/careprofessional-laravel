<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class TestimonialController extends Controller
{   
      
    function show_testimonial()
    { 
        $testimonial = Testimonial::orderBy('id', 'desc')->paginate(15);
        return view('admin.testimonial',compact('testimonial'));
    }

    function add_testimonial(Request $req)
    {  
        $testimonial = new Testimonial;

        $validated = $req->validate([
            'image_name' => 'mimes:webp,jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $testimonial->name = $req->name;            
        $testimonial->country = $req->country;            
        $testimonial->content = $req->content;            
        
        $testimonial->hide = $req->hide;
        if($req->hasFile('image_name')){        
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $testimonial->image_name = $upload_image_name;}
        
        $testimonial->save();
        return redirect()->back()->with('status','Testimonial Added Successfully.');
    }

    function edit_testimonial($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial_edit',compact('testimonial'));
    }

    function save_testimonial(Request $req, $id)
    {        
        $testimonial = Testimonial::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:webp,jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $testimonial->name = $req->name;            
        $testimonial->country = $req->country;            
        $testimonial->content = $req->content; 
        
        $testimonial->hide = $req->hide;
        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $testimonial->image_name = $upload_image_name;
             }
        else
        $testimonial->image_name = $testimonial->image_name;
        
             
        $testimonial->update();
        return redirect('admin/testimonial')->with('status','Testimonial Edited Successfully.');
            
    }

    function delete_testimonial($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back()->with("status","Testimonial Deleted Successfully!");
    }

}
