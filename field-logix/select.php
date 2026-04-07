<?php
/* Template Name: select-page Template */
get_header();?>
<style>
#img-fleet-area{
  width: 100%;
  margin-top: 80px;
}

.img-fleet-left, .img-fleet-right{
  width: 50%;
}

.img-fleet-left{
  display: flex;
  flex-direction: column;
  gap: 48px;
}

.left-single h5{
  color: var(--Main-Colors-Blue, #036);
  font-size: 24px;
  font-weight: 700;
  margin: 32px 0 16px 0;
}

.left-single p{
  color: var(--Neutral-Grey-06, #5B5B5F);
  font-size: 18px;
  font-weight: 400;
  line-height: 180%; 
}

.table-anchor a{
  width: max-content;
  padding: 13px 20px 12px 20px;
  border: 1px solid transparent;
  color: #fff;
}
</style>
<main id="main">
            <section class="hero " id="routing-dispatching">
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
                    <?php if ( $all_banner_img1 = get_field('all_banner_img1') ) :

                        // Get attachment ID from URL
                        $img1_id = attachment_url_to_postid($all_banner_img1);
                        $img1_alt = '';

                        if ($img1_id) {
                            // Try to get ALT from media library
                            $img1_alt = get_post_meta($img1_id, '_wp_attachment_image_alt', true);

                            // Fallback to image title if ALT is empty
                            if (!$img1_alt) {
                                $img1_alt = get_the_title($img1_id);
                            }
                        }

                        // Final fallback: post title
                        if (!$img1_alt) {
                            $img1_alt = get_the_title();
                        }
                    ?>
                        <img src="<?php echo esc_url($all_banner_img1); ?>" 
                            alt="<?php echo esc_attr($img1_alt); ?>" 
                            class="desktop-ban-img">
                    <?php endif; ?>

                    <?php if ( $all_banner_img2 = get_field('all_banner_img2') ) :

                        $img2_id = attachment_url_to_postid($all_banner_img2);
                        $img2_alt = '';

                        if ($img2_id) {
                            $img2_alt = get_post_meta($img2_id, '_wp_attachment_image_alt', true);

                            if (!$img2_alt) {
                                $img2_alt = get_the_title($img2_id);
                            }
                        }

                        if (!$img2_alt) {
                            $img2_alt = get_the_title();
                        }
                    ?>
                        <img src="<?php echo esc_url($all_banner_img2); ?>" 
                            alt="<?php echo esc_attr($img2_alt); ?>" 
                            class="mbl-ban-img">
                    <?php endif; ?>
                </div>
                </div>
            </section>
            <section class="fleets-section " id="new-template-fleet">
                <div class="container">
                    <div class="test-border">
                        <div class="about-fleet" id="first-fleet">
                            <h3><?php the_field('selet_heading1');?></h3>
                            <div class="fleet-para">
                               <?php the_field('select_tagline1');?>
                            </div>
                        </div>
                        <div class="about-fleet" id="img-fleet-area">
                            <div class="img-fleet-left">
								<?php if( have_rows('select_repeater') ):  while ( have_rows('select_repeater') ) : the_row(); ?>
                               <div class="left-single">
                                <?php 
                                $icon_src = get_sub_field('select_icon');
                                if ($icon_src) :

                                    // Convert URL to attachment ID
                                    $icon_id = attachment_url_to_postid($icon_src);
                                    $icon_alt = '';

                                    if ($icon_id) {
                                        // Get ALT from media library
                                        $icon_alt = get_post_meta($icon_id, '_wp_attachment_image_alt', true);

                                        // Fallback to image title if ALT empty
                                        if (!$icon_alt) {
                                            $icon_alt = get_the_title($icon_id);
                                        }
                                    }

                                    // Final fallback: sub field name
                                    if (!$icon_alt) {
                                        $icon_alt = get_sub_field('select_name');
                                    }
                                ?>
                                    <img src="<?php echo esc_url($icon_src); ?>" 
                                        alt="<?php echo esc_attr($icon_alt); ?>">
                                <?php endif; ?>

                                <h5><?php the_sub_field('select_name'); ?></h5>
                                <?php the_sub_field('select_description'); ?>
                            </div>
								<?php endwhile; endif; ?>
                        
                            </div>
                            <div class="img-fleet-right">
                            <?php 
                            $img_src = get_field('right_full_img1'); 
                            if ($img_src) :

                                // Convert URL to attachment ID
                                $img_id = attachment_url_to_postid($img_src);
                                $img_alt = '';

                                if ($img_id) {
                                    // Get ALT from media library
                                    $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

                                    // fallback to image title if ALT empty
                                    if (!$img_alt) {
                                        $img_alt = get_the_title($img_id);
                                    }
                                }

                                // Final fallback: post title
                                if (!$img_alt) {
                                    $img_alt = get_the_title();
                                }
                            ?>
                                <img src="<?php echo esc_url($img_src); ?>" 
                                    alt="<?php echo esc_attr($img_alt); ?>">
                            <?php endif; ?>
                        </div>

                        </div>
                    </div>

                </div>
            </section>
            <section class="compare-table-section">
                <div class="container">
                    <h2><?php the_field('select_table_heading');?>e</h2>
                    <div class="compare-table-area">
						<?php the_field('select_table_data');?>
					</div>  
                    <div class="table-anchor">
                        <a href="https://fieldlogix.com/gps-fleet-tracking-features/#dash-tour">see how we transform fleets</a>
                    </div>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>