
    <!-- Navbar & Carousel Start -->

    <div class="topheader container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row justify-content-end">
            <div class="aligns-content-center justify-content-center">
                <div class="d-inline-flex align-items-center" style="height: 55px;">
                    <small class="me-3 text-light mr-3"><i class="fa fa-phone-alt me-2 mr-3"></i>012-4496-0635</small>
                    <small class="text-light mr-3"><i class="fa fa-envelope-open me-2 mr-3"></i>info@intellivectra.tech</small>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-4 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand p-0 ml-4 wh-img">
                <img class="" src="{{ asset('assets/img/logo-wh.png')}}" width="64px"/>
            </a>
            <a href="{{route('home')}}" class="navbar-brand p-0 ml-4 dk-img">
                <img class="" src="{{ asset('assets/img/logo.png')}}" width="64px"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse aligns-content-center justify-content-center pt-2" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a href="{{route('home')}}" class="nav-item nav-link {{ Request::is('/') ? 'active' : ''}} ">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('about')}}" class="nav-link {{ Request::is('about-us') ? 'active' : ''}}" data-bs-toggle="dropdown">Company</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">Services & Solutions</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown2">
                                {{-- <li class="dropdown-item"><a href="#">Professional Services</a></li> --}}
                                <li class="dropdown-item"><a href="#">Staffing Services</a></li>
                                <li class="dropdown-item dropdown">
                                    <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">Professional Services</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                                        <li class="dropdown-item"><a href="#">Consulting Services</a></li>
                                        {{-- <li class="dropdown-item"><a href="#">Platform and Operations</a></li> --}}
                                        {{-- <li class="dropdown-item"><a href="#">Enterprise Application Services</a></li> --}}
                                        {{-- <li class="dropdown-item"><a href="#">Digital Services</a></li>
                                        <li class="dropdown-item"><a href="#">Security Services</a></li> --}}
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Platform and Operations</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                                <li class="dropdown-item"><a href="#">Cloud services and solutions</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Enterprise Application Services</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                                <li class="dropdown-item"><a href="#">Backup and archieve solutions</a></li>
                                                <li class="dropdown-item"><a href="#">Data management solutions</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Digital Services</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                                <li class="dropdown-item"><a href="#">Surveillance solutions</a></li>
                                                <li class="dropdown-item"><a href="#">Command and control solutions</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Security Services</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                                <li class="dropdown-item"><a href="#">Security solutions</a></li>
                                                <li class="dropdown-item"><a href="#">Infrastructure solutions</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogs')}}" class="nav-item nav-link {{ Request::is('blogs') || str_contains(Request::url(),'blogs') ? 'active' : ''}}">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('career')}}" class="nav-item nav-link {{ Request::is('careers') ? 'active' : ''}}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact')}}" class="nav-item nav-link {{ Request::is('contact-us') ? 'active' : ''}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-end text-lg-end mr-4 social-icons">
                <div class="d-inline-flex align-items-center" style="height: 45px; margin-left:4px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 mr-2 box-shadow" href=""><i class="fab fa-linkedin-in fw-normal" style="color: #0077b5 ;"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href=""><svg class="ml-2 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 912 912"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a>

                </div>
            </div>
        </nav>

        @if (Request::is('/'))
            @include('landing.components.hero-section')
        @elseif (Request::is('about-us'))
            @include('landing.components.sub-header',['type' => 'about'])
        @elseif (Request::is('contact-us'))
            @include('landing.components.sub-header',['type' => 'contact'])
        @elseif (Request::is('blogs'))
            @include('landing.components.sub-header',['type' => 'blogs'])
        @elseif (Request::is('blogs/*'))
            @include('landing.components.sub-header',['type' => 'blogs-details'])
        @elseif (Request::is('case-study'))
            @include('landing.components.sub-header',['type' => 'case-study'])
        @elseif (Request::is('careers'))
            @include('landing.components.sub-header',['type' => 'career'])
        @endif


    </div>
    <!-- Navbar & Carousel End -->
