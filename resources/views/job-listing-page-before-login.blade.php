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
    <!-- ----------- showing-jobs-card-sec Start Here------------ -->
    <section class="showing-jobs-card-sec">
        <div class="container-fluid">
            <div class="showing-row-parent-dv">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="left-side-menu-card-parent">
                            <div class="filter-heading">
                                <h6>Filters <span>(1)</span></h6>
                            </div>
                            <div class="job-type-drop">
                                <div class="accordion" id="job-type-acco">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Job-type-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-job-type" aria-expanded="true"
                                                aria-controls="collapse-job-type">
                                                Job Type
                                            </button>
                                        </h2>
                                        <div id="collapse-job-type" class="accordion-collapse collapse show"
                                            aria-labelledby="Job-type-header" data-bs-parent="#job-type-acco">
                                            <div class="accordion-body">
                                                <!-- <p class="form-label heading-tag">Gender</p> -->
                                                <input type="radio" id="full-time" name="job-type" value="">
                                                <label for="full-time">Full Time</label>
                                                <input type="radio" id="work-from-home" name="job-type" value="">
                                                <label for="work-from-home">Work From Home</label>
                                                <input type="radio" id="part-time" name="job-type" value="">
                                                <label for="part-time">Part Time</label>
                                                <input type="radio" id="freshers" name="job-type" value="">
                                                <label for="freshers">Freshers</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="job-role-drop">
                                <div class="accordion" id="job-role-acco">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Job-role-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-job-role"
                                                aria-expanded="true" aria-controls="collapse-job-role">
                                                Job Role
                                            </button>
                                        </h2>
                                        <div id="collapse-job-role" class="accordion-collapse collapse"
                                            aria-labelledby="Job-role-header" data-bs-parent="#job-role-acco">
                                            <div class="accordion-body">
                                                <p>
                                                    <input type="checkbox" id="delivery-input" name="job-role-type"
                                                        value="">
                                                    <label for="delivery-input">Delivery</label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="driver-input" name="job-role-type"
                                                        value="">
                                                    <label for="driver-input">Driver</label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="warehouse-logistics" name="job-role-type"
                                                        value="">
                                                    <label for="warehouse-logistics">Warehouse/Logistics</label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="manufacturing-input" name="job-role-type"
                                                        value="">
                                                    <label for="manufacturing-input">Manufacturing</label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="housekeeping-peon" name="job-role-type"
                                                        value="">
                                                    <label for="housekeeping-peon">Housekeeping/Peon</label>
                                                </p>
                                                <p>
                                                    <input type="checkbox" id="security-guard-input"
                                                        name="job-role-type" value="">
                                                    <label for="security-guard-input">Security Guard</label>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="monthly-salary-drop">
                                <div class="accordion" id="monthly-salary-drop">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="monthly-salary-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-monthly-salary"
                                                aria-expanded="true" aria-controls="collapse-monthly-salary">
                                                Monthly Salary
                                            </button>
                                        </h2>
                                        <div id="collapse-monthly-salary" class="accordion-collapse collapse"
                                            aria-labelledby="monthly-salary-header"
                                            data-bs-parent="#monthly-salary-drop">
                                            <div class="accordion-body">
                                                <p>
                                                    <input type="radio" id="more-than-5000" name="monthly-salary-radio"
                                                        value="">
                                                    <label for="more-than-5000">More Than &#8377; 5000 </label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="more-than-10000" name="monthly-salary-radio"
                                                        value="">
                                                    <label for="more-than-10000">More Than &#8377; 10000</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="more-than-20000" name="monthly-salary-radio"
                                                        value="">
                                                    <label for="more-than-20000">More Than &#8377; 20000</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="more-than-30000" name="monthly-salary-radio"
                                                        value="">
                                                    <label for="more-than-30000">More Than &#8377; 30000</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="more-than-40000" name="monthly-salary-radio"
                                                        value="">
                                                    <label for="more-than-40000">More Than &#8377; 40000</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="more-than-50000" name="monthly-salary-radio"
                                                        value="">
                                                    <label for="more-than-50000">More Than &#8377; 50000</label>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="experience-drop">
                                <div class="accordion" id="experience-drop-acco">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="experience-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-experience"
                                                aria-expanded="true" aria-controls="collapse-experience">
                                                Experience
                                            </button>
                                        </h2>
                                        <div id="collapse-experience" class="accordion-collapse collapse"
                                            aria-labelledby="experience-header" data-bs-parent="#experience-drop-acco">
                                            <div class="accordion-body">
                                                <p>
                                                    <input type="radio" id="freshers-id" name="experience-drop-name"
                                                        value="">
                                                    <label for="freshers-id"> Freshers </label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="less-than-1-year"
                                                        name="experience-drop-name" value="">
                                                    <label for="less-than-1-year">Less Than 1 Year</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="less-than-2-year"
                                                        name="experience-drop-name" value="">
                                                    <label for="less-than-2-year">Less Than 2 Year</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="less-than-3-year"
                                                        name="experience-drop-name" value="">
                                                    <label for="less-than-3-year">Less Than 3 Year</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="less-than-4-year"
                                                        name="experience-drop-name" value="">
                                                    <label for="less-than-4-year">Less Than 4 Year</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="less-than-5-year"
                                                        name="experience-drop-name" value="">
                                                    <label for="less-than-5-year">Less Than 5 Year</label>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gender-drop-dv">
                                <div class="accordion" id="gender-drop-acco">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="header-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-gender-dv"
                                                aria-expanded="true" aria-controls="collapse-gender-dv">
                                                Gender
                                            </button>
                                        </h2>
                                        <div id="collapse-gender-dv" class="accordion-collapse collapse"
                                            aria-labelledby="header-header" data-bs-parent="#gender-drop-acco">
                                            <div class="accordion-body">
                                                <p>
                                                    <input type="radio" id="jobs-for-men" name="gender-name" value="">
                                                    <label for="jobs-for-men"> Jobs For Men </label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="jobs-for-women" name="gender-name" value="">
                                                    <label for="jobs-for-women">Jobs For Women</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qualification-drop-dv">
                                <div class="accordion" id="qualification-drop-acco">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="qualification-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-qualification"
                                                aria-expanded="true" aria-controls="collapse-qualification">
                                                Qualification
                                            </button>
                                        </h2>
                                        <div id="collapse-qualification" class="accordion-collapse collapse"
                                            aria-labelledby="qualification-header"
                                            data-bs-parent="#qualification-drop-acco">
                                            <div class="accordion-body">
                                                <p>
                                                    <input type="radio" id="all-education-levels"
                                                        name="qualification-name" value="">
                                                    <label for="all-education-levels"> All Education Levels </label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="10th-pass-and-above"
                                                        name="qualification-name" value="">
                                                    <label for="10th-pass-and-above">10th Pass And Above</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="12th-pass-and-above"
                                                        name="qualification-name" value="">
                                                    <label for="12th-pass-and-above">12th Pass And Above</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="diploma-and-above" name="qualification-name"
                                                        value="">
                                                    <label for="diploma-and-above">Diploma And Above</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="graduate-and-above"
                                                        name="qualification-name" value="">
                                                    <label for="graduate-and-above">Graduate And Above</label>
                                                </p>
                                                <p>
                                                    <input type="radio" id="post-graduate-and-above"
                                                        name="qualification-name" value="">
                                                    <label for="post-graduate-and-above">Post Graduate And Above</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear-all-button">
                                <a href="#" class="clear-btn">Clear All</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="right-side-job-listing-parent">
                            <div class="top-showing-number-heading">
                                <h3>Showing <span> 2590 Jobs</span></h3>
                            </div>
                            <!-- ----------------job match for you strip  start here--------------------- -->
                            <div class="top-match-job-for-you-parent">
                                <div class="top-match-job-for-you-child">
                                    <div class="star-img-dv">
                                        <img src="public/assets-new/images/navbar/left-star-yellow.png" alt="">
                                    </div>
                                    <div class="para-dv">
                                        <p class="top-match-p-tag">Top Match Jobs For You</p>
                                        <div class="near-you-safety-line">
                                            <p><img src="public/assets-new/images/navbar/mark-right.png" alt="">Near You</p>
                                            <p><img src="public/assets-new/images/navbar/mark-right.png" alt="">Good Salary</p>
                                            <p><img src="public/assets-new/images/navbar/mark-right.png" alt="">Matching Experience
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ----------------job match for you strip end here--------------------- -->
                            <!-- ----------------top match star card start here--------------------- -->
                            <div class="top-match-card-parent">
                                <div class="top-match-chat-btn-parent">
                                    <div class="top-match-star-right">
                                        <img src="public/assets-new/images/job-listing/top-match.png" alt="">
                                    </div>
                                    <div class="chat-with-hr-apply-now">
                                        <a href="#" class="call-a"><img src="public/assets-new/images/job-listing/call.png"
                                                alt=""></a>
                                        <a href="#" class="chat-with-hr-a"><img src="public/assets-new/images/job-listing/chat.png"
                                                alt=""><span> Chat With HR</span></a>
                                        <a href="job-listing-details-page-before-login" class="apply-now-a">Apply Now</a>
                                    </div>
                                </div>
                                <div class="post-name-and-company-title">
                                    <h4><a href="job-listing-details-page-before-login">Accountant Cum Office Assistant</a></h4>
                                    <p>Shreenathji Auto Industries</p>
                                </div>
                                <div class="salary-and-address">
                                    <div class="salary-left">
                                        <p class="rupee-p"><img src="public/assets-new/images/job-listing/salary-icon.png"
                                                alt=""><span><b>₹20,000 - ₹35,000</b></span> <small>/Month</small></p>
                                        <p class="address-p"><img src="public/assets-new/images/job-listing/location-icon.png"
                                                alt=""><span>Rajarajeshwari Nagar, Bangalore</span></p>
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
                            <!-- -----------------top match card star end here-------------------- -->
                            <!-- ----------------top match star card start here--------------------- -->
                            <div class="top-match-card-parent">
                                <div class="top-match-chat-btn-parent">
                                    <div class="top-match-star-right">
                                        <img src="public/assets-new/images/job-listing/top-match.png" alt="">
                                    </div>
                                    <div class="chat-with-hr-apply-now">
                                        <a href="#" class="call-a"><img src="public/assets-new/images/job-listing/call.png"
                                                alt=""></a>
                                        <a href="#" class="chat-with-hr-a"><img src="public/assets-new/images/job-listing/chat.png"
                                                alt=""><span> Chat With HR</span></a>
                                        <a href="job-listing-details-page-before-login" class="apply-now-a">Apply Now</a>
                                    </div>
                                </div>
                                <div class="post-name-and-company-title">
                                    <h4><a href="job-listing-details-page-before-login">Accountant Cum Office Assistant</a></h4>
                                    <p>Shreenathji Auto Industries</p>
                                </div>
                                <div class="salary-and-address">
                                    <div class="salary-left">
                                        <p class="rupee-p"><img src="public/assets-new/images/job-listing/salary-icon.png"
                                                alt=""><span><b>₹20,000 - ₹35,000</b></span> <small>/Month</small></p>
                                        <p class="address-p"><img src="public/assets-new/images/job-listing/location-icon.png"
                                                alt=""><span>Rajarajeshwari Nagar, Bangalore</span></p>
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
                            <!-- -----------------top match card star end here-------------------- -->
                            <!-- -----------------Waiting to get a job handshake start here------------------ -->
                            <div class="Waiting-to-get-job-sec-dv">
                                <div class="waiting-parent-card">
                                    <div class="left-side-waiting-text">
                                        <h5>Waiting To Get A Job?</h5>
                                        <p>Get Faster Hr Response By Applying To More Jobs Now</p>
                                    </div>
                                    <div class="hand-shake-icon">
                                        <img src="public/assets-new/images/job-listing/hand-shake.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- -----------------Waiting to get a job handshake end here-------------------- -->
                            <!-- ----------------job listing without top match star card start here--------------------- -->
                            <div class="top-match-listing-wo-star-card-parent">
                                <div class="top-match-chat-btn-parent">
                                    <div class="post-name-and-company-title">
                                        <h4><a href="job-listing-details-page-before-login">Accountant Cum Office Assistant</a></h4>
                                        <p>Shreenathji Auto Industries</p>
                                    </div>
                                    <div class="chat-with-hr-apply-now">
                                        <a href="#" class="call-a"><img src="public/assets-new/images/job-listing/call.png"
                                                alt=""></a>
                                        <a href="#" class="chat-with-hr-a"><img src="public/assets-new/images/job-listing/chat.png"
                                                alt=""><span> Chat With HR</span></a>
                                        <a href="job-listing-details-page-before-login" class="apply-now-a">Apply Now</a>
                                    </div>
                                </div>

                                <div class="salary-and-address">
                                    <div class="salary-left">
                                        <p class="rupee-p"><img src="public/assets-new/images/job-listing/salary-icon.png"
                                                alt=""><span><b>₹20,000 - ₹35,000</b></span> <small>/Month</small></p>
                                        <p class="address-p"><img src="public/assets-new/images/job-listing/location-icon.png"
                                                alt=""><span>Rajarajeshwari Nagar, Bangalore</span></p>
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
                            <!-- ----------------job listing without top match star card start here--------------------- -->
                            <div class="top-match-listing-wo-star-card-parent">
                                <div class="top-match-chat-btn-parent">
                                    <div class="post-name-and-company-title">
                                        <h4><a href="job-listing-details-page-before-login">Accountant Cum Office Assistant</a></h4>
                                        <p>Shreenathji Auto Industries</p>
                                    </div>
                                    <div class="chat-with-hr-apply-now">
                                        <a href="#" class="call-a"><img src="public/assets-new/images/job-listing/call.png"
                                                alt=""></a>
                                        <a href="#" class="chat-with-hr-a"><img src="public/assets-new/images/job-listing/chat.png"
                                                alt=""><span> Chat With HR</span></a>
                                        <a href="job-listing-details-page-before-login" class="apply-now-a">Apply Now</a>
                                    </div>
                                </div>

                                <div class="salary-and-address">
                                    <div class="salary-left">
                                        <p class="rupee-p"><img src="public/assets-new/images/job-listing/salary-icon.png"
                                                alt=""><span><b>₹20,000 - ₹35,000</b></span> <small>/Month</small></p>
                                        <p class="address-p"><img src="public/assets-new/images/job-listing/location-icon.png"
                                                alt=""><span>Rajarajeshwari Nagar, Bangalore</span></p>
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
                            <!-- ----------- Pagination section Start Here------------ -->
                            <div class="pagination-section">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fa fa-chevron-left"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">01</a></li>
                                        <li><a href="#">02</a></li>
                                        <li><a href="#">03</a></li>
                                        <li><a href="#">04</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="fa fa-chevron-right"
                                                        aria-hidden="true"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- ----------- Pagination section End Here------------ -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------- showing-jobs-card-sec End Here------------ -->

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