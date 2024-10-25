<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kaam Milega</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="public/assets-new/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
    <link rel="stylesheet" href="public/assets-new/css/style.css">
</head>

<body>
    <!-- -----------Navbar Start Here------------ -->
    <section class="home-page-section-before-login-navbar">
        <nav class="navbar navbar-expand-sm navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="public/assets-new/images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item all-city-drop-down">
                            <div class="dropdown">
                                <button class="all-city-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <div class="btn-icon">
                                        <img src="public/assets-new/images/navbar/map-icon.png" alt="">
                                        City- <span>All</span>
                                    </div>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </li>
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
                            <a class="nav-link" href="#"><img src="public/assets-new/images/menu-images/devicemobile.png"
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
                            <a class="nav-link" href="login"><img src="public/assets-new/images/menu-images/signin.png"
                                    class="pe-1" />Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hire-local-staff" href="rec-home">Hire Local Staff <img
                                    src="public/assets-new/images/menu-images/arrowsquareout.png" class="ps-1" /></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- -----------Navbar End Here------------ -->
    <!-- ----------- job-listing-details-page Start Here------------ -->
    <section class="job-listing-details-page">
        <div class="container-fluid">
            <div class="showing-row-parent-dv">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="right-side-job-listing-parent">
                            <!-- ----------------job listing without top match star card start here--------------------- -->
                            <div class="top-match-listing-wo-star-card-parent">
                                <div class="top-match-chat-btn-parent">
                                    <div class="post-name-and-company-title">
                                        <h3>Accountant Cum Office Assistant</h3>
                                        <p>Shreenathji Auto Industries</p>
                                    </div>
                                    <div class="chat-with-hr-apply-now">
                                        <a href="#" class="call-a"><img src="public/assets-new/images/job-listing/call.png"
                                                alt=""></a>
                                        <a href="#" class="chat-with-hr-a"><img src="public/assets-new/images/job-listing/chat.png"
                                                alt=""><span> Chat With HR</span></a>
                                        <a href="#" class="apply-now-a">Apply Now</a>
                                        <div class="people-interested">
                                            <div class="img-circle">
                                                <img src="public/assets-new/images/job-listing/intrested-people1.png" alt="">
                                                <img src="public/assets-new/images/job-listing/intrested-people2.png" alt="">
                                                <img src="public/assets-new/images/job-listing/intrested-peopl3.png" alt="">
                                            </div>
                                            <p>90 People Interested In This Job</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="salary-and-address">
                                    <div class="salary-left">
                                        <p class="rupee-p"><img src="public/assets-new/images/job-listing/salary-icon.png"
                                                alt=""><span><b>₹20,000 - ₹35,000</b></span> <small>/Month</small></p>
                                        <p class="address-p"><img src="public/assets-new/images/job-listing/location-icon.png"
                                                alt=""><span>Rajarajeshwari Nagar, Bangalore</span></p>
                                        <p class="exp-p"><img src="public/assets-new/images/job-listing/month-experience.png"
                                                alt=""><span>0-6 Months Experience In Delivery</span></p>
                                    </div>
                                </div>
                                <div class="new-full-time-radio">
                                    <div class="mb-3">
                                        <input type="radio" id="new-job" name="gender" value="Male">
                                        <label for="new-job">New</label>
                                        <input type="radio" id="top-match-full-time" name="gender" value="Female">
                                        <label for="top-match-full-time">Full Time</label>
                                        <input type="radio" id="90-vac" name="gender" value="Female">
                                        <label for="90-vac">90 Vacancies</label>
                                        <a href="#" class="km-varified-a"><img
                                                src="public/assets-new/images/job-listing/seal-check.png" alt="">KM Verified</a>
                                    </div>
                                </div>
                            </div>
                            <!-- -----------------job listing without top match star card end here-------------------- -->
                        </div>
                    </div>
                </div>
                <!-- --------------------job highlight left-right start here---------------------- -->
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-12">
                        <div class="left-side-job-highlight-dv">
                            <div class="job-highlight-card-dv">
                                <div class="job-h-heading">
                                    <h4>Job Highlights</h4>
                                </div>
                                <div class="job-highlight-listing">
                                    <p><img src="public/assets-new/images/job-listing/right-mark-blur.png" alt=""> E-Commerce</p>
                                    <p><img src="public/assets-new/images/job-listing/graduate-blur.png" alt=""> All Education
                                        Levels</p>
                                    <p><img src="public/assets-new/images/job-listing/gender-in-blur.png" alt=""> All Genders</p>
                                    <p><img src="public/assets-new/images/job-listing/clock-blur.png" alt=""> Day Shift</p>
                                    <p><img src="public/assets-new/images/job-listing/right-mark-blur.png" alt=""> E-Commerce</p>
                                    <p><img src="public/assets-new/images/job-listing/star-blur.png" alt=""> <b>Job Benefits:</b>
                                        Insurance</p>
                                </div>
                            </div>
                            <div class="skill-required-job-des-parent">
                                <div class="skill-required-h-heading">
                                    <h4>Job Highlights</h4>
                                </div>
                                <div class="skill-btn">
                                    <a href="#" class="skill-dark-btn-a"><img
                                            src="public/assets-new/images/job-listing/right-dark.png" alt=""> Skill 1</a>
                                    <a href="#" class="skill-dark-btn-a"><img
                                            src="public/assets-new/images/job-listing/right-dark.png" alt=""> Skill 2</a>
                                    <a href="#" class="skill-dark-btn-a"><img
                                            src="public/assets-new/images/job-listing/right-dark.png" alt=""> Skill 3</a>
                                </div>
                                <div class="skill-required-h-heading">
                                    <h4>Job Description</h4>
                                </div>
                                <div class="job-description-content-parent">
                                    <ul>
                                        <li>Deliver products to customers/destinations at given addresses.</li>
                                        <li>Collect payments.</li>
                                        <li>Ensure Timely delivery.</li>
                                    </ul>
                                    <h6><b>Other Details</b></h6>
                                    <ul>
                                        <li>It is a Full Time Delivery job for candidates with 0 - 6 months of
                                            experience of experience.</li>
                                    </ul>
                                    <h6 class="my-3"><b>More about this Delivery Boy job</b></h6>
                                    <div class="question-answer-dv-parent">
                                        <div class="question-answer-dv">
                                            <h6>1. What is the eligibility criteria to apply for this Delivery Boy job?
                                            </h6>
                                            <p>Ans: The candidate should be All Education levels and above with 0 - 6
                                                months of experience of experience</p>
                                        </div>
                                        <div class="question-answer-dv">
                                            <h6>2. How much salary can I expect for this job role?</h6>
                                            <p>Ans: You can expect a salary of ₹35000 - ₹40000 per month that depends on
                                                your interview. It's a Full Time job in Bangalore.</p>
                                        </div>
                                        <div class="question-answer-dv">
                                            <h6>3. Are there any charges applicable while applying or joining this
                                                Delivery Boy job?</h6>
                                            <p>Ans: No, there is no fee applicable for applying this Delivery Boy job
                                                and during the employment with the company, i.e., Nandini Logistics.</p>
                                        </div>
                                        <div class="question-answer-dv">
                                            <h6>4. Is it a work from home job?</h6>
                                            <p>Ans: No, it’s not a work from home job and can't be done online.</p>
                                        </div>
                                        <div class="question-answer-dv">
                                            <h6>5. How many openings are there for this Delivery Boy role?</h6>
                                            <p>Ans: There is an immediate opening of 99 Delivery Boy at Nandini
                                                Logistics.</p>
                                        </div>
                                        <div class="question-answer-dv">
                                            <h6>6. Who can apply for this job?</h6>
                                            <p>Ans: Both Male and Female candidates can apply for this Delivery job.</p>
                                        </div>
                                        <div class="question-answer-dv">
                                            <h6>7. What are the timings of this Delivery Boy job?</h6>
                                            <p>Ans: This Delivery Boy job has Day Shift.</p>
                                        </div>
                                        <div class="question-answer-dv">
                                            <p>Candidates Can Call HR For More Info.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-person-card-dv">
                                <div class="contact-h-heading">
                                    <h4>Contact Person</h4>
                                </div>
                                <div class="contact-person-name">
                                    <h4>Ranjitha</h4>
                                </div>
                            </div>
                            <div class="post-a-day-ago-parent">
                                <small>Posted 4 Days Ago</small>
                            </div>
                            <div class="have-friend-good-job-parent">
                                <div class="have-friend-good-job-child">
                                    <h4><img src="public/assets-new/images/job-listing/search-bag.png" alt="">Have A Friend Who’ll
                                        Be Good For This Job?</h4>
                                    <a href="#"><img src="public/assets-new/images/job-listing/whatsapp-icon.png" alt=""> Share
                                        With A Friend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="right-side-job-dream-job">
                            <div class="right-div-first-box">
                                <h4>Just <span>3 Step</span> To Get Your Dream Job</h4>
                                <div class="step-parent-dv">
                                    <div class="step-child-dv">
                                        <div class="step-1-dv">
                                            <div class="step-img">
                                                <img src="public/assets-new/images/job-listing/step1.png" alt="">
                                            </div>
                                            <div class="step-heading-para">
                                                <h6>Step1</h6>
                                                <p>Create Your Profile</p>
                                            </div>
                                        </div>
                                        <div class="step-2-dv">
                                            <div class="step-img">
                                                <img src="public/assets-new/images/job-listing/step2.png" alt="">
                                            </div>
                                            <div class="step-heading-para">
                                                <h6>Step2</h6>
                                                <p>Fix Your Interview</p>
                                            </div>
                                        </div>
                                        <div class="step-3-dv">
                                            <div class="step-img">
                                                <img src="public/assets-new/images/job-listing/step3.png" alt="">
                                            </div>
                                            <div class="step-heading-para">
                                                <h6>Step3</h6>
                                                <p>Get Hired</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-div-second-box-parent">
                                <div class="right-dv-heading">
                                    <h4>Just <span>Like You</span></h4>
                                </div>
                                <div class="right-dv-second-inner">
                                    <div class="img-name-digination-location-dv">
                                        <div class="name-img-left">
                                            <img src="public/assets-new/images/home-con/cir-img.png
                                            " alt="">
                                        </div>
                                        <div class="name-dig-location-right">
                                            <h6>Person Name</h6>
                                            <p>person Designation</p>
                                            <div class="location-pin">
                                                <a href="#"><img src="public/assets-new/images/home-con/mappin.png"
                                                        alt="">Location</a>
                                            </div>
                                            <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                                        </div>
                                    </div>
                                    <div class="chat-follow-btn">
                                        <div class="chat-btn">
                                            <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt=""> Chat</a>
                                        </div>
                                        <div class="follow-btn">
                                            <a href="#">Follow</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-dv-second-inner">
                                    <div class="img-name-digination-location-dv">
                                        <div class="name-img-left">
                                            <img src="public/assets-new/images/home-con/cir-img.png
                                            " alt="">
                                        </div>
                                        <div class="name-dig-location-right">
                                            <h6>Person Name</h6>
                                            <p>person Designation</p>
                                            <div class="location-pin">
                                                <a href="#"><img src="public/assets-new/images/home-con/mappin.png"
                                                        alt="">Location</a>
                                            </div>
                                            <a href="#" class="mutual-connect-a">10 Mutual Connects</a>
                                        </div>
                                    </div>
                                    <div class="chat-follow-btn">
                                        <div class="chat-btn">
                                            <a href="#"><img src="public/assets-new/images/home-con/chat-btn.png" alt=""> Chat</a>
                                        </div>
                                        <div class="follow-btn">
                                            <a href="#">Follow</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-dv-bottom-view-all-btn">
                                    <a href="#">View All</a>
                                </div>
                                <!-- <div class="radius-border-divider"></div> -->
                            </div>
                            <div class="right-div-third-box-ad">
                                <h3>Ad Banner</h3>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- --------------------job highlight left-right End here---------------------- -->
            </div>
            <div class="apply-to-similar-jobs">
                <div class="apply-to-heading">
                    <h3>Apply to Similar Jobs</h3>
                </div>
            <!-- ----------------top match star card start here--------------------- -->
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 my-2">
                    <div class="top-match-card-parent">
                        <div class="top-match-chat-btn-parent">
                            <div class="top-match-star-right">
                                <img src="public/assets-new/images/job-listing/top-match.png" alt="">
                            </div>
                        </div>
                        <div class="post-name-and-company-title">
                            <h4>Accountant Cum Office Assistant</h4>
                            <p>Shreenathji Auto Industries</p>
                        </div>
                        <div class="salary-and-address">
                            <div class="salary-left">
                                <p class="rupee-p"><img src="public/assets-new/images/job-listing/salary-icon.png" alt=""><span><b>₹20,000
                                            - ₹35,000</b></span> <small>/Month</small></p>
                                <p class="address-p"><img src="public/assets-new/images/job-listing/location-icon.png"
                                        alt=""><span>Rajarajeshwari Nagar, Bangalore</span></p>
                            </div>
                        </div>
                        <div class="new-full-time-radio">
                            <div class="mb-3">
                                <input type="radio" id="new-job1" name="gender" value="Male">
                                <label for="new-job1">New</label>
                                <input type="radio" id="top-match-full-time1" name="gender" value="Female">
                                <label for="top-match-full-time1">Full Time</label>
                                <input type="radio" id="90-vac1" name="gender" value="Female">
                                <label for="90-vac1">90 Vacancies</label>
                                <a href="#" class="km-varified-a"><img src="public/assets-new/images/job-listing/seal-check.png" alt="">KM
                                    Verified</a>
                            </div>
                        </div>
                        <div class="top-match-chat-btn-parent1">
                            <div class="chat-with-hr-apply-now">
                                <a href="#" class="call-a"><img src="public/assets-new/images/job-listing/call.png" alt=""></a>
                                <a href="#" class="chat-with-hr-a"><img src="public/assets-new/images/job-listing/chat.png" alt=""><span>
                                        Chat With HR</span></a>
                                <a href="job-listing-details-page-before-login" class="apply-now-a">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 my-2">
                    <div class="top-match-card-parent">
                        <div class="top-match-chat-btn-parent">
                            <div class="top-match-star-right">
                                <img src="public/assets-new/images/job-listing/top-match.png" alt="">
                            </div>
                        </div>
                        <div class="post-name-and-company-title">
                            <h4>Accountant Cum Office Assistant</h4>
                            <p>Shreenathji Auto Industries</p>
                        </div>
                        <div class="salary-and-address">
                            <div class="salary-left">
                                <p class="rupee-p"><img src="public/assets-new/images/job-listing/salary-icon.png" alt=""><span><b>₹20,000
                                            - ₹35,000</b></span> <small>/Month</small></p>
                                <p class="address-p"><img src="public/assets-new/images/job-listing/location-icon.png"
                                        alt=""><span>Rajarajeshwari Nagar, Bangalore</span></p>
                            </div>
                        </div>
                        <div class="new-full-time-radio">
                            <div class="mb-3">
                                <input type="radio" id="new-job1" name="gender" value="Male">
                                <label for="new-job1">New</label>
                                <input type="radio" id="top-match-full-time1" name="gender" value="Female">
                                <label for="top-match-full-time1">Full Time</label>
                                <input type="radio" id="90-vac1" name="gender" value="Female">
                                <label for="90-vac1">90 Vacancies</label>
                                <a href="#" class="km-varified-a"><img src="public/assets-new/images/job-listing/seal-check.png" alt="">KM
                                    Verified</a>
                            </div>
                        </div>
                        <div class="top-match-chat-btn-parent1">
                            <div class="chat-with-hr-apply-now">
                                <a href="#" class="call-a"><img src="public/assets-new/images/job-listing/call.png" alt=""></a>
                                <a href="#" class="chat-with-hr-a"><img src="public/assets-new/images/job-listing/chat.png" alt=""><span>
                                        Chat With HR</span></a>
                                <a href="job-listing-details-page-before-login" class="apply-now-a">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 my-2">
                    <div class="top-match-card-parent">
                        <div class="top-match-chat-btn-parent">
                            <div class="top-match-star-right">
                                <img src="public/assets-new/images/job-listing/top-match.png" alt="">
                            </div>
                        </div>
                        <div class="post-name-and-company-title">
                            <h4>Accountant Cum Office Assistant</h4>
                            <p>Shreenathji Auto Industries</p>
                        </div>
                        <div class="salary-and-address">
                            <div class="salary-left">
                                <p class="rupee-p"><img src="public/assets-new/images/job-listing/salary-icon.png" alt=""><span><b>₹20,000
                                            - ₹35,000</b></span> <small>/Month</small></p>
                                <p class="address-p"><img src="public/assets-new/images/job-listing/location-icon.png"
                                        alt=""><span>Rajarajeshwari Nagar, Bangalore</span></p>
                            </div>
                        </div>
                        <div class="new-full-time-radio">
                            <div class="mb-3">
                                <input type="radio" id="new-job1" name="gender" value="Male">
                                <label for="new-job1">New</label>
                                <input type="radio" id="top-match-full-time1" name="gender" value="Female">
                                <label for="top-match-full-time1">Full Time</label>
                                <input type="radio" id="90-vac1" name="gender" value="Female">
                                <label for="90-vac1">90 Vacancies</label>
                                <a href="#" class="km-varified-a"><img src="public/assets-new/images/job-listing/seal-check.png" alt="">KM
                                    Verified</a>
                            </div>
                        </div>
                        <div class="top-match-chat-btn-parent1">
                            <div class="chat-with-hr-apply-now">
                                <a href="#" class="call-a"><img src="public/assets-new/images/job-listing/call.png" alt=""></a>
                                <a href="#" class="chat-with-hr-a"><img src="public/assets-new/images/job-listing/chat.png" alt=""><span>
                                        Chat With HR</span></a>
                                <a href="job-listing-details-page-before-login" class="apply-now-a">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 my-2">
                    <div class="top-match-card-parent">
                        <div class="top-match-chat-btn-parent">
                            <div class="top-match-star-right">
                                <img src="public/assets-new/images/job-listing/top-match.png" alt="">
                            </div>
                        </div>
                        <div class="post-name-and-company-title">
                            <h4>Accountant Cum Office Assistant</h4>
                            <p>Shreenathji Auto Industries</p>
                        </div>
                        <div class="salary-and-address">
                            <div class="salary-left">
                                <p class="rupee-p"><img src="public/assets-new/images/job-listing/salary-icon.png" alt=""><span><b>₹20,000
                                            - ₹35,000</b></span> <small>/Month</small></p>
                                <p class="address-p"><img src="public/assets-new/images/job-listing/location-icon.png"
                                        alt=""><span>Rajarajeshwari Nagar, Bangalore</span></p>
                            </div>
                        </div>
                        <div class="new-full-time-radio">
                            <div class="mb-3">
                                <input type="radio" id="new-job1" name="gender" value="Male">
                                <label for="new-job1">New</label>
                                <input type="radio" id="top-match-full-time1" name="gender" value="Female">
                                <label for="top-match-full-time1">Full Time</label>
                                <input type="radio" id="90-vac1" name="gender" value="Female">
                                <label for="90-vac1">90 Vacancies</label>
                                <a href="#" class="km-varified-a"><img src="public/assets-new/images/job-listing/seal-check.png" alt="">KM
                                    Verified</a>
                            </div>
                        </div>
                        <div class="top-match-chat-btn-parent1">
                            <div class="chat-with-hr-apply-now">
                                <a href="#" class="call-a"><img src="public/assets-new/images/job-listing/call.png" alt=""></a>
                                <a href="#" class="chat-with-hr-a"><img src="public/assets-new/images/job-listing/chat.png" alt=""><span>
                                        Chat With HR</span></a>
                                <a href="job-listing-details-page-before-login" class="apply-now-a">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="view-all-jobs-btn">
                        <a href="#">View All Jobs</a>
                    </div>
                </div>
            </div>
            <!-- -----------------top match card star end here-------------------- -->
            </div>
        </div>
    </section>
    <!-- ----------- job-listing-details-page End Here------------ -->

    <!-- ----------- footer-find-jobs-section Start Here------------  -->
    <section class="footer-find-jobs-section">
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
                                <li><a href="#"><img src="public/assets-new/images/home-con/instagram.png"
                                            alt=""><span>Instagram</span></a></li>
                                <li><a href="#"><img src="public/assets-new/images/home-con/facebook.png"
                                            alt=""><span>Facebook</span></a></li>
                                <li><a href="#"><img src="public/assets-new/images/home-con/linkedin.png"
                                            alt=""><span>linkedIn</span></a></li>
                                <li><a href="#"><img src="public/assets-new/images/home-con/youtube.png"
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
                                <li><a href="#"><img src="public/assets-new/images/home-con/google-play.png" alt=""></a></li>
                                <li><a href="#"><img src="public/assets-new/images/home-con/app-store.png" alt=""></a></li>
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
    <script src="public/assets-new/js/custom.js"></script>
</body>

</html>