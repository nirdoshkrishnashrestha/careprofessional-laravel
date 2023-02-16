<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\About;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;


class AboutController extends Controller
{
    function show_about()
    { 
        $about = About::orderBy('order', 'asc')->paginate(15);
        return view('admin.about',compact('about'));
    }

    function add_about(Request $req)
    {  
        $about = new About;

        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $about->title = $req->title;            
        $about->hide = $req->hide;            
        $about->order = $req->order;            
        $about->content = $req->content;       
        if($req->hasFile('image_name')){
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $about->image_name = $upload_image_name;}

        $about->slug = Str::slug($req->title, '-');

        $about->save();
        return redirect()->back()->with('status','Page Added Successfully.');
    }

    function edit_about($id)
    {
        $about = About::find($id);
        return view('admin.about_edit',compact('about'));
    }

    function save_about(Request $req, $id)
    {        
        $about = About::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $about->title = $req->input('title');
        $about->slug = Str::slug($req->input('title'), '-');
        $about->content = $req->input('content');
        $about->hide = $req->input('hide');
        $about->order = $req->input('order');

        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $about->image_name = $upload_image_name;
             }
        else
        $about->image_name = $about->image_name;
             
        $about->update();
        return redirect('admin/about')->with('status','Page Edited Successfully.');
            
    }

    function delete_about($id)
    {
        $about = About::find($id);
        $about->delete();
        return redirect()->back()->with("status","Page Deleted Successfully!");
    }
}
