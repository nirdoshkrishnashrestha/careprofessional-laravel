<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Legal;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class LegalController extends Controller
{
    function show_legal_document()
    { 
        $legal_document = Legal::orderBy('order', 'asc')->paginate(15);
        return view('admin.legal_document',compact('legal_document'));
    }

    function add_legal_document(Request $req)
    {
        $legal_document = new Legal;

        $validated = $req->validate([
            'image_name' => 'required|mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $legal_document->title = $req->title;  
        $legal_document->order = $req->order;  
                 
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $legal_document->image_name = $upload_image_name;

        $legal_document->save();
        return redirect()->back()->with('status','Document Added Successfully.');
    }
    function edit_legal_document($id)
    {
        $legal_document = Legal::find($id);
        return view('admin.legal_document_edit',compact('legal_document'));
    }

    function save_legal_document(Request $req, $id)
    {        
        $legal_document = Legal::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $legal_document->title = $req->input('title');        
        $legal_document->order = $req->input('order');        

        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $legal_document->image_name = $upload_image_name;
             }
        else
        $legal_document->image_name = $legal_document->image_name;
             
        $legal_document->update();
        return redirect('admin/legal_document')->with('status','Document Edited Successfully.');
            
    }

    function delete_legal_document($id)
    {
        $legal_document = Legal::find($id);
        $legal_document->delete();
        return redirect()->back()->with("status","Deleted Successfully!");
    }
}
