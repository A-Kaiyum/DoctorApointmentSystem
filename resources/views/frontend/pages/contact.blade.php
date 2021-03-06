@extends('frontend.layouts.master')
@section('title','Contact-Us')
@section('main-content')
<div>
    <div class="htc__header__top">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-8 col-12">
                    <div class="ht__header__top__left">
                        <p><span><i class="zmdi zmdi-phone"></i></span>+88 011 2225 555 </p>
                        <p><span><i class="zmdi zmdi-alarm-check"></i></span>{{date('D-M-Y')}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="ht__header__top__right">
                        <div class="social_icon">
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                            <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                            <a href="#"><i class="zmdi zmdi-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bradcaump__title text-center">
                        <h2 class="bradcaump-title">Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->


    <!-- Start Contact Area -->
    <section class="htc__contact__area bg__white pt--30 pb--15">
        <div class="container">
            <div class="row contact__addres__wrapper">
                <!-- Start Single Addrss -->
                <div class="col-lg-4 col-xl-4 col-md-6 col-12">
                    <div class="address">
                        <div class="address__icon">
                            <i class="zmdi zmdi-pin"></i>
                        </div>
                        <div class="address__details">
                            <p>Dhaka, Bangladesh</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Addrss -->
                <!-- Start Single Addrss -->
                <div class="col-lg-4 col-xl-4 col-md-6 col-12 xmt--40">
                    <div class="address">
                        <div class="address__icon">
                            <i class="zmdi zmdi-phone"></i>
                        </div>
                        <div class="address__details">
                            <p><a href="#">(001) 24568 365 987</a></p>
                            <p><a href="#">(001) 65897 569 784</a></p>
                        </div>
                    </div>
                </div>
                <!-- End Single Addrss -->
                <!-- Start Single Addrss -->
                <div class="col-lg-4 col-xl-4 col-md-6 col-12 smt--40 xmt--40">
                    <div class="address">
                        <div class="address__icon">
                            <i class="zmdi zmdi-globe"></i>
                        </div>
                        <div class="address__details">
                            <p><a href="#">infor@demomail.com</a></p>
                            <p><a href="#">www.demosite.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- End Single Addrss -->

            </div>
        </div>
        <!-- Start Google Map -->
        <div class="mapouter" style="margin-left: 200px"><div class="gmap_canvas"><iframe width="1080" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=Dhaka&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:600px;width:1080px;}</style><a href="https://www.embedgooglemap.net">google maps embed html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:1080px;}</style></div></div>
        <!-- End Google Map -->
        <!-- Start Conatact Form -->
        <div class="psy__contact__form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="htc__contact__form__wrap">
                            <div class="contact-form-wrap">
                                <h2 class="ct__title text--theme">Send us a message</h2>
                                @include('frontend.layouts.formSession')
                                <form id="contact-form" action="{{route('contact.create')}}" method="post">
                                    @csrf
                                    <div class="single-contact-form name">
                                        <div class="contact-box name_email">
                                            <div class="contact-box">
                                                <input type="text" placeholder="Your Name *" name="name">
                                            </div>
                                            <div class="contact-box">
                                                <input type="text" placeholder="Phone *" name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-contact-form">
                                        <div class="contact-box subject">
                                            <input type="email" placeholder="Email*" name="email">
                                        </div>
                                    </div>
                                    <div class="single-contact-form">
                                        <div class="contact-box message">
                                            <textarea name="message" placeholder="Message*"></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-btn">
                                        <button type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Conatact Form -->
    </section>

</div>
@endsection
