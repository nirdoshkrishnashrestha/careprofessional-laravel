<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Str;


class ServiceController extends Controller
{
    function show_service()
    { 
        $service = Service::orderBy('order')->paginate(15);
        return view('admin.service',compact('service'));
    }

    function add_service(Request $req)
    {
        $service = new Service;

        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $service->title = $req->title; 
        $service->slug = Str::slug($req->title, '-');  
        $service->order = $req->order;           
        $service->hide = $req->hide;           
        $service->content = $req->content;  
        if($req->hasFile('image_name')){          
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $service->image_name = $upload_image_name;}

        $service->save();
        return redirect()->back()->with('status','Service Added Successfully.');
    }
    function edit_service($id)
    {
        $service = Service::find($id);
        return view('admin.service_edit',compact('service'));
    }

    function save_service(Request $req, $id)
    {        
        $service = Service::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $service->title = $req->input('title');
        $service->slug = Str::slug($req->input('title'), '-');
        $service->content = $req->input('content');
        $service->order = $req->input('order');
        $service->hide = $req->input('hide');

        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $service->image_name = $upload_image_name;
             }
        else
        $service->image_name = $service->image_name;
             
        $service->update();
        return redirect('admin/service')->with('status','Service Edited Successfully.');
            
    }

    function delete_service($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with("status","Service Deleted Successfully!");
    }
}
