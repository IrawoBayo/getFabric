<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}




    <div class="container">

        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{url('/')}}"></a></li>
                <li class="active">Shopping Cart <span class="badge badge-danger">{{Cart::session(auth()->id())->getContent()->count()}}</span></li>      
            </ol>
        </div>

    </div>
    
</section>


<section>


        
        
        <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        

                            @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>

                            @endif

                            @if(session('status'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>

                            @endif



                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr style="background-color: orange; color: white;">
                                             
                                             <th>Images</th>
                                             <th>Product Name</th>
                                             <th>Price</th>
                                             <th>Total</th>
                                             <th>Quantity</th>
                                             <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($cartItems as $item)
                                        <tr>
                                            
                                            <td class="product-thumbnail">
                                                <a href="product-details.html">
                                                    <img class="card-img-top" src="<?php echo asset("storage/$product['cover_img']")?>" alt="Card image cap">
                                                </a>
                                            </td>

                                            <td class="product-name"><a href="#"><b>{{$item['name']}}</b><span class="text-success"><br>Only {{$item['quantity']}} available <p>Product ID: {{$item['id']}}</p></span></a></td>


                                            <td class="product-price-cart"><span class="amount">NGN {{$item['price']}}</span></td>

                                            

                                            <td class="product-subtotal">{{Cart::session(auth()->id())->get($item['id'])->getPriceSum()}}</td>

                                            <td class="product-quantity">

                                                <livewire:cart-update-form :item="$item" :key="$item['id']"/>

                                            </td>

                                            <td class="product-remove"><a href="{{ route('cart.destroy', $item['id']) }}"><i class="pe-7s-close"></i></a></td>
                                        </tr>

                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
<input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                        </div>
                                        <div class="coupon2">
                                            <input class="button" name="update_cart" value="Update cart" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            
                                            <li>Grand Total:<span>Total Price : NGN {{\Cart::session(auth()->id())->getTotal()}}</span></li>
                                            
                                        </ul>

                                        <br>

                                        <p><a href="{{ route('home') }}" id="" class="btn btn-success" name="" role="button" style="width: 100%;">Continue Shopping</a></p>

                                        <p><a href="{{ route('cart.checkout') }}" id="" class="btn btn-primary" name="" role="button" style="width: 100%;">Proceed to Checkout</a></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        





</div>
