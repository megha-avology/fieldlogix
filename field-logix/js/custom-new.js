// navbar scroll
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    var header = jQuery("#header");
    if (jQuery(window).scrollTop() > 0) {
      header.css("background-color", "#fff");
      header.css("box-shadow", "0 3px 5px rgb(0 0 0/20%)");
    } else {
      header.css("background-color", "transparent");
      header.css("box-shadow", "none");
    }
  });
});


//   capability slider
jQuery(document).ready(function () {
  var slider = jQuery(".capability-slider");
  if (slider.length) {
    slider.slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      arrows: false,
      dots: false,
      responsive: [
        {
          breakpoint: 1280,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });

    jQuery(".next").on("click", function () {
      slider.slick("slickPrev");
    });

    jQuery(".prev").on("click", function () {
      slider.slick("slickNext");
    });
  }
});

jQuery(document).ready(function () {
  var slider2 = jQuery(".capability-slider-2");

  slider2.slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 3.5,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  jQuery(".next").on("click", function () {
    slider2.slick("slickPrev");
  });

  jQuery(".prev").on("click", function () {
    slider2.slick("slickNext");
  });
});

// user

jQuery(document).ready(function () {
  var slider3 = jQuery(".comment-box");
  slider3.slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    dots: false,
  });

  function showComment(index) {
    slider3.slick("slickGoTo", index);

    jQuery(".user-active").removeClass("user-active");
    jQuery(".user").eq(index).addClass("user-active");
  }

  showComment(0);

  function updateActiveUser() {
    var currentIndex = slider3.slick("slickCurrentSlide");
    jQuery(".user-active").removeClass("user-active");
    jQuery(".user").eq(currentIndex).addClass("user-active");
  }

  slider3.on("afterChange", function (event, slick, currentSlide) {
    updateActiveUser();
  });

  jQuery(".user").click(function () {
    jQuery(".user-active").removeClass("user-active");
    jQuery(this).addClass("user-active");
    showComment(jQuery(this).index());
  });

  jQuery(".next-comment").on("click", function () {
    slider3.slick("slickNext");
    updateActiveUser();
  });

  jQuery(".prev-comment").on("click", function () {
    slider3.slick("slickPrev");
    updateActiveUser();
  });
});

// tour

jQuery(document).ready(function () {
  jQuery(".tour-type").click(function () {
    jQuery(".tour-type").removeClass("type-active");
    jQuery(this).addClass("type-active");

    var tab_id = jQuery(this).attr("data-tab");
    jQuery(".tab-content").removeClass("current");
    jQuery("#" + tab_id).addClass("current");
  });
});

// partner
// jQuery(document).ready(function () {
//   var slider = jQuery(".partner-slider");
// console.log('testing autoplay')
//   slider.slick({
//     infinite: true,
//     slidesToShow: 4.7,
//     slidesToScroll: 1,
//     autoplay: true,
//     arrows: false,
//     dots: false,
//     responsive: [
//       {
//         breakpoint: 1280,
//         settings: {
//           slidesToShow: 3.8,
//           slidesToScroll: 1,
//         },
//       },
//       {
//         breakpoint: 768,
//         settings: {
//           slidesToShow: 1.8,
//           slidesToScroll: 1,
//         },
//       },
//     ],
//   });
// });

// blogs
jQuery(document).ready(function () {
  var slider4 = jQuery(".blog-slider");

  slider4.slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  jQuery(".prev-blog").on("click", function () {
    slider4.slick("slickPrev");
  });

  jQuery(".next-blog").on("click", function () {
    slider4.slick("slickNext");
  });
});

// nav bar
jQuery(document).ready(function () {
  jQuery(".hamburger button").click(function () {
    jQuery(this).toggleClass("active");
    jQuery("#navbar").toggleClass("active");
    if (jQuery(this).hasClass("active")) {
      jQuery("html").addClass("overflow");
    } else {
      jQuery("html").removeClass("overflow");
    }
  });
});


// successors
jQuery(document).ready(function ($) {
  var slider5 = jQuery(".success-slide-content");

  slider5.slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    dots: false,
  });

  function showSuccessor(index) {
    slider5.slick("slickGoTo", index);
    jQuery(".active-successor").removeClass("active-successor");
    jQuery(".successor").eq(index).addClass("active-successor");
  }

  showSuccessor(0);

  function updateSuccessor() {
    var currentIndex = slider5.slick("slickCurrentSlide");
    jQuery(".active-successor").removeClass("active-successor");
    jQuery(".successor").eq(currentIndex).addClass("active-successor");
  }

  slider5.on("afterChange", function (event, slick, currentSlide) {
    updateSuccessor();
  });

  jQuery(".successor").click(function () {
    var index = jQuery(this).index();
    showSuccessor(index);
  });

  jQuery(".next-successor").on("click", function () {
    slider5.slick("slickNext");
  });

  jQuery(".prev-successor").on("click", function () {
    slider5.slick("slickPrev");
  });
});

//faqs

// jQuery(document).ready(function () {
//   jQuery(".Question").click(function () {
//     var jQueryqaContent = jQuery(this).closest(".QA-content");
//     var jQueryanswer = jQueryqaContent.find(".answer");
//     var jQueryImg = jQuery(this).find("img");

//     jQueryanswer.slideToggle();

//     jQuery(this).toggleClass("question-active");

//     var currentSrc = jQueryImg.attr("src");
//     var newSrc = currentSrc.includes("plus.svg") ? "https://fieldlogix.com/wp-content/uploads/2024/03/minus.svg" : "https://fieldlogix.com/wp-content/uploads/2024/03/plus.svg";
//     jQueryImg.attr("src", newSrc);

//     jQuery(".QA-content").not(jQueryqaContent).find(".answer").slideUp();
//     jQuery(".Question").not(this).removeClass("question-active");
//     jQuery(".Question").not(this).find("img").attr("src", "https://fieldlogix.com/wp-content/uploads/2024/03/plus.svg");
//   });
// });


jQuery(document).ready(function ($) {
  // Remove any previously attached click handlers to avoid duplicates
  jQuery(".Question").off("click").on("click", function () {
    var jQueryqaContent = jQuery(this).closest(".QA-content");
    var jQueryanswer = jQueryqaContent.find(".answer");
    var jQueryImg = jQuery(this).find("img");

    // Check if the current answer is already visible
    var isAnswerVisible = jQueryanswer.is(":visible");

    // Hide all other answers and reset their questions
    jQuery(".QA-content").not(jQueryqaContent).find(".answer").slideUp();
    jQuery(".Question").not(this).removeClass("question-active");
    jQuery(".Question").not(this).find("img").attr("src", "https://fieldlogix.com/wp-content/uploads/2024/03/plus.svg");

    // Toggle the current answer based on its visibility
    if (isAnswerVisible) {
      jQueryanswer.slideUp();
      jQuery(this).removeClass("question-active");
      jQueryImg.attr("src", "https://fieldlogix.com/wp-content/uploads/2024/03/plus.svg");
    } else {
      jQueryanswer.slideDown();
      jQuery(this).addClass("question-active");
      jQueryImg.attr("src", "https://fieldlogix.com/wp-content/uploads/2024/03/minus.svg");
    }
  });
});




//footer dropdown
function toggleDropdown(element) {
  // console.log('element', element)
  var isActive = jQuery(element).find(".dropdown-arrow").hasClass("rotate-up");
  jQuery(".dropdown-arrow").removeClass("rotate-up");

  if (!isActive) {
    jQuery(element).find(".dropdown-arrow").toggleClass("rotate-up");
  }
}

// fuel slider

jQuery(document).ready(function () {
  var fuel = jQuery(".fuel-slider");

  fuel.slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1280,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
});

//dropdown menu
// jQuery(document).ready(function () {
//   jQuery(".sub-menu").hide();
//   if (jQuery(window).width() <= 1279) {
//     jQuery("#mbl-dropdown > a img").click(function (e) {
//       e.preventDefault();
//       var jQuerymenu = jQuery(this).parent().siblings(".sub-menu");
//       jQuery(".sub-menu").not(jQuerymenu).slideUp(300);
//       jQuerymenu.slideToggle(300);
//     });
//   }

//   jQuery(
//     "li.dropdown-solution, li.dropdown-benefits, li.dropdown-about, li.dropdown-resources"
//   ).hover(
//     function () {
//       if (jQuery(window).width() > 1279) {
//         jQuery(this).find(".sub-menu").stop(true, true).slideDown(500);
//       }
//     },
//     function () {
//       if (jQuery(window).width() > 1279) {
//         jQuery(this).find(".sub-menu").stop(true, true).slideUp(500);
//       }
//     }
//   );

