<?php
/* Template Name: telematics-device-options-page Template */
get_header();?>

<main id="main">
            <section class="hero dev" id="benefits new-imp">
                <div class="banner-content-sol">
                    <div class="container">
                        <div class="left-content-sol">
                        <?php if ( $all_banner_subheading = get_field( 'all_banner_subheading' ) ) : ?>
                            <p><?php echo esc_html( $all_banner_subheading ); ?></p>
                        <?php endif; ?>
                        <?php if ( $all_banner_heading = get_field( 'all_banner_heading' ) ) : ?>
                            <h1><?php echo esc_html( $all_banner_heading ); ?></h1>
                        <?php endif; ?>
                       
                            <div class="banner-buttons-sol">
                            <?php
                            $link = get_field( 'all_banner_get_btn' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                          
                                ?>
                                <a class="start-btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                     
                            </div>
                        </div>
                    </div>
                    <div class="right-content">
                           <?php 
                            if ( $all_banner_img1 = get_field( 'all_banner_img1' ) ) : 
                                $desktop_alt = '';
                                $desktop_id  = attachment_url_to_postid($all_banner_img1);
                                if ($desktop_id) {
                                    $desktop_alt = get_post_meta($desktop_id, '_wp_attachment_image_alt', true);
                                    if (!$desktop_alt) {
                                        $desktop_alt = get_the_title($desktop_id);
                                    }
                                }
                            ?>
                            <img src="<?php echo esc_url($all_banner_img1); ?>" 
                                    alt="<?php echo esc_attr($desktop_alt); ?>" 
                                    class="desktop-ban-img">
                            <?php endif; ?>
                            <?php 
                                if ( $all_banner_img2 = get_field( 'all_banner_img2' ) ) : 
                                    $mobile_alt = '';
                                    $mobile_id  = attachment_url_to_postid($all_banner_img2);
                                    if ($mobile_id) {
                                        $mobile_alt = get_post_meta($mobile_id, '_wp_attachment_image_alt', true);
                                        if (!$mobile_alt) {
                                            $mobile_alt = get_the_title($mobile_id);
                                        }
                                    }
                                ?>
                                    <img src="<?php echo esc_url($all_banner_img2); ?>" 
                                        alt="<?php echo esc_attr($mobile_alt); ?>" 
                                        class="mbl-ban-img">
                            <?php endif; ?>
                     </div>
                </div>
            </section>
            <section class="fleets-section vehicle-Inspection electronicLoggingDevice device" id="dash-camera">
                <div class="container">
                    <div class="about-fleet">
						<?php if ( $device_main_heading = get_field( 'device_main_heading' ) ) : ?>
							<h3>
							<?php echo esc_html( $device_main_heading ); ?>	
						    </h3>
						<?php endif; ?>
         
                        <div class="fleet-para" id="equipment-para">
				<?php if ( $diverse_tagline = get_field( 'diverse_tagline' ) ) : ?>
					<p><?php echo $diverse_tagline; ?></p>
				<?php endif; ?>
                        </div>
                    </div>
                    <div class="border">
                        <div class="device-tabbing">
				<?php if( have_rows('diverse_main_repetaer') ):  while ( have_rows('diverse_main_repetaer') ) : the_row(); ?>
                            <p><?php the_sub_field('diverse_bullets_list'); ?></p>
							<?php endwhile; endif; ?>
                
                        </div>
						<?php if( have_rows('diverse_main_repetaer') ):  while ( have_rows('diverse_main_repetaer') ) : the_row(); ?>
                        <div class="box-area">
                           <div class="fleet-boxes">
                                <?php if( have_rows('diverse_repeater') ):  
                                    while ( have_rows('diverse_repeater') ) : the_row(); 
                                        $icon_url = get_sub_field('diverse_icon');
                                        $icon_alt = '';
                                        if ($icon_url) {
                                            $icon_id = attachment_url_to_postid($icon_url);
                                            if ($icon_id) {
                                                $icon_alt = get_post_meta($icon_id, '_wp_attachment_image_alt', true);
                                                if (!$icon_alt) {
                                                    $icon_alt = get_the_title($icon_id);
                                                }
                                            }
                                        }
                                ?>
                                    <div class="single-fleet-box">
                                        <?php if ($icon_url): ?>
                                            <img src="<?php echo esc_url($icon_url); ?>" 
                                                alt="<?php echo esc_attr($icon_alt); ?>">
                                        <?php endif; ?>
                                        <h3><?php the_sub_field('diverse_name'); ?></h3>
                                        <span><?php the_sub_field('diverse_units'); ?></span>
                                        <p><?php the_sub_field('diverse_description'); ?></p>
                                        <?php the_sub_field('diverse_bullets'); ?>
                                    </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
						<?php endwhile; endif; ?>
             
                        <div class="fuel-btns">
							<?php
								$link = get_field( 'guide_here_btn' );
								if ( $link ) :
									$link_url = $link['url'];
									$link_title = $link['title'];
							 $link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="fuel-fleet-green" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
							<?php
								$link = get_field( 'research_tool_btn' );
								if ( $link ) :
									$link_url = $link['url'];
									$link_title = $link['title'];
									 $link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="fuel-fleet-blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
         
                        </div>
                    </div>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>


<?php get_footer();?>