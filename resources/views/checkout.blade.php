@extends('layouts.app')

@section('content')

	<div class="container">
        <h2 class="text-left">Checkout</h2>

        <div class="checkout-section">

        	<div>
        		<form action="">

        			<h2>Billing Details</h2>

        			<div class="form-group">
        				<label for="email">Email Address</label>
        				<input type="email" name="email" class="form-control" id="email" value="">
        			</div>

        			<div class="form-group">
        				<label for="name">Name</label>
        				<input type="text" name="name" class="form-control" id="name" value="">
        			</div>

        			<div class="form-group">
        				<label for="address">Address</label>
        				<input type="text" name="address" class="form-control" id="address" value="">#
        			</div>

        			<div class="half-form">
        				<div class="form-group">
	        				<label for="city">Town</label>
	        				<input type="text" name="city" class="form-control" id="city" value="">#
        				</div>
        		
        				<div class="form-group">
	        				<label for="city">State</label>
	        				<input type="text" name="city" class="form-control" id="city" value="">#
        				</div>
        			</div>

        			<div class="half-form">
        				<div class="form-group">
	        				<label for="postalcode">Postal Code</label>
	        				<input type="text" name="postalcode" class="form-control" id="postalcode" value="">#
        				</div>
        		
        				<div class="form-group">
	        				<label for="phone">Phone</label>
	        				<input type="text" name="phone" class="form-control" id="phone" value="">#
        				</div>
        			</div>




        			<div class="spacer"></div>

        			<h2>Payment Details</h2>

        			<div class="form-group">
        				<label for="name_on_card">Name on Card</label>
        				<input type="text" name="name_on_card" class="form-control" id="name_on_card" value="">
        			</div>

        			<div class="form-group">
        				<label for="address">Address</label>
        				<input type="text" name="address" class="form-control" id="address" value="">
        			</div>

        			<div class="form-group">
        				<label for="card_number">Name on Card</label>
        				<input type="text" name="card_number" class="form-control" id="card_number" value="">
        			</div>

        			<div class="half-form">

        				<div class="form-group">
	        				<label for="expiry">Expiry</label>
	        				<input type="text" name="expiry" class="form-control" id="expiry" value="">
        				</div>
        				
        				<div class="form-group">
	        				<label for="cvc">CVC Code</label>
	        				<input type="text" name="cvc" class="form-control" id="cvc" value="">
        				</div>
        			</div>

        			<div class="spacer"></div>

        			<button type="submit" class="button-primary full-width">Complete Order</button>
	
        		</form>
        	</div>



        	<div class="checkout-table-container">
        		<h2>Your Order</h2>

        		<div class="checkout-table">
        			@foreach (Cart::content() as $item)
	        			<div class="checkout-table-row">
	        				<div class="checkout-table-row-left">
	        					<img src="{{ asset('images/products/'.$item->model->slug.'.jpg') }}" alt="item" class="checkout-table-img">
	        					<div class="checkout-item-details">
	        						<div class="checkout-table-item">{{ $item->model->name }}</div>
	        						<div class="checkout-table-description">{{ $item->model->details }}</div>
	        						<div class="checkout-table-price">{{ $item->model->presentPrice }}</div>
	        					</div>
	        				</div>

	        				<div class="checkout-table-row-right">
	        					<div class="checkout-table-price">{{ $item->qty }}</div>
	        				</div>
	        			</div>

        			@endforeach

        				
        			</div>
        		</div>
        	</div>

	

				
				
		</div>
	</div>
	


@endsection