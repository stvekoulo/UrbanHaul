   <!--==============================
    preloader
  ============================== -->
  <div class="preloader">
    <div class="preloader-inner">
        <div class="loading-window">
            <div class="car">
                <div class="strike"></div>
                <div class="strike strike2"></div>
                <div class="strike strike3"></div>
                <div class="strike strike4"></div>
                <div class="strike strike5"></div>
                <div class="car-detail spoiler"></div>
                <div class="car-detail back"></div>
                <div class="car-detail center"></div>
                <div class="car-detail center1"></div>
                <div class="car-detail front"></div>
                <div class="car-detail wheel"></div>
                <div class="car-detail wheel wheel2"></div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Mobile Menu
============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle "><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{route('home')}}"><img src="{{asset('urbanhaul/assets/img/logo.svg')}}" alt="Taxiar"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="{{route('home')}}">Acceuil</a>
                </li>
                <li>
                    <a href="about.html">About Us</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children"><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop Details</a></li>
                                <li><a href="cart.html">Cart Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li><a href="team.html">Driver</a></li>
                        <li><a href="team-details.html">Driver Details</a></li>
                        <li><a href="taxi.html">Taxi</a></li>
                        <li><a href="taxi-details.html">Taxi Details</a></li>
                        <li><a href="booking.html">Booking Ride</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="error.html">Error</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Sidemenu
============================== -->
<div class="sidemenu-wrapper shopping-cart d-none d-lg-block  ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget woocommerce widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="woocommerce-mini-cart cart_list product_list_widget">
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{asset('urbanhaul/assets/img/product/product_thumb_1_1.jpg')}}"
                                alt="Cart Image">Suspension-Coil</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>94</span>,
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{asset('urbanhaul/assets/img/product/product_thumb_1_2.jpg')}}" alt="Cart Image">absorbers
                            Brake</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>89</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{asset('urbanhaul/assets/img/product/product_thumb_1_3.jpg')}}"
                                alt="Cart Image">Motorcycle-Shock</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>75</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{asset('urbanhaul/assets/img/product/product_thumb_1_4.jpg')}}" alt="Cart Image">Body
                            Spring</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>72</span>
                        </span>
                    </li>
                    <li class="woocommerce-mini-cart-item mini_cart_item">
                        <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                        <a href="#"><img src="{{asset('urbanhaul/assets/img/product/product_thumb_1_5.jpg')}}" alt="Cart Image">Body
                            Spring</a>
                        <span class="quantity">1 ×
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>81</span>
                        </span>
                    </li>
                </ul>
                <p class="woocommerce-mini-cart__total total">
                    <strong>Subtotal:</strong>
                    <span class="woocommerce-Price-amount amount">
                        <span class="woocommerce-Price-currencySymbol">$</span>318.00</span>
                </p>
                <p class="woocommerce-mini-cart__buttons buttons">
                    <a href="cart.html" class="th-btn style1 wc-forward">View cart</a>
                    <a href="checkout.html" class="th-btn style1 checkout wc-forward">Checkout</a>
                </p>
            </div>
        </div>
    </div>
