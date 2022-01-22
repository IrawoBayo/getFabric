@extends('layouts.frontview')
@extends('layouts.header1')



@section('content')



    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <div class="category-menu-list">
                            <ul>
                                @foreach($categories as $category)

                            <li>

                                <a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}<i class="pe-7s-angle-right"></i></a>

                                @php

                                    $children = TCG\Voyager\Models\Category::where('parent_id', $category->id)->get();

                                @endphp

                                @if($children->isNotEmpty())

                                    <div class="category-menu-dropdown">

                                        @foreach ($children as $child)

                                            <div class="category-dropdown-style category-common3">

                                                <h4 class="categories-subtitle">
                                                    <a href="{{route('products.index', ['category_id' => $category->id])}}">{{$child->name}}</a></h4>

                                                @php

                                                    $grandChild = TCG\Voyager\Models\Category::where('parent_id', $child->id)->get();

                                                @endphp

                                                @if($grandChild->isNotEmpty())

                                                    <ul>
                                                        
                                                        @foreach ($grandChild as $c)

                                                        <li><a href="{{route('products.index', ['category_id' => $category->id])}}">{{ $c->name }}</a></li>

                                                        @endforeach
                                                        
                                                    </ul>

                                                @endif

                                            </div>

                                        @endforeach

                                    </div>

                                @endif

                            </li>
                            
                            

                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{route('products.search')}}">
                                <div class="hero__search__categories">
                                    By Categories
                                </div>
                                <input type="search" name="search" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">S e a r c h</button>
                            </form>
                        </div>
                    </div>
                    <!-- image slider starts here                -->
    
                        <div class="owl-carousel slide-one-item">
                              <a href="#"><img src="assets/dist/img/banner1.jpg" alt="Image" class="img-fluid"></a>
                              <a href="#"><img src="assets/dist/img/banner2.jpg" alt="Image" class="img-fluid"></a>
                              <a href="#"><img src="assets/dist/img/banner3.jpg" alt="Image" class="img-fluid"></a>
                              <a href="#"><img src="assets/dist/img/banner4.jpg" alt="Image" class="img-fluid"></a>
                              <a href="#"><img src="assets/dist/img/slide 5.jpg" alt="Image" class="img-fluid"></a>
                        </div>

                <!-- image slider ends here                -->
                </div>
            </div>
        </div>


    </section>
    

    <!-- Categories Section Begin -->
    <section class="categories" style=" margin-top: 5%;">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="new/img/categories/Ankara2.jpeg">
                            <h5><a href="#" style="color: white; background-color: #00b3b3;">Ankara (Ghana)</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="new/img/categories/Ankara3.jpeg">
                            <h5><a href="#" style="color: white; background-color: #00b3b3;">Ankara (Daviva)</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="new/img/categories/Ankara4.jpg">
                            <h5><a href="#" style="color: white; background-color: #00b3b3;">Ankara (Cote di'voir)</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="new/img/categories/Ankara10.jpeg" style="background-color: ">
                            <h5><a href="#" style="color: white; background-color: #00b3b3;">Kampala</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="new/img/categories/lace1.jpg">
                            <h5><a href="#" style="color: white; background-color: #00b3b3;">Net Lace</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <section>

                <!-- Beginning of Filter -->
        <div class="container">

            <div class="hero__search" style="margin-left: 10%; margin-top: 5%;">
                <div class="hero__search__form">
                    <form action="{{route('products.filter')}}" method="get">
                                
                        <input type="keyword" name="keyword" placeholder="Category" style="width: 35%;">
                                
                        <input type="text" name="min_price"placeholder="Min Price ($)" style="width: 23%;">

                        <input type="text" name="max_price" style="width: 22%;" placeholder="Max Price ($)">
                        
                        <button type="submit" class="site-btn" style="background-color: #cc6600;">F i l t e r</button>
                    </form>
                </div>
            </div>

            
            
        </div>
        <!-- End of Filter -->

        <div class="container"><br><br>

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
    
    </section>

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>All Products</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*" style="color: #00b3b3;">All</li>
                            <li data-filter=".oranges" style="color: #00b3b3;">Ankara</li>
                            <li data-filter=".fresh-meat" style="color: #00b3b3;">Lace</li>
                            <li data-filter=".vegetables" style="color: #00b3b3;">Silk</li>
                            <li data-filter=".fastfood" style="color: #00b3b3;">Kampala</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($allProducts as $product)

                <div class="col-lg-3 col-md-4 col-sm-12 mix oranges fresh-meat">
                    
                    <div class="featured__item">
                            
                            <div class="featured__item__pic set-bg">
                                
                                <ul class="featured__item__pic__hover">
                                    <a href="">
                                        <img src="<?php echo asset("storage/$product->cover_img")?>" alt="" height="200">
                                    </a><br>
                                    <li><a title="Wishlist" href="{{route('addToWishList', $product->id)}}" method="post" style="background-color: #00b3b3;"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{url('productDetail', $product->id)}}" style="background-color: #00b3b3;"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="{{route('cart.add', $product->id)}}" style="background-color: #00b3b3;"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="#">{{$product->name}}</a></h6>
                                @if($product->stock == 0)

                                    <div><span class="badge badge-danger text-white">Sold Out</span></div>

                                @elseif($product->stock > 0 && $product->stock <= 5)

                                    <div><span class="badge badge-warning text-white">Limited Stock</span></div>
                                            
                                @elseif($product->stock > 5)

                                    <div><span class="badge badge-success"> In Stock</span></div>
                                        
                                @endif
                                <h5>&#x20A6; {{$product->price * $currency->exchange_rate}} || <span style="font-size: 16px; color: purple">$ {{$product->price}}</h5>
                                
                            </div>
                                                    
                        
                        
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection


