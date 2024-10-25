<!DOCTYPE html>
<html lang="en">
<head>
        <title>Kaam Milega</title>
        <meta name="csrf-token" content="{{ csrf_token() }}"> 

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('public/assets-new/images/favicon.ico')}}" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <link rel="stylesheet" href="{{ asset('public/assets-new/css/style.css?111') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
    </head>
    <style>
    .otp-footer-a .resendOtp {
        cursor: pointer; 
        color: #C0B4BE;
    }
</style>
<body>
    <!-- -----------Navbar Second Start Here------------ -->
    <section class="home-page-recruiter-navbar">
        <nav class="navbar navbar-expand-sm bg-white navbar-light">
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
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="login"><img src="public/assets-new/images/menu-images/signin.png" class="pe-1" />Login</a>
                        </li> -->
                                    <!-- <li class="nav-item">
                        <a class="nav-link hire-local-staff" href="#">Hire Local Staff <img
                            src="public/assets-new/images/menu-images/arrowsquareout.png" class="ps-1" /></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- -----------Navbar Second End Here------------ -->

     <!-- -----------Login Page Start Here------------ -->
     <style type="text/css">
        .show_otp{
        display: none;
        }
        </style>
        <section class="recruiter-login-screen-section">
        <div class="container-fluid">
            <div class="login-form">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="left-side-dv">
                            <div class="left-heading-dv">
                                <h3><span>Hire </span>  local staff now!
                                </h3>
                                <p><a href="#">Get started from here 👉</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="right-side-dv">
                            <div class="form-parent-dv">
                                <form action="" data-parsley-validate="" class="demo-form">
                                   <fieldset class="form-section current">
                                        <h5>Enter Your Number To Continue</h5>
                                        <div class="mb-3 fieldset-child">
                                            <label for="mobile-num" class="form-label mobile-num-cls">Mobile
                                                Number</label>
                                            <input type="text" id="mobile-num" name="phone" class="form-control input-tag mb-2"
                                                placeholder="Enter The Mobile Number To Get Otp" required
                                                data-parsley-type="number" data-parsley-length="[10, 10]">
                                        </div>
                                        <div class=" " id="mobile-error"></div>
                                    </fieldset>
                                    <fieldset class="form-section">
                                        <div class="otp-headings">
                                            <div class="show_otp text-success"></div>
                                            <h5>Please Enter OTP</h5>
                                          
                                            <p>We Have Sent An Otp On <span>0945895894</span></p>
                                          
                                            
                                        </div>
                                        <div class="otp-input-dv-parent">
                                            <div id="inputs">
                                                <input id="input1" type="text" maxlength="1" placeholder="0" data-parsley-group="block-1">
                                                <input id="input2" type="text" maxlength="1" placeholder="0" data-parsley-group="block-1">
                                                <input id="input3" type="text" maxlength="1" placeholder="0" data-parsley-group="block-1">
                                                <input id="input4" type="text" maxlength="1" placeholder="0" data-parsley-group="block-1">
                                            </div>
                                            <div id="otp_error text-danger"></div>
                                            <p class="check-otp-msg">Please check your messages for an OTP</p>
                                        </div>
                            
                                        <div class="otp-footer-a">
                                        
                                                <div class="resendOtp" id="resendOtpButton" onclick="resendOtp()">Resend OTP</div>
                                            
                                        </div>
                                        
                                    </fieldset>
                                    <div class="form-navigation">
                                        <!-- <button type="button" class="previous pull-left login-back-btn" style="display: none;">&lt; Back</button> -->
                                        <button type="button" class="next btn get-otp-btn">I want staff</button>
                                        <button type="button" class="next btn i-want-job-hindi">I want a job / मुझे नौकरी चाहिए</button>
                                        <!-- <button type="submit" class="btn get-started-now verifyOtp" style="display: none;">Get Started Now</button> -->
                                        <button type="button" class="btn get-started-now verifyOtp">verify</button>
                                        <!-- <span class="clearfix"></span> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="privacy-policy-tag">
                <p>I Agree To <a href="#">Terms &amp; Conditions</a> &amp; <a href="#">Privacy Policy</a> Of Kaam Milega</p>
            </div>
        </div>
    </section>
        <!-- -----------Login Page End Here------------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
        <script src="{{ asset('public/assets-new/js/custom.js')}}"></script>
        <script>

                $(function () {
                    var $sections = $('.form-section');
        
                    function navigateTo(index) {
                        $sections
                            .removeClass('current')
                            .eq(index)
                            .addClass('current');
                        $('.form-navigation .previous').toggle(index > 0);
                        var atTheEnd = index >= $sections.length - 1;
                        $('.form-navigation .next').toggle(!atTheEnd);
                        $('.form-navigation [type=submit]').toggle(atTheEnd);
                    }

                    function curIndex() {
                        return $sections.index($sections.filter('.current'));
                    }

                    $('.form-navigation .previous').click(function () {
                        navigateTo(curIndex() - 1);
                    });

                    $('.form-navigation .next').click(function () {
                        $('.demo-form').parsley().whenValidate({
                            group: 'block-' + curIndex()
                        }).done(function () {
                            navigateTo(curIndex() + 1);
                        });
                    });

                    $sections.each(function (index, section) {
                        $(section).find(':input').attr('data-parsley-group', 'block-' + index);
                    });
                    navigateTo(0);
                });

                const inputs = ["input1", "input2", "input3", "input4"];
                inputs.forEach((id) => {
                    const input = document.getElementById(id);
                    addListener(input);
                });

                function addListener(input) {
                    input.addEventListener("input", () => {
                        const code = parseInt(input.value);
                        if (code >= 0 && code <= 9) {
                            const n = input.nextElementSibling;
                            if (n) n.focus();
                        } else {
                            input.value = "";
                        }
                    });

                    input.addEventListener("keydown", (event) => {
                        const key = event.key;
                        if (key === "Backspace" || key === "Delete") {
                            const prev = input.previousElementSibling;
                            if (prev) prev.focus();
                        }
                    });
                }
        </script>
        <script>
            $(document).ready(function () {
                
                $('.get-otp-btn').click(function () {
                    var mobileNumber = $('#mobile-num').val();
                    var otp = $('#inputs').val();
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');


                    $.ajax({
                        type: 'POST',
                        url: "{{ route('recruiter-send-otp') }}",
                        data: {
                            'mobileNumber': mobileNumber,
                            'otp': otp
                        },
                        headers: {
                          'X-CSRF-TOKEN': csrfToken
                        },
                        success: function(response){
                            if(response.success)
                            {
                            $('.show_otp').text(response.message).show();
                            }
                        }
                    });
                });
            });

            $('.verifyOtp').click(function(){
                var enterOtp = $('#input1').val() +
                               $('#input2').val() +
                               $('#input3').val() +
                               $('#input4').val();
                var mobileNumber = $('#mobile-num').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{ route('recruiter-verify-otp') }}",
                    data: { phone: mobileNumber, otp: enterOtp },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        if(response.success)
                        {
                            if(response.success == 2){  
                                window.location.href = "thank-you";
                            }else{
                                window.location.href = "recruiter-basic-profile";
                            }
                        }
                    }  
                });
            });
        </script>

        <script>
            function resendOtp() {
                document.getElementById('resendOtpButton').addEventListener('click', resendOtp);
                var mobileNumber = $('#mobile-num').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: "{{ route('recruiter-resend-otp') }}",
                    type: 'GET',
                    data: { 'mobileNumber': mobileNumber },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        if(response.success)
                        {
                            $('.show_otp').text(response.message).show();
                        }else
                        {
                            $('#otp_error').text(response.message).show();
                        }
                    },
                });
            }
        </script>
</body>
</html>