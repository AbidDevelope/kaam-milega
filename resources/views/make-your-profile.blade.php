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
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
        <!-- -----------Navbar Second Start Here------------ -->
        <section class="home-page-second-nav-section">
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
        <!-- -----------make-your-profile-sec start Here------------ -->
        <section class="make-your-profile-sec">
            <div id="container" class="container mt-5">
                <div class="stepper-width-dv">
                    <div class="progress px-1" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                    <div class="step-container d-flex justify-content-between">
                        <div class="step-circle current"  ><span class="step-personal-title title1">Personal
                        Detail</span></div>
                        <div class="step-circle"  ><span class="step-personal-title title2">Job
                        Category</span></div>
                        <div class="step-circle"  ><span
                            class="step-personal-title title3">Experience &
                        Skill</span></div>
                        <div class="step-circle"  ><span
                        class="step-personal-title title4">Done!</span>
                    </div>
                </div>
            </div>
            <div class="stepper-form-dv-parent">
                <div id="multi-step-form">
                    <div class="step step-1">
                        <!-- Step 1 form fields here -->
                        <form  accept-charset="utf-8" id="first-form">
                            <h3>make your Profile</h3>
                            <div class="mb-3">
                                <label for="full-name" class="form-label heading-tag">Full name</label>
                                <input type="text" class="form-control" id="name" name=""
                                placeholder="Enter Full Name">
                                <div class=" " id="name-error"></div>
                            </div>
                            <div class="mb-3 gender-dv">
                                <p class="form-label heading-tag">Gender</p>
                                <input type="radio" id="Male-gender" name="gender" value="Male">
                                <label for="Male-gender">Male</label>
                                <input type="radio" id="Female-gender" name="gender" value="Female">
                                <label for="Female-gender">Female</label>
                                <div class=" " id="gender-error"></div>
                            </div>
                            <div class="mb-3 education-label-dv">
                                <p class="form-label heading-tag">Education Level</p>
                                 @foreach($educationLevels as $value)
                                <input type="radio" id="below-10th-pass" class="education-level" name="education-level" value="{{$value->id}}">
                                <label for="below-10th-pass">{{$value->name}}</label>
                                @endforeach 
 
                                <div class=" " id="education-error"></div>
                            </div>
                            <div class="mb-3 work-experience-dv">
                                <p class="form-label heading-tag">Work Experience</p>
                                <input type="radio" id="i-have-experience" class="work-exp" name="work-exp" value="Experience">
                                <label for="i-have-experience">I Have Experience</label>
                                <input type="radio" id="i-m-afresher" class="work-exp" name="work-exp" value="Fresher">
                                <label for="i-m-afresher">I’m A Fresher</label>
                                <div class=" " id="work-exp-error"></div>
                            </div>
                            <div class="mb-3 which-city-work-dv">
                                <label for="which-city-work" class="heading-tag">Which City Do You Want To Work In?</label>
                                <select id="which-city-work" name="state" class="form-select" aria-label="Default select example">
                                    <option value="" selected>Select city</option>
                                    @foreach($states as $value)
                                    <option value="{{$value->id}}"  >{{$value->name}}</option>
                                    @endforeach
                                </select>
                                <div class=" " id="city-error"></div>
                            </div>
                            <div class="mb-3 select-locality-dv">
                                <label for="select-locality-dv" class="heading-tag">Select Locality</label>
                                <select id="select-locality-dv" name="city" class="form-select" aria-label="Default select example">
                                    <option value="">Select Locality</option>
                                   
                                </select>
                                <div class=" " id="locality-error"></div>
                            </div>
                            <div class="mb-3 get-job-update-whatsApp">
                                <input type="checkbox" id="get-me-job-update" name="get-me-job-update" value="1">
                                <label for="get-me-job-update" class="heading-tag">Get Me Job Update On Whatsapp </label>
                            </div>
                            <div class="mb-3 text-end next-btn-dv">
                                <button type="button" class="btn btn-primary next-step" onclick="submitFirstForm()">Next <img
                                src="public/assets-new/images/make-your-profile/right-arrow.png" alt=""></button>
                            </div>
                        </form>
                        
                    </div>
                    <div class="step step-2">
                        <form   accept-charset="utf-8" id="second-form">
                            <!-- Step 2 form fields here -->
                            <h3>What Kind Of Role Do You Want?</h3>
                            <div class="mb-3 search-bar">
                                <input type="text" class="form-control" id="searchInput" name="field2"
                                placeholder="Job Title/Category">
                                <div class="search-icon">
                                    <a href="#"><img src="public/assets-new/images/make-your-profile/search.png" alt=""></a>
                                </div>
                            </div>
                            <div class="mb-3 scroll-height-dv">
                                <div class="mb-3 search-checkbox" id="jobCategoriesContainer">
                                    <!--  @foreach($jobCategories as $value)
                                    <label for="role-1" class="searc-check-label">
                                        <div class="checkbox-scroll-img">
                                            <img src="{{ asset('public/uploads/').'/'.$value->image}}" alt="">
                                            <p>{{$value->name}}</p>
                                        </div>
                                        <div class="checkbox-input">
                                            <input type="checkbox" class="role-checkbox" id="role-1" name="job_category" value="{{$value->id}}">
                                        </div>
                                    </label>
                                    @endforeach -->
 
                                </div>
                                <div class=" " id="roles-error"></div>
                            </div>
                            
                            <div class="mb-3 text-end next-btn-dv">
                                <button type="button" class="btn btn-primary next-step" onclick="submitSecondForm()">Next <img
                                src="public/assets-new/images/make-your-profile/right-arrow.png" alt=""></button>
                            </div>
                        </form>
                        <!-- <button type="button" class="btn btn-primary prev-step">Previous</button> -->
                    </div>
                    <div class="step step-3">
                        <!-- Step 3 form fields here -->
                        <form  accept-charset="utf-8" id="third-form">
                            
                            <div class="mb-3">
                                <div class="experience-image-name">
                                    <img src="public/assets-new/images/make-your-profile/exp-image.png" alt="">
                                    <p>Delivery</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 work-experience-check">
                                    <p class="form-label heading-tag">What Is Your Work Experience?</p>
                                  
                                    <input type="radio" id="Fresher" name="experience" value="Fresher" >
                                    <label for="Fresher">Fresher</label>
                                    
                                    <input type="radio" id="1-6-months" name="experience" value="1-6 months" >
                                    <label for="1-6-months">1-6 Months</label>
                                   
                                    <input type="radio" id="1-year" name="experience" value="1 year" >
                                    <label for="1-year">1 year</label>
                                
                                    <input type="radio" id="2-year" name="experience" value="2 year" >
                                    <label for="2-year">2 year</label>
                                     
                                    <input type="radio" id="3-year" name="experience" value="3 year" >
                                    <label for="3-year">3 year</label>
                                   
                                    <div class=" " id="experience-error"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="mb-3 these-do-you-know">
                                    <p class="form-label heading-tag">Which Of These Do You Know?</p>
                                    
                                     @foreach($skills as $value)
                                    <p class="check-p-tag">
                                        <input type="checkbox" id="{{$value->id}}" name="skills" value="{{$value->skill_name}}" >
                                        <label for="Skill-1">{{$value->skill_name}}</label>
                                    </p>
                                    @endforeach
                                   
                                    <!-- <p class="check-p-tag">
                                        <input type="checkbox" id="Skill-2" name="skills" value="Skill 2" >
                                        <label for="Skill-2">Skill 2</label>
                                    </p>
                                   
                                    <p class="check-p-tag">
                                        <input type="checkbox" id="Skill-3" name="skills" value="Skill 3" >
                                        <label for="Skill-3">Skill 3</label>
                                    </p>
                                    
                                    <p class="check-p-tag">
                                        <input type="checkbox" id="Skill-4" name="skills" value="Skill 4" >
                                        <label for="Skill-4">Skill 4</label>
                                    </p>
                                    
                                    <p class="check-p-tag">
                                        <input type="checkbox" id="Skill-5" name="skills" value="Skill 5" >
                                        <label for="Skill-5">Skill 5</label>
                                    </p> -->
                                    <!-- Error message placeholder -->
                                    <div class=" " id="skills-error"></div>
                                </div>
                            </div>
                            <div class="mb-3 text-end next-btn-dv">
                                <button type="button" class="btn btn-primary next-step" onclick="submitThirdForm()">Done <img
                                src="public/assets-new/images/make-your-profile/right-arrow.png" alt=""></button>
                            </div>
                        </form>
                        <!-- <button type="button" class="btn btn-primary prev-step">Previous</button> -->
                        <!-- <button type="button" class="btn btn-primary next-step">step3</button> -->
                    </div>
                    <div class="step step-4">
                        <!-- Step 3 form fields here -->
                        <!-- <h3>Step 4</h3> -->
                        <div class="mb-3">
                            <div class="congratulation-card">
                                <div class="cong-heading">
                                    <h3>Congratulations! 🎉</h3>
                                    <p>You Complete Your Profile</p>
                                    <a href="/jobs" class="let-exp">Let Explore Jobs</a>
                                    <!-- <button type="submit" class="btn let-exp">Let Explore Jobs</button> -->
                                </div>
                            </div>
                        </div>
                        <!-- <button type="button" class="btn btn-primary prev-step">Previous</button> -->
                        <!-- <button type="submit" class="btn btn-success">step 4</button> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -----------make-your-profile-sec end Here------------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js"></script>
    <script src="public/assets-new/js/custom.js?11"></script>
     <script type="text/javascript">
