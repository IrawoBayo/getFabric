<div class="container">
    <header>
            <div class="header-top-wrapper-2 border-bottom-2" style="background-color: purple; color: white; height: 50px">
                <div class="header-info-wrapper pl-200 pr-200">
                    <div class="header-contact-info">
                        <ul>
                            <li class="text-white" style="font-size: 12px"><i class="pe-7s-call"></i>+234 813 939 6164</li>
                            <li class="text-white" style="font-size: 12px"><i class="pe-7s-mail"></i> <a href="#" class="text-white">info@favorite77.com</a></li>
                        </ul>
                    </div>
                    <div class="electronics-login-register">
                        <ul style="font-size: 12px">
                            <li class="nav-item text-white">
                                    <a class="nav-link text-white" href="{{route('home')}}" style="padding-bottom: 15px">Home</a>
                            </li>
                            
                            <li class="nav-item text-white">
                                    <a class="nav-link text-white" href="" data-toggle="modal" data-target="#ordertrack">Track Order</a>
                            </li>

                            <!-- <li class="nav-item text-white">
                                    <a class="nav-link text-white" href="{{ route('shops.create') }}">Register New Shop</a>
                            </li> -->

                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item dropdown text-white">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white"  href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="pe-7s-users text-white"></i>
                                            {{ __('My account') }} <span class="caret"></span>
                                        </a>

                                        @if (Route::has('register'))

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                        @endif
                                    </li>


                                <ul class="nav-item dropdown text-white">
                                    <li class="nav-item text">
                                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                </ul>

                                @else
                                <li class="nav-item dropdown text-white">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="pe-7s-users text-white"></i>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                            <a class="nav-link" href="{{ route('shops.create') }}">Reg. New Shop</a>
                                        </div>
                                    </li>
                                @endguest
                        </ul>
                    </div>


                    


                </div>
            </div>

            <div class="header-bottom pt-40 pb-30 clearfix">
                <div class="header-bottom-wrapper pr-200 pl-200">
                    <div class="logo-3">
                        <a href="{{route('home')}}">
                            <img src="assets/img/logo/getfabric.png" alt="">
                        </a>
                    </div>

                    <div class="card-header" style="border-color: purple;">

                        <div class="categories-wrapper">
                            <form action="{{route('products.search')}}" method="get">
                              
                                <input placeholder="Enter Your key word" type="search" name="search">
                                <button type="submit"> Search </button>
                            </form>
                            
                        </div>

                        @if (session('status'))

                            <div class="alert alert-success" role="alert">

                                {{ session('status') }}
                                
                            </div>
                        @endif
                        

                    </div>

                    <div class="trace-cart-wrapper">
                        
                        <div class="trace same-style">
                            <div class="same-style-icon">
                                <a href="#"><i class="pe-7s-like"></i></a>
                            </div>
                            <div class="same-style-text">
                                <a href="{{url('WishList')}}">WishList
                                    <span class="badge badge-success">
                                        
                                        @auth
                                            
                                            {{App\Wishlist_model::where('user_id', auth()->user()->id)->count()}}
                                        @else
                                            0
                                        @endauth
                                        
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="categories-cart same-style">
                            <div class="same-style-icon">
                                <a href="#"><i class="pe-7s-cart text-success"></i></a>
                            </div>
                            <div class="same-style-text">
                                <a href="{{route('cart.index')}}">Cart <br>

                            <div class="badge badge-danger">

                                @auth
                                {{Cart::session(auth()->id())->getContent()->count()}}
                                @else
                                0
                                @endauth
                                
                            </div>
                                </a>

                            </div>

                        </div>
                    </div>

                    <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul class="menu-overflow">
                                    <li><a href="#">HOME</a>
                                        <ul>
                                            <li><a href="index.html">Fashion</a></li>
                                            <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                            <li><a href="index-fruits.html">Fruits</a></li>
                                            <li><a href="index-book.html">book</a></li>
                                            <li><a href="index-electronics.html">electronics</a></li>
                                            <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                            <li><a href="index-food.html">food & drink</a></li>
                                            <li><a href="index-furniture.html">furniture</a></li>
                                            <li><a href="index-handicraft.html">handicraft</a></li>
                                            <li><a href="index-smart-watch.html">smart watch</a></li>
                                            <li><a href="index-sports.html">sports</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about-us.html">about us</a></li>
                                            <li><a href="menu-list.html">menu list</a></li>
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="register.html">register</a></li>
                                            <li><a href="cart.html">cart page</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="">wishlist</a></li>
                                            <li><a href="">contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">shop</a>
                                        <ul>
                                            <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                            <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                            <li><a href="shop.html">grid 4 column</a></li>
                                            <li><a href="shop-grid-box.html">grid box style</a></li>
                                            <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                            <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                            <li><a href="shop-list-box.html">list box style</a></li>
                                            <li><a href="product-details.html">tab style 1</a></li>
                                            <li><a href="product-details-2.html">tab style 2</a></li>
                                            <li><a href="product-details-3.html"> tab style 3</a></li>
                                            <li><a href="product-details-4.html">sticky style</a></li>
                                            <li><a href="product-details-5.html">sticky style 2</a></li>
                                            <li><a href="product-details-6.html">gallery style</a></li>
                                            <li><a href="product-details-7.html">gallery style 2</a></li>
                                            <li><a href="product-details-8.html">fixed image style</a></li>
                                            <li><a href="product-details-9.html">fixed image style 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">NEW BLOG</a>
                                        <ul>
                                            <li><a href="blog.html">blog 3 colunm</a></li>
                                            <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                            <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=""> Contact </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <div class="row justify-content-center" >

            <form action="{{route('products.filter')}}" method="get">

                <input type="keyword" name="keyword" style="width: 25%; height: 80%" placeholder="Product Category">

                <input type="text" name="min_price" style="width: 25%; height: 80%" placeholder="Price From ($)">

                <input type="text" name="max_price" style="width: 25%; height: 80%" placeholder="Price To ($)">

                <input type="submit" name="submit" value="Filter Range" class="button-default"style="width: 20%; height: 30px; background-color: purple; color: white; padding-right: 2%;">
                            
            </form>
                        
        </div>


        <!-- Modal -->

                    <div id="ordertrack" class="modal fade" role="dialog">

                        <div class="modal-dialog">

                             <!-- Modal -->
                             <div class="modal-content">

                                <div class="modal-header" style="background-color: purple; color: white; height: 40px">

                                    <p class="modal-title text-white" style="font-size: 14px; padding-bottom: 5%"><strong>Track Your Order</strong></p>

                                    <button class="close" type="button" data-dismiss="modal" style="font-size: 24px">&times;</button>
                                    
                                </div>

                                <form method="post" action="{{ route('track.order') }}">

                                    @csrf

                                    <div class="modal-body">

                                        <p>Track Order Now</p>

                                        <input type="text" name="order_number" placeholder="Enter Order Number" class="form-control">
                                        
                                    </div>

                                    <div class="modal-footer" style="background-color: purple; color: white; height: 40px">

                                        <button type="submit" name="" class="btn btn-success" style="font-size: 10px">Track Now</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 10px">Close</button>
                                        
                                    </div>

                                </form>
                                 
                             </div>
                            
                        </div>
                        
                    </div>
</div>

                    <!-- end modal>

   