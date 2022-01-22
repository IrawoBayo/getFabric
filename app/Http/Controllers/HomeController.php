<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Contact;
use App\Currency;
use App\Slider;
use App\Wishlist_model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContact;
use TCG\Voyager\Models\Category;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::take(1)->get();

        $products = Product::take(8)->get();
      
        $categories = Category::whereNull('parent_id')->get();

        $currency = Currency::first();


        
        return view('home', ['allProducts' => $products, 'categories'=>$categories, 'currency'=>$currency, 'sliders'=>$sliders]);
    }

    public function detailPro($id) {
        $products=DB::table('products')->where('id',$id)->get();
        $currency = Currency::first();

        return view ('product.product_detail', compact('products', 'currency'))->with('error', 'This item is already in your wishlist!');
    }


    public function thankyou()
    {
        return view('cart/thankyou');
    }

    public function View_wishList()
    {
        
        $products=DB::table('wishlist')->where('user_id', Auth::user()->id)
        ->leftJoin('products', 'wishlist.product_id', '=', 'products.id')
        ->get();
        $currency = Currency::first();

        return view ('cart.wishlist', compact('products', 'currency'));
    }

    public function addWishList(Request $request, $product_id)

    {
        $currency = Currency::first();
        $status=Wishlist_model::where('user_id', Auth::user()->id)
        ->where('product_id', $request->product_id)->first();
        if (isset($status->user_id) and isset($request->product_id)) 

        {
            
        return redirect()->back()->with('error', 'This item is already in your wishlist!');
        
        }else{

        $wishlist = new Wishlist_model();

        $wishlist->user_id = Auth::user()->id;

        $wishlist->product_id = $product_id;

        $wishlist->save();

        $products=DB::table('products')->where('id', $product_id)->get();

        }

        return view('cart.wishlist', compact('products', 'wishlist', 'currency'));

    }

    public function wishList(Request $request)

    {
        $currency = Currency::first();
        $status=Wishlist_model::where('user_id', Auth::user()->id)
        ->where('product_id', $request->product_id)->first();
        if (isset($status->user_id) and isset($request->product_id)) 

        {
            
        return redirect()->back()->with('error', 'This item is already in your wishlist!');
        
        }else{

        $wishlist = new Wishlist_model();

        $wishlist->user_id = Auth::user()->id;

        $wishlist->product_id=$request->product_id;

        $wishlist->save();

        $products=DB::table('products')->where('id', $request->product_id)->get();

        }

        return view('cart.wishlist', compact('products', 'wishlist', 'currency'));

    }

    public function destroyWishlist($id)
    {
        
        $wishlist = Wishlist_model::where('product_id', $id)->first();

        $wishlist->delete();

        return redirect()->back()->with('success', 'Success, Item removed from wishlist');
    }

    public function contact(Request $request) 

    {        

        return view ('contact');
       
    }

    public function sendContact(Request $request)

    {
        Contact::create($request->all());

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'subject' => $request->subject,
            'message' => $request->message
        );

        \Mail::to('olayeyeilemobayo@gmail.com')->send(new SendContact($data));

        return back()->with('success', 'Success, Thanks for contacting Favourite77 Helpline');
    }


    public function OrderStatus ()
    {
        $orders=Order::where('user_id', Auth::user()->id)->get(); 
        return view('orderstatus',compact('orders'));
    }

    public function orderTrack(Request $request)
    {
   

        $order = DB::table('orders')->where('order_number', $request->order_number)->first();

        return view('order_tracking', compact('order'));
    }

    function price(Request $request)
    {
        return view('product.pricerange');
    }


    
}
