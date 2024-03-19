
@extends('landing.layouts.base')

@section('contents')

    <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container">
            <div class="oem-search-box " >
                <div class="d-flex align-items-start justify-content-between">
                    <input type="search" class="oem-search-input p-2 mr-2" placeholder="Search OEMS">
                    <a href="#" class="box-shadow p-2 px-2 bg-primary mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                          </svg>
                    </a>

                </div>

            </div>
        </div>
    </div>




<div class="education">
    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
      {{-- <li class="nav-item" role="presentation">
        <a class="nav-link active" id="pills-btech-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-btech" aria-selected="true">B Tech</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-intermediate-tab" data-toggle="pill" href="#pills-intermediate" role="tab" aria-controls="pills-intermediate" aria-selected="false">Intermediate</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="pills-tenth-tab" data-toggle="pill" href="#pills-tenth" role="tab" aria-controls="pills-tenth" aria-selected="false">Tenth</a>
      </li> --}}
    </ul>
    {{-- <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-btech" role="tabpanel" aria-labelledby="pills-btech-tab">

            <div class="container">
              <div class="row ">
                <div class="col lg-6">College Name</div>
                <div class="col lg-6">CVR College of Engineering</div>

              </div>
              <div class="row ">
                <div class="col lg-6">Location</div>
                <div class="col lg-6">Mangalpally,Hyderabad</div>

              </div>
              <div class="row ">
                <div class="col lg-6">Stream</div>
                <div class="col lg-6">CSE</div>

              </div>
            </div>

      </div>
      <div class="tab-pane fade" id="pills-intermediate" role="tabpanel" aria-labelledby="pills-intermediate-tab">

            <div class="container">
              <div class="row ">
                <div class="col lg-6">College Name</div>
                <div class="col lg-6">Narayana Jr College</div>

              </div>
              <div class="row ">
                <div class="col lg-6">Location</div>
                <div class="col lg-6">Dilsukhnagar,Hyderabad</div>

              </div>
              <div class="row ">
                <div class="col lg-6">Stream</div>
                <div class="col lg-6">MPC</div>

              </div>
            </div>
      </div>
      <div class="tab-pane fade" id="pills-tenth" role="tabpanel" aria-labelledby="pills-tenth-tab">

            <div class="container">
              <div class="row ">
                <div class="col lg-6">School Name</div>
                <div class="col lg-6">Vignan Integrated High School</div>

              </div>
              <div class="row ">
                <div class="col lg-6">Location</div>
                <div class="col lg-6">Nadergul,Hyderabad</div>

              </div>

            </div>
      </div>
    </div>
    </div> --}}


    <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="pb-2"><span class="text-primary">  Disk Archive Corporation </span></h4>
                        <div class="" style="height: 0px;">
                            <img alt="oems disk" style="width: 250px; margin-top:-80px;"  src="{{ asset('assets/img/oems/disk.png')}}" class=""/>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction" role="tabpanel" aria-labelledby="pills-introduction-tab">

                            <h5 class="pb-1">Introduction</h5>
                            <p class="mb-4 text-justify">The archive storage innovation, Disk Archive Corporation stands as a pioneer with its
                                groundbreaking ALTO systems. For over 15 years, this OEM has been at the forefront of
                                revolutionising cold data storage, catering specifically to the film, television, and legal
                                evidence sectors. With a track record of over 400 systems in daily operation, Disk Archive
                                Corporation has solidified its position as a trusted Archive Solution provider in the industry.</p>
                                <p>Disk Archive Corporation's ALTO systems deliver a trifecta of scalability, flexibility, and
                                    reliability, perfectly meeting the demanding requirements of modern media-related
                                    organisations. Unlike traditional robotic tape libraries or clustered RAID setups, ALTO offers
                                    a cost-effective alternative with its high-density, enterprise-class offline data archive platform.
                                    This not only simplifies storage management but also ensures high security through
                                    user-defined replication levels</p>
                        </div>
                        <div class="tab-pane fade" id="pills-benifits" role="tabpanel" aria-labelledby="pills-benifits-tab">
                            <h5>
                                The benefits of choosing ALTO are -
                            </h5>
                            <ul>
                                <li>Cost-effective Sustainability: ALTO ensures low ownership costs and minimal</li>
                                <li>environmental impact, supporting businesses' sustainability aims.</li>
                                <li>Speedy Data Retrieval: ALTO prioritises quick content restoration, vital for
                                    organisations needing swift access to archived data.</li>
                                <li>Enhanced Data Security: Advanced encryption for compliance and protection.</li>
                                <li>Scalability: Flexible storage options that grow with business needs.
                                    Also Disk Archive Corporation's ALTO systems provide exceptional data protection
                                    strategies, including transparent encryption and secure bulk end-of-life erasure, ensuring the
                                    utmost security for valuable assets.</li>
                            </ul>

                        </div>
                        <div class="tab-pane fade" id="pills-journey" role="tabpanel" aria-labelledby="pills-journey-tab">
                            <p>
                                ALTO's scalability is unparalleled, allowing for seamless expansion as business needs
                                evolve, without the hassle of costly migrations. With the ability to scale up to 1EiB without
                                compromising on performance or reliability, ALTO presents a future-proof solution for
                                growing storage demands.
                            </p>
                            <p>
                                Disk Archive Corporation's dedication to archive innovation shines through its ALTO
                                systems, offering a comprehensive solution that prioritises performance, affordability, and
                                environmental sustainability. By choosing ALTO, businesses can safeguard their valuable
                                assets while unlocking their full potential in today's dynamic and data-driven landscape.
                            </p>
                        </div>
                    </div>



                </div>
                {{-- <div class="col-lg-4 col-md-4 col-sm-12"  >


                </div> --}}
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="d-flex flex-column justify-content-center" >
                        {{-- <div class="nav nav-pills mb-3" id="pills-tab" role="tablist"> --}}
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item mb-2" role="presentation">


                                <a class=" active" id="pills-introduction-tab" data-toggle="pill" href="#pills-introduction" role="tab" aria-controls="pills-introduction" aria-selected="true"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Introduction</h5>
                                    </div><img alt="oems disk"  src="{{ asset('assets/img/oems/disk-c-1.png')}}" class=""/> </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">

                                <a class=" " id="pills-benifits" data-toggle="pill" href="#pills-benifits" role="tab" aria-controls="pills-benifits" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Benifits</h5>
                                    </div><img alt="oems disk" src="{{ asset('assets/img/oems/disk-c-2.png')}}" class=""/></a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">

                                <a class="" id="pills-journey" data-toggle="pill" href="#pills-journey" role="tab" aria-controls="pills-journey" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Journey</h5>
                                    </div><img alt="oems disk" src="{{ asset('assets/img/oems/disk-c-3.png')}}" class=""/></a>

                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.2s">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="oems-card mb-2">
                            <img alt="oems disk"  src="{{ asset('assets/img/oems/cyviz-c-1.png')}}" class=""/>
                        </div>
                        <div class="oems-card mb-2">
                            <img alt="oems disk" src="{{ asset('assets/img/oems/cyviz-c-2.png')}}" class=""/>
                        </div>
                        <div class="oems-card">
                            <img alt="oems disk" src="{{ asset('assets/img/oems/cyviz-c-3.png')}}" class=""/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12"  >
                    <div class="box-shadow" style="height: 450px;">
                        <img alt="oems disk" style="width:100%;
                        height:100%;" src="{{ asset('assets/img/oems/cyviz.png')}}" class=""/>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h4 class="pb-2"><span class="text-primary"> Cyviz </span></h4>
                    <h5 class="pb-1">Backup and Archive Solutions</h5>
                    <p class="mb-4 text-justify">Partnering with industry-leading OEMs, we offer robust backup and archive solutions designed to safeguard your critical data. From seamless data protection to efficient archival processes, our solutions ensure business continuity and compliance with regulatory requirements. With cutting-edge technology and reliable support, we empower your organization to securely store and retrieve data, mitigating risks of data loss or corruption.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.3s">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h4 class="pb-2"><span class="text-primary">  Scale Computing </span></h4>
                    <h5 class="pb-1">Backup and Archive Solutions</h5>
                    <p class="mb-4 text-justify">Partnering with industry-leading OEMs, we offer robust backup and archive solutions designed to safeguard your critical data. From seamless data protection to efficient archival processes, our solutions ensure business continuity and compliance with regulatory requirements. With cutting-edge technology and reliable support, we empower your organization to securely store and retrieve data, mitigating risks of data loss or corruption.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12"  >
                    <div class="box-shadow" style="height: 450px;">
                        <img alt="oems disk" style="width:100%;
                        height:100%;" src="{{ asset('assets/img/oems/scale.png')}}" class=""/>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="oems-card mb-2">
                            <img alt="oems disk"  src="{{ asset('assets/img/oems/disk-c-1.png')}}" class=""/>
                        </div>
                        <div class="oems-card mb-2">
                            <img alt="oems disk" src="{{ asset('assets/img/oems/disk-c-2.png')}}" class=""/>
                        </div>
                        <div class="oems-card">
                            <img alt="oems disk" src="{{ asset('assets/img/oems/disk-c-3.png')}}" class=""/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.4s">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="oems-card mb-2">
                            <img alt="oems disk"  src="{{ asset('assets/img/oems/cyviz-c-1.png')}}" class=""/>
                        </div>
                        <div class="oems-card mb-2">
                            <img alt="oems disk" src="{{ asset('assets/img/oems/cyviz-c-2.png')}}" class=""/>
                        </div>
                        <div class="oems-card">
                            <img alt="oems disk" src="{{ asset('assets/img/oems/cyviz-c-3.png')}}" class=""/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12"  >
                    <div class="box-shadow" style="height: 450px;">
                        <img alt="oems disk" style="width:100%;
                        height:100%;" src="{{ asset('assets/img/oems/motadata.png')}}" class=""/>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h4 class="pb-2"><span class="text-primary"> Motadata </span></h4>
                    <h5 class="pb-1">Backup and Archive Solutions</h5>
                    <p class="mb-4 text-justify">Partnering with industry-leading OEMs, we offer robust backup and archive solutions designed to safeguard your critical data. From seamless data protection to efficient archival processes, our solutions ensure business continuity and compliance with regulatory requirements. With cutting-edge technology and reliable support, we empower your organization to securely store and retrieve data, mitigating risks of data loss or corruption.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid wow fadeInUp my-5" data-wow-delay="0.1s">
        <div class="container">
            <div class="case-content row mt-5 box-shadow pb-4">
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
