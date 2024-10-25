<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kaam Milega</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="public/assets-new/images/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/public/assets-new/docs.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
    <link rel="stylesheet" href="public/assets-new/css/style.css">
</head>

<body>
    <!-- -----------Navbar Second Start Here------------ -->
    <section class="home-page-recruiter-navbar">
        <nav class="navbar navbar-expand-sm bg-white navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="public/assets-new/images/logo.png" alt="">
                </a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <!-- <div class="collapse navbar-collapse" id="collapsibleNavbar">
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
                            <a class="nav-link" href="#"><img src="public/assets-new/images/menu-images/devicemobile.png"
                                    class="pe-1" />Download App</a>
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
                            <a class="nav-link hire-local-staff" href="rec-home">looking for a job? <img
                                    src="public/assets-new/images/menu-images/arrowsquareout.png" class="ps-1" /></a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </nav>
    </section>
    <!-- -----------Navbar Second End Here------------ -->
    <!-- -----------Recruiter Basic Profile Start Here------------ -->
        <section class="recruiter-basic-profile-sec">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="now-create-basic-profile-parent">
                            <div class="now-create-basic-profile-child">
                                <p>Your job details are saved........</p>
                                <h4>Now create your basic profile</h4>
                                <form action="" class="consul-form-tag">
                                    <div class="mb-3 mt-3">
                                      <label for="full-name" class="form-label">Full name</label>
                                      <input type="text" class="form-control full-name-input-tag w-50" id="full_name" placeholder="Your First And Last Name" name="full_name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Are A Consultant?*</label>
                                        <div class="mb-3 consultant-radio-dv">
                                            <input type="radio" class="consultant" id="yes-consultant" name="consultant" value="yes">
                                            <label for="yes-consultant">Yes</label>
                                            <input type="radio" class="consultant" id="no-consultant" name="consultant" value="no">
                                            <label for="no-consultant">No</label>
                                        </div>
                                    </div>
                                    <hr class="mt-5">
                                   <div class="text-end">
                                    <button type="button" class="btn next-button">Next</button>
                                    <a href="recruiter-verify-official-email">Next Dummy</a>
                                   </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- -----------Recruiter Basic Profile End Here------------ -->
    <!-- -----------Recruiter copyright footer start Here------------ -->
    <section class="recruiter-copyright-footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 text-start">
                   <div class="left-dv-need-help">
                    <p>Need Help? Reach Us At | <a href="tel:+91-000-000-0000">+91-000-000-0000</a></p>
                   </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-end">
                    <div class="right-dv-copyright">
                        <p>All Rights Reserved © 2023 Kaam Milega</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -----------Recruiter copyright footer End Here------------ -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
    <script src="{{ asset('public/assets-new/js/custom.js')}}"></script>

    <script>
        $(document).ready(function(){
            $('.next-button').click(function(){
            var full_name = $('#full_name').val();
            var consultant = $('.consultant').val();
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                type:'POST',
                url: "{{ route('recruiter-basic-profile') }}",
                data: {'full_name': full_name,
                       'consultant': consultant,
                },
                headers: 
                {
                 'X-CSRF-TOKEN': csrfToken
                },
                success: function(response)
                {
                    if(response.success)
                    {
                        window.location.href = "recruiter-verify-official-email";
                    }
                }
            });
        });
        });
    </script>
</body>

</html>