window.addEventListener('DOMContentLoaded', function () {
  $(document).ready(function () {
    $("a:containsIgnoreCase('See how we transform fleets')")
      .css("background-color", "#FF7300")
      .hover(
        function () {
          $(this).css({
            "background-color": "transparent",
            border: "1px solid #FF7300",
            color: "#FF7300",
          });
        },
        function () {
          $(this).css({
            "background-color": "#FF7300",
            border: "none",
            color: "#fff",
          });
        }
      );
  });

  $.expr[":"].containsIgnoreCase = function (n, i, m) {
    return jQuery(n).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
  };

  $(document).ready(function () {
    $(".box-area").first().show();

    $(".device-tabbing p").click(function () {
      $(".device-tabbing p").removeClass("active-track");

      $(this).addClass("active-track");

      $(".box-area").hide();

      $(".box-area").eq($(this).index()).show();
    });
  });




  $(document).ready(function () {
    $(".dropdown-menu").hide();

    function toggleMenu($menu) {
      $(".dropdown-menu").not($menu).hide();
      $menu.toggle();
    }

    $(".mbl-dropdown > a img").click(function (e) {
      e.preventDefault();
      var $menu = $(this).parent().siblings(".dropdown-menu");
      toggleMenu($menu);
    });

    $(".dropdown-parent").hover(function () {
      if ($(window).width() > 1279) {
        var $menu = $(this).find('.dropdown-menu');
        toggleMenu($menu);
      }
    }, function () {
      if ($(window).width() > 1279) {
        var $menu = $(this).find('.dropdown-menu');
        $menu.hide();
      }
    });

    $(document).on("click", function (event) {
      if (
        !$(event.target).closest(".dropdown-menu").length &&
        !$(event.target).closest(".mbl-dropdown > a img").length
      ) {
        $(".dropdown-menu").hide();
      }
    });

    if ($(window).width() > 1279) {
      $(".dropdown-menu").show();
    }

    $(window).resize(function () {
      if ($(window).width() > 1279) {
        $(".dropdown-menu").show();
      } else {
        $(".dropdown-menu").hide();
      }
    });
  });


  $(document).ready(function () {
    $('.navbtn,.start-btn,.tour-btn,.see,.page-id-607 .fleet-para>a').click(function () {

      var headerHeight = $('#header').innerHeight();
      var lovePosition = $('#dash-tour').offset().top - headerHeight - 40;

      // Animate scrolling to the #love div
      $('html, body').animate({
        scrollTop: lovePosition
      }, 'slow');
    });
  });


  $.extend($.expr[':'], {
    'containsInsensitive': function (elem, i, match, array) {
      return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || '').toLowerCase()) >= 0;
    }
  });
  $('a:containsInsensitive("see how we transform fleets")').removeAttr('target');
  $('.banner-buttons a, .head-button a, .plan-head a, .banner-buttons-sol a').removeAttr('target');


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



});

if (jQuery(window).width() < 1280) {
  jQuery('.menu-item-has-children').addClass('mbl-dropdown');
  jQuery('.menu-item-has-children>a').append('<span class="dropdown-container"><img src="https://fieldlogix.com/wp-content/uploads/2024/03/mbl-dropdown-header.svg"></span>');
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


// document.querySelector('.search-toggle').addEventListener('click', function () {
//   document.documentElement.classList.toggle('search-active');
// });



// const header = document.querySelector(".header-site");
// const toggleClass = "is-sticky";

// window.addEventListener("scroll", () => {
//   const currentScroll = window.pageYOffset;
//   if (currentScroll > 150) {
//     header.classList.add(toggleClass);
//   } else {
//     header.classList.remove(toggleClass);
//   }
// });


var swiper = new Swiper(".slider-serving", {
  direction: 'horizontal',
  slidesPerView: 6,
  spaceBetween: 21,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    480: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 14,
    },
    1024: {
      slidesPerView: 5,
    }
  }
});


// document.getElementById("take-btn").addEventListener("click", function (e) {
//   e.preventDefault();
//   const section = document.querySelector("#take");
//   const offset = 180; // upar ka gap in px
//   const top = section.getBoundingClientRect().top + window.scrollY - offset;

//   window.scrollTo({
//     top: top,
//     behavior: "smooth"
//   });
// });

// user test

