<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Mitra Asia Packing</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    {{--
    <link rel="shortcut icon" href="{{companyLogo()}}" type="image/png"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!--====== Owl Carousel CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

    <!--====== Style CSS ======-->

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-223046478-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-223046478-1');
    </script>




</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg" style="background-color: #00224C">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
                aria-label="Toggle navigation">
                <img src="{{asset('assets/images/hamburger.svg')}}" alt="">
            </button>
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{asset('logo/logo.png')}}" alt="" width="100">
            </a>
            <div class="dropdown-mobile" style="margin-right: 30px;">
                <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 1px solid white;">
                    @if (Config::get('languages')[App::getLocale()] == 'en')
                    <span>
                        <img src="{{asset('assets/images/eng.png')}}" alt="" width="35">
                        <i class="fa-solid fa-chevron-down" style="color: white"></i>
                    </span>
                    @else
                    <span>
                        <img src="{{asset('assets/images/id.png')}}" alt="" width="30"
                            style="margin-left: 3px;">
                        <i class="fa-solid fa-chevron-down" style="color: white"></i>
                    </span>
                    @endif
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 6rem;
                right: 0;
                /* left: 204px !important; */
                margin: -0.875rem 0 0;">
                    <a class="dropdown-item text-center" href="{{ route('lang.switch', 'en') }}" id="btn-eng" style="padding-left: 3px;">
                        <span>
                            <img src="{{asset('assets/images/eng.png')}}" alt="">
                        </span>
                    </a>
                    <a class="dropdown-item text-center" href="{{ route('lang.switch', 'id') }}" id="btn-id" style="padding-left: 5px;">
                        <span>
                            <img src="{{asset('assets/images/id.png')}}" alt="" width="30"
                                style="margin-left: 3px;">
                        </span>
                    </a>
                </div>
            </div>


            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample07" style="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{isCurrent('about') ? 'active' : ''}}" href="{{route('about')}}">@lang('nav.about')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{isCurrent('product') ? 'active' : ''}}" href="{{route('product')}}">@lang('nav.product')</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link btn btn-red" href="{{route('contact')}}" style="padding: 5px;">
                            @lang('nav.contact')
                        </a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown07">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li> --}}
                </ul>
                <ul class="navbar-nav nav_btn align-items-center">
                    <li>
                        <div class="dropdown dropdown-web" style="margin-right: 30px;">
                            <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border: 1px solid white;">
                                @if (Config::get('languages')[App::getLocale()] == 'en')
                                <span>
                                    <img src="{{asset('assets/images/eng.png')}}" alt="" width="35">
                                    <i class="fa-solid fa-chevron-down" style="color: white"></i>
                                </span>
                                @else
                                <span>
                                    <img src="{{asset('assets/images/id.png')}}" alt="" width="30"
                                        style="margin-left: 3px;">
                                    <i class="fa-solid fa-chevron-down" style="color: white"></i>
                                </span>
                                @endif
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 6rem;">
                                <a class="dropdown-item" href="{{ route('lang.switch', 'en') }}" id="btn-eng" style="padding-left: 24px;">
                                    <span>
                                        <img src="{{asset('assets/images/eng.png')}}" alt="">
                                    </span>
                                </a>
                                <a class="dropdown-item" href="{{ route('lang.switch', 'id') }}" id="btn-id" style="padding-left: 26px;">
                                    <span>
                                        <img src="{{asset('assets/images/id.png')}}" alt="" width="30"
                                            style="margin-left: 3px;">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        @yield('header')
    </header>
    {{-- <div class="container"> --}}
        @yield('content')
    {{-- </div> --}}
    <a  class="whats-app" href="https://api.whatsapp.com/send?phone=+62 856-7405-874&text=Halo!">
        <img src="{{asset('img/WhatsApp.png')}}" alt="">
    </a>
    <!--====== FOOTER PART START ======-->
    <section class="footer-area footer-dark">
        <div class="container mt-5" style="padding-top: 20px;">
            <div class="row mt-5" data-aos="fade-down">
                <div class="col-lg-6 col-sm-12">
                    <img src="{{asset('logo/logo.png')}}" class="mb-5" alt="" width="150"> <br>
                    <p class="text-white mb-3">
                        @lang('banner.about')
                    </p>
                    <p class="text-white">© Copyright 2022 | PT. Mitra Asia Packing</p>
                </div>
                <div class="col-lg-6 col-sm-12 text-footer">
                    <a class="text-bold-lg mb-0" href="{{route('about')}}" style="color: white"> @lang('nav.footer_about') </a> <br>
                    <a class="text-bold-lg mb-0" href="#" style="color: white"> @lang('nav.footer_privacy') </a> <br>
                    <a class="text-bold-lg mb-5" href="#" style="color: white"> @lang('nav.footer_terms') </a> <br>
                    
                    <div class="col-12 mt-5">
                        <a href="text-bold-lg" href="#" style="color: white">
                            <span><img src="{{asset('img/phone.png')}}" alt=""></span>
                            (021) 7919-2484
                        </a>
                        <br>
                        <br>
                        <a href="text-bold-lg" href="#" style="color: white">
                            <span><img src="{{asset('img/phone.png')}}" alt=""></span>
                            (021) 7919-2672
                        </a>
                        <p class="text-white mt-3">
                            Gedung KPI JL. Tegal Parang Utara No. 3 Jakarta 12790 - Indonesia
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <!--====== FOOTER PART ENDS ======-->

    <!--====== Jquery js ======-->
    <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{asset('assets/js/ajax-contact.js')}}"></script>

    <!--====== Isotope js ======-->
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/scrolling-nav.js')}}"></script>
    <script src="{{asset('assets/js/jquery.dd.min.js')}}"></script>

    <!--====== Owl Carousel js ======-->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration : 1000,
            delay : 20,
        });
    </script>
    <script>
        $(document).ready(function() {
            $('[data-aos]').parent().addClass('hideOverflowOnMobile');
            $("#product-slider").owlCarousel({
                loop:true,
                margin: 10,
                
                // autoplay:true,
                // autoplayTimeout:2000,
                // autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1,
                        dots: true,
                    },
                    600:{
                        items:3,
                        dots: true,
                    },
                    1000:{
                        items:3,
                        dots: true,
                    }
                }
            });

            $(".portofolio").owlCarousel({
                loop:true,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1,
                        stagePadding: 30,
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:3
                    }
                }
            })
        });
    </script>
    @yield('script')

</body>

</html>