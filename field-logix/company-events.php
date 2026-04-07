<?php
/* Template Name: company-events-page Template */
get_header();?>

<main id="main">
            <section class="hero" id="new-width">
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
                        $desktop_img = get_field('all_banner_img1');
                        if ($desktop_img) :
                            $desktop_id  = attachment_url_to_postid($desktop_img);
                            $desktop_alt = '';
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
                        $mobile_img = get_field('all_banner_img2');
                        if ($mobile_img) :

                            $mobile_id  = attachment_url_to_postid($mobile_img);
                            $mobile_alt = '';

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
            <section class="fleets-section " id="event-gallery-section">
                <div class="container">
                    <div class="about-fleet">
                        <h3>Team Building and Celebration at FieldLogix</h3>
                        <div class="fleet-para" id="company-event-para">
                            <p>We constantly promote a fun and team-oriented environment. That is why we hold many
                                events throughout the year to celebrate new product launches, sales successes, company
                                anniversaries, milestones, and birthdays. We also hold mini-events throughout the month
                                to add a little variety to our work days. This includes FieldLogix Friday’s were we have
                                catered lunch.</p>
                        </div>
                    </div>
                    <div class="border">
                        <div class="device-tabbing" id="event-tabbing">
							<?php if(have_rows('events_gallery')) : while(have_rows('events_gallery')) : the_row();?>
                            	<p><?php the_sub_field('events_gallery_name');?></p>
							<?php endwhile; endif;?>
                        </div>
						
						<?php if(have_rows('events_gallery')) : while(have_rows('events_gallery')) : the_row();?>
							<div class="gallery-border event-show" id="tabs">
								<div class="grid-wrapper">
                                    <?php if(have_rows('events_gallery_images')) : 
                                        while(have_rows('events_gallery_images')) : the_row();

                                            $image_url = get_sub_field('event_image');
                                            $image_alt = '';
                                            $image_id  = '';

                                            if ($image_url) {
                                                $image_id = attachment_url_to_postid($image_url);

                                                if ($image_id) {
                                                    // Media Library ALT
                                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

                                                    // Fallback to image title
                                                    if (!$image_alt) {
                                                        $image_alt = get_the_title($image_id);
                                                    }
                                                }
                                            }

                                            $size_class = '';
                                            $size = get_sub_field('event_image_size');

                                            if ($size == "Tall") {
                                                $size_class = "tall";
                                            } elseif ($size == "Wide") {
                                                $size_class = "wide";
                                            } elseif ($size == "Big") {
                                                $size_class = "big";
                                            }
                                    ?>
                                        <div class="<?php echo esc_attr($size_class); ?>">
                                            
                                            <?php if ($image_url): ?>
                                                <img src="<?php echo esc_url($image_url); ?>" 
                                                    alt="<?php echo esc_attr($image_alt); ?>" />
                                            <?php endif; ?>

                                        </div>

                                    <?php endwhile; endif;?>
                                </div>
								<a href="#." id="load">Load More</a>
							</div>
						<?php endwhile; endif;?>
						
						
                


                        <div class="fuel-btns" id="company-btns">
                            <a href="https://fieldlogix.com/gps-tracking-company/careers-and-jobs/" class="fuel-fleet-green">our Career Opportunities!</a>
                            <a href="https://www.facebook.com/fieldlogix" class="fuel-fleet-blue">Visit our Facebook page</a>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_template_part('template-parts/achivements-template'); ?>
            <?php get_template_part('template-parts/tour-section-template'); ?>
        </main>

<?php get_footer();?>