<?php
/* Template Name: Tools Template Three */
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
                    <div class="about-fleet">
                        <h3><?php the_field('inner_heading');?></h3>
                        <div class="fleet-para fuel-calc-para" id="safety-para">
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
                            <div class="screen" id="fuel-screen">
								<?php
									$brief_image = get_field( 'brief_image' );
									if ( $brief_image ) : ?>
										<img src="<?php echo esc_url( $brief_image['url'] ); ?>" alt="<?php echo esc_attr( $brief_image['alt'] ); ?>" />
								<?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="about-fleet" id="fuel-border">
						<?php if ( $description_heading_left = get_field( 'description_heading_left' ) ) : ?>
							<h3><?php echo esc_html( $description_heading_left ); ?></h3>
						<?php endif; ?>
                        <div class="fleet-para fuel-calc-para" id="safety-para">

                            <?php if ( $description_content_right = get_field( 'description_content_right' ) ) : ?>
								<?php echo $description_content_right; ?>
							<?php endif; ?>
                        </div>

                    </div>
                    <div class="border-form fuel-cost-calc" id="roi-form">
                        <div class="about-fleet" id="partner-form">
                            <div class="roi-left">
								<?php if ( $form_heading = get_field( 'form_heading' ) ) : ?>
									<h3><?php echo esc_html( $form_heading ); ?></h3>
								<?php endif; ?>
								<?php if ( $form_sub_heading = get_field( 'form_sub_heading' ) ) : ?>
									<p><?php echo esc_html( $form_sub_heading ); ?></p>
								<?php endif; ?>
                            </div>
                            <div class="fleet-para">

                                <div class="contact-form roi-1 form--box" id="resume">
                                   	<?php if ( $form_code = get_field( 'form_code' ) ) : ?>
										<?php echo $form_code; ?>
									<?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <div class="about-fleet cost-border" id="fuel-border">
						<?php if ( $closing_description_heading = get_field( 'closing_description_heading' ) ) : ?>
							<h3><?php echo esc_html( $closing_description_heading ); ?></h3>	
						<?php endif; ?>
                        <div class="fleet-para" id="safety-para">
                            <?php if ( $closing_description_content = get_field( 'closing_description_content' ) ) : ?>
								<?php echo $closing_description_content; ?>
							<?php endif; ?>
							<?php
								$link = get_field( 'closing_description_link' );
								if ( $link ) :
									$link_url = $link['url'];
									$link_title = $link['title'];
									$link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="fuel-learn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
                        </div>

                    </div>
                </div>
            </section>




			
            <?php get_template_part('template-parts/tour-section-template'); ?>
			<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>