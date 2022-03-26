<div class="offcanvas-header">
    <!-- Start Header Logo -->
    <a href="{{route('frontend.index')}}" class="header-logo"><img src="{{asset('assets/frontend')}}/images/logo/logo.png" alt=""></a>
    <!-- End Header Logo -->
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body">
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-mobile-menu-wrapper">
        <!-- Start Mobile Menu  -->
        <div class="mobile-menu-bottom">
            <!-- Start Mobile Menu Nav -->
            <div class="offcanvas-menu">
                <ul>
                    <li>
                        <a href="{{route('frontend.index')}}"><span>Home</span></a>
                    </li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li>
                        <a href="{{route('service')}}"><span>Services</span></a>
                    </li>
                    <li>
                        <a href="{{route('blog')}}"><span>Blogs</span></a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}"><span>Contact</span></a>
                    </li>
                </ul>
            </div> <!-- End Mobile Menu Nav -->
        </div> <!-- End Mobile Menu -->

        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info text-center">
            <ul class="social-link">
                <li><a href="https://example.com/"><i class="fa fa-facebook"></i></a>
                </li>
                <li><a href="https://example.com/"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="https://example.com/"><i class="fa fa-skype"></i></a></li>
            </ul>
        </div>
        <!-- End Mobile contact Info -->

    </div> <!-- End Offcanvas Mobile Menu Wrapper -->
</div>
