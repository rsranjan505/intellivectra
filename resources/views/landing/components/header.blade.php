
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand p-0">
                <img src="{{ asset('assets/img/logo.png')}}"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Company</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">About Us</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services & Solutions</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Services</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Blogs</a>
                    <a href="contact.html" class="nav-item nav-link">Career</a>
                    <a href="contact.html" class="nav-item nav-link">Review</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>


            </div>
            <div class="text-end text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px; margin-left:4px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal" style="color: #F19F1F;"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal" style="color: #F19F1F;"></i></a>

                </div>
            </div>
        </nav>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active" style="margin-top: 55px;">
                    <img class="w-100" src="{{ asset('assets/img/bg.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-primary mb-md-4 animated slideInDown">Business &</h1>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Enterprise Hub</h1>
                            <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>
                            {{-- <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Navbar & Carousel End -->