//   jQuery(document).on("click", function (event) {
//     if (
//       !jQuery(event.target).closest(".sub-menu").length &&
//       !jQuery(event.target).closest("#mbl-dropdown > a img").length
//     ) {
//       jQuery(".sub-menu").slideUp(500);
//     }
//   });
// });

//box area
// jQuery(document).ready(function () {
//   jQuery(".box-area").first().show();

//   jQuery(".device-tabbing p").click(function () {
//     jQuery(".device-tabbing p").removeClass("active-track");

//     jQuery(this).addClass("active-track");

//     jQuery(".box-area").hide();

//     jQuery(".box-area").eq(jQuery(this).index()).show();
//   });
// });





// plans
// jQuery(document).ready(function () {
//   jQuery(".features").click(function () {
//     jQuery(this).siblings(".plan-box-inner").find(".hidden-plans").slideToggle();
//   });
// });
//commented on 07th Aug after client feedback
// jQuery(document).ready(function () {
//   jQuery(".features").click(function () {
// 	  console.log('clicked');
//     jQuery(this).siblings(".plan-box-inner").find(".hidden-plans").slideToggle();
// 	  console.log('opened');
//     if (jQuery(this).text().trim() === "See All Features") {
//       jQuery(this).text("View Less Features");
//     } else {
//       jQuery(this).text("See All Features");
//     }
//   });
// });



//referal form

jQuery(document).ready(function () {
  function updateAssistDivs(step) {
    if (step === 1) {
      jQuery(".assist").show();
      jQuery(".assist-2").hide();
    } else if (step === 2) {
      jQuery(".assist").hide();
      jQuery(".assist-2").show();
    }
  }

  jQuery("#progressBar").val(50);

  jQuery("#resume-submit").click(function () {
    jQuery("#step-1").hide();
    jQuery("#second-step").show();

    jQuery("#progressBar").val(100);

    jQuery("#stepText").text("Step 2/2");

    jQuery(".step-counter p").text("100%");

    jQuery("#resume-submit").hide();

    updateAssistDivs(2);
  });

  jQuery("#previous-step").click(function () {
    jQuery("#second-step").hide();
    jQuery("#step-1").show();

    jQuery("#progressBar").val(50);

    jQuery("#stepText").text("Step 1/2");

    jQuery(".step-counter p").text("50%");

    jQuery("#resume-submit").show();

    updateAssistDivs(1);
  });

  updateAssistDivs(1);
});

// event
jQuery(document).ready(function () {
  jQuery('#event-tabbing p:first-child()').addClass("active-track");
  jQuery(".event-show").first().show();

  jQuery("#event-tabbing p").click(function () {
    jQuery("#event-tabbing p").removeClass("active-track");

    jQuery(this).addClass("active-track");

    jQuery(".event-show").hide();

    jQuery(".event-show").eq(jQuery(this).index()).show();
  });
});

//roi gps calculator

jQuery(document).ready(function () {
  const progressBarROI = jQuery(".roi-progress");
  let currentStep = 1;

  jQuery(".gps-calculator-form").not(":first").hide();
  progressBarROI.first().val(20);

  jQuery(".contact-submit").click(function () {
    const currentForm = jQuery(this).closest(".gps-calculator-form");
    currentForm.hide();

    if (jQuery(this).is("#roi-next")) {
      currentForm.next(".gps-calculator-form").show();
      currentStep++;
    }

    updateProgress(currentStep);
  });

  jQuery(".previous-step").click(function () {
    const currentForm = jQuery(this).closest(".gps-calculator-form");
    currentForm.hide();
    currentForm.prev(".gps-calculator-form").show();
    currentStep--;

    updateProgress(currentStep);
  });

  jQuery(".skip").click(function () {
    jQuery(".gps-calculator-form").each(function () {
      const currentForm = jQuery(this);
      const nextForm = currentForm.next(".gps-calculator-form");

      if (!nextForm.is(":visible")) {
        currentForm.hide();
        nextForm.show();
        currentStep++;
        updateProgress(currentStep);
        return false;
      }
    });
  });

  function updateProgress(step) {
    const totalSteps = jQuery(".gps-calculator-form").length;
    const progress = step * (100 / totalSteps);
    progressBarROI.val(progress);
  }
});

//history slider
jQuery(document).ready(function () {
  var hisslide = jQuery(".history-slider");

  hisslide.slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  jQuery(".his-right-arrow").on("click", function () {
    hisslide.slick("slickNext");
    updateActiveUser();
  });

  jQuery(".his-left-arrow").on("click", function () {
    hisslide.slick("slickPrev");
    updateActiveUser();
  });
});

