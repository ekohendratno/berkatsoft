<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Jasa Sewa VPS Premium Hosting Murah, Dapatkan Diskon Premium Hosting">
    <meta name="author" content="hosting, hosting murah, hosting, vps, cbt, ujian, server, sewa vps, ujian online ">

    <!-- Favicons
    <link href="{{ asset('img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon" />-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-64R7X1XSZJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-64R7X1XSZJ');
    </script>
    <!-- =======================================================
* Template Name: Arsha - v4.7.1
* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>



<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <!--<h1 class="logo me-auto"><a href="index.php">KOPAS HOSTING</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="https://ekohendratno.jasaedukasi.com" class="logo me-auto"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid" /></a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="/">HOME</a></li>
                <li><a class="nav-link scrollto" href="/film/populer">POPULER</a></li>
                <li><a class="nav-link scrollto" href="/film/nowplaying">SEDANG DIPUTAR</a></li>
                <li><a class="nav-link scrollto" href="/film/upcoming">MEDATANG</a></li>
                <li><a class="nav-link scrollto" href="/film/toprating">TOP RATING</a></li>
                <li><a class="getstarted getstarted1 scrollto" href="/member">MASUK MEMBER</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->
<div style="text-align: center; background-color: #fff3cd; margin: 0; padding: 0;display: none">MOHON MAAF, SAAT INI SERVER HOSTING DALAM MASA UJICOBA</div>




@yield('konten')





<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <a href="https://jasaedukasi.com" class="logo me-auto"><img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid" /></a>
                    <p><br />
                        Jl. Jendral Sudirman Rawa Selapan <br />
                        Kec. Candipuro Kab. Lam-Sel Lampung , <br />
                       35353 Indonesia <br />
                        <br />
                        <strong>Phone:</strong> +62 851 5889 1240<br />
                        <strong>Email:</strong> info@jasaedukasi.com<br />
                    </p>



                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Mungkin berguna</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/service">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/termofuse">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/privacy">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Layanan</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Jejaring Sosial</h4>
                    <p>Info lebih lanjut bisa hubungi kami di jejaring sosial berikut:</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>JASA EDUKASI</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- Vendor JS Files -->
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>


<!-- Template Main JS File -->
<script src="{{ asset('js/main.js') }}"></script>
<style>
    #header.fixed-top {
        background: #575757a8;
    }

    .wa-toggle {
        position: fixed;
        right: 16px;
        bottom: 16px;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
        color: #fff;
        font-size: 2.25rem;
    }
</style>

</body>

</html>
