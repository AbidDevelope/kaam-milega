var swiper = new Swiper(".home-slider .mySwiper", {
    slidesPerView: "3",
    autoHeight: true,
    spaceBetween: 30,
    loop:true,
     navigation: {
        nextEl: ".swiper-custom-next2",
        prevEl: ".swiper-custom-prev2"
      },
    breakpoints: {
      320: {
          slidesPerView: 1,
          spaceBetween: 5,
        },
      640: {
        slidesPerView: 1,
        spaceBetween: 5,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });


  var swiper = new Swiper(".sponsors-slider", {
    slidesPerView: "5",
    autoHeight: true,
    // centeredSlides: true,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".swiper-custom-next",
        prevEl: ".swiper-custom-prev"
      },

    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 40,
        },
      },

  });

  var swiper = new Swiper(".Testimonials-slider", {
   slidesPerView: "2",
    autoHeight: true,
    // centeredSlides: true,
    spaceBetween: 25,
    loop: true,
      navigation: {
        nextEl: ".swiper-custom-next1",
        prevEl: ".swiper-custom-prev1"
      },

    breakpoints: {
      320: {
          slidesPerView: 1,
          spaceBetween: 25,
        },


      1024: {
        slidesPerView: 2,
        spaceBetween: 25,
      },
    },


  });


  var swiper = new Swiper(".memberslider", {
    slidesPerView:3,
    spaceBetween: 15,
    slidesPerColumn: 2,
    slidesPerColumnFill: 'Column',
    slidesPerGroup: 2,
    // grid: {
    //   rows: "2",
    // },
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      320: {
          slidesPerView: 1,
          spaceBetween: 12,
        },

      768: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
    },
  });



 var swiper = new Swiper(".newSwiper", {
        slidesPerView: 3,
        loop:true,
        grid: {
          rows: 2,
        },
        spaceBetween: 30,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
         breakpoints: {
          320: {
              slidesPerView: 1,
              spaceBetween: 12,
            },

          768: {
            slidesPerView: 2,
            spaceBetween: 15,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
        },
      });


 // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }


        var counted = 0;
        $(window).scroll(function() {

          var oTop = $('#counter').offset().top - window.innerHeight;
          if (counted == 0 && $(window).scrollTop() > oTop) {
            $('.count').each(function() {
              var $this = $(this),
                countTo = $this.attr('data-count');
              $({
                countNum: $this.text()
              }).animate({
                  countNum: countTo
                },

                {

                  duration: 4000,
                  easing: 'swing',
                  step: function() {
                    $this.text(Math.floor(this.countNum));
                  },
                  complete: function() {
                    $this.text(this.countNum);
                    //alert('finished');
                  }

                });
            });
            counted = 1;
          }

        });