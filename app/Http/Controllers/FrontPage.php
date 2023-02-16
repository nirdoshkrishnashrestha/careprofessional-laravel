<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Specialize;
use App\Models\Job;
use Illuminate\Support\Facades\DB;

class FrontPage extends Controller
{
    function show_home()
    {
        $home = Post::orderBy('id', 'asc')->paginate(15);       
        $specialize = Specialize::orderBy('id', 'desc')->paginate(15);
        $jobs = Job::orderBy('id', 'desc')->paginate(6);

        $clients = DB::table('clients')->orderByDesc('id')->limit(10)->get();
        $banners = DB::table('banners')->orderByDesc('id')->limit(5)->get();
        $testimonials = DB::table('testimonials')->orderByDesc('id')->limit(5)->get();
        $news = DB::table('news')->orderByDesc('id')->limit(4)->get();
        return view('front.home',compact('home','banners','specialize','jobs','clients','testimonials','news'));
    }

    function manpower_category($page)
    {
        $selected = DB::table('jobs')->where('category',$page)->orderByDesc('id')->paginate(9);
        $notselected = DB::table('jobs')->whereNotIn('category',[$page])->orderByDesc('id')->paginate(9);
        $cat = DB::table('posts')->where('id','46')->first();

        return view('front.manpower',compact('page','selected','notselected','cat'));
    }
}
