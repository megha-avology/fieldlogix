<?php
/* Template Name: Tools Template Two */
get_header();?>

		<main id="main">
			<section class="hero" id="productivity">
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
    
					<?php if ( $all_banner_img1 = get_field( 'all_banner_img1' ) ) : 
						$img1_id = attachment_url_to_postid( $all_banner_img1 );
						$img1_alt = get_post_meta( $img1_id, '_wp_attachment_image_alt', true );
					?>
						<img 
							src="<?php echo esc_url( $all_banner_img1 ); ?>" 
							alt="<?php echo esc_attr( $img1_alt ?: 'banner image' ); ?>" 
							class="desktop-ban-img"
						>
					<?php endif; ?>

					<?php if ( $all_banner_img2 = get_field( 'all_banner_img2' ) ) : 
						$img2_id = attachment_url_to_postid( $all_banner_img2 );
						$img2_alt = get_post_meta( $img2_id, '_wp_attachment_image_alt', true );
					?>
						<img 
							src="<?php echo esc_url( $all_banner_img2 ); ?>" 
							alt="<?php echo esc_attr( $img2_alt ?: 'banner image' ); ?>" 
							class="mbl-ban-img"
						>
					<?php endif; ?>

				</div>
                </div>
            </section>

			
			<section class="fleets-section">
                <div class="container">
                    <div class="about-fleet">
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
                    <div class="screen" id="improve-screen">
						<?php
							$brief_image = get_field( 'brief_image' );
							if ( $brief_image ) : ?>
							<img src="<?php echo esc_url( $brief_image['url'] ); ?>" alt="<?php echo esc_attr( $brief_image['alt'] ); ?>" />
						<?php endif; ?>
                    </div>
                    <div class="all-purposes" id="improve-safety-purpose">
                        <div class="purpose-head" id="improve-safety-head">
                            <?php if ( $brief_content = get_field( 'brief_content' ) ) : ?>
								<?php echo $brief_content; ?>
							<?php endif; ?>
                        </div>
                        <div class="safety-purposes" id="improves-box">
							<?php if( have_rows('description_repeater') ):  while ( have_rows('description_repeater') ) : the_row(); ?>
                            <div class="purpose">
								<?php
									$icon = get_sub_field( 'icon' );
									if ( $icon ) : ?>
										<img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
								<?php endif; ?>
                                <?php if ( $description_heading = get_sub_field( 'description_heading' ) ) : ?>
									<h3><?php echo esc_html( $description_heading ); ?></h3>
								<?php endif; ?>
								<?php if ( $description_content = get_sub_field( 'description_content' ) ) : ?>
									<?php echo $description_content; ?>
								<?php endif; ?>
                            </div>
							<?php endwhile; endif; ?>
                        </div>
						<div class="template-links">
												<?php
							$link = get_field( 'description_link' );
							if ( $link ) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a  class="improve-a" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
							<?php
							$link = get_field( 'description_link_two' );
							if ( $link ) :
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="fuel-fleet-blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
						</div>
                    </div>
					
					<?php if ( $form_heading = get_field( 'form_heading' ) ) : ?>
						<div class="border-form" id="form-border">
							<div class="about-fleet " id="improve-form">
								<div class="improve-form-left">
									<?php if ( $form_heading = get_field( 'form_heading' ) ) : ?>
										<h3><?php echo esc_html( $form_heading ); ?></h3>
									<?php endif; ?>
									<?php if ( $form_sub_heading = get_field( 'form_sub_heading' ) ) : ?>
										<p><?php echo esc_html( $form_sub_heading ); ?></p>
									<?php endif; ?>
								</div>
								<div class="fleet-para">
									<?php if ( $form_code = get_field( 'form_code' ) ) : ?>
										<p>Calculate your payroll fraud losses…</p>
									<?php endif; ?>

									<div class="contact-form form--box">
										<?php if ( $form_code = get_field( 'form_code' ) ) : ?>
											<?php echo $form_code; ?>
										<?php endif; ?>
									</div>

								</div>
							</div>
						</div>
					<?php endif; ?>
					
					
					<?php if ( $closing_description_heading = get_field( 'closing_description_heading' ) ) : ?>
						<div class="about-fleet" id="fraud-about">
							<?php if ( $closing_description_heading = get_field( 'closing_description_heading' ) ) : ?>
								<h3><?php echo esc_html( $closing_description_heading ); ?></h3>
							<?php endif; ?>
							<div class="fleet-para" id="fraud-para">
								<?php if ( $closing_description_content = get_field( 'closing_description_content' ) ) : ?>
									<?php echo $closing_description_content; ?>
								<?php endif; ?>

								<div class="fuel-btns" id="calc-btn">
									<?php
										$link = get_field( 'closing_description_link' );
										if ( $link ) :
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
											?>
											<a class="fuel-fleet-green" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
					
					
                </div>
            </section>



			
            <?php get_template_part('template-parts/tour-section-template'); ?>
			<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>