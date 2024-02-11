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
            <a href="{{ route('welcome') }}"><img src="{{asset('urbanhaul/assets/img/logo.svg')}}" alt="Taxiar"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a href="{{ route('welcome') }}">Acceuil</a>
                </li>
                <li>
                    <a href="about.html">A propos</a>
                </li>
                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
            @if (Route::has('login'))
                @auth
                <i class="far fa-user">{{ Auth::user()->name}}</i>
                    <ul>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                @if (Route::has('register'))
                <button>
                    <a href="{{route('register')}}">S'inscrire</a>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-6 w-6"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="4"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"
                      ></path>
                    </svg>
                  </button>

                @endif
                @endauth
            @endif
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
                <a href="contact.html" class="th-btn style3"><span class="btn-text">Contact Us</span></a>
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
    <div class="top-area" data-bg-src="{{asset('urbanhaul/assets/img/bg/header_bg_1.png')}}">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-md-between align-items-center">
                    <div class="col-auto">
                        <p class="header-notice">Welcome to Taxiar Online Taxi Services</p>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        @if (Route::has('login'))
                        <div class="header-links">
                            <ul>
                                @auth
                                <li><i class="far fa-user"></i>{{ Auth::user()->name}}
                                    <ul>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a></li>
                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                @else
                                @if (Route::has('register'))
                                <li><i class="far fa-user"></i><a href="{{route('register')}}">S'inscrire</a></li>
                                @endif
                                @endauth
                            </ul>
                        </div>
                        @endif
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
                            <a href="{{ route('welcome') }}"><img src="{{asset('urbanhaul/assets/img/logo3.svg')}}" alt="Taxiar"></a>
                        </div>
                    </div>
                    <div class="col-auto me-xl-auto">
                        <nav class="main-menu d-none d-lg-block">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('welcome') }}">Acceuil</a>
                                </li>
                                <li>
                                    <a href="about.html">A propos</a>
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
                            <a href="#" class="icon-btn sideMenuToggler"><i class="far fa-bars"></i></a>

                            <a href="booking.html" class="th-btn">Trouver Un agent<i
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
                </div>
            </div>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->
<!--==============================
Booking Area
==============================-->
<!--==============================
About Area
==============================-
