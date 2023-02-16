<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    function post()
    {
        return view('admin.post');
    }
}
