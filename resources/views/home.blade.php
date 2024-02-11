@extends('layouts.opus')

@section('content')
        <!--==============================
About Area
==============================-->
<div class="space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mb-5 mb-xl-0">
                <div class="img-box7 wow fadeInLeft">
                    <div class="img1">
                        <img src="{{asset('urbanhaul/assets/img/normal/about_1_1.jpg')}}" alt="About">
                    </div>
                    <div class="img2">
                        <img src="{{asset('urbanhaul/assets/img/normal/about_1_2.jpg')}}" alt="About">
                    </div>
                    <div class="journey-box">
                        <h3 class="journey-title">Started Journey</h3>
                        <span class="journey-year">1986</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="ps-xxl-5 ms-xl-4 wow fadeInRight">
                    <div class="title-area mb-20">
                        <span class="sub-title">ABOUT OUR COMPANY</span>
                        <h2 class="sec-title">Wherever You Need To Go We'll Take You There.</h2>
                    </div>
                    <p class="mb-30">Authoritatively simplify open-source resources via
                        backend
                        visualize business e-markets before parallel convergence optimize sticky and idea-sharing
                        rather
                        than unique solutions.</p>
                    <div class="journey-wrap style2">
                        <div class="journey-image">
                            <img src="{{asset('urbanhaul/assets/img/normal/map.jpg')}}" alt="">
                        </div>
                        <div class="checklist">
                            <ul>
                                <li>Easy & Emergency Solutions Anytime</li>
                                <li>Getting Affordable price upto 2 years</li>
                                <li>More Reliable & Experienced Teams</li>
                            </ul>
                        </div>
                    </div>
                    <a href="about.html" class="th-btn"><span class="btn-text">Discover More<i
                                class="fa-regular fa-arrow-right ms-2"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Service Area
==============================-->
<section class="ser-area bg-smoke overflow-hidden space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-xl-6">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title">Our Services</span>
                    <h2 class="sec-title">Best Taxi Services For You</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slick-prev="#serviceSlide" class="slick-arrow default"><i
                                class="far fa-arrow-left"></i></button>
                        <button data-slick-next="#serviceSlide" class="slick-arrow default"><i
                                class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row slider-shadow th-carousel" id="serviceSlide" data-slide-show="3" data-lg-slide-show="3"
            data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1">

            <div class="col-md-6 col-lg-4 col-xl-3  ">
                <div class="service-item wow fadeInUp" data-bg-src="{{asset('urbanhaul/assets/img/service/service_shape_1.jpg')}}')}}">
                    <div class="service-item_img">
                        <img src="{{asset('urbanhaul/assets/img/service/service-6-1.jpg')}}" alt="service image">
                    </div>
                    <div class="service-item_content">
                        <h3 class="service-item_title"><a href="service-details.html">Rapid City Transfer</a></h3>
                        <p class="service-item_text">Rapid city transfer is a term used by some taxi or cab services
                            to describe their service of bringing.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3  ">
                <div class="service-item wow fadeInUp" data-bg-src="{{asset('urbanhaul/assets/img/service/service_shape_1.jpg')}}')}}">
                    <div class="service-item_img">
                        <img src="{{asset('urbanhaul/assets/img/service/service-6-2.jpg')}}" alt="service image">
                    </div>
                    <div class="service-item_content">
                        <h3 class="service-item_title"><a href="service-details.html">Online Booking</a></h3>
                        <p class="service-item_text">Online taxi service is a convenient and affordable way to
                            travel within a city or to nearby destinations.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3  ">
                <div class="service-item wow fadeInUp" data-bg-src="{{asset('urbanhaul/assets/img/service/service_shape_1.jpg')}}">
                    <div class="service-item_img">
                        <img src="{{asset('urbanhaul/assets/img/service/service-6-3.jpg')}}" alt="service image">
                    </div>
                    <div class="service-item_content">
                        <h3 class="service-item_title"><a href="service-details.html">Airport Transport</a></h3>
                        <p class="service-item_text">It can include different types of vehicles, such as taxis, car
                            hire, airport transfers, airport shuttles, airport buses, etc.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 col-xl-3  ">
                <div class="service-item wow fadeInUp" data-bg-src="{{asset('urbanhaul/assets/img/service/service_shape_1.jpg')}}">
                    <div class="service-item_img">
                        <img src="{{asset('urbanhaul/assets/img/service/service-6-4.jpg')}}" alt="service image">
                    </div>
                    <div class="service-item_content">
                        <h3 class="service-item_title"><a href="service-details.html">Business Transport</a></h3>
                        <p class="service-item_text">Business transport refers to the transportation services and
                            methods used by businesses to move goods, equipment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-none d-xxl-block" data-top="0%" data-right="-0.5%"><img
            src="{{asset('urbanhaul/assets/img/normal/service_shape_1.png')}}" alt="shapes"></div>
