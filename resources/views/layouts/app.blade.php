<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kaam Milega</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('public/assets-new/images/favicon.ico')}}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
  <link rel="stylesheet" href="{{ asset('public/assets-new/css/style.css')}}">
</head>

<body>
  <!-- -----------Navbar Start Here------------ -->
  <section class="home-page-section">
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="">
          <img src="{{ asset('public/assets-new/images/logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
              <div class="menu-search">
                <input type="text" placeholder="Search">
                <div class="menu-search-button">
                  <button class="menu-search-btn-tag" type="button" value="">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </div>
              </div>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="{{ asset('public/assets-new/images/menu-images/devicemobile.png')}}" class="pe-1" />Download
                App</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">English</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">German</a></li>
                <li><a class="dropdown-item" href="#">Spanish</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login"><img src="{{ asset('public/assets-new/images/menu-images/signin.png')}}"
                  class="pe-1" />Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hire-local-staff" href="/hire">Hire Local Staff <img
                  src="{{ asset('public/assets-new/images/menu-images/arrowsquareout.png')}}" class="ps-1" /></a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </section>
    
            @yield('content')
   <!-- ----------- footer-find-jobs-section Start Here------------  -->
<!--   <section class="footer-find-jobs-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12 offset-md-3 offset-lg-3">
          <div class="footer-heading-dv">
            <h6><b>Find Jobs</b></h6>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-12"></div>
        <div class="col-lg-2 col-md-2 col-12">
          <div class="footer-find-dv">
            <ul>
              <li><a href="#">Agra</a></li>
              <li><a href="#">Ajmer</a></li>
              <li><a href="#">Asansol</a></li>
              <li><a href="#">Belagavi</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-12">
          <div class="footer-find-dv">
            <ul>
              <li><a href="#">Ahmedabad</a></li>
              <li><a href="#">Aligarh</a></li>
              <li><a href="#">Aurangabad</a></li>
              <li><a href="#">Bengaluru</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-12">
          <div class="footer-find-dv">
            <ul>
              <li><a href="#">Ahmednagar</a></li>
              <li><a href="#">Amritsar</a></li>
              <li><a href="#">Bareilly</a></li>
              <li><a href="#">Bhavnagar</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12"></div>
      </div>
      <div class="row collapse" id="view-more-find-job">
        <div class="col-lg-3 col-md-3 col-12"></div>
        <div class="col-lg-2 col-md-2 col-12">
          <div class="footer-find-dv">
            <ul>
              <li><a href="#">Agra</a></li>
              <li><a href="#">Ajmer</a></li>
              <li><a href="#">Asansol</a></li>
              <li><a href="#">Belagavi</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-12">
          <div class="footer-find-dv">
            <ul>
              <li><a href="#">Ahmedabad</a></li>
              <li><a href="#">Aligarh</a></li>
              <li><a href="#">Aurangabad</a></li>
              <li><a href="#">Bengaluru</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-12">
          <div class="footer-find-dv">
            <ul>
              <li><a href="#">Ahmednagar</a></li>
              <li><a href="#">Amritsar</a></li>
              <li><a href="#">Bareilly</a></li>
              <li><a href="#">Bhavnagar</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-12"></div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="view-more-btn">
            <a class="" data-bs-toggle="collapse" href="#view-more-find-job" role="button" aria-expanded="false"
              aria-controls="collapseExample">
              View more
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <div class="container-fluid">
    <hr>
  </div>
  <!-- ----------- footer-find-jobs-section End Here------------  -->
  <!-- ----------- footer-link Start Here------------  -->
  <section class="footer-links-sec">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1 col-md-1 col-6"></div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="footer-links-parent">
            <div class="footer-heading">
              <h5>Legal</h5>
            </div>
            <div class="footer-links-tags">
              <ul>
                <li><a href="#">Jobseeker FAQs</a></li>
                <li><a href="#">Employer FAQs</a></li>
                <li><a href="#">User Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Employer Terms of Service</a></li>
                <li><a href="#">Connect Like You Guidelines</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="footer-links-parent">
            <div class="footer-heading">
              <h5>Services</h5>
            </div>
            <div class="footer-links-tags">
              <ul>
                <li><a href="#">Job Search by Category</a></li>
                <li><a href="#">Job Search by City</a></li>
                <li><a href="#">Browse Search</a></li>
                <li><a href="#">Free Job Alerts</a></li>
                <li><a href="#">Recommended Job</a></li>
                <li><a href="#">Similar Jobs</a></li>
                <li><a href="#">Resume Builder</a></li>
                <li><a href="#">Subscription (Wallets)</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="footer-links-parent">
            <div class="footer-heading">
              <h5>Solutions</h5>
            </div>
            <div class="footer-links-tags">
              <ul>
                <li><a href="#">Connect Like You</a></li>
                <li><a href="#">Premium Job Search</a></li>
                <li><a href="#">Instant Milega</a></li>
                <li><a href="#">Learn with KM</a></li>
                <li><a href="#">Promotion (Ad Network)</a></li>
                <li><a href="#">How we work</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="footer-links-parent">
            <div class="footer-heading">
              <h5>Connect</h5>
            </div>
            <div class="footer-links-tags">
              <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">How we work</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Career</a></li>
              </ul>
              <div class="footer-heading">
                <h5>Follow Us</h5>
              </div>
              <ul class="follow-us-ul">
                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/instagram.png')}}" alt=""><span>Instagram</span></a></li>
                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/facebook.png')}}" alt=""><span>Facebook</span></a></li>
                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/linkedin.png')}}" alt=""><span>linkedIn</span></a></li>
                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/youtube.png')}}" alt=""><span>Youtube</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-2 col-6">
          <div class="footer-links-parent">
            <div class="footer-heading">
              <h5>Company / Employer</h5>
            </div>
            <div class="footer-links-tags">
              <ul>
                <li><a href="#">Hire Local Staff</a></li>
                <li><a href="#">Post a Job</a></li>
                <li><a href="#">Build Brand Image</a></li>
                <li><a href="#">Contact Support</a></li>
              </ul>
              <div class="footer-heading">
                <h5>apply on the go</h5>
              </div>
              <div class="get-real-p">
                <p>get real time update on our app</p>
              </div>
              <ul class="follow-us-store">
                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/google-play.png')}}" alt=""></a></li>
                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/app-store.png')}}" alt=""></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-1 col-md-1 col-6"></div>
      </div>
    </div>
  </section>
  <!-- ----------- footer-link End Here------------  -->
  <!-- ----------- footer-copy-right Start Here------------  -->
  <footer class="copy-right-sec">
    <p>All rights reserved © 2023 kaam milega</p>
  </footer>
  <!-- ----------- footer-copy-right End Here------------  -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
  <script src="{{ asset('public/assets-new/js/custom.js')}}        "></script>
</body>

</html>