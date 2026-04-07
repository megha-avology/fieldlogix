<?php
/* Template Name: commercial-vehicle-accident-checklist-page Template */
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
	<section class="fleets-section" id="checklist">
                <div class="container">
                    <div class="about-fleet">
                        <h3>Managing Fleet Accidents and Risks</h3>
                        <div class="fleet-para" id="">
                            <?php the_content();?>
                        </div>
                    </div>
                    <div class="c-support">
						<?php if ( $warranties_heading = get_field( 'warranties_heading' ) ) : ?>
							<h3>
							<?php echo esc_html( $warranties_heading ); ?>	
						</h3>
						<?php endif; ?>
                     
                        <div class="border">
                            <div class="box-area">
                                <div class="fleet-boxes" id="checklist-boxes">
									<?php if( have_rows('support_-_warranties_repeater') ):  while ( have_rows('support_-_warranties_repeater') ) : the_row(); ?>

                                    <div class="single-fleet-box">
                                        <div class="single-content">
											<a class="cent-imm" download href="<?php the_sub_field('download_guide'); ?>"><img src="<?php the_sub_field('pdf_icon'); ?>" alt="#"></a>
											<a class="not-uder" download href="<?php the_sub_field('download_guide'); ?>"><h3><?php the_sub_field('pdf_name'); ?></h3></a>
                                        </div>
                                        <a download href="<?php the_sub_field('download_guide'); ?>">Download Guide</a>
                                    </div>
									<?php endwhile; endif; ?>
                                </div>
                            </div>
							<a href="https://www.lopriore.com/blog/a-complete-checklist-for-accidents-involving-a-company-owned-vehicle/" class="accident-b" target="_blank">what to do if involved in a commercial vehicle accident</a>
                        </div>
                    </div>
					<?php if ( $closing_description_heading = get_field( 'closing_description_heading') ) : ?>
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