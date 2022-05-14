@extends('frontend.layouts.master')
@section('title','Blog')
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
                        <h2 class="bradcaump-title">Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <!--Our blob page-->
    <div class="our_blog_area ptb--100">
        <div class="container">
            <div class="row blog-masonry">
                <div class="grid-item col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--30">
                        <div class="ht__blog__thumb">
                            <a href="{{route('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/succes-3.png" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{route('singleBlog')}}">Anxiety disorder affects human life very badly</a></h2>
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
                <div class="grid-item col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--30">
                        <div class="ht__blog__thumb">
                            <a href="{{route('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/4.jpg" alt="blog images">
                            </a>
                        </div>
                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{route('singleBlog')}}">Helping Children Deal With Trauma</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
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
                <div class="grid-item col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--30">
                        <div class="ht__blog__thumb">
                            <a href="{{route('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/5.jpg" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{route('singleBlog')}}">One Lorem ipsum dolor sit amet, consectetu</a></h2>
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
                <div class="grid-item col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--30">
                        <div class="ht__blog__thumb">
                            <a href="{{route('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/6.jpg" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{route('singleBlog')}}">A shadowy flight into the dangerous world</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Production Ltd.</a></h4>
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
                <div class="grid-item col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--30">
                        <div class="ht__blog__thumb">
                            <a href="{{route('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/7.jpg" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{route('singleBlog')}}">Ultra nanoparticles kill cancer cells in unusual way</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Management Ltd.</a></h4>
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
                <div class="grid-item col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--30">
                        <div class="ht__blog__thumb">
                            <a href="{{route('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/8.jpg" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{route('singleBlog')}}">Eye lens regeneration from own stem cells</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Nutraceuticals Ltd.</a></h4>
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
                <div class="grid-item col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--30">
                        <div class="ht__blog__thumb">
                            <a href="{{route('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/9.jpg" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{route('singleBlog')}}">Believe it or not its just me Come and listen</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Processing Ltd.</a></h4>
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
                <div class="grid-item col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--30">
                        <div class="ht__blog__thumb">
                            <a href="{{route('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/10.jpg" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{route('singleBlog')}}">Patient Forum School Patient Experience</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Texcom Ltd.</a></h4>
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
                <div class="grid-item col-lg-4 col-md-6 col-12">
                    <div class="single_latest_post mb--30">
                        <div class="ht__blog__thumb">
                            <a href="{{route('singleBlog')}}">
                                <img src="{{asset('assets/frontend')}}/images/blog/latest_post/11.jpg" alt="blog images">
                            </a>
                        </div>

                        <div class="htc__blog__content">
                            <div class="blog__post_title">
                                <h2><a href="{{route('singleBlog')}}">Washington Medical Science of Institute</a></h2>
                                <p>There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="blog_post__meta">
                                <div class="post_author_img">
                                    <a href="#"><img src="{{asset('assets/frontend')}}/images/blog/latest_post/author_img_3.png" alt=""></a>
                                </div>
                                <div class="post_content">
                                    <div class="author_tile">
                                        <h4><a href="#">Company Ltd.</a></h4>
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
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="pagination">
                        <div class="pagination_list mt--30">
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-chevron-left"></i> first</a></li>
                                <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active">3</li>
                                <li>...</li>
                                <li><a href="#">8</a></li>
                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                                <li><a href="#">last <i class="zmdi zmdi-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Our blob page end-->
</div>
@endsection
