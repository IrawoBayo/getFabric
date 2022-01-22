@component('mail::message')
<b>#INVOICE</b>

<h4>ORDER SUMMARY</h4>
<P>Order Number<span style="margin-left: 8%;">{{$order->order_number}}</span></P>
<P>Order Number<span style="margin-left: 8%;">{{$order->grand_total}}</span></P>

<h4>Dear Customer,</h4>

<p>Welcome to the best Nigeria Fabrics destination, have a great exprience with us with no regret. We want you to know that we are delighted to have you as our special customer.</p>

<b>RETURN ITEM INFO</b>

Get fabrics have you in mind by providing a means of returning all elegible item(s) within 15days starting from the purchase time. Worry not about the return as it is free and fast to be accessed with 100% refund of the Grand Total Paid.


<h4><b>ORDER DETAILS</b></h4>

<table class="table">

	<thead style="background-color: orange; color: white;">

		<tr class="Text-left" style="">
			<th>Product name</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
		
	</thead>

	<tbody>
		@foreach($order->items as $item)
		<tr>
			<td scope="row">{{$item->name}}</td>
			<td>{{$item->pivot->quantity}}</td>
			<td>{{$item->pivot->price}}</td>
		</tr>
		@endforeach
	</tbody>
	
</table>

Total : {{$order->grand_total}}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent


Thanks for shopping with us,<br>
{{ config('app.name') }}
@endcomponent
