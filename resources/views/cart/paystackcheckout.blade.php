@extends('layouts.frontview')
@extends('layouts.header1')


@section('content')

<script src="https://js.stripe.com/v3/"></script>

<section class="hero hero-page gray-bg padding-small" style="margin-bottom: 8%;">

    <div class="container">

        <div class="card-header" style="background-color: #00b3b3;">
                <div class="col-lg-12 order-2 order-lg-1">
                    <br>
                    <h2 class="text-white">Payment</h2>
                    <p class="lead text-muted text-white">Payment information</p>
                

                </div>
        </div>

        <div class="card-body">
          
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div id="address" class="active tab-block">
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                <div class="card card-center" style="background-color: green">

                                    <div class="container text-center">
                                
                                        <div class="row">
                                          <div class="col-md-12 col-md-offset-2">
                                            
                                                <div style="font-family: tahoma;">

                                                    <div class="card-body">

                                                        <table class="table">

                                                            <thead>
                                                                <th>Customer Name</th>
                                                                <th>Order Number</th>
                                                                <th>USD</th>
                                                                <th>NGN</th>
                                                                <th>Delivery Charge</th>
                                                            </thead>

                                                            <tbody>

                                                                <tr>

                                                                    <td><p class="text-white">{{Auth::user()->name}}</p></td>
                                                                    <td><p class="text-white">{{$order->orderID}}</p></td>
                                                                    <td><p class="text-white">{{ $order->grand_total}}</p></td>
                                                                    <td><p class="text-white">&#x20A6; {{$NGN}}</p></td>
                                                                    <td><p class="text-white"> $ {{$order->delivery->delivery_charge}} || &#x20A6; {{$order->delivery->delivery_charge * 387}} </p></td>


                                                                </tr>

                                                            </tbody>
                                                            
                                                        </table>

                                                        <input type="hidden" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
                                                        <input type="hidden" name="orderID" value="{{$order->orderID}}">
                                                        <input type="hidden" name="amount" value="{{$kobo}}"> {{-- required in kobo --}}
                                                        <input type="hidden" name="quantity" value="1" />
                                                        <input type="hidden" name="currency" value="NGN">
                                                        @if(!Auth::guest())
                                                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['buyer_user_ id' => Auth::user()->id,]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                                        @endif
                                                        <input type="hidden" name="reference" value="{{$order->order_number}}"> {{-- required --}}
                                                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                                         <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                                         <button class="btn btn-primary btn-lg btn-block" type="submit" value="Pay Now!">
                    
                                                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                                        
                                                        </button>

                                                    </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>
                
            </div>

        </div>
  
    </div>
    
</section>


   
@endsection

