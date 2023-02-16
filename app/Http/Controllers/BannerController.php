<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;


class BannerController extends Controller
{
    function show_banner()
    { 
        $banner = Banner::orderBy('order','asc')->paginate(15);
        return view('admin.banner',compact('banner'));
    }

    function add_banner(Request $req)
    {
        $banner = new Banner;

        $validated = $req->validate([
            'image_name' => 'required|mimes:jpg,jpeg,png,gif,webp,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $banner->title = $req->title;  
        $banner->order = $req->order;  
                 
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $banner->image_name = $upload_image_name;

        $banner->save();
        return redirect()->back()->with('status','Banner Image Added Successfully.');
    }
    function edit_banner($id)
    {
        $banner = Banner::find($id);
        return view('admin.banner_edit',compact('banner'));
    }

    function save_banner(Request $req, $id)
    {        
        $banner = Banner::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,webp,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $banner->title = $req->input('title');        
        $banner->order = $req->input('order');        

        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $banner->image_name = $upload_image_name;
             }
        else
        $banner->image_name = $banner->image_name;
             
        $banner->update();
        return redirect('admin/banner')->with('status','Banner Edited Successfully.');
            
    }

    function delete_banner($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->back()->with("status","Banner Deleted Successfully!");
    }
}
