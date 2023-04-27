<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use DateTime;

class PaymentController extends Controller
{
    
    public function payment(Request $Request){
        return view('bookingRequest',[
            'price'=>$Request->price,
            'check_in'=>$Request->check_in,
            'checkout'=>$Request->checkout,
        ]);
        
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $Request)
    {
        // $Request->validate([
        //     'card_Name' => 'required|string|max:255',
        //     'card_Number' => 'required|min:16|max:20',
        //     'Exp_Month' => 'required|min:2|max:2',
        //     'Exp_Year' => 'required|min:4|max:4',
        //     'Cvv' => 'required|min:3|max:3',
        // ]);
        $card_Name =$Request->card_Name;
        $card_Number =$Request->card_Number;
        $Exp_Month =$Request->Exp_Month;
        $Exp_Year =$Request->Exp_Year;
        $Cvv =$Request->Cvv;
        $price =$Request->price;
        $check_in=$Request->check_in;
        $checkout=$Request->checkout;
        $days= (new DateTime($checkout))->diff(new DateTime($check_in))->days;
        $amount =($price * $days)*100;
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $token= $stripe->tokens->create([
            'card' => [
                'number' => $card_Number,
                'exp_month' => $Exp_Month,
                'exp_year' => $Exp_Year,
                'cvc' => $Cvv,
            ],
        ]);
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $stripe->charges->create([
            'amount' => $amount,
            'currency' => 'mad',
            'source' => $token->id,
            'description' => 'My First Test Charge',
        ]);
        
        return 'success';
    }
}