$(document).ready(function () {
$('#multi-step-form').find('.step').slice(1).hide();

function nextStep(){
    if (currentStep < 4) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
        currentStep++;
        setTimeout(function () {
            $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
            updateProgressBar();
        }, 500);

    }
}
$(".prev-step").click(function () {
    if (currentStep > 1) {
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
        currentStep--;
        setTimeout(function () {
            $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
            updateProgressBar();
            
        }, 500);
    }
});

updateProgressBar = function () {
    var progressPercentage = ((currentStep - 1) / 3) * 100;
        $(".progress-bar").css("width", progressPercentage + "%");
    }

});
var allFormData = {};
  function submitFirstForm() {
  
    if (validateFormFirst()) {
        var name = $('#name').val();
        var gender = $('input[name="gender"]:checked').val();
        var educationLevel = $('input[name="education-level"]:checked').val();
        var workExp = $('input[name="work-exp"]:checked').val();
        var get_me_update = $('input[name="get-me-job-update"]:checked').val();
        var selectedCity = $('#which-city-work').val();
        var selectedLocality = $('#select-locality-dv').val();
        if (get_me_update == undefined) {
            var get_me_update = 0;
        }
        allFormData = {
            ...allFormData,
            name: name,
            gender: gender,
            education_level: educationLevel,
            work_exprience: workExp,
            state: selectedCity,
            city: selectedLocality,
            get_me_update: get_me_update,
        };
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
        currentStep++;

        setTimeout(function () {
            $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
            updateProgressBar();
        }, 500);
        
    } 
}
 

