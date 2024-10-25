<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> IVCA Association </title>
    <link rel="icon" type="image/x-icon" href="{{asset('website/images/fav32.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/css/style.css') }}">
</head>

  <body>
<div class="hero-header">
        <nav class="navbar navbar-expand-lg" id="myHeader">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('website/images/IVCA-Logo.png') }}" width="230px" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/agenda') }}">Agenda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/key-note-speakers') }}">Speakers</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/sponsors') }}">Sponsors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/locate-us-venue') }}">Venue</a>
                        </li>
                        <!--<li class="nav-item dropdown">-->
                        <!--    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"-->
                        <!--        aria-expanded="false">-->
                        <!--        Media-->
                        <!--        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">-->
                        <!--          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>-->
                        <!--        </svg>-->
                        <!--    </a>-->
                        <!--    <ul class="dropdown-menu">-->
                        <!--        <li><a class="dropdown-item" href="{{ url('/media-coverage') }}">Media Coverage</a></li>-->
                        <!--        <li><a class="dropdown-item" href="{{ url('/highlight') }}">Highlights</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Past Events
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/') }}">Past Events</a></li>
                                <!--<li><a class="dropdown-item" href="{{ url('/event-overview') }}">Past Events</a></li>-->
                                <li><a class="dropdown-item" target="_blank" href="{{ url('https://www.ivca.in/awards') }}">IVCA PE/VC Awards</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>



                    </ul>
                    <div class="d-flex">
                        <!--<a href="https://www.meraevents.com/event/ivca-conclave-2023" target="_blank" class="button-80">Register</a>-->
                        <a href="{{ url('/register') }}" class="button-80">Register Now</a>
                    </div>
                </div>
            </div>
        </nav>

    </div>



    @yield('content')






    <footer class="site-footer">
        <div class="container">
            <div class="f-head">
                <ul class="f-link">
                    <li><a href="{{ url('/why-attend') }}">Why Attend?</a></li>
                    <!-- <li><a href="{{ url('/') }}">Speaker Booklet</a></li> -->
                    <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
                <ul class="f-social">
                    <li><a target="_blank" href="https://www.facebook.com/indiavca/"><i class="bi bi-facebook"></i></a></li>
                    <li><a target="_blank" href="https://in.linkedin.com/company/indian-private-equity-venture-capital-association"><i class="bi bi-linkedin"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/IndianVCA"><i class="bi bi-twitter"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/channel/UCEyV1l7ncz8m9xYVXlhGEeA"><i class="bi bi-youtube"></i></a></li>
                </ul>
            </div>
            <div class="center-footer">
                <div class="row g-5 justify-content-between">
                    <div class="col-md-4">
                        <div class="heading">Contact Us</div>
                        <ul class="ct">
                            <!--<li><i class="bi bi-telephone"></i> Call Us : <a href="tell:011-49879305">011-49879305</a></li>-->
                            <li><i class="bi bi-envelope"></i> Email: <a href="mailto:Info@ivca.in"> Info@ivca.in</a></li>
                            <li><i class="bi bi-geo-alt"></i> Location: IVC Association, Office No. 7 and 13, 1st Floor, Innov8, Old Fort Saket, District Centre, South Delhi, New Delhi - 110017.</li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <div class="heading">Past Events</div>
                        <ul class="links">
                            <li><a href="{{ url('/') }}"><i class="bi bi-chevron-right"></i> Conclave 2022</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <!-- <div class="heading">About IVCA</div>
                        <p>Established, for over a decade, by industry
                        professionals with a unified aim to drive
                        forward Alternate capital industry in India.</p>
                    </div>  -->
                </div>
            </div>
            <div class="bottom-footer">
                Copyright © 2023 IVCA. All rights reserved.
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script src="{{ asset('website/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('website/js/swiper-bundle.min.js') }} "></script>
    <script src="{{ asset('website/js/custom.js') }} "></script>



    </body>
    </html>
