<!doctype html>
<html lang="en" >


<head>
  @include('includes.landing.head')

</head>

<body>
   
  <header class="oppi_header oppi_header_transparent oppi_menu_center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <nav class="navbar navbar-expand-lg header_nav">
                    <a class="navbar-brand logo" href="/">
                        <img src="{{asset('landing/images/logo.png')}}" alt="logo">
                        <img src="{{asset('landing/images/logo-color.png')}}" alt="logo">
                    </a>
                    <button class="navbar-toggler oppi_hamburger" type="button" data-toggle="collapse" data-target="#oppi_header_menu" aria-expanded="false">
                        <span class="bar_icon">
                            <span class="bar bar_1"></span>
                            <span class="bar bar_2"></span>
                            <span class="bar bar_3"></span>
                        </span>
                    </button>

                    <div class="collapse navbar-collapse oppi_header_menu" id="oppi_header_menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item active dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Home </a>
                                <ul class="dropdown-menu">
                                    <li><a href="home_business_apps.html">Home Business Apps</a></li>
                                    <li><a href="home_education_apps.html">Home education Apps</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">login</a>
                            </li>
                        </ul>
                        <a class="oppi_try_for_free oppi_btn_right " href="{{ route('register') }}">Sign Up Free</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
    

 @yield('content')
 <footer class="oppi_footer_wrap oppi_finance_footer">
  @include('includes.landing.footer')
    </footer>
    <!-- oppi_footer_wrap -->

    <script src="{{asset('landing/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('landing/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('landing/vendors/slick/slick.min.js')}}"></script>
    <script src="{{asset('landing/vendors/simple-icon/iconify.min.js')}}"></script>
    <script src="{{asset('landing/vendors/wow/wow.min.js')}}"></script>
    <script src="{{asset('landing/vendors/flex/js/jquery.flexslider.js')}}"></script>
    <script src="{{asset('landing/vendors/sckroller/jquery.parallax-scroll.js')}}"></script>
    <script src="{{asset('landing/vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('landing/vendors/isotope/isotope-min.js')}}"></script>
    <script src="{{asset('landing/vendors/magnify-pop/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('landing/vendors/sckroller/jquery.parallax-scroll.js')}}"></script>
    <script src="{{asset('landing/vendors/stellar/jquery.stellar.js')}}"></script>
    <script src="{{asset('landing/js/main.js')}}"></script>
 
    
    




    
</body>


</html>