function validateFormFirst() {
    
    var isValid = true;
    var name = $('#name').val();
    var gender = $('input[name="gender"]:checked').val();
    var educationLevel = $('input[name="education-level"]:checked').val();
    var workExp = $('input[name="work-exp"]:checked').val();
    var selectedCity = $('#which-city-work').val();
    var selectedLocality = $('#select-locality-dv').val();

    if (!name) {
        showError('#name-error', 'Please enter your full name.*');
        isValid = false;
    } else {
        hideError('#name-error');
    }

    if (!gender) {
        showError('#gender-error', 'Gender is required.*');
        isValid = false;
    } else {
        hideError('#gender-error');
    }

    if (!educationLevel) {
        showError('#education-error', 'Education Level is required.*');
        isValid = false;
    } else {
        hideError('#education-error');
    }

    if (!workExp) {
        showError('#work-exp-error', 'Work Experience is required.*');
        isValid = false;
    } else {
        hideError('#work-exp-error');
    }

    if (!selectedCity) {
        showError('#city-error', 'City is required.*');
        isValid = false;
    } else {
        hideError('#city-error');
    }

    if (!selectedLocality) {
        showError('#locality-error', 'Locality is required.*');
        isValid = false;
    } else {
        hideError('#locality-error');
    }

    return isValid;
}
function submitSecondForm() {
    if (validateFormSecond()) {
        var selectedRoles = $('.role-checkbox:checked').map(function() {
            return this.value;
        }).get();

        allFormData = {
            ...allFormData,
            job_category: selectedRoles,
        };
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
        currentStep++;

        setTimeout(function () {
            $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
            updateProgressBar();
        }, 500);
        
    }
     
}
function validateFormSecond() {
    
   var isValid = true;
 
    if ($('.role-checkbox:checked').length === 0) {
        showError('#roles-error', 'Select at least one role.*');
        isValid = false;
    } else {
        hideError('#roles-error');
    }
 
    return isValid;
}
function submitThirdForm() {
     
     if (validateFormThird()) {
        var selectedExperience = $('input[name="experience"]:checked').val();
        var selectedSkills = $('input[name="skills"]:checked').map(function() {
            return this.value;
        }).get();

        allFormData = {
            ...allFormData,
            experiance: selectedExperience,
            skills: selectedSkills,
        };
        saveData(allFormData);
        console.log(allFormData);
        $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
        currentStep++;

        setTimeout(function () {
            $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
            $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
            updateProgressBar();
        }, 500);
         
    }
}
function validateFormThird() {
    var isValid = true;
    var selectedExperience = $('input[name="experience"]:checked').val();
    if (!selectedExperience) {
        showError('#experience-error', 'Please select your work experience.*');
        isValid = false;
    } else {
        hideError('#experience-error');
    }

    var selectedSkills = $('input[name="skills"]:checked').length;
    if (selectedSkills === 0) {
        showError('#skills-error', 'Please select at least one skill.*');
        isValid = false;
    } else {
        hideError('#skills-error');
    }

    return isValid;
    
}

