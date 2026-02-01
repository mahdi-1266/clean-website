// Home banner
  document.addEventListener("DOMContentLoaded", function () {
      if ($('.splide').length > 0){
    new Splide(".splide", {
    type: 'fade',
    rewind: true,
    autoplay: false,
    interval: 3000,
    speed: 1000,
    pauseOnHover: true,
    arrows: true,
    pagination: false,
  }).mount();
}
});

//Contact Form validate  
  $("#contactForm").validate({
    rules: {
          u_fname:{required: true}, 
          u_lname:{required: true}, 
          u_email:{required: true}, 
          u_number: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength: 10
          },
          u_message:{required: true},  
        },
        messages: {
          u_fname:{required: "Please Enter Your First Name"}, 
          u_lname:{required: "Please Enter Your Last Name"}, 
          u_email:{required: "Please Enter Your Email"}, 
          u_number: {
            required: "Please Enter Your phone",
            digits: "Only Numeric Digits are allowed",
            minlength: "Phone Must be Exactly 10 Digits",
            maxlength: "Phone Must be Exactly 10 Digits"
          },
          u_message:{required: "Please Enter Your Message"}, 
        },
        errorElement: "div"
  }); 

    if($("#careers-form").length > 0){
      $("#careers-form").validate({
        rules: {
          i_name:{required: true}, 
          i_phone: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength: 10
          },
          i_email:{required: true},
          position:{required: true},
          i_message:{required: true}, 
        },
        messages: {
          i_phone: {
            required: "Please Enter Your phone",
            digits: "Only Numeric Digits are allowed",
            minlength: "Phone Must be Exactly 10 Digits",
            maxlength: "Phone Must be Exactly 10 Digits"
          },
          i_name:{required: "Please Enter Your Name"}, 
          i_email:{required: "Please Enter Your Email"},
          position:{required: "Please Enter Position You Applied For"},
          i_message:{required: "Please Enter Your Message"}, 
        },
        errorElement: "div"
      });
    }


  // offcanvas menu close
  $('.nav-link').on( "click", function(){
    $('.close').click(); 
  }); 

  // back to top
  if($("#backtotop").length > 0){
    var btn = $('#backtotop');
    $(window).scroll(function () {
      if ($(window).scrollTop() > 300) {
        btn.addClass('show');
      } else {
        btn.removeClass('show');
      }
    });
    btn.on('click', function scrollToTop(e) {
      window.scrollTo(0, 0);
    });
  }

  // dark & light mode
var togButton = document.getElementById("btnSwitch");
var currThemeMode = localStorage.getItem("cs_dark");

// Initial load
if (!currThemeMode || currThemeMode === 'false') {
  document.documentElement.setAttribute("data-cs-theme", "cs_light");
  togButton.innerHTML = "<span class='mode-icon-bg'><i class='fa fa-moon'></i></span>";
} else {
  document.documentElement.setAttribute("data-cs-theme", "cs_dark");
  togButton.innerHTML = "<span class='mode-icon-bg'><i class='fa fa-sun'></i></span>";
}

// Toggle event
togButton.addEventListener("click", toggle);

function toggle() {
  var currThemeMode = localStorage.getItem("cs_dark");
  if (currThemeMode === null) currThemeMode = "false";
  setTheme(currThemeMode);
}

function setTheme(currThemeMode) {
  if (currThemeMode === "true" || currThemeMode === true) {
    document.documentElement.setAttribute("data-cs-theme", "cs_light");
    togButton.innerHTML = "<span class='mode-icon-bg'><i class='fa fa-moon'></i></span>";
    localStorage.setItem("cs_dark", "false");
  } else {
    document.documentElement.setAttribute("data-cs-theme", "cs_dark");
    togButton.innerHTML = "<span class='mode-icon-bg'><i class='fa fa-sun'></i></span>";
    localStorage.setItem("cs_dark", "true");
  }
}

