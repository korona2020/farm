<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>ZereFarm</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/favicon.ico')}}">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/classy-nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">


    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
</head>

<body>
<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Top Header Content -->
                        <div class="top-header-meta">
                            <p>Welcome to <span>ZereFarm</span>, we hope you will enjoy our products and have good experience</p>
                        </div>
                        <!-- Top Header Content -->
                        <div class="top-header-meta text-right">
                            <!--

                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +84 223 9000</span></a>
                            -->
                            <a href="https://api.whatsapp.com/send?phone=355685433123" data-toggle="tooltip" data-placement="bottom" title="">
                                <img src="{{asset('img/socialm/wapp.png')}}" alt="">
                            </a>
                            <a href="https://www.instagram.com/zere_farm" data-toggle="tooltip" data-placement="bottom" title="">
                                <img src="{{asset('img/socialm/fb.png')}}" alt="">
                            </a>
                            <a href="https://www.instagram.com/zere_farm" data-toggle="tooltip" data-placement="bottom" title="">
                                <img src="{{asset('img/socialm/insta.ico')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="famieNav">
                    <!-- Nav Brand -->
                    @auth
                        <a href="{{route('home')}}" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
                    @else
                        <a href="{{route('welcome')}}" class="nav-brand"><img src="img/core-img/logo.png" alt=""></a>
                    @endauth
                        <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Navbar Start -->
                        <div class="classynav">
                            <ul class="menunav">
                                <li class="active"><a href="{{route('welcome')}}">Home</a></li>
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="farming-practice.html">Farming Practice</a></li>
                                        <li><a href="shop.html">Shop</a>
                                            <ul class="dropdown">
                                                <li><a href="our-product.html">Our Products</a></li>
                                                <li><a href="shop.html">Shop</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="news.html">News</a>
                                            <ul class="dropdown">
                                                <li><a href="news.html">News</a></li>
                                                <li><a href="news-details.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="our-product.html">Our Product</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                @auth
                                    <li>
                                        <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                                @else
                                    <li><a href="{{route('register')}}">Register</a></li>
                                    <li><a href="{{route('login')}}">Login</a></li>
                                @endauth

                            </ul>
                            <!-- Search Icon -->
                            <div id="searchIcon">
                                <i class="icon_search" aria-hidden="true"></i>
                            </div>
                            <!-- Cart Icon -->
                            <div id="cartIcon">
                                <a href="#">
                                    <i class="icon_cart_alt" aria-hidden="true"></i>
                                    <span class="cart-quantity">2</span>
                                </a>
                            </div>
                        </div>
                        <!-- Navbar End -->
                    </div>
                </nav>

                <!-- Search Form -->
                <div class="search-form">
                    <form action="#" method="get">
                        <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                        <button type="submit" class="d-none"></button>
                    </form>
                    <!-- Close Icon -->
                    <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

@yield('content')



@include('partials.footer')
<!-- ##### All Javascript Files ##### -->
<!-- jquery 2.2.4  -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel js -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Classynav -->
<script src="{{asset('js/classynav.js')}}"></script>
<!-- Wow js -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- Sticky js -->
<script src="{{asset('js/jquery.sticky.js')}}"></script>
<!-- Magnific Popup js -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Scrollup js -->
<script src="{{asset('js/jquery.scrollup.min.js')}}"></script>
<!-- Jarallax js -->
<script src="{{asset('js/jarallax.min.js')}}"></script>
<!-- Jarallax Video js -->
<script src="{{asset('js/jarallax-video.min.js')}}"></script>
<!-- Active js -->
<script src="{{asset('js/active.js')}}"></script>


</body>
</html>
