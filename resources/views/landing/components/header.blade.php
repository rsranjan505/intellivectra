
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
                            <a href="{{ route('about')}}" class="dropdown-item">About Us</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services & Solutions</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Services</a>
                        </div>
                    </div>
                    <a href="{{ route('blogs')}}" class="nav-item nav-link">Blogs</a>
                    <a href="{{ route('career')}}" class="nav-item nav-link">Career</a>
                    <a href="{{ route('about')}}" class="nav-item nav-link">Review</a>
                    <a href="{{ route('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
            <div class="text-end text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px; margin-left:4px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href=""><i class="fab fa-linkedin-in fw-normal" style="color: #F19F1F;"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href=""><i class="fab fa-twitter fw-normal" style="color: #F19F1F;"></i></a>

                </div>
            </div>
        </nav>

        {{-- <div id="header-carousel" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="margin-top: 55px;">
                    <img class="w-100" src="{{ asset('assets/img/bg-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                        <div class="container">
                            <div class="p-3 text-left" style="max-width: 900px;">
                                <h1 class="display-1 text-primary mb-md-4 animated slideInDown">Business &</h1>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Enterprise Hub</h1>
                                <div class="form-rounded input-form-bg w-50">
                                    <form action="">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                                  </svg></span>
                                              </div>
                                            <input type="text" class="form-control border-0 p-3 input-form-bg"  placeholder="Your Email">
                                            <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                                  </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item " style="margin-top: 55px;">
                    <img class="w-100" src="{{ asset('assets/img/bg-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                        <div class="container">
                            <div class="p-5" style="max-width: 900px;">
                                <div class="form-rounded input-form-bg" style="width: 200%;">
                                    <form action="">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                                  </svg></span>
                                              </div>
                                            <input type="text" class="form-control border-0 p-3 input-form-bg"  placeholder="Your Email">
                                            <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                                  </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item " style="margin-top: 55px;">
                    <img class="w-100" src="{{ asset('assets/img/bg-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                        <div class="p-5" style="max-width: 900px;">
                            <div class="form-rounded input-form-bg" style="width: 200%;">
                                <form action="">
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                              </svg></span>
                                          </div>
                                        <input type="text" class="form-control border-0 p-3 input-form-bg"  placeholder="Your Email">
                                        <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                              </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="margin-top: 55px;">
                    <img class="w-100" src="{{ asset('assets/img/bg-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                        <div class="container">
                            <div class="p-3 text-left" style="max-width: 900px;">
                                <h1 class="display-1 text-primary mb-md-4 animated slideInDown">Business &</h1>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Enterprise Hub</h1>
                                <div class="form-rounded input-form-bg w-50">
                                    <form action="">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                                  </svg></span>
                                              </div>
                                            <input type="text" class="form-control border-0 p-3 input-form-bg"  placeholder="Your Email">
                                            <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                                  </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="carousel-item " style="margin-top: 55px;">
                    <img class="w-100" src="{{ asset('assets/img/bg-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                        <div class="container">
                            <div class="p-5" style="max-width: 900px;">
                                <div class="form-rounded input-form-bg" style="width: 200%;">
                                    <form action="">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                                  </svg></span>
                                              </div>
                                            <input type="text" class="form-control border-0 p-3 input-form-bg"  placeholder="Your Email">
                                            <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                                  </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}
                <div class="carousel-item " style="margin-top: 55px;">
                    <img class="w-100" src="{{ asset('assets/img/bg-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                        <div class="p-5" style="max-width: 900px;">
                            <div class="form-rounded input-form-bg" style="width: 200%;">
                                <form action="">
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                              </svg></span>
                                          </div>
                                        <input type="text" class="form-control border-0 p-3 input-form-bg"  placeholder="Your Email">
                                        <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                              </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>
    </div>
    <!-- Navbar & Carousel End -->
