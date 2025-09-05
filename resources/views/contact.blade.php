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
    rel="stylesheet"/>
    </head>
</head>

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
<section class="gt-contact-us-section section-padding fix">
            <div class="container">
                <div class="gt-contact-us-wrapper">
                    <div class="row g-4">
                        <div class="col-lg-8">
                            <div class="gt-comment-form-wrap">
                                <h4>We're Here to Help!</h4>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form action="contact.php" id="contact-form" method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Your Name</span>
                                                <input type="text" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <span>Your Email</span>
                                                <input type="text" name="email" id="email6" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <span>write message</span>
                                                <textarea name="message" id="message" placeholder="Type your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="gt-theme-btn">
                                                 post comments
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="gt-contact-bg bg-cover" style="background-image: url(assets/img/inner-page/match-details/bg.jpg);">
                                <div class="gt-contact-content">
                                    <h3>Need Any Help</h3>
                                    <p>For Help, Call Us  24/7 Full Support</p>
                                    <div class="gt-contact-item">
                                        <div class="gt-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <ul class="gt-list">
                                            <li><span>Call Us:</span></li>
                                            <li><a href="tel:+0094382229540">+260 021 1356946</a></li>
                                        </ul>
                                    </div>
                                    <div class="gt-contact-item">
                                        <div class="gt-icon">
                                            <i class="fa-regular fa-envelope"></i>
                                        </div>
                                        <ul class="gt-list">
                                            <li><span>Mail Us</span></li>
                                            <li><a href="infor@xridergamil.com">
                                                info@ridevemedia.com
                                            </a></li>
                                        </ul>
                                    </div>
                                    <div class="gt-contact-item mb-0">
                                        <div class="gt-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <ul class="gt-list">
                                            <li><span>Location:</span></li>
                                            <li>Lusaka,Zambia</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GT Map Section Start -->
        <div class="gt-map-section section-padding fix pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="gt-map-items">
                            <div class="googpemap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3847.0972652957466!2d28.39290847536218!3d-15.371217785211673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f56d007c715f%3A0xa5f2509642ca55d4!2sRideve%20Media!5e0!3m2!1sen!2sbd!4v1756910239461!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>