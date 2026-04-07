  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/css/tour_style.css?v=<?php echo time(); ?>">

  <?php $page_id = get_the_ID();
    $page_id0 = 46547;
    $page_id1 = 46592;

    if (have_rows('tres_video_repeater', $page_id)) : ?>
      <section class="cst-customtab-sec cst1">
          <div class="container">

              <!-- Hero Video (first video from first repeater) -->
              <div class="hero-video" aria-label="Featured video">
                  <?php
                    // Get first video link for hero
                    $firstVideo = '';
                    $first = true;
                    while (have_rows('tres_video_repeater', $page_id)) : the_row();
                        if (have_rows('tres_video_repeat1')) :
                            while (have_rows('tres_video_repeat1')) : the_row();
                                if ($first) {
                                    $firstVideo = get_sub_field('video_tres_link');
                                    $first = false;
                                }
                            endwhile;
                        endif;
                    endwhile;
                    ?>
                  <?php if ($firstVideo) : ?>
                      <iframe src="<?php echo esc_url($firstVideo); ?>" frameborder="0"
                          allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                          allowfullscreen></iframe>
                  <?php endif; ?>
              </div>

              <div class="btn-group-parent">
                  <!-- Left Scroll Button -->
                  <button class="left-btn">❮</button>
                  <!-- Buttons -->
                  <div class="button-group about-club-nav-wrap">
                      <?php
                        $i = 1;
                        while (have_rows('tres_video_repeater', $page_id)) : the_row();
                            $btnName = get_sub_field('video_tab_name');
                            $firstVid = '';
                            if (have_rows('tres_video_repeat1')) :
                                the_row(); // Move inside nested repeater
                                $firstVid = get_sub_field('video_tres_link');
                                reset_rows(); // Reset pointer for nested repeater
                            endif;
                        ?>
                          <button class="<?php echo $i === 1 ? 'activebtn' : ''; ?>"
                              data-video="<?php echo esc_url($firstVid); ?>"
                              data-slider="slider-<?php echo $i; ?>">
                              <?php echo esc_html($btnName); ?>
                          </button>
                      <?php
                            $i++;
                        endwhile;
                        ?>

                  </div>
                  <!-- Right Scroll Button -->
                  <button class="right-btn">❯</button>
              </div>
              <!-- Sliders -->
              <div class="sliders-wrapper">
                  <?php
                    $j = 1;
                    while (have_rows('tres_video_repeater', $page_id)) : the_row(); ?>
                      <div class="slider slider-<?php echo $j; ?> <?php echo $j === 1 ? 'active-slider' : ''; ?>">
                          <?php
                            if (have_rows('tres_video_repeat1')) :
                                while (have_rows('tres_video_repeat1')) : the_row();
                                    $vidLink = get_sub_field('video_tres_link');
                                    $vidImg  = get_sub_field('video_thumbnail'); ?>
                                  <div data-video="<?php echo esc_url($vidLink); ?>">
                                      <img src="<?php echo esc_url($vidImg); ?>" alt="Video Thumbnail">
                                  </div>
                          <?php endwhile;
                            endif;
                            ?>
                      </div>
                  <?php
                        $j++;
                    endwhile;
                    ?>
              </div>

          </div>
      </section>
  <?php endif; ?>

  <script src="<?php //echo get_stylesheet_directory_uri(); 
                ?>/landing_assets/js/tour_style.js?v=<?php //echo time(); 
                                                        ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script>
      jQuery(function($) {
          const $scrollWrap = $('.cst1 .about-club-nav-wrap');
          const $leftBtn = $('.cst1 .left-btn');
          const $rightBtn = $('.cst1 .right-btn');
          const scrollAmount = 100; // adjust how much to scroll

          // Left scroll
          $leftBtn.on('click', function() {
              $scrollWrap.animate({
                  scrollLeft: $scrollWrap.scrollLeft() - scrollAmount
              }, 300);
          });

          // Right scroll
          $rightBtn.on('click', function() {
              $scrollWrap.animate({
                  scrollLeft: $scrollWrap.scrollLeft() + scrollAmount
              }, 300);
          });
      });
  </script>
  <script>
      jQuery(function($) {
          // Init only first active slider
          $('.cst1 .sliders-wrapper .active-slider').slick({
              slidesToShow: 7,
              slidesToScroll: 1,
              dots: false,
              arrows: true,
              adaptiveHeight: true,
              autoplay: false,
              autoplaySpeed: 2500,
              prevArrow: '<button type="button" class="slick-prev">&#10094;</button>',
              nextArrow: '<button type="button" class="slick-next">&#10095;</button>',
              responsive: [{
                      breakpoint: 1024,
                      settings: {
                          slidesToShow: 4
                      }
                  },
                  {
                      breakpoint: 767,
                      settings: {
                          slidesToShow: 3
                      }
                  },
                  {
                      breakpoint: 602,
                      settings: {
                          slidesToShow: 2
                      }
                  },
                  {
                      breakpoint: 595,
                      settings: {
                          slidesToShow: 1
                      }
                  },
              ]
          });

          // Button Click → Change video + slider
          $('.cst1 .button-group button').off('click').on('click', function() {
              var videoUrl = $(this).data('video');
              var sliderClass = $(this).data('slider');

              // Change iframe video
              $('.cst1 .hero-video iframe').attr('src', videoUrl);

              // Update button active state
              $('.cst1 .button-group button').removeClass('activebtn');
              $(this).addClass('activebtn');

              // Destroy current active slider
              var $currentSlider = $('.cst1 .sliders-wrapper .active-slider');
              if ($currentSlider.hasClass('slick-initialized')) {
                  $currentSlider.slick('unslick');
              }
              $currentSlider.removeClass('active-slider');

              // Show & init new slider
              var $newSlider = $('.' + sliderClass);
              $newSlider.addClass('active-slider');

              $newSlider.slick({
                  slidesToShow: 7,
                  slidesToScroll: 1,
                  dots: false,
                  arrows: true,
                  adaptiveHeight: true,
                  autoplay: false,
                  autoplaySpeed: 2500,
                  prevArrow: '<button type="button" class="slick-prev">&#10094;</button>',
                  nextArrow: '<button type="button" class="slick-next">&#10095;</button>',
                  responsive: [{
                          breakpoint: 1024,
                          settings: {
                              slidesToShow: 4,
                              arrows: true,
                          }
                      },
                      {
                          breakpoint: 767,
                          settings: {
                              slidesToShow: 3,
                              arrows: true,
                          }
                      },
                      {
                          breakpoint: 602,
                          settings: {
                              slidesToShow: 2,
                              arrows: true,
                          }
                      },
                      {
                          breakpoint: 535,
                          settings: {
                              slidesToShow: 1,
                              arrows: true,
                          }
                      },
                      //   {
                      //       breakpoint: 375,
                      //       settings: {
                      //           slidesToShow: 1,
                      //           arrows: true,
                      //       }
                      //   }
                  ]
              });
          });
          // 🔥 Slider Image Click → Change main iframe video
          $(document).on('click', '.cst1 .sliders-wrapper .slick-slide', function() {


              var videoUrl = $(this).data('video'); // video URL from the clicked slide
              if (videoUrl) {
                  if (videoUrl.indexOf('?') > -1) {
                      videoUrl += '&autoplay=1';
                  } else {
                      videoUrl += '?autoplay=1';
                  }
                  $('.cst1 .hero-video iframe').attr('src', videoUrl);
              }

              $('.cst1 .sliders-wrapper .slick-slide').removeClass('current_cls');
              $(this).addClass('current_cls');
          });
      });
  </script>

  <script src="https://player.vimeo.com/api/player.js"></script>
  <script>
      function playVideo(element) {


          console.log("element", element);
          const url = element.querySelector('img').getAttribute('data-url');
          console.log("url", url);
          const iframe = document.getElementById(url);
          console.log("iframe", iframe);
          const player = new Vimeo.Player(iframe);
          player.ready().then(function() {
              // player.setVolume(0); // Ensure it's muted
              player.play();
              //   player.setVolume(1);
          });

          // Get the iframe and add autoplay parameter
          // const iframe = element.nextElementSibling;
          // console.log("iframe", iframe);
          // iframe.src += '&autoplay=1';
      }
  </script>