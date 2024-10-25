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
    <section class="home-page-five-after-login-navbar">
        <nav class="navbar navbar-expand-sm navbar-light bg-white">
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
                            <a class="nav-link active" href="#"><img src="{{ asset('public/assets-new/images/navbar/home.png')}}" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="connect-page"><img src="{{ asset('public/assets-new/images/navbar/user.png')}}" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('jobs') }}"><img src="{{ asset('public/assets-new/images/navbar/suitcase.png')}}" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chat-page"><img src="{{ asset('public/assets-new/images/navbar/chat.png')}}" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="connect-page-single-events"><img src="{{ asset('public/assets-new/images/navbar/bookmark.png')}}" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notification"><img src="{{ asset('public/assets-new/images/navbar/bell.png')}}" alt=""></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ps-0 " href="#" role="button"
                                data-bs-toggle="dropdown"><img src="{{ asset('public/assets-new/images/navbar/Profile.png')}}"
                                    class="border rounded-circle" alt=""> {{auth()->user()->name}}</a>
                            <!-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">German</a></li>
                                <li><a class="dropdown-item" href="#">Spanish</a></li>
                            </ul> -->
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="{{ url('logout') }}" >Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- -----------Navbar End Here------------ -->
    <!-- ----------- Home-page-after-login Start Here------------ -->
    <section class="home-page-after-login-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                    <div class="after-login-left-div-parent-dv">
                        <div class="after-login-left-first-div-inner">
                            <div class="profile-img">
                                <img src="{{ asset('public/assets-new/images/home-page/profile-img.png')}}" alt="">
                            </div>
                            <div class="name-card-sec">
                                <h6>{{auth()->user()->name}}</h6>
                                <p>Designation</p>
                                <p>Company Name</p>
                                <small>Last Updated 1m Ago</small>
                            </div>
                            <div class="view-profile-btn">
                                <a href="{{ url('user-profile') }}">View Profile</a>
                            </div>
                            <div class="profile-performance-box">
                                <h6 class="head">Profile Performance</h6>
                                <div class="search-appearance">
                                    <div class="user-img">
                                        <img src="{{ asset('public/assets-new/images/home-page/user.png')}}" alt="">
                                    </div>
                                    <div class="search-app-content">
                                        <h6>Search Appearance</h6>
                                        <h5>256</h5>
                                    </div>
                                </div>
                                <div class="search-appearance">
                                    <div class="user-img">
                                        <img src="{{ asset('public/assets-new/images/home-page/searh.png')}}" alt="">
                                    </div>
                                    <div class="search-app-content">
                                        <h6>Profile View</h6>
                                        <h5>300</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="after-login-left-second-div-inner">
                            <h4>Ad Banner</h4>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="after-login-center-div-parent-dv">
                        <div class="search-and-bottom-btns">
                            <input type="text" placeholder="Start a Post">
                            <div class="search-bottom-tabs">
                                <div class="image-text-tabs">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#demo-modal-1">
                                        <img src="{{ asset('public/assets-new/images/home-page/gallery.png')}}" alt=""><span>Media</span>
                                    </a>
                                </div>
                                <div class="image-text-tabs">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#job-modal-parent-cls">
                                        <img src="{{ asset('public/assets-new/images/home-page/suitcase.png')}}" alt=""><span>Jobs</span>
                                    </a>
                                </div>
                                <div class="image-text-tabs">
                                    <a href="#">
                                        <img src="{{ asset('public/assets-new/images/home-page/speaker.png')}}" alt=""><span>Event</span>
                                    </a>
                                </div>
                                <div class="image-text-tabs">
                                    <a href="#">
                                        <img src="{{ asset('public/assets-new/images/home-page/book.png')}}" alt=""><span>Learn</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="recommended-heading-parent">
                            <div class="heading-recommended">
                                <h3>Recommended <span>Jobs</span></h3>
                            </div>
                            <div class="view-all-jobs-btn">
                                <a href="job-listing-page-after-login">View All Jobs</a>
                            </div>
                        </div>
                        <!-- -----------slider parent start---------------- -->
                        <div class="account-cum-slider-parent">
                            <div class="account-cum-slider-item">
                                <div class="account-heading">
                                    <h5>Accountant Cum Office Assistant</h5>
                                </div>
                                <div class="account-para">
                                    <p>Shreenathji Auto Industries</p>
                                </div>
                                <div class="salary-per-month">
                                    <p><img src="{{ asset('public/assets-new/images/home-page/rupee.png')}}" alt=""><span><b>₹20,000 -
                                                ₹35,000</b><small>/Month</small></span></p>
                                </div>
                                <div class="salary-per-month">
                                    <p><img src="{{ asset('public/assets-new/images/home-page/location.png')}}" alt=""><span>Rajarajeshwari
                                            Nagar, Bangalore</span></p>
                                </div>
                            </div>
                            <div class="account-cum-slider-item">
                                <div class="account-heading">
                                    <h5>Accountant Cum Office Assistant</h5>
                                </div>
                                <div class="account-para">
                                    <p>Shreenathji Auto Industries</p>
                                </div>
                                <div class="salary-per-month">
                                    <p><img src="{{ asset('public/assets-new/images/home-page/rupee.png')}}" alt=""><span><b>₹20,000 -
                                                ₹35,000</b><small>/Month</small></span></p>
                                </div>
                                <div class="salary-per-month">
                                    <p><img src="{{ asset('public/assets-new/images/home-page/location.png')}}" alt=""><span>Rajarajeshwari
                                            Nagar, Bangalore</span></p>
                                </div>
                            </div>
                            <div class="account-cum-slider-item">
                                <div class="account-heading">
                                    <h5>Accountant Cum Office Assistant</h5>
                                </div>
                                <div class="account-para">
                                    <p>Shreenathji Auto Industries</p>
                                </div>
                                <div class="salary-per-month">
                                    <p><img src="{{ asset('public/assets-new/images/home-page/rupee.png')}}" alt=""><span><b>₹20,000 -
                                                ₹35,000</b><small>/Month</small></span></p>
                                </div>
                                <div class="salary-per-month">
                                    <p><img src="{{ asset('public/assets-new/images/home-page/location.png')}}" alt=""><span>Rajarajeshwari
                                            Nagar, Bangalore</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- -----------slider parent end---------------- -->
                        <!-- -----------name like comment share start---------------- -->
                        <div class="name-like-comment-share-box">
                            <div class="name-three-dot">
                                <div class="left-name-img">
                                    <img src="{{ asset('public/assets-new/images/home-page/user-img.png')}}" alt="">
                                    <div class="name-surname">
                                        <h6><a href="#">Naveen Pandey</a></h6>
                                        <p><a href="#">Lead Frontend Developer</a></p>
                                    </div>
                                </div>
                                <div class="right-three-dot">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/three-dot.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="post-image-dv">
                                <a href="#"> <img src="{{ asset('public/assets-new/images/home-page/user-images.png')}}" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="comment-repost-name-dv">
                                <div class="name-and-number-left">
                                    <p><span>Anuj Pandey</span> and <span>326 </span> others</p>
                                </div>
                                <div class="comment-repost-right">
                                    <p class="comment-p-tag"><span>44 </span> comments</p>
                                    <p class="repost-p-tag"><span>14 </span> reposts</p>
                                </div>
                            </div>
                            <div class="like-comment-reshare-dv">
                                <div class="like-icon">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/like.png')}}" alt=""><span>Like</span></a>
                                </div>
                                <div class="comment-icon">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/comment.png')}}"
                                            alt=""><span>Comment</span></a>
                                </div>
                                <div class="reshare-icon">
                                    <a href="#"> <img src="{{ asset('public/assets-new/images/home-page/reshare.png')}}"
                                            alt=""><span>Reshare</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- -----------name like comment share end---------------- -->
                        <!-- ----------- Connect just like you Start Here------------ -->
                        <div class="connect-just-like-you-sec-inner">
                            <div class="container-fluid">
                                <div class="connect-just-heading">
                                    <h3><span>Connect</span> Just Like You</h3>
                                    <div class="view-all-jobs-btn">
                                        <a href="#">View All Jobs</a>
                                    </div>
                                </div>
                                <div class="connect-just-like-you-slider-inner-page">
                                    @foreach($connect as $key => $value) 
                                    <div class="connect-just-slider-item">
                                        <div class="connect-card">
                                            <div class="connect-card-img">
                                                <img src="{{ asset('public/assets-new/images/home-con/connect-just.png')}}" alt=""
                                                    class="img-fluid">
                                                <div class="green-dot"></div>
                                            </div>
                                            <h4>{{$value->name}}</h4>
                                            <p class="person-desi">Person Designation</p>
                                            <div class="location-para-icon">
                                                <img src="{{ asset('public/assets-new/images/home-con/mappin.png')}}" alt="">
                                                <p>Location</p>
                                            </div>
                                            <p class="person-desi1">10 mutual connects</p>
                                            <a href="#" class="chat-btn"> <img src="{{ asset('public/assets-new/images/home-con/chat-btn.png')}}"
                                                    alt="" class="img-fluid">
                                                Chat</a>
                                            <button  class="follow-btn" id="setButton{{ $value->user_id }}" data-user-id="{{ auth()->user()->user_id }}" data-rec-id="{{ $value->user_id }}">Follow</button>
                                        </div>
                                    </div>
                                    @endforeach 
 
                                </div>
                            </div>
                        </div>
                        <!-- ----------- Connect just like you End Here------------ -->
                        <!-- -----------name like comment share start---------------- -->
                        <div class="name-like-comment-share-box">
                            <div class="name-three-dot">
                                <div class="left-name-img">
                                    <img src="{{ asset('public/assets-new/images/home-page/user-img.png')}}" alt="">
                                    <div class="name-surname">
                                        <h6><a href="#">Naveen Pandey</a></h6>
                                        <p><a href="#">Lead Frontend Developer</a></p>
                                    </div>
                                </div>
                                <div class="right-three-dot">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/three-dot.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="post-image-dv">
                                <a href="#"> <img src="{{ asset('public/assets-new/images/home-page/user-images.png')}}" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="comment-repost-name-dv">
                                <div class="name-and-number-left">
                                    <p><span>Anuj Pandey</span> and <span>326 </span> others</p>
                                </div>
                                <div class="comment-repost-right">
                                    <p class="comment-p-tag"><span>44 </span> comments</p>
                                    <p class="repost-p-tag"><span>14 </span> reposts</p>
                                </div>
                            </div>
                            <div class="like-comment-reshare-dv">
                                <div class="like-icon">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/like.png')}}" alt=""><span>Like</span></a>
                                </div>
                                <div class="comment-icon">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/comment.png')}}"
                                            alt=""><span>Comment</span></a>
                                </div>
                                <div class="reshare-icon">
                                    <a href="#"> <img src="{{ asset('public/assets-new/images/home-page/reshare.png')}}"
                                            alt=""><span>Reshare</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- -----------name like comment share end---------------- -->
                        <!-- -----------recharge your wallet inner page start---------------- -->
                        <div class="recharge-your-wallet-dv-inner-page">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-12 text-center">
                                    <div class="recharge-your-wallet-left">
                                        <h3>Graphic</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="recharge-your-wallet-right">
                                        <h3>recharge your <span>wallet</span> and get faster Job</h3>
                                        <p>Nothing casual about this job app</p>
                                        <div class="recharge-now-btn">
                                            <a href="#"><img src="{{ asset('public/assets-new/images/home-con/wallet.png')}}" alt=""> Recharge
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- -----------recharge your wallet inner page end---------------- -->
                        <!-- -----------name like comment share start---------------- -->
                        <div class="name-like-comment-share-box">
                            <div class="name-three-dot">
                                <div class="left-name-img">
                                    <img src="{{ asset('public/assets-new/images/home-page/user-img.png')}}" alt="">
                                    <div class="name-surname">
                                        <h6><a href="#">Naveen Pandey</a></h6>
                                        <p><a href="#">Lead Frontend Developer</a></p>
                                    </div>
                                </div>
                                <div class="right-three-dot">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/three-dot.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="post-image-dv">
                                <a href="#"> <img src="{{ asset('public/assets-new/images/home-page/user-images.png')}}" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="comment-repost-name-dv">
                                <div class="name-and-number-left">
                                    <p><span>Anuj Pandey</span> and <span>326 </span> others</p>
                                </div>
                                <div class="comment-repost-right">
                                    <p class="comment-p-tag"><span>44 </span> comments</p>
                                    <p class="repost-p-tag"><span>14 </span> reposts</p>
                                </div>
                            </div>
                            <div class="like-comment-reshare-dv">
                                <div class="like-icon">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/like.png')}}" alt=""><span>Like</span></a>
                                </div>
                                <div class="comment-icon">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/comment.png')}}"
                                            alt=""><span>Comment</span></a>
                                </div>
                                <div class="reshare-icon">
                                    <a href="#"> <img src="{{ asset('public/assets-new/images/home-page/reshare.png')}}"
                                            alt=""><span>Reshare</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- -----------name like comment share end---------------- -->
                        <!-- ----------- Featured companies actively hiring inner page Start Here---------- -->
                        <div class="featured-companies-actively-hiring-sec-inner-page">
                            <div class="container-fluid">
                                <div class="featured-companies-heading">
                                    <h3>Companies<span> Actively Hiring</span></h3>
                                    <div class="view-all-jobs-btn">
                                        <a href="#">View All Jobs</a>
                                    </div>
                                </div>
                                <div class="feature-companies-slider-parent">
                                    <div class="feature-companies-slider-dv-inner-page">
                                        <div class="feature-companies-slider-item">
                                            <div class="feature-com-card">
                                                <div class="feature-img">
                                                    <img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="com-name-grey-card">
                                                    <h5>Company Name</h5>
                                                    <p class="com-img-rating"><img
                                                            src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
                                                            class="img-fluid">
                                                        <span>4.2 | 4.4K+ reviews</span>
                                                    </p>
                                                </div>
                                                <p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien
                                                    ipsum proin quisque blandit.</p>
                                                <div class="com-view-job-dv">
                                                    <a href="#" class="com-view-jobs">View Jobs</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-companies-slider-item">
                                            <div class="feature-com-card">
                                                <div class="feature-img">
                                                    <img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="com-name-grey-card">
                                                    <h5>Company Name</h5>
                                                    <p class="com-img-rating"><img
                                                            src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
                                                            class="img-fluid">
                                                        <span>4.2 | 4.4K+ reviews</span>
                                                    </p>
                                                </div>
                                                <p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien
                                                    ipsum proin quisque blandit.</p>
                                                <div class="com-view-job-dv">
                                                    <a href="#" class="com-view-jobs">View Jobs</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-companies-slider-item">
                                            <div class="feature-com-card">
                                                <div class="feature-img">
                                                    <img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="com-name-grey-card">
                                                    <h5>Company Name</h5>
                                                    <p class="com-img-rating"><img
                                                            src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
                                                            class="img-fluid">
                                                        <span>4.2 | 4.4K+ reviews</span>
                                                    </p>
                                                </div>
                                                <p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien
                                                    ipsum proin quisque blandit.</p>
                                                <div class="com-view-job-dv">
                                                    <a href="#" class="com-view-jobs">View Jobs</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-companies-slider-item">
                                            <div class="feature-com-card">
                                                <div class="feature-img">
                                                    <img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="com-name-grey-card">
                                                    <h5>Company Name</h5>
                                                    <p class="com-img-rating"><img
                                                            src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
                                                            class="img-fluid">
                                                        <span>4.2 | 4.4K+ reviews</span>
                                                    </p>
                                                </div>
                                                <p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien
                                                    ipsum proin quisque blandit.</p>
                                                <div class="com-view-job-dv">
                                                    <a href="#" class="com-view-jobs">View Jobs</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-companies-slider-item">
                                            <div class="feature-com-card">
                                                <div class="feature-img">
                                                    <img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="com-name-grey-card">
                                                    <h5>Company Name</h5>
                                                    <p class="com-img-rating"><img
                                                            src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
                                                            class="img-fluid">
                                                        <span>4.2 | 4.4K+ reviews</span>
                                                    </p>
                                                </div>
                                                <p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien
                                                    ipsum proin quisque blandit.</p>
                                                <div class="com-view-job-dv">
                                                    <a href="#" class="com-view-jobs">View Jobs</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="feature-companies-slider-item">
                                            <div class="feature-com-card">
                                                <div class="feature-img">
                                                    <img src="{{ asset('public/assets-new/images/home-con/feature-com.png')}}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="com-name-grey-card">
                                                    <h5>Company Name</h5>
                                                    <p class="com-img-rating"><img
                                                            src="{{ asset('public/assets-new/images/home-con/star1.png')}}" alt=""
                                                            class="img-fluid">
                                                        <span>4.2 | 4.4K+ reviews</span>
                                                    </p>
                                                </div>
                                                <p class="after-com-para">Lorem ipsum dolor sit amet consectetur. sapien
                                                    ipsum proin quisque blandit.</p>
                                                <div class="com-view-job-dv">
                                                    <a href="#" class="com-view-jobs">View Jobs</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="feature-all-btn">
          <a href="#">View All Companies</a>
        </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- ----------- Featured companies actively hiring inner page End Here------------ -->
                        <!-- -----------name like comment share start---------------- -->
                        <div class="name-like-comment-share-box">
                            <div class="name-three-dot">
                                <div class="left-name-img">
                                    <img src="{{ asset('public/assets-new/images/home-page/user-img.png')}}" alt="">
                                    <div class="name-surname">
                                        <h6><a href="#">Naveen Pandey</a></h6>
                                        <p><a href="#">Lead Frontend Developer</a></p>
                                    </div>
                                </div>
                                <div class="right-three-dot">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/three-dot.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="post-image-dv">
                                <a href="#"> <img src="{{ asset('public/assets-new/images/home-page/user-images.png')}}" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="comment-repost-name-dv">
                                <div class="name-and-number-left">
                                    <p><span>Anuj Pandey</span> and <span>326 </span> others</p>
                                </div>
                                <div class="comment-repost-right">
                                    <p class="comment-p-tag"><span>44 </span> comments</p>
                                    <p class="repost-p-tag"><span>14 </span> reposts</p>
                                </div>
                            </div>
                            <div class="like-comment-reshare-dv">
                                <div class="like-icon">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/like.png')}}" alt=""><span>Like</span></a>
                                </div>
                                <div class="comment-icon">
                                    <a href="#"><img src="{{ asset('public/assets-new/images/home-page/comment.png')}}"
                                            alt=""><span>Comment</span></a>
                                </div>
                                <div class="reshare-icon">
                                    <a href="#"> <img src="{{ asset('public/assets-new/images/home-page/reshare.png')}}"
                                            alt=""><span>Reshare</span></a>
                                </div>
                            </div>
                        </div>
                        <!-- -----------name like comment share end---------------- -->
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                    <div class="after-login-right-div-parent-dv">
                        <div class="after-login-right-first-div-inner">
                            <h4>Ad Banner</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------- Home-page-after-login End Here------------ -->

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
                        <img src="{{ asset('public/assets-new/images/home-page/user-img.png')}}" alt="">
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
                        <img src="{{ asset('public/assets-new/images/home-page/user-images.png')}}" alt="" class="img-fluid">
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
    <script src="{{ asset('public/assets-new/js/multi-step-modal.js')}}"></script>
    <script src="{{ asset('public/assets-new/js/custom.js')}}"></script>
    <script>
        sendEvent = function (sel, step) {
            var sel_event = new CustomEvent('next.m.' + step, { detail: { step: step } });
            window.dispatchEvent(sel_event);
            $("#post-id").show();
        }
        $(document).ready(function () {
            $("#post-id").hide();
        });
    </script>
    <script>
        function countWords() {
 
            let text = document
                .getElementById("description").value;
 
            let numWords = 0;
 
            for (let i = 0; i < text.length; i++) {
                let currentCharacter = text[i];
 
                if (currentCharacter === " ") {
                    numWords += 1;
                }
            } 
            numWords += 1;
 
            document.getElementById("show")
                .innerHTML = numWords;
        }
    </script>

    <script>
    $(document).ready(function () {
        $('.follow-btn').click(function () {
            var userId = $(this).data('user-id');
            var recId = $(this).data('rec-id');
            console.log(userId,recId);
            var url = '/follow/' + recId;

            $.ajax({
                type: 'POST',
                url: url,
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function (data) {
                    console.log(data.status);
                    if(data.status == 0){
                         
                        $('#setButton'+recId).text('Unfollow');
                    }else if( data.status == 1){
                        $('#setButton'+recId).text('Follow');
                         
                    }
                },
                error: function (error) {
                    console.log('Error:', error);
                }
            });
        });
    });
</script>
</body>

</html>