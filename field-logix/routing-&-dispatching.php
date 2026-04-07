<?php
/* Template Name: routing-&-dispatching-page Template */
get_header();?>

<main id="main">
            <section class="hero " id="routing-dispatching">
            <div class="banner-content-sol">
                        <div class="container">
                            <div class="left-content-sol">
                                <?php if ( $fleet_subheading = get_field( 'fleet_subheading' ) ) : ?>
                                <p><?php echo esc_html( $fleet_subheading ); ?></p>
                                <?php endif; ?>
                                <?php if ( $fleet_heading = get_field( 'fleet_heading' ) ) : ?>
                                <h1><?php echo esc_html( $fleet_heading ); ?></h1>
                                <?php endif; ?>
                                <div class="banner-buttons-sol">
                                    <?php
                                    $link = get_field( 'fleet_learn_more' );
                                    if ( $link ) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="start-btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="right-content">
                            <?php 
                            $desktop_img_url_new1 = get_field('fleet_banner_desktop');
                            if ($desktop_img_url_new1) :
                                $desktop_img_id_1 = attachment_url_to_postid($desktop_img_url_new1);
                                $desktop_alt1 = '';
                                if ($desktop_img_id_1) {
                                    $desktop_alt1 = get_post_meta($desktop_img_id_1, '_wp_attachment_image_alt', true);
                                    if (!$desktop_alt1) {
                                        $desktop_alt1 = get_the_title($desktop_img_id_1);
                                    }
                                }
                            ?>
                                <img src="<?php echo esc_url($desktop_img_url_new1); ?>" alt="<?php echo esc_attr($desktop_alt1); ?>" class="desktop-ban-img">
                            <?php endif; ?>

                            <?php 
                            $mobile_img_url = get_field('fleet_banner_mobile');
                            if ($mobile_img_url) :
                                $mobile_img_id = attachment_url_to_postid($mobile_img_url);
                                $mobile_alt = '';

                                if ($mobile_img_id) {
                                    $mobile_alt = get_post_meta($mobile_img_id, '_wp_attachment_image_alt', true);
                                    if (!$mobile_alt) {
                                        $mobile_alt = get_the_title($mobile_img_id);
                                    }
                                }
                            ?>
                                <img src="<?php echo esc_url($mobile_img_url); ?>" alt="<?php echo esc_attr($mobile_alt); ?>" class="mbl-ban-img">
                            <?php endif; ?>
                        </div>
                    </div>
            </section>
            <section class="goose-section">
                <div class="container">
                    <div class="goose-content">
                        <div class="duck">
                        <?php 
                        $tracking_industry_heading = get_field('tracking_industry_heading');
                        if ($tracking_industry_heading) : ?>
                            <h3><?php echo esc_html($tracking_industry_heading); ?></h3>
                        <?php endif; ?>

                        <?php 
                        $duck_alt = $tracking_industry_heading ? $tracking_industry_heading : 'duck';
                        ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/duck.svg" alt="<?php echo esc_attr($duck_alt); ?>" />
                        </div>
                        <div class="goose-video-area">
                        <?php if ( $tracking_industry_tagline = get_field( 'tracking_industry_tagline' ) ) : ?>
                                <p><?php echo $tracking_industry_tagline; ?></p>
                                <?php endif; ?>

                            <div class="goose-video-box" data-position>
                               <?php 
                            $video_alt = get_field('goose_video_alt') ?: 'Goose GPS vehicle tracking product demo preview';
                            ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/goose-video-img.svg" alt="<?php echo esc_attr($video_alt); ?>" />
                            <a class="video" data-fancybox
                            href="https://player.vimeo.com/video/314367952?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479;mw=1920&amp;mh=1080">
                                <span> <i class="fa-solid fa-play"></i> </span>
                            </a>
                            </div>
                            <?php
                                $link = get_field( 'tracking_see_btn' );
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="goose-a" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                          
                        </div>
                    </div>
                </div>
            </section>
            <section class="fleets-section goose-fleet">
                <div class="container">
                    <div class="goose-fleet-head">
                    <?php if ( $dashcam_heading = get_field( 'dashcam_heading' ) ) : ?>
                            <h2><?php echo esc_html( $dashcam_heading ); ?></h2>
                        <?php endif; ?>
                    </div>

                   <div class="all-purposes">
                    <div class="safety-purposes">
                        <?php if (have_rows('dashcam_repeater')):  
                            while (have_rows('dashcam_repeater')) : the_row(); 

                                // Get image URL
                                $dashcam_img_url = get_sub_field('dashcam_img'); 
                                $dashcam_alt = 'Dashcam image'; // default fallback

                                if ($dashcam_img_url) {
                                    // Convert URL to attachment ID
                                    $dashcam_img_id = attachment_url_to_postid($dashcam_img_url);

                                    if ($dashcam_img_id) {
                                        // Fetch ALT text from media library
                                        $dashcam_alt = get_post_meta($dashcam_img_id, '_wp_attachment_image_alt', true);

                                        // Fallback if ALT is empty
                                        if (!$dashcam_alt) {
                                            $dashcam_alt = get_the_title($dashcam_img_id);
                                        }
                                    }
                                }
                        ?>
                                <div class="purpose">
                                    <img src="<?php echo esc_url($dashcam_img_url); ?>" alt="<?php echo esc_attr($dashcam_alt); ?>" />
                                    <h3><?php the_sub_field('dashcam_title'); ?></h3>
                                    <?php the_sub_field('dashcam_description'); ?>
                                </div>
                        <?php 
                            endwhile; 
                        endif; ?>
                    </div>

                    <?php
                    $link = get_field('dashcam_fleet_btn');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
                        <a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
                    <div class="border">
                    <?php if ( have_rows( 'flee_main_repeater' ) ) : ?>
                            <?php while ( have_rows( 'flee_main_repeater' ) ) :
                            the_row(); ?>  
                        <div class="box-area">
                            <div class="fleet-boxes">
                            <?php if ( have_rows( 'fleet_services_repeater' ) ) : ?>
                                    <?php while ( have_rows( 'fleet_services_repeater' ) ) :
                                    the_row(); ?>
                               <div class="single-fleet-box">
                                <?php 
                                $fleet_icon_url = get_sub_field('fleet_icon'); 
                                if ($fleet_icon_url) :
                                    $fleet_icon_id = attachment_url_to_postid($fleet_icon_url);
                                    $fleet_icon_alt = 'fleet icon';
                                    if ($fleet_icon_id) {                                     
                                        $fleet_icon_alt = get_post_meta($fleet_icon_id, '_wp_attachment_image_alt', true);         
                                        if (!$fleet_icon_alt) {
                                            $fleet_icon_alt = get_the_title($fleet_icon_id);
                                        }
                                    }
                                ?>
                                <img src="<?php echo esc_url($fleet_icon_url); ?>" alt="<?php echo esc_attr($fleet_icon_alt); ?>" />
                                <?php endif; ?>
                                <?php if ($fleet_title = get_sub_field('fleet_title')) : ?>
                                    <h3><?php echo esc_html($fleet_title); ?></h3>
                                <?php endif; ?>
                                <?php if ($fleet_description = get_sub_field('fleet_description')) : ?>
                                    <p><?php echo $fleet_description; ?></p>
                                <?php endif; ?>
                            </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                           
                            </div>
                            <?php
                                $link = get_sub_field( 'fleet_more_btn' );
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                        </div>
                        <?php endwhile; ?>
                            <?php endif; ?>
                    </div>
                </div>
            </section>
            <section class="goose-dispatch-software">
                <div class="container">
                <?php if ( $success_stories_heading = get_field( 'success_stories_heading' ) ) : ?>
                        <h2><?php echo esc_html( $success_stories_heading ); ?></h2>
                    <?php endif; ?>
                 
                    <div class="goose-mobiles">
                      <div class="goose-dispatch-software-view">
                        <?php if (have_rows('success_repeater')):  
                            while (have_rows('success_repeater')) : the_row(); 
                                $review_img_url = get_sub_field('review_img'); 
                                $review_alt = 'Review image'; 
                                if ($review_img_url) {
                                    $review_img_id = attachment_url_to_postid($review_img_url);
                                    if ($review_img_id) {
                                        $review_alt = get_post_meta($review_img_id, '_wp_attachment_image_alt', true);
                                        if (!$review_alt) {
                                            $review_alt = get_the_title($review_img_id);
                                        }
                                    }
                                }
                        ?>
                                <div class="mobile">
                                    <img src="<?php echo esc_url($review_img_url); ?>" alt="<?php echo esc_attr($review_alt); ?>" />
                                    <p><?php the_sub_field('review_title'); ?></p>
                                </div>
                        <?php 
                            endwhile; 
                        endif; ?>
                    </div>
                        <?php
                            $link = get_field( 'see_all_btn' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                        
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
          
                    </div>
                </div>

            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>