<?php
/* Template Name: tres-page Template */
get_header(); ?>
<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
<style>
    /* tour  */
    .tour-anchor a {
        width: max-content;
        padding: 13px 20px 12px 20px;
    }

    .meeting-image {
        margin-top: 48px;
    }

    .bottom-border {
        border-bottom: 1px solid #e6e6e7;
        padding-bottom: 80px;
    }

    .tour-card-heading {
        width: 100%;
        margin-top: 80px;
    }

    .tour-card-heading h3 {
        color: var(--Main-Colors-Blue, #036);
        font-size: 32px;
        font-weight: 700;
        line-height: 130%;
        text-align: start;
    }

    #tour-fleets .fleet-boxes .single-fleet-box {
        width: 18%;
    }

    #tour-fleets .fleet-boxes .single-fleet-box h3 {
        font-size: 20px;
        font-weight: 700;
        line-height: 140%;
        min-height: 80px;
        width: 100%;
    }

    #tour-fleets .fleet-boxes .single-fleet-box a {
        color: var(--Main-Colors-Blue, #036);
        font-size: 16px;
        font-weight: 600;
        letter-spacing: 0.96px;
        text-decoration-line: underline;
        text-transform: uppercase;
    }

    #tour-fleets .border {
        border-bottom: 1px solid #e6e6e7;
    }

    #planning-boxes .single-fleet-box {
        width: 32% !important;
    }

    .tour-videos-section {
        margin-top: 80px;
    }

    /* slider video css  */
    .owl-thumbs .owl-thumb-item {
        height: 150px;
        width: 100%;
        /* max-width: 245px; */
        background: transparent;
        border: none;
        overflow: hidden;
    }

    .owl-thumbs .owl-thumb-item img {
        max-width: 100%;
        height: auto;
    }

    .owl-dots {
        position: absolute;
        bottom: 170px;
        left: 0;
        right: 0;
    }

    .owl-thumbs {
        margin-top: 32px;
        display: flex;
        justify-content: space-between;
        gap: 16px;
    }

    .custom-nav-container {
        position: relative;
        margin-top: 48px;
        display: flex;
        justify-content: center;
        gap: 24px;
    }

    .custom-nav-container button {
        border: none;
        background: transparent;
    }

    .custom-nav-container button:hover img {
        filter: brightness(0) saturate(100%) invert(52%) sepia(74%) saturate(432%) hue-rotate(56deg) brightness(90%) contrast(92%);
    }

    .tour-slider video {
        width: 100%;
        height: fit-content;
    }

    .item-slick.slick-slide.slick-current.slick-active {
        outline: none !important
    }

    .slider-for {
        margin-bottom: 15px;
    }

    .slider-for img {
        width: 100%;
        min-height: 100%;
    }

    .slider-nav {
        margin: auto;
    }

    .slider-nav .item-slick {
        max-width: 240px;
        margin-right: 15px;
        outline: none !important;
        cursor: pointer;
    }

    .slider-nav .item-slick img {
        max-width: 100%;
        background-size: cover;
        background-position: center;
    }

    .slick-arrow {
        position: absolute;
        top: 50%;
        z-index: 50;
        margin-top: -12px;
    }

    .slick-prev {
        left: 0;
    }

    .slick-next {
        right: 0;
    }



    .tab-content {
        display: none;
    }

    .tab-content.current {
        display: inherit;
    }

    /* 	.slick-slide.slick-active {
    width: 500px;
    background: chartreuse;
    height: 500px;
} */
    .slick-slide {
        position: relative;
    }

    /* .slider-nav .slick-slide.slick-active:before {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    top: 0;
    z-index: 9999;

} */

    .video-container {
        position: relative;
        width: 100%;
        max-width: 175px;
        height: 80px;
    }

    .thumbnail-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
        background-color: rgba(0, 0, 0, 0.5);
        /* Optional, for a slight overlay */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .thumbnail-overlay img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        background: #ffff;
        cursor: pointer;
    }

    .video-container.slick-slide.active1.slick-active,
    .video-container.slick-slide.slick-cloned.active1,
    .video-container.slick-slide.active1 {
        border: 3px solid #2ABA00;
    }

    /* .video-container.slick-slide.slick-active {
    border: 10px solid #5b5b5f;
} */

    .video-container.slick-slide {
        border: 1px solid #D9D9D9;
        margin: 2px;
        cursor: pointer;
    }

    .slick-arrow {
        margin-top: 0px !important;
    }

    .slick-next:before,
    .slick-prev:before {
        font-family: slick;
        font-size: 40px;
        line-height: 1;
        opacity: .75;
        color: #036;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .slick-prev {
        left: -50px;
    }

    .slick-next {
        right: -50px;
    }

    .slider-container iframe {
        display: block;
        max-width: 850px;
        margin: 0 auto;
        right: 0;
    }

    @media screen and (max-width: 1500px) {
        .slick-next {
            right: -40px;
        }

    }

    @media screen and (max-width: 1366px) {
        .slick-next {
            right: -15px;
        }

        .slick-prev {
            left: -40px;
        }
    }

    @media screen and (max-width: 1300px) {
        .device-tabbing.tabs p {
            font-size: 10px;
        }


    }

    @media screen and (max-width: 1100px) {
        #tour-fleets .fleet-boxes .single-fleet-box {
            width: 48%;
        }

        .device-tabbing.tabs,
        .page-id-46592 .device-tabbing.tabs {
            overflow-x: scroll;
            white-space: nowrap;
            width: 100%;
            scrollbar-width: thin;
        }
    }

    @media screen and (max-width: 992px) {
        #planning-boxes .single-fleet-box {
            width: 48% !important;
        }

        .page-template-tres .single-fleet-box img {
            width: 150px;
            height: 150px;
        }
    }

    @media screen and (max-width: 767px) {
        .slider-for .slick-slide.slick-current.slick-active {
            height: 230px !important;
        }

        .slider-for .slick-list.draggable {
            height: 230px !important;
        }

        #tour-fleets .fleet-boxes .single-fleet-box {
            width: 100%;
        }

        #planning-boxes .single-fleet-box {
            width: 100% !important;
        }

    }
