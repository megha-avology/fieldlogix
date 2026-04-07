<?php
/* Template Name: integrations-page Template */
get_header();?>

<main id="main">
            <section class="hero integrations" id="new-imp">
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
                            if ( $desktop_img = get_field( 'fleet_banner_desktop' ) ) : 
                                $desktop_alt = '';
                                $desktop_id  = attachment_url_to_postid($desktop_img);
                                if ($desktop_id) {
                                    $desktop_alt = get_post_meta($desktop_id, '_wp_attachment_image_alt', true);
                                    if (!$desktop_alt) {
                                        $desktop_alt = get_the_title($desktop_id);
                                    }
                                }
                            ?>
                                <img src="<?php echo esc_url($desktop_img); ?>" 
                                    alt="<?php echo esc_attr($desktop_alt); ?>" 
                                    class="desktop-ban-img">
                            <?php endif; ?>
                            <?php 
                            if ( $mobile_img = get_field( 'fleet_banner_mobile' ) ) : 

                                $mobile_alt = '';
                                $mobile_id  = attachment_url_to_postid($mobile_img);
                                if ($mobile_id) {
                                    $mobile_alt = get_post_meta($mobile_id, '_wp_attachment_image_alt', true);
                                    if (!$mobile_alt) {
                                        $mobile_alt = get_the_title($mobile_id);
                                    }
                                }
                            ?>
                                <img src="<?php echo esc_url($mobile_img); ?>" 
                                    alt="<?php echo esc_attr($mobile_alt); ?>" 
                                    class="mbl-ban-img">
                            <?php endif; ?>
                        </div>
                    </div>
            </section>
            <section class="fleets-section">
                <div class="container">
                    <div class="about-fleet" id="about-fleet-border">
                           <?php if ( $tracking_industry_heading = get_field( 'tracking_industry_heading' ) ) : ?>
                            <h3><?php echo esc_html( $tracking_industry_heading ); ?></h3>
                            <?php endif; ?>
                        <div class="fleet-para integration-fleet">
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
                </div>
            </section>
            <?php get_template_part( 'template-parts/partner-template' ) ;?>
            <section class="fleets-section" id="integration-fleet">
                <div class="container">
                    <div class="integration-head">
                        <h2>Typical Use Cases</h2>
                    </div>
                    <div class="border">
                           <?php if ( have_rows( 'flee_main_repeater' ) ) : ?>
                            <?php while ( have_rows( 'flee_main_repeater' ) ) :
                            the_row(); ?>       
                            <div class="box-area">
                              <div class="fleet-boxes">
                                    <?php if ( have_rows( 'fleet_services_repeater' ) ) : ?>
                                    <?php while ( have_rows( 'fleet_services_repeater' ) ) : the_row(); ?>
                                        <div class="single-fleet-box">
                                                <?php 
                                                $icon_url = get_sub_field('fleet_icon');
                                                $icon_alt = '';

                                                if ($icon_url) {
                                                    $icon_id = attachment_url_to_postid($icon_url);

                                                    if ($icon_id) {
                                                        // Get ALT from media library
                                                        $icon_alt = get_post_meta($icon_id, '_wp_attachment_image_alt', true);

                                                        // Fallback to image title
                                                        if (!$icon_alt) {
                                                            $icon_alt = get_the_title($icon_id);
                                                        }
                                                    }
                                                }
                                                ?>

                                                <?php if ($icon_url): ?>
                                                    <img src="<?php echo esc_url($icon_url); ?>" 
                                                        alt="<?php echo esc_attr($icon_alt); ?>">
                                                <?php endif; ?>             

                                                <?php if ( $fleet_title = get_sub_field( 'fleet_title' ) ) : ?>
                                                    <h3><?php echo esc_html( $fleet_title ); ?></h3>
                                                <?php endif; ?>

                                                <?php if ( $fleet_description = get_sub_field( 'fleet_description' ) ) : ?>
                                                    <p><?php echo $fleet_description; ?></p>
                                                <?php endif; ?>

                                                <?php if ( $fleet_data = get_sub_field( 'fleet_data' ) ) : ?>
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
                    <div class="all-purposes" id="inte-purpose">
                    <?php if ( $dashcam_heading = get_field( 'dashcam_heading' ) ) : ?>
                       <h2> <?php echo esc_html( $dashcam_heading ); ?></h2>
                    <?php endif; ?>
        
                      <div class="safety-purposes">
                            <?php if( have_rows('dashcam_repeater') ):  
                                while ( have_rows('dashcam_repeater') ) : the_row(); 

                                    $img_urll = get_sub_field('dashcam_img');
                                    $img_alt_tag = '';

                                    if ($img_urll) {
                                        $img_id1 = attachment_url_to_postid($img_urll);

                                        if ($img_id1) {
                                            // Get ALT from media library
                                            $img_alt_tag = get_post_meta($img_id1, '_wp_attachment_image_alt', true);

                                            // Fallback to image title
                                            if (!$img_alt_tag) {
                                                $img_alt_tag = get_the_title($img_id1);
                                            }
                                        }
                                    }
                            ?>
                                <div class="purpose">
                                    <?php if ($img_urll): ?>
                                        <img src="<?php echo esc_url($img_urll); ?>" 
                                            alt="<?php echo esc_attr($img_alt_tag); ?>">
                                    <?php endif; ?>
                                    
                                    <h3><?php the_sub_field('dashcam_title'); ?></h3>
                                    <p><?php the_sub_field('dashcam_description'); ?></p>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                        <?php
                            $link = get_field( 'dashcam_fleet_btn' );
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
	<?php get_template_part ( 'template-parts/achivements-template' ) ;?>
        </main>


<?php get_footer();?>