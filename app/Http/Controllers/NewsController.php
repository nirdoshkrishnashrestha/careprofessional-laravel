<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Str;


class NewsController extends Controller
{
    function show_news()
    { 
        $news = News::orderBy('id')->paginate(15);
        return view('admin.news',compact('news'));
    }

    function add_news(Request $req)
    {
        $news = new News;

        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $news->title = $req->title;  
        $news->published_at = $req->published_at; 
        $news->excerpt = $req->excerpt;  
        $news->slug = Str::slug($req->title, '-');         
        $news->content = $req->content; 
        $news->hide = $req->hide; 
        if($news->image_name != NULL){           
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $news->image_name = $upload_image_name;}

        $news->save();
        return redirect()->back()->with('status','News Added Successfully.');
    }
    function edit_news($id)
    {
        $news = News::find($id);
        return view('admin.news_edit',compact('news'));
    }

    function save_news(Request $req, $id)
    {        
        $news = News::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF'          
        ]);

        $news->title = $req->input('title');
        $news->content = $req->input('content');
		$news->excerpt = $req->input('excerpt');
        $news->slug = Str::slug($req->input('title'), '-');
        $news->published_at = $req->published_at;
        $news->hide = $req->hide;
        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $news->image_name = $upload_image_name;
             }
        else
        $news->image_name = $news->image_name;
             
        $news->update();
        return redirect('admin/news')->with('status','News Edited Successfully.');
            
    }

    function delete_news($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->back()->with("status","News Deleted Successfully!");
    }
}
