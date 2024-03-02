<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>IntelliVectra - Home</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="{{ asset('assets/img/favicon.ico')}}" rel="icon">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        {{-- <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"> --}}

    </head>

    <body>

         <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner"></div>
        </div>
        <!-- Spinner End -->
            <!-- Topbar Start -->

    <!-- Topbar End -->
        @include('landing.components.header')


            @yield('contents')


        @include('landing.components.footer')


         <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
          </svg></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('assets/lib/wow/wow.min.js')}}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/lib/counterup/counterup.min.js')}}"></script>

        <!-- Contact Javascript File -->
        <script src="{{ asset('assets/mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{ asset('assets/mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js')}}"></script>





    </body>
</html>
