<?php

namespace App\Http\Controllers;

use App\Product;
use TCG\Voyager\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Currency;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function catalogue()
    {
        
        return view('product.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
    
        if ($categoryId) {
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);

            $products = $category->products;

        }else{

            $products = Product::take(10)->get();
            
        }
        return view('product.index', compact('products', 'categoryName'));
    }



    public function search(Request $request)
    {
        $search = $request->get('search');

        $products = DB::table('products')->where('name', 'like', '%' .$search. '%')->paginate(5);

        $currency = Currency::first();

        return view ('product.catalog', compact('products', 'currency'));
    }



    public function filter(Request $request)
    {
       
        // $query = Product::whereBetween('price', ['min_price', 'max_price']);


        



        $min_price = $request->get('min_price');
        $max_price = $request->get('max_price');
        $keyword = $request->get('keyword');
        $query = DB::table('products')->where('name', 'like', '%' .$keyword. '%')->whereBetween('price', [$min_price, $max_price])->get();


        $products = $query;

        $currency = Currency::first();

        return view ('product.filter', compact(['products', 'currency']));


        // $query = Product::orderBy('created_at', 'desc');


        // $keyword = $request->get('keyword');

        // if ($request->keyword) {
        //     $query = $query->where('name', 'like', '%' .$keyword. '%');
        // }

        // $min_price = $request->get('min_price');
        // $max_price = $request->get('max_price');

        // if ($request->min_price && $request->max_price) {

        //     $query = $query->where('price', '>=', $request->min_price);
        //     $query = $query->where('price', '<=', $request->max_price);
        // }

        // $products = $query->paginate(5);


        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
