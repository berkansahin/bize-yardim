<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@bizeyardim">
    <meta name="twitter:creator" content="@bizeyardim">
    <meta name="twitter:card" content="bize_yardim">
    <meta name="twitter:title" content="Bize Yardım">
    <meta name="twitter:description" content="Bize Yardım">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="Bize Yardım">
    <meta property="og:description" content="Bize Yardım">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description" content="Bize Yardım">
    <meta name="author" content="Bize Yardım">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Bize Yardım</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!--custom css end-->

</head>

<body>

<!--main content wrapper start-->
<div class="main-wrapper">

    <!--header section start-->
    <!--header start-->
    <header class="main-header position-absolute w-100">
        <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
            <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                <a href="/" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                    <img src="{{ asset('assets/img/logo.png') }}" style="width: 50px;" alt="logo" class="img-fluid logo-white" />
                </a>
                <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
                    <span class="far fa-bars" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop" data-bs-toggle="offcanvas" role="button"></span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <!--<a href="login.html" class="btn btn-link text-decoration-none text-white me-2">Adres Gir</a>-->
                    </ul>
                </div>
                <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                    <a href="{{ route('address') }}" class="btn btn-primary">Adres Gir</a>
                </div>
            </div>
        </nav>
    </header>
    <!--header end-->
    <!--header section end-->
    @yield('content')
    <!--footer section start-->
    <footer class="footer-section">
        <!--footer top start-->
        <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
        <div class="footer-top footer-light ptb-120">
            <div class="container">

            </div>
        </div>
        <!--footer top end-->

        <!--footer bottom start-->
        <div class="footer-bottom footer-light py-4">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-7 col-lg-7">
                        <div class="copyright-text">
                            <p class="mb-lg-0 mb-md-0">&copy; {{ date('Y') }} Bize Yardım</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="footer-single-col text-start text-lg-end text-md-end">
                            <!--
                            <ul class="list-unstyled list-inline footer-social-list mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                            </ul>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom end-->
    </footer>
    <!--footer section end-->

</div>

<!--build:js-->
<script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>

<!--endbuild-->
</body>

</html>
