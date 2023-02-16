<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllPage extends Controller
{
//////////// FOR ABOUT ////////////

    function show_page()
    {
        $abouts = DB::table('abouts')->where('slug','about-us')->first();
        return view('front.about',compact('abouts'));
    }
    
     function show_member()
    {
        return view('front.members');
    }

function show_legal()
    {
        $legal_doc = DB::table('legals')->orderBy('order')->paginate('12');
        return view('front.legal-document',compact('legal_doc'));
    }
    
    function show_chart()
    {
       $org = DB::table('abouts')->where('id',6)->first();
       return view('front.organization_chart',compact('org'));
    }
       

//////////// ABOUT ENDS ////////////   
    
    
    function show_service($page)
    {
        $service = DB::table('services')->where('slug',$page)->first();
        return view('front.service',compact('service'));
    }

    function show_procedure($page)
    {
        $procedure = DB::table('procedures')->where('slug',$page)->first();
        return view('front.procedure',compact('procedure'));
    }

    function show_group($page)
    {
        $group = DB::table('groups')->where('slug',$page)->first();
        return view('front.group',compact('group'));
    }

    function show_notice()
    {
        $notice = DB::table('news')->orderByDesc('id')->paginate(10);
        return view('front.notice',compact('notice'));
    }

    function show_notice_detail($page)
    {
        $notice_detail = DB::table('news')->where('slug',$page)->get();
        return view('front.notice_detail',compact('notice_detail'));
    }

    function show_gallery()
    {
        $gallery = DB::table('galleries')->orderBy('order')->get();
        return view('front.gallery',compact('gallery'));
    }

    function show_contact()
    {
        $contact = DB::table('details')->get();
        return view('front.contact',compact('contact'));
    }
    function show_jobs()
    {
        $jobs = DB::table('jobs')->orderByDesc('id')->paginate('12');
        return view('front.jobs',compact('jobs'));
    }
    function show_jobs_details($id)
    {
        $jobs_details = DB::table('jobs')->where('id',$id)->first();
        return view('front.jobs_details',compact('jobs_details'));
    }
    
  
}

