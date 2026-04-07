<?php
/* Template Name: about-page Template */
get_header();?>

<main id="main">
            <section class="hero " id="routing-dispatching">
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
                        // Mobile banner
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
            <section class="fleets-section carrers" id="system-overview">
                <div class="container">
                    <?php the_content();?>
                    <div class="history-slider-area">
                        <div class="history-slider">
                            <?php if( have_rows('history_repeater') ):  while ( have_rows('history_repeater') ) : the_row(); ?>
                            <div class="history-slide">
                                <h3><?php the_sub_field('history_title'); ?></h3>
                                <p><?php the_sub_field('history_tagline'); ?></p>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                        <div class="history-arrows">
                            <div class="his-left-arrow">
                                <img src="<?php bloginfo('template_url');?>/images/history-prev.svg" alt="#">
                            </div>
                            <div class="his-right-arrow">
                                <img src="<?php bloginfo('template_url');?>/images/history-next.svg" alt="#">
                            </div>
                        </div>
                    </div>

                    <div class="presenter-head" id="top">
                    <?php if ( $value_heading = get_field( 'value_heading' ) ) : ?>
                        <h2><?php echo esc_html( $value_heading ); ?></h2>
                    <?php endif; ?>
                    </div>
                    <div class="border">
                        <div class="box-area">
                            <div class="fleet-boxes" id="presenters-boxes">
                                <?php if( have_rows('value_repeater') ):  
                                    while ( have_rows('value_repeater') ) : the_row(); 
                                        $icon_url = get_sub_field('value_icon');
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
                                        <h3><?php the_sub_field('value_title'); ?></h3>
                                        <p><?php the_sub_field('value_tagline'); ?></p>
                                    </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                        <?php
                            $link = get_field( 'value_achivements' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                ?>
                                <a id="view" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                    </div>
                    <div class="idustry">
                        <div class="industry-left">
                        <?php if ( $our_industry_heading = get_field( 'our_industry_heading' ) ) : ?>
                           <h2><?php echo esc_html( $our_industry_heading ); ?></h2>
                        <?php endif; ?>
                        <?php if ( $our_industry_tagline = get_field( 'our_industry_tagline' ) ) : ?>
                            <p><?php echo $our_industry_tagline; ?></p>
                        <?php endif; ?>
                        <?php if ( $our_industry_tagline2 = get_field( 'our_industry_tagline2' ) ) : ?>
                            <p><?php echo $our_industry_tagline2; ?></p>
                        <?php endif; ?>
                        </div>
                        <div class="industry-right">
                            <?php 
                            if ( $our_industry_img = get_field('our_industry_img') ) :
                                $img_alt = '';
                                $img_id  = attachment_url_to_postid($our_industry_img);
                                if ($img_id) {
                                    $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                                    if (!$img_alt) {
                                        $img_alt = get_the_title($img_id);
                                    }
                                }
                            ?>
                                <img src="<?php echo esc_url($our_industry_img); ?>" 
                                    alt="<?php echo esc_attr($img_alt); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>