<div class="container-fluid bg-dark pb-4 text-light wow fadeInUp footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-evenly mt-3">
                    <a href="index.html" class="my-3 navbar-brand">
                        <img src="{{ asset('assets/img/footer-logo.png')}}" width="220"/>
                    </a>
                    {{-- <p class="mt-3 mb-4"><span class="text-primary">Intelli Vectra</span> is a Technology and Vendor agnostic solution provider. </p> --}}
                    <div class="form-rounded input-form-bg mt-2">
                        <form action="">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                      </svg></span>
                                  </div>
                                <input type="text" class="form-control border-0 p-3 input-form-bg"  placeholder="Your Email">
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
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-4">
                        <div class="position-relative pb-3 mb-4">
                            <h3 class="text-primary mb-0">Our Company</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-3" href="{{ route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-light mb-3" href="{{ route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Team</a>
                            <a class="text-light mb-3" href="{{ route('about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our OEMs</a>
                            <a class="text-light" href="{{ route('contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-4">
                        <div class="position-relative pb-3 mb-4">
                            <h3 class="text-primary mb-0">Our Solutions</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="text-light mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Consulting Services</a>
                            <a class="text-light mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Platform And Operation Services</a>
                            <a class="text-light mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Enterprise Application Services</a>
                            <a class="text-light mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Digital Services</a>
                            <a class="text-light mb-3" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Security Services</a>
                            <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Staffing Services</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-4">
                        <div class="position-relative pb-3 mb-4">
                            <h3 class="footer-text text-primary mb-0">Contact Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="footer-text mb-0">012-4496-0635</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="footer-text mb-0">info@intellivectra.tech</p>
                        </div>

                        <div class="d-flex mb-3">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="footer-text mb-0">2nd Floor, Plot No. 29,
                                Maruti Industrial Area, Sector-18,
                                Gurugram–122015 (Haryana).</p>
                        </div>
                        {{-- <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white bg-dark " >
    <div class="container text-center ">
    <hr>
        <div class="row justify-content-between py-3 ">

                <div class="d-flex align-items-center justify-content-center" >
                    <p class="mb-0">&copy; <a class="text-light border-bottom" href="#">2021 Intelli Vectra Technologies Pvt. Ltd</a>. All Rights Reserved.
                   </p>
                </div>
                <div class="d-flex align-items-center justify-content-center" >

                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href=""><i class="fab fa-linkedin-in fw-normal" style="color: #ffffff;"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href=""><i class="fab fa-twitter fw-normal" style="color: #ffffff;"></i></a>

                </div>
                <div class="d-flex align-items-end justify-content-center" >
                    <a class="text-light bottom-footer-link" href="#">Terms & Conditions</a>
                    <a class="text-light bottom-footer-link" href="#">Privacy Policy</a>
                </div>

        </div>
    </div>
</div>
<!-- Footer End -->