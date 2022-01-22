<?php

namespace App\Http\Controllers;

use App\Product;
use Darryldecode\Cart\Cart;
use App\Deliverycharge;
use App\Currency;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {

        if ($product->stock == 0) {
            return back()->with('error', 'This item is not available in store!');
        }else{

    	// add product to cart
        \Cart::session(auth()->id())->add(array(
        'id' => $product->id,
        'name' => $product->name,
        'price' => $product->price,
        'stock' => $product->stock,
        'cover_img' => $product->cover_img,
        'quantity' => 1,
        'attributes' => array(),
        'associatedModel' => $product

        ));

        }

        return redirect()->route('cart.index');

    }

    public function index()
    {

        $cartItems = \Cart::session(auth()->id())->getcontent();

        $currency = Currency::first();
        
     



    	return view('cart.index', compact('cartItems', 'currency'));
    }

     public function destroy($itemId)
    {
        \Cart::session(auth()->id())->remove($itemId);

        return back();
    }

    public function update($rowId)
    {
        \Cart::session(auth()->id())->update($rowId, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )

        ]);

        return back()->with('success', 'Success: Cart Updated');
    }

    public function checkout()
    {
        

        $cartItems = \Cart::session(auth()->id())->getcontent();

        $deliverycharges = Deliverycharge::all();

        return view('cart.checkout', compact('cartItems', 'deliverycharges'));
    }


}
