<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    
    public function payment(Request $Request){
        return view('bookingRequest',[
            'price'=>$Request->price,
            'check_in'=>$Request->check_in,
            'checkout'=>$Request->checkout,
            'apartId'=>$Request->apartId,
        ]);
        
    }
    
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $Request)
    {
        $card_Name =$Request->card_Name;
        $card_Number =$Request->card_Number;
        $Exp_Month =$Request->Exp_Month;
        $Exp_Year =$Request->Exp_Year;
        $Cvv =$Request->Cvv;
        $price =$Request->price;
        $check_in=$Request->check_in;
        $checkout=$Request->checkout;
        $apartId=$Request->apartId;
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
        $stripe->charges->create([
            'amount' => $amount,
            'currency' => 'mad',
            'source' => $token->id,
            'description' => 'My First Test Charge',
        ]);

        DB::table('reservations')->insert([
            'user_id'=> Auth::user()->id,
            'apartment_id'=>$apartId,
            'total_payed'=>$amount ,
            'check_in'=>$check_in ,
            'checkout'=>$checkout,
        ]);
        
        return redirect('/myReservation');
    }
}
