<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class VacancyController extends Controller
{
    function show_vacancy()
    {
        $vacancy = Vacancy::orderBy('id', 'desc')->paginate(15);
        return view('admin.vacancy_list',compact('vacancy'));
    }

    function add_vacancy(Request $req)
    {
        $vacancy = new Vacancy;

        $validated = $req->validate([
            'image_name' => 'required|mimes:pdf,doc,docx,PDF,DOC,DOCS'          
        ]);

        $vacancy->title = $req->title;    
        $vacancy->post_number = $req->post_number;            
        $vacancy->published_at = $req->published_at;  
        $vacancy->deadline = $req->deadline;

        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);    
        $vacancy->image_name = $upload_image_name;

        $vacancy->save();
        return redirect()->back()->with('status','Vacancy Added Successfully.');
    }

    function edit_vacancy($id)
    {
        $vacancy = Vacancy::find($id);
        return view('admin.vacancy_edit', compact('vacancy'));
    }

    function delete_vacancy($id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->delete();
        return redirect()->back()->with("status","Deleted Successfully!");
    }

    function save_vacancy(Request $req,$id)
    {
        $vacancy = Vacancy::find($id);
        
        $validated = $req->validate([
            'image_name' => 'mimes:pdf,doc,docx,PDF,DOC,DOCS'          
        ]);

        $vacancy->title = $req->input('title');
        $vacancy->post_number = $req->input('post_number');
        $vacancy->published_at = $req->input('published_at');       
        $vacancy->deadline = $req->input('deadline'); 

        if($req->hasFile('image_name'))
            {
        $upload_image_name = time().'_'.$req->image_name->getClientOriginalName();
        $req->image_name->move('uploads', $upload_image_name);
        $vacancy->image_name = $upload_image_name;
             }
        else
        $vacancy->image_name = $vacancy->image_name;
             
        $vacancy->update();
        return redirect('admin/vacancy')->with('status','Vacancy Edited Successfully.');
    }
}
