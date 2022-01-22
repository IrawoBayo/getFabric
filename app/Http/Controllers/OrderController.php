<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\DeliveryCharge;
use Paystack;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPaid;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'shipping_fullname'=> 'required',
            'shipping_state'=> 'required',
            'shipping_city'=> 'required',
            'shipping_address'=> 'required',
            'shipping_phone'=> 'required',
            'shipping_zipcode'=> 'required',
            'shipping_zipcode'=> 'required',
            'payment_method' => 'required'
        ]);

        $order = new Order();

        $order->order_number = uniqid('OrderNumber');
        $order->orderID = $request->input('orderID');
        $order->amount = $request->input('amount');

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_state = $request->input('shipping_state');
        $order->shipping_city = $request->input('shipping_city');
        $order->deliverycharges_id = $request->input('deliverycharges_id');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_phone = $request->input('shipping_phone');
        $order->shipping_zipcode = $request->input('shipping_zipcode');

        if (!$request->has('billing_fullname')) {

            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_phone = $request->input('shipping_phone');
            $order->billing_zipcode = $request->input('shipping_zipcode');

        }else {

            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_state = $request->input('billing_state');
            $order->billing_city = $request->input('billing_city');
            $order->billing_address = $request->input('billing_address');
            $order->billing_phone = $request->input('billing_phone');
            $order->billing_zipcode = $request->input('billing_zipcode');

        }

        $order->grand_total = \Cart::session(auth()->id())->getTotal() + $order->delivery->delivery_charge;

        // $order->grand_total = \Cart::session(auth()->id())->getTotal();

        $order->item_count = \Cart::session(auth()->id())->getContent()->count();

        $order->user_id = auth()->id();


        if(request('payment_method') == 'paypal') {
            $order->payment_method = 'paypal';
        }

        $order->save();

        //save order items

        $cartItems = \Cart::session(auth()->id())->getContent();

        foreach ($cartItems as $item) {
            $order->items()->attach($item->id, ['price'=> $item->price, 'quantity'=>$item->quantity]);
        }

        //payment method

        if(request('payment_method') == 'paypal') {
            //redirect to paypal

            
            return redirect()->route('paypal.checkout', $order->id);
        }



        // Pay with paystack


        if(request('payment_method') == 'card') {
            $order->payment_method = 'card';
        }

        $order->save();

        //save order items



        //payment method

        if (request('payment_method') == 'card') {
            //redrect to paystack

            // dd($request->amount);

            // return Paystack::getAuthorizationUrl()->redirectNow();
            // return redirect('cart.paystackcheckout');
            return redirect()->route('cart.paystackcheckout', $order->id);
            // return redirect('cart.paystackcheckout');
        }


        //empty cart

        \Cart::session(auth()->id())->clear();

        //send email to customer
        $items = DB::table('order_items')->where('order_id', $order->id)->get();
        // $product = Product::where('id', $order->items->product_id)->first();

        
        foreach ($items as $item) {
            $product = Product::where('id', $item->product_id)->first();
            $product->update([
            'stock' => $product->stock - $item->quantity
            ]);
        }

        // Mail::to($order->user->email)->send(new OrderPaid($order));


        // return redirect()->route('home')->with('success', 'Success, Order has been placed, thank you');

        return view('cart.thankyou')->with('success', 'Success, Order has been placed, thank you');

        //take user to thank you page

        return "Order completed, thank you for your order";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
