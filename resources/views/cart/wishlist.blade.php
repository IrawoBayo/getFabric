@extends('layouts.frontview')
@extends('layouts.header1')

@section('content')

<div class="container">

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="new/img/pattern.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Wishlist</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Home</a>
                            <span>Wishlist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!-- Breadcrumb Section End -->

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">x</button>
                                        
            <strong>{{ $message }}</strong>
                                      
        </div>
    @endif

    @if($message = Session::get('error'))
        <div class="alert alert-danger alert-block">

            <button type="button" class="close" data-dismiss="alert">x</button>
                                            
            <strong>{{ $message }}</strong>
                                          
        </div>
    @endif

	<div class="row">


		<?php

		if($products->isEmpty()){ ?>

		<h4>Sorry, No Product found!</h4>

		<?php } else { ?>




		@foreach ($products as $product)

		<div class="col-md-4 col-sm-4">

				<br>
			
			<div class="text-center">
				<a href="">
					<img src="<?php echo asset("storage/$product->cover_img")?>" alt="" width="200">
				</a>

				<br><br>

				<h3>
					<a href="">
						{{$product->name}}
					</a>
				</h3>


				<h4 style="color: green"> &#x20A6; {{$product->price * $currency->exchange_rate}} || <span style="font-size: 16px; color: purple">$ {{$product->price}}</span></h4>

				

				
					<a href="{{route('cart.add', $product->id)}}" class="btn btn-success add-to-cart">
					<i class="fa fa-shopping-cart"></i>Add to cart</a>

					
				<br><br>
				
				<a href="{{ route('delete_wishlist_path', $product -> id ) }}" class="text-danger">
					<i class="fa fa-minus-square"></i>Remove from list</a>
	
			</div>
		</div>

		@endforeach



		<?php } ?>
	</div>
	
</div><br>

@endsection