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
    <!-- -----------Recruiter verify official email Start Here------------ -->
    <style type="text/css">
        .show_otp{
        display: none;
        }
    </style>
    <section class="recruiter-verify-official-mail-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="recruiter-verify-offi-parent-dv">
                        <div class="recruiter-verify-offi-child-dv">
                            <div class="first-email-img-heading">
                                <img src="public/assets-new/images/rec-home/email-verify.png" alt="">
                                <h4>verify your official email ID</h4>
                            </div>
                            <form action="" class="verify-email-otp-form-tag">

                                    <fieldset class="form-section">
                                        <div class="otp-headings">
                                            <h6>please enter the OTP sent on</h6>
                                            <p class="text-success">{{ Session::get('email') }}</p>
                                        </div>
                                        <div class="otp-input-dv-parent">
                                            <div id="inputs">
                                                <input id="input1" type="text" maxlength="1" placeholder="0" data-parsley-group="block-1">
                                                <input id="input2" type="text" maxlength="1" placeholder="0" data-parsley-group="block-1">
                                                <input id="input3" type="text" maxlength="1" placeholder="0" data-parsley-group="block-1">
                                                <input id="input4" type="text" maxlength="1" placeholder="0" data-parsley-group="block-1">
                                            </div>
                                            <div id="otp_error text-danger"></div>
                                        </div>
                            
                                        <div class="next-btn-dv">
                                            <!-- <button type="button" class="btn back-button"
                                                onclick='window.location.href="recruiter-verify-official-email"'>Back</button> -->
                                            <button type="button" class="btn next-button EmailverifyOtp">Verify</button>
                                        </div>
                                    </fieldset>

                                <hr class="mt-4">

                                <div class="card-footer-timer">
                                    <p>Can't find in inbox? Check your Spam/Junk folder or</p>
                                    <p> Resend Email in <span id="some_div"></span></p>
                                    <p class="verify-p-tag">Or <a href="#">Verify Later</a> (Your job won't go live
                                        until you verify)</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -----------Recruiter verify official email End Here------------ -->

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
    <script src="{{ asset('public/assets-new/js/custom.js') }}"></script>
    <script>
        // -----------------login page js start here -----------------

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
        // -----------------otp js end------------------

        // -----------------login page js end here -------------------
    </script>
    
    <script>
        $(document).ready(function(){
            $('.EmailverifyOtp').click(function(){
                var enteredOtp = $('#input1').val() +
                                $('#input2').val() +
                                $('#input3').val() +
                                $('#input4').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');                  
                console.log(enteredOtp);
                
                $.ajax({
                    type: 'POST',
                    url: "{{ route('recruiter-verify-official-email-otp') }}",
                    data: {'otp': enteredOtp},
                    headers: {  
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                    if(response.success) {
                        window.location.href = "recruiter-upload-company-document-verify";
                    } else {
                        $('#otp_error').text(response.message).show();
                    }
                    }
                });
            });
        });
    </script>

    <script>
        var timeLeft = 60;
        var elem = document.getElementById('some_div');

        var timerId = setInterval(countdown, 1000);

        function countdown() {
            if (timeLeft == -1) {
                clearTimeout(timerId);
                doSomething();
            } else {
                elem.innerHTML = ' 00 : ' + timeLeft  ;
                timeLeft--;
            }
        }
    </script>
</body>
</html>