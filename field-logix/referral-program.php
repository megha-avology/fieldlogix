<?php
/* Template Name: refferal-program-page Template */
get_header();?>

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
                        <?php 
                        if ( $all_banner_img1 = get_field('all_banner_img1') ) :
                            $desktop_alt = '';
                            $desktop_id  = attachment_url_to_postid($all_banner_img1);

                            if ($desktop_id) {
                                $desktop_alt = get_post_meta($desktop_id, '_wp_attachment_image_alt', true);

                                if (!$desktop_alt) {
                                    $desktop_alt = get_the_title($desktop_id);
                                }
                            }
                        ?>
                            <img src="<?php echo esc_url($all_banner_img1); ?>" 
                                alt="<?php echo esc_attr($desktop_alt); ?>" 
                                class="desktop-ban-img">
                        <?php endif; ?>
                        <?php 
                        if ( $all_banner_img2 = get_field('all_banner_img2') ) :

                            $mobile_alt = '';
                            $mobile_id  = attachment_url_to_postid($all_banner_img2);

                            if ($mobile_id) {
                                $mobile_alt = get_post_meta($mobile_id, '_wp_attachment_image_alt', true);

                                if (!$mobile_alt) {
                                    $mobile_alt = get_the_title($mobile_id);
                                }
                            }
                        ?>
                            <img src="<?php echo esc_url($all_banner_img2); ?>" 
                                alt="<?php echo esc_attr($mobile_alt); ?>" 
                                class="mbl-ban-img">
                        <?php endif; ?>
                    </div>
                </div>
            </section>
<section class="fleets-section" id="referal-fleet">
                <div class="container">
                    <div id="referal-about-form">
                        <div class="about-fleet" id="referal-program">
							<?php if ( $do_your_heading = get_field( 'do_your_heading' ) ) : ?>
							<h3><?php echo esc_html( $do_your_heading ); ?></h3>
							<?php endif; ?>
                          
                            <div class="fleet-para">
                                <?php if ( $do_your_tagline = get_field( 'do_your_tagline' ) ) : ?>
									<?php echo $do_your_tagline; ?>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="qualified-question">
                        <div class="question-area">
                            <?php the_content();?>

                        </div>
                        <div class="question-img-area">
                        <?php 
                        $question_img = get_field('do_your_img');

                        if ($question_img) :

                            $img_alt = '';
                            $img_id  = attachment_url_to_postid($question_img);
                            if ($img_id) {
                                $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);
                                if (!$img_alt) {
                                    $img_alt = get_the_title($img_id);
                                }
                            }
                        ?>
                            <img src="<?php echo esc_url($question_img); ?>" 
                                alt="<?php echo esc_attr($img_alt); ?>" />
                        <?php endif; ?>
                    </div>
                    </div>
                    <div class="border-form" id="partner-border-form">
                        <div class="about-fleet" id="partner-form">
                            <h3>Referral Submission Form</h3>
                            <div class="fleet-para">
                                <span>Fill out the form to submit your referrals today!</span>
                                <p>
                                    Earn a commission for a referral that purchases FieldLogix
                                    or pass the commissions to your client as a discount!
                                </p>

								<?php echo do_shortcode( '[gravityform id="17" title="true" description="true" ajax="true"]' ); ?>

                            </div>
                        </div>
                        <div class="question-btns" id="cenetr-q-btns">
                            <a href="https://fieldlogix.com/tools/fieldlogix-system-overview/" class="q-green"  target="_blank"><img src="<?php bloginfo('template_url');?>/images/q-1.svg" alt="#" />System Video Overview</a>
                            <a target="_blank" href="https://fieldlogix.com/wp-content/uploads/2024/03/FieldLogix-Capabilities-Overview-2022-1.pdf" class="q-blue"><img src="<?php bloginfo('template_url');?>/images/q-2.svg" alt="#" />Digital Brochure</a>
                        </div>
                    </div>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>