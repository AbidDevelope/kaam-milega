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
                            <form action="" class="verify-email-form-tag">
                                <div class="mb-2 mt-3">
                                    <label for="offi-email" class="form-label"><b>Official email iD*</b></label>
                                    <input type="email" name="email" class="form-control offi-email-input-tag w-50" id="email"
                                        placeholder="Ex: madan@99acres.com">
                                </div>
                                <div class="verify-para">
                                    <p>We will sent you an OTP on this Email</p>
                                </div>
                                <div class="next-btn-dv">
                                    <!-- <button type="button" class="btn next-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight">Next</button> -->
                                    <button type="button" class="btn next-button">Next</button>
                                    <div class="">
                                        <a href="recruiter-verify-official-email-otp">Next Dummy</a>
                                    </div>
                                </div>
                                <div class="i-did-not-have-account">
                                    <a href="#">I don’t have an Official Email ID</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="sidebar-popups">
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel"></h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="sidebar-popup-content-body-parent">
                        <div class="sidebar-content-heading">
                            <h4>This Looks Like A <span>Personal Email Id!</span></h4>
                        </div>
                        <div class="sidebar-content">
                            <p>It Might Delay Your Job Activation</p>
                            <p class="email-para-tag">
                                namesurname@gmail.com
                            </p>
                        </div>
                        <div class="next-btn-dv">
                            <button type="button" class="btn next-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">Edit</button>
                            <button type="button" class="btn continue-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">Continue</button>
                            <div class="">
                                <a href="recruiter-verify-official-email-otp">Next Dummy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="public/assets-new/js/custom.js"></script>
    <script>
        // -----------------login page js start here -----------------

        $(function () {
            var $sections = $('.form-section');

            function navigateTo(index) {
                // Mark the current section with the class 'current'
                $sections
                    .removeClass('current')
                    .eq(index)
                    .addClass('current');
                // Show only the navigation buttons that make sense for the current section:
                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);
            }

            function curIndex() {
                // Return the current index by looking at which section has the class 'current'
                return $sections.index($sections.filter('.current'));
            }

            // Previous button is easy, just go back
            $('.form-navigation .previous').click(function () {
                navigateTo(curIndex() - 1);
            });

            // Next button goes forward iff current block validates
            $('.form-navigation .next').click(function () {
                $('.demo-form').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function () {
                    navigateTo(curIndex() + 1);
                });
            });

            // Prepare sections by setting the `data-parsley-group` attribute to 'block-0', 'block-1', etc.
            $sections.each(function (index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block-' + index);
            });
            navigateTo(0); // Start at the beginning
        });


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
                const key = event.key; // const {key} = event; ES6+
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
        $(document).ready(function () {
            $('.next-button').click(function () {
                var email = $('#email').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{ route('recruiter-verify-official-email') }}",
                    data: {
                        'email': email,
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function (response) {
                        if (response.success) {
                            window.location.href = "{{ route('recruiter-verify-official-email-otp') }}";
                        } else {
                            console.log(response.errors); 
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>