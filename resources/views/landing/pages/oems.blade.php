
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


    <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="d-flex flex-row justify-content-start">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  Disk Archive Corporation </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oem-img" style="width: 250px;"  src="{{ asset('assets/img/brand/b-20.png')}}" class=""/>
                        </div>
                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction" role="tabpanel" aria-labelledby="pills-introduction-tab">

                            <h5 class="pb-1 mt-2 mb-3">Introduction</h5>
                            <p class="mb-4 text-justify">The archive storage innovation, Disk Archive Corporation stands as a pioneer with its
                                groundbreaking ALTO systems. For over 15 years, this OEM has been at the forefront of
                                revolutionising cold data storage, catering specifically to the film, television, and legal
                                evidence sectors. With a track record of over 400 systems in daily operation, Disk Archive
                                Corporation has solidified its position as a trusted Archive Solution provider in the industry.</p>
                                <p class="text-justify">Disk Archive Corporation's ALTO systems deliver a trifecta of scalability, flexibility, and
                                    reliability, perfectly meeting the demanding requirements of modern media-related
                                    organisations. Unlike traditional robotic tape libraries or clustered RAID setups, ALTO offers
                                    a cost-effective alternative with its high-density, enterprise-class offline data archive platform.
                                    This not only simplifies storage management but also ensures high security through
                                    user-defined replication levels</p>
                        </div>
                        <div class="tab-pane fade" id="pills-benifits" role="tabpanel" aria-labelledby="pills-benifits-tab">
                            <h5 class="mt-2 mb-3">
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
                            <p class="mt-2 mb-3 text-justify">
                                ALTO's scalability is unparalleled, allowing for seamless expansion as business needs
                                evolve, without the hassle of costly migrations. With the ability to scale up to 1EiB without
                                compromising on performance or reliability, ALTO presents a future-proof solution for
                                growing storage demands.
                            </p>
                            <p class="text-justify">
                                Disk Archive Corporation's dedication to archive innovation shines through its ALTO
                                systems, offering a comprehensive solution that prioritises performance, affordability, and
                                environmental sustainability. By choosing ALTO, businesses can safeguard their valuable
                                assets while unlocking their full potential in today's dynamic and data-driven landscape.
                            </p>
                        </div>
                    </div>
                </div>
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
                                    </div><img alt="oem-img"  src="{{ asset('assets/img/oems/disk-1.png')}}" class="oem-img-right"/> </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class=" " id="pills-benifits" data-toggle="pill" href="#pills-benifits" role="tab" aria-controls="pills-benifits" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Benefits</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/disk-2.png')}}" class="oem-img-right"/></a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class="" id="pills-journey" data-toggle="pill" href="#pills-journey" role="tab" aria-controls="pills-journey" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Journey</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/disk-3.png')}}" class="oem-img-right"/></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="d-flex flex-column justify-content-center" >
                        {{-- <div class="nav nav-pills mb-3" id="pills-tab" role="tablist"> --}}
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item mb-2" role="presentation">

                                <a class=" active"  data-toggle="pill" href="#pills-introduction-cyviz" role="tab" aria-controls="pills-introduction-cyviz" aria-selected="true"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Introduction</h5>
                                    </div><img alt="oem-img"  src="{{ asset('assets/img/oems/cyviz-1.png')}}" class="oem-img-left"/> </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class=" " data-toggle="pill" href="#pills-benifits-cyviz" role="tab" aria-controls="pills-benifits-cyviz" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Benefits</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/cyviz-2.png')}}" class="oem-img-left"/></a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class="" data-toggle="pill" href="#pills-journey-cyviz" role="tab" aria-controls="pills-journey-cyviz" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Journey</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/cyviz-3.png')}}" class="oem-img-left"/></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="d-flex flex-row justify-content-end">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  Cyviz  </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oem-img" style="width: 250px; "  src="{{ asset('assets/img/brand/b-1.png')}}" class=""/>
                        </div>
                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active " id="pills-introduction-cyviz" role="tabpanel" aria-labelledby="pills-introduction-cyviz-tab">

                            <h5 class="pb-1 mt-2 mb-3">Introduction</h5>
                            <p class="mb-4 text-justify">Cyviz is next-level collaboration and visualisation solutions to empower organisations
                                worldwide. With over 25 years of experience, Cyviz has become synonymous with
                                innovative technologies that transform the way people communicate and work together.
                                </p>
                                <p class="text-justify">At the core of Cyviz's offerings are turnkey video wall solutions and room management
                                    systems tailored for Command and Control Centres, Executive Meeting Rooms, and
                                    versatile work environments. Over the years, Cyviz has established itself as a global leader
                                    with offices in major cities across the USA, Europe, the Middle East, and Asia. Their footprint
                                    extends to over 80 countries, serving more than 500 large enterprises and government
                                    bodies, including over 35 Global Fortune 500 enterprises.</p>
                        </div>
                        <div class="tab-pane fade mt-2 pt-3" id="pills-benifits-cyviz" role="tabpanel" aria-labelledby="pills-benifits-cyviz-tab">
                            <p class="mt-2 mb-3 text-justify">Cyviz's standardised and configurable solutions accommodate diverse industries, offering
                                reliability, usability, and precision essential for effective collaborative spaces. From finance to
                                defence and energy sectors, Cyviz ensures well-designed solutions for various verticals.</p>
                            <h5>
                                Benefits of Cyviz's products/services:
                            </h5>
                            <ul>
                                <li><strong>Enhanced Collaboration:</strong>  Cyviz fosters seamless communication, driving teamwork.
                                </li>
                                <li><strong>Improved Efficiency:</strong>Streamlined workflows boost productivity with intuitive
                                    interfaces.
                                    </li>
                                <li><strong>Advanced Technology:</strong>: Cutting-edge solutions deliver immersive user experiences,
                                    spurring innovation.</li>

                            </ul>

                        </div>
                        <div class="tab-pane fade mt-2 pt-3" id="pills-journey-cyviz" role="tabpanel" aria-labelledby="pills-journey-cyviz-tab">
                            <p class="mt-2 mb-3 text-justify">
                                Cyviz has delivered 1500+ command and control rooms globally to demanding government
                                clients, showcasing their expertise in mission-critical solutions. They've also established
                                forward-thinking visualisation centres for organisations like Smart Innovation Norway,
                                fostering innovation. Collaborations with Microsoft Technology Centers have provided
                                impactful experiences for enterprise customers, cementing Cyviz's reputation as a trusted
                                industry partner
                            </p>
                            <p class="text-justify">Cyviz's commitment to innovation and customer satisfaction makes them a trusted partner
                                for organisations seeking to enhance collaboration and visualisation capabilities. With Cyviz,
                                the future of work is not just a vision but a reality, empowering businesses to work better and
                                smarter, right here, right now.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="d-flex flex-row justify-content-between">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  Scale Computing </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oem-img" style="width: 250px; margin-top:-50px;"  src="{{ asset('assets/img/brand/b-2.png')}}" class=""/>
                        </div>
                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction-scale" role="tabpanel" aria-labelledby="pills-introduction-scale-tab">
                            <h5 class="pb-1 mt-2 mb-3">Introduction</h5>
                            <p class="mb-4 text-justify">Scale Computing is revolutionising IT infrastructure with its innovative Scale Computing
                                Platform. This solution integrates virtualization software, disaster recovery software, servers,
                                and shared storage into one highly available platform, eliminating the need for separate
                                components. The HyperCore software ensures maximum uptime by automatically identifying
                                and correcting problems in real-time.
                                </p>
                                <p class="text-justify">With the ever-expanding demands of the digital world, Scale Computing recognizes the need
                                for applications to run outside centralised data centres, closer to where they are used. Its
                                platform enables organisations to run applications and process data at the edge of their
                                networks, reducing cost and complexity associated with managing distributed infrastructure.
                                </p>
                        </div>
                        <div class="tab-pane fade" id="pills-benifits-scale" role="tabpanel" aria-labelledby="pills-benifits-scale-tab">
                            <h5 class="mt-2 mb-3">
                                The benefits of choosing Scale Computing are -
                            </h5>
                            <ul>
                                <li><strong>Integrated Solution:</strong> Combines multiple components into one platform for
                                    streamlined IT management.</li>
                                <li><strong>Maximum Uptime:</strong>Self-healing technology ensures continuous operation with
                                    real-time issue resolution.</li>
                                <li><strong>Cost Efficiency:</strong>Eliminates the need for separate IT silos, reducing hardware and
                                    operational expenses.</li>
                                <li><strong>Improved Performance:</strong>Ensures high availability and performance for critical
                                    applications, enhancing business productivity</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-journey-scale" role="tabpanel" aria-labelledby="pills-journey-scale-tab">
                            <p class="mt-2 mb-3 text-justify">
                                Scale Computing's track record of success is evident through numerous awards and
                                accolades, including recognition from Gartner Peer Insights, The CHANNEL Co,
                                TrustRadius, and more. Its commitment to customer satisfaction and innovative solutions
                                positions them as a trusted leader in edge computing, virtualization, and hyperconverged
                                infrastructure.

                            </p>
                            <p class="text-justify">
                                Scale Computing is delivering cutting-edge solutions that simplify IT infrastructure, enhance
                                performance, and reduce costs for organisations worldwide. With the comprehensive suite of
                                products and services, customers can confidently navigate the complexities of modern IT
                                environments while unlocking the full potential of edge computing
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="d-flex flex-column justify-content-center" >
                        {{-- <div class="nav nav-pills mb-3" id="pills-tab" role="tablist"> --}}
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item mb-2" role="presentation">

                                <a class=" active" data-toggle="pill" href="#pills-introduction-scale" role="tab" aria-controls="pills-introduction-scale" aria-selected="true"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Introduction</h5>
                                    </div><img alt="oem-img"  src="{{ asset('assets/img/oems/scale-1.png')}}" class="oem-img-right"/> </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class=" " data-toggle="pill" href="#pills-benifits-scale" role="tab" aria-controls="pills-benifits-scale" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Benefits</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/scale-2.png')}}" class="oem-img-right"/></a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class="" data-toggle="pill" href="#pills-journey-scale" role="tab" aria-controls="pills-journey-scale" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Journey</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/scale-3.png')}}" class="oem-img-right"/></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="d-flex flex-column justify-content-center" >

                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item mb-2" role="presentation">

                                <a class=" active"  data-toggle="pill" href="#pills-introduction-motadata" role="tab" aria-controls="pills-introduction-motadata" aria-selected="true"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Introduction</h5>
                                    </div><img alt="oem-img"  src="{{ asset('assets/img/oems/motadata-1.png')}}" class="oem-img-left"/> </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class=" " data-toggle="pill" href="#pills-benifits-motadata" role="tab" aria-controls="pills-benifits-motadata" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Benefits</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/motadata-2.png')}}" class="oem-img-left"/></a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class="" data-toggle="pill" href="#pills-journey-motadata" role="tab" aria-controls="pills-journey-motadata" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Journey</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/motadata-3.png')}}" class="oem-img-left"/></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="d-flex flex-row justify-content-end">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  Motadata  </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oem-img" style="width: 250px;"  src="{{ asset('assets/img/brand/b-3.png')}}" class=""/>
                        </div>
                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction-motadata" role="tabpanel" aria-labelledby="pills-introduction-motadata-tab">

                            <h5 class="pb-1 mt-2 mb-3">Introduction</h5>
                            <p class="mb-4 text-justify">Motadata, a leading brand under Mindarray Systems Pvt Ltd, is a global software
                                organisation specialising in IT operations solutions through its AIOps and ServiceOps
                                platforms. Utilising the Deep Learning Framework for IT Operations (DFIT), these platforms
                                enhance visibility and control over IT infrastructure, ensuring every event is meticulously
                                monitored and analysed to drive business outcomes.</p>
                                <p class="text-justify">Motadata has made significant strides in the industry, earning accolades such as being
                                    featured in the Market Guide for Network Automation and Orchestration 2020 and winning
                                    the prestigious Tech Fast50 India & Fast500 APAC awards for three consecutive years.
                                    Additionally, it has been recognized as a notable vendor in various software market reports.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-benifits-motadata" role="tabpanel" aria-labelledby="pills-benifits-motadata-tab">
                            <h5 class="mt-2 mb-3">
                                Benefits of Motadata's Products/Services
                            </h5>
                            <ul>
                                <li><strong>Real-time Monitoring:</strong> Instant alerts and dashboards minimise downtime, ensuring
                                    smooth IT operations.</li>

                                <li><strong>Advanced Analytics:</strong> Machine-learning-driven insights from logs, metrics, and
                                    traces enable proactive decision-making</li>
                                <li><strong>Comprehensive Solutions:</strong>From network observability to streamlined service
                                    operations, Motadata offers tools to optimise IT performance and drive business
                                    success.
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-journey-motadata" role="tabpanel" aria-labelledby="pills-journey-motadata-tab">
                            <p class="mt-2 mb-3 text-justify">
                                On the ServiceOps front, Motadata streamlines business processes with features such as
                                virtual service desk agents, asset management, patch automation, and conversational
                                AI-powered incident resolution. Also, the platform offers native integrations with over 200
                                monitoring protocols, cloud services, and third-party APIs, enabling seamless automation
                                and remediation.

                            </p>
                            <p class="text-justify">
                                Motadata excels in providing comprehensive IT operations solutions that help businesses
                                efficiently manage their growing data volumes, meet SLAs, and scale their monitoring
                                activities without limits. Trusted by leading enterprises globally, Motadata continues to
                                innovate and deliver value through its advanced technology solutions
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="d-flex flex-row justify-content-between">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  Scale Computing </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oem-img" style="width: 250px; margin-top:-50px;"  src="{{ asset('assets/img/brand/b-5.png')}}" class=""/>
                        </div>
                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction-juniper" role="tabpanel" aria-labelledby="pills-introduction-juniper-tab">
                            <h5 class="pb-1 mt-2 mb-3">Introduction</h5>
                            <p class="mb-4 text-justify"> Juniper Networks, a leading provider of networking solutions, is dedicated to revolutionising
                                how people connect, work, and live by simplifying network operations and enhancing user
                                experiences. With a focus on innovation and commitment to excellence, Juniper offers a
                                range of products and services designed to empower businesses and individuals across
                                various sectors.
                                </p>
                                <p class="text-justify">Juniper's comprehensive portfolio includes cutting-edge AI-driven networking solutions,
                                    cloud services, and data management tools. With advanced technologies such as machine
                                    learning and deep learning, Juniper ensures that networks are not only efficient and reliable
                                    but also adaptable and secure in the face of evolving threats and challenges.
                                </p>
                        </div>
                        <div class="tab-pane fade" id="pills-benifits-juniper" role="tabpanel" aria-labelledby="pills-benifits-juniper-tab">
                            <h5 class="mt-2 mb-3">
                                By choosing Juniper's products and services, businesses can benefit from:
                            </h5>
                            <ul>
                                <li><strong>AI-Driven Networking:</strong> Juniper's platform reduces networking trouble tickets by up
                                    to 90%, OpEX by 85%, and time to resolve incidents by 50%.</li>
                                <li><strong>Cloud Empowerment:</strong> Juniper's cloud solutions enable efficient and secure delivery
                                    of applications and services at scale, fostering innovation and meeting performance
                                    needs.</li>
                                <li><strong>Cost Efficiency:</strong>Eliminates the need for separate IT silos, reducing hardware and
                                    operational expenses.</li>
                                <li><strong>Data Management Excellence:</strong>Juniper's suite of tools streamlines operations,
                                    enhances performance, and ensures data security, maximising network potential.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-journey-juniper" role="tabpanel" aria-labelledby="pills-journey-juniper-tab">
                            <p class="mt-2 mb-3 text-justify">
                                With its commitment to social responsibility and dedication to customer success, Juniper
                                Networks continues to lead the way in driving positive change and empowering businesses
                                to thrive in today's digital world

                            </p>
                            {{-- <p class="text-justify">
                                juniper Computing is delivering cutting-edge solutions that simplify IT infrastructure, enhance
                                performance, and reduce costs for organisations worldwide. With the comprehensive suite of
                                products and services, customers can confidently navigate the complexities of modern IT
                                environments while unlocking the full potential of edge computing
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="d-flex flex-column justify-content-center" >
                        {{-- <div class="nav nav-pills mb-3" id="pills-tab" role="tablist"> --}}
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item mb-2" role="presentation">

                                <a class=" active" data-toggle="pill" href="#pills-introduction-juniper" role="tab" aria-controls="pills-introduction-juniper" aria-selected="true"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Introduction</h5>
                                    </div><img alt="oem-img"  src="{{ asset('assets/img/oems/juniper-1.png')}}" class="oem-img-right"/> </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class=" " data-toggle="pill" href="#pills-benifits-juniper" role="tab" aria-controls="pills-benifits-juniper" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Benefits</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/juniper-2.png')}}" class="oem-img-right"/></a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class="" data-toggle="pill" href="#pills-journey-juniper" role="tab" aria-controls="pills-journey-juniper" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Journey</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/juniper-3.png')}}" class="oem-img-right"/></a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="d-flex flex-column justify-content-center" >

                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item mb-2" role="presentation">

                                <a class=" active"  data-toggle="pill" href="#pills-introduction-exagrid" role="tab" aria-controls="pills-introduction-exagrid" aria-selected="true"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Introduction</h5>
                                    </div><img alt="oem-img"  src="{{ asset('assets/img/oems/exagrid-1.png')}}" class="oem-img-left"/> </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class=" " data-toggle="pill" href="#pills-benifits-exagrid" role="tab" aria-controls="pills-benifits-exagrid" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Benefits</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/exagrid-2.png')}}" class="oem-img-left"/></a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class="" data-toggle="pill" href="#pills-journey-exagrid" role="tab" aria-controls="pills-journey-exagrid" aria-selected="false"><div style="    position: relative;
                                    top: 80%;
                                    left: 50%;
                                    transform: translate(-50%, -50%);">
                                        <h5 class="fw-bold pb-1 text-primary" >Journey</h5>
                                    </div><img alt="oem-img" src="{{ asset('assets/img/oems/exagrid-3.png')}}" class="oem-img-left"/></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="d-flex flex-row justify-content-end">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  exagrid  </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oem-img" style="width: 250px;"  src="{{ asset('assets/img/brand/b-7.png')}}" class=""/>
                        </div>
                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction-exagrid" role="tabpanel" aria-labelledby="pills-introduction-exagrid-tab">

                            <h5 class="pb-1 mt-2 mb-3">Introduction</h5>
                            <p class="mb-4 text-justify">ExaGrid, a leading provider of backup storage solutions, stands out for its innovative Tiered
                                Backup Storage approach, offering customers enhanced performance, security, and
                                scalability. With over 4,000 customers worldwide and an impressive NPS score of +81,
                                ExaGrid has garnered recognition for its reliability and customer satisfaction.</p>
                                <p class="text-justify">ExaGrid's Tiered Backup Storage architecture ensures high backup performance with 3X
                                faster backups and 20X faster restores, saving valuable time for businesses. Moreover, its
                                unique approach to security includes ransomware recovery features like tiered air gap and
                                delayed delete policy, providing peace of mind against cyber threats.</p>

                        </div>
                        <div class="tab-pane fade" id="pills-benifits-exagrid" role="tabpanel" aria-labelledby="pills-benifits-exagrid-tab">
                            <h5 class="mt-2 mb-3">
                                The benefits of choosing ExaGrid are -
                            </h5>
                            <ul>
                                <li><strong>Enhanced Performance:</strong>  ExaGrid's Tiered Backup Storage architecture ensures 3X
                                    faster backups and 20X faster restores, saving valuable time and optimising backup
                                    operations..</li>

                                <li><strong>Robust Security:</strong> With features like tiered air gap and delayed delete policy, ExaGrid
                                    provides reliable ransomware recovery options, ensuring the safety and integrity of
                                    critical data.</li>
                                <li><strong>Cost-Effective Scalability:</strong>ExaGrid offers price protection for five years,
                                    guaranteeing the lowest cost upfront and over time, along with a fixed backup
                                    window that remains constant as data volumes grow, providing businesses with
                                    predictable backup operations and long-term cost savings.

                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-journey-exagrid" role="tabpanel" aria-labelledby="pills-journey-exagrid-tab">
                            <p class="mt-2 mb-3 text-justify">
                                Also, ExaGrid's unmatched support sets it apart in the industry. Each customer is assigned a
                                dedicated Level 2 Customer Support Engineer, ensuring personalised and expert
                                assistance. With support teams located worldwide and proactive health status monitoring,
                                ExaGrid prioritises customer satisfaction and strives to provide exceptional service.

                            </p>
                            <p class="text-justify">
                                Overall, businesses choosing ExaGrid benefit from faster backups and restores, enhanced
                                security against ransomware attacks, predictable backup windows, cost-effective pricing,
                                and unparalleled customer support, making it the go-to solution for backup storage needs
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
            <nav aria-label="...">
                <ul class="pagination d-flex flex-row justify-content-between">
                    <li class="page-item1 rounded disabled ">
                        <a class="page-link shadow" href="{{ route('oems')}}" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                        </svg></a>
                    </li>
                    <div class="d-flex justify-row">
                        <li class="page-item2 rounded active disabled"><a class="page-link shadow" href="#">1</a></li>
                        <li class="page-item2 rounded}">
                            <a class="page-link shadow" href="{{ route('oems-page2')}}">2 <span class="sr-only">(current)</span></a>
                        </li>
                    </div>
                    <li class="page-item1 rounded ">
                        <a class="page-link shadow" href="{{ route('oems-page2')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    @include('landing.components.get-in-touch')

@endsection
