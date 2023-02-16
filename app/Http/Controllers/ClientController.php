<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class ClientController extends Controller
{
   
    
    function show_client()
    { 
        $client = Client::orderBy('id', 'desc')->paginate(15);
        return view('admin.client',compact('client'));
    }

    function add_client(Request $req)
    {  
        $client = new Client;

        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $client->title = $req->title; 
        $client->hide = $req->hide;        
        
        if(strpos($req->url, "http") !== false or $req->url == "#" or $req->url == "")
        $client->url = $req->url;
        else
        $client->url = "https://".$req->url;          
        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $client->image_name = $upload_image_name;
            }
        else
        $client->image_name = $req->image_name;
        
        $client->save();
        return redirect()->back()->with('status','Client Added Successfully.');
    }

    function edit_client($id)
    {
        $client = Client::find($id);
        return view('admin.client_edit',compact('client'));
    }

    function save_client(Request $req, $id)
    {        
        $client = Client::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $client->title = $req->input('title');

        if(strpos($req->url, "http") !== false or $req->url == "#" or $req->url == "")
        $client->url = $req->url;
        else
        $client->url = "https://".$req->url; 

        $client->hide = $req->hide;
        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $client->image_name = $upload_image_name;
             }
        else
        $client->image_name = $client->image_name;
        
             
        $client->update();
        return redirect('admin/client')->with('status','Client Edited Successfully.');
            
    }

    function delete_client($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->back()->with("status","Client Deleted Successfully!");
    }

}
