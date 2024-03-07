
@extends('landing.layouts.base')

@section('contents')

    @include('landing.components.pages.about-section')

    <div class="container-fluid pt-2 wow fadeInUp" data-wow-delay="0.1s">
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
