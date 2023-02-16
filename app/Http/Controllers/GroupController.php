<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Str;


class GroupController extends Controller
{
    function show_group()
    { 
        $group = Group::orderBy('order')->paginate(15);
        return view('admin.group',compact('group'));
    }

    function add_group(Request $req)
    {
        $group = new Group;

        $validated = $req->validate([
            'image_name' => 'mimes:webp,jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $group->title = $req->title; 
        $group->slug = Str::slug($req->title, '-');  
        $group->order = $req->order;           
        $group->hide = $req->hide;           
        $group->content = $req->content;  
        if($req->hasFile('image_name')){          
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $group->image_name = $upload_image_name;}

        $group->save();
        return redirect()->back()->with('status','Group Added Successfully.');
    }
    function edit_group($id)
    {
        $group = Group::find($id);
        return view('admin.group_edit',compact('group'));
    }

    function save_group(Request $req, $id)
    {        
        $group = Group::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:webp,jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $group->title = $req->input('title');
        $group->slug = Str::slug($req->input('title'), '-');
        $group->content = $req->input('content');
        $group->order = $req->input('order');
        $group->hide = $req->input('hide');

        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $group->image_name = $upload_image_name;
             }
        else
        $group->image_name = $group->image_name;
             
        $group->update();
        return redirect('admin/group')->with('status','Group Edited Successfully.');
            
    }

    function delete_group($id)
    {
        $group = Group::find($id);
        $group->delete();
        return redirect()->back()->with("status","Group Deleted Successfully!");
    }
}
