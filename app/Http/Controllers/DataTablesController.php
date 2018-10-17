<?php
namespace App\Http\Controllers;
use App\User;

class DataTablesController extends Controller
{
    public function index()
    {
        $users = User::all();
        if(\Auth::user()->role==0)
        {
            return view('admin.users.index', compact('users'));
        }
        else 
        {
            return redirect()->back();
        }   
    }

    public function edit($id)
    {
        $user = User::find($id);

        if(\Auth::user()->role==0)
        {
            return view('users.edit',compact('user'));
        }
        else 
        {
            return redirect()->back();
        }   
       
    }

}