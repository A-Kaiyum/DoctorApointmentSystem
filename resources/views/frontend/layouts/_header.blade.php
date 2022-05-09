<div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header  d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-auto">
                <div class="logo">
                    <a href="{{route('frontend.index')}}">
                        <img src="{{asset('assets/frontend')}}/images/logo/logo.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-auto offset-1">
                <nav class="main__menu__nav">
                    <ul class="main__menu">
                        <li class="drop"><a href="{{route('frontend.index')}}">Home</a>
                        </li>
                        <li class="drop"><a href="{{route('about')}}">About</a></li>
                        <li class="drop"><a href="{{route('service')}}">Services</a>
                        </li>
                        <li class="drop"><a href="{{route('blog')}}">Blog</a>
                        </li>
                        <li class="drop"><a href=""#>Blood Bank</a>
                            <ul class="dropdown">
                                <li><a href="#" data-toggle="modal" data-target="#exampleModal">Find Blood</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#donnerModal">Register Donner </a></li>
                            </ul>
                        </li>
                        <li class="drop"><a href="{{route('contact')}}">Contact</a></li>
                        <li class="drop"><a href="{{route('login')}}">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>

