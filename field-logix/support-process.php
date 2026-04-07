<?php
/* Template Name: support-process-page Template */
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
                    <?php if ( $all_banner_img1 = get_field( 'all_banner_img1' ) ) : ?>
                    <img src="<?php the_field('all_banner_img1');?>" alt="" class="desktop-ban-img">
                    <?php endif; ?>
                    <?php if ( $all_banner_img2 = get_field( 'all_banner_img2' ) ) : ?>
                    <img src="<?php the_field('all_banner_img2');?>" alt="" class="mbl-ban-img">
                    <?php endif; ?>
                    </div>
                </div>
            </section>
            <section class="fleets-section" id="support-press">
                <div class="container">
                    <div class="sp-border">
                        <?php the_content();?>
                    </div>
                    <div class="border-form" id="form-border">
                        <div class="about-fleet contact-form-area-2" id="contact-form-area">
                        <?php if ( $quick_quote_heading = get_field( 'quick_quote_heading' ) ) : ?>
                            <h3><?php echo esc_html( $quick_quote_heading ); ?></h3>
                        <?php endif; ?>
                            <div class="fleet-para">
                            <?php if ( $quick_quote_tagline = get_field( 'quick_quote_tagline' ) ) : ?>
                                <p><?php echo esc_html( $quick_quote_tagline ); ?></p>
                            <?php endif; ?>
                            <?php if ( $quick_quote_tagline2 = get_field( 'quick_quote_tagline2' ) ) : ?>
                                <span><?php echo esc_html( $quick_quote_tagline2 ); ?></span>
                            <?php endif; ?>
    

                                <div class="contact-form">
									<?php echo do_shortcode( '[gravityform id="32" title="true" description="true" ajax="true"]' ); ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>


<?php get_footer();?>