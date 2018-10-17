<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        
        if(\Auth::user()->role==0)
        {
            return view('admin.transaction.index', compact('transactions'));
        }
        else 
        {
            return redirect()->back();
        }      
       
    }
}
