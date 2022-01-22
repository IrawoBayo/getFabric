@extends('layouts.frontview')
@extends('layouts.header1')

@section('content')



<section class="" ><br><br>

        <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="new/img/pattern.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <marquee direction="left" style="color: white; background-color: 00b3b3;"><strong>NOTICE TO ALL GET FABRIC CUSTOMERS, every quantity selected represents 5yards for Lace, 6yards for Ankara and 5yards for other fabrics</strong></marquee>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead style="background-color: #cc6600;">
                                <tr>
                                    <th class="shoping__product text-white" style="padding-left: 3%">Images</th>
                                    <th class="text-white">Prod. Name</th>
                                    <th class="text-white">Price</th>
                                    <th class="text-white">Subtotal</th>
                                    <th class="text-white">Qty</th>
                                    <th class="text-white">Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                <tr>
                                    <td class="">
                                        <img src="<?php echo asset("storage/$item->cover_img")?>" alt="" width="200" height="200">
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{$item->name}}
                                        <p>Product ID: {{$item->id}}</p>
                                        <p>Only {{$item->stock}} left</p>
                                    </td>
                                    <td class="shoping__cart__price" style="width: 20%">
                                        &#x20A6; {{$item->price * $currency->exchange_rate}} || $ {{$item->price}}
                                    </td>
                                    <td class="shoping__cart__price" style="width: 20%">
                                        &#x20A6; {{Cart::session(auth()->id())->get($item->id)->getPriceSum() * $currency->exchange_rate}} || $ {{Cart::session(auth()->id())->get($item->id)->getPriceSum()}}
                                    </td>
                                    <td class="shoping__cart__quantity" style="width: 5%">
                                        <div class="quantity">
                                            <div class="">
                                                <form action="{{ route('cart.update', $item->id) }}">
                                                    <input name="quantity" type="number" value="{{$item->quantity}}">
                                                    <input type="submit" name="" class="btn btn-success" value="Save">
                                                   
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="{{ route('cart.destroy', $item->id) }}">
                                        <span class="icon_close text-danger"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{ route('home') }}" class="primary-btn cart-btn text-danger">CONTINUE SHOPPING</a>
                        <!-- <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout" style="background-color: #cc6600;">
                        <h5 style="color: 00b3b3;">Cart Total <span class="text-white" style="float: right;">NGN || USD</span></h5>
                        <ul>
                            <!-- <li class="text-white">Subtotal <span class="text-white">&#x20A6; {{\Cart::session(auth()->id())->getSubTotal() * $currency->exchange_rate}} || $ {{\Cart::session(auth()->id())->getSubTotal()}}</span></li> -->
                            <li class="text-white">Grand Total <span class="text-white">&#x20A6; {{\Cart::session(auth()->id())->getTotal() * $currency->exchange_rate}} || $ {{\Cart::session(auth()->id())->getTotal()}}</span></li>
                        </ul>
                        <a href="{{ route('cart.checkout') }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->



</section>





@endsection