</style>

<main id="main">

    <section class="hero " id="routing-dispatching" style="display:none">
        <div class="banner-content-sol">
            <div class="container">

                <div class="left-content-sol">
                    <?php if ($all_banner_subheading = get_field('all_banner_subheading')) :
                    ?>
                        <p><?php //echo esc_html($all_banner_subheading); 
                            ?></p>
                    <?php endif;
                    ?>
                    <?php if ($all_banner_heading = get_field('all_banner_heading')) :
                    ?>
                        <h1><?php echo esc_html($all_banner_heading);
                            ?></h1>
                    <?php endif;
                    ?>

                    <div class="banner-buttons-sol">
                        <?php
                        $link = get_field('all_banner_get_btn');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];

                        ?>
                            <a class="start-btn" href="<?php echo esc_url($link_url);
                                                        ?>"><?php echo esc_html($link_title);
                                                                ?></a>
                        <?php endif;
                        ?>

                    </div>
                </div>
            </div>
            <div class="right-content">
                <?php if ($all_banner_img1 = get_field('all_banner_img1')) :
                ?>
                    <img src="<?php the_field('all_banner_img1');
                                ?>" alt="" class="desktop-ban-img">
                <?php endif;
                ?>
                <?php if ($all_banner_img2 = get_field('all_banner_img2')) :
                ?>
                    <img src="<?php the_field('all_banner_img2');
                                ?>" alt="" class="mbl-ban-img">
                <?php endif;
                ?>
            </div>
        </div>
    </section>

 <?php get_template_part('template-parts/tour-videos-tab-section'); ?>



    <section class="tour-videos-section" style="display:none;">
        <div class="container">
            <?php if (have_rows('tres_video_repeater')):
            ?>
                <div class="device-tabbing tabs">
                    <?php while (have_rows('tres_video_repeater')) : the_row();
                    ?>
                        <p class="tab-link"><?php the_sub_field('video_tab_name');
                                            ?></p>
                    <?php endwhile;
                    ?>
                </div>
                <div class="tabbing-new-area">
                    <?php while (have_rows('tres_video_repeater')) : the_row();
                    ?>
                        <div class="tour-slider" id="tab-<?php echo get_row_index();
                                                            ?>">
                            <div class="slider-container">
                                <div class="slider-for">
                                    <?php if (have_rows('tres_video_repeat1')):
                                        $index = 0; // Initialize index counter
                                        while (have_rows('tres_video_repeat1')) : the_row();
                                    ?>
                                            <div style="height:460px;position:relative;">
                                                <iframe
                                                    src="<?php the_sub_field('video_tres_link');
                                                            ?><?php echo $index === 0 ? '?muted=0&autoplay=0&title=0&byline=0&background=0&portrait=0&color=00adef&loop=0&dnt=0&playsinline=1' : '';
                                                                ?>"
                                                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write"
                                                    style="position:absolute;top:0;left:0;width:80%;height:100%;"
                                                    title="ARJets-Header-EXT" id="<?php the_sub_field('video_tres_link');
                                                                                    ?>"></iframe>
                                            </div>
                                    <?php
                                            $index++; // Increment index counter
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                                <div class="slider-nav">
                                    <?php if (have_rows('tres_video_repeat1')):  while (have_rows('tres_video_repeat1')) : the_row();
                                    ?>
                                            <div class="video-container">
                                                <div class="thumbnail-overlay" onclick="playVideo(this)">
                                                    <img src="<?php the_sub_field('video_thumbnail');
                                                                ?>" alt="Video Thumbnail"
                                                        data-url="<?php the_sub_field('video_tres_link');
                                                                    ?>">
                                                </div>
                                            </div>
                                    <?php endwhile;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    ?>
                </div>
            <?php endif;
            ?>
        </div>
    </section>
    <section class="fleets-section" id="tour-fleets">
        <div class="container">
            <div class="about-fleet bottom-border removed-area">
                <h3><?php the_field('expert_tres_heading'); ?></h3>
                <div class="fleet-para" id="take-tour-para">
                    <?php the_field('expert_tres_data'); ?>
                </div>
            </div>
            <div class="border" id="removed-space">
                <div class="box-area">
                    <div class="tour-card-heading">
                        <h3><?php the_field('research_heading1'); ?></h3>
                    </div>
                    <div class="fleet-boxes">
                        <?php if (have_rows('tools_tres_repeater')):  while (have_rows('tools_tres_repeater')) : the_row(); ?>
                                <div class="single-fleet-box">
                                    <a target="_blank" href="<?php the_sub_field('tools_tres_link'); ?>"><img
                                            src="<?php the_sub_field('tools_tres_icon'); ?>" alt="fleet"></a>
                                    <a target="_blank" href="<?php the_sub_field('tools_tres_link'); ?>">
                                        <h3><?php the_sub_field('tools_tres_name'); ?></h3>
                                    </a>
                                    <a target="_blank" href="<?php the_sub_field('tools_tres_link'); ?>">Learn more</a>
                                </div>
                        <?php endwhile;
                        endif; ?>

                    </div>
                </div>
            </div>
            <div class="border">
                <div class="box-area" id="planning-boxes">
                    <div class="tour-card-heading">
                        <h3><?php the_field('implementation_heading'); ?></h3>
                    </div>
                    <div class="fleet-boxes">
                        <?php if (have_rows('implementation_repeater')):  while (have_rows('implementation_repeater')) : the_row(); ?>
                                <div class="single-fleet-box">
                                    <a target="_blank" href="<?php the_sub_field('implementation_link'); ?>"> <img
                                            src="<?php the_sub_field('implementation_icon'); ?>" alt="fleet"></a>
                                    <a target="_blank" href="<?php the_sub_field('implementation_link'); ?>">
                                        <h3><?php the_sub_field('implementation_text'); ?></h3>
                                    </a>
                                    <a href="<?php the_sub_field('implementation_link'); ?>" target="_blank">Learn more</a>
                                </div>
                        <?php endwhile;
                        endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/achivements-template'); ?>
</main>

<?php get_footer(); ?>