</section>
<!--==============================
Team Area
==============================-->
<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Team Members<span class="double-line"></span></span>
            <h2 class="sec-title">Our Expert Drivers</h2>
        </div>
        <div class="row slider-shadow th-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
            data-sm-slide-show="2" data-arrows="true">
            <!-- Single Item -->
            <div class="col-md-6 col-lg-4">
                <div class="team-item wow fadeInUp">
                    <div class="team-img">
                        <img src="{{asset('urbanhaul/assets/img/team/team_1_1.jpg')}}" alt="Team">
                    </div>
                    <div class="team-item_content">
                        <h3 class="team-item_title">Sophia Isabella</h3>
                        <span class="team-item_desig">Expert Driver</span>
                        <div class="th-social team-social">
                        </div>
                    </div>
                    <div class="info-item">
                        <h3 class="team-item_title">Sophia Isabella</h3>
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-md-6 col-lg-4">
                <div class="team-item wow fadeInUp">
                    <div class="team-img">
                        <img src="{{asset('urbanhaul/assets/img/team/team_1_2.jpg')}}" alt="Team">
                    </div>
                    <div class="team-item_content">
                        <h3 class="team-item_title">Emma Margaret</h3>
                        <span class="team-item_desig">Senior Driver</span>
                        <div class="th-social team-social">
                        </div>
                    </div>
                    <div class="info-item">
                        <h3 class="team-item_title">Emma Margaret</h3>
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-md-6 col-lg-4">
                <div class="team-item wow fadeInUp">
                    <div class="team-img">
                        <img src="{{asset('urbanhaul/assets/img/team/team_1_3.jpg')}}" alt="Team">
                    </div>
                    <div class="team-item_content">
                        <h3 class="team-item_title">Jacob Michael</h3>
                        <span class="team-item_desig">Junior Driver</span>
                        <div class="th-social team-social">
                    </div>
                    </div>
                    <div class="info-item">
                        <h3 class="team-item_title">Jacob Michael</h3>
                    </div>
                </div>
            </div>
            <!-- Single Item -->
            <div class="col-md-6 col-lg-4">
                <div class="team-item wow fadeInUp">
                    <div class="team-img">
                        <img src="{{asset('urbanhaul/assets/img/team/team_1_4.jpg')}}" alt="Team">
                    </div>
                    <div class="team-item_content">
                        <h3 class="team-item_title">Mason Robert</h3>
                        <span class="team-item_desig">Senior Driver</span>
                        <div class="th-social team-social">
                        </div>
                    </div>
                    <div class="info-item">
                        <h3 class="team-item_title">Mason Robert</h3>
                    </div>
                </div>
            </div>
            <!-- Single Item -->
        </div>
    </div>
</section>
<!--==============================
Taxi Area
==============================-->

<!--==============================
Download Area
==============================-->

<section class="download-area3 overflow-hidden space-top" data-bg-src="{{asset('urbanhaul/assets/img/bg/download_bg_3.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 text-center text-xl-start wow fadeInLeft">
                <div class="title-area mb-30">
                    <span class="sub-title">Download Taxiar App Now</span>
                    <h2 class="sec-title text-capitalize">Get A Free Taxiar App From Online Store</h2>
                    <p class="sec-text">Competently re-engineer cross-media meta-services whereas best of breed
                        processes matrix just in time content...</p>
                </div>
                <div class="download-btn-wrap style2">
                    <a target="_blank" href="https://play.google.com/" class="download-btn">
                        <i class="fa-brands fa-google-play"></i>
                        <div class="text-group">
                            <span class="small-text">Download From</span>
                            <h6 class="big-text">Google Play</h6>
                        </div>
                    </a>
                    <a target="_blank" href="https://www.apple.com/store" class="download-btn style2">
                        <i class="fa-brands fa-apple"></i>
                        <div class="text-group">
                            <span class="small-text">Download From</span>
                            <h6 class="big-text">App Store</h6>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="download-image wow fadeInRight">
                    <img src="{{asset('urbanhaul/assets/img/bg/phone_1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Feature Area
