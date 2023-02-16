<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class GalleryController extends Controller
{
    function show_gallery()
    { 
        $gallery = Gallery::orderBy('order', 'asc')->paginate(15);
        return view('admin.gallery',compact('gallery'));
    }

    function add_gallery(Request $req)
    {
        $gallery = new Gallery;

        $validated = $req->validate([
            'image_name' => 'required|mimes:jpg,jpeg,png,gif,webp,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $gallery->title = $req->title;  
        $gallery->order = $req->order;  
                 
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $gallery->image_name = $upload_image_name;

        $gallery->save();
        return redirect()->back()->with('status','Gallery Image Added Successfully.');
    }
    function edit_gallery($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery_edit',compact('gallery'));
    }

    function save_gallery(Request $req, $id)
    {        
        $gallery = Gallery::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,webp,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $gallery->title = $req->input('title');        
        $gallery->order = $req->input('order');        

        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $gallery->image_name = $upload_image_name;
             }
        else
        $gallery->image_name = $gallery->image_name;
             
        $gallery->update();
        return redirect('admin/gallery')->with('status','Post Edited Successfully.');
            
    }

    function delete_gallery($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->back()->with("status","Deleted Successfully!");
    }
}