function showError(elementId, message) {
    $(elementId).html(message);
    $(elementId).addClass('alert alert-danger');
}

function hideError(elementId) {
    $(elementId).html('');
    $(elementId).removeClass('alert alert-danger');
}

function saveData(data) {
    
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{ url('job-seeker-store') }}",
            type: 'POST',
            data: data,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (data) {
                 console.log(data);
            },
            error: function (xhr, textStatus, errorThrown) {
                console.error(xhr.responseText);
            }
        });
    }
</script>
<script>
    $('select[name="state"]').on('change', function(){
    var state = $(this).val();
    if(state) {
    $.ajax({
    url: "{{url('/cities/')}}/"+state,
    type:"GET",
    dataType:"json",
    beforeSend: function(){
    $('#loader').css("visibility", "visible");
    },
    success:function(data) {
    $('select[name="city"]').empty();
    $.each(data, function(key, value){
    $('select[name="city"]').append('<option value="'+ value.name +'">' + value.name + '</option>');
    });
    },
    complete: function(){
    $('#loader').css("visibility", "hidden");
    }
    });
    } else {
    $('select[name="city"]').empty();
    }
    });
    </script> 
    <script>
    
    const jobCategoriesData = <?= $jobCategories; ?>;
 
    function renderJobCategories(searchQuery) {
      const filteredCategories = jobCategoriesData.filter(category =>
        category.name.toLowerCase().includes(searchQuery.toLowerCase())
      );

      const html = filteredCategories.map(category => `
        <label for="role-${category.id}" class="searc-check-label">
          <div class="checkbox-scroll-img">
            <img src="public/uploads/${category.image}" alt="">
            <p>${category.name}</p>
          </div>
          <div class="checkbox-input">
            <input type="checkbox" class="role-checkbox" id="role-${category.id}" name="job_category" value="${category.id}">
          </div>
        </label>
      `).join('');

      $('#jobCategoriesContainer').html(html);
    }
 
    $('#searchInput').on('input', function() {
      const searchQuery = $(this).val();
      renderJobCategories(searchQuery);
    });
 
    renderJobCategories('');

  </script>

</body>
</html>