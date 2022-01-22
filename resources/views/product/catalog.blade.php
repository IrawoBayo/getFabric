@extends('layouts.frontview')
@extends('layouts.header1')





@section('content')

<div class="container" style="margin: auto; padding: 15%; text-align: center; margin-top: 7.5%;">

            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div id="address" class="active tab-block">

                        	<div class="shop-found">

                                <div class="badge badge-danger text-white" style="padding: 1%;">

                                <h5><span>({{$products->count()}})</span>&nbsp Product found</h5>
                            
                                </div>
                        		
                        	</div><br><br>

                            <div class="shop-product-content tab-content">

                                <div class="tab-pane fade active show" id="grid-sidebar1">

                                    <div class="row">

                                        @foreach ($products as $product)
                                        

                                            @include('product.single_product')

                                        
                                        @endforeach
                                        
                                    </div>

                                </div>

                            </div>
                            

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
	
</div>

@endsection