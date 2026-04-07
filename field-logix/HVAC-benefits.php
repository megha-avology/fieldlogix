<?php
/* Template Name: hvac-benefits-page Template */
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
            <section class="fleets-section" id="construction-fleets">
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
                                        ?>
                                        <a class="fuel-fleet-blue" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                
                            </div>
                        </div>
                    </div>
                    <div class="border">
                        <div class="box-area">
                            <div class="fleet-boxes">
                            <?php if( have_rows('solutions_box_repeater') ):  while ( have_rows('solutions_box_repeater') ) : the_row(); ?>
                                <div class="single-fleet-box">
                                    <img src="<?php the_sub_field('box_icon'); ?>" alt="fleet">
                                    <h3><?php the_sub_field('box_title'); ?></h3>
                                    <p><?php the_sub_field('box_description');?></p>
                                    <?php the_sub_field('box_bullets'); ?>
                                </div>
                                <?php endwhile; endif; ?>
                          

                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <section class="key-construction">
                <div class="container">
                    <div class="key-head">
                    <?php if ( $other_benefit_heading = get_field( 'other_benefit_heading' ) ) : ?>
                            <h2><?php echo esc_html( $other_benefit_heading ); ?></h2>
                    <?php endif; ?>

                        <div class="key-partner">
                            <?php if( have_rows('other_benefit_repeater') ):  while ( have_rows('other_benefit_repeater') ) : the_row(); ?>
                            <div class="partner-box">
								<a href="<?php the_sub_field('other_benefit_img_link'); ?>">
                                <img src="<?php the_sub_field('other_benefit_img'); ?>" alt="partner">
								</a>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_template_part('template-parts/achivements-template'); ?>
            <?php get_template_part('template-parts/tour-section-template'); ?>
        </main>

<?php get_footer();?>