jQuery(document).ready(function () {
  var slider = jQuery(".comment-box");
  slider.slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    arrows: false,
    dots: false,
  });



  function showComment(index) {
    slider.slick("slickGoTo", index);

    jQuery(".user-active").removeClass("user-active");
    jQuery(".user").eq(index).addClass("user-active");
  }

  showComment(0);

  function updateActiveUser() {
    var currentIndex = slider.slick("slickCurrentSlide");
    jQuery(".user-active").removeClass("user-active");
    jQuery(".user").eq(currentIndex).addClass("user-active");
  }

  slider.on("afterChange", function (event, slick, currentSlide) {
    updateActiveUser();
  });

  jQuery(".user").click(function () {
    jQuery(".user-active").removeClass("user-active");
    jQuery(this).addClass("user-active");
    showComment(jQuery(this).index());
  });

  jQuery(".next-comment").on("click", function () {
    slider.slick("slickNext");
    updateActiveUser();
  });

  jQuery(".prev-comment").on("click", function () {
    slider.slick("slickPrev");
    updateActiveUser();
  });
});

// ================= GAUGE =================
// const current = 40;
// const total = 125;
// const yourScore = 89;
// const fleetAvg = 95;
// const variance = -6;

// const circle = document.querySelector('.progress');
// const text = document.getElementById('rankText');
// const circumference = 283;
// const percent = current / total;
// const offset = circumference - (percent * circumference);

// setTimeout(() => {
//   circle.style.strokeDasharray = circumference;
//   circle.style.strokeDashoffset = offset;
//   text.textContent = `${current}/${total}`;
//   document.getElementById('yourScore').textContent = yourScore;
//   document.getElementById('fleetAvg').textContent = fleetAvg;
//   document.getElementById('variance').textContent = variance + "%";
// }, 500);

document.addEventListener('DOMContentLoaded', function () {
  const current = 40;
  const total = 125;
  const yourScore = 89;
  const fleetAvg = 95;
  const variance = -6;

  const circle = document.querySelector('.progress');
  const text = document.getElementById('rankText');
  const circumference = 283;
  const percent = current / total;
  const offset = circumference - (percent * circumference);

  let animated = false;

  function animateGauge() {
    if (animated) return;
    animated = true;

    // Animate stroke
    circle.style.strokeDashoffset = offset;

    // Animate counter from 0 to current
    let start = 0;
    const duration = 1500;
    const startTime = performance.now();

    function animateCount(now) {
      const elapsed = now - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const value = Math.floor(progress * current);

      text.textContent = `${value}/${total}`;
      if (progress < 1) {
        requestAnimationFrame(animateCount);
      } else {
        text.textContent = `${current}/${total}`;
      }
    }

    requestAnimationFrame(animateCount);

    // Update stats
    document.getElementById('yourScore').textContent = yourScore;
    document.getElementById('fleetAvg').textContent = fleetAvg;
    document.getElementById('variance').textContent = variance + "%";
  }

  // Observe element visibility
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateGauge();
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  observer.observe(document.querySelector('.score-wrapper'));
});

// ================= LINE CHART =================
// const ctx = document.getElementById('lineChart').getContext('2d');
// new Chart(ctx, {
//   type: 'line',
//   data: {
//     labels: ["Oct", "Nov", "Dec", "Jan", "Feb"],
//     datasets: [
//       {
//         label: "You",
//         data: [80, 78, 82, 75, 89],
//         borderColor: "#4a90e2",
//         backgroundColor: "#4a90e2",
//         fill: false,
//         tension: 0.3,
//         pointRadius: 5,
//         pointBackgroundColor: "#4a90e2"
//       },
//       {
//         label: "Fleet Avg",
//         data: [40, 55, 60, 70, 65],
//         borderColor: "green",
//         backgroundColor: "green",
//         fill: false,
//         tension: 0.3,
//         pointRadius: 5,
//         pointBackgroundColor: "green"
//       }
//     ]
//   },
//   options: {
//     responsive: true,
//     maintainAspectRatio: false,
//     plugins: {
//       tooltip: { enabled: true, mode: 'nearest' },
//       legend: { position: 'top' }
//     },
//     // scales: { y: { beginAtZero: true, max: 100 } }
//     scales: {
//       y: {
//         beginAtZero: true,
//         max: 100,
//         ticks: {
//           stepSize: 20 // <-- Add this line
//         }
//       }
//     }
//   }
// });


