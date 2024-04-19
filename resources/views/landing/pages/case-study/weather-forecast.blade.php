
@extends('landing.layouts.base')

@section('contents')

<div class="container-fluid pt-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container pt-2 py-4">
        <div class="text-left mx-auto">
            <h1 ><span class="text-primary">Enhancing Weather Forecast –</span> Services at the NWP Division of India Meteorological Department
            </h1>
            <div class=" ">
                <p class="mb-0 text-justify " >The <strong>Numerical Weather Prediction (NWP) Division</strong> of the <strong>India Meteorological Department (IMD), Ministry of Earth Science</strong> is producing multiple weather forecast products such as graphical representation and processed data of global and regional weather forecasts based on various NWP models.
                </p>
                <p class="text-justify">
                    As the web server is old enough to carry out the processing of model output and graphics generation through various software/scripts the server is hosting only the final output/graphics of limited products.
                </p>
                <p class="text-justify">
                    So, the NWP division proposed to procure a server with a virtual mission cluster and storage capacity.
                </p>
                <p class="text-justify">
                    IMD wanted a turn-key solution by the system integrator to enable virtual machine access to common storage. The system integrator should install fully configured hardware and enable software as a turn-key solution with the redundant network.
                </p>

            </p>
        </div>
        </div>
    </div>
</div>


<div class="container-fluid py-2 wow fadeInUp bg-primary" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <h1 class="text-left">Solution Provided by IVT </h1>
                <p class="text-justify">Intelli Vectra Technologies has provided a comprehensive solution to IMD that includes the following:
                </p>

                <h6>Hardware Provisioning:</h6>
                <ul style="margin-left:-24px;">
                    <li>Servers</li>
                    <li>Unified Storage</li>
                    <li>Smart Network Rack</li>
                    <li>Cables and Peripherals</li>
                </ul>

                <h6>Software and Virtualization:</h6>
                <ul style="margin-left:-24px;">
                    <li>Linux OS Installation</li>
                    <li>Virtual Machines</li>
                    <li>Application Software</li>
                </ul>

                <h6>Networking Infrastructure:</h6>
                <ul style="margin-left:-24px;">
                    <li>UTP Cabling</li>
                    <li>Passive Components</li>
                    <li>Network Switches</li>
                </ul>

                <p>This solution is designed to meet the rigorous demands of NWP-IMD, ensuring high availability, reliability, and scalability to support IMD’s critical weather prediction operations.
                Intelli Vectra technologies proposed the right technology to address their need and implemented the same successfully.</p>


            </div>

            <div class="col-lg-6" >
                <div class="case-gradient" style="position:relative; top: 10%; left: 35%;">
               <!-- <div class="oem-gradient-right" >
                    </div> -->
                    <img class="position-absolute  rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/weather.jpg')}}" style="object-fit:cover; margin-top:35px; width:500px; height:300px;position:relative; right: 10%; ">
            </div>
            </div>

            <!-- <div class="col-lg-6" >
                <div class="card" style="min-height: 300px; position:relative; top: 20%; left: 20%;">
                    <img class="position-absolute  rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/prayagraj.jpg')}}" style="object-fit:cover; margin-top:35px; width:500px; height:300px">
                </div>
            </div> -->
        </div>
    </div>
</div>


@include('landing.components.get-in-touch')

@endsection
