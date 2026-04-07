<?php
/* Template Name: Tools Template One */
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

			
			<section class="fleets-section tools-template" id="system-overview">
                <div class="container">
                    <div class="sp-border">
                        <div class="about-fleet">
                            <h3><?php the_field('inner_heading');?></h3>
                            <div class="fleet-para">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                    <div class="border-form" id="form-border">
                        <div class="about-fleet contact-form-area-2" id="contact-form-area">
							<?php if ( $tools_form_heading = get_field( 'tools_form_heading' ) ) : ?>
								<h3><?php echo esc_html( $tools_form_heading ); ?></h3>
							<?php endif; ?>
                            <div class="fleet-para">
								<?php if ( $tools_form_heading = get_field( 'tools_form_heading' ) ) : ?>
                                	<p>Fill out the form below to see it now!</p>
								<?php endif; ?>

                                <div class="contact-form form--box">
									<?php if ( $tools_form = get_field( 'tools_form' ) ) : ?>
										<?php echo $tools_form; ?>
									<?php endif; ?>
  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="presenter-head">
                        <h2><?php the_field('section_heading');?></h2>
                    </div>
					<?php if ( have_rows( 'solutions_box_repeater' ) ) : ?>
						<div class="border">
							<div class="box-area">
								<div class="fleet-boxes" id="presenters-boxes">
									<?php while ( have_rows( 'solutions_box_repeater' ) ) :
										the_row(); ?>
										<div class="single-fleet-box">
											<img src="<?php the_sub_field('box_icon'); ?>" alt="fleet">
											<h3><?php the_sub_field('box_title'); ?></h3>
											<p><?php the_sub_field('box_description'); ?></p>
											<?php the_sub_field('box_bullets'); ?>
										</div>
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
					
					
					<?php if ( $description_heading = get_field( 'description_heading' ) ) : ?>
						<div class="about-fleet" id="system-about">
							<?php if ( $description_heading = get_field( 'description_heading' ) ) : ?>
								<h3><?php echo esc_html( $description_heading ); ?></h3>
							<?php endif; ?>
							<div class="fleet-para">
								<?php if ( $description_content = get_field( 'description_content' ) ) : ?>
									<?php echo $description_content; ?>
								<?php endif; ?>
								<?php
									$description_image = get_field( 'description_image' );
									if ( $description_image ) : ?>
										<img src="<?php echo esc_url( $description_image['url'] ); ?>" alt="<?php echo esc_attr( $description_image['alt'] ); ?>" />
								<?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
					
                </div>
            </section>



			
            <?php get_template_part('template-parts/tour-section-template'); ?>
			<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>