// press release pagination
jQuery(document).ready(function () {
  jQuery(".page-tabs p").click(function () {
    jQuery(".page-tabs p").removeClass("active-page");
    jQuery(this).addClass("active-page");
  });
});

jQuery(document).ready(function () {
  jQuery(".page-numbers li").click(function () {
    jQuery(".page-numbers li").removeClass("active-page-number");
    jQuery(this).addClass("active-page-number");
  });
});

//search
// jQuery(document).ready(function () {
//   jQuery(".head-button img").click(function () {
//     jQuery("html").addClass("no-scroll");

//     jQuery("<div class='popup-overlay search-box'></div>").appendTo("body");

//     jQuery("<div class='popup-container'></div>")
//       .css({
//         padding: "20px",
//         width: "50%",
//         margin: "auto",
//         "box-sizing": "border-box",
//         color: "#d0d0d1",
//         "text-align": "center",
//       })
//       .appendTo(".popup-overlay")
//       .html(
//         '<input type="text" id="searchInput" placeholder="Search here" style="border-bottom: 1px solid rgba(255, 255, 255, 0.07); width: 100%; margin: auto; padding: 20px; box-sizing: border-box; background: transparent url(images/search-popup.svg) no-repeat center right;">'
//       );

//     function changeBackgroundImage() {
//       var inputText = jQuery("#searchInput").val().trim();
//       var imgSrc =
//         inputText.length > 0
//           ? "url(images/close-search.svg)"
//           : "url(images/search-popup.svg)";
//       jQuery("#searchInput").css("background-image", imgSrc);
//     }

//     jQuery("#searchInput").on("input", changeBackgroundImage);

//     jQuery(".popup-container").on("click", "#searchInput", function (event) {
//       event.stopPropagation();
//     });

//     jQuery(".popup-container").on("click", "#searchInput", function () {
//       var inputText = jQuery(this).val().trim();
//       if (inputText.length > 0) {
//         jQuery(this).val("");
//         changeBackgroundImage();
//       }
//     });

//     jQuery(".popup-overlay").click(function () {
//       jQuery(this).remove();

//       jQuery("html").removeClass("no-scroll");
//     });
//   });

//   jQuery(".head-button img").css("cursor", "pointer");
// });

// roi popup
jQuery(document).ready(function () {
  var finalRoiButton = jQuery("#final-roi");
  var popup = jQuery(".roi-final-popup-box");
  var closeButton = jQuery(".popup-close");
  finalRoiButton.on("click", function () {
    popup.css({
      display: "block",
      position: "fixed",
      top: 0,
      left: 0,
      width: "100%",
      height: "100%",
      "background-color": "#fff",
      "z-index": 9999,
      "overflow-y": "auto",
    });
  });

  closeButton.on("click", function () {
    popup.css("display", "none");
  });
});

//fraud
jQuery(document).ready(function () {
  var finalRoiButton = jQuery("#final-fraud");

  var popup = jQuery(".roi-final-popup-box");

  var closeButton = jQuery(".popup-close");

  finalRoiButton.on("click", function () {
    popup.css({
      display: "block",
      position: "fixed",
      top: 0,
      left: 0,
      width: "100%",
      height: "100%",
      "background-color": "#fff",
      "z-index": 9999,
      "overflow-y": "auto",
    });
  });

  closeButton.on("click", function () {
    popup.css("display", "none");
  });
});

// accident
jQuery(document).ready(function () {
  var finalRoiButton = jQuery(".accident");

  var popup = jQuery(".roi-final-popup-box");

  var closeButton = jQuery(".popup-close");

  finalRoiButton.on("click", function () {
    popup.css({
      display: "block",
      position: "fixed",
      top: 0,
      left: 0,
      width: "100%",
      height: "100%",
      "background-color": "#fff",
      "z-index": 9999,
      "overflow-y": "auto",
    });
  });

  closeButton.on("click", function () {
    popup.css("display", "none");
  });
});

// fuel

