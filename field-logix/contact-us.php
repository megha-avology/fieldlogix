<?php
/* Template Name: contact-us-page Template */
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
            <section class="fleets-section" id="contact-us">
                <div class="container">
                    <div class="border">
                        <div class="box-area">
                            <div class="fleet-boxes" id="contact-boxes">

                                <div class="single-fleet-box">
                                <?php if ( $phone_img = get_field( 'phone_img' ) ) : ?>
                                   <img src="<?php the_field('phone_img');?>" alt="">
                                <?php endif; ?>
                                    
                                    <?php if( have_rows('numbers_repeater') ):  while ( have_rows('numbers_repeater') ) : the_row(); ?>
                                    <p><a href="tel:<?php the_sub_field('number'); ?>"><?php the_sub_field('number'); ?> </a><span><?php the_sub_field('extension'); ?></span></p>
                                    <?php endwhile; endif; ?>
                                </div>

                                <div class="single-fleet-box">
                                <?php if ( $mail_img = get_field( 'mail_img' ) ) : ?>
                                   <img src="<?php the_field('mail_img');?>" alt="">
                                <?php endif; ?>
                                <?php if( have_rows('mail_repeater') ):  while ( have_rows('mail_repeater') ) : the_row(); ?>
                                   <p><span><?php the_sub_field('mail_name'); ?></span> <a href="mailto:<?php the_sub_field('mail_address'); ?>"><?php the_sub_field('mail_address'); ?></a></p>
                                <?php endwhile; endif; ?>
                                   
                                </div>

                                <div class="single-fleet-box">
                                <?php if ( $address_img = get_field( 'address_img' ) ) : ?>
                                   <img src="<?php the_field('address_img');?>" alt="">
                                <?php endif; ?>
                                    <?php if( have_rows('address_repeater') ):  while ( have_rows('address_repeater') ) : the_row(); ?>
                                    <p><?php the_sub_field('address_title'); ?></p>
                                    <?php endwhile; endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-form">
                        <div class="about-fleet" id="contact-form-area">
                        <?php if ( $support_text = get_field( 'support_text' ) ) : ?>
                            <h3><?php echo esc_html( $support_text ); ?></h3>
                        <?php endif; ?>
                            <div class="fleet-para">
                            <?php if ( $reach_out_text = get_field( 'reach_out_text' ) ) : ?>
                               <p> <?php echo esc_html( $reach_out_text ); ?></p>
                            <?php endif; ?>
                            <?php if ( $reach_out_tagline = get_field( 'reach_out_tagline' ) ) : ?>
                                <span><?php echo esc_html( $reach_out_tagline ); ?></span>
                            <?php endif; ?>

<!--                                 <div class="contact-form">
                                <?php echo do_shortcode( '[contact-form-7 id="abd390b" title="Contact Us"]' ); ?>
									
                                </div> -->
								<div class="contact-form">
                                   <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
<!--                                     <button class="contact-submit">Submit</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_template_part('template-parts/achivements-template'); ?>
            <?php get_template_part('template-parts/tour-section-template'); ?>
        </main>


<?php get_footer();?>