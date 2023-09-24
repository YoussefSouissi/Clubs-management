<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>ISET CLUBS</title>

  <link rel="stylesheet" href="{{ asset('css/maicons.css')}}">

<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

<link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.carousel.css')}}">

<link rel="stylesheet" href="{{ asset('vendor/animate/animate.css')}}">

<link rel="stylesheet" href="{{ asset('css/theme.css')}}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
   

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">ISET</span>-CLUBS</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/ClubsPage') }}">Clubs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{ url('/EventsPage') }}">Events</a>
            </li>
            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Clubs</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our Clubs</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
            
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="img/doctors/ieee.png" alt="">
                  
                </div>
                <div class="body">
                  <p class="text-xl mb-0">IEEE</p>
                  <span class="text-sm text-grey">ieee@gmail.com</span>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="img/doctors/tunivision.png" alt="">
                  
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Tunivision</p>
                  <span class="text-sm text-grey">tunivision@gmail.com</span>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="img/doctors/googleclub.png" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Google Club</p>
                  <span class="text-sm text-grey">Googleclub@gmail.com</span>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="img/doctors/4c.jpg" alt="">
                  
                </div>
                <div class="body">
                  <p class="text-xl mb-0">4C Bizerte</p>
                  <span class="text-sm text-grey">4c@gmail.com</span>
                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="img/doctors/alphatech.jpg" alt="">
                </div>
                <div class="body">
                  <p class="text-xl mb-0">AlphaTech</p>
                  <span class="text-sm text-grey">AlphaTech@gmail.com</span>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->



  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">IEEE</a></li>
            <li><a href="#">Google club</a></li>
            <li><a href="#">Tunivision</a></li>
            <li><a href="#">4C</a></li>
            <li><a href="#">AlphaTech</a></li>
          </ul>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2023 <a href=""target="_blank">ISET CLUBS</a>. All right reserved</p>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->

  <script src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{ asset('vendor/wow/wow.min.js')}}"></script>

<script src="{{ asset('js/theme.js')}}"></script>
  
</body>
</html>