jQuery(document).ready(function () {
  const progressFuel = jQuery(".fuel-progress");
  let currentStep = 1;
  const totalSteps = jQuery(".fuel-cost-calc").length;

  jQuery(".fuel-cost-calc").not(":first").hide();
  progressFuel.val(33);

  jQuery(".fuel-next").click(function () {
    const currentForm = jQuery(this).closest(".fuel-cost-calc");
    currentForm.hide();

    if (jQuery(this).hasClass("fuel-next")) {
      currentStep++;
      const nextForm = currentForm.next(".fuel-cost-calc");
      if (nextForm.length) {
        nextForm.show();
      }
    }

    updateProgress(currentStep);
  });

  jQuery(".previous-step").click(function () {
    const currentForm = jQuery(this).closest(".fuel-cost-calc");
    currentForm.hide();
    const prevForm = currentForm.prev(".fuel-cost-calc");
    if (prevForm.length) {
      prevForm.show();
      currentStep--;
    }

    updateProgress(currentStep);
  });

  function updateProgress(step) {
    const progress = (step / totalSteps) * 100;
    progressFuel.val(progress);
  }
});

//fuel final

jQuery(document).ready(function () {
  var finalRoiButton = jQuery(".fuel-final");

  var popup = jQuery(".roi-final-popup-box");

  var closeButton = jQuery(".popup-close");

  finalRoiButton.on("click", function () {
    popup.css({
      display: "block",
      position: "fixed",
      top: 0,
      left: 0,
      width: "100%",
      height: "100%",
      "background-color": "#fff",
      "z-index": 9999,
      "overflow-y": "auto",
    });
  });

  closeButton.on("click", function () {
    popup.css("display", "none");
  });
});

// orange button

jQuery(document).ready(function () {
  jQuery("a:containsIgnoreCase('See how we transform fleets')")
    .css("background-color", "#FF7300")
    .hover(
      function () {
        jQuery(this).css({
          "background-color": "transparent",
          border: "1px solid #FF7300",
          color: "#FF7300",
        });
      },
      function () {
        jQuery(this).css({
          "background-color": "#FF7300",
          border: "none",
          color: "#fff",
        });
      }
    );
});

jQuery.expr[":"].containsIgnoreCase = function (n, i, m) {
  return jQuery(n).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
};


jQuery(document).ready(function () {
  var slider6 = jQuery(".achievements");

  slider6.slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000, // time between slides (1 second)
    speed: 200, // transition speed (0.4 seconds)
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 500,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

});





// (function($) {
//   $('#s, [name="cat"]').on('change', function() {
//       $('#searchform').submit();
//   });
// })(jQuery);


//Function to submit the form when input values change
// document.addEventListener('DOMContentLoaded', function () {
//   document.getElementById('s').addEventListener('input', function () {
//     document.getElementById('searchform').submit(); // Submit the form when input value changes
//   });
// })

document.addEventListener('DOMContentLoaded', function () {
  var searchInput = document.getElementById('s');
  var searchForm = document.getElementById('searchform');

  if (searchInput && searchForm) {
    searchInput.addEventListener('input', function () {
      searchForm.submit(); // Submit the form when input value changes
    });
  }
});

// jQuery(document).ready(function($) {
//     $('#searchform').on('change', 'select', function(e) {
//         e.preventDefault(); // Prevent default form submission

//         var selectedIndustry = $('select[name="industries"]').val();
//         var selectedRegion = $('select[name="regions"]').val();

//         // AJAX request
//         $.ajax({
//             url: ajax_object.ajax_url,
//             type: 'post',
//             data: {
//                 action: 'custom_taxonomy_search',
//                 industry: selectedIndustry,
//                 region: selectedRegion,
//             },
//             success: function(response) {
//                 // Your custom query here to retrieve posts based on selected taxonomies
//     // Example: $args = array( 'post_type' => 'post', 'tax_query' => array( ... ) );
//     // $posts = new WP_Query($args);

//     // Example: Output results
//     // while($posts->have_posts()) {
//     //     the_post();
//     //     echo '<h2>' . get_the_title() . '</h2>';
//     // }

//     // Dummy response
//                 $('#search-results').html(response);
//             }
//         });
//     });
// });



jQuery(document).ready(function ($) {

  function loadPosts(page = 1) {
    $.ajax({
      type: 'POST',
      url: ajax_params.ajax_url,
      data: {
        action: 'custom_ajax_search',
        industries: $('#industries').val(),
        regions: $('#regions').val(),
        paged: page
      },
      beforeSend: function () {
        //$('#search-results').html('<p>Loading...</p>');
      },
      success: function (response) {
        $('#search-results').html(response);
        $('.blog-upper-box, .all-blogs-loop').hide();
      }
    });
  }

  // Filter change
  $('#industries, #regions').on('change', function () {
    loadPosts(1);
  });

  // Pagination click
  $(document).on('click', '.ajax-pagination a', function (e) {
    e.preventDefault();
    var page = $(this).data('page');
    loadPosts(page);
  });

});




