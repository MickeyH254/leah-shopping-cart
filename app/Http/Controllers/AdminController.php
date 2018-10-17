<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() 
    {
        if(\Auth::user()->role==0)
        {
            return view('admin.index');
        }
        else if(\Auth::user()->role==1)
        {
            return redirect()->back();
        }
        else {
            return redirect()->back();
        }
    }
}
