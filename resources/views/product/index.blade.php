@extends('layouts.frontview')

@extends('layouts.header1')

@section('content')

<section>

	<div class="container">

		<div class="text-center">

			<h2>Products</h2>

		</div>
		
		<br>

	@foreach ($products as $product)

		@include('product.single_product')


	@endforeach

	</div>

</section>

@endsection