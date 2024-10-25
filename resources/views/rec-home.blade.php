<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kaam Milega | Jobs </title>
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
    <!-- -----------Navbar Third Start Here------------ -->
    <section class="home-page-third-nav-section">
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('public/assets-new/images/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
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
                            <a class="nav-link" href="#"><img
                                    src="{{ asset('public/assets-new/images/menu-images/devicemobile.png')}}"
                                    class="pe-1" />Download
                                App</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">English</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">German</a></li>
                                <li><a class="dropdown-item" href="#">Spanish</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recruiter-login"><img
                                    src="{{ asset('public/assets-new/images/menu-images/signin.png')}}"
                                    class="pe-1" />Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hire-local-staff" href="rec-home">looking for a job? <img
                                    src="{{ asset('public/assets-new/images/menu-images/arrowsquareout.png')}}"
                                    class="ps-1" /></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- -----------Navbar Third Start Here------------ -->
    <!-- -----------Recruiter After Navbar Banner Start Here------------ -->
    <section class="recruiter-after-nav-banner-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-images-dv">
                        <img src="{{ asset('public/uploads/').'/'.$banner->rec_image}}" class="img-fluid rec-home-banner" />
                        <div class="banner-content">
                            <h2>Find <span> local jobs</span> </h2>
                            <h2>with better salary!</h2>
                            <p>Call Hr Directly To Fix Interview For FREE</p>
                            <div class="banner-button">
                                <a href="#" class="chat mx-2"><img
                                        src="{{ asset('public/assets-new/images/banner/chat.png')}}" alt=""
                                        class="img-fluid me-1">Chat With HR</a>
                                <a href="#" class="get-job mx-2">Get A Job Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -----------After Banner slider section End Here------------ -->
    <!-- ----------- Rec Where do you want to work section Start Here------------ -->
    <section class="rec-where-do-you-work-section">
        <div class="container">
            <div class="want-to-work-dv">
                <h3>Where Do You Want To <span>Hire?</span></h3>
            </div>
            <div class="want-to-work-slider">
                @foreach($states as $key => $value)
                <a href="{{ url(Str::slug($value->name) . '-jobs') }}" style="text-decoration: none;">
                    <div class="slider-item">
                        <h4>{{$value->name}}</h4>
                        <p>600,000+ Vacancies</p>
                    </div>
                </a>
                @endforeach


            </div>
        </div>
    </section>
    <!-- ----------- Rec Where do you want to work section End Here------------ -->
    <!-- ----------- how to hire in less than 48 hours section Start Here------------ -->
    <section class="how-to-hire-less-than-hour-sec">
        <div class="container-fluid">
            <div class="how-to-hire-heading">
                <h3>How To Hire In Less Than <span> 48 Hours</span></h3>
            </div>
            <div class="hire-job-img-design">
                <div class="row hire-job-row justify-content-center">
                    <!-- <div class="col-lg-3 col-md-3 col-12"></div> -->
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="col-img-card-parent">
                            <img src="{{ asset('public/assets-new/images/rec-home/hire-1.png')}}" alt="">
                            <p>Post A Free Job In <span> Less Than 1 Minute</span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="col-img-card-parent">
                            <img src="{{ asset('public/assets-new/images/rec-home/hire-2.png')}}" alt="">
                            <p>Get Direct <span>Phone Calls / Chat</span> From Relevant Candidates </p>
                        </div>
                    </div>
                    <div class="col-lg-23 col-md-3 col-12">
                        <div class="col-img-card-parent">
                            <img src="{{ asset('public/assets-new/images/rec-home/hire-3.png')}}" alt="">
                            <p>Interview And Hire The <span> Right Staff </span></p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-3 col-12"></div> -->
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="start-hiring-dv">
                            <a href="#">Start Hiring</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------- how to hire in less than 48 hours section End Here------------ -->
    <!-- ----------- Hire from 30+ categories section Start Here------------ -->
    <section class="hire-from-30-categories-sec">
        <div class="container-fluid">
            <div class="what-kind-of-card">
                <h3>Hire From <span>30+ Categories</span></h3>
                <div class="what-kind-role-img">
                    @foreach($JobCategory as $key => $value)
                    <div class="kind-card-img-content-item">
                        <a href="{{ url(Str::slug($value->name) . '-jobs') }}">
                            <img src="{{ asset('public/uploads/'.$value->image) }}" class="img-fluid" />
                            <div class="what-kind-role-content">
                                <h5>{{$value->name}}</h5>
                                <p>View 5,50,000+ Vacancies</p>
                            </div>
                        </a>
                    </div>
                    @endforeach


                </div>
                <div class="kind-card-item-button">
                    <a href="#">See All Job Roles</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------- Hire from 30+ categories section End Here------------ -->
    <!-- ----------- Our Happy Employers section Start Here------------ -->
    <section class="our-happy-employers-sec">
        <div class="our-happy-emp-parent">
            <div class="container-fluid">
                <div class="our-happy-emp-heading">
                    <h3>Our Happy <span> Employers 🎉</span></h3>
                </div>
                <div class="our-happy-emp-slider-parent">
                    @foreach ($recruiter_review as $key => $value)
                    <div class="our-happy-card-item">
                        {!!$value->comment!!}
                        <div class="row our-happy-name-dv align-items-center justify-content-between">
                            <div class="col-lg-8 col-md-8 col-8 name-com-name">
                                <h6>{{$value->name}}</h6>
                                <p>{{$value->company_name}}</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-4 quote-icon text-end">
                                <div class="right-dv-1-img">
                                    <img src="{{ asset('public/assets-new/images/rec-home/quote.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- ----------- Our Happy Employers section End Here------------ -->

    <!-- ----------- Rec Get a job faster on app Start Here------------  -->
    <section class="rec-get-a-job-faster-app-start-sec">
        <div class="container-fluid">
            <div class="get-a-job-you-card">
                <h3>Hiring Is <span>45% Faster</span> On The App</h3>
                <p class="rated-para">4000+ Employers Like You Are Already Using I</p>
            </div>
        </div>
    </section>
    <!-- ----------- Rec Get a job faster on app end Here------------  -->

    <!-- ----------- How can we help you? Start Here------------  -->
    <section class="how-can-we-help-you-sec">
        <div class="container-fluid">
            <div class="popular-question-sec-parent">
                <div class="popular-questions-heading">
                    <h3>How Can We <span> Help You</span></h3>
                </div>
                <div class="faq-section-start">
                    <div class="accordion" id="accordionExample">
                        @foreach ($faqs->where('faq_for', 2) as $key => $value)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne{{$key}}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne{{$key}}" aria-expanded="true"
                                    aria-controls="collapseOne{{$key}}">
                                    {{$value->title}}
                                </button>
                            </h2>
                            <div id="collapseOne{{$key}}"
                                class="accordion-collapse collapse {{$loop->first ? 'show' : ''}}"
                                aria-labelledby="headingOne{{$key}}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {!! $value->descriptions !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------- How can we help you? End Here------------  -->
    <!-- ----------- footer-find-jobs-section Start Here------------  -->
    <section class="footer-find-jobs-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 offset-md-3 offset-lg-3">
                    <div class="footer-heading-dv">
                        <h6><b>Start Hiring</b></h6>
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
                        <a class="" data-bs-toggle="collapse" href="#view-more-find-job" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            View more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <hr>
    </div>
    <!-- ----------- footer-find-jobs-section End Here------------  -->
    <!-- ----------- footer-link Start Here------------  -->
    <footer class="footer-links-sec">
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
                                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/instagram.png')}}"
                                            alt=""><span>Instagram</span></a></li>
                                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/facebook.png')}}"
                                            alt=""><span>Facebook</span></a></li>
                                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/linkedin.png')}}"
                                            alt=""><span>linkedIn</span></a></li>
                                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/youtube.png')}}"
                                            alt=""><span>Youtube</span></a></li>
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
                                <li><a href="#"><img
                                            src="{{ asset('public/assets-new/images/home-con/google-play.png')}}"
                                            alt=""></a></li>
                                <li><a href="#"><img src="{{ asset('public/assets-new/images/home-con/app-store.png')}}"
                                            alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-6"></div>
            </div>
        </div>
    </footer>
    <!-- ----------- footer-link End Here------------  -->
    <!-- ----------- footer-copy-right Start Here------------  -->
    <section class="copy-right-sec">
        <p>All rights reserved © 2023 kaam milega</p>
    </section>
    <!-- ----------- footer-copy-right End Here------------  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
    <script src="{{ asset('public/assets-new/js/custom.js')}}"></script>
</body>

</html>