jQuery(document).ready(function ($) {
  $('#industries, #regions').change(function () {
    $('#searchform').submit();
    $('.blog-upper-box').hide();
    $('.all-blogs-loop').hide();
    $('.page-navigation').hide();
  });
});

// jQuery(function () {
// 		$(".QA-content").slice(0, 6).show();
// 		$("body").on('click touchstart', '.load-more', function (e) {
// 			e.preventDefault();
// 			$(".QA-content:hidden").slice(0, 3).slideDown();
// 			if ($(".QA-content:hidden").length == 0) {
// 				$(".load-more").css('visibility', 'hidden');
// 			}
// 			$('html,body').animate({
// 				scrollTop: $(this).offset().top
// 			}, 500);
// 		});
// 	});
jQuery(function () {
  $(".QA-content").slice(0, 6).show();
  $("body").on('click touchstart', '.load-more', function (e) {
    e.preventDefault();
    $(".QA-content:hidden").slice(0, 3).slideDown();
    if ($(".QA-content:hidden").length == 0) {
      $(".load-more").css('visibility', 'hidden');
    }
    // Remove the scrolling behavior
  });
});



jQuery(document).ready(function () {
  // Show search popup when .head-button img is clicked
  jQuery(".head-button img").click(function () {
    jQuery('.search-box').addClass('show-search');
    jQuery('html').addClass('search-active');
  });

  // Hide search popup when clicking outside the .search-box
  jQuery('.search-box').click(function () {
    if (jQuery('.search-box').hasClass('show-search')) {
      var mouse_is_inside = false;

      jQuery('#searchheader').hover(function () {
        mouse_is_inside = true;
      }, function () {
        mouse_is_inside = false;
      });

      jQuery("body").mouseup(function () {
        if (!mouse_is_inside) jQuery('.search-box').removeClass('show-search');
        if (!mouse_is_inside) jQuery('html').removeClass('search-active');
      });
    }
  });
});









jQuery(document).ready(function () {
  // Function to handle tabbing
  function handleTabbing() {
    jQuery('#event-tabbing p:first-child').addClass("active-track");
    jQuery(".event-show").first().show().addClass('event-active');
    handleLoadMore(jQuery('.event-show').first()); // Adding this line to ensure Load More works on first tab
    jQuery(".event-active .grid-wrapper div").slice(0, 6).show();

    jQuery("#event-tabbing p").click(function () {
      var index = jQuery(this).index();
      jQuery("#event-tabbing p").removeClass("active-track");
      jQuery(this).addClass("active-track");
      jQuery('.event-show').removeClass('event-active');
      jQuery(".event-show").eq(index).addClass('event-active');
      jQuery(".event-show").hide();
      jQuery(".event-show").eq(index).show();

      // Re-apply "Load More" functionality for the current tab
      handleLoadMore(jQuery(".event-show").eq(index));
    });
  }

  // Function to handle load more
  function handleLoadMore(context) {
    context.find(".grid-wrapper div").slice(0, 6).show();
    context.find("#load").off('click').on('click', function (e) {
      e.preventDefault();
      context.find(".grid-wrapper div:hidden").slice(0, 6).show();
      if (context.find(".grid-wrapper div:hidden").length == 0) {
        context.find("#load").fadeOut('slow');
      }
      jQuery('html,body').animate({
        scrollTop: jQuery(this).offset().top
      }, 1500);
    });
  }

  // Execute tabbing function
  handleTabbing();
});




jQuery('.device-tabbing p:first-child').addClass('active-track current');

jQuery(document).ready(function ($) {
  $(".box-area").first().show();

  $(".device-tabbing p").click(function () {
    $(".device-tabbing p").removeClass("active-track");

    $(this).addClass("active-track");

    $(".box-area").hide();

    $(".box-area").eq($(this).index()).show();
  });
});







jQuery('.see-now-header').click(function () {
  jQuery('#navbar').removeClass('active');
  jQuery('html').removeClass('overflow');
})


// $('a').attr('target', '_blank');


