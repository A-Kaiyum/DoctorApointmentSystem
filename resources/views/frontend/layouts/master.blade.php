<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/curex/curex/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Mar 2022 14:16:21 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/frontend')}}/images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.html">


    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/plugin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">


    <!-- Modernizr JS -->
    <script src="{{asset('assets/frontend')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Body main wrapper start -->
<div class="wrapper">


    <!-- Start Header Style -->
    <header class="htc__header header_transparent">
        <!-- Start Mainmenu Area -->
        @include('frontend.layouts._header')
       <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Style -->

    <!-- Start Mobile Header -->
    <div class="mobile-header d-block d-lg-none">
       @include('frontend.layouts._mobileHeader')
    </div>
    <!-- End Mobile Header -->

    <!--  Start Offcanvas Mobile Menu Section  -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="toggleMenu">
       @include('frontend.layouts._toggleMenu')
    </div>
    <!--  End Offcanvas Mobile Menu Section -->

    <!-- Start Slider Area -->
   @yield('main-content')

    <!-- End Blog Area -->

    <!-- Start Subscribe Area -->
    <section class="htc__subscribe__area subscribe--transparent">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="htc__subscribe__inner">
                        <div class="newsletter_section_title">
                            <h2 class="text-theme">Subscribe Email</h2>
                            <h4>Get our latest news & update regularly</h4>
                        </div>
                        <div class="newsletter__form">
                            <div class="input__box">
                                <form action="#">
                                    <div class="input_email_inner">
                                        <input type="email" placeholder="Type Email Address">
                                    </div>
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area -->
    <!-- Start Footer Area -->
    <footer class="footer_area">
@include('frontend.layouts._footer')
    </footer>
    <!-- End Footer Area -->
</div>
<!-- Body main wrapper end -->



<!-- jquery latest version -->
<script src="{{asset('assets/frontend')}}/js/vendor/jquery.js"></script>
<script src="{{asset('assets/frontend')}}/js/popper.js"></script>
<script src="{{asset('assets/frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets/frontend')}}/js/plugins.js"></script>
<script src="{{asset('assets/frontend')}}/js/main.js"></script>

</body>

</html>
