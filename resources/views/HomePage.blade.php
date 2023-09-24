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
    <div class="topbar">
      <div class="container">
      </div> <!-- .container -->
    </div> <!-- .topbar -->

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

  <div class="page-hero bg-image overlay-dark" style="background-image: url(img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Discover a world of opportunities with our platform</span>
        <h1 class="display-4">designed for ISET students</h1>
        <a href="#" class="btn btn-primary">stay connected with the student community</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Browse clubs,</span>  events, and activities with ease</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>We foster</span> student engagement.</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Join us</span> for a vibrant environment.</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0" id="About">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to ISET-CLUBS </h1>
            <p class="text-grey mb-4">Our platform provides a comprehensive solution to the students of
            ISET, allowing them to easily browse through the available clubs,
            events, and activities. Additionally, it also enables the clubs to
            efficiently manage their members, events, and activities. Our
            platform aims to facilitate communication and engagement within the
            student community by offering convenient access to all relevant
            information. It encourages active student participation in clubs and
            events, fostering a dynamic and enriching environment for everyone
            involved.</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="img/pic1.png" alt="" style="width: 400px;">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Clubs</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
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
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="img/doctors/googleclub.png" alt="">
              
            </div>
            <div class="body">
              <p class="text-xl mb-0">Google club</p>
              <span class="text-sm text-grey">googleclub@gmail.com</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="img/doctors/alphatech.jpg" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">Alphatech</p>
              <span class="text-sm text-grey">alphatech@gmail.com</span>
            </div>
          </div>
        </div>
        <div class="item">
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
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="img/doctors/4c.jpg" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">4C ISET BIZERTE</p>
              <span class="text-sm text-grey">4c@gmail.com</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest Events</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">New</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="img/blog/codeitup.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Code it up</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="img/doctors/ieee.png" alt="">
                  </div>
                  <span>IEEE</span>
                </div>
                <span class="mai-time"></span> 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">New</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="img/blog/codeitup.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Code it up</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="img/doctors/ieee.png" alt="">
                  </div>
                  <span>IEEE</span>
                </div>
                <span class="mai-time"></span> 2 days ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">New</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="img/blog/codeitup.jpg" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">Code it up</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="img/doctors/ieee.png" alt="">
                  </div>
                  <span>IEEE</span>
                </div>
                <span class="mai-time"></span> 2 days ago
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="blog.html" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
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