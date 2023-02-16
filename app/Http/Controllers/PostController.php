<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    
    public function index()
    {
        // $post = Post::orderBy('id', 'desc')->get();
        $post = Post::orderBy('id', 'asc')->paginate(15);
        return view('admin.post',compact('post'));
    }

    
    public function create()
    {
       
    }

    
    public function store(Request $req)
    {
        $post = new Post;

        $validated = $req->validate([
            'image_name' => 'mimes:png,jpg,jpeg,gif,PNG,JPG,JPEG,GIF'          
        ]);

        if($req->hasFile('image_name')){
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);        
        }
        else
        $upload_image_name = "Noimage";
       
        $post->title = $req->input('title');       
        $post->content = $req->input('content');
        $post->hide = $req->input('hide');
        $post->image_name = $upload_image_name;
        $post->save();
        return redirect()->back()->with('status','Post Added Successfully.');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post_edit',compact('post'));
    }

    
    public function update(Request $req, $id)
    {
        $post = Post::find($id);

        $validated = $req->validate([
            'image_name' => 'mimes:png,jpg,jpeg,gif,PNG,JPG,JPEG,GIF'          
        ]);

        if($req->hasFile('image_name')){
            $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
            $req->image_name->move('uploads', $upload_image_name);        
        }
            else
            $upload_image_name = $post->image_name;
       
        $post->title = $req->input('title');        
        $post->content = $req->input('content');
        $post->hide = $req->input('hide');
        $post->image_name = $upload_image_name;
        $post->update();
        return redirect('admin/post')->with('status','Post Updated Successfully.');
    }

   
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/post')->with("status","Deleted Successfully!");
    }
    
}
