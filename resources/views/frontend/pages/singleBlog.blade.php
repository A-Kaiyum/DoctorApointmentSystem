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
                        <p><span><i class="zmdi zmdi-alarm-check"></i></span>Mon to sat 07 am to 12 am</p>
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
                        <div class="breadcurumb_menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>>></li>
                                <li>Doug Sweeny joins One Medical as Chief Marketing Officer.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!--Our blob page-->
    <div class="our_blog_area ptb--100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="post_details_inner">
                        <div class="single_post_thumbnail">
                            <img src="{{asset('assets/frontend')}}/images/blog/latest_post/s_post.jpg" alt="single post thumbail">
                        </div>
                        <div class="single_post_content">
                            <div class="single_post_top_contnt">
                                <div class="single_post_title">
                                    <h2>Doug Sweeny joins One Medical as Chief Marketing Officer.</h2>
                                </div>
                                <div class="single_post_meta">
                                    <div class="single_post_left_meta">
                                        <ul>
                                            <li>Feb 13, 2018</li>
                                            <li>By: blendpixels</li>
                                            <li>UI/UX Design</li>
                                        </ul>
                                    </div>
                                    <div class="single_post_right_meta">
                                        <ul>
                                            <li>2 Comments</li>
                                            <li>20 Like</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="post_excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi aliquip consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat null pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi aliquip consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat null pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi aliquip consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .</p>

                                <div class="row fix mb--30">
                                    <div class="col-xl-6 col-lg-12 cols-12">
                                        <div class="post_gallery_img">
                                            <img src="images/blog/latest_post/gallery.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 cols-12">
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

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi aliquip consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat null pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                <blockquote class="mtb--50">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </blockquote>
                                <p>Ipsum dolor sit amet, consectetur adipiscing esed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, nostrud exercitation ullamco laboris nisi aliquip consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat null pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>


                            <!--administrator start-->
                            <div class="administrator">
                                <div class="administrator_thumb">
                                    <img src="images/blog/latest_post/author.png" alt="">
                                </div>
                                <div class="administrator_contnet">
                                    <h4>Tomas Lion</h4>
                                    <p>Using the examples above, if you’re making a business website consider asking users to add themselves to an email list in order to receive updatesas leads for future sales.</p>
                                    <div class="administrator_social_icon">
                                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                        <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                        <a href="#"><i class="zmdi zmdi-whatsapp"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!--administrator end-->
                        </div>

                        <!--Comment box -->
                        <div class="comment_box_form">
                            <div class="comment_box_title">
                                <h3>Leave A Comment</h3>
                                <p>Your email address will not be published. Required fields are marked *</p>
                            </div>
                            <div class="leave_comment_form">
                                <form action="#">
                                    <div class="text-areabox">
                                        <textarea placeholder="Type Your Comment *"></textarea>
                                    </div>
                                    <div class="input_box half_left">
                                        <input type="text" placeholder="Your Name *" >

                                    </div>
                                    <div class="input_box half_right">
                                        <input type="email" placeholder="Your Email *" >
                                    </div>
                                    <div class="input_box">
                                        <input type="text" placeholder="Your Website" >
                                    </div>
                                    <div class="submit_button_inner">
                                        <button type="submit">Submit Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Comment box end-->

                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-12">
                    <div class="sidebar_right">

                        <div class="widget author_information">
                            <div class="author_info_imag">
                                <img src="images/blog/sidebar/author_image.png" alt="">
                            </div>
                            <div class="author_content text-center">
                                <h3>Maria Walsh</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the.</p>
                            </div>

                        </div>

                        <div class="widget social_following">
                            <div class="social_following">
                                <ul>
                                    <li class="twitter"><a href="#">
                                            <i class="zmdi zmdi-twitter"></i>
                                            <span class="follow_cout">10k</span>
                                            <span class="following">Following</span>
                                        </a></li>
                                    <li class="facebook"><a href="#">
                                            <i class="zmdi zmdi-facebook"></i>
                                            <span class="follow_cout">20k</span>
                                            <span class="following">Following</span>
                                        </a></li>
                                    <li class="google-plus"><a href="#">
                                            <i class="zmdi zmdi-google-plus"></i>
                                            <span class="follow_cout">15k</span>
                                            <span class="following">Following</span>
                                        </a></li>
                                    <li class="pinterest"><a href="#">
                                            <i class="zmdi zmdi-pinterest"></i>
                                            <span class="follow_cout">12k</span>
                                            <span class="following">Following</span>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="widget recent_post">
                            <div class="sidebar_title">
                                <h3>Recent Posts</h3>
                            </div>
                            <div class="single_recent_post">
                                <div class="recent_post_img">
                                    <a href="#"><img src="images/blog/latest_post/4.jpg" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <h3><a href="#">Anxiety disorder affects human life </a></h3>
                                    <span class="post_publist_date">March 3, 2018</span>
                                </div>
                            </div>
                            <div class="single_recent_post">
                                <div class="recent_post_img">
                                    <a href="#"><img src="images/blog/latest_post/5.jpg" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <h3><a href="#">Anxiety disorder affects human life</a></h3>
                                    <span class="post_publist_date">March 3, 2018</span>
                                </div>
                            </div>
                            <div class="single_recent_post">
                                <div class="recent_post_img">
                                    <a href="#"><img src="images/blog/latest_post/7.jpg" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <h3><a href="#">Anxiety disorder affects human life</a></h3>
                                    <span class="post_publist_date">March 3, 2018</span>
                                </div>
                            </div>
                        </div>

                        <div class="widget banner">
                            <div class="sidebar_title">
                                <h3>Search</h3>
                            </div>
                            <div class="sidebar_search">
                                <div class="search_form">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="widget cartegories">
                            <div class="sidebar_title">
                                <h3>Categories</h3>
                            </div>
                            <div class="post_categories">
                                <ul>
                                    <li><a href="#">Diabetes <span class="cat_count">(20)</span></a></li>
                                    <li><a href="#">Pathology<span class="cat_count">(30)</span></a></li>
                                    <li><a href="#">Neonatology<span class="cat_count">(15)</span></a></li>
                                    <li><a href="#">Surgery<span class="cat_count">(35)</span></a></li>
                                    <li><a href="#">Gastroenterology <span class="cat_count">(10)</span></a></li>
                                    <li><a href="#">Radiology <span class="cat_count">(5)</span></a></li>
                                    <li><a href="#">Emergency Centre <span class="cat_count">(18)</span> </a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Our blob page end-->
</div>
@endsection
