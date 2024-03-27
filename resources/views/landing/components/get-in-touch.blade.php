<div class="container-fluid wow fadeInUp my-4 mb-4" data-wow-delay="0.1s">
    <div class="container">
        <div class="case-content row mt-5 box-shadow">
            <div class="col-lg-6 pt-2" >
                <h1 class="ml-4"> <span class="text-primary"> Get in  </span>Touch</h1>
                <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container">
                        <div class="row">
                            <form id="gettouch" method="post" action="{{ route('getInTouch')}}" class="getin-touch">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <input type="text" name="first_name" id="first_name" class="form-control border border-warning form-input-rounded input-form" placeholder="First Name" >
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="last_name" id="last_name" class="form-control border border-warning form-input-rounded input-form" placeholder="Last Name" >
                                    </div>
                                    <div class="col-md-12">
                                        <input type="email"  name="email" id="email"class="form-control border border-warning form-input-rounded input-form" placeholder=" Email" >
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="mobile" id="mobile" class="form-control border border-warning form-input-rounded input-form" placeholder="Mobile" >
                                    </div>
                                    <div class="col-12">
                                        <textarea type="text" name="message" id="message" class="form-control border border-warning form-input-rounded input-form" placeholder="Message" ></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-dark form-input-rounded ml-3 mt-2 px-4 text-center" type="submit">Submit  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                                </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <h4 class="fw-dark text-warning" id="loading"></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" >
                <img class="card-img-top case-content-img"  src="{{ asset('assets/img/get-in-touch.png')}}" alt="Card image cap">
            </div>
        </div>
    </div>
</div>
