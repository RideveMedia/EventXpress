@extends('layouts.app')

@section('title', 'Bookings | EventXpress')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <!--<< Header Area >>-->
    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Gramentheme">
        <meta name="description" content="Xriders - Riders & Sports Club HTML Template">
        <!-- ======== Page title ============ -->
        <title>Xports - Gaming and eSports Theme HTML Template</title>
        <!--<< Favcion >>-->
        <link rel="shortcut icon" href="./img/favicon.svg">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!--<< All Min Css >>-->
        <link rel="stylesheet" href="./css/all.min.css">
        <!--<< Animate.css >>-->
        <link rel="stylesheet" href="./css/animate.css">
        <!--<< Magnific Popup.css >>-->
        <link rel="stylesheet" href="./css/magnific-popup.css">
        <!--<< MeanMenu.css >>-->
        <link rel="stylesheet" href="./css/meanmenu.css">
        <!--<< Swiper Bundle.css >>-->
        <link rel="stylesheet" href="./css/swiper-bundle.min.css">
        <!--<< Nice Select.css >>-->
        <link rel="stylesheet" href="./css/nice-select.css">
        <!--<< Icomon.css >>-->
        <!-- <link rel="stylesheet" href="./css/icomon.css"> -->
        <!--<< Main.css >>-->
        <link rel="stylesheet" href="./css/main.css">

        <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    </head>
    <body>

        <!-- Preloader Start -->
        <div id="preloader" class="preloader">
            <div class="animation-preloader">
                <div class="spinner">                
                </div>
                <div class="txt-loading">
                    <span data-text-preloader="X" class="letters-loading">
                        X
                    </span>
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>  

        <!-- GT Back To Top Start -->
        <button id="gt-back-top" class="gt-back-to-top show">
            <i class="fa-regular fa-arrow-up"></i>
        </button>

        <!-- GT MouseCursor Start -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>
        
        <!-- Offcanvas Area Start -->
        <div class="fix-area">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="./img/logo/white-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <p class="text d-none d-xl-block">
                            Rideve Media is a Lusaka-based creative powerhouse dedicated to crafting impactful, high-quality brand experiences. As a full-service 360° marketing and advertising agency, we specialize in bringing stories to life through immersive design, digital innovation, and cultural relevance. Our team blends strategy, artistry, and cutting-edge technology to create work that resonates deeply with audiences—whether through striking visuals, compelling narratives, interactive campaigns, or unforgettable live events.
                        <div class="mobile-menu fix mb-3"></div>
                        </p>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Lusaka,Zambia</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="mailto:info@example.com"><span class="mailto:info@example.com">info@ridevemedia.com</span></a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank" href="#">Mod-friday, 09am -05pm</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+11002345909">+260 021 1356946</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>

        <!-- Header Section Start -->
        <header id="header-sticky" class="header-1 header-2 header-3">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo">
                            <a href="index.html" class="header-logo">
                                <img src="./img/logo/white-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center mt-0">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="index.html">
                                                    Home 
                                                </a>
                                                <ul class="submenu has-homemenu">
                                                    <li>
                                                        <div class="homemenu-items">
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb">
                                                                    <img src="./img/header/home-1.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index.html" class="gt-theme-btn">
                                                                            Multi Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                       Home 01
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="./img/header/home-2.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-2.html" class="gt-theme-btn">
                                                                            Multi Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Home 02
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="./img/header/home-3.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-3.html" class="gt-theme-btn">
                                                                            Multi Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Gaming Studio
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="./img/header/home-4.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-4.html" class="gt-theme-btn">
                                                                            Multi Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Gamer
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="homemenu">
                                                                <div class="homemenu-thumb mb-15">
                                                                    <img src="./img/header/home-5.jpg" alt="img">
                                                                    <div class="demo-button">
                                                                        <a href="index-5.html" class="gt-theme-btn">
                                                                            Multi Page
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="homemenu-content text-center">
                                                                    <h4 class="homemenu-title">
                                                                        Gaming News
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown active d-xl-none">
                                                <a href="index.html" class="border-none">
                                                Home
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="index.html">Home 01</a></li>
                                                    <li><a href="index-2.html">Home 02</a></li>
                                                    <li><a href="index-3.html">Gaming Studio</a></li>
                                                    <li><a href="index-4.html">Gamer</a></li>
                                                    <li><a href="index-5.html">Gaming News</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="match-details.html">
                                                    Events
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="match.html">matches Page</a></li>
                                                    <li><a href="match-details.html">matches Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="news-details.html">
                                                    Bookings
                                                </a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="about.html">About Us</a>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="service-details.html">
                                                            Our Service
                                                            <i class="fas fa-angle-right"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="service.html">Our Services</a></li>
                                                            <li><a href="service-details.html">Service Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="game-details.html">
                                                            Our Games
                                                            <i class="fas fa-angle-right"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="game.html">Our Games</a></li>
                                                            <li><a href="game-details.html">Game Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                        <a href="team-details.html">
                                                            Our Team
                                                            <i class="fas fa-angle-right"></i>
                                                        </a>
                                                        <ul class="submenu">
                                                            <li><a href="team.html">Our Team</a></li>
                                                            <li><a href="team-details.html">Team Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="testimonial.html">Testimonial</a></li>
                                                    <li><a href="gallery.html">epic gallery</a></li>
                                                    <li><a href="pricing.html">Our Pricing</a></li>
                                                    <li><a href="faq.html">Our Faq</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="Shop-details.html">
                                                    Shop
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="shop.html">Shop Page</a></li>
                                                    <li><a href="shop-cart.html">Shop Cart</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                           <li>
                                                <a href="news-details.html">
                                                    Blog
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="news-grid.html">Blog Grid</a></li>
                                                    <li><a href="news.html">Blog Standard</a></li>
                                                    <li><a href="news-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact Us</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-right-icon">
                                <a href="#" class="main-header__search search-toggler">
                                    <i class="fa-regular fa-magnifying-glass"></i>
                                </a>
                                <a href="shop-cart.html">
                                    <i class="far fa-shopping-cart"></i>
                                </a>
                            </div>
                           <div class="header-button">
                                <a href="contact.html" class="gt-theme-btn">
                                    get in touch
                                </a>
                            </div>
                            <div class="header__hamburger d-xl-block my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
    <h2>Booking Confirmed!</h2>
    <p>Your booking ID: {{ $id }}</p>
    <p>Show this QR code at the event:</p>
    {!! QrCode::size(200)->generate(route('bookings.confirm', ['id' => $id])); !!}
</div>
            </div>
        </header>

@endsection
