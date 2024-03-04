
@extends('landing.layouts.base')

@section('contents')

    @include('landing.components.pages.about-section')

    @include('landing.components.pages.approach')

    @include('landing.components.pages.services')

    @include('landing.components.pages.process')

    @include('landing.components.pages.our-usp')



        <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-3">
                <div class="flex-row justify-content-center">
                    <div class="d-flex flex-row justify-content-center">
                        <h1 ><span class="text-primary">Case </span> Studies</h1>

                    </div>
                </div>
                <div class="box-shadow case-content row my-2 text-left py-4">
                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/img/home-5.png')}}" alt="Card image cap">
                          </div>
                    </div>
                    <div class="col-lg-6 ">
                        <h3 class="pb-2"> <span class="text-primary"> SmartCityTech</span> Solutions</h3>
                        <h5 class="mb-0 pb-1"><strong>Challenge:</strong></h5>
                        <p class="mb-4">SmartCityTech Solutions pioneers innovative IT services, specializing in the development of integrated command and control solutions for smart cities. With a focus on dynamic data analysis and security, they empower urban environments to make efficient, informed, and coordinated decisions, driving forward the evolution of modern city infrastructure.</p>

                        <a href="quote.html" class="btn btn-dark rounded-pill py-3 px-5 wow zoomIn" data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                          </svg></a>
                    </div>
                    <div class="col-lg-12 pr-2">
                        <a class="btn text-primary d-flex flex-row justify-content-end " href="#"> See All <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right mt-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                          </svg></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-4 wow fadeInUp bg-primary" data-wow-delay="0.1s" >
            <div class="container">
                <div class="flex-column justify-content-center">
                    <div class="d-flex align-items-center flex-column justify-content-center">
                        <h1 >Our<span class="text-primary"> OEMs </span></h1>
                        <p>Partnering with industry-leading manufacturers to deliver cutting-edge technology solutions tailored to your business needs.</p>
                    </div>
                </div>


                <div class="d-flex flex-row justify-content-center ">
                    <div class="row row-line justify-content-center">
                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-20.png')}}" class="brand-img"/>
                        </div>
                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-1.png')}}" class="brand-img"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-2.png')}}" class="brand-img"/>
                        </div>

                        <div class="brand-logo">
                            <img src="{{ asset('assets/img/brand/b-3.png')}}" class="brand-img"/>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-center ">
                    <div class="row row-line justify-content-center">
                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-5.png')}}" class="brand-img"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-7.png')}}" class="brand-img"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-10.png')}}" class="brand-img"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-11.png')}}" class="brand-img"/>
                        </div>
                        <div class="brand-logo">
                            <img src="{{ asset('assets/img/brand/b-13.png')}}" class="brand-img"/>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-center ">
                    <div class="row row-line justify-content-center">
                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-19.png')}}" class="brand-img"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-17.png')}}" class="brand-img"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-18.png')}}" class="brand-img"/>
                        </div>
                        <div class="brand-logo">
                            <img src="{{ asset('assets/img/brand/roombr.svg')}}" class="brand-img"/>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 p-2">
                    <a class="btn text-primary d-flex flex-row justify-content-end " href="#"> See All <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right mt-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                      </svg></a>
                </div>
            </div>
        </div>

        <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="case-content p-4 row box-shadow">
                    <div class="col-lg-6 text-left">
                        <h1 >Get <span class="text-primary">  Expert’s Advice </span></h1>
                        <p class="mb-4">This Gartner® Market Guide on Microsegmentation highlights today's important key findings when it comes to the security and risk management and recommendations that SRM leaders responsible for infrastructure security should follow.</p>

                        <a href="quote.html" class="btn btn-primary rounded-pill py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Schedule a call <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                        </svg></a>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="card" style="width: 28rem;">
                            <img class="card-img-top" src="{{ asset('assets/img/home-6.png')}}" alt="Card image cap">
                          </div>
                    </div> --}}

                    <div class="col-lg-6" >
                        <img class="card-img-top case-content-img"  src="{{ asset('assets/img/home-6.png')}}" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Start -->
        <div class="container-fluid py-2 wow fadeInUp bg-primary" data-wow-delay="0.1s" >
            <div class="container py-3">
                <div class="flex-row justify-content-center">
                    <div class="d-flex flex-row mb-2 justify-content-center">
                        <h1>Latest <span class="text-primary"> Blogs </span></h1>

                    </div>
                </div>
                <div class="row g-5">
                    <!-- Blog list Start -->
                    <div class="col-lg-12">
                        <div class="row g-5 mt-6">
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light box-shadow overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                        {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                                    </div>
                                    <div class="p-4 text-left">
                                        <div class="d-flex mb-3">
                                            <small class="me-3 mr-2"><i class="far fa-user text-primary me-2"></i>  John Doe</small>
                                            <small class="me-3 mr-2"><i class="far fa-calendar-alt text-primary me-2"></i>  03 Mar, 2024</small>
                                        </div>
                                        <h4 class="mb-3">Maximizing Efficiency and Talent Acquisition with Professional Staffing Services</h4>
                                        <p>In today's competitive business landscape, companies are constantly striving to optimize their operations and gain a competitive edge. One crucial aspect of this optimization is ensuring that the right talent is in the right place at the right time. Efficient staffing solutions play a pivotal role in achieving this goal. Whether it's scaling up for a new project or filling crucial skill gaps, having access to a reliable staffing service can make all the difference.</p>
                                        <a class="btn btn-dark rounded-pill" href="">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                          </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                                <div class="blog-item bg-light box-shadow overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('assets/img/blog/blog-2.png')}}" alt="">
                                        {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                                    </div>
                                    <div class="p-4 text-left">
                                        <div class="d-flex mb-3">
                                            <small class="me-3 pr-2"><i class="far fa-user text-primary me-2"></i>  John Doe</small>
                                            <small class="pr-2"><i class="far fa-calendar-alt text-primary me-2 "></i>  03 Mar, 2024</small>
                                        </div>
                                        <h4 class="mb-3">Maximizing Efficiency and Talent Acquisition with Professional Staffing Services</h4>
                                        <p>In today's competitive business landscape, companies are constantly striving to optimize their operations and gain a competitive edge. One crucial aspect of this optimization is ensuring that the right talent is in the right place at the right time. Efficient staffing solutions play a pivotal role in achieving this goal. Whether it's scaling up for a new project or filling crucial skill gaps, having access to a reliable staffing service can make all the difference.</p>
                                        <a class="btn btn-dark rounded-pill" href="">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                          </svg></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 p-2">
                        <a class="btn text-primary d-flex flex-row justify-content-end " href="#"> See All <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right mt-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                          </svg></a>
                    </div>
                    <!-- Blog list End -->
                </div>
            </div>
        </div>

        {{-- <div class="wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 mb-5">
                <div class="bg-white">
                    <div class="owl-carousel vendor-carousel">

                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Blog End -->

        <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="case-content row mt-5 box-shadow">
                    <div class="col-lg-6 pt-2" >
                        <h1 class="ml-4"> <span class="text-primary"> Get in  </span>Touch</h1>
                        <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container">
                                <div class="row">
                                    <form class="getin-touch">
                                        <div class="row g-3">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control border border-warning form-input-rounded input-form" placeholder="First Name" >
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control border border-warning form-input-rounded input-form" placeholder="Last Name" >
                                            </div>
                                            <div class="col-md-12">
                                                <input type="email" class="form-control border border-warning form-input-rounded input-form" placeholder=" Email" >
                                            </div>
                                            <div class="col-12">
                                                <input type="text" class="form-control border border-warning form-input-rounded input-form" placeholder="Mobile" >
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-dark form-input-rounded ml-3 mt-2 px-4 text-center" type="submit">Submit  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                                        </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" >
                        <img class="card-img-top case-content-img"  src="{{ asset('assets/img/get-in-touch.png')}}" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-10 offset-lg-1 pt-5 pb-5">
            <div class="text-center position-relative pb-3 mb-4 mx-auto">
                <h1 class="text-primary">Testimonial</h1>
                <p class="mb-0">Our work speaks louder than our word. Find out how we helped clients overcome challenges and succeed.</p>
            </div>
            <div class="box-shadow">
                <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel" style="height:330px;">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active text-center p-4">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/testimonials/img-1.png')}}" style="width: 100px; " >
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <h2 class="text-primary">Jess Santiago 1</h2>
                                <p class="text-muted">@jess_santiago</p>
                                <div class="d-flex justify-content-center">
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                </div>
                            </div>
                            <div class=" px-5">
                                “Outstanding IT support! Quick response times and knowledgeable technicians. Highly recommended!”
                            </div>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/testimonials/img-1.png')}}" style="width: 100px; " >
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <h2 class="text-primary">Jess Santiago 1</h2>
                                <p class="text-muted">@jess_santiago</p>
                                <div class="d-flex justify-content-center">
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                </div>
                            </div>
                            <div class="pt-4 pb-5 px-5">
                                “Outstanding IT support! Quick response times and knowledgeable technicians. Highly recommended!”
                            </div>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <img class="img-fluid rounded" src="{{ asset('assets/img/testimonials/img-1.png')}}" style="width: 100px; " >
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <h2 class="text-primary">Jess Santiago 1</h2>
                                <p class="text-muted">@jess_santiago</p>
                                <div class="d-flex justify-content-center">
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                    <span class="text-warning">&#9733;</span>
                                </div>
                            </div>
                            <div class="pt-4 pb-5 px-5">
                                “Outstanding IT support! Quick response times and knowledgeable technicians. Highly recommended!”
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
                <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
            </ol>
        </div>





@endsection
