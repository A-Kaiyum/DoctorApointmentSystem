@extends('frontend.layouts.master')
@section('title','Hello Doc')
@section('main-content')
    <div class="doctor_search_banner_content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="doctor_search__content">
                        <div class="doctor_search_content_inner">
                            <p>All doctors are waiting for you...</p>
                            <h1>Search Your Doctor, <br> Make an appointment</h1>
                            <div class="doctor_search_form">
                                <form action="#">
                                    <div class="doctor_search_inner">
                                        <div class="seach_doctor_form">
                                            <input type="text" placeholder="Doctors Name">
                                            <div class="doctor_appoinment_date">
                                                <input class="date_search" type="text" placeholder="Day / Month / Year" id="doctor_calender">
                                            </div>
                                            <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

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
                            <img src="images/shape/icon/h-1.png" alt="">
                        </div>
                        <h4>Search Doctors</h4>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p>
                    </div>
                </div>
                <div class="col-xl-4  col-lg-4 col-md-6 col-12">
                    <div class="single_how_work">
                        <div class="how_work_icon">
                            <img src="images/shape/icon/h-2.png" alt="">
                        </div>
                        <h4>Check Schedule</h4>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p>
                    </div>
                </div>
                <div class="col-xl-4  col-lg-4 col-md-6 col-12">
                    <div class="single_how_work">
                        <div class="how_work_icon">
                            <img src="images/shape/icon/h-3.png" alt="">
                        </div>
                        <h4>Appoint A Doctor</h4>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--How it work section end-->

    <!--Special doctor section 2 start-->
    <div class="special_doctor_section_2 ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-12 ">
                    <div class="section_title--2 pb--60 text-center">
                        <h2>Special Doctors</h2>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single_special_doctor text-center mb--30">
                        <div class="doctor_image_2">
                            <img src="{{asset('assets/frontend')}}/images/doctor/2/1.png" alt="">
                        </div>
                        <div class="doctor_brief_desc">
                            <div class="doctor_top_desc">
                                <div class="doctor_name">
                                    <h4>Dr. Robarrt Delok</h4>
                                </div>
                                <div class="doctor_designation">
                                    <h5>Nurologiest</h5>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            </div>
                            <div class="doctor_bottom_desc">
                                <div class="doctor_shecduled_time">
                                    <h4>Mon - Sat @ 9.00pm to 12.00am</h4>
                                </div>
                                <div class="doctor_view_profile">
                                    <a href="{{route('drProfile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single_special_doctor text-center mb--30">
                        <div class="doctor_image_2">
                            <img src="{{asset('assets/frontend')}}/images/doctor/2/2.png" alt="">
                        </div>
                        <div class="doctor_brief_desc">
                            <div class="doctor_top_desc">
                                <div class="doctor_name">
                                    <h4>Dr. Roy Owens</h4>
                                </div>
                                <div class="doctor_designation">
                                    <h5>Gynecologist</h5>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            </div>
                            <div class="doctor_bottom_desc">
                                <div class="doctor_shecduled_time">
                                    <h4>Sun - Tues @ 1.00pm to 4.00pm</h4>
                                </div>
                                <div class="doctor_view_profile">
                                    <a href="{{route('drProfile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single_special_doctor text-center mb--30">
                        <div class="doctor_image_2">
                            <img src="{{asset('assets/frontend')}}/images/doctor/2/3.png" alt="">
                        </div>
                        <div class="doctor_brief_desc">
                            <div class="doctor_top_desc">
                                <div class="doctor_name">
                                    <h4>Dr. Jacob Ross</h4>
                                </div>
                                <div class="doctor_designation">
                                    <h5>Surgery specialist</h5>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            </div>
                            <div class="doctor_bottom_desc">
                                <div class="doctor_shecduled_time">
                                    <h4>Mon - Thrus @ 6.00pm to 9.00pm</h4>
                                </div>
                                <div class="doctor_view_profile">
                                    <a href="{{route('drProfile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single_special_doctor text-center">
                        <div class="doctor_image_2">
                            <img src="{{asset('assets/frontend')}}/images/doctor/2/4.png" alt="">
                        </div>
                        <div class="doctor_brief_desc">
                            <div class="doctor_top_desc">
                                <div class="doctor_name">
                                    <h4>Dr. Mark Williamson</h4>
                                </div>
                                <div class="doctor_designation">
                                    <h5>Physiatrist</h5>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            </div>
                            <div class="doctor_bottom_desc">
                                <div class="doctor_shecduled_time">
                                    <h4>Mon - Sat @ 9.00pm to 11.00pm</h4>
                                </div>
                                <div class="doctor_view_profile">
                                    <a href="{{route('drProfile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single_special_doctor text-center">
                        <div class="doctor_image_2">
                            <img src="{{asset('assets/frontend')}}/images/doctor/2/5.png" alt="">
                        </div>
                        <div class="doctor_brief_desc">
                            <div class="doctor_top_desc">
                                <div class="doctor_name">
                                    <h4>Dr. Scott Rios</h4>
                                </div>
                                <div class="doctor_designation">
                                    <h5>Radiologist</h5>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            </div>
                            <div class="doctor_bottom_desc">
                                <div class="doctor_shecduled_time">
                                    <h4>sun - fri @ 10.00am to 4.00pm</h4>
                                </div>
                                <div class="doctor_view_profile">
                                    <a href="{{route('drProfile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single_special_doctor text-center">
                        <div class="doctor_image_2">
                            <img src="{{asset('assets/frontend')}}/images/doctor/2/6.png" alt="">
                        </div>
                        <div class="doctor_brief_desc">
                            <div class="doctor_top_desc">
                                <div class="doctor_name">
                                    <h4>Dr. Andrea Fowler</h4>
                                </div>
                                <div class="doctor_designation">
                                    <h5>Hepatologist</h5>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                            </div>
                            <div class="doctor_bottom_desc">
                                <div class="doctor_shecduled_time">
                                    <h4>Mon - Sat @ 9.00pm to 12.00am</h4>
                                </div>
                                <div class="doctor_view_profile">
                                    <a href="{{route('drProfile')}}">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Special doctor section 2 end-->


    <!--Special Banner start-->
    <div class="special_banner banner_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
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


    <!-- Start Appoinment Area -->
    <section class="htc__appoinment__area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-12 col-12">
                    <div class="section__title text-center">
                        <h2>Make an Appointment</h2>
                    </div>
                    <div class="htc__appoinment__wrap">
                        <div class="htc__appoinment__form">
                            <form action="{{route('appointment')}}" method="post" >
                                @include('frontend.layouts.formSession')
                            @csrf
                                <div class="htc__app__box__inner">
                                    <div class="htc__app__box">
                                        <div class="input_inner">
                                            <input type="text" name="fullName" value="{{old('fullName')}}" placeholder="Type Your Full Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="htc__app__box__inner">
                                    <div class="htc__app__box">
                                        <input type="email" name="email" value="{{old('email')}}" placeholder="Type Your E-mail">
                                    </div>
                                </div>
                                <div class="htc__app__box__inner">
                                    <div class="htc__app__box">
                                        <input type="text" name="subject" value="{{old('subject')}}" placeholder="Consulting Subject">
                                    </div>
                                    <div class="htc__app__box psy__calendar">
                                        <input class="date__dropdown" placeholder="Appoinment Date" name="appointDate" type="text" id="datepicker">
                                    </div>
                                </div>
                                <div class="htc__app__box__inner">

                                    <div class="htc__app__box doctor_select">
                                        <div class="doctor_select_inner">
                                            <select>
                                                <option value="1" selected>Department</option>
                                                <option value="2" >Diabetes</option>
                                                <option value="3" >Pathology</option>
                                                <option value="4" >Neonatology</option>
                                                <option value="5" >Surgery</option>
                                                <option value="5" >Gastroenterology </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="htc__app__box doctor_select">
                                        <div class="doctor_select_inner">
                                            <select name="doctor_id">
                                                <option value="1" selected>Select Doctor</option>
                                                <option value="2" >Dr. Christine Roberts</option>
                                                <option value="3" >Dr. Jacob Torres</option>
                                                <option value="4" >Dr. Diane Guerrero</option>
                                                <option value="5" >Dr. Justin Howard</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="appoinment_message">
                                    <div class="htc__app__box message">
                                        <textarea name="message" value="{{old('message')}}" placeholder="Type Additional Message"></textarea>
                                    </div>
                                    <div class="ht__appoin__btn">
                                        <button type="submit">Send Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Appoinment Area -->

    <!-- Start Blog Area -->
    <section class="htc__blog__area home-blog bg__white ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section__title text-center">
                        <h2 class="title__line text--theme">Health News</h2>
                    </div>
                </div>
            </div>
            <div class="row htc__blog__wrap clearfix mt--30">
                <!-- Start single Blog -->
                <div class="col-lg-8 col-xl-7 col-md-6 col-12">
                    <div class="single_latest_post flex left_grid">

                        <div class="ht__blog__thumb">
                            <a href="{{asset('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/img-1.png" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{asset('singleBlog')}}">Best Depression affects children’s mental development.</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_1.png" alt=""></a>
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
                    <div class="single_latest_post flex left_grid mt--80">

                        <div class="ht__blog__thumb">
                            <a href="{{asset('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/img-2.png" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{asset('singleBlog')}}">Best Depression affects children’s mental development.</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_2.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Clinic Ltd.</a></h4>
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
                <div class="col-lg-4 col-xl-5 col-md-6 col-12">
                    <div class="single_latest_post right_grid">
                        <div class="ht__blog__thumb">
                            <a href="{{asset('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/img-3.png" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{asset('singleBlog')}}">Anxiety disorder affects human life very badly</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Medical Ltd.</a></h4>
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
                <!-- End single Blog -->
            </div>
        </div>
    </section>
@endsection


