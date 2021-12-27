<?php

namespace App\Http\Controllers;

use Stripe;
use DB;
use Auth;
use Session;
use App\Models\myCart;
use App\Models\myOrder;
use Notification;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');//make sure user login
    }
    
     public function paymentPost(Request $request)
    {
	       
	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->sub*100,
                "currency" => "MYR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of southern online",
        ]);

        $newOrder=myOrder::Create([ //create new order in myOrder with the log in userID
            'paymentStatus'=>'Done',
            'userID'=>Auth::id(),
            'amount'=>$request->sub,
        ]); 

        $orderID=DB::table('my_orders')->where('userID','=',Auth::id())->orderBy('created_at','desc')
        ->first();//get the order ID just now created
  
        $items=$request->input('cid');
        foreach($items as $item=>$value){
            $carts=myCart::find($value); //get the cart item record 
            $carts->orderID=$orderID->id;//binding the orderID with cart item record
            $carts->save();
        }

        $email='dchooiern@gmail.com';
        Notification::route('mail',$email)->notify(new
        \App\Notifications\orderPaid($email));

        Session::flash('success','Order successully!');
        return back();
    }
}