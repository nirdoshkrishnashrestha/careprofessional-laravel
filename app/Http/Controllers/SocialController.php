<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Social;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Facade\FlareClient\Http\Response;

class SocialController extends Controller
{
    function show_detail()
    { 
        $social = DB::table('socials')->orderBy('id', 'desc')->first();
        return view('admin.social_media',compact('social'));
    }

    function save_detail(Request $req, $id)
    {        
        $social = Social::find($id);      
        
        if(strpos($req->input('facebook'), "http") !== false or $req->input('facebook') == "#" or $req->input('facebook') == "")
        $social->facebook = $req->input('facebook');
        else
        $social->facebook = "https://".$req->input('facebook');

        if(strpos($req->input('twitter'), "http") !== false or $req->input('twitter') == "#" or $req->input('twitter') == "")
        $social->twitter = $req->input('twitter');
        else
        $social->twitter = "https://".$req->input('twitter');

        if(strpos($req->input('instagram'), "http") !== false or $req->input('instagram') == "#" or $req->input('instagram') == "")
        $social->instagram = $req->input('instagram');
        else
        $social->instagram = "https://".$req->input('instagram');

        if(strpos($req->input('linkedin'), "http") !== false or $req->input('linkedin') == "#" or $req->input('linkedin') == "")
        $social->linkedin = $req->input('linkedin');
        else
        $social->linkedin = "https://".$req->input('linkedin');

        if(strpos($req->input('youtube'), "http") !== false or $req->input('youtube') == "#" or $req->input('youtube') == "")
        $social->youtube = $req->input('youtube');
        else
        $social->youtube = "https://".$req->input('youtube');
      
        if(strpos($req->input('extra2'), "extra2") !== false or $req->input('extra2') == "#" or $req->input('extra2') == "")
        $social->extra2 = $req->input('extra2');
        else
        $social->extra2 = "https://".$req->input('extra2');

        if(strpos($req->input('extra1'), "extra1") !== false or $req->input('extra1') == "#" or $req->input('extra1') == "")
        $social->extra1 = $req->input('extra1');
        else
        $social->extra1 = "https://".$req->input('extra1');
                          
        $social->update();
        return redirect('admin/social-media')->with('status','Social Media Edited Successfully.');
            
    }
}
