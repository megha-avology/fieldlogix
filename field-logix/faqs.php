<?php
/* Template Name: faqs-page Template */
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
            <section class="fleets-section" id="faq-section">
                <div class="container">
                    <div class="about-fleet">
                    <?php if ( $faqs_heading = get_field( 'faqs_heading' ) ) : ?>
                        <h3><?php echo esc_html( $faqs_heading ); ?></h3>
                    <?php endif; ?>
                        <div class="fleet-para" id="faq-fleet">
                            <?php the_content();?>
                        </div>
                    </div>
                    <div class="border">
                        <div class="faq-section" id="QA-area">
                        <div class="container">
                        <div class="faq-area">
                            <?php if ( $faqs_heading = get_field( 'faqs_heading' ) ) : ?>
                                <h2><?php echo esc_html( $faqs_heading ); ?></h2>
                            <?php endif; ?>
                      
                            <div class="query-content">
                            <?php if( have_rows('faqs_repeater') ):  while ( have_rows('faqs_repeater') ) : the_row(); ?>
                                <div class="QA-content">
                                    <div class="Question">
                                        <p><?php the_sub_field('questions'); ?></p>
                                        <img src="<?php bloginfo('template_url');?>/images/plus.svg" alt="">
                                    </div>
                                    <div class="answer">
                                        <div class="answer-content">
                                            <div class="inner-answer">
                                                <p><?php the_sub_field('answers'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                 
                            </div>
                            <a class="load-more load" href="#.">Load More</a>
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