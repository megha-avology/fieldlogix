<?php
/* Template Name: goose_plans-page Template */
get_header();?>


<main id="main">
            <section class="hero integrations" id="plan-hero">
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
            <section class="fleets-section   device" id="plan-fleets">
                <div class="container">
                    <div class="border">
                        <div class="device-tabbing">
                            <?php $counter = 0; if( have_rows('price_repeater') ):  while ( have_rows('price_repeater') ) : the_row(); ?>
                            <p class="<?= $counter === 0 ? "active-track" : "" ?>"><?php the_sub_field('plan_list_name'); ?></p>
                            <?php $counter++; endwhile; endif; ?>
                        </div>
                        <?php if( have_rows('price_repeater') ):  while ( have_rows('price_repeater') ) : the_row(); ?>
                        <div class="box-area">
                            <div class="all-plan-boxes">
                            <?php if( have_rows('plan_inner_repeater') ):  while ( have_rows('plan_inner_repeater') ) : the_row(); ?>
                                <div class="plan-box">
                                    <div class="plan-head">
                                        <h4><?php the_sub_field('plan_title_name'); ?></h4>
                                        <?php
                                        $link = get_sub_field( 'see_it_now' );
                                        if ( $link ) :
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                        
                                            ?>
                                            <a class="button" href="<?php echo esc_url( $link_url ); ?>"><img src="<?php bloginfo('template_url');?>/images/plan-see.svg" alt="plan"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>
                                    
                                    </div>
                                    <div class="plan-head-2">
                                        <h4><?php the_sub_field('plan_description'); ?></h4>
                                        <span><?php the_sub_field('plan_quote'); ?></span>
                                    </div>
                                    <div class="plan-box-inner">
                                    <?php the_sub_field('plan_features'); ?>
                                    </div>
                                    <span class="features">See All Features <img src="<?php bloginfo('template_url');?>/images/see-more.svg"
                                            alt="see-more"></span>
                                </div>
                                <?php endwhile; endif; ?>
                          
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
             
                        <div class="fuel-btns" id="plan-btns">
							<?php
								$link = get_field( 'device_option_btn' );
								if ( $link ) :
									$link_url = $link['url'];
									$link_title = $link['title'];
									 $link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="fuel-fleet-green" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
							<?php
								$link = get_field( 'download_btn_plan' );
								if ( $link ) :
									$link_url = $link['url'];
									$link_title = $link['title'];
									 $link_target = $link['target'] ? $link['target'] : '_self';
									?>
									<a class="fuel-fleet-blue" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><img src="<?php bloginfo('template_url');?>/images/download.svg" alt="#"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
                      
                        </div>
                    </div>
                </div>
            </section>
	<section class="form-goose">
	<div class="container">
		
		<div class="goose-inner1">
			
			<?php the_content();?>
		</div>
		</div>
	</section>
            <?php get_template_part('template-parts/achivements-template'); ?>
            <?php get_template_part('template-parts/tour-section-template'); ?>
        </main>


<?php get_footer();?>