
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

                <!-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg></a> -->
            </div>



                    <div class="col-lg-6" >
               <div class="about-gradient" >

                 </div>
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/aboutus.jpg')}}" style=" width:350px; height:200px; position: relative; top:10%; ">

            </div>

            <!-- <div class="col-lg-6" >
                <div class="card" style="min-height: 300px;">

                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/aboutus.jpg')}}" style="object-fit: cover; ">
                </div>
            </div> -->
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.2s" style="margin-top:-20px;">
    <h1 style="text-align:center;">From Idea to<span class="text-primary"> Reality</span> </h1>
    <div class="container">
        <div class="row g-5">
            <div class="about-jurney">
                <div class="col-lg-12 d-flex aligns-content-center justify-content-center" style="min-height: 680px;" >
                    <img class="position-absolute h-100 rounded wow zoomIn" style="min-height: 600px;" data-wow-delay="0.9s" src="{{ asset('assets/img/about-arrow.svg')}}" >
                </div>
                <div class="d-flex flex-row  flex-content-between">
                    <div class="d-flex flex-column aligns-content-left flex-content-start">
                        <div class="timeline jurney-left-2020">
                            <p class="text-justify text-secoundary">IVT embarked on its journey, navigating the digital landscape from various locations in pursuit of its first project, marking a significant milestone amidst uncertainityand challenges.</p>
                        </div>
                        <div class="timeline jurney-left-2022">
                            <p class="text-justify text-secoundary">Securing its first major project in 2022 reinforced IVT's position in the industry, showcasing the team's proficiency and dedication to delivering high-quality solutions.</p>
                        </div>
                        <div class="timeline jurney-left-2024">
                            <p class="text-justify text-secoundary">IVT's satragic expansion into western India in 2024 underscores its commitment to establishing a comprehensive PAN-India presence, ensuring accessibility and exceeding client expections nationwide.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column aligns-content-right flex-content-end">
                        <div class="timeline jurney-right-2021">
                            <p class="text-justify text-secoundary">Transitioning to a co-working office in August marked a turning point, leading to strategic projects aimed at achieving new height of success and innovation.</p>
                        </div>
                        <div class="timeline jurney-right-2023">
                            <p class="text-justify text-secoundary">The launch of IVT2.0 in 2023 ushered in a new chapter, introducing a modernized office space designed to foster innovation, collaboration, and growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top:-100px;">
    <div class="container py-5">
        <div class="text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 660px;">
        <img  src="{{ asset('assets\img\Frame 16.svg')}}" alt="" style="width:50px; height:50px;">
            <h1 class="fw-boldtext-uppercase">Meet our <span class="text-primary">Leaders</span></h1>
            <p class="mb-0">Welcome to the team! We are a group of passionate individuals working together to achieve our goals.
