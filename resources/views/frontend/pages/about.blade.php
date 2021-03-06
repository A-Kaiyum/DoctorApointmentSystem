@extends('frontend.layouts.master')
@section('title','About')
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
                        <h2 class="bradcaump-title">About us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!-- Start Support Area -->
    <section class="htc__support__area ptb--100 bg__white  about-page">
        <div class="container">
            <div class="row">
                <div class="htc__support__wrap clearfix">
                    <div class="about__right_image">
                        <img src="{{asset('assets/frontend')}}/images/about/h_about-2.png" alt="">
                    </div>
                    <div class="col-lg-7 col-sm-12 col-12">
                        <div class="htc__support__content">
                            <div class="htc__support__inner">
                                <h4 class="text--theme">About...</h4>
                                <h2 class="text--theme">Health is the root of <br>  all happiness</h2>
                                <div class="htc__support__details">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                                <div class="htc__spt__dai">
                                    <div class="play_video">
                                        <a href="https://www.youtube.com/watch?v=KeKNjVg22pc"><i class="zmdi zmdi-play"></i></a>
                                        <span>Play This Video</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Support Area -->
    <!-- Start Try Solve Area -->
    <section class="htc__try__solve__area about__us ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="services__list owl-carousel">
                        <!-- Start Single Items -->
                        <div class="ht__sin__solve">
                            <div class="ser_icon">
                                <img src="{{asset('assets/frontend')}}/images/service/icon/ser-cion.png" alt="services Icon">
                            </div>
                            <div class="ser__content">
                                <h4><a href="single-services.html">Medical Consulting</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                            </div>
                        </div>
                        <!-- End Single Items -->
                        <!-- Start Single Items -->
                        <div class="ht__sin__solve">
                            <div class="ser_icon">
                                <img src="{{asset('assets/frontend')}}/images/service/icon/ser-cion-3.png" alt="services Icon">
                            </div>
                            <div class="ser__content">
                                <h4><a href="single-services.html">Medical Consulting</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                            </div>
                        </div>
                        <!-- End Single Items -->
                        <!-- Start Single Items -->
                        <div class="ht__sin__solve">
                            <div class="ser_icon">
                                <img src="{{asset('assets/frontend')}}/images/service/icon/ser-cion-2.png" alt="services Icon">
                            </div>
                            <div class="ser__content">
                                <h4><a href="single-services.html">Relationship</a></h4>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                            </div>
                        </div>
                        <!-- End Single Items -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Try Solve Area -->

    <!--Specialized DoctorMiddleware start-->
    <div class="specialized_doctor pt--80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="specialized_doctor_title">
                        <div class="title_left">
                            <h1>Doctors</h1>
                        </div>
                        <div class="title_right section__title">
                            <h2>Our specialized doctors</h2>
                        </div>
                    </div>
                    <div class="doctor_tab_inner">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active show fade" id="mohin">
                                <div class="doctor_details">
                                    <div class="doctor_img">
                                        <img src="{{asset('assets/frontend')}}/images/doctor/1.png" alt="">
                                    </div>
                                    <div class="doctor_content">
                                        <div class="doctor_name">
                                            <h2>Dr. Linda Freeman</h2>
                                            <span>Neurologist</span>
                                        </div>
                                        <p>Dr Linda Freemanis one of the best Nurologiest in Bangladesh, In the world, In the Galaxy.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        <div class="contact_btn">
                                            <a href="{{route('drProfile')}}">Contact Me</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="arif">
                                <div class="doctor_details">
                                    <div class="doctor_img">
                                        <img src="{{asset('assets/frontend')}}/images/doctor/2.png" alt="">
                                    </div>
                                    <div class="doctor_content">
                                        <div class="doctor_name">
                                            <h2>Dr. Helen Nelson</h2>
                                            <span>Surgery specialist</span>
                                        </div>
                                        <p>Dr Helen Nelson is one of the best Surgery specialist in Bangladesh, In the world, In the Galaxy.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        <div class="contact_btn">
                                            <a href="doctor-details.html">Contact Me</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="james">
                                <div class="doctor_details">
                                    <div class="doctor_img">
                                        <img src="{{asset('assets/frontend')}}/images/doctor/3.png" alt="">
                                    </div>
                                    <div class="doctor_content">
                                        <div class="doctor_name">
                                            <h2>Dr. James Watson</h2>
                                            <span>Gynecologist</span>
                                        </div>
                                        <p>Dr Helen Nelson is one of the best Gynecologist in Bangladesh, In the world, In the Galaxy.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                        <div class="contact_btn">
                                            <a href="doctor-details.html">Contact Me</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="doctor_name_tab">

                            <ul class="nav" role="tablist">
                                <li>
                                    <a href="#mohin" class="active" aria-controls="mohin" data-bs-toggle="tab">
                                        <span class="doctor_name">Dr. Linda Freeman</span>
                                        <span class="doctor_designation">Neurologist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#arif" aria-controls="arif" data-bs-toggle="tab">
                                        <span class="doctor_name">Dr. Helen Nelson</span>
                                        <span class="doctor_designation">Surgery specialist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#james" aria-controls="james" data-bs-toggle="tab">
                                        <span class="doctor_name">Dr. James Watson</span>
                                        <span class="doctor_designation">Gynecologist</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Specialized DoctorMiddleware end-->

    <!--Our brand section -->
    <div class="our_brand_section ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title text-center pb--40">
                        <h2 class="title__line text--theme">Our associate</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="our__brand_list owl-carousel">
                        <div class="single_brand">
                            <a href="#">
                                <img src="{{asset('assets/frontend')}}/images/brand/1.png" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="{{asset('assets/frontend')}}/images/brand/2.png" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="{{asset('assets/frontend')}}/images/brand/3.png" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="{{asset('assets/frontend')}}/images/brand/4.png" alt="">
                            </a>
                        </div>

                        <div class="single_brand">
                            <a href="#">
                                <img src="{{asset('assets/frontend')}}/images/brand/1.png" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="{{asset('assets/frontend')}}/images/brand/2.png" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="{{asset('assets/frontend')}}/images/brand/3.png" alt="">
                            </a>
                        </div>
                        <div class="single_brand">
                            <a href="#">
                                <img src="{{asset('assets/frontend')}}/images/brand/4.png" alt="">
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Our brand section end-->


    <!-- Start Blog Area -->
    <section class="htc__blog__area succes_stories pt--100 pb--60 ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title text-center pb--40">
                        <h2 class="title__line text--theme">Success Stories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--40">
                        <div class="ht__blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('assets/frontend')}}/images/blog/success/1.jpg" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="blog-details.html">Anxiety disorder affects human life very badly</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Doctors Ltd.</a></h4>
                                        <div class="publish_info">
                                            <ul>
                                                <li>2 Days Ago</li>
                                                <li>44 read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--40">
                        <div class="ht__blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('assets/frontend')}}/images/blog/success/2.jpg" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="blog-details.html">Anxiety disorder affects human life very badly</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Doctors Ltd.</a></h4>
                                        <div class="publish_info">
                                            <ul>
                                                <li>2 Days Ago</li>
                                                <li>44 read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--40">
                        <div class="ht__blog__thumb">
                            <a href="blog-details.html">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/succes-3.png" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="blog-details.html">Anxiety disorder affects human life very badly</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Doctors Ltd.</a></h4>
                                        <div class="publish_info">
                                            <ul>
                                                <li>2 Days Ago</li>
                                                <li>44 read</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
</div>
@endsection
