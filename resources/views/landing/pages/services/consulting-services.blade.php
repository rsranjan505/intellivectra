
@extends('landing.layouts.base')

@section('contents')


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 pt-3" >
                <div class="" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/service-po-1.png')}}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pl-5">
                <div class="position-relative pb-3">
                    <h1>About <span class="text-primary"> {{ ucfirst($data['title'])}} Services</span></h1>
                </div>
                <p class="mb-2 text-justify">At Intelli Vectra, our focus is on delivering exceptional value to our clients through our comprehensive suite of services. Whether it's managing servers or providing support to end-users, we understand the importance of addressing diverse needs across various domains. With a commitment to optimising performance and driving success, we leverage our expertise and innovative solutions to help businesses thrive in today's dynamic environment.
                </p>

                {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg></a> --}}
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 bg-primary wow fadeInUp" data-wow-delay="0.2s">
    <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
            <h1>Our <span class="text-primary"> Offerings</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Server Management</h5>
                        <p class="text-justify">Full-service solutions for OS, Active Directory, virtualization, upgrades, and migrations with 24x7 support.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Storage, Backup, and Recovery</h5>
                        <p class="text-justify">Full-service solutions for OS, Active Directory, virtualization, upgrades, and migrations with 24x7 support.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-2.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Network and Unified Communication</h5>
                        <p class="text-justify">Evaluation, design, implementation, and monitoring for LAN, WAN, wireless, with 24x7 support.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Cloud Services</h5>
                        <p class="text-justify">Design, integration, monitoring, support, analytics, upgrades for seamless cloud operations.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-4.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Database Services</h5>
                        <p class="text-justify">Design, implementation, monitoring, administration, upgrades, patch management, with continuous support.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-5.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">End User Services</h5>
                        <p class="text-justify">Evaluation, training, support for device, application rollouts, O365, migrations, upgrades.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s" >
    <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
            <h1 >How it <span class="text-primary"> Works </span></h1>

        </div>
        <div class="row g-5">

            <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
                <div class="d-flex flex-row justify-content-center ">
                    <div class="row d-flex flex-row justify-content-between">
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/oem-1.svg')}}" >
                            <h5>Step-1 </h5>
                            <p>We evaluate your systems to understand your needs.</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}" >
                            <h5>Step-2</h5>
                            <p>Tailored solutions are designed based on assessment. </p>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/oem-2.svg')}}" >
                            <h5>Step-3</h5>
                            <p>Seamless integration into your environment. </p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.1s"  src="{{ asset('assets/img/service-orm-2.svg')}}" >
                            <h5 class="">Step-4</h5>
                            <p>24x7 support ensures smooth operation. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-12 my-5 mb-5" style="min-height: 600px">
    <div class="row mb-5">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="container-fluid py-4 wow fadeInUp bg-primary ml-5" data-wow-delay="0.4s" >
                <div class="container">
                    <div class="text-center position-relative pb-3 mb-4 mx-auto">
                        <h4 class="text-left text-primary">Key Features of Our Platform and Operational Services</h4>
                        <p class="text-left mb-0">Our services offer comprehensive, tailored solutions supported by expertise and 24x7 support. With end-to-end coverage from evaluation to ongoing assistance, we ensure maximum effectiveness and uninterrupted operation for our clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="service-feature bg" style="height: 300px">
                <div class="row g-5">
                    <div id="service-feature" class="px-5 owl-carousel service-feature-carousel">
                        <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
                            <div class=" wow slideInUp mx-2 " data-wow-delay="0.3s">
                                <div class="ser-feature-card bg-light overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                                        <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="fw-bold">Enhanced Efficiency</h5>
                                        <p class="mx-3 text-center m-0 my-3">Streamlined operations boost overall efficiency. </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                            <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                                <div class="ser-feature-card  bg-light overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="fw-bold">Enhanced Efficiency</h5>
                                        <p class="mx-3 text-center m-0 my-3">Streamlined operations boost overall efficiency. </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <ol class="carousel-indicators">
                            <li data-target="#blogs" data-slide-to="0" class="active"></li>
                            <li data-target="#blogs" data-slide-to="1"></li>
                            <li data-target="#blogs" data-slide-to="2"></li>
                        </ol> --}}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<div class="carousel-inner" >
    <div class="carousel-item active">
        <img class="w-100" src="{{ asset('assets/img/service/feature-bg.jpg')}}" alt="Image">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="container">
                <div class="p-3 text-left">
                    <h4>EXPERIENCE CENTRE</h4>
                    <h2 class="text-primary mb-md-1"><span class="text-white mb-md-4">Visit our IVT Platform to learn how our solutions can help you</span> Work Better and Smarter.</h2>
                    <p></p>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container my-5 ">
    <div class="accordion feature-faq" id="accordionExample" >
        <div class="card"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
            <div class="card-header" >
                <h6>What industries do you specialise in?</h6>

                <div class="acoord-btn text-right mr-2">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    <span  class="accicon"><i class="py-2 px-3 fas fa-angle-down rotate-icon"></i></span>
                </div>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordionExample">
                <div class="card-body">
                    <p>We specialise in catering to a wide range of industries, ensuring our services meet diverse needs effectively.</p>
                </div>
            </div>
        </div>
        <div class="card"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true">
            <div class="card-header">
                <h6>How do you ensure smooth implementation of platform and operational services? </h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    <span  class="accicon"><i class=" py-2 px-3 fas fa-angle-down rotate-icon"></i></span>
                </div>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="card" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
            <div class="card-header">
                <h6>What level of support do you offer for platform and operational services? </h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span>
                </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="card" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
            <div class="card-header">
                <h6>Can you accommodate specific requirements or preferences in your platform and operational solutions? </h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span>
                </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="card" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
            <div class="card-header">
                <h6>How do you handle scalability in platform and operational services?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span>
                </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>

    </div>
</div>


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


@endsection