// Get the current year
$(document).ready(function () {
  const currentYear = new Date().getFullYear();
  $("#currentYear").text(currentYear);
});

  // email success/fail message
  window.onload = function () {
    var successMessage = localStorage.getItem("successMessage");
    var errorMessage = localStorage.getItem("emailfailed");

    if (successMessage) {
        // Display the success message in a Bootstrap alert
        var alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-success alert-dismissible fade show position-absolute top-0 start-50 translate-middle-x alertmsg';
        alertDiv.role = 'alert';
        alertDiv.innerHTML = successMessage +
            '<button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>';
        document.body.prepend(alertDiv);

        // Remove the success message from localStorage after displaying it
        localStorage.removeItem("successMessage");
    }
    else if(errorMessage) {
      // Display the success message in a Bootstrap alert
      var alertDiv = document.createElement('div');
      alertDiv.className = 'alert alert-danger alert-dismissible fade show position-absolute top-0 start-50 translate-middle-x alertmsg';
      alertDiv.role = 'alert';
      alertDiv.innerHTML = errorMessage +
          '<button type="button" class="btn-close p-3" data-bs-dismiss="alert" aria-label="Close"></button>';
      document.body.prepend(alertDiv);

      // Remove the success message from localStorage after displaying it
      localStorage.removeItem("emailfailed");
    }
  };

    document.addEventListener('DOMContentLoaded', function () {
        if ($('#portfolio-slider').length > 0){
      new Splide('#portfolio-slider', {
        type: 'loop',
        perPage: 3,
        gap: '1rem',
        arrows: true,
        pagination: false,
        breakpoints: {
          992: { perPage: 2 },
          576: { perPage: 1 },
        },
      }).mount();

      new Splide('#blog-slider', {
        type: 'loop',
        perPage: 3,
        gap: '1rem',
        arrows: true,
        pagination: false,
        breakpoints: {
          992: { perPage: 2 },
          576: { perPage: 1 },
        },
      }).mount();
    }
    });

document.addEventListener('DOMContentLoaded', function () {
  if ($('.testimonial-slider').length > 0) {
    new Splide('.testimonial-slider', {
      type: 'loop',
      pagination: false,
      perPage: 3,
      perMove: 1,
      gap: '30px',
      autoplay: true,
      pauseOnHover: true,
      breakpoints: {
        992: { perPage: 2 },
        576: { perPage: 1 }
      }
    }).mount();
  }
}); 

  // --- AOS init ---
AOS.init({ duration: 700, once: true, offset: 60 });

$(document).ready(function() {
    $('#appointmentform').validate({
       rules: {
          a_name:{required: true}, 
          a_phone: {
            required: true,
            digits: true,
            minlength: 10,
            maxlength: 10
          },
          a_email:{required: true, email: true},
          a_services:{required: true},
          a_date:{required: true}, 
          a_time:{required: true}, 
          a_message:{required: true}, 

        },
        messages: {
          a_name:{required: "Please Enter Your Name"}, 
          a_phone: {
            required: "Please Enter Your phone",
            digits: "Only Numeric Digits are allowed",
            minlength: "Phone Must be Exactly 10 Digits",
            maxlength: "Phone Must be Exactly 10 Digits"
          },
          a_email:{required: "Please Enter Your Email"},
          a_services:{required: "Please Select Service"},
          a_date:{required: "Please Enter Date"}, 
          a_time:{required: "Please Enter Time"},
          a_message:{required: "Please Enter Your Message"}
        },
            errorElement:'div'
    });
});

    flatpickr("#a_date", {
        dateFormat: "Y-m-d",
        minDate: "today",
        disableMobile: true
    });

    flatpickr("#a_time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: "h:i K",
        time_24hr: false,
        disableMobile: true
    })


// ===== Preloader JS =====
window.addEventListener("load", () => {
  setTimeout(() => {
    document.getElementById("preloader").classList.add("fade-out");
  }, 3000);
});

  // Initialize Glightbox
  const lightbox = GLightbox({
    selector: '.glightbox',
    touchNavigation: true,
    loop: true,
    closeButton: true,
  });


$(document).ready(function () {
  $("#searchForm").validate({
    rules: {
      search: {
        required: true,
        minlength: 3
      }
    },
    messages: {
      search: {
        required: "Please search blogs",
        minlength: "Please enter at least 3 characters"
      }
    },
    errorPlacement: function (error, element) {
      error.insertAfter(element.closest(".input-group"));
    },
    errorElement: "div"
  });
});



$(document).ready(function () {
  $("#comment-form").validate({
    rules: {
      name: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      comment: {
        required: true,
        minlength: 5
      }
    },

    messages: {
      name: {
        required: "Please enter your name",
        minlength: "Name must be at least 2 characters"
      },
      email: {
        required: "Please enter your email",
        email: "Please enter a valid email address"
      },
      comment: {
        required: "Please write a comment",
        minlength: "Comment must be at least 5 characters"
      }
    },

    errorElement: "div",
    submitHandler: function (form) {
      form.submit();
    }
  });
});
