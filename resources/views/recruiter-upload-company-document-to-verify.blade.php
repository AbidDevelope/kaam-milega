<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kaam Milega</title>
    <meta charset="utf-8">
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
<style>
    .document-upload-item-parent
    {
        cursor: pointer;
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
    <!-- -----------recruiter-upload-company-document-sec Start Here------------ -->
    <section class="recruiter-upload-company-document-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="recruiter-verify-offi-parent-dv">
                        <div class="recruiter-verify-offi-child-dv">
                            <div class="first-email-img-heading">
                                <div class="verify-div-tag">
                                    <a href="#" class="verify-a-tag">Verify Later</a>
                                </div>
                                <div class="envolop-heading">
                                    <h4><span>Upload any 1 company document </span>to verify and earn a badge on your job</h4>
                                </div>
                                <div class="img-envolop">
                                    <img src="public/assets-new/images/rec-home/document-upload.png" alt="">
                                </div>
                                <div class="aftre-img-para">
                                    <p>Verified Badge gets 80% more candidates!</p>
                                </div>
                            </div>
                            <div class="second-upload-document-dv">
                                <p class="note-para">(Note: DO NOT upload your personal documents)</p>

                                <div class="document-upload-head-parent">
                                    <div class="document-upload-item-parent" onclick="redirectToSection('gst')">
                                        <a>
                                            <div class="document-icon-text-img-dv">
                                                <div class="icon-img-logo">
                                                    <img src="public/assets-new/images/rec-home/gst-certificate.png" alt="">
                                                    <p>Company GST Certificate</p>
                                                </div>
                                                <div class="right-icon">
                                                    <img src="public/assets-new/images/rec-home/right-icon.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="document-upload-item-parent" onclick="redirectToSection('pan')">
                                        <a>
                                            <div class="document-icon-text-img-dv">
                                                <div class="icon-img-logo">
                                                    <img src="public/assets-new/images/rec-home/pan-card.png" alt="">
                                                    <p>Company PAN Card</p>
                                                </div>
                                                <div class="right-icon">
                                                    <img src="public/assets-new/images/rec-home/right-icon.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="document-upload-item-parent" onclick="redirectToSection('fssai')">
                                        <a>
                                            <div class="document-icon-text-img-dv">
                                                <div class="icon-img-logo">
                                                    <img src="public/assets-new/images/rec-home/fssai.png" alt="">
                                                    <p>FSSAI License</p>
                                                </div>
                                                <div class="right-icon">
                                                    <img src="public/assets-new/images/rec-home/right-icon.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="document-upload-item-parent" onclick="redirectToSection('Incorporation')">
                                        <a>
                                            <div class="document-icon-text-img-dv">
                                                <div class="icon-img-logo">
                                                    <img src="public/assets-new/images/rec-home/company-incor-certificate.png" alt="">
                                                    <p>Company Incorporation Certificate</p>
                                                </div>
                                                <div class="right-icon">
                                                    <img src="public/assets-new/images/rec-home/right-icon.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="document-upload-item-parent" onclick="redirectToSection('shop')">
                                        <a>
                                            <div class="document-icon-text-img-dv">
                                                <div class="icon-img-logo">
                                                    <img src="public/assets-new/images/rec-home/shop-certificate.png" alt="">
                                                    <p>Shop & Establishment Certificate</p>
                                                </div>
                                                <div class="right-icon">
                                                    <img src="public/assets-new/images/rec-home/right-icon.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="document-upload-item-parent" onclick="redirectToSection('msme')">
                                        <a>
                                            <div class="document-icon-text-img-dv">
                                                <div class="icon-img-logo">
                                                    <img src="public/assets-new/images/rec-home/msme-certificate.png" alt="">
                                                    <p>MSME Registration Certificate</p>
                                                </div>
                                                <div class="right-icon">
                                                    <img src="public/assets-new/images/rec-home/right-icon.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="view-more-document-options">
                                    <a href="#"><img src="public/assets-new/images/rec-home/plus-circle.png" alt="">View More Document Options</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -----------recruiter-upload-company-document-sec End Here------------ -->

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
        function redirectToSection(section) {
            window.location.href = '{{ route("recruiter-upload-certificate-page") }}?section=' + section;
        }
    </script>
</body>

</html>