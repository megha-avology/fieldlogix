<?php
/* Template Name: gps-fleet-management-page Template */
get_header();?>


<main id="main" class="gps-fleet-management">
            <section class="gps-fleet-management">
                <div class="hero">
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
                            <?php if ($desktop_img_url = get_field('fleet_banner_desktop')) :

                            // Convert URL to attachment ID
                            $desktop_img_id = attachment_url_to_postid($desktop_img_url);

                            // Default ALT
                            $desktop_alt = '';

                            if ($desktop_img_id) {
                                // Fetch ALT text
                                $desktop_alt = get_post_meta($desktop_img_id, '_wp_attachment_image_alt', true);

                                // Fallback if ALT empty
                                if (!$desktop_alt) {
                                    $desktop_alt = get_the_title($desktop_img_id);
                                }
                            }

                        ?>
                            <img src="<?php echo esc_url($desktop_img_url); ?>" alt="<?php echo esc_attr($desktop_alt); ?>" class="desktop-ban-img">
                        <?php endif; ?>

                        <?php if ($mobile_img_url = get_field('fleet_banner_mobile')) :

                            // Convert URL to attachment ID
                            $mobile_img_id = attachment_url_to_postid($mobile_img_url);

                            // Default ALT
                            $mobile_alt = '';

                            if ($mobile_img_id) {
                                // Fetch ALT text
                                $mobile_alt = get_post_meta($mobile_img_id, '_wp_attachment_image_alt', true);

                                // Fallback if ALT empty
                                if (!$mobile_alt) {
                                    $mobile_alt = get_the_title($mobile_img_id);
                                }
                            }

                        ?>
                            <img src="<?php echo esc_url($mobile_img_url); ?>" alt="<?php echo esc_attr($mobile_alt); ?>" class="mbl-ban-img">
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="gps-fleet-management">
                <div class="fleets-section">
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

                                                // Fallback if ALT empty
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
                    </div>
                </div>
            </section>
            <?php get_template_part( 'template-parts/partner-template' ) ;?>
            <section class="gps-fleet-management">
                <div class="success-story-section">
                    <div class="container">
                        <div class="success-content-area">
                            <div class="success-left">
                            <?php if ( $success_stories_heading = get_field( 'success_stories_heading' ) ) : ?>
	                           <h2><?php echo esc_html( $success_stories_heading ); ?></h2>
                            <?php endif; ?>
                            <?php if ( $success_stories_tagline_ = get_field( 'success_stories_tagline_' ) ) : ?>
                                    <p><?php echo $success_stories_tagline_; ?></p>
                                <?php endif; ?>
                                    <?php
                                        $link = get_field( 'see_all_btn' );
                                        if ( $link ) :
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            ?>
                                            <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                       
                               
                                
                            </div>
                            <div class="success-right">
                                <div class="success-slider-box">
                                    <img src="<?php bloginfo('template_url');?>/images/succes-coma.svg" alt="quote">
                                    <div class="success-slide-content">
                                        <?php if( have_rows('success_repeater') ):  while ( have_rows('success_repeater') ) : the_row(); ?>
                                        <div class="success-slide">
                                            <p><?php the_sub_field('review_title'); ?></p>
                                        </div>
                                        <?php endwhile; endif; ?>
                                  
                                    </div>
                                </div>
                                <div class="all-successors">
                                    <?php if( have_rows('success_repeater') ):  while ( have_rows('success_repeater') ) : the_row(); ?>
                                    <div class="successor active-successor">
										<a href="<?php the_sub_field('review_link'); ?>" target="_blank">
											<img src="<?php the_sub_field('review_img'); ?>" alt="successor">
										</a>
                                    </div>
                                    <?php endwhile; endif; ?>
                              
                                </div>
								<div class="cap-slide-arrows">
                                    <div class="prev-successor">
                                        <img src="<?php bloginfo('template_url');?>/images/prev.svg" alt="prev">
                                    </div>
                                    <div class="next-successor">
                                        <img src="<?php bloginfo('template_url');?>/images/next.svg" alt="next">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="gps-fleet-management">
                <div class="compare-table-section">
                    <div class="container">
                    <?php if ( $compare_heading = get_field( 'compare_heading' ) ) : ?>
                        <h2><?php echo esc_html( $compare_heading ); ?></h2>
                    <?php endif; ?>
                        <div class="compare-table-area">
                        <?php if ( $compare_table = get_field( 'compare_table' ) ) : ?>
	<?php echo $compare_table; ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="gps-fleet-management">
                <div class="faq-section">
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
                                        <img src="<?php bloginfo('template_url');?>/images/plus.svg" alt="plus">
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
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
       
        </main>



<?php get_footer();?>