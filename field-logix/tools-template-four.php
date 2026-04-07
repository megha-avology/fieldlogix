<?php
/* Template Name: Tools Template Four */
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

			
			<section class="fleets-section">
                <div class="container">
                    <div class="about-fleet" id="emergency-about">
                        <h3><?php the_field('inner_heading');?></h3>
                        <div class="fleet-para" id="safety-para">
							
                            <?php the_content();?>
							
                            <div class="fuel-btns" id="Safe-btn">
								<?php
									$link = get_field( 'inner_btn' );
									if ( $link ) :
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="fuel-fleet-green" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
								<?php
									$link = get_field( 'inner_solution_btn' );
									if ( $link ) :
										$link_url = $link['url'];
										$link_title = $link['title'];
										$link_target = $link['target'] ? $link['target'] : '_self';
										?>
										<a class="fuel-fleet-blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
							</div>
                        </div>
                    </div>
                    <div class="border-form" id="form-border">
                        <div class="about-fleet " id="improve-form">
                            <div class="improve-form-left">
								<?php if ( $brief_heading_left = get_field( 'brief_heading_left' ) ) : ?>
									<h3><?php echo esc_html( $brief_heading_left ); ?></h3>
								<?php endif; ?>
                            </div>
                            <div class="fleet-para">
                                <?php if ( $brief_content_right = get_field( 'brief_content_right' ) ) : ?>
									<?php echo $brief_content_right; ?>
								<?php endif; ?>

                                <div class="fleet-boxes" id="emergency-boxes">
									<?php if(have_rows('brief_guides')) : while(have_rows('brief_guides')) : the_row(); ?>
										<div class="single-fleet-box">
											<div class="single-content">
												<a href="<?php the_sub_field('guide_file_link');?>" download>
												<img src="<?php the_sub_field('guide_icon');?>" alt="#">
												</a>
												<h3><?php the_sub_field('guide_heading');?></h3>
											</div>
											<a href="<?php the_sub_field('guide_file_link');?>" download>Download Guide</a>
										</div>
									<?php endwhile; endif;?>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="about-fleet" id="fraud-about">
						<?php if ( $closing_description_heading = get_field( 'closing_description_heading' ) ) : ?>
							<h3><?php echo esc_html( $closing_description_heading ); ?></h3>
						<?php endif; ?>
                        <div class="fleet-para em-img" id="fraud-para">
							<?php if ( $closing_description_content = get_field( 'closing_description_content' ) ) : ?>
								<?php echo $closing_description_content; ?>
							<?php endif; ?>
                            <?php
								$closing_description_image = get_field( 'closing_description_image' );
								if ( $closing_description_image ) : ?>
									<img src="<?php echo esc_url( $closing_description_image['url'] ); ?>" alt="<?php echo esc_attr( $closing_description_image['alt'] ); ?>" />
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>




			
            <?php get_template_part('template-parts/tour-section-template'); ?>
			<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>