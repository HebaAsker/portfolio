<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio - v3.10.0
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
    </head>

    <body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

        <div class="profile">
            <img src="assets/img/Picsart_23-02-14_15-11-27-858.jpg" alt="" class="img-fluid rounded-circle">
            @if(Auth::check())
                <h1 class="text-light"><a href="{{ url('/dashboard') }}">{{ $user->name }}</a></h1>
            @else
                <h1 class="text-light"><a>{{ $user->name }}</a></h1>
            @endif
            <div class="social-links mt-3 text-center">
                @foreach ($socialMidea as $media)
                    @if ($media->name=='facebook')
                        <a href="{{ $media->link}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                    @elseif(($media->name=='twitter'))
                        <a href="{{ $media->link}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                    @elseif(($media->name=='instagram'))
                        <a href="{{ $media->link}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                    @elseif(($media->name=='skype'))
                        <a href="{{ $media->link}}" class="google-plus"><i class="bx bxl-skype"></i></a>
                    @else
                    <a href="{{ $media->link}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    @endif
                @endforeach

            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
            <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
            <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
            <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
            <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->
