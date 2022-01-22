<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Paystack;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPaid;

class PayStackController extends Controller
{
    

	public function paystack($id) 

    {  



        $order = Order::find($id);

                     
        $total = $order->grand_total;
        $NGN = $total * 387;
        $kk = $NGN * 100;


        return view ('cart.paystackcheckout', ['order' => $order,'kobo'=> $kk, 'NGN' => $NGN]);


    }



    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request)
    {
        
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback(Request $request)
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails['data']['reference']);



        if (array_key_exists('data', $paymentDetails) && array_key_exists('status', $paymentDetails['data']) && ($paymentDetails['data']['status'] === 'success')) {
            
            
            
            $order = Order::where('order_number', $paymentDetails['data']['reference'])->first();

            // dd($order);
            $order->is_paid = 1;

            $order->save();

            //Send Mail


            Mail::to($order->user->email)->send(new OrderPaid($order));

            

            // return redirect('/home')->with('success', 'Payment Succesfully Made');
            return view('cart.thankyou')->with('success', 'Success, Order has been placed, thank you');

        }else{

            return redirect('/home')->with('error', 'Payment Unsuccessful, Something went wrong!');
        }



    //     var_dump($paymentDetails);exit();
    // // //     // // Now you have the payment details,
    // // //     // // you can store the authorization_code in your db to allow for recurrent subscriptions
    // // //     // // you can then redirect or do whatever you want
    
    }
}