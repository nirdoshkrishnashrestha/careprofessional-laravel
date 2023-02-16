<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserLogin extends Controller
{
   function login(Request $req)
   {
      $req->validate([
         'user' => 'required',
         'pass' => 'required'
      ]);
      
      $login = new AdminLogin; /// creating object of "AdminLogin" model
      $check_user = DB::table('admin_logins')->where('user', $req->user)->first();
      // We can use as below
      // $check_user = $login->where('user', 'admin')->first();

      if($check_user)
      {
       
         if(Hash::check($req->pass,$check_user->pass))
         {
            $req->session()->put('username',$req->user);
            return redirect('admin/dashboard');
         }
         else{
            return back()->with('fail','Wrong Password');
         }
        
      }
      else
      {
         return back()->with('fail','No Account Found');
      }
      // Note: THIS IS FOR LOGIN INPUT
      // $user = $req->input('user');
      // $pass = $req->input('pass');
      // $login->user = $user;
      // $login->pass =  Hash::make($pass);     
      // $login->name = "my name";
      // $query = $login->save();

      //$req->session()->put('username',$user);
     // return redirect('dashboard');
   }

   function dashboard()
   {
      return view('admin.dashboard');
      // Note: If we are using middleware we do not need to check for session
      // if(session()->has('username'))
      // return view('admin.dashboard');
      // else
      // return redirect('login');
   }

   function create_admin()
   {
      $login = new AdminLogin;
      $login->user = "admin";
      $login->pass =  Hash::make("admin");     
      $login->name = "my name";
      $query = $login->save();
     
     return redirect('login');
   }

   function logout()
   {
      if(session()->has('username'))      
      session()->pull('username');
      return redirect('login');
       
   }
}