// $(document).ready(function() { 
//   // Function to initialize slick for main slider
//   function initMainSlider() {
//       $('.slider-for').slick({
//           slidesToShow: 1,
//           slidesToScroll: 1,
//           arrows: false,
//           fade: true,
//           adaptiveHeight: true,
//           asNavFor: '.slider-nav'
//       });
//   }

//   // Initialize main slider on document ready
//   initMainSlider();

//   // Function to initialize slick for thumbnail slider
//   function initThumbnailSlider() {
//       $('.slider-nav').slick({
//           slidesToShow: 4,
//           slidesToScroll: 1,
//           asNavFor: '.slider-for',
//           dots: false,
//           centerMode: false,
//           focusOnSelect: true,
//           variableWidth: true,
//           arrows: true
//       });
//   }

//   // Initialize thumbnail slider on document ready
//   initThumbnailSlider();
// $('.tour-slider').hide();
// 	$('.tour-slider:first-child').show();
//   // Function to re-initialize sliders when tab is clicked
//   $('.tab-link').click(function(){
//       var tab_id = $(this).index();

//       // Remove current class from all tabs
//       $('.tab-link').removeClass('current');
//       // Add current class to clicked tab
//       $(this).addClass('current');

//       // Hide all slider containers
//       $('.tour-slider').hide();
//       // Show slider container corresponding to the clicked tab
//       $('#tab-' + (tab_id + 1)).show();

//       // Destroy existing main and thumbnail sliders
//       $('.slider-for').slick('unslick');
//       $('.slider-nav').slick('unslick');

//       // Re-initialize main and thumbnail sliders for the current tab
//       initMainSlider();
//       initThumbnailSlider();
//   });
// });



// new js
jQuery(document).ready(function ($) {
  // Function to initialize slick for main slider
  function initMainSlider() {
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      adaptiveHeight: true,
      asNavFor: '.slider-nav'
    });
  }

  // Function to initialize slick for thumbnail slider
  function initThumbnailSlider() {
    $('.slider-nav').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      centerMode: false,
      focusOnSelect: false,
      variableWidth: true,
      draggable: true,
      swipeToSlide: true,
      loop: false,
      infinite: false,
      arrows: true
    });

  }


  // Initialize both sliders on document ready
  initMainSlider();
  initThumbnailSlider();

  // Show the first tour slider by default
  $('.tour-slider').hide();
  $('.tour-slider:first-child').show();

  // Handle tab switching and re-initialize sliders
  $('.tab-link').click(function () {
    var tab_id = $(this).index();

    // Switch tab links
    $('.tab-link').removeClass('active1');
    $(this).addClass('active1');

    // Show relevant slider and hide others
    $('.tour-slider').hide();
    $('#tab-' + (tab_id + 1)).show();

    // Destroy and re-initialize sliders
    $('.slider-for').slick('unslick');
    $('.slider-nav').slick('unslick');

    initMainSlider();
    initThumbnailSlider();
  });

  // Handle thumbnail slide click to add 'active1' class
  $('.slider-nav').on('click', '.slick-slide', function (event) {
    // Remove 'active1' class from all slides and add to the clicked one
    $('.slider-nav .slick-slide').removeClass('active1');
    $(this).addClass('active1');

    // Get index of clicked slide and make the main slider slide go to that slide without moving thumbnails
    var index = $(this).data('slick-index');
    $('.slider-for').slick('slickGoTo', index, false);
  });
});




