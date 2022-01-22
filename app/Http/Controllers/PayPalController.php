<?php

namespace App\Http\Controllers;

use App\Mail\OrderPaid;
use App\Order;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Provider;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function getExpressCheckout($orderId)
    {
    	$checkoutData = $this->checkoutData($orderId);

    	$provider = new ExpressCheckout();
        
    	$response = $provider->setExpressCheckout($checkoutData);

    	return redirect($response['paypal_link']);

    }

    private function checkoutData($orderId)
    {
    	$cart = \Cart::session(auth()->id());
    	
    		$cartItems = array_map( function($item){
    			return [
    				'name'=> $item['name'],
    				'price'=> $item['price'],
    				'qty'=> $item['quantity']
    			];

    		}, $cart->getContent()->toarray());


    		$checkoutData = [
    			'items'=> $cartItems,
	    		'return_url'=> route('paypal.success', $orderId),
	    		'cancel_url'=> route('paypal.cancel'),
	    		'invoice_id'=>uniqid(),
	    		'invoice_description'=> "Order description",
	    		'total'=> $cart->getTotal()
	    	];

	    	return $checkoutData;
    }

    public function cancelPage()
    {
    	dd('payment failed');
    }

    public function getExpressCheckoutSuccess(Request $request, $orderId)

    {
    	$token = $request->get('token');
    	$payerId = $request->get('PayerID');
    	$provider = new ExpressCheckout();
    	$checkoutData = $this->checkoutData($orderId);

    	$response = $provider->getExpressCheckoutDetails($token);

    	if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

    		//Perform Paypal transaction

    		$payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $payerId);
    		$status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

    		if (in_array($status, ['Completed', 'Processed'])) {

    			$order = Order::find($orderId);
	    		$order->is_paid = 1;
	    		$order->save();

	    		//Send Mail


	    		Mail::to($order->user->email)->send(new OrderPaid($order));


	    		// return redirect('/home')->withMessage('Payment Successful!');
                return view('cart.thankyou')->with('success', 'Success, Order has been placed, thank you');
    		}

    		
    	}

    			return redirect('/home')->withMessage('Payment Unsuccessful, Something went wrong!');
    }
}
