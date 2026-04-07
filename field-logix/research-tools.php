<?php
/* Template Name: research-tools-page Template */
get_header();?>

<main id="main">
            <section class="hero" id="new-width">
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
                        $img1_id  = attachment_url_to_postid( $all_banner_img1 );
                        $img1_alt = get_post_meta( $img1_id, '_wp_attachment_image_alt', true );
                    ?>
                        <img src="<?php the_field('all_banner_img1');?>" 
                            alt="<?php echo esc_attr( $img1_alt ?: 'banner image' ); ?>" 
                            class="desktop-ban-img">
                    <?php endif; ?>

                    <?php if ( $all_banner_img2 = get_field( 'all_banner_img2' ) ) : 
                        $img2_id  = attachment_url_to_postid( $all_banner_img2 );
                        $img2_alt = get_post_meta( $img2_id, '_wp_attachment_image_alt', true );
                    ?>
                        <img src="<?php the_field('all_banner_img2');?>" 
                            alt="<?php echo esc_attr( $img2_alt ?: 'banner image' ); ?>" 
                            class="mbl-ban-img">
                    <?php endif; ?>

                </div>
                </div>
            </section>
<section class="fleets-section" id="research-tools-fleets">
                <div class="container">
                    <div class="about-fleet">
						<?php if ( $research_heading = get_field( 'research_heading' ) ) : ?>
							<h3>
							<?php echo esc_html( $research_heading ); ?>	
						</h3>
						<?php endif; ?>
             
                        <div class="fleet-para">
                            <?php if ( $research_tagline = get_field( 'research_tagline' ) ) : ?>
								<?php echo $research_tagline; ?>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="border">
                        <div class="box-area">
                            <div class="fleet-boxes" id="research-boxes">
								<?php if( have_rows('research_tools_repeater') ):  while ( have_rows('research_tools_repeater') ) : the_row(); ?>

                                <div class="single-fleet-box">
                                    <div class="single-content">
										<?php
										$link = get_sub_field( 'research_link_btn' );
										if ( $link ) :
											$link_url = $link['url'];
											$link_title = $link['title'];
											 $link_target = $link['target'] ? $link['target'] : '_self';
											?>
                                        <a id="link-img" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><img src="<?php the_sub_field('research_icons'); ?>" alt="#"></a>
										<?php endif; ?>
										<a class="resrch" href="<?php echo esc_url( $link_url ); ?>"><h3><?php the_sub_field('research_title'); ?></h3></a>
                                        <p><?php the_sub_field('research_description'); ?>
                                        </p>
                                    </div>
									<?php
										$link = get_sub_field( 'research_link_btn' );
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
                </div>
            </section>
           
            <?php get_template_part('template-parts/tour-section-template'); ?>
	 <?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>