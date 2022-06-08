
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ASTG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('clients/assets/Image/Logo.PNG')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('clients/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('clients/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('clients/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('clients/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('clients/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('clients/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('clients/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('clients/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bx bxl-whatsapp phone-icon text-white" id="whatsapp"></i>+222 654 137 642 
      </div>
      <div class="social-links d-none d-md-block">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com" class="text-white">Diallooumartelly@gmail.com</a>

      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1 ><a href="index.html"><img id="logo" src="{{asset('clients/assets/Image/Logo.PNG')}}"/></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Acceuil</a></li>
          <li><a class="nav-link scrollto"href="{{url('/apropros')}}">A Propos</a></li>
          <li class="dropdown"><a href="#services"><span>Nos Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Electricity</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{url('/batiment')}}">Electricity Batiment</a></li>
                  <li><a href="{{url('/industriel')}}">Electricity Industriel</a></li>
                
                </ul>
              </li>
              <li><a href="{{url('/energie')}}">Energies Renouvelables</a></li>
              <li><a href="{{url('/commerce')}}">Commerce</a></li>
              <li><a href="{{url('/agricultures')}}">Agriculture / Elevage</a></li>
            </ul>
          </li>         
       
          <li><a class="nav-link scrollto" href="{{url('/projects')}}">Projects</a></li>
          <li><a class="nav-link scrollto" href="{{url('/contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
  @yield('container')

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Dot Technology</h3>
            <p>
              Guinee Conakry <br>
              PG 1334,009<br><br>
              <strong>Phone:</strong>+222 654 137 642<br>
              <strong>Email:</strong>Diallooumatelly.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Acceuil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Portefeuille</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Electricite</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Energies Renouvelables</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Commerce</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Agriculture/Elevage</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Abonnez</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Chadotec</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      
        Designed by <a href="https://www.chadotec.com/">Chadotec</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('clients/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('clients/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('clients/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('clients/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('clients/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('clients/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('clients/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('clients/assets/js/main.js')}}"></script>

</body>

</html>