==============================-->
<div class="feature-area  " data-bg-src="{{asset('urbanhaul/assets/img/bg/counter_bg_2.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5">
                <div class="feature-video wow fadeInLeft">
                    <img src="assets/img/normal/video_1.jpg" alt="cta bg">
                    <a href="https://www.youtube.com/watch?v=CcpvU_pzR-s" class="play-btn popup-video"><i
                            class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="ps-xxl-5 ms-xl-5 wow fadeInRight">
                    <div class="title-area text-center text-xl-start">
                        <span class="sub-title">Why Choose Us</span>
                        <h2 class="sec-title text-white">We Ensure Your Happy To Taxi Journey</h2>
                    </div>
                    <div class="counter-wrap style2">
                        <div class="counter-line"></div>
                        <div class="counter-wrapper">
                            <div class="counter-card style2">
                                <div class="counter-card_icon">
                                    <img src="{{asset('urbanhaul/assets/img/icon/counter_2_1.svg')}}" alt="icon">
                                </div>
                                <div class="counter-card_number"><span class="counter-number">32.5</span>k<span
                                        class="text-theme">+</span>
                                </div>
                                <p class="counter-card_text">Special Vehicles</p>
                            </div>
                            <div class="counter-card style2">
                                <div class="counter-card_icon">
                                    <img src="{{asset('urbanhaul/assets/img/icon/counter_2_2.svg')}}" alt="icon">
                                </div>
                                <div class="counter-card_number"><span class="counter-number">13.8</span>k<span
                                        class="text-theme">+</span>
                                </div>
                                <p class="counter-card_text">People Dropped</p>
                            </div>
                            <div class="counter-card style2">
                                <div class="counter-card_icon">
                                    <img src="{{asset('urbanhaul/assets/img/icon/counter_2_3.svg')}}" alt="icon">
                                </div>
                                <div class="counter-card_number"><span class="counter-number">65.2</span>k<span
                                        class="text-theme">+</span>
                                </div>
                                <p class="counter-card_text">Satisfied Clients</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Brand Area
==============================-->

<!--==============================
Testimonial Area
==============================-->
<section class="bg-smoke space" data-bg-src="{{asset('urbanhaul/assets/img/bg/testimonial_bg_1.jpg')}}">
    <div class="container">
        <div class="row justify-content-center justify-content-lg-between align-items-center">
            <div class="col-lg-8">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title">Client’s Testimonial</span>
                    <h2 class="sec-title">Our Happy Client’s Review</h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <div class="icon-item">
                        <button data-slick-prev="#testiSlide" class="slick-arrow default"><i
                                class="far fa-arrow-left"></i></button>
                        <button data-slick-next="#testiSlide" class="slick-arrow default"><i
                                class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row slider-shadow th-carousel" id="testiSlide" data-slide-show="3" data-lg-slide-show="2"
            data-md-slide-show="2">
            <div class="col-md-6 col-xl-4">
                <div class="testi-item  wow fadeInUp">
                    <p class="testi-item_text">“Groactively synthesize schemas before foster like leveraged
                        expertise user friendly business source iterate.”</p>
                    <div class="testi-item_wrapper">
                        <div class="testi-item_profile">
                            <div class="testi-item_img">
                                <img src="{{asset('urbanhaul/assets/img/testimonial/testi_3_2.jpg')}}" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-item_name">Emily Isabella</h3>
                                <p class="testi-item_desig">Bank Manager</p>
                            </div>
                        </div>
                        <div class="testi-item_quote"><img src="{{asset('urbanhaul/assets/img/icon/quote_2.svg')}}" alt="quote"></div>
                    </div>
                    <div class="testi-item_review">
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="testi-item  wow fadeInUp">
                    <p class="testi-item_text">“Troactively synthesize schemas before foster like leveraged
                        expertise user friendly business low before open.”</p>
                    <div class="testi-item_wrapper">
                        <div class="testi-item_profile">
                            <div class="testi-item_img">
                                <img src="{{asset('urbanhaul/assets/img/testimonial/testi_3_3.jpg')}}" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-item_name">Harry Callum</h3>
                                <p class="testi-item_desig">CEO Founder</p>
                            </div>
                        </div>
                        <div class="testi-item_quote"><img src="{{asset('urbanhaul/assets/img/icon/quote_2.svg')}}" alt="quote"></div>
                    </div>
                    <div class="testi-item_review">
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="testi-item  wow fadeInUp">
                    <p class="testi-item_text">“Jroactively synthesize schemas before foster like leveraged
                        expertise user friendly open source schemas.”</p>
                    <div class="testi-item_wrapper">
                        <div class="testi-item_profile">
                            <div class="testi-item_img">
                                <img src="{{asset('urbanhaul/assets/img/testimonial/testi_3_4.jpg')}}" alt="Avater">
                            </div>
                            <div class="media-body">
                                <h3 class="testi-item_name">Marcos Manuel </h3>
                                <p class="testi-item_desig">Bank Manager</p>
                            </div>
                        </div>
                        <div class="testi-item_quote"><img src="{{asset('urbanhaul/assets/img/icon/quote_2.svg')}}" alt="quote"></div>
                    </div>
                    <div class="testi-item_review">
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
