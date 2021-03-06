@extends('frontend.layouts.master')
@section('title','Services')
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
                        <h2 class="bradcaump-title">services</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Try Solve Area -->
    <section class="htc__try__solve__area service__section ptb--100 mt--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="section_title--2 text-center pb--30">
                        <h2>Our Associate</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 sin_service">
                    <!-- Start Single Items -->
                    <div class="ht__sin__solve">
                        <div class="ser_icon">
                            <img src="{{asset('assets/frontend')}}/images/service/icon/ser-cion.png" alt="services Icon">
                        </div>
                        <div class="ser__content">
                            <h4><a href="{{route('singleService')}}">Medical Consulting</a></h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                        </div>
                    </div>
                    <!-- End Single Items -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 sin_service">
                    <!-- Start Single Items -->
                    <div class="ht__sin__solve">
                        <div class="ser_icon">
                            <img src="{{asset('assets/frontend')}}/images/service/icon/ser-cion-3.png" alt="services Icon">
                        </div>
                        <div class="ser__content">
                            <h4><a href="{{route('singleService')}}">Medical Consulting</a></h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                        </div>
                    </div>
                    <!-- End Single Items -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 sin_service clear">
                    <!-- Start Single Items -->
                    <div class="ht__sin__solve">
                        <div class="ser_icon">
                            <img src="{{asset('assets/frontend')}}/images/service/icon/ser-cion-2.png" alt="services Icon">
                        </div>
                        <div class="ser__content">
                            <h4><a href="{{route('singleService')}}">Relationship</a></h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                        </div>
                    </div>
                    <!-- End Single Items -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 sin_service">
                    <!-- Start Single Items -->
                    <div class="ht__sin__solve pt--70">
                        <div class="ser_icon">
                            <img src="{{asset('assets/frontend')}}/images/service/icon/ser-cion-4.png" alt="services Icon">
                        </div>
                        <div class="ser__content">
                            <h4><a href="{{route('singleService')}}">Anxiety</a></h4>
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque dantium, totam rem aperiam, eaque</p>
                        </div>
                    </div>
                    <!-- End Single Items -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 sin_service">
                    <!-- Start Single Items -->
                    <div class="ht__sin__solve pt--70">
                        <div class="ser_icon">
                            <img src="{{asset('assets/frontend')}}/images/service/icon/ser-cion-5.png" alt="services Icon">
                        </div>
                        <div class="ser__content">
                            <h4><a href="{{route('singleService')}}">Heart Medicine</a></h4>
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque dantium, totam rem aperiam, eaque</p>
                        </div>
                    </div>
                    <!-- End Single Items -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 sin_service">
                    <!-- Start Single Items -->
                    <div class="ht__sin__solve pt--70">
                        <div class="ser_icon">
                            <img src="{{asset('assets/frontend')}}/images/service/icon/ser-cion-6.png" alt="services Icon">
                        </div>
                        <div class="ser__content">
                            <h4><a href="{{route('singleService')}}">Neuro Medicine</a></h4>
                            <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque dantium, totam rem aperiam, eaque</p>
                        </div>
                    </div>
                    <!-- End Single Items -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Try Solve Area -->

    <!--We are best section start-->
    <div class="why_are_best_section">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-12 col-12">
                    <div class="we_are_best_content">
                        <div class="section__title">
                            <h2 class="title__line text--theme">Why we are best.</h2>
                        </div>
                        <div class="dscription_we_are_best">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                        </div>
                        <div class="vide_play_button">
                            <div class="play_button_inner">
                                <a href="https://www.youtube.com/watch?v=KeKNjVg22pc">Play Video <i class="zmdi zmdi-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 col-md-12 col-12">
                    <div class="we_are_best_image text-right">
                        <div class="best_image_inner">
                            <img src="{{asset('assets/frontend')}}/images/service/best/banner.jpg" alt="">
                            <h2>The most qualified and professional doctors.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--We are best section end-->


    <!--How it work section start-->
    <div class="how_it_work_section ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="section_title--2 text-center pb--60">
                        <h2>How It Work</h2>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4  col-lg-4 col-md-6 col-12">
                    <div class="single_how_work">
                        <div class="how_work_icon">
                            <img src="{{asset('assets/frontend')}}/images/shape/icon/h-1.png" alt="">
                        </div>
                        <h4>Search Doctors</h4>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p>
                    </div>
                </div>
                <div class="col-xl-4  col-lg-4 col-md-6 col-12">
                    <div class="single_how_work">
                        <div class="how_work_icon">
                            <img src="{{asset('assets/frontend')}}/images/shape/icon/h-2.png" alt="">
                        </div>
                        <h4>Check Schedule</h4>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p>
                    </div>
                </div>
                <div class="col-xl-4  col-lg-4 col-md-6 col-12">
                    <div class="single_how_work">
                        <div class="how_work_icon">
                            <img src="{{asset('assets/frontend')}}/images/shape/icon/h-3.png" alt="">
                        </div>
                        <h4>Appoint A Doctor</h4>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--How it work section end-->
</div>
@endsection
