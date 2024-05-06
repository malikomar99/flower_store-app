
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Fruitkha</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <div id="app">
            <!--PreLoader-->
            <div class="loader">
                <div class="loader-inner">
                    <div class="circle"></div>
                </div>
            </div>
            <!--PreLoader Ends-->
            
            <!-- header -->
            <div class="top-header-area" id="sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <div class="main-menu-wrap">
                                <!-- logo -->
                                <div class="site-logo">
                                    <a href="/">
                                        <img src="assets/img/logo.png" alt="">
                                    </a>
                                </div>
                                <!-- logo -->
        
                                <!-- menu start -->
                                <nav class="main-menu">
                                    <ul>
                                        <li class="current-list-item"><a href="#">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Static Home</a></li>
                                                <li><a href="index_2.html">Slider Home</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="404.html">404 page</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="{{route('cart-page')}}">Cart</a></li>
                                                <li><a href="checkout.html">Check Out</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="news.html">News</a></li>
                                                <li><a href="shop.html">Shop</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="news.html">News</a>
                                            <ul class="sub-menu">
                                                <li><a href="news.html">News</a></li>
                                                <li><a href="single-news.html">Single News</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="checkout.html">Check Out</a></li>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="header-icons">
                                                <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                                <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                                <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                <div class="mobile-menu"></div>
                                <!-- menu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header -->
            
            <!-- search area -->
            <div class="search-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="close-btn"><i class="fas fa-window-close"></i></span>
                            <div class="search-bar">
                                <div class="search-bar-tablecell">
                                    <h3>Search For:</h3>
                                    <input type="text" placeholder="Keywords">
                                    <button type="submit">Search <i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end search area -->
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        {{-- <x-adminnavbar/> --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
