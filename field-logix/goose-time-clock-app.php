<?php
/* Template Name: goose-time-clock-app-page Template */
get_header();?>


<main id="main">
            <section class="hero" id="clock-app">
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
                    <?php // if ( $all_banner_img1 = get_field( 'all_banner_img1' ) ) : ?>
                    <!-- <img src="<?php // echo esc_url( $all_banner_img1 ); ?>" alt="hey" class="desktop-ban-img"> -->
                    <?php // endif; ?>
 
                    
                    <?php
                        $image_url = get_field('all_banner_img1');
                        if ($image_url) {
                            // Convert image URL to attachment ID
                            $attachment_id = attachment_url_to_postid($image_url);
                            // Get alt text
                            $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>
                        <div class="short-imgs">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>" class="desktop-ban-img">
                        </div>
                    <?php } ?>

                    <?php  // if ( $all_banner_img2 = get_field( 'all_banner_img2' ) ) : ?>
                    <!-- <img src="<?php // the_field('all_banner_img2');?>" alt="" class="mbl-ban-img"> -->
                    <?php // endif; ?>
                     
 
                    <?php
                        $image_url = get_field('all_banner_img2');
                        if ($image_url) {
                            // Convert image URL to attachment ID
                            $attachment_id = attachment_url_to_postid($image_url);
                            // Get alt text
                            $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>
                        <div class="short-imgs">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>" class="mbl-ban-img">
                        </div>
                    <?php } ?>
                        
                    </div>
                </div>
            </section>
            <section class="fleets-section vehicle-Inspection gooseTimeClockApp" id="dash-camera">
                <div class="container">
                    <div class="about-fleet">
                    <?php if ( $inner_heading = get_field( 'inner_heading' ) ) : ?>
                        <h3><?php echo esc_html( $inner_heading ); ?></h3>
                    <?php endif; ?>
                        <div class="fleet-para">
                        <?php if ( $inner_tagline = get_field( 'inner_tagline' ) ) : ?>
                                <p><?php echo $inner_tagline; ?></p>
                            <?php endif; ?>
                            <?php
                            $link = get_field( 'inner_btn' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="border">
                        <div class="box-area">
                            <div class="fleet-boxes">
                                <?php if( have_rows('solutions_box_repeater') ):  while ( have_rows('solutions_box_repeater') ) : the_row(); ?>
                                <div class="single-fleet-box">
                                    <!-- <img src="<?php //the_sub_field('box_icon'); ?>" alt="fleet"> -->
                                     <?php
                                        $image_url = get_sub_field('box_icon');
                                        if ($image_url) {
                                            // Convert image URL to attachment ID
                                            $attachment_id = attachment_url_to_postid($image_url);
                                            // Get alt text
                                            $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>
                                        <div class="short-imgs">
                                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>">
                                        </div>
                                    <?php } ?>
                                    <h3><?php the_sub_field('box_title'); ?></h3>
                                    <p><?php the_sub_field('box_description'); ?></p>
                                    <?php the_sub_field('box_bullets'); ?>
                                </div>
                                <?php endwhile; endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="goosetime">
                        <h2>Goose Time Clock App</h2>
						<div class="short-imgs">
                        <!-- <img src="<?php // the_field('goose_img') ?>" alt="#"> -->
                         
                         <?php
                            $image_url = get_field('goose_img');
                            if ($image_url) {
                                // Convert image URL to attachment ID
                                $attachment_id = attachment_url_to_postid($image_url);
                                // Get alt text
                                $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>    
                                
                                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>">
                           
                            <?php } ?>

						</div>
                        <div class="fuel-btns">
                            <a href="#." class="fuel-fleet-green"><img src="<?php bloginfo('template_url');?>/images/gose-btn-1.svg" alt="#">Download
                                Android App</a>
                            <a href="#." class="fuel-fleet-blue"><img src="<?php bloginfo('template_url');?>/images/gose-btn-2.svg" alt="#">Download IOs
                                App</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part ( 'template-parts/achivements-template' ) ;?>
        </main>



<?php get_footer();?>