<?php
/* Template Name: dash-cameras-page Template */
get_header();?>

<main id="main">
            <section class="hero " id="dash-camera">
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
                            // Desktop banner
                            $desktop_img_url1 = get_field('fleet_banner_desktop');
                            if ($desktop_img_url1) :

                                // Convert URL to attachment ID
                                $desktop_img_id = attachment_url_to_postid($desktop_img_url1);

                                // Default ALT
                                $desktop_alt = '';

                                if ($desktop_img_id) {
                                    // Get ALT text
                                    $desktop_alt = get_post_meta($desktop_img_id, '_wp_attachment_image_alt', true);

                                    // Fallback to image title
                                    if (!$desktop_alt) {
                                        $desktop_alt = get_the_title($desktop_img_id);
                                    }
                                }
                            ?>
                                <img src="<?php echo esc_url($desktop_img_url1); ?>" alt="<?php echo esc_attr($desktop_alt); ?>" class="desktop-ban-img">
                            <?php endif; ?>

                            <?php 
                            // Mobile banner
                            $mobile_img_url = get_field('fleet_banner_mobile');
                            if ($mobile_img_url) :

                                // Convert URL to attachment ID
                                $mobile_img_id = attachment_url_to_postid($mobile_img_url);

                                // Default ALT
                                $mobile_alt_new = '';

                                if ($mobile_img_id) {
                                    // Get ALT text
                                    $mobile_alt_new = get_post_meta($mobile_img_id, '_wp_attachment_image_alt', true);

                                    // Fallback to image title
                                    if (!$mobile_alt_new) {
                                        $mobile_alt_new = get_the_title($mobile_img_id);
                                    }
                                }
                            ?>
                                <img src="<?php echo esc_url($mobile_img_url); ?>" alt="<?php echo esc_attr($mobile_alt_new); ?>" class="mbl-ban-img">
                            <?php endif; ?>
                        </div>
                    </div>
            </section>
            <section class="fleets-section" id="dash-camera">
                <div class="container">
                <div class="about-fleet">
                            <?php if ( $tracking_industry_heading = get_field( 'tracking_industry_heading' ) ) : ?>
                            <h3><?php echo esc_html( $tracking_industry_heading ); ?></h3>
                            <?php endif; ?>
                            <div class="fleet-para">
                                <?php if ( $tracking_industry_tagline = get_field( 'tracking_industry_tagline' ) ) : ?>
                                <p><?php echo $tracking_industry_tagline; ?></p>
                                <?php endif; ?>
                                <?php
                                $link = get_field( 'tracking_see_btn' );
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
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

                                            // Convert URL to attachment ID
                                            $fleet_icon_id = attachment_url_to_postid($fleet_icon_url);

                                            // Default ALT
                                            $fleet_icon_alt = '';

                                            if ($fleet_icon_id) {
                                                // Get ALT text from media library
                                                $fleet_icon_alt = get_post_meta($fleet_icon_id, '_wp_attachment_image_alt', true);

                                                // Fallback if ALT is empty
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

                                        <?php if ($fleet_data = get_sub_field('fleet_data')) : ?>
                                            <?php echo $fleet_data; ?>
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
                                    <a class="see" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <div class="all-purposes" id="dash-purposes">
                        <div class="purpose-head">
                        <?php if ( $dashcam_heading = get_field( 'dashcam_heading' ) ) : ?>
                            <h2><?php echo esc_html( $dashcam_heading ); ?></h2>
                        <?php endif; ?>
                        <?php if ( $dashcam_tagline = get_field( 'dashcam_tagline' ) ) : ?>
                            <p><?php echo esc_html( $dashcam_tagline ); ?></p>
                        <?php endif; ?>
                      
                        </div>
                        <div class="safety-purposes">
                          <?php if (have_rows('dashcam_repeater')): 
                            while (have_rows('dashcam_repeater')) : the_row(); 

                                // Get image URL
                                $dashcam_img_url = get_sub_field('dashcam_img'); 
                                $dashcam_alt = 'dashcam image'; // default fallback

                                if ($dashcam_img_url) {
                                    // Convert URL to attachment ID
                                    $dashcam_img_id = attachment_url_to_postid($dashcam_img_url);

                                    if ($dashcam_img_id) {
                                        // Get ALT text from media library
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
                                    <p><?php the_sub_field('dashcam_description'); ?></p>
                                </div>
                        <?php 
                            endwhile; 
                        endif; ?>
    
                        </div>
                    </div>
                    <div class="fuel-btns">
                    <?php
                        $link = get_field( 'dashcam_fleet_btn' );
                        if ( $link ) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
						 $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="fuel-fleet-green" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                        <?php
                            $link = get_field( 'dashcam_truck_btn' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
						 $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="fuel-fleet-blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                            
                    </div>
                </div>
            </section>
            <section class="faq-section" id="dash-faq">
            <div class="container">
                        <div class="faq-area">
                            <?php if ( $faqs_heading = get_field( 'faqs_heading' ) ) : ?>
                                <h2><?php echo esc_html( $faqs_heading ); ?></h2>
                            <?php endif; ?>
                      
                            <div class="query-content">
                            <?php if( have_rows('faqs_repeater') ):  while ( have_rows('faqs_repeater') ) : the_row(); ?>
                                <div class="QA-content">
                                    <div class="Question">
                                        <p><?php the_sub_field('questions'); ?></p>
                                        <img src="<?php bloginfo('template_url');?>/images/plus.svg" alt="">
                                    </div>
                                    <div class="answer">
                                        <div class="answer-content">
                                            <div class="inner-answer">
                                                <p><?php the_sub_field('answers'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                 
                            </div>
                            <a class="load-more load" href="#.">Load More</a>
                        </div>
                    </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>
