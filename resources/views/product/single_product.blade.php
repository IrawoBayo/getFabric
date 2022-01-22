<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="pe-7s-close" aria-hidden="true"></span>
        </button>
        <div class="modal-dialog modal-quickview-width" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="qwick-view-left">
                        <div class="quick-view-learg-img">
                            <div class="quick-view-tab-content tab-content">
                                <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                    <img src="<?php echo asset("storage/$product->cover_img")?>" alt="" id="{{$product->id}}">
                                </div>
                                <div class="tab-pane fade" id="modal2" role="tabpanel">
                                    <img src="<?php echo asset("storage/$product->cover_img")?>" alt="">
                                </div>
                                <div class="tab-pane fade" id="modal3" role="tabpanel">
                                    <img src="<?php echo asset("storage/$product->cover_img")?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qwick-view-right">
                        <div class="qwick-view-content">
                            <h3>{{$product->name}}</h3>
                            <div class="price">
                                <span class="new"><h4 style="color: green"> &#x20A6; {{$product->price * $currency->exchange_rate}} || <span style="font-size: 16px; color: #00b3b3;">$ {{$product->price}}</span></h4></span>
                            </div>
                            <!-- <div class="rating-number">
                                <div class="quick-view-rating">
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                    <i class="pe-7s-star"></i>
                                </div>
                                <div class="quick-view-number">
                                    <span>2 Ratting (S)</span>
                                </div>
                            </div> -->
                            <p>{{$product->description}}</p>
                            
                            <div class="quickview-plus-minus">
                                
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-white" href="{{route('cart.add', $product->id)}}">add to cart</a>
                                </div>
                                <div class="quickview-btn-wishlist">
                       

                                    <a class="animate-left" title="Wishlist" href="{{route('addToWishList', $product->id)}}" method="post">
                                    <i class="pe-7s-like"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    



<div class="col-3">

    <div class="product-wrapper product-border mb-24">

        <div class="product-img-3">

            <a href="">

                <img src="<?php echo asset("storage/$product->cover_img")?>" alt="">

            </a>

            <div class="product-action-right">

                <a class="" href="{{url('productDetail', $product->id)}}" title="Quick View">

                <i class="pe-7s-look"></i>

                </a>

                <a class="" title="Add To Cart" href="{{route('cart.add', $product->id)}}">

                <i class="pe-7s-cart"></i>

                </a>

                <a class="" title="Wishlist" href="{{route('addToWishList', $product->id)}}" method="post">

                    <i class="pe-7s-like"></i>

                </a>

            </div>

        </div>

        <div class="product-content-4 text-center">

            <!-- <div class="product-rating-4">

                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>

            </div> -->

                <h4 style="color: green"> &#x20A6; {{$product->price * $currency->exchange_rate}} || <span style="font-size: 16px; color: #00b3b3;">$ {{$product->price}}</span></h4>

                <h4><a href="product-details.html">{{$product->name}}</a></h4>
                
                

                    @if($product->stock == 0)

                        <div><span class="badge badge-danger text-white">Sold Out</span></div>

                    @elseif($product->stock > 0 && $product->stock <= 5)

                        <div><span class="badge badge-warning text-white">Limited Stock</span></div>
                                
                    @elseif($product->stock > 5)

                        <div><span class="badge badge-success"> In Stock</span></div>
                            
                    @endif


                



                            

        </div>

    </div>
    
</div>
                                                
        