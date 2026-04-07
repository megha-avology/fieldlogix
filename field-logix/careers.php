<?php
/* Template Name: careers-page Template */
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
                    <?php if ( $all_banner_img1 = get_field( 'all_banner_img1' ) ) : ?>
                    <img src="<?php the_field('all_banner_img1');?>" alt="" class="desktop-ban-img">
                    <?php endif; ?>
                    <?php if ( $all_banner_img2 = get_field( 'all_banner_img2' ) ) : ?>
                    <img src="<?php the_field('all_banner_img2');?>" alt="" class="mbl-ban-img">
                    <?php endif; ?>
                    </div>
                </div>
            </section>
            <section class="fleets-section carrers" id="system-overview">
                <div class="container">
                    <div class="sp-border">
                        <div class="about-fleet">
                            <h3>Benefits of Joining Our Team</h3>
                            <div class="fleet-para">
                                <?php the_content();?>
                            </div>
                        </div>
                    </div>
                    <div class="all-purposes" id="carrer-purposes">
                        <div class="purpose-head">
                        <?php if ( $we_provide_heading = get_field( 'we_provide_heading' ) ) : ?>
                            <h2><?php echo esc_html( $we_provide_heading ); ?></h2>
                        <?php endif; ?>
                        </div>
                        <div class="partner-safety-purposes" id="carrer-safety">
                            <?php if( have_rows('we_provide_repeater') ):  while ( have_rows('we_provide_repeater') ) : the_row(); ?>
                            <div class="partner-content">
                                <h3><?php the_sub_field('we_provide_title'); ?></h3>
                                <?php the_sub_field('we_provide_data'); ?>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="Accomplishment-section">
                <div class="container">
                    <div class="accomplishment-head">
                    <?php if ( $accomplishments_heading = get_field( 'accomplishments_heading' ) ) : ?>
                        <h2><?php echo esc_html( $accomplishments_heading ); ?></h2>
                    <?php endif; ?>
                    <?php if ( $accomplishments_tagline = get_field( 'accomplishments_tagline' ) ) : ?>
                        <?php echo $accomplishments_tagline; ?>
                    <?php endif; ?>
                    </div>
                    <div class="accomplishment-after">
                        <?php if( have_rows('accomplishments_repeater') ):  while ( have_rows('accomplishments_repeater') ) : the_row(); ?>
                        <div class="acm-inner">
                        <?php the_sub_field('accomplishments_list'); ?>
                        </div>
                        <?php endwhile; endif; ?>
                        <?php
                            $link = get_field( 'learn_about_us' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                    </div>
                </div>
            </section>
            <section class="event-section">
                <div class="container">
                    <div class="event-head">
                        <?php if ( $company_events_heading = get_field( 'company_events_heading' ) ) : ?>
                            <h2><?php echo esc_html( $company_events_heading ); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="gallery-border">
							<div class="gallery-border event-show" id="tabs">
								<div class="grid-wrapper">
									<?php if(have_rows('events_gallery')) : while(have_rows('events_gallery')) : the_row();?>
										<div class="
													<?php if (get_sub_field('event_image_size') == "Tall") { echo "tall"; } elseif (get_sub_field('event_image_size') == "Wide") { echo "wide"; } elseif (get_sub_field('event_image_size') == "Big") {	echo "big"; } elseif (get_sub_field('event_image_size') == "Small") { echo ""; } ?>">
											<img src="<?php the_sub_field('event_image');?>" alt="" />
											<?php if ( $event_name = get_sub_field( 'event_name' ) ) : ?>
												<p class="event-name"><?php echo esc_html( $event_name ); ?></p>
											<?php endif; ?>
										</div>
									<?php endwhile; endif;?>
								</div>
							</div>
                        <a href="<?php echo esc_url(home_url()); ?>/gps-tracking-company/company-photos/">See more events</a>
                    </div>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
		<?php get_template_part('template-parts/achivements-template'); ?>
        </main>


<?php get_footer();?>