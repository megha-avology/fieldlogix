<?php
/* Template Name: dtc-codes-lookup-tool-page Template */
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
                        <h3>How DTC Codes are Generated</h3>
                        <div class="fleet-para" id="dtc-para">
                          <?php the_content();?>

           
                        </div>
                    </div>
                </div>
            </section>
            <section class="search-dtc-section">
                <div class="container">
                    <div class="dtc-head">
                        <h2>Search for Triggered DTC Codes</h2>
                        <p>You can search for the DTC code that your vehicle is triggering in the table below.</p>
                    </div>

                    <div class="dtc-table-area">


                        <div class="dtc-table-content">

						 	<?php echo do_shortcode( '[ninja_table_with_pagination table_id="40962"]' ); ?> 
							
                        </div>

                        
                    </div>
                </div>
            </section>
            <section class="tour-section equip-tour" id="dtc-box">
                <div class="container">
                    <div class="dtc-border">
                    <div class="tour-box">

						<?php echo do_shortcode( '[gravityform id="74" title="true" description="true"]' ); ?>
						
                    </div>
						<div class="dtc-btns">
                            <a href="https://en.wikipedia.org/wiki/OBD-II_PIDs" target="_blank" class="dtc-green">About DTC Codes</a>
                            <a href="https://fieldlogix.com/tools/" target="_blank" class="dtc-blue">Our Research Tools</a>
                        </div>
                </div>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>
        </main>

<?php get_footer();?>