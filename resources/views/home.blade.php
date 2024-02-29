
@extends('landing.layouts.base')

@section('contents')
        <!-- About Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #FEFBF5;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h3 class="">About <span class="text-primary">IVT</span></h3>
                        </div>
                        <p class="mb-4">Intelli Vectra stands as a technology and vendor-agnostic solution provider. Our client relationships are fiduciary, dedicated to safeguarding their best interests as we drive business transformation through innovation and engagement. Embracing a holistic approach, we navigate diverse technological landscapes to deliver bespoke solutions tailored to each client's unique needs. Our commitment extends beyond mere consultation; we actively collaborate with clients, fostering an environment of mutual growth and success. By prioritizing innovation and fostering meaningful engagement, we empower businesses to adapt, thrive, and seize new opportunities in an ever-evolving digital ecosystem.</p>

                        <a href="quote.html" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Know More <i class="bi bi-plus"></i></a>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/about-1.png')}}" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h3 class=""><span class="text-primary">IVT</span> Approach</h3>
                    <h5 class="mb-0">At IVT, We love technology - But we are obsessed with your success.</h5>
                </div>
                <div class="row g-5">

                    <div class="col-lg-12 " data-wow-delay="0.9s" style="min-height: 650px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" data-wow-delay="0.1s" src="{{ asset('assets/img/home-2.jpg')}}" >
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.2s" style="background-color: #FEFBF5;">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto">
                    <h3 class=""><span class="text-primary">Services & </span>Soloutions</h3>
                    <h5 class="mb-0">Empowering Your Digital Journey: Seamless Solutions for Every IT Need.</h5>
                </div>
                <div class="row g-5">

                    <div class="col-lg-12 " data-wow-delay="0.9s" style="min-height: 550px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute h-100" data-wow-delay="0.1s" src="{{ asset('assets/img/pie.png')}}" >
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.3s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto">
                    <h3 class="">Our <span class="text-primary">Process</span>  </h3>
                    <h5 class="mb-0">Streamlined Solutions for Seamless IT Services Tailored to Your Business Needs.</h5>
                </div>
                <div class="row g-5">

                    <div class="col-lg-12 " data-wow-delay="0.9s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute h-100" data-wow-delay="0.3s" src="{{ asset('assets/img/home-3.png')}}" >
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.4s" style="background-color: #FEFBF5;">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto">
                    <h3 class="">Our<span class="text-primary"> USP</span></h3>
                    <h5 class="mb-0">Tailored IT Solutions for Seamless Operations, Reliable Support, Cybersecurity Expertise, Innovation-driven Approach, Client-Centric Services, Proven Results.</h5>
                </div>
                <div class="row g-5">

                    <div class="col-lg-12 " data-wow-delay="0.9s" style="min-height: 340px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute" data-wow-delay="0.4s" src="{{ asset('assets/img/home-4.png')}}" >
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="flex-row justify-content-between">
                    <div class="d-flex flex-row justify-content-between">
                        <h3 class=""><span class="text-primary">Case </span> Studies</h3>
                        <a class="btn text-primary" href="#"> See All</a>
                    </div>
                </div>
                <div class="case-content row mt-5 shadow shadow-warning shadow-intensity-lg">
                    <div class="col-lg-6">
                        <div class="card" style="width: 28rem;">
                            <img class="card-img-top" src="{{ asset('assets/img/home-5.png')}}" alt="Card image cap">
                          </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class=""> <span class="text-primary"> SmartCityTech</span> Solutions</h3>
                        <h5 class="mb-0"><strong>Challenge:</strong></h5>
                        <p class="mb-4">SmartCityTech Solutions pioneers innovative IT services, specializing in the development of integrated command and control solutions for smart cities. With a focus on dynamic data analysis and security, they empower urban environments to make efficient, informed, and coordinated decisions, driving forward the evolution of modern city infrastructure.</p>

                        <a href="quote.html" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Know More <i class="bi bi-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #FEFBF5;">
            <div class="container py-5">
                <div class="flex-row justify-content-between">
                    <div class="d-flex flex-row justify-content-between">
                        <h3 class="">Our<span class="text-primary"> OEMs </span></h3>
                        <a class="btn text-primary" href="#"> See All</a>
                    </div>
                </div>
                <p>Partnering with industry-leading manufacturers to deliver cutting-edge technology solutions tailored to your business needs.</p>

                <div class="d-flex flex-row justify-content-center ">
                    <div class="row row-line justify-content-center">
                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-1.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-2.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-3.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo">
                            <img src="{{ asset('assets/img/brand/b-4.png')}}" width="100px"/>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-center ">
                    <div class="row row-line justify-content-center">
                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-5.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-6.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-7.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-8.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo ">
                            <img src="{{ asset('assets/img/brand/b-9.png')}}" width="100px"/>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center ">
                    <div class="row row-line justify-content-center">
                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-10.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-11.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-12.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo">
                            <img src="{{ asset('assets/img/brand/b-13.png')}}" width="100px"/>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-center ">
                    <div class="row row-line justify-content-center">
                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-14.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-15.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-16.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-17.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo ">
                            <img src="{{ asset('assets/img/brand/b-18.png')}}" width="100px"/>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-center ">
                    <div class="row row-line justify-content-center">
                        <div class="brand-logo column-line">
                            <img src="{{ asset('assets/img/brand/b-19.png')}}" width="100px"/>
                        </div>

                        <div class="brand-logo">
                            <img src="{{ asset('assets/img/brand/b-20.png')}}" width="100px"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="case-content row mt-5 shadow shadow-warning shadow-intensity-lg">
                    <div class="col-lg-6">
                        <h3 class="">Get <span class="text-primary">  Expert’s Advice </span></h3>
                        <p class="mb-4">This Gartner® Market Guide on Microsegmentation highlights today's important key findings when it comes to the security and risk management and recommendations that SRM leaders responsible for infrastructure security should follow.</p>

                        <a href="quote.html" class="btn btn-primary rounded-pill py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Schedule a call <i class="bi bi-plus"></i></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="card" style="width: 28rem;">
                            <img class="card-img-top" src="{{ asset('assets/img/home-6.png')}}" alt="Card image cap">
                          </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog Start -->
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #FEFBF5;">
            <div class="container py-5">
                <div class="flex-row justify-content-between">
                    <div class="d-flex flex-row justify-content-between">
                        <h3 class="">Latest <span class="text-primary"> Blogs </span></h3>
                        <a class="btn text-primary" href="#"> See All</a>
                    </div>
                </div>
                <div class="row g-5">
                    <!-- Blog list Start -->
                    <div class="col-lg-12">
                        <div class="row g-5 mt-6">
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item bg-light shadow shadow-warning shadow-intensity-lg rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                        {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                        </div>
                                        <h4 class="mb-3">Maximizing Efficiency and Talent Acquisition with Professional Staffing Services</h4>
                                        <p>In today's competitive business landscape, companies are constantly striving to optimize their operations and gain a competitive edge. One crucial aspect of this optimization is ensuring that the right talent is in the right place at the right time. Efficient staffing solutions play a pivotal role in achieving this goal. Whether it's scaling up for a new project or filling crucial skill gaps, having access to a reliable staffing service can make all the difference.</p>
                                        <a class="btn btn-dark rounded-pill" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                                <div class="blog-item bg-light shadow shadow-warning shadow-intensity-lg rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('assets/img/blog/blog-2.png')}}" alt="">
                                        {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                            <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                                        </div>
                                        <h4 class="mb-3">Maximizing Efficiency and Talent Acquisition with Professional Staffing Services</h4>
                                        <p>In today's competitive business landscape, companies are constantly striving to optimize their operations and gain a competitive edge. One crucial aspect of this optimization is ensuring that the right talent is in the right place at the right time. Efficient staffing solutions play a pivotal role in achieving this goal. Whether it's scaling up for a new project or filling crucial skill gaps, having access to a reliable staffing service can make all the difference.</p>
                                        <a class="btn btn-dark rounded-pill" href="">Read More <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog list End -->
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="case-content row mt-5 shadow shadow-warning shadow-intensity-lg">
                    <div class="col-lg-6">
                        <h3 class=""> <span class="text-primary"> Get in  </span>Touch</h3>
                        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container py-5">
                                <div class="row g-5">
                                    <div class=" wow slideInUp" data-wow-delay="0.3s">
                                        <form>
                                            <div class="row g-3">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control border border-warning rounded-pills px-4" placeholder=" Name" style="height: 55px;">
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="email" class="form-control border border-warning rounded-pills px-4" placeholder=" Email" style="height: 55px;">
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" class="form-control border border-warning rounded-pills px-4" placeholder="Mobile" style="height: 55px;">
                                                </div>

                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card" style="width: 28rem;">
                            <img class="card-img-top" src="{{ asset('assets/img/get-in-touch.png')}}" alt="Card image cap">
                          </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
