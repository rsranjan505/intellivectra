
@extends('landing.layouts.base')

@section('contents')

    <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container">
            <div class="career-box-title pt-3 pl-3 mx-5" >
                <div class="d-flex align-items-start justify-content-between pb-3">
                    <div class="text-left ml-4">
                        <h6 class="fw-bold text-primary pl-2">Find Open Jobs</h6>
                        <input class="title-box" placeholder="Search by job title/ref. code"></input>
                    </div>
                    <div class="text-left">
                        <h6 class="fw-bold text-primary pl-2">Located in</h6>
                        <input class="title-box" placeholder="Office, data center, or remote locations"></input>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <button class="btn btn-primary btn-sm cereer-search-btn mr-3" >
                            <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <!-- Accordion -->
            <div id="accordionExample" class="accordion shadow">

              <!-- Accordion item 1 -->
              <div class="card">
                <div id="headingOne" class="card-header bg-white shadow-sm border-0">
                  <h2 class="mb-0">
                    <button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                      aria-controls="collapseOne"
                      class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">Senior Software Engineer - Customer Success</button>
                  </h2>
                </div>
                <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
                  <div class="card-body p-5">

                        <h4>Years of Experience Required: 6 to 10 Years</h4>
                        <h4>Department: Customer Success</h4>
                        <h4>Job Type: Remote</h4>
                        <h4>Location: Bangalore, INDIA</h4>
                        <p class="font-weight-light m-0"><strong>Role Description:</strong> Drive long-term success and adoption, serving as the primary customer interface. Responsibilities include ensuring strong account retention, defining success plans, resolving escalations, and identifying upsell opportunities. Desired candidates possess 6-10 years of delivery experience, strong relationship-building skills, and an ability to multitask in dynamic environments. A Bachelor's degree is required, with cybersecurity knowledge and SaaS experience preferred.</p>

                  </div>
                </div>
              </div><!-- End -->

              <!-- Accordion item 2 -->
              <div class="card">
                <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
                  <h2 class="mb-0">
                    <button type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                      aria-controls="collapseTwo"
                      class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link">Digital Transformation Consultant</button>
                  </h2>
                </div>
                <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
                  <div class="card-body p-5">
                    <h4>Years of Experience Required: 6 to 10 Years</h4>
                    <h4>Department: Customer Success</h4>
                    <h4>Job Type: Remote</h4>
                    <h4>Location: Bangalore, INDIA</h4>
                    <p class="font-weight-light m-0"><strong>Role Description:</strong> Drive long-term success and adoption, serving as the primary customer interface. Responsibilities include ensuring strong account retention, defining success plans, resolving escalations, and identifying upsell opportunities. Desired candidates possess 6-10 years of delivery experience, strong relationship-building skills, and an ability to multitask in dynamic environments. A Bachelor's degree is required, with cybersecurity knowledge and SaaS experience preferred.</p>
                  </div>
                </div>
              </div><!-- End -->

              <!-- Accordion item 3 -->
              <div class="card">
                <div id="headingThree" class="card-header bg-white shadow-sm border-0">
                  <h2 class="mb-0">
                    <button type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                      aria-controls="collapseThree"
                      class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link">Staffing Consultant</button>
                  </h2>
                </div>
                <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
                  <div class="card-body p-5">
                    <p class="font-weight-light m-0">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                      terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                      quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                      single-origin coffee nulla assumenda shoreditch et.</p>
                  </div>
                </div>
              </div><!-- End -->

            </div><!-- End -->
          </div>
        </div>
      </div>

    <div class="container-fluid pt-2 wow fadeInUp" data-wow-delay="0.3s">
        <div class="container py-4">
            <div class="text-center position-relative mx-auto">
                <h1>Contact & <span class="text-primary">Join Together</span> </h1>
                <p class="mb-0">Connect with Us Today to Enhance Efficiency and Drive Growth Together.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 py-4" data-wow-delay="0.9s">
                    <div class="position-relative d-flex flex-row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start ">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img src="{{asset('assets/img/phone.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">24*7 Services</p>
                                        <h6 class="text-primary contact-text">Call Us On</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">Tel: 012-4496-0635</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img class="pr-2" src="{{asset('assets/img/email.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">Mail</p>
                                        <h6 class="text-primary contact-text">Mail Address</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">info@intellivectra.tech</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img class="pr-2" src="{{asset('assets/img/location.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">Location</p>
                                        <h6 class="text-primary contact-text">Visit Us At</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">2nd Floor, Plot No. 29, Maruti Industrial Area, Sector-18, Gurugram–122015 (Haryana).</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img class="pr-2" src="{{asset('assets/img/time.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">Office Hours</p>
                                        <h6 class="text-primary contact-text">Opening Time</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">Mon - Fri : 9am - 8pm
                                    Sat - Sun (Closed)</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