jQuery(document).ready(function ($) {
  if ($("body").hasClass("page-template-custom-page")) {
    $("#print_result_179-new").on("click", function (e) {
      e.preventDefault();

      // Extract the dynamic content from the section
      var dynamicContent = $(".fleet-para").html();

      // Print styles
      var printStyles = `
              <style>
                    body {
                        font-family: Arial, sans-serif;
                        margin: 0;
                        padding: 20px;
                        background: none;
                    }
                    .fleet-para {
                        width: 100%;
                        padding: 0;
                        margin: 0;
                    }
                    .fleet-para h3 {
                        width: 50%;
                        text-align: center;
                        margin-top: 10px;
                        font-weight: 500;
                    }
                    .fleet-para h2 {
                        text-align: left;
                        margin-bottom: 20px;
                    }

                    #print_result_179-new {
                        display: none;
                    }

                    .rslt-flx-new {
                        width: 100%;
                        display: flex;
                        flex-direction: column;
                    }

                    .flx-rgt {
                        display: flex;
                        flex-wrap: wrap;
                        flex-direction: row;
                        width: 80%;
                        margin: 0 auto;
                    }

                    .rslt-flx-new .flx-rgt {
                        flex-direction: row;
                    }

                    .rslt-flx {
                        display: flex;
                        justify-content: space-between;
                        flex-wrap: wrap;
                        align-items: flex-start;
                        width: 100%;
                    }

                    .page-id-47018 .result-clc .center, 
                    .page-id-47030 .result-clc .center, 
                    .page-id-46986 .result-clc .center {
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        text-align: center;
                    }

                    .page-id-47018 .result-clc .center h1, 
                    .page-id-47030 .result-clc .center h1, 
                    .page-id-46986 .result-clc .center h1 {
                        justify-content: center;
                        color: #036;
                    }

                    .main-print h4 {
                        display: none;
                    }

                    .page-id-47030 .new-sub-div {
                        width: 50%;
                        margin-top: 20px;
                        display: flex;
                        flex-direction: column;
                        gap: 10px;
                    }

                    .page-id-47030 .new-div h4 {
                        text-align: center !important;
                        display: block;
                        width: 100%;
                    }

                    .new-sub-div h4, .new-sub-div h2, .new-div h2 {
                        text-align: left;
                    }

                    .page-id-47030 .new-sub-div {
                        align-items: flex-start !important;
                        justify-content: flex-start !important;
                    }

                    .new-sub-div {
                        margin-left: 20px;
                    }

                    .clear-losess {
                        align-items: flex-start !important;
                        text-align: left !important;
                    }

                    .page-id-47030 .clear-losess {
                        align-items: flex-start !important;
                        text-align: left !important;
                    }

                    .page-id-47030 .clear-losess h2 {
                        text-align: left !important;
                    }

                    .page-id-47030 .fleet-para h2 {
                        text-align: left !important;
                    }
                </style>
            `;

      // Open a new print window
      var printWindow = window.open("", "_blank");
      printWindow.document.write(`
                <html>
                    <head>
                        ${printStyles}
                    </head>
                    <body>
                        <div class="fleet-para">
                            ${dynamicContent} 
                        </div>
                    </body>
                </html>
            `);

      printWindow.document.close();

      // Ensure styles are applied before printing
      setTimeout(function () {
        printWindow.focus();
        printWindow.print();
        printWindow.close();
      }, 500);
    });
  }
});



jQuery(document).ready(function ($) {
  // console.log('clicked:')
  if (jQuery(window).width() <= 767) {
    $(".links h4").click(function () {
      // console.log('clicked:', this)
      var jQueryul = jQuery(this).siblings("ul");
      jQuery(".links ul").not(jQueryul).slideUp();
      jQueryul.slideToggle();
    });
  }
});


if (jQuery(window).width() < 1280) {
  jQuery('.menu-item-has-children').addClass('mbl-dropdown');
  jQuery('.menu-item-has-children>a').append('<span class="dropdown-container"><img src="https://fieldlogix.com/wp-content/uploads/2024/03/mbl-dropdown-header.svg" alt="img"></span>');
}

jQuery('.dropdown-container').click(function () {
  var subMenu = jQuery(this).parent().siblings('.sub-menu');

  // Toggle 'active' class on the clicked dropdown-container
  jQuery(this).toggleClass('active');

  // Remove 'active' class from other dropdown-container elements
  jQuery('.dropdown-container').not(this).removeClass('active');

  // Check if sub-menu is visible
  if (subMenu.is(':visible')) {
    // If visible, slide up
    subMenu.slideUp();
  } else {
    // If not visible, slide up all sub-menus and then slide down this one
    jQuery('.sub-menu').slideUp();
    subMenu.slideDown();
  }
});

jQuery(document).ready(function () {
  var slider9 = jQuery("#partner-slider");
  // console.log('testing autoplay in footer with ID');
  slider9.slick({
    infinite: true,
    slidesToShow: 4.7,
    slidesToScroll: 1,
    autoplay: true,
    arrows: false,
    dots: false,
    responsive: [{
      breakpoint: 1280,
      settings: {
        slidesToShow: 3.8,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1.8,
        slidesToScroll: 1,
      },
    },
    ],
  });
  jQuery(".partner-right-arrow .next").on("click", function () {
    slider9.slick("slickPrev");
  });

  jQuery(".partner-left-arrow .prev").on("click", function () {
    slider9.slick("slickNext");
  });
});