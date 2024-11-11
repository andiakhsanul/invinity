<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Invinity</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo2.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area ">
                <div class="container-fluid p-0">
                    <div class="row align-items-center justify-content-between no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a style="color: white; font-size:large; font-weight: 600; font-family:poppins"
                                    href="#">
                                    <img style="max-height: 60px; width: auto;" src="img/logo2.png" alt="">
                                    Invinity
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('landing') }}">Home</a></li>
                                        <li><a href="#">About<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('commite') }}">Commite</a></li>
                                                <li><a href="{{ route('about') }}">This is invinity</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Conference <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('seminar.index') }}">Register</a></li>
                                            </ul </li>
                                        <li><a href="#">Call Paper<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('paper') }}">Submission</a></li>
                                                <li><a href="{{ route('guide') }}">Guide Paper</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pass conference<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#">INVINITY 2025</a></li>
                                                <li><a href="#">INVINITY 2024</a></li>
                                            </ul>
                                        </li>
                                        @auth
                                            @if (Auth::user()->role === 1)
                                                <li><a href="{{ route('dashboard') }}">Dashboard Admin</a></li>
                                            @endif
                                        @endauth
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-2 d-none d-lg-block">
                            @auth
                                <div class="buy_ticket">
                                    <a href="{{ route('auth.logout') }}" class="text-white">{{ Auth::user()->name }}</a>
                                </div>
                            @endauth
                            @guest
                                <div class="buy_ticket">
                                    <a href="{{ route('auth.login') }}" class="boxed-btn-white">Login</a>
                                </div>
                            @endguest
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
