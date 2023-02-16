<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialize;

class SpecializeController extends Controller
{
    
    function show_specialize()
    {
        $specialize = Specialize::orderBy('id', 'asc')->paginate(15);
        return view('admin.specialize',compact('specialize'));
    }

    function edit_specialize($id)
    {
        $specialize = Specialize::find($id);
        return view('admin.specialize_edit',compact('specialize'));
    }

    function save_specialize(Request $req, $id)
    {        
        $specialize = Specialize::find($id);     
      
        $specialize->construction1 = $req->input('construction1');
        $specialize->construction2 = $req->input('construction2');
        $specialize->construction3 = $req->input('construction3');
        $specialize->construction4 = $req->input('construction4');
        $specialize->construction5 = $req->input('construction5');
        $specialize->construction6 = $req->input('construction6');
        $specialize->construction7 = $req->input('construction7');
        $specialize->construction8 = $req->input('construction8');
        $specialize->construction9 = $req->input('construction9');
        $specialize->construction10 = $req->input('construction10');
                   
        $specialize->update();
        return redirect('admin/specialize')->with('status','Edited Successfully.');
            
    }

   }
