
@extends('landing.layouts.base')

@section('contents')

<div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="position-relative pb-3">
                    <h1>Welcome To <span class="text-primary">IVT</span></h1>
                </div>
                <p class="mb-2 text-justify"><span class="text-primary">Intelli Vectra Technologies</span> is an IT Solution Provider that is technology and vendor agnostic. Our client relationships are fiduciary because we always look out for our clients' best interests and use Innovation and Engagement to transform organisations.
                </p>
                <p class="text-justify">
                    We offer the finest customer experience and an easy-to-use platform that analyses clients' needs and helps businesses.
                </p>

                <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg></a>
            </div>
            <div class="col-lg-6" >
                <div class="card" style="min-height: 300px;">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/about-us-1.png')}}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.2s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 d-flex aligns-content-center justify-content-center" style="min-height: 600px;" >
                <img class="position-absolute h-100 rounded wow zoomIn" style="min-height: 600px;" data-wow-delay="0.9s" src="{{ asset('assets/img/about-5.svg')}}" >
            </div>
            {{-- <div class="col-lg-4">
                <div class="position-relative pb-3">
                    <h1>Welcome To <span class="text-primary">IVT</span></h1>
                </div>
                <p class="mb-2"><span class="text-primary">Intelli Vectra Technologies</span> is an IT Solution Provider that is technology and vendor agnostic. Our client relationships are fiduciary because we always look out for our clients' best interests and use Innovation and Engagement to transform organisations.
                </p>
                <p>
                    We offer the finest customer experience and an easy-to-use platform that analyses clients' needs and helps businesses.
                </p>

                <a href="quote.html" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg></a>
            </div> --}}

        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="fw-boldtext-uppercase">Meet our <span class="text-primary">Leaders</span></h1>
            <p class="mb-0">Start your future today, connect with the IVT team</p>
        </div>
        <div class="d-flex flex-row aligns-content-center justify-content-center">
            <div class="team-card wow slideInUp mx-4" data-wow-delay="0.3s">
                <div class="team-item bg-light overflow-hidden">
                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50" src="{{ asset('assets/img/team-2.png')}}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="fw-bold">MANAS <span class="text-primary">SINHA</span></h4>
                        <p class="m-0 my-3">Founder, CEO & MD</p>
                        <i class="fab fa-linkedin-in fw-normal text-primary" ></i>
                    </div>
                </div>
            </div>
            <div class="team-card wow slideInUp mx-4" data-wow-delay="0.3s">
                <div class="team-item bg-light  overflow-hidden">
                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50" src="{{ asset('assets/img/team-1.png')}}" alt="">
                    </div>
                    <div class="text-center py-4">
                        <h4 class="fw-bold">MANOJ <span class="text-primary">PRADHAN</span></h4>
                        <p class="m-0 my-3">Executive Director</p>
                        <i class="fab fa-linkedin-in fw-normal text-primary" ></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
