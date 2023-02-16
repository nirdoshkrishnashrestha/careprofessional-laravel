<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\AccountSetting as Settings; /// Because Model name is same as Controller name

class AccountSetting extends Controller
{
    function account_setting()
    {
       $user = DB::table('admin_logins') ->orderBy('id', 'desc')->first();  
       return view('admin/account_setting',compact('user'));     
    }

    function save_setting(Request $req, $id)
    {
        $user = Settings::find($id);

       if($req->change == "Yes") // If use wants to change the password
    {
        $req->validate
        ([
            'user' => 'required',
            'pass' => 'required',
            'new_pass_one' => 'required|confirmed|min:5|different:pass',
            'new_pass_two' => 'min:5'
         ],
         [   
            'new_pass_one.min' => 'Please Provide Long Password.',
            'new_pass_one.different' => 'New Password Should be Different With Old Password',
            'new_pass_one.confirmed' => 'New Password Should be Same as Confirmed Password.'
        ]);
    }

       
        if (Hash::check($req->pass, $user->pass))
        {
        if($req->change == "Yes"){
            
            $user->fill([
                'pass' => Hash::make($req->new_pass_one),
                'name' => $req->name,  
                'user' => $req->user              
             ])->save();
        } 
        else{
           
            $user->fill([               
                'name' => $req->name,  
                'user' => $req->user              
             ])->save();

        }
             $req->session()->forget('fail_setting');
             $user = DB::table('admin_logins') ->orderBy('id', 'desc')->first();  
             $req->session()->flash('succcess_setting', 'Updated Successfully !');
             return view('admin/account_setting',compact('user')); 
        }   
        else
        {
            $req->session()->forget('succcess_setting');
            $user = DB::table('admin_logins') ->orderBy('id', 'desc')->first();  
            $req->session()->flash('fail_setting','Password Do not Match !');
            return view('admin/account_setting',compact('user'));
        }
            
       
        
    }
}