document.addEventListener('DOMContentLoaded', function () {
  const canvas = document.getElementById('lineChart');
  let chartInitialized = false; // To ensure animation runs once

  function createChart() {
    const ctx = canvas.getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Oct", "Nov", "Dec", "Jan", "Feb"],
        datasets: [
          {
            label: "You",
            data: [80, 78, 82, 75, 89],
            borderColor: "#4a90e2",
            backgroundColor: "#4a90e2",
            fill: false,
            tension: 0.3,
            pointRadius: 5,
            pointBackgroundColor: "#4a90e2"
          },
          {
            label: "Fleet Avg",
            data: [40, 55, 60, 70, 65],
            borderColor: "green",
            backgroundColor: "green",
            fill: false,
            tension: 0.3,
            pointRadius: 5,
            pointBackgroundColor: "green"
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        animation: {
          duration: 3500, // Animation duration
          easing: 'easeOutQuart' // Smooth animation
        },
        scales: {
          y: {
            beginAtZero: true,
            max: 100,
            ticks: {
              stepSize: 20
            }
          }
        },
        plugins: {
          tooltip: { enabled: true },
          legend: { position: 'top' }
        }
      }
    });
  }

  // Intersection Observer to detect when canvas enters viewport
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !chartInitialized) {
        createChart();
        chartInitialized = true;
        observer.unobserve(canvas); // Stop observing once animated
      }
    });
  }, { threshold: 0.3 }); // Trigger when 30% of element is visible

  observer.observe(canvas);
});



const alert = document.querySelector(".alerts");

if (alert) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          alert.classList.add("in-viewport");
        } else {
          alert.classList.remove("in-viewport");
        }
      });
    },
    { threshold: 0.5 }
  );

  observer.observe(alert);
}


// jQuery(function ($) {
//   function openTabAndScroll(tabId) {
//     var selector = 'button[data-bs-target="' + tabId + '"]';
//     var tabBtn = document.querySelector(selector);
//     var $take = $('#take');

//     if (!$take.length) {
//       console.warn('Section #take not found.');
//       return;
//     }
//     if (!tabBtn) {
//       console.warn('Tab button not found for: ' + tabId);
//       // fallback: just scroll
//       $('html, body').animate({ scrollTop: $take.offset().top - 60 }, 600);
//       return;
//     }

//     // One-time listener for when tab becomes visible
//     function onShown(e) {
//       if (e.target !== tabBtn) return;
//       // scroll after tab shown
//       var targetPos = $take.offset().top - 60; // adjust -60 if you have fixed header
//       $('html, body').animate({ scrollTop: targetPos }, 600);

//       // re-init Gravity Forms (best-effort)
//       setTimeout(function () {
//         if (window.gformInitDatepicker) try { gformInitDatepicker(); } catch (e) { }
//         if (window.gformInitSpinner) try { gformInitSpinner(); } catch (e) { }
//         if (typeof gform !== 'undefined' && typeof gform.initializeOnLoaded === 'function') {
//           try { gform.initializeOnLoaded(); } catch (e) { }
//         }
//         // Also trigger the GF post render event just in case
//         try { $(document).trigger('gform_post_render', []); } catch (e) { }
//       }, 350);

//       document.removeEventListener('shown.bs.tab', onShown, true);
//     }

//     document.addEventListener('shown.bs.tab', onShown, true);

//     // Show the tab using Bootstrap 5 API; fallback to click
//     if (typeof bootstrap !== 'undefined' && bootstrap.Tab) {
//       try {
//         bootstrap.Tab.getOrCreateInstance(tabBtn).show();
//       } catch (err) {
//         tabBtn.click();
//       }
//     } else {
//       tabBtn.click();
//     }
//   }

//   // bind the two buttons
//   $(document).on('click', '#scroll-get-pricing', function (e) {
//     e.preventDefault();
//     openTabAndScroll('#nav-home');
//   });

//   $(document).on('click', '#scroll-take-tour', function (e) {
//     e.preventDefault();
//     openTabAndScroll('#nav-profile');
//   });
// });


// document.addEventListener('DOMContentLoaded', function () {
//   const getPricingBtn = document.getElementsByClassname('btn-get-pricing');
//   const takeTourBtn = document.getElementsByClassname('btn-take-tour');
//   const getPricingTab = document.getElementById('nav-home-tab');
//   const takeTourTab = document.getElementById('nav-profile-tab');
//   const takeSection = document.getElementById('take');

//   console.log(getPricingBtn, takeTourBtn);

