
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
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href=""><i class="fab fa-linkedin-in fw-normal" style="color: #F19F1F;"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href=""><i class="fab fa-twitter fw-normal" style="color: #F19F1F;"></i></a>

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
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control form-rounded border-white p-3 input-form-bg" placeholder="Your Email">
                                    {{-- <button class="btn btn-primary rounded-circle" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                          </svg>
                                    </button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- Navbar & Carousel End -->
