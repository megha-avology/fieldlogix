<?php
/* Template Name: tres-testing Template */
get_header(); ?>

<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

<style>
    .iframe-container iframe {
        width: 100%;
        height: 562px;
    }

    .cst-customtab-sec .container {
        width: 90%;
        max-width: 1280px;
        margin: 0 auto;
        text-align: center;
    }

    .cst-customtab-sec .hero-video video,
    .cst-customtab-sec .hero-video iframe {
        width: 100%;
        height: 460px;
        aspect-ratio: 16/9;
        display: block;
        border-radius: 0;
        box-shadow: 0 10px 20px rgba(0, 0, 0, .08);
        margin-bottom: 50px;
    }

    /* --- Buttons --- */
    .cst-customtab-sec .button-group {
        margin: 46px auto;
        border-radius: 4px;
        border: .5px solid #53a42a;
        padding: 10px;
        max-width: max-content;
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: nowrap;
        background: #fff;
    }


    .cst-customtab-sec .button-group button {
        padding: 12px 24px;
        border-radius: 4px;
        background: #fff;
        color: #036;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .72px;
        text-transform: uppercase;
        cursor: pointer;
        border: none;

    }

    .cst-customtab-sec .button-group button.activebtn {
        border: .5px solid #53a42a;
        background: #53a42a;
        color: #fff;
    }

    /* --- Slider Images --- */
    .cst-customtab-sec .slick-slide {
        margin: 2px;
        cursor: pointer;
    }

    .cst-customtab-sec .slider img {
        width: 100%;
        height: auto;
        border-radius: 0;
        background: #e8f4ff;
        padding: 7px;
    }

    /* --- Custom Slick Arrows --- */
    .cst-customtab-sec .slick-prev,
    .cst-customtab-sec .slick-next {
        width: 40px;
        height: 40px;
        background: #2a5d92;
        border-radius: 50%;
        display: flex !important;
        align-items: center;
        justify-content: center;
        z-index: 5;
        transition: background .3s, transform .2s;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.25);
    }

    .cst-customtab-sec .slick-prev:hover,
    .cst-customtab-sec .slick-next:hover {
        background: #1d436b;
    }

    .cst-customtab-sec .slick-prev:before,
    .cst-customtab-sec .slick-next:before {
        font-size: 20px;
        opacity: 1;
        color: #fff;
    }

    .cst-customtab-sec .slick-prev {
        left: -50px;
    }

    .cst-customtab-sec .slick-next {
        right: -50px;
    }

    /* Center arrows vertically */
    .cst-customtab-sec .slick-prev,
    .cst-customtab-sec .slick-next {
        top: 50%;
        transform: translateY(-50%);
    }

    section.cst-customtab-sec {
        background: #e8f4ff;
        padding-top: 157px;
        padding-bottom: 60px;
        overflow: hidden;
    }

    .cst-customtab-sec .button-group button.active {
        background: #2aba00;
        color: #fff;
    }

    .slider-parent:before {
        content: "";
        position: absolute;
        top: -15px;
        left: -600px;
        background: #ffffff;
        width: calc(100% + 1200px);
        height: calc(100% + 30px);
    }

    .slider-parent {
        position: relative;
    }

    .cst-customtab-sec .slick-prev,
    .cst-customtab-sec .slick-next {
        background: #2c5d7f;
        /* dark blue circle */
        color: #fff;
        /* white arrow */
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 20px;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
        z-index: 10;
    }

    .cst-customtab-sec .slick-prev:before,
    .cst-customtab-sec .slick-next:before {
        display: none;
    }

    .cst-customtab-sec .slick-prev:hover,
    .cst-customtab-sec .slick-next:hover {
        background: #c8d5de;
    }

    .cst-customtab-sec .slick-prev {
        left: -50px;
        /* adjust position */
    }

    .cst-customtab-sec .slick-next {
        right: -50px;
        /* adjust position */
    }

    @media (max-width: 992px) {
        .cst-customtab-sec .slick-next {
            right: -45px;
        }

        .cst-customtab-sec .slick-prev {
            left: -45px;
        }

        .iframe-container iframe {
            width: 100%;
            height: 451px;
        }
    }

    @media (max-width: 767px) {

        .cst-customtab-sec .hero-video video,
        .cst-customtab-sec .hero-video iframe {
            height: auto;
        }

        .cst-customtab-sec .slick-prev,
        .cst-customtab-sec .slick-next {
            height: 35px;
            width: 35px;
        }

        .cst-customtab-sec .slick-next {
            right: -38px;
        }

        .cst-customtab-sec .slick-prev {
            left: -35px;
        }

        .iframe-container iframe {
            width: 100%;
            height: 357px;
        }

    }

    @media (max-width: 660px) {
        .cst-customtab-sec .button-group {
            margin: 30px auto;
        }

        .cst-customtab-sec .slick-list.draggable {
            max-width: 450px;
            margin: 0 auto;
        }

        .cst-customtab-sec .slick-prev {
            left: -12px;
        }

        .cst-customtab-sec .slick-next {
            right: -12px;
        }
    }

    @media (max-width: 595px) {
        .cst-customtab-sec .button-group {
            display: flex;
            flex-wrap: nowrap;
            justify-content: unset;
            overflow-x: auto;
            overflow-y: hidden;
            white-space: nowrap;
            gap: 10px;
            padding: 8px;
            width: 100%;
            max-width: 100%;
            -webkit-overflow-scrolling: touch;
        }

        .cst-customtab-sec .button-group button {
            flex: 0 0 auto;
            min-width: 100px;
            text-align: center;
            letter-spacing: 0;
            padding: 12px 20px !important;
            font-size: 10px;
            margin: 0 auto;
        }

        /* Optional scrollbar style */
        .cst-customtab-sec .button-group::-webkit-scrollbar {
            height: 4px;
        }

        .cst-customtab-sec .button-group::-webkit-scrollbar-thumb {
            background: #bbb;
            border-radius: 3px;
        }
    }

    @media (max-width: 575px) {
        .iframe-container iframe {
            width: 100%;
            height: 273px;
        }
    }

    @media (max-width: 480px) {
        .iframe-container iframe {
            width: 100%;
            height: 220px;
        }
    }

    @media (max-width: 410px) {
        .iframe-container iframe {
            width: 100%;
            height: 192px;
        }
    }
</style>
<style>
    .cst-customtab-sec.cst1 .sliders-wrapper .slider {
        display: none;
    }

    .cst-customtab-sec.cst1 .sliders-wrapper .slider.active-slider {
        display: block;
    }

    .cst-customtab-sec .hero-video iframe {
        box-shadow: none;
    }
</style>
<main id="main">

    <?php $page_id = 46547;
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

                <!-- Buttons -->
                <div class="button-group">
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
</main>




<!-- jQuery + Slick -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    jQuery(function($) {
        // Init only first active slider
        $('.cst1 .sliders-wrapper .active-slider').slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            dots: false,
            arrows: true,
            adaptiveHeight: true,
            autoplay: true,
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
                autoplay: true,
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
<?php get_footer(); ?>