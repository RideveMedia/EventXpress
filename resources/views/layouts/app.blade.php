<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
      <header id="header-sticky" class="header-1 header-2 header-3">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo">
                            <a href="{{ route('Home')  }}" class="header-logo">
                                <img src="./img/logo/white-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center mt-0">
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="{{ route('Home')  }}">
                                                    Home 
                                                </a>
                                            
                                            </li>
                                            <li class="has-dropdown active d-xl-none">
                                                <a href="{{ route('Home')  }}" class="border-none">
                                                Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="match-details.html">
                                                    Events
                                                </a>
                                            </li>
                                            <li class="has-dropdown">
                                                  <a href="{{ route('bookings') }}">
                                                    Bookings
                                                </a>
                                            </li>
                                            <li>
                                                <a href="Shop-details.html">
                                                    Shop
                                                </a>
                                           
                                            </li>
                                           <li>
                                                <a href="news-details.html">
                                                    Blog
                                                </a>
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
                                <a href="{{ route('contact') }}" class="gt-theme-btn">
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
            </div>
        </header>
    <!-- Page-specific content will appear here -->
    <div>
        @yield('content')
    </div>
     <footer class="gt-footer-section section-bg">
                <div class="container">
                    <div class="gt-footer-widget-wrapper">
                        <div class="row justify-content-between">
                            <div class="col-xl-4 col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <a href="index.html" class="gt-footer-logo">
                                            <img src="./img/logo/white-logo.svg" alt="img">
                                        </a>
                                    </div>
                                    <div class="gt-footer-content">
                                        <p>
                                           </p>
                                        <div class="gt-social-icon d-flex align-items-center">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <h5>Our Studio</h5>
                                    </div>
                                    <ul class="gt-list-area">
                                        <li>
                                            <a href="about.html">
                                                About Us
                                            </a>
                                        </li>
                                        <li>
                                            <a href="team.html">
                                                our team
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                Advertising
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                Legal Notices
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                Partnerships
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 ps-lg-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <h5>Utility Pages</h5>
                                    </div>
                                    <ul class="gt-list-area">
                                        <li>
                                            <a href="service-details.html">
                                                Terms of Service
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html">
                                                Privacy/Terms
                                            </a>
                                        </li>
                                        <li>
                                            <a href="service-details.html">
                                                Gift Cards
                                            </a>
                                        </li>
                                        <li>
                                            <a href="game-details.html">
                                                Event Reviews
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html">
                                                Subscriptions
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="gt-footer-widget-items">
                                    <div class="gt-widget-head">
                                        <h5>Download Our Application</h5>
                                    </div>
                                    <div class="gt-footer-app">
                                        <div class="app-image">
                                            <img src="./img/home-1/footer/app-1.jpg" alt="img">
                                        </div>
                                        <div class="app-image">
                                            <img src="./img/home-1/footer/app-2.jpg" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom wow fadeInUp" data-wow-delay=".3s">
                        <div class="footer-wrapper">
                            <p>© 2025 All Rights Reserved.</p>
                            <ul class="gt-footer-list wow fadeInUp" data-wow-delay=".3s">
                                <li>
                                    <a href="contact.html">Cookies</a>
                                </li>
                                <li>
                                    <a href="contact.html">Privacy</a>
                                </li>
                                <li>
                                    <a href="contact.html">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
</body>
</html>


