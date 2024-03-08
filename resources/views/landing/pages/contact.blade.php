
@extends('landing.layouts.base')

@section('contents')



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

        <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-6 col-sm-12" style="min-height: 380px;">
                        <div class="position-relative h-100">
                            {{-- <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/contact-1.jpg')}}" style="object-fit: cover;"> --}}

                            <div class="six-columns bottom-padding-20">
                                <div class="contact-content">
                                <h1 data-animation-child class="text-trans-none blue-text word-spacing-15 xxlarge-title">
                                <span
                                 class="txt-rotate text-primary"
                                 data-period="300"
                                 data-rotate='[ "Hello", "नमस्ते", "Nǐ hǎo", "Halo", "Hola", "Ciao" ]'>
                                 </span>
                                </h1>

                                <p class="pt-2">Let's chat over a cup of coffee or tea or . . . anything  <br class="hidden-phone" />else you would prefer!</p>

                                <hr class="mt-2" style="width: 25%; float:left;"/>

                                <h3 class="pt-5 blog-title">We are open for great ideas <br class="hidden-phone" />(almost) every day!</h3>

                                <h3 class="pt-2 blog-title">Drop us an email at:</>

                                <p class="p-style-large"><a class="blue-text" href="mailto:info@intellivectra.tech">info@intellivectra.tech</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="container">
                            <div class="position-relative px-3">
                                <h1><span class="text-primary">Get in</span> Touch With Us !</h1>
                                <p>Fill up the Form and our team will get back to within 24 hrs</p>
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

        <div class="container-fluid py-5 my-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-4 col-sm-12 py-4 px-4" >
                        <div class="d-flex align-items-center flex-column justify-content-center">
                            <img class="rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/contact-3.png')}}" style="object-fit: cover;">
                            <div class="d-flex align-items-center flex-column justify-content-cente w-50 py-3">
                                <h4 class="contact-text"><span class="text-primary">Delhi, NCR</span></h4>
                                <p class="text-center text-justify">2nd Floor, Plot No. 29, Maruti Industrial Area, Sector-18, Gurugram–122015, Haryana</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 py-4 px-4">
                        <div class="d-flex align-items-center flex-column justify-content-center">
                            <img class="rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/contact-2.png')}}" style="object-fit: cover;">
                            <div class="d-flex align-items-center flex-column justify-content-cente w-50 py-3">
                                <h4 class="contact-text"><span class="text-primary">Dubai, UAE</span></h4>

                                <p class="text-center text-justify">Office #1111, Clover Bay Tower, Business Bay, PO Box: 283426, Dubai, UAE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 py-4 px-4">
                        <div class="d-flex align-items-center flex-column justify-content-center">
                            <img class="rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/india-gate.jpg')}}" style="object-fit: cover;">
                            <div class="d-flex align-items-center flex-column justify-content-cente w-50 py-3">
                                <h4 class="contact-text"><span class="text-primary">Maharastra, Mumbai</span></h4>

                                <p class="text-center text-justify">Cooming Soon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
