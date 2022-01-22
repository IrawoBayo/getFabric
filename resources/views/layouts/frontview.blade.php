<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="GETfabric">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GETfabric</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('new/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/style.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/album.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/owl.theme.default.min.css')}}">




    <link rel="stylesheet" href="{{asset('assets/dist/css/album.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dist/css/owl.theme.default.min.css')}}">




    <link rel="stylesheet" href="{{asset('assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bundle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slide222.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    @livewireStyles
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

<div class="container">
   
    

    @yield('content')

    
    



</div>

<!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-8 col-sm-8" style="padding-left: 10%">
                    <div class="footer__widget">
                            
                          <h6 style="color: white;"><strong>OUR SERVICES</strong></h6>
                        
                        <ul>
                            <li><a href="#" style="color: white;">Modelling</a></li>
                            <li><a href="#" style="color: white;">Airtime & Bills</a></li>
                            <li><a href="#" style="color: white;">Buy Data</a></li>
                            <li><a href="#" style="color: white;">Logistics</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-6 offset-lg-1" style="padding-left: 10%">
                    <div class="footer__widget">
                        <h6 style="color: white;"><strong>ABOUT GET FABRIC</strong></h6>
                        <ul>
                            <li><a href="#" style="color: white;">Privacy Policy</a></li>
                            <li><a href="#" style="color: white;">Terms & Conditions</a></li>
                            <li><a href="#" style="color: white;">Privacy Policy</a></li>
                            <li><a href="#" style="color: white;">Delivery infomation</a></li>
                            <li><a href="#" style="color: white;">Careers</a></li>
                            
                        </ul>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-8" style="padding-left: 10%">
                    <div class="footer__widget">
                        <h6 class="text-white"><strong>LET'S HELP YOU</strong></h6>
                        <ul>
                            <li style="color: white;"><a href="#" style="color: white;">Help Center</a></li>
                            <li style="color: white;"><a href="{{ url('contact') }}" style="color: white;">Contact Us</a></li>
                            <li style="color: white;"><a href="#" style="color: white;">Return a product</a></li>
                            <li style="color: white;"><a href="{{ url('requests') }}" style="color: white;">Can't find what you are looking for</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p style="color: #cc6600;"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!-- Copyright --> &copy;<script>document.write(new Date().getFullYear());</script>| All rights reserved <!-- | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib --></a>
</p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- all js here -->


<script src="new/js/jquery-3.3.1.min.js"></script>
    <script src="new/js/bootstrap.min.js"></script>

    <script src="new/js/main.js"></script>
  @livewireScripts



      <!-- all js here -->


    <script src="{{asset('new/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('new/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('new/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('new/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('new/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('new/js/mixitup.min.js')}}"></script>
    <script src="{{asset('new/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('new/js/main.js')}}"></script>


  <script src="{{asset('assets/dist/js1/jquery-3.3.1.min.js')}}"></script>

 
  <script src="{{asset('assets/dist/js1/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/dist/js1/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/dist/js1/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/dist/js1/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/dist/js1/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/dist/js1/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assets/dist/js1/aos.js')}}"></script>

  <script src="{{asset('assets/dist/js1/main.js')}}"></script>






    <script src="{{asset('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/ajax-mail.js')}}"></script>
  <script src="{{asset('assets/js/plugins.js')}}"></script>

  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

    <style>
        .mySlides {display:none;}
    </style>


    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > x.length) {slideIndex = 1}
          x[slideIndex-1].style.display = "block";
          setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>





</html>