<?php
/* Template Name: crash-risk-report-page Template */
get_header();?>

<main id="main">
            <section class="driver-safety-scoreCard" id ="new-imp">
                <div class="hero driver-safety-scoreCard">
                    <div class="banner-content-sol">
                        <div class="container">
                            <div class="left-content-sol">
                                <?php if ( $all_ban_heading = get_field( 'all_ban_heading' ) ) : ?>
                                    <p><?php echo esc_html( $all_ban_heading ); ?></p>
                                <?php endif; ?>
                                <?php if ( $all_ban_subheading = get_field( 'all_ban_subheading' ) ) : ?>
                                    <h1><?php echo esc_html( $all_ban_subheading ); ?></h1>
                                <?php endif; ?>
                                <div class="banner-buttons-sol">
                                <?php
                                    $link = get_field( 'all_get_btn' );
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
                        <?php if ( $all_ban_desktop_img = get_field( 'all_ban_desktop_img' ) ) : ?>
                            <img src="<?php the_field('all_ban_desktop_img');?>" alt="" class="desktop-ban-img">
                        <?php endif; ?>
                        <?php if ( $all_ban_mobile_img = get_field( 'all_ban_mobile_img' ) ) : ?>
                            <img src="<?php the_field('all_ban_mobile_img');?>" alt="" class="mbl-ban-img">
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="driver-safety-scoreCard">
                <div class="fleets-section driver-safety-scoreCard">
                    <div class="container">
                        <div class="about-fleet">
                        <?php if ( $second_heading = get_field( 'second_heading' ) ) : ?>
                            <h3><?php echo esc_html( $second_heading ); ?></h3>
                        <?php endif; ?>
                          
                            <div class="fleet-para">
                                <p><?php if ( $second_tagline = get_field( 'second_tagline' ) ) : ?>
                                    <?php echo $second_tagline; ?>
                                <?php endif; ?></p>
                                <?php
                                    $link = get_field( 'see_how_we_btn' );
                                    if ( $link ) :
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        ?>
                                        <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                            
                            </div>
                        </div>
                        <div class="screen">
                        <?php if ( $screen_img = get_field( 'screen_img' ) ) : ?>
                            <img src="<?php the_field('screen_img');?>" alt="">
                        <?php endif; ?>
                        </div>
                        <div class="all-purposes">
							<div class="purpose-head">
                            <?php if ( $inner_pages_repeater_heading = get_field( 'inner_pages_repeater_heading' ) ) : ?>
                                <h2><?php echo esc_html( $inner_pages_repeater_heading ); ?></h2>
                            <?php endif; ?>
                            <?php if ( $inner_pages_repeater_tagline = get_field( 'inner_pages_repeater_tagline' ) ) : ?>
                                <?php echo $inner_pages_repeater_tagline; ?>
                            <?php endif; ?>
                        </div>
                            <div class="safety-purposes">
                            <?php if( have_rows('inner_pages_repeater') ):  while ( have_rows('inner_pages_repeater') ) : the_row(); ?>
                                <div class="purpose">
                                    <img src="<?php the_sub_field('inner_repeater_image'); ?>" alt="growth">
                                    <?php the_sub_field('inner_repeater_heading'); ?>
                                    <p><?php the_sub_field('inner_repeater_text_content'); ?></p>
                                </div>
                                <?php endwhile; endif; ?>
                    
                            </div>
                            <?php
                                $link = get_field( 'inner_repeater_link_btn_1' );
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                  
                                    ?>
                                    <a class="button" target="_blank" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
            
                        </div>

                    </div>
                </div>
            </section>
            <?php get_template_part('template-parts/achivements-template');?>
            <?php get_template_part('template-parts/tour-section-template'); ?>

        </main>


<?php get_footer();?>