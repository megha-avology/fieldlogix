<?php
/* Template Name: resources-page Template */
get_header();?>


<main id="main">
            <section class="hero" id="other-services">
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
                    // Mobile Image
                    $mobile_img = get_field('all_banner_img2');
                    if ($mobile_img) :

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
            <section class="fleets-section install-guides " id="resources-fleets">
                <div class="container">
                <div class="border">
                        <div class="box-area">
                           <div class="fleet-boxes">
                                <?php if( have_rows('solutions_box_repeater') ):  
                                    while ( have_rows('solutions_box_repeater') ) : the_row(); 
                                        $icon_url  = get_sub_field('box_icon');
                                        $box_link  = get_sub_field('box_linkss');
                                        $box_title = get_sub_field('box_title');
                                        $icon_alt = '';
                                        if ($icon_url) {
                                            $icon_id = attachment_url_to_postid($icon_url);

                                            if ($icon_id) {
                                                $icon_alt = get_post_meta($icon_id, '_wp_attachment_image_alt', true);
                                                if (!$icon_alt) {
                                                    $icon_alt = get_the_title($icon_id);
                                                }
                                            }
                                            if (!$icon_alt && $box_title) {
                                                $icon_alt = $box_title;
                                            }
                                        }
                                ?>
                                    <div class="single-fleet-box">
                                        <?php if ($icon_url): ?>
                                            <a href="<?php echo esc_url($box_link); ?>">
                                                <img src="<?php echo esc_url($icon_url); ?>" 
                                                    alt="<?php echo esc_attr($icon_alt); ?>">
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($box_title): ?>
                                            <h3>
                                                <a href="<?php echo esc_url($box_link); ?>">
                                                    <?php echo esc_html($box_title); ?>
                                                </a>
                                            </h3>
                                        <?php endif; ?>

                                        <?php the_sub_field('box_description'); ?>
                                    </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_template_part('template-parts/achivements-template'); ?>
            <?php get_template_part('template-parts/tour-section-template'); ?>
        </main>


<?php get_footer();?>