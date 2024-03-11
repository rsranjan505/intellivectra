
@extends('landing.layouts.base')

@section('contents')
@php
    $tagname = ucwords(str_replace('-', ' ', $name));
@endphp
{{-- <div class="container-fluid pt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center position-relative mx-auto">
            <h1>{{str_replace('Service','',$tagname)}}<span class="text-primary">Services</span> </h1>
        </div>
    </div>
</div> --}}

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.1s">
                        <div class="d-flex mb-3 pb-4">
                            <small class="me-3  mr-4"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
                            <small class="mr-4"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
                            <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>{{ $tagname}}</small>
                        </div>
                        <div class="">
                            <div class="blog-item bg-light overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    {{-- <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a> --}}
                                </div>


                                <h3 class="mb-3 text-left blog-title text-primary">Maximizing Efficiency and Talent Acquisition with Professional Staffing Services</h3>
                                <div>
                                    <h4 class="mb-3 text-left blog-title">The Importance of Efficient Staffing Solutions</h4>
                                    <p class="text-left text-justify">In today's competitive business landscape, companies are constantly striving to optimize their operations and gain a competitive edge. One crucial aspect of this optimization is ensuring that the right talent is in the right place at the right time. Efficient staffing solutions play a pivotal role in achieving this goal. Whether it's scaling up for a new project or filling crucial skill gaps, having access to a reliable staffing service can make all the difference.</p>
                                </div>

                                <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                <div>
                                    <h4 class=" text-left blog-title py-3">Streamlining Recruitment Processes</h4>
                                    <p class="text-left text-justify">Recruitment can be a time-consuming and resource-intensive process for any organization. From sourcing candidates to conducting interviews and negotiating offers, there are numerous steps involved in finding the perfect fit for a role. However, by outsourcing these tasks to a professional staffing service, companies can streamline their recruitment processes and free up internal resources to focus on core business activities. Staffing agencies specialize in identifying top talent, screening candidates, and ensuring that only the most qualified individuals make it through to the final stages of the hiring process.</p>
                                </div>

                                <div>
                                    <h4 class=" text-left blog-title py-3">Streamlining Recruitment Processes</h4>
                                    <p class="text-left text-justify">Recruitment can be a time-consuming and resource-intensive process for any organization. From sourcing candidates to conducting interviews and negotiating offers, there are numerous steps involved in finding the perfect fit for a role. However, by outsourcing these tasks to a professional staffing service, companies can streamline their recruitment processes and free up internal resources to focus on core business activities. Staffing agencies specialize in identifying top talent, screening candidates, and ensuring that only the most qualified individuals make it through to the final stages of the hiring process.</p>
                                </div>
                                <div>
                                    <h4 class=" text-left blog-title py-3">Streamlining Recruitment Processes</h4>
                                    <p class="text-left text-justify">Recruitment can be a time-consuming and resource-intensive process for any organization. From sourcing candidates to conducting interviews and negotiating offers, there are numerous steps involved in finding the perfect fit for a role. However, by outsourcing these tasks to a professional staffing service, companies can streamline their recruitment processes and free up internal resources to focus on core business activities. Staffing agencies specialize in identifying top talent, screening candidates, and ensuring that only the most qualified individuals make it through to the final stages of the hiring process.</p>
                                </div>
                                <div>
                                    <h4 class=" text-left blog-title py-3">Streamlining Recruitment Processes</h4>
                                    <p class="text-left text-justify">Recruitment can be a time-consuming and resource-intensive process for any organization. From sourcing candidates to conducting interviews and negotiating offers, there are numerous steps involved in finding the perfect fit for a role. However, by outsourcing these tasks to a professional staffing service, companies can streamline their recruitment processes and free up internal resources to focus on core business activities. Staffing agencies specialize in identifying top talent, screening candidates, and ensuring that only the most qualified individuals make it through to the final stages of the hiring process.</p>
                                </div>
                                <div>
                                    <h4 class=" text-left blog-title py-3">Streamlining Recruitment Processes</h4>
                                    <p class="text-left text-justify">Recruitment can be a time-consuming and resource-intensive process for any organization. From sourcing candidates to conducting interviews and negotiating offers, there are numerous steps involved in finding the perfect fit for a role. However, by outsourcing these tasks to a professional staffing service, companies can streamline their recruitment processes and free up internal resources to focus on core business activities. Staffing agencies specialize in identifying top talent, screening candidates, and ensuring that only the most qualified individuals make it through to the final stages of the hiring process.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="form-rounded-serach w-100 box-shadow" >
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
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="box-shadow px-3 p-2 ">
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="form-rounded-serach mb-2 mt-2 p-2 box-shadow">
                            <h6 class="mb-0 text-left pl-3" style="color:#a5a8aa;">Categories</h6>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-left text-left">
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ $tagname =='Consulting Service' ? 'active' :''  }} " href="{{ route('blogs-details','consulting-service')}}">Consulting Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ $tagname =='Platform And Operation Service' ? 'active' :''  }}" href="{{ route('blogs-details','platform-and-operation-service')}}">Platform And Operation Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ $tagname =='Enterprise Application Service' ? 'active' :''  }}" href="{{ route('blogs-details','enterprise-application-service')}}">Enterprise Application Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ $tagname =='Digital Service' ? 'active' :''  }}" href="{{ route('blogs-details','digital-service')}}">Digital Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ $tagname =='Staffing Service' ? 'active' :''  }}" href="{{ route('blogs-details','staffing-service')}}">Staffing Services</a>
                        </div>
                    </div>
                </div>

                <div class="box-shadow px-3 p-2 mt-3">
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="rounded-blog-category mb-2 mt-2 p-2">
                            <a class="text-white py-2 px-5 mb-2" href="#">Share </a>
                        </div>
                        <div class="social-link d-flex flex-row justify-content-between text-left pt-3">
                            <a class="btn box-shadow btn-rounded me-2" href="#"><i class="fas fa-link fw-normal"></i></a>
                            <a class="btn box-shadow btn-rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn box-shadow btn-rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn box-shadow btn-rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn box-shadow btn-rounded" href="#"><i class="fas fa-envelope fw-normal"></i></a>
                        </div>
                    </div>
                </div>



            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>


@endsection
