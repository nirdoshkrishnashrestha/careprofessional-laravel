<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Download;

class DownloadController extends Controller
{
   function show_download()
   {
       $download = download::orderBy('id', 'desc')->paginate(15);
       return view('admin.download_list',compact('download'));
   }

   function add_download(Request $req)
   {
       $download = new Download;

       $validated = $req->validate([
           'image_name' => 'mimes:pdf,doc,docx,PDF,DOC,DOCS'
       ]);

       $upload_file = time().'_'.$req->image_name->getClientOriginalName();
       $req->image_name->move('uploads', $upload_file);

       $download->image_name = $upload_file;  
       $download->title = $req->title;
       $download->content = $req->content;
       $download->save();

       return redirect('admin/download')->with('status','Download Added Successfully');
   }

   function edit_download($id)
   {
       $download = Download::find($id);
       return view('admin.download_edit',compact('download'));
   }

   function save_download(Request $req, $id)
   {
      $download = Download::find($id);

      $validated = $req->validate([
        'image_name' => 'mimes:pdf,doc,docx,PDF,DOC,DOCS'          
      ]);

      $download->title = $req->input('title');
      $download->content = $req->input('content');

      if($req->hasFile('image_name'))
      {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $download->image_name = $upload_image_name;
      }
    else
        $download->image_name = $download->image_name;

        $download->update();
        return redirect('admin/download')->with('status','Download Edited Successfully.');
       
   }

   function delete_download($id)
   {
       $download = Download::find($id);
       
       $download->delete();
       return redirect('admin/download')->with('status','Download Edited Successfully.');
      

   }

   
}
