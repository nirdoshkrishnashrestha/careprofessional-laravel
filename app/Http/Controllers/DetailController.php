<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Facade\FlareClient\Http\Response;

class DetailController extends Controller
{
    function show_detail()
    {
        $detail = DB::table('details') ->orderBy('id', 'desc')->first();  
        return view('admin/detail',compact('detail'));
    }

    function save_detail(Request $req, $id)
    {        
        $detail = Detail::find($id);      
        
        $detail->address1 = $req->input('address1');
        $detail->address2 = $req->input('address2');
        $detail->address3 = $req->input('address3');
        $detail->phone1 = $req->input('phone1');
        $detail->phone2 = $req->input('phone2');
        $detail->email1 = $req->input('email1');
        $detail->email2 = $req->input('email2');
        $detail->extra1 = $req->input('extra1');
        $detail->extra2 = $req->input('extra2');
                  
        $detail->update();
        return redirect('admin/website-detail')->with('status','Office Details Edited Successfully.');
            
    }
}
