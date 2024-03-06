
@extends('landing.layouts.base')

@section('contents')
@php
    $tagname = ucwords(str_replace('-', ' ', $name));
@endphp
<div class="container-fluid pt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center position-relative mx-auto">
            <h1>{{str_replace('Service','',$tagname)}}<span class="text-primary">Services</span> </h1>
            {{-- <p class="mb-0">Connect with Us Today to Enhance Efficiency and Drive Growth Together.</p> --}}
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <!-- Blog list Start -->
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
                                        <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>{{ $tagname}}</small>
                                    </div>
                                    <h4 class="mb-3 text-left blog-title">Maximizing Efficiency and Talent Acquisition with Professional Staffing Services</h4>
                                    <p class="text-left">In today's competitive business landscape, companies are constantly striving to optimize their operations and gain a competitive edge. One crucial aspect of this optimization is ensuring that the right talent is in the right place at the right time. Efficient staffing solutions play a pivotal role in achieving this goal. Whether it's scaling up for a new project or filling crucial skill gaps, having access to a reliable staffing service can make all the difference.</p>
                                    <a class="btn btn-dark rounded-pill" href="">Read More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                      </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-12 wow slideInUp" data-wow-delay="0.4s">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg m-0">
                            <li class="page-item disabled">
                              <a class="page-link rounded-0" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link rounded-0" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div> --}}
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
                            <h4 class="mb-0 text-left text-dark pl-3">Category</h4>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ $tagname =='Consulting Service' ? 'active' :''  }} " href="{{ route('blogs-details','consulting-service')}}"><i class="bi bi-arrow-right me-2"></i>Consulting Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ $tagname =='Platform And Operation Service' ? 'active' :''  }}" href="{{ route('blogs-details','platform-and-operation-service')}}"><i class="bi bi-arrow-right me-2"></i>Platform And Operation Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ $tagname =='Enterprise Application Service' ? 'active' :''  }}" href="{{ route('blogs-details','enterprise-application-service')}}"><i class="bi bi-arrow-right me-2"></i>Enterprise Application Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ $tagname =='Digital Service' ? 'active' :''  }}" href="{{ route('blogs-details','digital-service')}}"><i class="bi bi-arrow-right me-2"></i>Digital Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ $tagname =='Staffing Service' ? 'active' :''  }}" href="{{ route('blogs-details','staffing-service')}}"><i class="bi bi-arrow-right me-2"></i>Staffing Services</a>
                        </div>
                    </div>
                </div>

                <!-- Category End -->
                <!-- Image Start -->
                {{-- <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                </div> --}}
                <!-- Image End -->


            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>


@endsection
