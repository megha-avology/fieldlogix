<?php
/* Template Name: alliance-partners-page Template */
get_header();?>



<main id="main">
            <section class="hero part-ban" id="routing-dispatching">
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
            <section class="fleets-section" id="benefit-fleet">
                <div class="container">
                    <div class="border">
                        <div class="box-area">
                            <div class="fleet-boxes part-clr" id="partner-fleet-boxes">
                                <?php if( have_rows('alliance_repeater') ):  while ( have_rows('alliance_repeater') ) : the_row(); ?>
                                <div class="single-fleet-box">
                                    <div id="partner-inner">
                                        <img src="<?php the_sub_field('alliance_logo'); ?>" alt="fleet">
                                        <h3><?php the_sub_field('alliance_title'); ?></h3>
                                        <?php the_sub_field('alliance_tagline'); ?>
                                    </div>
                                        <?php
                                        $link = get_sub_field( 'learn_more_alliance' );
                                        if ( $link ) :
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            ?>
                                            <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                                </div>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="border-form" id="partner-border-form">
                        <div class="about-fleet" id="partner-form">
                        <?php if ( $great_mind_heading = get_field( 'great_mind_heading' ) ) : ?>
                            <h3><?php echo esc_html( $great_mind_heading ); ?></h3>
                        <?php endif; ?>
                            <div class="fleet-para">
                            <?php if ( $great_tagline = get_field( 'great_tagline' ) ) : ?>
                                <p><?php echo esc_html( $great_tagline ); ?></p>
                            <?php endif; ?>
                                <div class="contact-form">
									<?php echo do_shortcode( '[gravityform id="60" title="true" description="true" ajax="true"]' ); ?>
                                    
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