Get to know the faces behind our success.</p>
        </div>
        <!-- <div class="d-flex flex-row aligns-content-center justify-content-center">
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
                <div class="overlay d-flex aligns-content-center justify-content-center">
                    <div class="text-dark  ove-text">
                        <p  class="text-center px-5 py-5">An experienced IT professional with extensive experience across the globe for over 30+ years including that in IBM which entailed stints in Sales, Product Management, Branding, Technology, Business Development and Training portfolio.</p>
                    </div>
                    <button type="button" class="btn btn-dark w-100 py-3 social-btn"><i class="fab fa-linkedin-in fw-normal text-white" ></i></button>
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
                <div class="overlay d-flex aligns-content-center justify-content-center">
                    <div class="text-center text-dark ove-text"><p class="text-center px-5 py-5">Seasoned Sales professional with around 35+ years of experience in Sales, specialization in the Government Ministries and Departments in India. A result-oriented Sales leader with the ability to formulate the sales strategy, develop alliances, manage client relationships & lead teams in multiple domains. Worked for companies like SAP India Pvt Ltd, IBM India Pvt Ltd., Tata Infotech Ltd, Pertech Computers Ltd.
                        </p></div>
                    <button type="button" class="btn btn-dark w-100 py-3 social-btn"><i class="fab fa-linkedin-in fw-normal text-white" ></i></button>
                </div> -->

                <div class="main-ceo">
                <img src="{{ asset('assets/img/leaders/manas-sir.jpg')}}" alt="" style="width: 400px; height: 450px; border-radius:20px;">
               <div class="main-text">
                    <p style="font-weight: 600; font-size: 36px; color:#000000;">MANAS<span style="color:#F2A024;"> SINHA</span></p>
                    <p style="color:#383838;">Founder, CEO & MD</p>
                    <p>An experienced IT professional with extensive experience across the globe for over 30+ years including that in IBM which entailed stints in Sales, Product Management, Branding, Technology, Business Development and Training portfolio. He has been awarded an Honorary Doctorate of Philosophy (PhD) in Innovation & Technology by Maryland State University, USA. He has taken a new initiative to create a difference in the IT Solutions & Services sector especially in the Government & Enterprise space through a dynamic and innovative approach with introduction of new technologies related to Cyber Security, Business Digitization, Hyperconverged Infrastructure, Hybrid Cloud, Application Modernization and in the complex systems automation area.
                    </p>
                </div>
            </div>

            <div class="full-container flex-column d-flex justify-content-center wrap">
                <div class="d-flex justify-content-center wrap">
                    <div class="full-card">
                        <div class="thecard">
                            <div class="thefront">
                                <img src="{{ asset('assets\img\leaders\Manoj-Sir.jpg')}}" alt="" style="width:100%; height:100%; border-radius:20px;">
                                <div class="text-block">
                                <p style="font-weight: 800;">MANOJ<span style="color:#F2A024;"> PRADHAN</span></p>
                                    <p>Executive Director</p>
                                </div>
                            </div>
                            <div class="theback">
                                <p>Experienced sales leader with over 35 years in government sales within India. Proven track record in formulating sales strategies and managing client relationships across diverse domains. Previous roles at SAP India Pvt Ltd, IBM India Pvt Ltd, Tata Infotech Ltd, and Pertech Computers Ltd.
                                </p>
                                <div class="social"><ul>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <i class="fab fa-facebook-f icon"></i>    </a>
                                    </li>
                                    <!-- <li>
                                        <a href="#"><i class="fab fa-google-plus-g icon"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="full-card">
                        <div class="thecard">
                            <div class="thefront">
                                <img src="{{ asset('assets\img\leaders\Renu-Maam.jpg')}}" alt="" style="width:100%; height:100%; border-radius:20px;">
                                <div class="text-block">
                                    <p style="font-weight: 800;">RENU <span style="color:#F2A024;"> POHANI</span></p>
                                    <p>Director - Corporate Sales & Staffing Business</p>
                                </div>
                            </div>
                            <div class="theback">
                                <p>With over 24 years of experience, Mrs. Renu Pohani is a seasoned Business Director adept at managing global teams and multi-million-dollar campaigns, specializing in Brand Strategy, Product Market Alignment, Customer Acquisition, and Account Management with a mindful yet competitive approach.
                                </p>
                                <div class="social"><ul>

                                <li>
                                    <a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter icon"></i></a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fab fa-facebook-f icon"></i>    </a>
                                </li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="full-card">
                        <div class="thecard">
                            <div class="thefront">
                                <img src="{{ asset('assets\img\leaders\sanjay-dinkar.jpg')}}" alt="" style="width:100%; height:100%; border-radius:20px;">
                                <div class="text-block">
                                    <p style="font-weight: 600;">SANJAY<span style="color:#F2A024;"> DINKAR</span></p>
                                    <p>Director - Sales</p>
                                </div>
                            </div>
                            <div class="theback">
                                <p>A seasoned sales expert with 25 years of experience in global markets, adept at leading teams and driving business growth through strategic sales, account management, and business development across diverse verticals.
                                </p>
                                <div class="social"><ul>

                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter icon"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">
                                        <i class="fab fa-facebook-f icon"></i>    </a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center wrap">
                    <div class="full-card">
                        <div class="thecard">
                            <div class="thefront">
                                <img src="{{ asset('assets\img\leaders\debashis-sir.jpg')}}" alt="" style="width:100%; height:100%; border-radius:20px;">
                                <div class="text-block">
                                    <p style="font-weight: 800;">DEBASHIS S.<span style="color:#F2A024;"> TRIPATHY</span></p>
                                    <p>Vice President of Finance, Accounts, and Administration
                                    </p>
                                </div>
                            </div>
                            <div class="theback">
                                <p>With 33 years of experience in finance and accounts, possessing diverse qualifications including CA-Inter, LLB, M.Com, and a Diploma in Labour Welfare. His expertise in financial management and strategic vision makes him an ideal leader to drive our department towards long-term success.
                                </p>
                                <div class="social">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter icon"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fab fa-facebook-f icon"></i>    </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full-card">
                        <div class="thecard">
                            <div class="thefront">
                            <img src="{{ asset('assets\img\leaders\sanjay-arora.jpg')}}" alt="" style="width:100%; height:100%; border-radius:20px;">
                            <div class="text-block">
                                <p style="font-weight: 600;">SANJAY<span style="color:#F2A024;"> ARORA</span></p>
                                <p>Director - Government Sales</p>
                            </div>
                            </div>
                            <div class="theback">
                                <p>Passionate & dynamic leader with experience driving innovative solutions & delivering exceptional value in India & the ME region.A bold risk-taker with a proven track record of enabling organic growth, expanding into new channels, & revitalizing teams across industry giants like HCL, Siemens, EMC etc.
                                </p>
                                <div class="social">
                                    <ul>

                                        <li>
                                            <a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter icon"></i></a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fab fa-facebook-f icon"></i>    </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