//   function activateTab(tabToActivate, otherTab) {
//     // Update aria attributes and classes
//     tabToActivate.classList.add('active');
//     tabToActivate.setAttribute('aria-selected', 'true');
//     otherTab.classList.remove('active');
//     otherTab.setAttribute('aria-selected', 'false');

//     // Trigger Bootstrap tab switch
//     const tab = new bootstrap.Tab(tabToActivate);
//     tab.show();

//     // Smooth scroll to section
//     takeSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
//   }

//   getPricingBtn.addEventListener('click', () => {
//     activateTab(getPricingTab, takeTourTab);
//     console.log('Get Pricing button clicked');
//   });

//   takeTourBtn.addEventListener('click', () => {
//     activateTab(takeTourTab, getPricingTab);
//     console.log('Take the Tour button clicked');
//   });
// });


document.addEventListener('DOMContentLoaded', function () {
  const getPricingBtns = document.querySelectorAll('.btn-get-pricing');
  const takeTourBtns = document.querySelectorAll('.btn-take-tour');

  const getPricingTab = document.getElementById('nav-home-tab');
  const takeTourTab = document.getElementById('nav-profile-tab');
  const takeSection = document.getElementById('take');

  function activateTab(tabToActivate) {
    // Create Bootstrap Tab instance
    const tab = new bootstrap.Tab(tabToActivate);
    tab.show();

    // Smooth scroll to section
    takeSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }

  // Add event listener to all "Get Pricing" buttons
  getPricingBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      activateTab(getPricingTab);
      // console.log('✅ Get Pricing tab activated');
    });
  });

  // Add event listener to all "Take the Tour" buttons
  takeTourBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      activateTab(takeTourTab);
      // console.log('✅ Take the Tour tab activated');
    });
  });
});

// document.addEventListener('DOMContentLoaded', function () {
//   // If the page reloads and has a hash, scroll smoothly to it
//   if (window.location.hash === '#take') {
//     const section = document.querySelector('#take');
//     if (section) {
//       section.scrollIntoView({ behavior: 'smooth' });
//     }
//   }

//   // Gravity Forms event when confirmation is loaded
//   document.addEventListener('gform_confirmation_loaded', function (event, formId) {
//     let activeTab = '';

//     // Detect which form was submitted
//     if (formId === 2) {
//       activeTab = 'nav-home-tab';
//     } else if (formId === 64) {
//       activeTab = 'nav-profile-tab';
//     }

//     // Update the URL to #take (for scrolling)
//     window.location.hash = '#take';

//     // Wait for reload, then store info about which tab to open
//     localStorage.setItem('activeTabAfterReload', activeTab);
//   });

//   // On page load, open the correct tab if it was submitted before
//   const savedTab = localStorage.getItem('activeTabAfterReload');
//   if (savedTab) {
//     const tabButton = document.getElementById(savedTab);
//     if (tabButton) {
//       const tab = new bootstrap.Tab(tabButton);
//       tab.show();
//       const section = document.querySelector('#take');
//       section?.scrollIntoView({ behavior: 'smooth' });
//     }
//     localStorage.removeItem('activeTabAfterReload');
//   }
// });




// type js plugin
// let typeJsText = document.querySelector(".typeJsText");
// let textArray = typeJsText.dataset.typetext.split("");
// let counter = -1;

// typeJsText.innerHTML = "";

// function typeJs() {
//   if (counter < typeJsText.dataset.typetext.length) {
//     counter++;
//     typeJsText.innerHTML += typeJsText.dataset.typetext.charAt(counter);
//     textArray = typeJsText.dataset.typetext.split("");
//   } else {
//     textArray.pop();
//     typeJsText.innerHTML = textArray.join("");
//     if (textArray.length == 0) {
//       counter = -1;
//     }
//   }
// }

// setInterval(() => {
//   typeJs();
// }, 100);

document.addEventListener("DOMContentLoaded", function () {
  let typeJsText = document.querySelector(".typeJsText");

  if (!typeJsText) return; // prevent error

  let textArray = typeJsText.dataset.typetext.split("");
  let counter = -1;

  typeJsText.innerHTML = "";

  function typeJs() {
    if (counter < typeJsText.dataset.typetext.length) {
      counter++;
      typeJsText.innerHTML += typeJsText.dataset.typetext.charAt(counter);
      textArray = typeJsText.dataset.typetext.split("");
    } else {
      textArray.pop();
      typeJsText.innerHTML = textArray.join("");
      if (textArray.length == 0) {
        counter = -1;
      }
    }
  }

  setInterval(typeJs, 100);
});