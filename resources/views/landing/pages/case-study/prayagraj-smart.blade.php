
@extends('landing.layouts.base')

@section('contents')

<div class="container-fluid pt-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container pt-2 py-4">
        <div class="text-center position-relative mx-auto">
            <h1 ><span class="text-primary">Prayagraj Smart City –</span> Smart Classroom Automation Framework</h1>
            <p class="mb-0 text-justify " >Prayagraj Smart City Limited (PSCL) is the special purpose vehicle created under the Smart City Mission to deliver several Pan City and Area Based Development Initiatives with a focus on both infrastructure and ICT advancements in the city and at strategic locations.
                The <strong>Prayagraj Smart City Limited (PSCL)</strong> under their PAN City projects, have envisaged implementing Smart Schools in Prayagraj city. PSCL plans to utilize information technology to modernize key functions of a Smart Classroom that is to build a well-informed, connected, smart and smooth operations for <strong>Prayagraj Government Schools Children under Smart classrooms Automation Framework.</strong>
            </p>
            <p class="mb-0 text-justify ">This will help the students to learn effectively, engage themselves to different kind of platforms for learning (Online/Offline/Digital Media Web content etc.).
                The video-based learning platform would help in  developing the education for students more engaging and interactive. The content and assignment are delivered online to standardize the teaching delivery.
            </p>
        </div>

    </div>
</div>



<div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="position-relative pb-3">
                    <h1>Solution Provided by IVT </h1>
                </div>
                <ol>
                    <li>Integrated Blended Classroom Solutions</li>
                        <div class="position-relative pt-2">
                            <h4>Integrated Single Box Device: - </h4>
                        </div>
                        <ul>
                            <li>Short Throw High-Definition Full HD LED Projection system</li>
                            <li>High Speed Computing for superior Performance,</li>
                            <li>Inbuilt cameras and software for Live Streaming video recording, and inbuilt speakers and microphones for audio capture,</li>
                            <li>Class recording software for remedial classes,</li>
                            <li>Live streaming and 2-way communication software</li>
                        </ul>
                    <li>Installation testing commissioning and project management</li>
                    <li>Operation Maintenance & Support for complete Smart School Infrastructure for 5 Years</li>
                    <li>Networking Cost for 5 Years for 4 School</li>

                </ol>

            </div>
            <div class="col-lg-6" >
                <div class="card" style="min-height: 300px;">
                    <img class="position-absolute  rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/case-deta-1.png')}}" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>


@include('landing.components.get-in-touch')

@endsection
