@extends('frontend.layouts.master')
@section('title','Service')
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
                        <h2 class="bradcaump-title">Heart Medicine Service</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!--Services details start-->
    <div class="services_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-lg-12 col-12">
                    <div class="services_details_content_inner mt--100">
                        <div class="services_thumbnail">
                            <img src="{{asset('assets/frontend')}}/images/service/single/1.jpg" alt="Doctor servces">
                        </div>
                        <div class="serices_details_content">
                            <h2>Heart Medicine</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable by injected humour.</p>
                        </div>
                    </div>
                    <!--How it work section start-->
                    <div class="how_it_work_section ptb--100 fix">
                        <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                            <div class="section_title--2 text-center pb--60">
                                <h2>How It Work</h2>
                                <p>On the other hand, we denounce with righteous indignation and  dislike  men who are so beguiled and demoralized</p>
                            </div>
                        </div>

                        <div class="col-lg-12  col-md-12 col-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="single_work">
                                        <img src="images/service/single/icon-1.png" alt="">
                                        <h5>Find Problems</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single_work">
                                        <img src="images/service/single/icon-2.png" alt="">
                                        <h5>Research & Analysis</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="single_work">
                                        <img src="images/service/single/icon-3.png" alt="">
                                        <h5>Treatment Providers</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--How it work section end-->

                    <!--Additional support start-->
                    <div class="addition_support mb--100">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="additional_support_content">
                                    <h2>Additional Support</h2>
                                    <div class="additional_support_desc">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some.</p>
                                    </div>

                                    <div class="additional_suupor_list">
                                        <ul>
                                            <li><i class="zmdi zmdi-check"></i>Contrary to popular belief, Lorem</li>
                                            <li><i class="zmdi zmdi-check"></i>There are many variations of passages</li>
                                            <li><i class="zmdi zmdi-check"></i>The standard chunk of Lorem Ipsum</li>
                                            <li><i class="zmdi zmdi-check"></i>Contrary to popular belief, Lorem</li>
                                            <li><i class="zmdi zmdi-check"></i>Contrary to popular belief.</li>
                                            <li><i class="zmdi zmdi-check"></i>Lorem Ipsum is simply dummy text.</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="best_image_inner">
                                    <img src="images/service/single/support.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Additional support end-->
                </div>
            </div>
        </div>

        <!--Special Banner start-->
        <div class="special_banner style2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-1 col-md-12 col-12">
                        <div class="sepcial_banner_content">
                            <h4>Special Offer !!</h4>
                            <h2>Get 40% off on Every Dental <br> Checkups.</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--special Banner end-->

    </div>
    <!--Services details end-->


</div>
@endsection
