@extends('layouts.frontview')
@extends('layouts.header1')


@section('content')

<div class="container">

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
            
        </div>



<div class="container">

	<div class="panel header">

		<h3 class="page-header"><i class="fa fa-file-text-o"></i><b>Product's Information</b></h3>
		
	</div>

	<br><br>




	<div class="row">

		@foreach($products as $product)

		<div class="col-md-6 col-xs-12">

			<div class="thumbnail">

				<img src="<?php echo asset("storage/$product->cover_img")?>" class="card-img" style = "width: 60%">
				
			</div>
			
		</div>

		<div class="col-md-5 col-md-offset-1">

			<H3 class="text-primary"><u>Product Details</u></H3>

			<h2><?php echo ucwords($product->name); ?></h2>

			<h3 class="text-danger">&#x20A6; {{$product->price * $currency->exchange_rate}} || <span style="font-size: 16px; color: #00b3b3;">$ {{$product->price}}</span></h3>

				<p>@if($product->stock == 0)

                    <div><span class="badge badge-danger text-white">Not Available</span></div>

                @elseif($product->stock > 0 && $product->stock <= 5)

                <div><span class="badge badge-warning text-white">Low Stock</span></div>
                                
                @elseif($product->stock > 5)

                    <div><span class="badge badge-success"> In Stock</span></div>
                            
                @endif

                <span>Availability status: {{$product->stock}} </span>
            </p>

			<h5 align="justify">{{$product->description}}</h5>




			

			<!-- <a class="btn btn-success" title="Wishlist" href="{{route('toWishList', $product->id)}}" method="post">Add to Wishlist</a> -->



			<form action="{{route('toWishList')}}" method="post" role="form">

				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<input type="hidden" name="product_id" value="{{$product->id}}">

				<button type="submit" class="btn btn-success">Add to Wishlist</button>
					
			</form>

			<a href="{{route('cart.add', $product->id)}}" class="btn btn-sm btn-outline-primary">Add to Cart<i class="fa fa-shopping-cart"></i></a>

		</div>

		@endforeach






		
	</div>

	<br><br>
	
</div>


@endsection