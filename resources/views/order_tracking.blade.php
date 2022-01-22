@extends('layouts.frontview')
@extends('layouts.header1')


@section('content')

<div class="container">

	<div class="row justify-content-center mb-3">

		<div class="col-md-10">

			<div class="card">

				<div class="card-body">

					@if($order == NULL)

						<div class="text-center">
							<h4>No Order Found !!!</h4>
						</div>					

					@else
						<div class="text-center">
							@if($order->status == 'pending')
								<h3><span class="badge badge-warning text-white">Your Order is being reviewed</span></h3>
							@elseif($order->status == 'processing')
								<h3><span class="badge badge-primary">Order is under Processing</span></h3>
							@elseif($order->status == 'completed')
								<h3><span class="badge badge-success">Your product has been dispatched, soon get to delivery address</span></h3>
							@elseif($order->status == 'decline')
								<h3><span class="badge badge-danger">Opps!! Order declined, please contact our helpline.</span></h3>
							@endif
						</div>
					@endif


					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>


@endsection