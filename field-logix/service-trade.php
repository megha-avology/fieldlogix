<?php
/* Template Name: service-trade-page Template */
get_header();?>


<main id="main">
            <section class="hero " id="partner-detail-hero">
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
            <section class="fleets-section " id="partner-detail-fleet">
                <div class="container">
                    <div class="about-fleet">
                    <?php if ( $details_heading = get_field( 'details_heading' ) ) : ?>
                        <h3><?php echo esc_html( $details_heading ); ?></h3>
                    <?php endif; ?>
                        <div class="fleet-para">
                        <?php if ( $details_tagline = get_field( 'details_tagline' ) ) : ?>
                            <?php echo $details_tagline; ?>
                        <?php endif; ?>
                        <?php
                            $link = get_field( 'details_fleets_btn' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="screen">
                    <?php if ( $details_center_img = get_field( 'details_center_img' ) ) : ?>
                        <img src="<?php the_field('details_center_img');?>" alt="">
                    <?php endif; ?>
            
                    </div>
                    <div class="all-purposes" id="partner-purposes">
                        <div class="purpose-head">
                        <?php if ( $best_of_heading = get_field( 'best_of_heading' ) ) : ?>
                            <h2><?php echo esc_html( $best_of_heading ); ?></h2>
                        <?php endif; ?>
                        </div>
                        <div class="partner-safety-purposes">
                            <?php if( have_rows('best_bullets_repeater') ):  while ( have_rows('best_bullets_repeater') ) : the_row(); ?>
                            <div class="partner-content">
                                <img src="<?php the_sub_field('best_icon'); ?>" alt="#">
                                <h3><?php the_sub_field('best_title'); ?></h3>
                                <ul>
                                    <?php if( have_rows('best_inner_repeater') ):  while ( have_rows('best_inner_repeater') ) : the_row(); ?>
                                    <li><?php the_sub_field('best_inner_bullets'); ?></li>
                                    <?php endwhile; endif; ?>
                                </ul>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                    <div class="border">
                        <div class="box-area">
                            <div class="fleet-boxes" id="partner-detail-boxes">
								<?php if( have_rows('service_card_repeater') ):  while ( have_rows('service_card_repeater') ) : the_row(); ?>
                                <div class="single-fleet-box">

                                    <img src="<?php the_sub_field('card_img_main'); ?>" alt="fleet">
                                    <h3><?php the_sub_field('card_name_main'); ?></h3>
                                    <p><?php the_sub_field('card_description_main'); ?></p>

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