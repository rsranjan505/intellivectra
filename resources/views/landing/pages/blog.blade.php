
@extends('landing.layouts.base')

@section('contents')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.1s">
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
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Consultaing Services</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Maximizing Efficiency and Talent Acquisition with Professional Staffing Services</h4>
                                    <p class="text-justify">In today's competitive business landscape, companies are constantly striving to optimize their operations and gain a competitive edge. One crucial aspect of this optimization is ensuring that the right talent is in the right place at the right time. Efficient staffing solutions play a pivotal role in achieving this goal. Whether it's scaling up for a new project or filling crucial skill gaps, having access to a reliable staffing service can make all the difference.</p>
                                    <a class="btn btn-dark rounded-pill" href="{{ route('blogs-details','consultaing-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.2s">
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
                                    <h4 class="mb-3 text-left blog-title">Maximizing Efficiency and Talent Acquisition with Professional Staffing Services</h4>
                                    <p class="text-justify">In today's competitive business landscape, companies are constantly striving to optimize their operations and gain a competitive edge. One crucial aspect of this optimization is ensuring that the right talent is in the right place at the right time. Efficient staffing solutions play a pivotal role in achieving this goal. Whether it's scaling up for a new project or filling crucial skill gaps, having access to a reliable staffing service can make all the difference.</p>
                                    <a class="btn btn-dark rounded-pill" href="{{ route('blogs-details','platform-and-operation-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
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
                                    <h4 class="mb-3 text-left blog-title">Maximizing Efficiency and Talent Acquisition with Professional Staffing Services</h4>
                                    <p class="text-justify">In today's competitive business landscape, companies are constantly striving to optimize their operations and gain a competitive edge. One crucial aspect of this optimization is ensuring that the right talent is in the right place at the right time. Efficient staffing solutions play a pivotal role in achieving this goal. Whether it's scaling up for a new project or filling crucial skill gaps, having access to a reliable staffing service can make all the difference.</p>
                                    <a class="btn btn-dark rounded-pill" href="{{ route('blogs-details','enterprise-application-service')}}">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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
                <div class="box-shadow px-3 p-2 ">
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="form-rounded-serach mb-2 mt-2 p-2 box-shadow">
                            <h4 class="mb-0 text-left text-dark pl-3">Categories</h4>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2" href="{{ route('blogs-details','consulting-service')}}"><i class="bi bi-arrow-right me-2"></i>Consulting Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2" href="{{ route('blogs-details','platform-and-operation-service')}}"><i class="bi bi-arrow-right me-2"></i>Platform And Operation Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2" href="{{ route('blogs-details','enterprise-application-service')}}"><i class="bi bi-arrow-right me-2"></i>Enterprise Application Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2" href="{{ route('blogs-details','digital-service')}}"><i class="bi bi-arrow-right me-2"></i>Digital Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2" href="{{ route('blogs-details','staffing-service')}}"><i class="bi bi-arrow-right me-2"></i>Staffing Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
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
        </div>
    </div>
</div>


@endsection
