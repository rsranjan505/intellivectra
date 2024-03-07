<div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
    <div class="carousel-indicators">
        <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
        <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></li>
        <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></li>
    </div>
    <div class="carousel-inner" >
        <div class="carousel-item  active" >
            {{-- <img class="w-100" src="{{ asset('assets/img/bg-2.jpg')}}" alt="Image"> --}}
            <video autoplay loop muted class="myvid" id="player2">
                <source src="{{ asset('assets/img/video-1.mp4')}}" type="video/mp4">
            </video>
            <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                <div class="container">
                    <div class="p-3 text-left">
                        <h2 class="display-1 text-primary mb-md-1 animated slideInDown">Business & </h2>
                        <h2 class="display-1 text-white mb-md-4 animated zoomIn">Enterprise Hub</h2>
                        <p>We deliver smart solutions for your business</p>
                        <div class="form-rounded input-form-bg w-50" style="max-width: 300px;">
                            <form action="">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                          </svg></span>
                                      </div>
                                    <input type="text" class="form-control border-0 p-3 input-form-bg shadow-none" style="max-width: 300px;"  placeholder="Your Email">
                                    <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                          </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item " >
            <img class="w-100" src="{{ asset('assets/img/bg-2.jpg')}}" alt="Image">
            {{-- <video autoplay loop muted class="myvid" id="player2">
                <source src="{{ asset('assets/img/video-2.mp4')}}" type="video/mp4">
            </video> --}}
            <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                <div class="container">
                    <div class="p-3 text-left">
                        <h2 class="display-1 text-primary mb-md-1 animated slideInDown">Secure Data </h2>
                        <h2 class="display-1 text-white mb-md-4 animated zoomIn">Handling</h2>
                        <div class="form-rounded input-form-bg w-50" style="max-width: 300px;">
                            <form action="">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                          </svg></span>
                                      </div>
                                    <input type="text" class="form-control border-0 p-3 input-form-bg shadow-none"  placeholder="Your Email" style="max-width: 300px;">
                                    <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                          </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item " >
            {{-- <img class="w-100" src="{{ asset('assets/img/bg-3.jpg')}}" alt="Image"> --}}
            <video autoplay loop muted class="myvid" id="player2">
                <source src="{{ asset('assets/img/video-3.mp4')}}" type="video/mp4">
            </video>
            <div class="carousel-caption d-flex flex-column align-items-start justify-content-center">
                <div class="container">
                    <div class="p-3 text-left">
                        <h2 class="display-1 text-primary mb-md-1 animated slideInDown">Recruitment </h2>
                        <h2 class="display-1 text-white mb-md-4 animated zoomIn">Made Easy</h2>
                        <div class="form-rounded input-form-bg w-50" style="max-width: 300px;">
                            <form action="">
                                <div class="input-group ">
                                    <div class="input-group-prepend">
                                        <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                          </svg></span>
                                      </div>
                                    <input type="text" class="form-control border-0 p-3 input-form-bg shadow-none"  placeholder="Your Email" style="max-width: 300px;">
                                    <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                          </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
