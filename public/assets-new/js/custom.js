// ----------------index carousel start here ------------------
$(document).ready(function () {
    $('.carousel-after-slider').slick({
        slidesToShow: 4,
        dots: false,
        arrows: false,
        centerMode: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.want-to-work-slider').slick({
        slidesToShow: 5,
        dots: false,
        arrows: true,
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $(".companies-slider-dv").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        infinite: false,
        autoplay: false,
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.connect-just-like-you-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $(".feature-companies-slider-dv").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
        centerMode: true,
        centerPadding: '60px',
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $(".upcoming-left-slider").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $(".what-people-say-slider").slick({
        slidesToShow: 1,
        centerMode: true,
        centerPadding: "15%",
        arrows: true,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $(".account-cum-slider-parent").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        infinite: false,
        autoplay: false,
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.connect-just-like-you-slider-inner-page').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false,
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $(".feature-companies-slider-dv-inner-page").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        infinite: false,
        autoplay: false,
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $(".chat-top-slider-parent").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots:false,
        infinite: false,
        autoplay: false,
        centerMode: true,
        centerPadding: '60px',
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

// ----------------index carousel end here ------------------
$(document).ready(function(){
	$('#action_menu_btn').click(function(){
		$('.action_menu').toggle();
	});
});
// -----------------Rec Home Happy Employee Start here -----------------
$('.our-happy-emp-slider-parent').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    arrows: false,
    responsive: [
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
// -----------------Rec Home Happy Employee End here -------------------
// ============================Make Your Profile start here=============================
var currentStep = 1;
var updateProgressBar;

function displayStep(stepNumber) {
    if (stepNumber >= 1 && stepNumber <= 4) {
        $(".step-" + currentStep).hide();
        $(".step-" + stepNumber).show();
        currentStep = stepNumber;
        updateProgressBar();
    }
}

// $(document).ready(function () {
//     $('#multi-step-form').find('.step').slice(1).hide();

//     $(".next-step").click(function () {
//         if (currentStep < 4) {
//             $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
//             currentStep++;
//             setTimeout(function () {
//                 $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
//                 $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
//                 updateProgressBar();
//             }, 500);

//         }
//     });

//     $(".prev-step").click(function () {
//         if (currentStep > 1) {
//             $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
//             currentStep--;
//             setTimeout(function () {
//                 $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
//                 $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
//                 updateProgressBar();
                
//             }, 500);
//         }
//     });

//     updateProgressBar = function () {
//         var progressPercentage = ((currentStep - 1) / 3) * 100;
//         $(".progress-bar").css("width", progressPercentage + "%");
//     }

// });
$(document).ready(function () {
    $(".job-role-hide-show").hide();
    // $(".more-job-btn-p-tag").click(function(){
    //     $(".job-role-hide-show").show();
        
    // });
    $(".more-job-btn-p-tag").click(function(){
        // $(".job-role-hide-show").show();
        $(".more-span-tag").text($(".more-span-tag").text() == 'More' ? 'Less' : 'More'); 
        $(".job-role-hide-show").slideToggle("slow");
    
      });
});