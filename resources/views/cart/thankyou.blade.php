@extends('layouts.frontview')
@extends('layouts.header1')


@section('content')

<script src="https://js.stripe.com/v3/"></script>
<section class="hero hero-page gray-bg padding-small" style="background-color: #00b3b3;">

    <div class="container" style="background-color: #00b3b3;">


        <div class="breadcrumbs">
            <ol class="breadcrumb" style="background-color: #00b3b3;">
                <li class="active text-white"><strong><h4>Acknowledgement</h4></strong></li>      
            </ol>
        </div>

    </div>
            
</section>

<section class="hero hero-page gray-bg padding-small" style="padding-bottom: 5%">

		<div class="container">

			<section id="cart_items">

				<div class="container">

					<div class="text-center">

						<a href="{{route('home')}}"><img src="new/img/relax.gif" alt=""></a>
						<h4> Your Items will get to you soon </h4>
						<h3>
							Thanks For Your Order: 
							<span style="color: green">{{ ucwords(Auth::user()->name) }}</span></h3>
						<p>A mail has been sent to you</p>
					</div>
					
				</div>

			</section>

			<br><br>
        
		</div>
    
</section>

@endsection