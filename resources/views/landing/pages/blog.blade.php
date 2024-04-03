
@extends('landing.layouts.base')

@section('contents')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">

        <div class="row g-5">
            <div class="col-lg-8">
                <div class="row g-5">
                    @include('landing.pages.blog-filter')
                    {{-- <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.1s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Professional Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Transforming Businesses using Professional IT Services</h4>
                                    <p class="text-justify">Professional services play a crucial and critical role in helping organizations navigate the complexities of modern IT environments and drive business success. Through IT consulting, digital transformation, and technology innovation, these services help businesses optimize their IT infrastructure, enhance information security, and unlock new growth opportunities.</p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','professional-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.2s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Platform And Operation Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">The role of Consulting Services in navigating Digital Transformation</h4>
                                    <p class="text-justify">In recent days, several organizations often find themselves struggling with the complexities of the IT infrastructure while trying to keep up the base with digital advancements. This is where the consulting services play a very crucial role. </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.3s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Reshaping IT Infrastructure with Scale Computing's Edge Computing Solutions</h4>
                                    <p class="text-justify">A powerful Information Technology infrastructure is essential for businesses to remain competitive and address the continually expanding marketing demands. Scale Computing stands out among providers by offering extensive solutions that reshape how organizations oversee their IT assets. </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.4s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Cyviz's Visionary Approach to Collaboration and Visualization to Break Boundaries</h4>
                                    <p class="text-justify">In today's fast-changing world having good collaboration and visualization tools is very important for those that want to stay ahead. Cyviz has great collaboration and visualization solutions that transform the way businesses operate worldwide.  </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.4s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Enhance efficiency with Disk Archive's ALTO Storage Solutions</h4>
                                    <p class="text-justify">Nowadays data storage is a huge problem and for this Disk Archive Corporation is leading the way with its Revolutionary ALTO system and ALTO storage. For over 15 years, this has been transforming cold data storage, particularly for the film, television, and legal evidence sectors. With a proven track record of 400 systems in daily operation, Disk Archive Corporation has become a trusted name in the industry.  </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.4s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Unlocking efficiency and reliability of IT Operations with Motadata Solutions</h4>
                                    <p class="text-justify">The efficiency and reliability of IT operations are necessary for every business to thrive. This is where Motodata, a leading brand under Mindarray Systems Pvt Ltd, steps in with its highly effective IT operation solutions. Specializing in AIOps and ServiceOps platforms, Motodata revolutionizes the management of IT infrastructure, using the deep learning Framework for IT operations (DFIT) to provide unparalleled visibility and control.  </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.4s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Driving growth with the power of Custom Staffing Services</h4>
                                    <p class="text-justify">In the competitive business world, the ability to acquire and retain top talent is crucial for any organization to achieve its goals. At Intelli Vectra staffing services organization, we are dedicated to empowering businesses with custom staffing solutions and unparalleled expertise in talent acquisition.  </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.4s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Shield your Organization with Cyber Security Services</h4>
                                    <p class="text-justify">In recent times, one of the most concerning things in today's digital era is security, security concerns for organizations of all sizes and industries. With the drastic changes in cyber threats, organizations must take steps to secure sensitive data and critical assets. This is where security services play a vital role. From almost cyber security solutions to network security, incident response, and more.  </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.4s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Revolutionizing Operations with the Digital Services</h4>
                                    <p class="text-justify">In this digital world, organizations are increasingly turning to digital services to stay competitive and adapt to changes in market dynamics. Digital transformation services play a crucial role in helping businesses navigate these by using technology to drive innovation simply IT tech complexity and enhance operational efficiency.  </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.4s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">The Role of Surveillance Solutions in Modern Security</h4>
                                    <p class="text-justify">Wherever we go it is all about the safety and security of us. Surveillance solutions play a vital role and provide organizations with the tools and technologies that are needed to monitor and protect their premises effectively. It also includes video surveillance and access control systems; these services provide comprehensive solutions to address various challenges.  </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.4s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Safeguarding Business Continuity with Backup and Archive Solutions</h4>
                                    <p class="text-justify">Protecting data and applications no matter where they are to avoid costly business interruptions or to meet compliance requirements. The data is King. From important documents and business records to the memories captured in photos and videos are increasingly utilizing data.  </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.4s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Unlocking Business Potential through Infrastructure Solutions</h4>
                                    <p class="text-justify">Infrastructure solutions help businesses to escalate the technological landscape enduring with the world of digital and cloud. Investing in IT infrastructure solutions is mandatory. The organizations are constantly seeking ways to adapt to new technological advancements. This often leads them to explore various infrastructure solutions with the aim of enhancing efficiency, security, and scalability.   </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.4s">
                        <div class="blog-box-shadow">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                                        <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Driving Business Growth with Command and Control Solutions</h4>
                                    <p class="text-justify">In this digital world, businesses are constantly seeking ways to enhance their IT operations and stay ahead of the curve. Command and control solutions play a crucial role in empowering solutions to navigate the complexities and drive innovation. IT consulting serves as the cornerstone of command and control solutions providing expert guidance and strategic planning to help organizations align their technology investments with their business objectives.    </p>
                                    <a class="text-primary blog-link" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    {{-- <div class="form-rounded-serach w-100 box-shadow" >
                        <form action="">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-start-icon w-100"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                      </svg></span>
                                </div>
                                <input type="search" class="form-control border-0 p-3 shadow-none"   placeholder="Search">
                                <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                      </svg>
                                </button>
                            </div>
                        </form>
                    </div> --}}
                </div>
                <div class="box-shadow px-3 p-2 ">
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="form-rounded-serach mb-2 mt-2 p-2 box-shadow">
                            <h6 class="mb-0 text-left pl-3" style="color:#a5a8aa;">Categories</h6>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-left text-left" >
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 " href="{{ route('blogs','consulting-service')}}">Consulting Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2" href="{{ route('blogs','platform-and-operation-service')}}">Platform And Operation Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2" href="{{ route('blogs','enterprise-application-service')}}">Enterprise Application Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2" href="{{ route('blogs','digital-service')}}">Digital Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2" href="{{ route('blogs','staffing-service')}}">Staffing Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2" href="{{ route('blogs','professional-service')}}">Professional Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! $blogs->links() !!}
        {{-- <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
            <nav aria-label="...">
                <ul class="pagination d-flex flex-row justify-content-between">
                    <li class="page-item1 rounded disabled ">
                        <a class="page-link shadow" href="#" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                        </svg></a>
                    </li>
                    <div class="d-flex justify-row">
                        <li class="page-item2 rounded"><a class="page-link shadow" href="#">1</a></li>
                        <li class="page-item2 rounded active">
                            <a class="page-link shadow" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item2 rounded"><a class="page-link shadow" href="#">3</a></li>
                    </div>
                    <li class="page-item1 rounded ">
                        <a class="page-link shadow" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg></a>
                    </li>
                </ul>
            </nav>
        </div> --}}
    </div>
</div>


@endsection
