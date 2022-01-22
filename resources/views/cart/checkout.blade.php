@extends('layouts.frontview')
@extends('layouts.header1')


@section('content')


    <section class="hero hero-page gray-bg padding-small" style="background-color: #00b3b3;">

        <div class="container" style="background-color: #00b3b3;">


            <div class="breadcrumbs">
                <ol class="breadcrumb" style="background-color: #00b3b3;">
                    <li class="active text-white"><strong><h4>Checkout</h4></strong></li>      
                </ol>
            </div>

        </div>
            
    </section>

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
           
            <div class="checkout__form">
                <h4>Shipping Details</h4>
                <form action="{{route('orders.store')}}" method="post">
                    
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="form-group">
                                <p>Full Name<span>*</span></p>
                                <input type="text" name="shipping_fullname" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>Country/State<span>*</span></p>
                                <input type="text" name="shipping_state" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>City<span>*</span></p>
                                <input type="text" name="shipping_city" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>Town/City<span>*</span></p>
                                <select class="form-control" name="deliverycharges_id">

                                  @foreach($deliverycharges as $delivery)
                                  
                                  <option value='{{$delivery->id}}'>{{$delivery->city}}</option>

                                  @endforeach

                                </select><br>
                            </div>
                            <div class="form-group"><br>
                                <p>Delivery Address<span>*</span></p>
                                <input type="text" name="shipping_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <p>Phone<span>*</span></p>
                                <input type="text" name="shipping_phone" class="form-control">
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text" name="shipping_zipcode" class="form-control">
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-6" style=" background-color: #00b3b3;">
                            <div class="checkout__order" style=" background-color: #cc6600;">
                                <h4 style="color: #00b3b3;"><strong>LIST OF ORDER</strong></h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>
                                @foreach ($cartItems as $item)
                                <ul>
                                    <li style="color:  #1a0000"><strong>{{$item->name}} </strong><span>USD {{$item->price}}</span></li>
                                </ul>
                                @endforeach
                                <div class="checkout__order__subtotal">Subtotal <span>USD {{\Cart::session(auth()->id())->getSubTotal()}}</span></div>
                                <div class="checkout__order__total">Total <span><strong>USD {{\Cart::session(auth()->id())->getTotal()}}</strong></span></div>
                                
                                <H5 style="color: #00b3b3; font-size: 14px"><strong>Please S E L E C T payment method</H5>
                                <span class="text-success" style="font-size: 12px">You can only make USD payment with Paypal</span>
                                <div class="checkout__input__checkbox">
                                    <select name="payment_method" id="" style="color: orange;">

                                
                                        <option value="" selected="selected" style="color: orange;">- Select Payment Method</option>
                                        <option value="cash_on_delivery" style="color: orange;">Cash on delivery</option>
                                        <option value="paypal"  style="color: orange;">Pay with PayPal</option>
                                        <option value="card"  style="color: orange;">Card</option>

                                    </select>
                                </div>
                                <input type="hidden" name="orderID" value="{{rand(1111111,9999999)}}">
                                <button type="submit" class="site-btn">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
   
@endsection