</div>
<!--==============================
Sidemenu
============================== -->
<div class="sidemenu-wrapper d-none d-lg-block  ">
    <div class="sidemenu-content bg-title">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget footer-widget">
            <h3 class="widget_title">About Company</h3>
            <div class="th-widget-about">
                <p class="footer-text">Centric aplications productize before front end vortals visualize front end
                    is results and value added</p>
                <h4 class="footer-info-title">WE ARE AVAILABLE</h4>
                <p class="footer-text">Mon-Sat: 09.00 am to 6.30 pm</p>
                <a href="contact.html" class="th-btn style3"><span class="btn-text">Contact Us</span></a>
            </div>
        </div>
        <div class="widget footer-widget">
            <h3 class="widget_title">Recent Posts</h3>
            <div class="recent-post-wrap">
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img src="{{asset('urbanhaul/assets/img/blog/recent-post-1-2.jpg')}}"
                                alt="Blog Image"></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="far fa-calendar-days"></i>22th May, 2023</a>
                        </div>
                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">How To Start Car
                                Engine Faster</a></h4>
                        <a class="line-btn" href="blog.html">Read More<i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img src="{{asset('urbanhaul/assets/img/blog/recent-post-1-3.jpg')}}"
                                alt="Blog Image"></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <a href="blog.html"><i class="far fa-calendar-days"></i>25th May, 2023</a>
                        </div>
                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">How to start car
                                engine slowly</a></h4>
                        <a class="line-btn" href="blog.html">Read More<i class="fa-regular fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget footer-widget">
            <h4 class="widget_title">Get Newsletter</h4>
            <div class="newsletter-widget">
                <p class="md-20">Sign up today for hints, tips & latest car overview and news</p>
                <form class="newsletter-form">
                    <input class="form-control" type="email" placeholder="Email Address" required="">
                    <button type="submit" class="newsletter-btn"><i class="fas fa-envelope"></i></button>
                </form>
                <div class="th-social  style2">
                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>

<!--==============================
Header Area
==============================-->
<header class="th-header header-layout7">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center gy-2">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fa-thin fa-envelope"></i><a
                                    href="mailto:info@taxiar.com">info@taxiar.com</a>
                            </li>
                            <li><i class="fa-thin fa-phone"></i><a href="tel:+468254762443">(+468) 254 762 443</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-right">
                        <div class="langauge">
                            <select class="form-select nice-select">
                                <option selected="">English</option>
                                <option>Hindi</option>
                            </select>
                        </div>
                        <div class="header-social">
                            <span class="social-title">Follow Us On:</span>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Menu -->
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{asset('urbanhaul/assets/img/logo3.svg')}}" alt="Taxiar"></a>
                        </div>
                    </div>
                    <div class="col-auto me-xl-auto">
                        <nav class="main-menu d-none d-lg-block">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home One </a></li>
                                        <li><a href="index-2.html">Home Two </a></li>
                                        <li><a href="index-3.html">Home Three </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="service.html">Service</a></li>
                                        <li><a href="service-details.html">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="#">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="team.html">Driver</a></li>
                                        <li><a href="team-details.html">Driver Details</a></li>
                                        <li><a href="taxi.html">Taxi</a></li>
                                        <li><a href="taxi-details.html">Taxi Details</a></li>
                                        <li><a href="booking.html">Booking Ride</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="error.html">Error</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="th-menu-toggle  d-inline-block d-lg-none"><i
                                class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <button type="button" class="icon-btn searchBoxToggler"><i
                                    class="far fa-search"></i></button>
                            <a href="#" class="icon-btn sideMenuToggler2"><i class="fa-regular fa-bag-shopping"></i>
                                <span class="badge">5</span></a>
                            <a href="#" class="icon-btn sideMenuToggler"><i class="far fa-bars"></i></a>

                            <a href="booking.html" class="th-btn">BOOK A TAXI<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logo-shape"><img src="{{asset('urbanhaul/assets/img/logo-shape.svg')}}" alt=""></div>
