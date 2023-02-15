<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href={{ asset("front/img/favicon.ico") }} rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href={{ asset("front/lib/owlcarousel/assets/owl.carousel.min.css") }} rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href={{ asset("front/css/bootstrap.min.css") }} rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href={{ asset("front/css/style.css") }} rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>

<body>
    <!-- Topbar Start -->
    {{-- <div class="container-fluid bg-primary d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark py-2 pe-3 border-end border-white" href=""><i class="bi bi-telephone text-secondary me-2"></i>+012 345 6789</a>
                        <a class="text-dark py-2 px-3" href=""><i class="bi bi-envelope text-secondary me-2"></i>info@example.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-facebook-f text-secondary"></i>
                        </a>
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-twitter text-secondary"></i>
                        </a>
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-linkedin-in text-secondary"></i>
                        </a>
                        <a class="text-body py-2 px-3 border-end border-white" href="">
                            <i class="fab fa-instagram text-secondary"></i>
                        </a>
                        <a class="text-body py-2 ps-3" href="">
                            <i class="fab fa-youtube text-secondary"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->
    @include('sweetalert::alert')

    <!-- Navbar Start -->
   @include('front.partials.navbar')
    <!-- Navbar End -->


        @yield('container')
   

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-success btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Footer Start -->
    @include('front.partials.footer')
    <!-- Footer End -->
</body>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{ asset("front/lib/easing/easing.min.js") }}></script>
    <script src={{ asset("front/lib/waypoints/waypoints.min.js") }}></script>
    <script src={{ asset("front/lib/owlcarousel/owl.carousel.min.js") }}></script>
    <!-- Template Javascript -->
    <script src={{ asset("front/js/main.js") }}></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    {{-- <script src="/node_modules/sweetalert2/dist/sweetalert2.all.js"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('script')

    </html>
    