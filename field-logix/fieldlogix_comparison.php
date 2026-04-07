<?php
/* Template Name: fieldlogix_comparison-page Template */
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

                    <?php if ( $all_banner_img1 = get_field( 'all_banner_img1' ) ) : 
                        $img1_id  = attachment_url_to_postid( $all_banner_img1 );
                        $img1_alt = get_post_meta( $img1_id, '_wp_attachment_image_alt', true );
                    ?>
                        <img 
                            src="<?php echo esc_url( $all_banner_img1 ); ?>" 
                            alt="<?php echo esc_attr( !empty($img1_alt) ? $img1_alt : 'banner image' ); ?>" 
                            class="desktop-ban-img"
                        >
                    <?php endif; ?>

                    <?php if ( $all_banner_img2 = get_field( 'all_banner_img2' ) ) : 
                        $img2_id  = attachment_url_to_postid( $all_banner_img2 );
                        $img2_alt = get_post_meta( $img2_id, '_wp_attachment_image_alt', true );
                    ?>
                        <img 
                            src="<?php echo esc_url( $all_banner_img2 ); ?>" 
                            alt="<?php echo esc_attr( !empty($img2_alt) ? $img2_alt : 'banner image' ); ?>" 
                            class="mbl-ban-img"
                        >
                    <?php endif; ?>

                </div>
                </div>
            </section>
    <section class="fleets-section" id="checklist">
                <div class="container">
                    <div class="about-fleet">
                        <h3><?php the_title();?></h3>
                        <div class="fleet-para" id="dtc-para">
                          <?php the_content();?>

           
                        </div>
                    </div>
                </div>
            </section>
		
	<section class="comparison--table--section">
		<div class="container">
			<div class="comparison-table-main">
				<?php echo do_shortcode('[ninja_table_builder id="41322"]');?>
			</div>
		</div>
	</section>
	

            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>