</header>
<!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper  hero-slider-7 th-carousel" data-slide-show="1" data-md-slide-show="1" data-fade="true"
    data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true">

    <div class="th-hero-slide">
        <div class="th-hero-bg " data-bg-src="{{asset('urbanhaul//assets/img/hero/hero_bg_1_1.jpg')}}">
            <img src="{{asset('urbanhaul/assets/img/hero/hero_overlay_1.png')}}" alt="Hero Image">
        </div>
        <div class="container">
            <div class="hero-style7">
                <span class="hero-subtitle" data-ani="slideinleft" data-ani-delay="0.1s">WELCOME TO TAXIAR</span>
                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">The Best Way To Get Around Town.
                </h1>
                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.4s">Online taxi service is a
                    convenient and affordable way to travel within a city or to nearby destinations. You can book a
                    cab online through various platforms.</p>
                <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.5s">
                    <a href="about.html" class="th-btn style3">Discover More <i
                            class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="th-hero-slide">
        <div class="th-hero-bg " data-bg-src="{{asset('urbanhaul/assets/img/hero/hero_bg_1_2.jpg')}}">
            <img src="{{asset('urbanhaul/assets/img/hero/hero_overlay_1.png')}}" alt="Hero Image">
        </div>
        <div class="container">
            <div class="hero-style7">
                <span class="hero-subtitle" data-ani="slideinleft" data-ani-delay="0.1s">Taxi Driver for Hire</span>
                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Need a Ride? Call us anytime!
                </h1>
                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.4s">Online taxi service is a
                    convenient and affordable way to travel within a city or to nearby destinations. You can book a
                    cab online through various platforms.</p>
                <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.5s">
                    <a href="about.html" class="th-btn style3">Discover More <i
                            class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="th-hero-slide">
        <div class="th-hero-bg " data-bg-src="{{asset('urbanhaul/assets/img/hero/hero_bg_1_3.jpg')}}">
            <img src="{{asset('urbanhaul/assets/img/hero/hero_overlay_1.png')}}" alt="Hero Image">
        </div>
        <div class="container">
            <div class="hero-style7">
                <span class="hero-subtitle" data-ani="slideinleft" data-ani-delay="0.1s">24/7 Online Taxi Booking
                    Service</span>
                <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">A different kind of taxi company
                </h1>
                <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.4s">Online taxi service is a
                    convenient and affordable way to travel within a city or to nearby destinations. You can book a
                    cab online.</p>
                <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.5s">
                    <a href="about.html" class="th-btn style3">Discover More <i
                            class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->
<!--==============================
Booking Area
==============================-->
<div class="booking-section">
    <div class="container">
        <form action="mail.php" method="POST" class="booking-form ajax-contact wow fadeInUp">
            <div class="input-wrap">
                <div class="row">
                    <div class="form-group col-xl-3 col-lg-4 col-sm-6">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        <i class="fa-light fa-user"></i>
                    </div>
                    <div class="form-group col-xl-3 col-lg-4 col-sm-6">
                        <input type="number" class="form-control" name="phone" id="phone"
                            placeholder="Phone Number">
                        <i class="fa-light fa-phone-rotary"></i>
                    </div>
                    <div class="form-group col-xl-3 col-lg-4 col-sm-6">
                        <select name="passenger" id="passenger" class="form-select nice-select">
                            <option value="" disabled selected hidden>passenger</option>
                            <option value="passenger1">passenger 1</option>
                            <option value="passenger2">passenger 2</option>
                            <option value="passenger3">passenger 3</option>
                            <option value="passenger4">passenger 4</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-3 col-lg-4 col-sm-6">
                        <input type="text" class="form-control" name="s-destination" id="s-destination"
                            placeholder="Start Destination">
                        <i class="fa-sharp fa-regular fa-location-dot"></i>
                    </div>
                    <div class="form-group col-xl-3 col-lg-4 col-sm-6">
                        <input type="text" class="form-control" name="e-destination" id="e-destination"
                            placeholder="End Destination">
                        <i class="fa-sharp fa-regular fa-location-dot"></i>
                    </div>
                    <div class="form-group col-xl-3 col-lg-4 col-sm-6">
                        <input type="text" class="date-pick form-control" name="date" id="date-pick"
                            placeholder="Select Date">
                        <i class="fa-light fa-calendar-days"></i>
                    </div>
                    <div class="form-group col-xl-3 col-lg-4 col-sm-6">
                        <input type="text" class="time-pick form-control" name="time" id="time-pick"
                            placeholder="Select Time">
                        <i class="fa-light fa-clock"></i>
                    </div>
                    <div class="form-btn col-xl-3 col-lg-4 col-sm-6">
                        <button class="th-btn">Book Taxi Now <i class="fa-regular fa-arrow-right"></i></button>
                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </div>
        </form>
    </div>
</div>
<!--==============================
About Area
==============================-
