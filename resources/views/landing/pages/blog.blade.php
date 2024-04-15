
@extends('landing.layouts.base')

@section('contents')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">

        <div class="row ">
            <div class="col-lg-12">
                <div class="row mx-2 px-4">
                    @include('landing.pages.blog-filter')
                </div>
            </div>
            {{-- <div class="col-lg-4">
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
            </div> --}}
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
