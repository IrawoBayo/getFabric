    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <!-- <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li> -->
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope" style="color: #cc6600;"></i><a href="" style="color: white;"><strong>hello@colorlib.com</strong></a> </li>
                                <li><a style="color: white;"><strong>Free Shipping for all Order in Okitipupa</strong></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>

                            <!-- Authentication Links -->
                            @guest
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>{{ __('My account') }}</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    @if (Route::has('register'))

                                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>

                                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @endif
                                        <li>
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li>
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif

                                        
                                </ul>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{route('home')}}"><img src="new/img/getfabric.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{ route('shops.create') }}">Register Shop</a></li>
                            <!-- <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <div class="header__cart__price"><a class="nav-link text-red" href="" data-toggle="modal" data-target="#ordertrack"><h6 style="color: #cc6600;">Track Order</h6></a></div>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-heart" style="color: #00b3b3;"></i> 
                                    <span style="background-color: #cc6600;">

                                        @auth
                                                    
                                            {{App\Wishlist_model::where('user_id', auth()->user()->id)->count()}}
                                        @else
                                            0
                                        @endauth

                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-shopping-bag" style="color: #00b3b3;"></i> 
                                    <span style="background-color: #cc6600;">

                                        @auth
                                        {{Cart::session(auth()->id())->getContent()->count()}}
                                        @else
                                        0
                                        @endauth

                                    </span>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Modal -->

    <div id="ordertrack" class="modal fade" role="dialog">

        <div class="modal-dialog">

            <!-- Modal -->
            <div class="modal-content">

                <div class="modal-header" style="background-color: #00b3b3; color: white; height: 40px">

                    <p class="modal-title text-white" style="font-size: 14px; "><strong>Track Your Order</strong></p>

                        <button class="close" type="button" data-dismiss="modal" style="font-size: 24px; color: white;">&times;</button>
                                    
                </div>

                <form method="post" action="{{ route('track.order') }}">

                    @csrf

                    <div class="modal-body">

                        <p>Track Order Now</p>

                            <input type="text" name="order_number" placeholder="Enter Order Number" class="form-control">
                                        
                    </div>

                    <div class="modal-footer" style="background-color: #00b3b3; color: white; height: 50px">

                        <button type="submit" name="" class="btn btn-success" style="font-size: 10px;">Track Now</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="font-size: 10px">Close</button>
                                        
                    </div>

                </form>
                                 
            </div>
                            
        </div>
                        
    </div>

<!-- end modal>
