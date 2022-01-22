<?php

use App\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::redirect('/', '/home');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


Route::resource('products', 'ProductController');

Route::get('/products.search', 'ProductController@search')->name('products.search');

Route::get('/products.filter', 'ProductController@filter')->name('products.filter');

Route::resource('products', 'ProductController');

Route::get('/add-to-cart{product}', 'CartController@add')->name('cart.add')->middleware('auth');

Route::get('/cart', 'CartController@index')->name('cart.index')->middleware('auth');

Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy')->middleware('auth');

Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update')->middleware('auth');

Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout')->middleware('auth');

Route::resource('orders', 'OrderController')->middleware('auth');

Route::resource('shops','ShopController')->middleware('auth');


Route::get('paypal/checkout/{order}', 'PayPalController@getExpressCheckout')->name('paypal.checkout');

Route::get('paypal/checkout-success/{order}', 'PayPalController@getExpressCheckoutSuccess')->name('paypal.success');

Route::get('paypal/checkout-cancel', 'PayPalController@cancelPage')->name('paypal.cancel');




Route::get('/cart/paystackcheck/{id}', 'PayStackController@paystack')->name('cart.paystackcheckout');

Route::post('/pay', 'PayStackController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'PayStackController@handleGatewayCallback');

Route::get('/cart/thankyou', 'HomeController@index')->name('thankyou');





// Route::get('/WishList', 'HomeController@View_wishList');
// Route::get('addToWishList/{product_id}', 'HomeController@addWishList')->name('addToWishList');
// Route::name('delete_wishlist_path')->get('/wishList/{id}', 'HomeController@destroyWishlist');


Route::get('/productDetail/{id}', 'HomeController@detailPro');

Route::get('/WishList', 'HomeController@View_wishList')->middleware('auth');

Route::get('addToWishList/{product_id}', 'HomeController@addWishList')->name('addToWishList')->middleware('auth');

Route::post('toWishList', 'HomeController@wishList')->name('toWishList')->middleware('auth');

Route::name('delete_wishlist_path')->get('/wishList/{id}', 'HomeController@destroyWishlist')->middleware('auth');

// Route::resource('wishList', 'HomeController', ['except' => ['create', 'index']])->middleware('auth');








Route::get('/contact', 'HomeController@contact')->middleware('auth');
Route::post('/contact', ['as'=>'contact', 'uses' => 'HomeController@sendContact'])->middleware('auth');

Route::get('/orderstatus', 'HomeController@orderStatus')->middleware('auth');
Route::post('/order/track', 'HomeController@orderTrack')->name('track.order')->middleware('auth');



Route::name('blogs_path')->get('/blogs', 'BlogsController@index');
Route::name('create_blog_path')->get('/blogs/create', 'BlogsController@create')->middleware('auth');
Route::name('store_blog_path')->post('/blogs', 'BlogsController@store');
Route::name('blog_path')->get('/blogs/{id}', 'BlogsController@show');

Route::name('edit_blog_path')->get('/blogs/{id}/edit', 'BlogsController@edit')->middleware('auth');
Route::name('update_blog_path')->put('/blogs/{id}', 'BlogsController@update')->middleware('auth');
Route::name('delete_blog_path')->delete('/blogs/{id}', 'BlogsController@destroy')->middleware('auth');

//Blog Categories

Route::resource('blogcategories', 'BlogcategoryController', ['except' => ['create']])->middleware('auth');

// Route::resource('requests', 'RequestController', ['except' => ['create']])->middleware('auth');

//Blog comments
Route::post('blogcomments/{blog_id}', ['uses' => 'BlogcommentsController@store', 'as' => 'blogcomments.store'])->middleware('auth');

// Route::resource('deliverycharges', 'DeliverychargeController', ['except' => ['create']])->middleware('auth');

Route::name('requests_path')->get('/requests', 'RequestController@index')->middleware('auth');
Route::name('store_requests_path')->post('/requests', 'RequestController@store')->middleware('auth');
Route::name('request_path')->get('/requests/{id}', 'RequestController@show')->middleware('auth');

Route::post('requestcomments/{request_id}', ['uses' => 'RequestcommentsController@store', 'as' => 'requestcomments.store'])->middleware('auth');

Route::name('delete_request_path')->delete('/requests/{id}', 'RequestController@destroy')->middleware('auth');

Route::name('edit_request_path')->get('/requests/{id}/edit', 'RequestController@edit')->middleware('auth');
Route::name('update_request_path')->put('/requests/{id}', 'RequestController@update')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
