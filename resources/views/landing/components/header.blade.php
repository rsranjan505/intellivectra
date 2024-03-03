
    <!-- Navbar & Carousel Start -->


    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-4 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand p-0 ml-4">
                <img src="{{ asset('assets/img/logo.png')}}" width="64px"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse aligns-content-center justify-content-center" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('about')}}" class="nav-link" data-bs-toggle="dropdown">Company</a>
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
                                                <li class="dropdown-item"><a href="#">Smart cloud services and solutions</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Enterprise Application Services</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                                <li class="dropdown-item"><a href="#">Smart backup and archieve solutions</a></li>
                                                <li class="dropdown-item"><a href="#">Smart data management solutions</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Digital Services</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                                <li class="dropdown-item"><a href="#">Smart surveillance solutions</a></li>
                                                <li class="dropdown-item"><a href="#">Smart command and control solutions</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Security Services</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                                <li class="dropdown-item"><a href="#">Smart security solutions</a></li>
                                                <li class="dropdown-item"><a href="#">Smart infrastructure solutions</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogs')}}" class="nav-item nav-link">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('career')}}" class="nav-item nav-link">Career</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact')}}" class="nav-item nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-end text-lg-end mr-4">
                <div class="d-inline-flex align-items-center" style="height: 45px; margin-left:4px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href=""><i class="fab fa-linkedin-in fw-normal" style="color: #F19F1F;"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href=""><i class="fab fa-twitter fw-normal" style="color: #F19F1F;"></i></a>

                </div>
            </div>
        </nav>

        {{-- <div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
            <a class="navbar-brand" href="#">Bootstrap 4 NavBar Dropdown</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://fontenele.github.io/bootstrap-navbar-dropdowns/"
                           target="_blank">Github</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Dropdown1</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1">
                            <li class="dropdown-item"><a href="http://www.youtube.com" target="_blank">Action 1 -
                                Youtube</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Dropdown1.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                                    <li class="dropdown-item"><a href="#">Action 1.1</a></li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">Dropdown1.1.1</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                            <li class="dropdown-item"><a target="_blank" href="http://www.google.com">Action
                                                1.1.1 - Google</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Dropdown2</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2">
                            <li class="dropdown-item"><a href="#">Action 2 A</a></li>
                            <li class="dropdown-item"><a href="#">Action 2 B</a></li>
                            <li class="dropdown-item"><a href="#">Action 2 C</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Dropdown2.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                                    <li class="dropdown-item"><a href="#">Action 2.1 A</a></li>
                                    <li class="dropdown-item"><a href="#">Action 2.1 B</a></li>
                                    <li class="dropdown-item"><a href="#">Action 2.1 C</a></li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">Dropdown2.1.1</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                            <li class="dropdown-item"><a href="#">Action 2.1.1 A</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.1 B</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.1 C</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item dropdown">
                                        <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">Dropdown2.1.2</a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                            <li class="dropdown-item"><a href="#">Action 2.1.2 A</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.2 B</a></li>
                                            <li class="dropdown-item"><a href="#">Action 2.1.2 C</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>

        <main role="main" class="container">
            <div class="jumbotron text-center">
                <h1>Bootstrap NavBar</h1>
                <p class="lead text-info">NavBar with too many childs.</p>
            </div>
        </main> --}}
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
            <div class="carousel-inner" >
                <div class="carousel-item active" style="margin-top: 65px;">
                    <img class="w-100" src="{{ asset('assets/img/bg-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                        <div class="container">
                            <div class="p-3 text-left">
                                <h1 class="display-1 text-primary mb-md-4 animated slideInDown">Business &</h1>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Enterprise Hub</h1>
                                <div class="form-rounded input-form-bg w-50">
                                    <form action="">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
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
                <div class="carousel-item " style="margin-top: 65px;">
                    <img class="w-100" src="{{ asset('assets/img/bg-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                        <div class="container">
                            <div class="p-5 text-left" >
                                <h1 class="display-1 text-primary mb-md-4 animated slideInDown">Business &</h1>
                                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Enterprise Hub</h1>
                                <div class="form-rounded input-form-bg"  style="width: 50%;">
                                    <form action="">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
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
    </div>
    <!-- Navbar & Carousel End -->
