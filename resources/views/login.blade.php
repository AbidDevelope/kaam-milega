<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login || Kaam Milega</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('public/assets-new/images/favicon.ico')}}" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
        <link rel="stylesheet" href="{{ asset('public/assets-new/css/style.css?111') }}">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/{{ asset('public/assets-new/docs.css"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css">
        <style type="text/css">
        .loader {
        width: 48px;
        height: 48px;
        border: 3px solid #FFF;
        border-radius: 50%;
        display: inline-block;
        position: relative;
        box-sizing: border-box;
        animation: rotation 1s linear infinite;
        }
        .loader::after {
        content: '';
        box-sizing: border-box;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-bottom-color: #FF3D00;
        }
        
        @keyframes rotation {
        0% {
        transform: rotate(0deg);
        }
        100% {
        transform: rotate(360deg);
        }
        }
        </style>
    </head>
    <body>
        <!-- -----------Navbar Second Start Here------------ -->
        <section class="home-page-second-nav-section">
            <nav class="navbar navbar-expand-sm bg-white navbar-light">
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
                            <!-- <li class="nav-item">
                                <div class="menu-search">
                                    <input type="text" placeholder="Search">
                                    <div class="menu-search-button">
                                        <button class="menu-search-btn-tag" type="button" value="">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        </button>
                                    </div>
                                </div>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="{{ asset('public/assets-new/images/menu-images/devicemobile.png')}}"
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
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="login"><img src="{{ asset('public/assets-new/images/menu-images/signin.png')}}" class="pe-1" />Login</a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link hire-local-staff" href="#">Hire Local Staff <img
                                src="{{ asset('public/assets-new/images/menu-images/arrowsquareout.png" class="ps-1" /></a>
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
        <section class="login-screen-section">
            <div class="container-fluid">
                <div class="login-form">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="left-side-dv">
                                <div class="left-heading-dv">
                                    <h3><span>Call</span> Or <span>Talk</span> To Hr Directly & Get A Job With Better
                                    Salary!
                                    </h3>
                                    <p><a href="#">Get Local Jobs In Your City! 👉</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="right-side-dv">
                                <div class="form-parent-dv">
                                    <div class=" " id="success-message"></div>
                                    <form action="#" data-parsley-validate="" class="demo-form">
                                        <fieldset class="form-section">
                                            <h5>Enter Your Number To Continue</h5>
                                            <div class="mb-3 fieldset-child">
                                                <label for="mobile-num" class="form-label mobile-num-cls">Mobile
                                                Number</label>
                                                <input type="text" id="mobile-num" class="form-control input-tag mb-2"
                                                placeholder="Enter The Mobile Number To Get Otp" required
                                                data-parsley-type="number" data-parsley-length="[10, 10]">
                                            </div>
                                            <div class=" " id="mobile-error"></div>
                                        </fieldset>
                                        <fieldset class="form-section show_otp ">
                                            <div class="otp-headings">
                                                <h5>Please Enter OTP</h5>
                                                <p id="mobile-data"> </p>
                                            </div>
                                            <div class="otp-input-dv-parent">
                                                <div id='inputs'>
                                                    <input id='input1' type='text' maxLength="1" placeholder="0" />
                                                    <input id='input2' type='text' maxLength="1" placeholder="0" />
                                                    <input id='input3' type='text' maxLength="1" placeholder="0" />
                                                    <input id='input4' type='text' maxLength="1" placeholder="0" />
                                                </div>
                                                <div class=" " id="otp-error"></div>
                                            </div>
                                            <div class="otp-footer-a">
                                                <p>
                                                    <a href="#" class="resendOtp">Resend OTP</a>
                                                </p>
                                            </div>
                                            <!-- <a href="make-your-profile">After Verify Page</a> -->
                                        </fieldset>
                                        <span class=" " id="loader"></span>
                                        <div class="form-navigation">
                                            <button type="button" class="next btn get-otp-btn getOtp">Get OTP</button>
                                            <button type="button" class="btn get-otp-btn show_otp verifyOtp">Verify</button>
                                            <!-- <a href="home-page-after-login">After Login Home Page</a> -->
                                            <span class="clearfix"></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="privacy-policy-tag">
                    <p>I Agree To <a href="#">Terms & Conditions</a> & <a href="#">Privacy Policy</a> Of Kaam Milega</p>
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
    </script>
    <script>
        // -----------------otp js start----------------
        const inputs = ["input1", "input2", "input3", "input4"];
        inputs.map((id) => {
            const input = document.getElementById(id);
            addListener(input);
        });
        function addListener(input) {
            input.addEventListener("keyup", () => {
                const code = parseInt(input.value);
                if (code >= 0 && code <= 9) {
                    const n = input.nextElementSibling;
                    if (n) n.focus();
                } else {
                    input.value = "";
                }
                const key = event.key;
                if (key === "Backspace" || key === "Delete") {
                    const prev = input.previousElementSibling;
                    if (prev) prev.focus();
                }
            });
        }
        // -----------------otp js end------------------
    </script>
<script type="text/javascript">
$(document).ready(function () {
    const mobileInput = $('#mobile-num');
    const otpInputs = ['#input1', '#input2', '#input3', '#input4'];
    const showOtpSection = $('.show_otp');
    const getOtpButton = $('.getOtp');
    const verifyOtpButton = $('.verifyOtp');
    const hideNumberSection = $('.hideNumber');

    
    function showOtpInputSection() {
        showOtpSection.show();
        getOtpButton.hide();
        verifyOtpButton.show();
        hideNumberSection.hide();
    }

    function sendOtp(mobileNumber) {
        $.ajax({
            url: "{{url('send-otp')}}?phone=" + mobileNumber,
            type: 'GET',
            statusCode: {
                200: function (data) { 
                    if (data.success == true) {
                        $("#mobile-data").text('We Have Sent An Otp On '+mobileNumber);
                        showSuccess(data.message)
                     
                    }
                }
            }
        });
    }
    
    function verifyOtp(mobileNumber, otp) {
    
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{ url('verify-otp') }}",
            type: 'POST',
            data: { phone: mobileNumber, otp: otp },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (data) {
                console.log(data);
                $("#loader").removeClass('loader');
                if (data.status == 'success' && data.message == 2) {
                window.location.href = "make-your-profile";
                }else if (data.status == 'success' && data.message == 1) {
                window.location.href = "jobs";
                }
             
            },
            error: function (xhr, textStatus, errorThrown) {
                $("#loader").removeClass('loader');
                showError('#otp-error', 'Invalid OTP.*');
                 
                console.error(xhr.responseText);
            }
        });
    }

    function startOtpTimer() {
        const fiveMinutes = 30 * 1;
        const display = $('#time');
        startTimer(fiveMinutes, display);
    }

    $('.getOtp, .resendOtp').on('click', function () {
        const mobileNumber = mobileInput.val();
        if (mobileNumber) {
            if (isValidMobileNumber(mobileNumber)) {
            $(".verifyOtp").prop("disabled", false);
                $("#loader").removeClass('loader');
                showOtpInputSection();
                sendOtp(mobileNumber);
            } else {
            
                showError('#mobile-error', 'Invalid mobile number.*');
            }
        } else {
   
            showError('#mobile-error', 'Please enter a mobile number.*');
        }
    });

    $('.verifyOtp').on('click', function () {
        $(".verifyOtp").prop("disabled", true);
        $("#loader").addClass('loader');
        $("#success-message").removeClass('alert alert-success');
        const otpValues = otpInputs.map(input => $(input).val()); 
        const mobileNumber = mobileInput.val();
        if (otpValues.every(value => value)) {
            verifyOtp(mobileNumber,otpValues)
        } else {
            $(".verifyOtp").prop("disabled", false);
            $("#loader").removeClass('loader');
            showError('#otp-error', 'Please enter OTP.*');
      
        }
    });
});

function isValidMobileNumber(mobileNumber) { 
    var mobileNumberPattern = /^[0-9]{10}$/; 
    return mobileNumberPattern.test(mobileNumber);
}

function showError(elementId, message) {
    $(elementId).html(message);
    $(elementId).addClass('alert alert-danger');
}
function showSuccess(message) {
    $("#success-message").html(message);
    $("#success-message").addClass('alert alert-success');
}

function hideError(elementId) {
    $(elementId).html('');
    $(elementId).removeClass('alert alert-danger');
}
</script>
    </body>
</html>