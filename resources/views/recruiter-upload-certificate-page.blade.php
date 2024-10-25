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
    <!-- -----------recruiter-upload-company-document-sec Start Here------------ -->

    <section class="recruiter-upload-certificate-page">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <!-- GST Certificate Section Start-->
                    <div class="recruiter-upload-certificate-parent" id="gstSection" style="display: none;">
                        <div class="upload-document-heading-right-icon">
                            <div class="left-dv">
                                <a href="recruiter-upload-company-document-to-verify"><img
                                        src="public/assets-new/images/rec-home/left-icon.png" alt=""></a>
                            </div>
                            <div class="right-dv">
                                <h5>Upload Company GST Certificate</h5>
                                <p>To verify your company & start hiring</p>
                            </div>
                        </div>
                        <div class="upload-document-file-dv">
                            <form action="{{ route('recruiter-upload-certificate') }}" method="POST" class="form-container" enctype='multipart/form-data'>
                                @csrf
                                <div class="upload-files-container">
                                    <div class="drag-file-area">
                                        <label class="label">
                                            <span class="browse-files">
                                                <input type="file" name="gst_certificate" id="gst_certificate" class="default-file-input" hidden />
                                                <img src="public/assets-new/images/rec-home/choose-a-file.png" alt="">
                                            </span>
                                            <p>Format: PDF, JPEG, JPG, PNG | Maximum file size: 2 MB</p>
                                        </label>
                                    </div>
                                </div>
                                @error('gst_certificate')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="do-not-upload-para">
                                    <p>(Note: DO NOT upload your personal documents)</p>
                                </div>
                                <div class="gst-certificate-label-dv">
                                    <div class="mb-3">
                                        <label for="company-gst-certi" class="form-label">Company GST
                                            Certificate</label>
                                        <input type="text" name="certificate_number" class="form-control" id="certificate_number"
                                            placeholder="Enter Company GST Certificate Number">
                                        @error('certificate_number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror    
                                    </div>
                                </div>
                                <div class="verify-account-button">
                                    <button type="submit" class="verify-btn">Verify Account</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                    <!-- GST Certificate Section End--> 

                    <!-- PAN Certificate Section Start-->
                    <div class="recruiter-upload-certificate-parent" id="panSection" style="display: none;">
                        <div class="upload-document-heading-right-icon">
                            <div class="left-dv">
                                <a href="recruiter-upload-company-document-to-verify"><img
                                        src="public/assets-new/images/rec-home/left-icon.png" alt=""></a>
                            </div>
                            <div class="right-dv">
                                <h5>Upload Company Pan Certificate</h5>
                                <p>To verify your company & start hiring</p>
                            </div>
                        </div>
                        <div class="upload-document-file-dv">
                            <form action="{{ route('recruiter-upload-certificate') }}" method="POST" class="form-container" enctype='multipart/form-data'>
                                @csrf
                                <div class="upload-files-container">
                                    <div class="drag-file-area">
                                        <label class="label">
                                            <span class="browse-files">
                                                <input type="file" name="pan_certificate" class="default-file-input" hidden />
                                                <img src="public/assets-new/images/rec-home/choose-a-file.png" alt="">
                                            </span>
                                            <p>Format: PDF, JPEG, JPG, PNG | Maximum file size: 2 MB</p>
                                        </label>
                                    </div>
                                </div>
                                @error('pan_certificate')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="do-not-upload-para">
                                    <p>(Note: DO NOT upload your personal documents)</p>
                                </div>
                                <div class="gst-certificate-label-dv">
                                    <div class="mb-3">
                                        <label for="company-gst-certi" class="form-label">Company Pan
                                            Certificate</label>
                                        <input type="text" name="certificate_number" class="form-control" id="company-gst-certi"
                                            placeholder="Enter Company PAN Certificate Number">
                                            @error('certificate_number')  <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="verify-account-button">
                                    <button type="submit" class="verify-btn">Verify Account</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                    <!-- PAN Certificate Section End-->
                    
                    <!-- FSSAI Certificate Section Start-->
                    <div class="recruiter-upload-certificate-parent" id="fssaiSection" style="display: none;">
                        <div class="upload-document-heading-right-icon">
                            <div class="left-dv">
                                <a href="recruiter-upload-company-document-to-verify"><img
                                        src="public/assets-new/images/rec-home/left-icon.png" alt=""></a>
                            </div>
                            <div class="right-dv">
                                <h5>Upload Company FSSAI Certificate</h5>
                                <p>To verify your company & start hiring</p>
                            </div>
                        </div>
                        <div class="upload-document-file-dv">
                            <form action="{{ route('recruiter-upload-certificate') }}" method="POST" class="form-container" enctype='multipart/form-data'>
                                @csrf
                                <div class="upload-files-container">
                                    <div class="drag-file-area">
                                        <label class="label">
                                            <span class="browse-files">
                                                <input type="file" name="fssai_certificate" class="default-file-input" hidden />
                                                <img src="public/assets-new/images/rec-home/choose-a-file.png" alt="">
                                            </span>
                                            <p>Format: PDF, JPEG, JPG, PNG | Maximum file size: 2 MB</p>
                                        </label>
                                    </div>
                                </div>
                                @error('fssai_certificate')  <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="do-not-upload-para">
                                    <p>(Note: DO NOT upload your personal documents)</p>
                                </div>
                                <div class="gst-certificate-label-dv">
                                    <div class="mb-3">
                                        <label for="company-gst-certi" class="form-label">Company FSSAI
                                            Certificate</label>
                                        <input type="text" name="certificate_number" class="form-control" id="company-gst-certi"
                                            placeholder="Enter Company FSSAI Certificate Number">
                                            @error('certificate_number')  <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="verify-account-button">
                                    <button type="submit" class="verify-btn">Verify Account</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                    <!-- FSSAI Certificate Section End-->

                    <!-- Incorporation Certificate Section Start-->
                    <div class="recruiter-upload-certificate-parent" id="incorporationSection" style="display: none;">
                        <div class="upload-document-heading-right-icon">
                            <div class="left-dv">
                                <a href="recruiter-upload-company-document-to-verify"><img
                                        src="public/assets-new/images/rec-home/left-icon.png" alt=""></a>
                            </div>
                            <div class="right-dv">
                                <h5>Upload Company Incorporation Certificate</h5>
                                <p>To verify your company & start hiring</p>
                            </div>
                        </div>
                        <div class="upload-document-file-dv">
                            <form action="{{ route('recruiter-upload-certificate') }}" method="POST" class="form-container" enctype='multipart/form-data'>
                                @csrf
                                <div class="upload-files-container">
                                    <div class="drag-file-area">
                                        <label class="label">
                                            <span class="browse-files">
                                                <input type="file" name="incorporation_certificate" class="default-file-input" hidden />
                                                <img src="public/assets-new/images/rec-home/choose-a-file.png" alt="">
                                            </span>
                                            <p>Format: PDF, JPEG, JPG, PNG | Maximum file size: 2 MB</p>
                                        </label>
                                    </div>
                                </div>
                                @error('incorporation_certificate')  <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="do-not-upload-para">
                                    <p>(Note: DO NOT upload your personal documents)</p>
                                </div>
                                <div class="gst-certificate-label-dv">
                                    <div class="mb-3">
                                        <label for="company-gst-certi" class="form-label">Company Incorporation
                                            Certificate</label>
                                        <input type="text" name="certificate_number" class="form-control" id="company-gst-certi"
                                            placeholder="Enter Company Incorporation Certificate Number">
                                            @error('certificate_number')  <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="verify-account-button">
                                    <button type="submit" class="verify-btn">Verify Account</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                    <!-- Incorporation Certificate Section End-->

                    <!-- Shop Certificate Section Start-->
                    <div class="recruiter-upload-certificate-parent" id="shopSection" style="display: none;">
                        <div class="upload-document-heading-right-icon">
                            <div class="left-dv">
                                <a href="recruiter-upload-company-document-to-verify"><img
                                        src="public/assets-new/images/rec-home/left-icon.png" alt=""></a>
                            </div>
                            <div class="right-dv">
                                <h5>Upload Company Shop Certificate</h5>
                                <p>To verify your company & start hiring</p>
                            </div>
                        </div>
                        <div class="upload-document-file-dv">
                            <form action="{{ route('recruiter-upload-certificate') }}" method="POST" class="form-container" enctype='multipart/form-data'>
                                @csrf
                                <div class="upload-files-container">
                                    <div class="drag-file-area">
                                        <label class="label">
                                            <span class="browse-files">
                                                <input type="file" name="shop_certificate" class="default-file-input" hidden />
                                                <img src="public/assets-new/images/rec-home/choose-a-file.png" alt="">
                                            </span>
                                            <p>Format: PDF, JPEG, JPG, PNG | Maximum file size: 2 MB</p>
                                        </label>
                                    </div>
                                </div>
                                @error('shop_certificate')  <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="do-not-upload-para">
                                    <p>(Note: DO NOT upload your personal documents)</p>
                                </div>
                                <div class="gst-certificate-label-dv">
                                    <div class="mb-3">
                                        <label for="company-gst-certi" class="form-label">Company Shop
                                            Certificate</label>
                                        <input type="text" name="certificate_number" class="form-control" id="company-gst-certi"
                                            placeholder="Enter Company Shop Certificate Number">
                                            @error('certificate_number')  <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="verify-account-button">
                                    <button type="submit" class="verify-btn">Verify Account</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                    <!-- Shop Certificate Section End-->

                    <!-- MSME Certificate Section Start-->
                    <div class="recruiter-upload-certificate-parent" id="msmeSection" style="display: none;">
                        <div class="upload-document-heading-right-icon">
                            <div class="left-dv">
                                <a href="recruiter-upload-company-document-to-verify"><img
                                        src="public/assets-new/images/rec-home/left-icon.png" alt=""></a>
                            </div>
                            <div class="right-dv">
                                <h5>Upload Company MSME Certificate</h5>
                                <p>To verify your company & start hiring</p>
                            </div>
                        </div>
                        <div class="upload-document-file-dv">
                            <form action="{{ route('recruiter-upload-certificate') }}" method="POST" class="form-container" enctype='multipart/form-data'>
                                @csrf
                                <div class="upload-files-container">
                                    <div class="drag-file-area">
                                        <label class="label">
                                            <span class="browse-files">
                                                <input type="file" name="msme_certificate" class="default-file-input" hidden />
                                                <img src="public/assets-new/images/rec-home/choose-a-file.png" alt="">
                                            </span>
                                            <p>Format: PDF, JPEG, JPG, PNG | Maximum file size: 2 MB</p>
                                        </label>
                                    </div>
                                </div>
                                @error('msme_certificate')  <span class="text-danger">{{ $message }}</span> @enderror
                                <div class="do-not-upload-para">
                                    <p>(Note: DO NOT upload your personal documents)</p>
                                </div>
                                <div class="gst-certificate-label-dv">
                                    <div class="mb-3">
                                        <label for="company-gst-certi" class="form-label">Company MSME
                                            Certificate</label>
                                        <input type="text" name="certificate_number" class="form-control" id="company-gst-certi"
                                            placeholder="Enter Company MSME Certificate Number">
                                            @error('certificate_number')  <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="verify-account-button">
                                    <button type="submit" class="verify-btn">Verify Account</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                    <!-- MSME Certificate Section End-->
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
       document.addEventListener("DOMContentLoaded", function() {
            var urlParams = new URLSearchParams(window.location.search);
            var section = urlParams.get('section');

            if (section === 'gst') {
                document.getElementById('gstSection').style.display = 'block';
            } else if (section === 'pan') {
                document.getElementById('panSection').style.display = 'block';
            }else if(section == 'fssai'){
                document.getElementById('fssaiSection').style.display = 'block';
            }else if(section == 'Incorporation'){
                document.getElementById('incorporationSection').style.display = 'block';
            }else if(section == 'shop'){
                document.getElementById('shopSection').style.display = 'block';
            }else if(section == 'msme'){
                document.getElementById('msmeSection').style.display = 'block';
            }
        });
    </script>
    <!-- <script>
        $(document).ready(function(){
            $('.verify-btn').on('click', function(e){
                e.preventDefault(); // Prevent default button click behavior

                var formData = new FormData();
                formData.append('document_images', $('#document_images')[0].files[0]); // Append file
                formData.append('certificate_number', $('#certificate_number').val()); // Append text input
                formData.append('_token', $('meta[name="csrf-token"]').attr('content')); // Append CSRF token

                $.ajax({
                    type: 'POST',
                    url: "{{ route('recruiter-upload-certificate') }}",
                    data: formData,
                    contentType: false, // Important for FormData
                    processData: false, // Important for FormData
                    success: function(response){
                        window.location.href = "{{ route('recruiter-login') }}";
                    },
                    error: function(response) {
                        // Handle errors here
                        console.log('Error:', response);
                    }
                });
            });
        });
    </script> -->

</body>

</html>