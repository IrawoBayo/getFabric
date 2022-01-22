@extends('layouts.frontview')
@extends('layouts.header1')



@section('content')


<section>

  <div class="container">

    @php
    
     $orders = DB::table('orders')->where('user_id', Auth::user()->id)->orderBy('id','DESC')->get();

    @endphp


      <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
              <div class="row" style="margin-bottom:40px;">
                <div class="col-md-8 col-md-offset-2">
                  <p>
                      <div>
                          Customer Name: {{Auth::user()->name}}
                          <p>Money to be paid</p>
                      </div>
                  </p>
                  <input type="" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
                  <input type="hidden" name="orderID" value="">
                  <input type="hidden" name="amount" value="30000"> {{-- required in kobo --}}
                  <input type="hidden" name="quantity" value="1">
                  <input type="hidden" name="currency" value="NGN">
                  <input type="hidden" name="metadata" value="{{ json_encode($array = ['buyer_user_ id' => ('user_id'),]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                  <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                  {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                   <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


                  <p>
                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                    </button>
                  </p>
                </div>
              </div>
      </form>

    </div>

</section>

@endsection