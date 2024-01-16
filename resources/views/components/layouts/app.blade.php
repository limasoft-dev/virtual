<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Courses - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('mentor/img/favicon.png')}}" rel="icon">
  <link href="{{asset('mentor/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('mentor/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('mentor/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('mentor/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('mentor/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('mentor/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('mentor/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('mentor/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('mentor/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <livewire:mentor.top-menu>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-in">

    {{ $slot }}


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <livewire:mentor.footer-links/>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('mentor/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('mentor/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('mentor/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('mentor/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('mentor/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('mentor/js/main.js')}}"></script>

</body>

</html>
