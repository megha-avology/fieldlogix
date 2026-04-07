<?php
/* Template Name: service-overview-page Template */
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
<section class="fleets-section" id="">
                <div class="container">
					<?php if( have_rows('overview_repeater') ):  while ( have_rows('overview_repeater') ) : the_row(); ?>
                    <div class="about-fleet">
                        <h3><?php the_sub_field('overview_heading'); ?></h3>
                        <div class="fleet-para">
                            <p><?php the_sub_field('overview_tagline'); ?></p>

                            <div class="fuel-btns" id="benefits-btns">
								<?php
									$link = get_sub_field( 'overview_link' );
									if ( $link ) :
										$link_url = $link['url'];
										$link_title = $link['title'];
								
										?>
										<a class="fuel-fleet-green" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
                               
                            </div>
                        </div>
                    </div>
                    <div class="border" id="mbl-border">
                        <div class="box-area">
                            <div class="fleet-boxes" id="service-overview">
								<?php if( have_rows('overview_inner_repeater') ):  while ( have_rows('overview_inner_repeater') ) : the_row(); ?>
                                <div class="single-fleet-box">
                                    <img src="<?php the_sub_field('overview_icon'); ?>" alt="fleet">
                                    <h3><?php the_sub_field('overview_title'); ?></h3>
                                    <p><?php the_sub_field('overview_description'); ?>
                                    </p>
                                </div>
								<?php endwhile; endif; ?>
                  


                            </div>
                        </div>
                    </div>
					<?php endwhile; endif; ?>

    
            
           
					 <div class="fuel-btns" id="service-btns">
						 <?php
							$link = get_field( 'fleet_feature_btn' );
							if ( $link ) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								?>
								<a class="fuel-fleet-green" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
						 <?php
						$link = get_field( 'workforce_feature_btn' );
						if ( $link ) :
							$link_url = $link['url'];
							$link_title = $link['title'];
							?>
							<a class="fuel-fleet-blue" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
                     
                        </div>
                </div>
            </section>
            <?php get_template_part('template-parts/achivements-template'); ?>
            <?php get_template_part('template-parts/tour-section-template'); ?>
        </main>

<?php get_footer();?>