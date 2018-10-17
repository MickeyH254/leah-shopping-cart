<?php

namespace App\Http\Controllers;

use Mail;
use Cart;
use Transaction;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 

use Stripe\Stripe;
use Stripe\Charge;
use DB;
use Auth;

class CheckoutController extends Controller
{
    public function index() 
    {
        if(Cart::content()->count() == 0)
        {
            Session::flash('info', 'Your Cart is empty.Kindly continue shopping');
            return redirect()->back();
        }
        return view('checkout');
    }

    public function createTransactions($email, $the_token, $stripe_token, $stripeTokenType, $amount_paid)
    {
       $transact = new Transaction;

       $transact->email = Input::get($email);
       $transact->token = Input::get($the_token);
       $transact->stripe_token = Input::get($stripeToken);
       $transact->stripe_token_type = Input::get($stripeTokenType);
       $transact->amount_paid = Input::get($amount_paid);
       $transact->save();

    }

    public function payment()
    {

        // dd(request()->all());

        Stripe::setApiKey("sk_test_NYJin1x4xThLs0iJLDX5CsFN");
        $token = request()->stripeToken;
        $cart_total = Cart::total();
        $email = Auth::user()->email;
        $TokenType = "card";

        $charge = Charge::create([
            'amount' => $cart_total * 100,
            'currency' => "kes",
            "description" => "",
            "source" => $token
        ]);
        
        

        $timestamp = date("Y-m-d H:i:s");

        DB::table('transactions')->insertGetId(
            ['email' => $email, 'token' => $token, 'stripe_token_type' => $TokenType, 'amount_paid' => $cart_total, 'created_at' => $timestamp] 
        );

        Cart::destroy();

        return redirect('/home')->with(Session::flash('sucess', 'Purchase successful. Wait for our email.'));
    }
}
