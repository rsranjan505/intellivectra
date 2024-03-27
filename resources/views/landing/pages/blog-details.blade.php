
@extends('landing.layouts.base')

@section('contents')

{{-- <div class="container-fluid pt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center position-relative mx-auto">
            <h1>{{str_replace('Service','',$$blog->category ? $blog->category->name : '')}}<span class="text-primary">Services</span> </h1>
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
                        <div class="">
                            <div class="blog-item overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    {{-- <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a> --}}
                                </div>
                                <h3 class="mb-3 text-left blog-title text-primary">{{$blog->title}}</h3>
                                <div class="d-flex mb-3 pb-2">
                                    <small class="me-3  mr-4"><i class="far fa-user text-primary me-2  pr-2"></i>Admin</small>
                                    <small class="mr-4"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>{{ date('D, d M Y', strtotime($blog->created_at))}}</small>
                                    <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>{{ $blog->category ? $blog->category->name : ''}}</small>
                                </div>
                                @if ($blog->image)
                                    <img class="img-fluid w-100 pb-3" style="width: 468px; border-radius:10px;" src="{{ $blog->image->url}}" alt="">
                                @else
                                    <img class="img-fluid w-100 pb-3"  src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                @endif


                                {!! $blog->description !!}

                                {{-- <div>
                                    <h4 class="mb-3 text-left blog-title">Introduction</h4>
                                    <p class="text-justify">Businesses face several challenges and opportunities driven by technological advancement. Professional IT service stands as one of the best experiences, offering a range of IT Consulting Services to get organizations through the various IT environments. With a focus on digital transformation and technology innovation, these play a crucial role in helping businesses navigate the complexities of IT complexity while ensuring the best Information security measures, optimizing cloud platforms, and modernizing IT Infrastructure.</p>

                                    <p class="text-justify">In the ever-changing world of technology, IT consulting services serve as an invaluable resource for organizations seeking to turn the complexities of IT environments. Changing their expertise in digital transformation and technology innovation, professional services provide strategic guidance with the help of addressing the unique challenges faced by IT complexity. From optimizing cloud platforms to implementing virtualization solutions they offer comprehensive strategies to streamline operations and enhance organizational agility.</p>
                                    <p class="text-justify">As businesses increasingly rely on digital platforms to conduct their operations, ensuring a trusted information security measure is needed. Professional services specialize in providing comprehensive security solutions that are designed to safeguard organizations against cyber threats and data breaches. With a focus on information security, their services range from risk assessments and vulnerability scans to the implementation of advanced security technologies ensuring the confidentiality, integrity, and availability of critical data.</p>
                                    <p class="text-justify">Cloud platforms have emerged as powerful tools for businesses seeking scalability, flexibility, and cost-efficiency. Professional services specialized in cloud solutions, offering expertise in platforms such as Microsoft Cloud and Nutanix. Through cloud migration, deployment, and management services these services enable organizations to help the full potential of cloud computing, driving business innovation and agility in today's digital economy.</p>
                                    <p class="text-justify">Infrastructure forms the backbone of organizational operations, and professional services offer vendor-agnostic solutions to optimize infrastructure performance. From data centre augmentation to networking services and VMware solutions, these services provide customer strategies to enhance infrastructure efficiency and reliability. By customizing their expertise in infrastructure management, these services enable organizations to maximize their IT investments and drive business growth.</p>

                                </div>
                                <div>
                                    <p class="text-justify py-3">To provide support & maintenance for long-term success, businesses must follow:</p>
                                    <ul>
                                        <li class="text-justify">
                                            <strong>Expert IT Consulting:</strong> Professional services offer expert guidance and consulting services to help organizations navigate the complexities of modern IT environments.
                                        </li>
                                        <li class="text-justify">
                                            <strong> Digital Transformation:</strong> These specialize in facilitating digital transformation initiatives, helping businesses adapt to the rapidly changing digital landscape.
                                        </li>
                                        <li class="text-justify">
                                            <strong>Technology Innovation:</strong> With a focus on innovation, professional services help organizations leverage cutting-edge technologies to drive business growth and competitive advantage.
                                        </li>
                                        <li class="text-justify">
                                            <strong>Information Security:</strong> Ensuring robust information security measures is a top priority, and professional services offer comprehensive security solutions to safeguard against cyber threats and data breaches.
                                        </li>
                                        <li class="text-justify">
                                            <strong>Optimizing Cloud Platforms:</strong> Professional services specialize in optimizing cloud platforms such as Microsoft Cloud and Nutanix, enabling organizations to harness the scalability and flexibility of cloud computing.
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <p class="text-justify">Business transformation is essential for organizations looking to stay ahead in today's competitive world. Professional services specialize in IT modernization solutions, helping organizations streamline processes, improve productivity, and drive innovation. Through services such as data centre deployment, business process optimization, and technology integration, these services empower businesses to achieve their transformation goals and  unlock new growth opportunities.</p>
                                </div>
                                <div>
                                    <p class="text-justify">Intelli Vectra Technologies (IVT) serves as a trusted partner, guiding clients through vital IT domains. With expertise and dedication, IVT customizes solutions to meet clients’ unique needs. As IT consultation, IVT offers strategic guidance for navigating modern IT environments. Through digital transformation, IVT helps clients thrive in the digital landscape. IVT specializes in information security, protecting against cyber threats. Optimizing cloud platforms like Microsoft Cloud and Nutanix, IVT drives innovation and agility. Partnering with IVT ensures clients receive dedicated support, empowering them to grow and transform with confidence.</p>
                                </div>
                                <div>
                                    <p class="text-justify">Professional IT services are essential for organizations seeking to reduce the power of technology to drive business success. From IT consulting and implementation to ongoing support and maintenance, these services provide the expertise and guidance needed to navigate the complexities of modern IT and environments. With the focus on delivering value and driving innovation, professional services have strategic objectives and thrive in today's digital world.</p>
                                </div>
                                <div>
                                    <p class="text-justify">Lastly, professional services play a crucial and critical role in helping organizations navigate the complexities of modern IT environments and drive business success. Through IT consulting, digital transformation, and technology innovation, these services help businesses optimize their IT infrastructure, enhance information security, and unlock new growth opportunities. With a commitment to excellence and a focus on delivering value, professional services are needed as partners in helping organizations in the digital era.</p>
                                </div> --}}

                            </div>

                            <div class="mx-5 px-3 p-2 mt-3">
                                <div class="d-flex flex-column justify-content-center wow slideInUp mt-4" data-wow-delay="0.1s">
                                    <div class="d-flex flex-row justify-content-center mt-5 blog-share">
                                        <a class="btn box-shadow btn-rounded text-primary" href="#">Share  </a>
                                    </div>
                                    <div class="social-link d-flex flex-row justify-content-center text-left pt-3">
                                        <a class="btn box-shadow btn-rounded me-2 mr-2" href="#"><i class="fas fa-link fw-normal"></i></a>
                                        <a class="btn box-shadow btn-rounded me-2 mr-2" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                                          </svg></a>
                                        <a class="btn box-shadow btn-rounded me-2 mr-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                        <a class="btn box-shadow btn-rounded me-2 mr-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                        <a class="btn box-shadow btn-rounded" href="#"><i class="fas fa-envelope fw-normal"></i></a>
                                    </div>
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
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? $blog->category->name : '') =='Consulting Service' ? 'active' :''  }} " href="{{ route('blogs','consulting-service')}}">Consulting Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? $blog->category->name : '') =='Platform And Operation Service' ? 'active' :''  }}" href="{{ route('blogs','platform-and-operation-service')}}">Platform And Operation Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? $blog->category->name : '') =='Enterprise Application Service' ? 'active' :''  }}" href="{{ route('blogs','enterprise-application-service')}}">Enterprise Application Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? $blog->category->name : '') =='Digital Service' ? 'active' :''  }}" href="{{ route('blogs','digital-service')}}">Digital Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? $blog->category->name : '') =='Staffing Service' ? 'active' :''  }}" href="{{ route('blogs','staffing-service')}}">Staffing Services</a>
                        </div>
                    </div>
                </div>

                {{-- <div class="box-shadow px-3 p-2 mt-3">
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
                </div> --}}



            </div>
            <!-- Sidebar End -->
        </div>
    </div>
</div>


@endsection
