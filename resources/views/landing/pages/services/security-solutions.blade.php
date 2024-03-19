
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
                    <h1>About <span class="text-primary"> Security Solution</span></h1>
                </div>
                <p class="mb-2 text-justify">At Intelli Vectra Technologies, we specialise in providing top-notch security services to
                    protect your valuable data and ensure your employees can work securely from anywhere.
                    Our comprehensive approach helps you assess risks, implement robust protection
                    measures, and gain control over your most important asset - your data.</p>

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
            <p>We offer a range of advisory and managed security services tailored to your business needs.
                Our services include:</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Risk assessment</h5>
                        <p class="text-justify">We help identify potential security risks to your business.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Implementation of industry-leading protection services</h5>
                        <p class="text-justify">We assist in deploying
                            advanced security measures to safeguard your data.
                        </p>
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
                        <h5 class="fw-bold">Web security solutions</h5>
                        <p class="text-justify">We provide proactive measures to prevent unauthorised
                            access and malware attacks on your online platforms.
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Managed Services</h5>
                        <p class="text-justify">Efficient and secure cloud infrastructure management.
                        </p>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-4.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Organisation Transformation</h5>
                        <p class="text-justify">Driving change with behavioural analytics</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-5.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">On-Demand Consulting</h5>
                        <p class="text-justify">Efficient resource management for project demands.</p>
                    </div>
                </div>
            </div>
        </div> --}}
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
                            <p>We check your security for weaknesses.</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}" >
                            <h5>Step-2</h5>
                            <p>We set up protections that fit your business.</p>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/oem-2.svg')}}" >
                            <h5>Step-3</h5>
                            <p>We keep you updated on your security regularly.
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.1s"  src="{{ asset('assets/img/service-orm-2.svg')}}" >
                            <h5 class="">Step-4</h5>
                            <p>We watch for any problems 24/7.</p>
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
                        <h4 class="text-left text-primary">Key Features of  Our Security Solutions</h4>
                        <p class="text-justify mb-0">Our security services offer a comprehensive approach to safeguarding your business. We
                            begin with thorough risk assessments and implement customized security measures tailored
                            to your needs. Our vigilant monitoring ensures timely threat detection, while regular reports
                            keep you informed about your security status. Prioritising proactive measures, we aim to
                            prevent data breaches and cyber-attacks, allowing your business to operate securely and
                            focus on growth with confidence</p>
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
                                        <h5 class="fw-bold">Enhanced protection</h5>
                                        <p class="mx-3 text-center m-0 my-3">Our proactive approach helps prevent data breaches and
                                            cyber-attacks.</p>

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
                                        <h5 class="fw-bold">Increased productivity</h5>
                                        <p class="mx-3 text-center m-0 my-3"> With secure systems in place, your employees can focus
                                            on their work without worrying about security issues</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                            <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                                <div class="ser-feature-card  bg-light overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="fw-bold">Peace of mind</h5>
                                        <p class="mx-3 text-center m-0 my-3">Knowing that your data is safe allows you to focus on growing your
                                            business with confidence.</p>
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
    <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <h4 class="fw-bold text-primary">FAQ</h4>
    </div>

    <div class="accordion feature-faq" id="accordionExample" >
        <div class="card"  >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
                <h6 class="fw-bold">What types of security solutions do you offer?</h6>
                <div class="acoord-btn text-right mr-2">

                </div>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordionExample">
                <div class="card-body">
                    <p>We provide a range of security solutions, including web security, endpoint protection,
                        cloud security, and identity detection and response (IDR) solutions.
                        </p>
                </div>
            </div>
        </div>

        <div class="card" >
            <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                <h6 class="fw-bold">How do your security solutions ensure data confidentiality?
                </h6>
                <div class="acoord-btn text-right mr-2">

                </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Our security solutions employ industry-standard encryption protocols and access
                        control measures to safeguard your sensitive data from unauthorised access or
                        breaches.</p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
                <h6 class="fw-bold">Can your security solutions be customised to meet our specific industry
                    requirements?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Yes, we specialise in tailoring our security solutions to address the unique needs and
                        compliance standards of various industries, ensuring comprehensive protection for
                        your business.</p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
                <h6 class="fw-bold">What makes your web security solutions stand out from others on the market?
                     </h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Our web security solutions are characterised by their proactive approach and
                        continuous updates to stay ahead of emerging cyber threats, offering robust
                        protection for your online assets and platforms.
                        </p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
                <h6 class="fw-bold">How can we integrate your security solutions into our existing infrastructure?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>We offer seamless integration services, working closely with your IT team to
                        implement our security solutions with minimal disruption to your operations. Simply
                        reach out to us, and we'll guide you through the process of fortifying your business
                        against cyber threats.
                        </p>
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
