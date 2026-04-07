<?php
/*
Template Name: Landing Page Demo
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5B5K8QQ');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/all.css?ver=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css?ver=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/css/style.css?ver=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/css/responsive.css?ver=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/css/custom-style.css?ver=<?php echo time(); ?>">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/img/png" href="img/favicon-1.png">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- <title><?php //wp_title('|', true, 'right'); 
                ?></title> -->
    <?php wp_head(); ?>
</head>

<body>
    <?php //wp_body_open(); 
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5B5K8QQ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- header start -->
    <!-- <section class="header-site"> -->
    <!-- top-header -->
    <!-- <div class="top-header">
            <div class="container">
                <div class="inner-top-header">
                    <div class="general-info">
                        <a href="tel:888-803-0200" target="_blank">
                            <img src="img/top-call.svg" alt="contact">
                            <p>888-803-0200</p>
                        </a>
                    </div>
                    <div class="login">
                        <a href="https://secure.fieldlogixgps.com/" target="_blank">
                            <img
                                src="<?php //echo get_stylesheet_directory_uri(); 
                                        ?>/landing_assets/img/top-person.svg" alt="login">
                            <p>Login</p>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- <div class="header-main">
            <div class="container">
                <div class="innerHeader">
                    <div class="logo">
                        <a class="logo-img" href="index.html">
                            <img src="img/Logo-new.svg"
                                alt="FieldLogix">
                        </a>
                    </div>
                    <div class="get-started">
                        <nav id="navbar">
                            <div class="mobile-logo">
                                <div class="logo">
                                    <a class="logo-img" href="">
                                        <img
                                            src="img/foot-logo.svg"
                                            alt="Field Logix">
                                    </a>
                                </div>
                            </div>
                            <div class="menu-header-menu-container">
                                <ul id="menu-header-menu" class="">
                                    <li
                                        class="menu-item-has-children active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li
                                        class="menu-item-has-children">
                                        <a href="">Our
                                            Solutions

                                        </a>
                                        <ul class="sub-menu">
                                            <li><a
                                                    href="">GPS Fleet Tracking</a>
                                            </li>
                                            <li><a
                                                    href="">Fleet Dashcams</a></li>
                                            <li><a
                                                    href="">Routing &amp; Dispatching</a></li>
                                            <li><a
                                                    href="">Vehicle Inspections</a>
                                            </li>
                                            <li><a
                                                    href="">Mobile Time Clock</a></li>
                                            <li><a
                                                    href="">ELD</a></li>
                                            <li><a
                                                    href="">Equipment Tracking</a></li>
                                            <li><a
                                                    href="">Device Options</a>
                                            </li>
                                            <li><a
                                                    href="">Integrations</a>
                                            </li>
                                            <li><a
                                                    href="">Plans</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li
                                        class="menu-item-has-children">
                                        <a href="">Our Benefits</a>
                                        <ul class="sub-menu">
                                            <li><a
                                                    href="">Productivity</a></li>
                                            <li><a
                                                    href="">Visibility</a></li>
                                            <li><a
                                                    href="">Safety</a></li>
                                            <li><a
                                                    href="">Sustainability</a>
                                            </li>
                                            <li><a
                                                    href="">Fraud
                                                    Prevention</a>
                                            </li>
                                            <li><a
                                                    href="">Security</a></li>
                                            <li><a
                                                    href="">Fleet Health</a></li>
                                        </ul>
                                    </li>
                                    <li
                                        class="menu-item-has-children ">
                                        <a href="">About</a>
                                        <ul class="sub-menu">
                                            <li><a
                                                    href="">Our Company</a></li>
                                            <li><a
                                                    href="">Achievements</a>
                                            </li>
                                            <li><a
                                                    href="">Press Releases</a></li>
                                            <li><a
                                                    href="">Dealer
                                                    Program</a>
                                            </li>
                                            <li><a
                                                    href="">Referral Program</a></li>
                                            <li><a
                                                    href="">Open
                                                    Positions</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li
                                        class=" menu-item-has-children">
                                        <a href="">Resources</a>
                                        <ul class="sub-menu">
                                            <li><a
                                                    href="">Support Center</a></li>
                                            <li><a
                                                    href="">Research Tools</a></li>
                                            <li><a
                                                    href="">Blogs</a></li>
                                            <li><a
                                                    href="">Case Studies</a></li>
                                        </ul>
                                    </li>
                                    <li class=" menu-item-has-children"><a
                                            href="">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="li-none">
                                <ul>
                                    <li>
                                        <a href="" target="_blank">
                                            <img
                                                src="<?php //echo get_stylesheet_directory_uri(); 
                                                        ?>/landing_assets/img/login-person.svg"
                                                alt="user">
                                            Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:888-803-0200" target="_blank">
                                            <img width="20" height="20"
                                                src="<?php //echo get_stylesheet_directory_uri(); 
                                                        ?>/landing_assets/img/volume.svg"
                                                alt="phone">
                                            888-803-0200
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="head-button">
                            <img src="<?php //echo get_stylesheet_directory_uri(); 
                                        ?>/landing_assets/img/search.svg" alt="search" class="search-toggle">
                            <a href="#" class="navbtn">See it now</a>
                        </div>
                        <div class="hamburger">
                            <button>
                                <span id="bar-1"></span>
                                <span id="bar-2"></span>
                                <span id="bar-3"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- </section> -->

    <div class="site-logo">
        <a class="logo-img" href="<?php echo home_url('/'); ?>">
            <?php $site_logo = get_field('site_logo', 'option'); ?>
            <img src="<?php echo $site_logo; ?>" alt="Site Logo">
        </a>
    </div>

    <main>

        <!-- banner -->
        <section class="banner" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <?php
            $h_bnr_heading = get_field('h_bnr_heading');
            $h_bnr_typ_txt = get_field('h_bnr_typ_txt');
            $h_bnr_btn = get_field('h_bnr_btn');
            $h_bnr_float_img = get_field('h_bnr_float_img');
            $h_bnr_dsk = get_field('h_bnr_dsk');
            ?>
            <div class="banner-shapes">
                <img src="<?php echo $h_bnr_float_img['url']; ?>" alt="<?php echo $h_bnr_float_img['alt']; ?>">
            </div>
            <div class="banner-shapes-second">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/img/bnr-left-shape.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left">
                            <h1><?php echo $h_bnr_heading; ?></h1>
                            <p class="typeJsText type-write" data-typetext="<?php echo $h_bnr_typ_txt; ?>">
                                A.I. Powered GPS Fleet Tracking
                            </p>
                            <div class="banner-icon">
                                <?php
                                if (have_rows('h_bnr_ftr_pnts')) {
                                    while (have_rows('h_bnr_ftr_pnts')) {
                                        the_row();
                                        $h_bnr_ftr_pnts_img = get_sub_field('h_bnr_ftr_pnts_img');
                                        $h_bnr_ftr_pnts_txt = get_sub_field('h_bnr_ftr_pnts_txt');
                                ?>
                                        <p><span>
                                                <img src="<?php echo $h_bnr_ftr_pnts_img['url']; ?>" alt="<?php echo $h_bnr_ftr_pnts_img['alt']; ?>">
                                            </span><?php echo $h_bnr_ftr_pnts_txt; ?>
                                        </p>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="banner-icon">
                                <?php $h_bnr_content = get_field('h_bnr_content'); ?>
                                <p><?php echo $h_bnr_content; ?></p>
                            </div>
                            <!-- <a href="<?php //echo $h_bnr_btn['url']; 
                                            ?>" class="primary-btn"><?php //echo $h_bnr_btn['title']; 
                                                                    ?></a> -->
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="right">
                            <img src="<?php echo $h_bnr_dsk['url']; ?>" alt="<?php echo $h_bnr_dsk['alt']; ?>">
                            <!-- Button trigger modal -->
                            <button type="button" class="trigger-modal" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="ri-play-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->

        <!-- serving-slider -->
        <section class="serving-slider" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn_group">
                            <?php
                            $cmn_btn_get_pricing = get_field('cmn_btn_get_pricing');
                            $cmn_btn_take_the_tour = get_field('cmn_btn_take_the_tour');
                            ?>
                            <!-- <a href="<?php //echo $cmn_btn_get_pricing['url']; 
                                            ?>" class="btn btn_orange"><?php //echo $cmn_btn_get_pricing['title']; 
                                                                        ?></a>
                                <a href="<?php //echo $cmn_btn_take_the_tour['url']; 
                                            ?>" class="btn btn_green"><?php //echo $cmn_btn_take_the_tour['title']; 
                                                                        ?></a> -->
                            <a href="javascript:void(0);" class="btn btn_orange btn-get-pricing" id=""><?php echo $cmn_btn_get_pricing['title']; ?></a>
                            <a href="javascript:void(0);" class="btn btn_green btn-take-tour" id=""><?php echo $cmn_btn_take_the_tour['title']; ?></a>
                        </div>
                        <div class="slider-sec">
                            <?php $serv_s_hding = get_field('serv_s_hding'); ?>
                            <h2 class="heading"><?php echo $serv_s_hding; ?></h2>
                            <div class="swiper slider-serving">
                                <div class="swiper-wrapper">
                                    <?php if (have_rows('serv_s_sldr_rep')) {
                                        while (have_rows('serv_s_sldr_rep')) {
                                            the_row();
                                            $serv_s_sldr_rep_img = get_sub_field('serv_s_sldr_rep_img');
                                    ?>
                                            <div class="swiper-slide">
                                                <div class="serving-img">
                                                    <img src="<?php echo $serv_s_sldr_rep_img['url']; ?>" alt="<?php echo $serv_s_sldr_rep_img['alt']; ?>">
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- serving-slider end -->

        <section class="gps-tracking">
            <div class="container">
                <div class="gps-heading">
                    <?php $gps_trac_he = get_field('gps_trac_he'); ?>
                    <h2 class="heading"><?php echo $gps_trac_he; ?></h2>
                </div>
                <div class="gps-traking-grid">
                    <div class="item">
                        <div class="heading-group">
                            <?php $gps_trac_real_time_he = get_field('gps_trac_real_time_he');
                            $gps_trac_real_time_sub_he = get_field('gps_trac_real_time_sub_he'); ?>
                            <h3><?php echo $gps_trac_real_time_he; ?></h3>
                            <p><?php echo $gps_trac_real_time_sub_he; ?></p>
                        </div>
                        <div class="map">
                            <video loop autoplay muted width="640" height="360">
                                <source src="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/vid/maps-animate.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="item">
                        <div class="heading-group">
                            <?php $gps_trac_fleet_he = get_field('gps_trac_fleet_he');
                            $gps_trac_fleet_sub_he = get_field('gps_trac_fleet_sub_he'); ?>
                            <h3><?php echo $gps_trac_fleet_he; ?></h3>
                            <p><?php echo $gps_trac_fleet_sub_he; ?></p>
                        </div>
                        <div class="fleet-safety">
                            <div class="chart-container">
                                <canvas id="lineChart" style="height:300px;"></canvas>
                            </div>
                            <div class="score-wrapper">
                                <!-- <div class="gauge">
                                    <svg width="200" height="100" viewBox="0 0 200 100">
                                        <path class="bg" d="M 10 100 A 90 90 0 0 1 190 100"></path>
                                        <path class="progress" d="M 10 100 A 90 90 0 0 1 190 100" style="stroke-dasharray: 283; stroke-dashoffset: 192.44;"></path>
                                    </svg>
                                    <div class="text" id="rankText">40/125</div>
                                </div>
                                <div class="stats">
                                    <div class="score">
                                        <h4>Your Score</h4><strong id="yourScore">89</strong>
                                    </div>
                                    <div class="fleet">
                                        <h4>Fleet Average</h4><strong id="fleetAvg">95</strong>
                                    </div>
                                    <div class="variance">
                                        <h4>Variance</h4><strong id="variance">-6%</strong>
                                    </div>
                                </div> -->
                                <p>Your Ranking</p>
                                <div class="gauge">
                                    <svg width="200" height="100" viewBox="0 0 200 100">
                                        <path class="bg" d="M 10 100 A 90 90 0 0 1 190 100"
                                            style="fill:none; stroke:#eee; stroke-width:15; stroke-linecap:round;" />
                                        <path class="progress" d="M 10 100 A 90 90 0 0 1 190 100"
                                            style="fill:none; stroke:#4a90e2; stroke-width:15; stroke-linecap:round; stroke-dasharray:283; stroke-dashoffset:283; transition:stroke-dashoffset 1.5s ease;" />
                                    </svg>
                                    <div class="text" id="rankText" style="font-size:20px; font-weight:700;">0/125</div>
                                </div>
                                <div class="stats" style="display:flex; justify-content:center; gap:30px; margin-top:10px;">
                                    <div class="score">
                                        <h4>Your Score</h4><strong id="yourScore">0</strong>
                                    </div>
                                    <div class="fleet">
                                        <h4>Fleet Average</h4><strong id="fleetAvg">0</strong>
                                    </div>
                                    <div class="variance">
                                        <h4>Variance</h4><strong id="variance">0%</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="alerts">
            <div class="container">
                <div class="heading-group">
                    <?php $gps_trac_alert_he = get_field('gps_trac_alert_he');
                    $gps_trac_alert_sub_he = get_field('gps_trac_alert_sub_he'); ?>
                    <h3><?php echo $gps_trac_alert_he; ?></h3>
                    <p><?php echo $gps_trac_alert_sub_he; ?></p>
                </div>
                <div class="alert-card-grid">

                    <?php
                    if (have_rows('gps_trac_alert_cards_rep')) {
                        while (have_rows('gps_trac_alert_cards_rep')) {
                            the_row();
                            $alert_cards_rep_person_name = get_sub_field('alert_cards_rep_person_name');
                            $alert_cards_rep_issue_date = get_sub_field('alert_cards_rep_issue_date');
                            $alert_cards_rep_issue_detail = get_sub_field('alert_cards_rep_issue_detail');
                    ?>
                            <article class="alert-card">
                                <div class="alert-icon" aria-hidden="true">
                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="6" width="18" height="12" fill="#ffffff"></rect>
                                        <path
                                            d="M3 6l9 7 9-7"
                                            stroke="#0b3b69"
                                            stroke-width="1.5"
                                            fill="none"></path>
                                    </svg>
                                </div>
                                <div class="alert-content">
                                    <h3 class="alert-title"><?php echo $alert_cards_rep_person_name; ?></h3>
                                    <div class="issued"><?php echo $alert_cards_rep_issue_date; ?></div>
                                </div>
                                <div class="alert-tag"><?php echo $alert_cards_rep_issue_detail; ?></div>
                            </article>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="btn_group">
                    <?php
                    $cmn_btn_get_pricing = get_field('cmn_btn_get_pricing');
                    $cmn_btn_take_the_tour = get_field('cmn_btn_take_the_tour');
                    ?>
                    <!-- <a href="<?php //echo $cmn_btn_get_pricing['url']; 
                                    ?>" class="btn btn_orange"><?php //echo $cmn_btn_get_pricing['title']; 
                                                                ?></a>
                                <a href="<?php //echo $cmn_btn_take_the_tour['url']; 
                                            ?>" class="btn btn_green"><?php //echo $cmn_btn_take_the_tour['title']; 
                                                                        ?></a> -->
                    <a href="javascript:void(0);" class="btn btn_orange btn-get-pricing" id=""><?php echo $cmn_btn_get_pricing['title']; ?></a>
                    <a href="javascript:void(0);" class="btn btn_green btn-take-tour" id=""><?php echo $cmn_btn_take_the_tour['title']; ?></a>
                </div>
            </div>
        </section>

        <!-- enterprise -->
        <section class="enterprise" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                        $entr_p_heding = get_field('entr_p_heding');
                        $entr_p_s_heding = get_field('entr_p_s_heding');
                        $entr_p_btn = get_field('entr_p_btn');
                        ?>
                        <h2 class="heading"><?php echo $entr_p_heding; ?></h2>
                        <p class="para"><?php echo $entr_p_s_heding; ?></p>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="banner-icon">
                                <?php
                                if (have_rows('entr_p_fetr_pnts_rep')) {
                                    $count = 1;
                                    while (have_rows('entr_p_fetr_pnts_rep')) {
                                        the_row();
                                        $entr_p_fetr_pnts_rep_img = get_sub_field('entr_p_fetr_pnts_rep_img');
                                        $entr_p_fetr_pnts_rep_title = get_sub_field('entr_p_fetr_pnts_rep_title');
                                        $entr_p_fetr_pnts_rep_content = get_sub_field('entr_p_fetr_pnts_rep_content');
                                ?>
                                        <!-- <p>
                                            <span>
                                                <img src="<?php //echo $entr_p_fetr_pnts_rep_img['url']; 
                                                            ?>" alt="<?php //echo $entr_p_fetr_pnts_rep_img['alt']; 
                                                                        ?>">
                                            </span><?php //echo $entr_p_fetr_pnts_rep_title; 
                                                    ?>
                                        </p> -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $count; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $count; ?>">
                                                    <img src="<?php echo $entr_p_fetr_pnts_rep_img['url']; ?>" alt="<?php echo $entr_p_fetr_pnts_rep_img['alt']; ?>">
                                                    <?php echo $entr_p_fetr_pnts_rep_title; ?>
                                                </button>
                                            </h2>
                                            <div id="flush-collapse<?php echo $count; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body"><?php echo $entr_p_fetr_pnts_rep_content; ?></div>
                                            </div>
                                        </div>
                                <?php
                                        $count++;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <!-- <a href="<?php //echo $entr_p_btn['url']; 
                                        ?>" class="primary-btn"><?php //echo $entr_p_btn['title']; 
                                                                ?></a> -->
                        <div class="btn_group">
                            <?php
                            $cmn_btn_get_pricing = get_field('cmn_btn_get_pricing');
                            $cmn_btn_take_the_tour = get_field('cmn_btn_take_the_tour');
                            ?>
                            <!-- <a href="<?php //echo $cmn_btn_get_pricing['url']; 
                                            ?>" class="btn btn_orange"><?php //echo $cmn_btn_get_pricing['title']; 
                                                                        ?></a>
                                <a href="<?php //echo $cmn_btn_take_the_tour['url']; 
                                            ?>" class="btn btn_green"><?php //echo $cmn_btn_take_the_tour['title']; 
                                                                        ?></a> -->
                            <a href="javascript:void(0);" class="btn btn_orange btn-get-pricing" id=""><?php echo $cmn_btn_get_pricing['title']; ?></a>
                            <a href="javascript:void(0);" class="btn btn_green btn-take-tour" id=""><?php echo $cmn_btn_take_the_tour['title']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- enterprise  end -->

        <!-- <section class="testimonials" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
         <div class="container">
            <div class="col-12">
               <h2 class="heading">Hear From Our Clients</h2>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <div class="all-users">
                        <div class="user-name">
                           <figure><img src="<?php //echo get_stylesheet_directory_uri(); 
                                                ?>/landing_assets/img/user1.webp" alt="user"></figure>
                           <div class="user-info">
                              <h6>Chris Miller</h6>
                              <p>Trane</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="all-users">
                        <div class="user-name">
                           <figure><img src="<?php //echo get_stylesheet_directory_uri(); 
                                                ?>/landing_assets/img/user2.webp" alt="user"></figure>
                           <div class="user-info">
                              <h6>Chris Miller</h6>
                              <p>Trane</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <div class="all-users">
                        <div class="user-name">
                           <figure><img src="<?php //echo get_stylesheet_directory_uri(); 
                                                ?>/landing_assets/img/user3.webp" alt="user"></figure>
                           <div class="user-info">
                              <h6>Chris Miller</h6>
                              <p>Trane</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slider-testimonials-bg">
               <div class="swiper mySwiper2">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="serving-img">
                           <div class="profiler">
                              <img src="<?php //echo get_stylesheet_directory_uri(); 
                                        ?>/landing_assets/img/user1.webp" alt="user">
                           </div>
                           <ul>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                           </ul>
                           <h5>This has been an excellent experience for us</h5>
                           <p>"Much more user friendly, better features and lower cost. Wins across the board."</p>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="serving-img">
                           <div class="profiler">
                              <img src="<?php //echo get_stylesheet_directory_uri(); 
                                        ?>/landing_assets/img/user2.webp" alt="user">
                           </div>
                           <ul>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                           </ul>
                           <h5>This has been an excellent experience for us</h5>
                           <p>"Much more user friendly, better features and lower cost. Wins across the board."</p>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="serving-img">
                           <div class="profiler">
                              <img src="<?php //echo get_stylesheet_directory_uri(); 
                                        ?>/landing_assets/img/user3.webp" alt="user">
                           </div>
                           <ul>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                           </ul>
                           <h5>This has been an excellent experience for us</h5>
                           <p>"Much more user friendly, better features and lower cost. Wins across the board."</p>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="serving-img">
                           <div class="profiler">
                              <img src="<?php //echo get_stylesheet_directory_uri(); 
                                        ?>/landing_assets/img/user1.webp" alt="user">
                           </div>
                           <ul>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                              <li><img src="<?php //echo get_stylesheet_directory_uri(); 
                                            ?>/landing_assets/img/full-rating.svg" alt="star"></li>
                           </ul>
                           <h5>This has been an excellent experience for us</h5>
                           <p>"Much more user friendly, better features and lower cost. Wins across the board."</p>
                        </div>
                     </div>
                  </div> -->
        <!-- <div class="swiper-button-next"></div>
                     <div class="swiper-button-prev"></div> -->
        <!-- </div>
            </div>
         </div>
      </section> -->

        <section class="testimonial-section tscss" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
            <div class="container">
                <div class="test-head">
                    <?php if ($hear_words_heading = get_field('hear_words_heading', 'options')) : ?>
                        <h2 class="heading"><?php echo esc_html($hear_words_heading); ?></h2>
                    <?php endif; ?>
                    <?php if ($hear_words_tagline = get_field('hear_words_tagline', 'options')) : ?>
                        <p><?php echo esc_html($hear_words_tagline); ?></p>
                    <?php endif; ?>
                </div>
                <div class="test-tab-area">
                    <div class="all-users">
                        <?php if (have_rows('hear_words_repeater', 'options')):  while (have_rows('hear_words_repeater', 'options')) : the_row(); ?>
                                <div class="user user-active">
                                    <img src="<?php the_sub_field('hear_words_img', 'options'); ?>" alt="user">
                                    <div class="user-info">
                                        <h6><?php the_sub_field('hear_title', 'options'); ?></h6>
                                        <p><?php the_sub_field('hear_heading', 'options'); ?></p>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>
                    </div>
                    <div class="all-comments">
                        <div class="comment-box">
                            <?php if (have_rows('hear_words_repeater', 'options')):  while (have_rows('hear_words_repeater', 'options')) : the_row(); ?>
                                    <div class="comment-slides">
                                        <div class="comment">
                                            <!--                                         <img src="<?php the_sub_field('stars_img', 'options'); ?>" alt="rating"> -->
                                            <div class="rating-flex">

                                                <?php if (have_rows('rating_repeater', 'options')) : ?>
                                                    <?php while (have_rows('rating_repeater', 'options')) :
                                                        the_row(); ?>


                                                        <img src="<?php echo esc_url(get_sub_field('rating_image', 'options')); ?>">
                                                    <?php endwhile; ?>
                                                <?php endif; ?>

                                            </div>
                                            <h5><?php the_sub_field('review_heading', 'options'); ?></h5>
                                            <p><?php the_sub_field('review_tagline', 'options'); ?></p>
                                        </div>
                                    </div>
                            <?php endwhile;
                            endif; ?>

                        </div>
                        <div class="cap-slide-arrows">
                            <div class="prev-comment">
                                <img src="<?php bloginfo('template_url'); ?>/images/prev.svg" alt="prev">
                            </div>
                            <div class="next-comment">
                                <img src="<?php bloginfo('template_url'); ?>/images/next.svg" alt="next">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- serving-slider -->
        <section class="serving-slider logo-slider">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="slider-sec">
                            <div class="swiper slider-serving-new">
                                <div class="swiper-wrapper">
                                    <?php
                                    if (have_rows('srving_slider_2_rep')) {
                                        while (have_rows('srving_slider_2_rep')) {
                                            the_row();
                                            $srving_slider_2_rep_img = get_sub_field('srving_slider_2_rep_img');
                                    ?>
                                            <div class="swiper-slide">
                                                <div class="serving-img">
                                                    <img src="<?php echo $srving_slider_2_rep_img['url']; ?>" alt="<?php echo $srving_slider_2_rep_img['alt']; ?>">
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php //$srving_slider_2_btn = get_field('srving_slider_2_btn'); 
                            ?>
                            <!-- <a href="<?php //echo $srving_slider_2_btn['url']; 
                                            ?>" class="primary-btn"><?php //echo $srving_slider_2_btn['title']; 
                                                                    ?></a> -->
                            <div class="btn_group">
                                <?php
                                $cmn_btn_get_pricing = get_field('cmn_btn_get_pricing');
                                $cmn_btn_take_the_tour = get_field('cmn_btn_take_the_tour');
                                ?>
                                <!-- <a href="<?php //echo $cmn_btn_get_pricing['url']; 
                                                ?>" class="btn btn_orange"><?php //echo $cmn_btn_get_pricing['title']; 
                                                                            ?></a>
                                <a href="<?php //echo $cmn_btn_take_the_tour['url']; 
                                            ?>" class="btn btn_green"><?php //echo $cmn_btn_take_the_tour['title']; 
                                                                        ?></a> -->
                                <a href="javascript:void(0);" class="btn btn_orange btn-get-pricing" id=""><?php echo $cmn_btn_get_pricing['title']; ?></a>
                                <a href="javascript:void(0);" class="btn btn_green btn-take-tour" id=""><?php echo $cmn_btn_take_the_tour['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- serving-slider end -->

        <!-- <section class="compaire" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
         <div class="compaire-layer">
            <img src="<?php //echo get_stylesheet_directory_uri(); 
                        ?>/landing_assets/img/Maskgroup.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h2 class="heading">How to compare</h2>
                  <table>
                     <thead>
                        <tr>
                           <th class="feature-column">Features</th>
                           <th class="fieldlogix-header"><img src="<?php //echo get_stylesheet_directory_uri(); 
                                                                    ?>/landing_assets/img/Logo-new.svg" alt=""></th>
                           <th class="basic-header">Basic Tracking<br>Systems</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="feature-column">Real-Time Tracking</td>
                           <td class="check">✔</td>
                           <td class="check">✔</td>
                        </tr>
                        <tr>
                           <td class="feature-column">Safety Monitoring</td>
                           <td class="check">✔</td>
                           <td class="check">✔</td>
                        </tr>
                        <tr>
                           <td class="feature-column">Reporting</td>
                           <td class="check">✔</td>
                           <td class="check">✔</td>
                        </tr>
                        <tr>
                           <td class="feature-column">Vehicle Diagnostics</td>
                           <td class="check">✔</td>
                           <td class="check">✔</td>
                        </tr>
                        <tr>
                           <td class="feature-column">Maintenance Monitoring</td>
                           <td class="check">✔</td>
                           <td class="check">✔</td>
                        </tr>
                        <tr>
                           <td class="feature-column">Native Mobile Apps</td>
                           <td class="check">✔</td>
                           <td class="check">✔</td>
                        </tr>
                        <tr>
                           <td class="feature-column">Dash Cameras</td>
                           <td class="check">✔</td>
                           <td class="check">✔</td>
                        </tr>
                        <tr>
                           <td class="feature-column">Safety Scorecard</td>
                           <td class="check">✔</td>
                           <td class="check">✔</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </section> -->

        <section class="gps-fleet-management anchide">
            <div class="compare-table-section">
                <div class="container">
                    <?php if ($compare_heading = get_field('hwcs_heding')) : ?>
                        <h2 class="heading"><?php echo esc_html($compare_heading); ?></h2>
                    <?php endif; ?>
                    <div class="compare-table-area">
                        <?php if ($compare_table = get_field('hwcs_table')) : ?>
                            <?php echo $compare_table; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Take the tour -->
        <section class="take" id="take" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Get Pricing</button>
                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Take the Tour</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                <div class="take-sec get-pricing">
                                    <h4>Get Pricing</h4>
                                    <p>Plans starting at $14.95/mo with free equipment</p>
                                    <?php echo do_shortcode('[gravityform id="2" title="false" ajax="true"]'); ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                <div class="take-sec take-tour">
                                    <h4>Take the Tour</h4>
                                    <?php echo do_shortcode('[gravityform id="64" title="false" ajax="true"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- take end -->

        <?php //get_template_part('template-parts/tour-section-template'); 
        ?>

    </main>

    <!-- <footer>
        <section class="site-footer">
            <div class="container">
                <div class="inner-footer">
                    <div class="newsletter-content">
                        <div class="subscribe">
                            <h5>Subscribe to Our Newsletter</h5>
                            <p>Subscribe to our newsletter to stay in touch with our latest news</p>
                        </div>
                        <div class="news-input">
                            <input type="text" placeholder="Email Address">
                            <button class="primary-btn">Subscribe</button>
                        </div>
                    </div>
                    <div class="logo-links">
                        <div class="footer-logos">
                            <div class="main-logo">
                                <a href="#">
                                    <img src="<?php //echo get_stylesheet_directory_uri(); 
                                                ?>/landing_assets/img/foot-logo.svg" alt="FieldLogix"></noscript>
                                </a>
                            </div>
                            <div class="social-logos">
                                <div class="social">
                                    <a href="#">
                                        <img src="<?php //echo get_stylesheet_directory_uri(); 
                                                    ?>/landing_assets/img/facebook-white.svg">
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="#">
                                        <img src="<?php //echo get_stylesheet_directory_uri(); 
                                                    ?>/landing_assets/img/twitter.svg">
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="#">
                                        <img src="<?php //echo get_stylesheet_directory_uri(); 
                                                    ?>/landing_assets/img/instagram.svg">
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="#">
                                        <img src="<?php //echo get_stylesheet_directory_uri(); 
                                                    ?>/landing_assets/img/youtube.svg">
                                    </a>
                                </div>
                                <div class="social">
                                    <a href="#">
                                        <img src="<?php //echo get_stylesheet_directory_uri(); 
                                                    ?>/landing_assets/img/inkedin.svg">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-links">
                            <div class="links">
                                <h4>Our Solutions</h4>
                                <ul>
                                    <li><a href="">GPS Fleet Managment</a></li>
                                    <li><a href="">Fleet Dashcams</a></li>
                                    <li><a href="">Routing & Dispatching</a></li>
                                    <li><a href="">Vehicle Inspections</a></li>
                                    <li><a href="">Goose Time Clock App</a></li>
                                    <li><a href="">Electronic Logging Device</a></li>
                                    <li><a href="">Equipment Tracking</a></li>
                                    <li><a href="">Device Options</a></li>
                                    <li><a href="">Integrations</a></li>
                                    <li><a href="">Plans & Pricing</a></li>
                                </ul>
                            </div>
                            <div class="links">
                                <h4>More From Us</h4>
                                <ul>
                                    <li><a href="">Alliance Partners</a></li>
                                    <li><a href="">HVAC Benefits</a></li>
                                    <li><a href="">Fire & Security Benefits</a></li>
                                    <li><a href="">Construction Fleet Tracking Benefits</a></li>
                                    <li><a href="">Building Materials Benefits</a></li>
                                    <li><a href="">Government Benefits</a></li>
                                    <li><a href="">Solar Benefits</a></li>
                                    <li><a href="">Other Service Companies Benefits</a></li>
                                </ul>
                            </div>
                            <div class="links">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Our Support Process</a></li>
                                    <li><a href="">FAQ’s</a></li>
                                    <li><a href="">Contact Us</a></li>
                                    <li><a href="">Privacy Notice</a></li>
                                    <li><a href="">Software License</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="copy">
                        <p>© 2024 FieldLogix. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer> -->

    <!--vide0 Modal -->
    <div class="modal fade video-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php $h_bnr_vid_url = get_field('h_bnr_vid_url'); ?>
                    <iframe width="560" height="315" src="<?php echo $h_bnr_vid_url; ?>"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-overlay search-box">
        <div class="popup-container">
            <form role="search" id="searchheader">
                <input type="text" value="" name="s" id="searchheaderinput" placeholder="Search here">
                <button type="submit">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/img/search-popup.svg">
                </button>
            </form>
        </div>
    </div>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/js/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/landing_assets/js/custom.js?ver=<?php echo time(); ?>"></script>
    <!-- <script src="<?php //echo get_stylesheet_directory_uri(); 
                        ?>/js/custom.js?ver=<?php //echo time(); 
                                            ?>"></script>
   <script src="<?php //echo get_stylesheet_directory_uri(); 
                ?>/js/custom-new.js?ver=<?php //echo time(); 
                                        ?>"></script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- <script>
      var swiper = new Swiper(".slider-testimonials", {
         direction: 'horizontal',
         slidesPerView: 6,
         spaceBetween: 21,
         loop: true,
         autoplay: {
            delay: 3000,
            disableOnInteraction: false
         },
         breakpoints: {
            // when window width is >= 320px
            320: {
               slidesPerView: 1,
            },
            // when window width is >= 480px
            480: {
               slidesPerView: 1,
            },
            // when window width is >= 768px
            768: {
               slidesPerView: 1,
            },
            // when window width is >= 1024px
            1024: {
               slidesPerView: 1,
            }
         }
      });
   </script> -->

    <script>
        var swiper = new Swiper(".slider-serving-new", {
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
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            spaceBetween: 0,
            slidesPerView: 3,
            freeMode: false,
            watchSlidesProgress: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                }
            }
        });
        var swiper2 = new Swiper(".mySwiper2", {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>

    <script>
        AOS.init({
            once: true // only animate once when scrolling down
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>