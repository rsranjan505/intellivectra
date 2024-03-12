
@extends('landing.layouts.base')

@section('contents')


    <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 col-sm-12" style="min-height: 380px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" data-wow-delay="0.9s" src="{{ asset('assets/img/car-apply.png')}}" style="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="container">
                        <div class="position-relative px-3">
                            <h1>Join the <span class="text-primary">Team</span> </h1>
                            <p>At our staffing and consultancy firm, we welcome bright minds to join and help us excel. If you're eager to make a significant impact, we're excited to offer you opportunities.</p>
                        </div>
                        <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
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
                                            <textarea type="text" rows="6" class="form-control border border-warning form-input-textarea input-form" placeholder="Message" ></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-dark form-input-rounded ml-3 mt-4 px-4 text-center" type="submit">Send  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
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
