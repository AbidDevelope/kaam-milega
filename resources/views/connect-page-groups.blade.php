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
    <section class="home-page-five-after-login-navbar">
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
                            <a class="nav-link" href="#"><img src="public/assets-new/images/navbar/home.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><img src="public/assets-new/images/navbar/user.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="public/assets-new/images/navbar/suitcase.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chat-page"><img src="public/assets-new/images/navbar/chat.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="connect-page-single-events"><img src="public/assets-new/images/navbar/bookmark.png" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notification"><img src="public/assets-new/images/navbar/bell.png" alt=""></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ps-0 " href="#" role="button"
                                data-bs-toggle="dropdown"><img src="public/assets-new/images/navbar/Profile.png"
                                    class="border rounded-circle" alt=""> Naveen</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">German</a></li>
                                <li><a class="dropdown-item" href="#">Spanish</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- -----------Navbar End Here------------ -->
    <!-- --------------connect-page-groups-parent-sec start------------------ -->
    <section class="connect-page-groups-parent-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="connect-page-connection-9parent">
                        <div class="connect-page-connection-inner">
                            <div class="a-tag-become-expert">
                                <a href="#">Create group</a>
                            </div>
                            <div class="connection-heading">
                                <h4><a href="connect-page"><img src="public/assets-new/images/connect-page/back-icon.png"
                                            alt=""></a> Groups</h4>
                            </div>
                            <!-- <div class="short-by-search">
                                <div class="btn-group">
                                    <a class="dropdown-toggle" type="button" id="defaultDropdown"
                                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                        Sort by: <b> Recently added</b>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                                    </ul>
                                </div>
                                <div class="search-bar-right">
                                    <div class="menu-search">
                                        <input type="text" placeholder="Search">
                                        <div class="menu-search-button">
                                            <button class="menu-search-btn-tag" type="button" value="">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div> -->


                            <!-- ================================================================== -->
                            <ul class="nav nav-tabs your-groups-nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="your-groups" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Your Groups</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="requested" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Requested</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="your-groups">
                                    <!-- --------------card listing start---------- -->
                                    <div class="person-name-designation-parent">
                                        <div class="person-designation-left">
                                            <img src="public/assets-new/images/connect-page/group-list.png" alt="">
                                            <div class="right-heading-name-design">
                                                <h5>Group Name</h5>
                                                <p>42,123 members</p>
                                            </div>
                                        </div>
                                        <div class="chat-del-icon-right">
                                            <div class="del-icon">
                                                <a href="#" class="d-flex align-items-center"><img
                                                        src="public/assets-new/images/connect-page/del-icon.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- --------------card listing end---------- -->
                                    <!-- --------------card listing start---------- -->
                                    <div class="person-name-designation-parent">
                                        <div class="person-designation-left">
                                            <img src="public/assets-new/images/connect-page/group-list.png" alt="">
                                            <div class="right-heading-name-design">
                                                <h5>Group Name</h5>
                                                <p>42,123 members</p>
                                            </div>
                                        </div>
                                        <div class="chat-del-icon-right">
                                            <div class="del-icon">
                                                <a href="#" class="d-flex align-items-center"><img
                                                        src="public/assets-new/images/connect-page/del-icon.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- --------------card listing end---------- -->
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="requested">
                                <!-- --------------card listing start---------- -->
                                <div class="person-name-designation-parent">
                                    <div class="person-designation-left">
                                        <img src="public/assets-new/images/connect-page/group-list.png" alt="">
                                        <div class="right-heading-name-design">
                                            <h5>Group Name</h5>
                                            <p>42,123 members</p>
                                        </div>
                                    </div>
                                    <div class="chat-del-icon-right">
                                        <div class="del-icon">
                                            <a href="#" class="d-flex align-items-center"><img
                                                    src="public/assets-new/images/connect-page/del-icon.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- --------------card listing end---------- -->
                                <!-- --------------card listing start---------- -->
                                <div class="person-name-designation-parent">
                                    <div class="person-designation-left">
                                        <img src="public/assets-new/images/connect-page/group-list.png" alt="">
                                        <div class="right-heading-name-design">
                                            <h5>Group Name</h5>
                                            <p>42,123 members</p>
                                        </div>
                                    </div>
                                    <div class="chat-del-icon-right">
                                        <div class="del-icon">
                                            <a href="#" class="d-flex align-items-center"><img
                                                    src="public/assets-new/images/connect-page/del-icon.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- --------------card listing end---------- -->    
                                </div>
                            </div>
                            <!-- ================================================================== -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12 ">
                    <div class="connect-col-3-sticky-right">
                        <div class="manage-my-network-left-parent my-2">
                            <div class="manage-my-network-child text-center">
                                <h5>Ad Banner</h5>
                            </div>
                        </div>
                        <div class="right-div-second-box-parent">
                            <div class="right-dv-heading">
                                <h4>Similar Groups</h4>
                            </div>
                            <div class="right-dv-second-inner">
                                <div class="img-name-digination-location-dv">
                                    <div class="name-img-left">
                                        <img src="public/assets-new/images/connect-page/group-list.png " alt="">
                                    </div>
                                    <div class="name-dig-location-right">
                                        <h6>Group Name</h6>
                                        <p>42,123 members</p>
                                    </div>
                                </div>
                                <div class="chat-follow-btn">
                                    <div class="follow-btn">
                                        <a href="#">Join Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-dv-bottom-view-all-btn">
                                <a href="#">View All</a>
                            </div>
                            <!-- <div class="radius-border-divider"></div> -->
                        </div>
                        <!-- <div class="connection-page-people-like-you-right-dv">
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
                                 <div class="radius-border-divider"></div> 
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- --------------connect-page-groups-parent-sec end------------------ -->
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
    <!-- ---------------------- media modal start here ------------------- -->
    <div class="job-modal-parent-cls modal fade" id="job-modal-parent-cls" tabindex="-1"
        aria-labelledby="job-medal-Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="job-medal-Label">Jobs</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="job-modal-body-dv">
                        <p class="indicates-required-p-tag">* Indicates Required</p>
                        <form action="" class="job-type-list-dv">
                            <div class="mb-3 mt-3">
                                <label for="job-type">Job Type*</label>
                                <select name="" id="job-type" class="form-control please-select-job-type">
                                    <option value="">Please Select Job Type</option>
                                    <option value="">Please Select Job Type</option>
                                    <option value="">Please Select Job Type</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="job-name">Job Name*</label>
                                <input type="text" class="form-control" id="job-name" placeholder="Job Name" name="">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="location">Location*</label>
                                <select name="" id="location" class="form-control please-select-job-type">
                                    <option value="">Please Select</option>
                                    <option value="">Please Select</option>
                                    <option value="">Please Select</option>
                                </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="job-category">Job Category*</label>
                                <select name="" id="job-category" class="form-control please-select-job-type">
                                    <option value="">Please Select</option>
                                    <option value="">Please Select</option>
                                    <option value="">Please Select</option>
                                </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="description">Description</label>
                                <textarea onkeyup="countWords()" name="" id="description" cols="10" rows="6"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-check zero-five">
                                <label class="form-check-label"><span id="show">0</span>/500</label>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn footer-btn" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" class="btn footer-btn" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <form class="modal multi-step media-modal-parent-cls" id="demo-modal-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title step-1" data-step="1">Editor</h4>
                    <!-- <h4 class="modal-title step-2" data-step="2">Step 2</h4> -->
                    <div class="step2-heading-cus modal-title step-2" data-step="2">
                        <img src="public/assets-new/images/home-page/user-img.png" alt="">
                        <div class="person-name-designation">
                            <h6>Person Name</h6>
                            <p>Person Designation</p>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body step step-1">
                    <div class="step-1-inner-content">
                        <h6>Select files to begin</h6>
                        <p>Share images or a single video in your post.</p>
                        <label for="upload-from-computer">Upload From Computer</label>
                        <input type="file" id="upload-from-computer" hidden>
                    </div>
                </div>
                <div class="modal-body step step-2">
                    <div class="step-2-inner-content">
                        <input type="text" placeholder="Start Typing......">
                        <img src="public/assets-new/images/home-page/user-images.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn footer-btn" id="post-id" data-bs-dismiss="modal">Post</button>
                    <button type="button" class="btn footer-btn step step-1" data-step="1"
                        onclick="sendEvent('#demo-modal-1', 2)">Next</button>
                </div>
            </div>
        </div>
    </form>
    <!-- ---------------------- media modal end here ------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
    <script src="public/assets-new/js/multi-step-modal.js"></script>
    <script src="public/assets-new/js/custom.js"></script>
</body>

</html>