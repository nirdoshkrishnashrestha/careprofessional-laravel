<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Str;


class ProcedureController extends Controller
{
    function show_procedure()
    { 
        $procedure = Procedure::orderBy('order')->paginate(15);
        return view('admin.procedure',compact('procedure'));
    }

    function add_procedure(Request $req)
    {
        $procedure = new Procedure;

        $validated = $req->validate([
            'image_name' => 'mimes:webp,jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $procedure->title = $req->title; 
        $procedure->slug = Str::slug($req->title, '-');  
        $procedure->order = $req->order;           
        $procedure->hide = $req->hide;           
        $procedure->content = $req->content;  
        if($req->hasFile('image_name')){          
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $procedure->image_name = $upload_image_name;}

        $procedure->save();
        return redirect()->back()->with('status','Procedure Added Successfully.');
    }
    function edit_procedure($id)
    {
        $procedure = Procedure::find($id);
        return view('admin.procedure_edit',compact('procedure'));
    }

    function save_procedure(Request $req, $id)
    {        
        $procedure = Procedure::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:webp,jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $procedure->title = $req->input('title');
        $procedure->slug = Str::slug($req->input('title'), '-');
        $procedure->content = $req->input('content');
        $procedure->order = $req->input('order');
        $procedure->hide = $req->input('hide');

        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $procedure->image_name = $upload_image_name;
             }
        else
        $procedure->image_name = $procedure->image_name;
             
        $procedure->update();
        return redirect('admin/procedure')->with('status','Procedure Edited Successfully.');
            
    }

    function delete_procedure($id)
    {
        $procedure = Procedure::find($id);
        $procedure->delete();
        return redirect()->back()->with("status","Procedure Deleted Successfully!");
    }
}
