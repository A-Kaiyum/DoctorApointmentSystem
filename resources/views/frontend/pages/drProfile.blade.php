
@extends('frontend.layouts.master')
@section('title','DoctorMiddleware Details')
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
                        <h2 class="bradcaump-title">Doctor profile</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!--Services details start-->
    <div class="doctor_details_pages pt--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="doctor_profile_img">
                        <img src="{{asset('assets/frontend')}}/images/doctor/docotor_single.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="doctor_about_box_inner">
                        <div class="doctor_about_content">
                            <div class="doctor_title">
                                <h2>Dr. Jonathan Stevens</h2>
                                <p>Microbiologist</p>
                            </div>
                            <div class="doctor_short_info">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                            </div>
                        </div>
                        <div class="doctor_skilled_area">
                            <h2>
                                My Skill Area
                            </h2>
                            <div class="progress_skill">
                                <div class="progress_label_bar">
                                    <span class="progress_persent">Health Advocate</span>
                                    <span class="progress_discount">(65%)</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>
                            </div>
                            <div class="progress_skill">
                                <div class="progress_label_bar">
                                    <span class="progress_persent">Health Consulting</span>
                                    <span class="progress_discount">(80%)</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>
                            </div>
                            <div class="progress_skill">
                                <div class="progress_label_bar">
                                    <span class="progress_persent">Communicator</span>
                                    <span class="progress_discount">(65%)</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>
                            </div>
                            <div class="progress_skill">
                                <div class="progress_label_bar">
                                    <span class="progress_persent">Other Support</span>
                                    <span class="progress_discount">(90%)</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar about_prog wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay=".3s" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="doctor_description_inner">
                        <div class="doctor_deatils_info">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                        <!--DoctorMiddleware booking Box -->
                        <div class="doctor_booking_inner">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="doctors_about_list">
                                        <ul>
                                            <li><span class="title_name">Speciality</span> <span class="title_info">Microbiologist, MicroOrgan.</span></li>
                                            <li><span class="title_name">Degree</span> <span class="title_info">Smith, L.,Myc, L.,Watson, D.,Beller, G. A., Bourque, J. M.> ;J Nucl Cardiol.</span></li>
                                            <li><span class="title_name">Training</span> <span class="title_info">Elected MemberThe American Society for Clinical Investigation, 1982 Whos Who in Medicine and Healthcare</span></li>
                                            <li><span class="title_name">Contact</span> <span class="title_info"> +81 112 333 445 66 <br>  drsmit@mail.com <br>drsmith@domain.info</span></li>
                                            <li><span class="title_name">Working Days</span> <span class="title_info"> Mon, Web, Fri, Sat</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="htc__appoinment__wrap">
                                        <h2>Make an Appointment</h2>
                                        <div class="htc__appoinment__form">
                                            <form action="{{route('appointment')}}" method="post">
                                                @csrf
                                                @include('frontend.layouts.formSession')
                                                <div class="doctor_appoinment">
                                                    <div class="doctor_select_inner">
                                                        <select>
                                                            <option value="1" selected>Select Department</option>
                                                            <option value="2" >Diabetes</option>
                                                            <option value="3" >Pathology</option>
                                                            <option value="4" >Neonatology</option>
                                                            <option value="5" >Surgery</option>
                                                            <option value="5" >Gastroenterology </option>
                                                        </select>
                                                    </div>
                                                    <div class="doctor_select_inner">
                                                        <select>
                                                            <option value="1" selected>Select Doctor</option>
                                                            <option value="2" >Dr. Christine Roberts</option>
                                                            <option value="7" >Dr. AK</option>
                                                            <option value="4" >Dr. Diane Guerrero</option>
                                                            <option value="5" >Dr. Justin Howard</option>
                                                        </select>
                                                    </div>
                                                    <div class="input_inner">
                                                        <input type="text" name="fullName" value="{{old('fullName')}}" placeholder="Type Your Full Name">
                                                    </div>
                                                    <div class="input_mobile_number">
                                                        <div class="select">
                                                            <select name="phone">
                                                                <option value="1" selected>+880</option>
                                                                <option value="2" >+39</option>
                                                                <option value="3">+90</option>
                                                                <option value="4">+593</option>
                                                                <option value="4">+355</option>
                                                                <option value="4">+972</option>
                                                                <option value="4">+972</option>
                                                            </select>
                                                        </div>
                                                        <div class="number_text">
                                                            <input type="text" name="phone" value="{{old('phone')}}" placeholder="Type number">
                                                        </div>
                                                    </div>
                                                    <div class="appoinment_date">
                                                        <input class="date__dropdown" placeholder="DD -- MM - YYYY " name="appointDate"  type="text" id="datepicker">
                                                    </div>


                                                    <div class="appoinment_btn">
                                                        <button type="submit">Book Appoinment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--DoctorMiddleware booking Box end-->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--Services details end-->


    <!--Special doctor section 2 start-->
    <div class="special_doctor_section_2 ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1 col-md-12 col-12 ">
                    <div class="section_title--2 pb--60 text-center">
                        <h2>Other Special Doctors</h2>
                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single_special_doctor text-center mb--30">
                        <div class="doctor_image_2">
                            <img src="{{asset('assets/frontend/images/doctor/2/1.png')}}" alt="">
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
                                    <a href="#">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single_special_doctor text-center mb--30">
                        <div class="doctor_image_2">
                            <img src="{{asset('assets/frontend/images/doctor/2/2.png')}}" alt="">
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
                                    <a href="#">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <div class="single_special_doctor text-center mb--30">
                        <div class="doctor_image_2">
                            <img src="{{asset('assets/frontend/images/doctor/2/3.png')}}" alt="">
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
                                    <a href="#">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Special doctor section 2 end-->

</div>
@endsection
