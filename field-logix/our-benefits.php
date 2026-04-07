<?php
/* Template Name: our-benefits-page Template */
get_header();?>

<main id="main">
            <section class="hero" id="benefits">
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
            <section class="fleets-section" id="benefit-fleet">
                <div class="container">
                    <div class="about-fleet">
                    <?php if ( $inner_heading = get_field( 'inner_heading' ) ) : ?>
                        <h3><?php echo esc_html( $inner_heading ); ?></h3>
                    <?php endif; ?>
               
                        <div class="fleet-para">
                            <p><?php if ( $inner_tagline = get_field( 'inner_tagline' ) ) : ?>
                                <?php echo $inner_tagline; ?>
                            <?php endif; ?></p>
                            <div class="fuel-btns" id="benefits-btns">
                            <?php
                                $link = get_field( 'inner_btn' );
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    ?>
                                    <a class="fuel-fleet-green" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                                <?php
                                    $link = get_field( 'inner_solution_btn' );
                                    if ( $link ) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
										 $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                        <a class="fuel-fleet-blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                
                            </div>
                        </div>
                    </div>
                    <div class="border">
                        <div class="box-area">
                            <div class="fleet-boxes" id="color-benefit">
                                <?php if( have_rows('solutions_box_repeater') ):  
                                    while ( have_rows('solutions_box_repeater') ) : the_row(); 
                                        $icon_url = get_sub_field('box_icon');
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
                                        <h3><?php the_sub_field('box_title'); ?></h3>
                                        <?php the_sub_field('box_bullets'); ?>
                                    </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>


<?php get_footer();?>