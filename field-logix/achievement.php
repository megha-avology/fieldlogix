<?php
/* Template Name: achievement-page Template */
get_header();?>

<main id="main">
            <section class="hero " id="new-width">
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
                        if ( $all_banner_img1 = get_field('all_banner_img1') ) :
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
                        if ( $all_banner_img2 = get_field('all_banner_img2') ) :

                            $mobile_alt = '';
                            $mobile_id  = attachment_url_to_postid($all_banner_img2);
                            if ($mobile_id) {
                                $mobile_alt = get_post_meta($mobile_id, '_wp_attachment_image_alt', true);
                                // Fallback to image title
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
            <section class="fleets-section  genX" id="plug">
                <div class="container">
                    <div class="about-fleet" id="awards">
                    <?php if ( $integrate_heading = get_field( 'integrate_heading' ) ) : ?>
                        <h3><?php echo esc_html( $integrate_heading ); ?></h3>
                    <?php endif; ?>
                        <div class="fleet-para" id="equipment-para">
                        <?php if ( $integrate_tagline = get_field( 'integrate_tagline' ) ) : ?>
                            <?php echo $integrate_tagline; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="border" id="achievement-border">
                    <?php if ( $innovation_heading = get_field( 'innovation_heading' ) ) : ?>
                        <h2><?php echo esc_html( $innovation_heading ); ?></h2>
                    <?php endif; ?>
       
                        <div class="box-area">
                            <div class="fleet-boxes">
                                <?php if( have_rows('innovation_repeater') ):  while ( have_rows('innovation_repeater') ) : the_row(); ?>
                                <div class="single-fleet-box">
                                    <img src="<?php the_sub_field('innovation_icon'); ?>" alt="fleet">
                                    <h3><?php the_sub_field('innovation_title'); ?></h3>
                                </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="customer-support-section">
                <div class="container">
                    <div class="customer-top">
                    <?php if ( $customer_heading = get_field( 'customer_heading' ) ) : ?>
                        <h2><?php echo esc_html( $customer_heading ); ?></h2>
                    <?php endif; ?>
                    <?php if ( $customer_tagline = get_field( 'customer_tagline' ) ) : ?>
                        <p><?php echo esc_html( $customer_tagline ); ?></p>
                    <?php endif; ?>
        
                    </div>
                    <div class="cus-border">
                        <div class="customer-boxes">
                            <div class="cus-box">
                                <h3>96%</h3>
                                <p>Requests Responsiveness</p>
                            </div>
                            <div class="cus-box">
                                <h3>A+</h3>
                                <p>BBB Rating</p>
                            </div>
                        </div>
                        <div class="other-cus-box">
                            <div class="cus-box">
                                <h3>97%</h3>
                                <p>Customer Satisfaction </p>
                            </div>
                            <div class="cus-box">
                                <h3>1000+</h3>
                                <p>Satisfied Customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="fleet-repeat-section">
                <div class="container">
                    <?php if( have_rows('achievements_main_repeater') ):  while ( have_rows('achievements_main_repeater') ) : the_row(); ?>
                    <div class="presenter-head">
                        <h2><?php the_sub_field('achievements_headings'); ?></h2>
                    </div>
                    <div class="border" >
                        <div class="box-area">
                            <div class="fleet-boxes" id="presenters-boxes">
                                <?php if( have_rows('achievements_inner_repeater') ):  
                                    while ( have_rows('achievements_inner_repeater') ) : the_row(); 

                                        $icon_url = get_sub_field('achievements_icon_img');
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
                                        <h3><?php the_sub_field('achievements_title'); ?></h3>
                                        <p><?php the_sub_field('achievements_paragraph'); ?></p>
                                    </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>