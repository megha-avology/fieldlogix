<section class="partner-section">
                <div class="container">
                    <div class="partner-head">
                        <?php if ( $partners_heading = get_field( 'partners_heading', 'options' ) ) : ?>
                            <h2><?php echo esc_html( $partners_heading ); ?></h2>
                        <?php endif; ?>
                        <?php if ( $partners_tagline = get_field( 'partners_tagline', 'options' ) ) : ?>
                            <p><?php echo esc_html( $partners_tagline ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="partner-slider" id="partner-slider">
                    <?php if( have_rows('partners_repeater', 'options') ):  while ( have_rows('partners_repeater', 'options') ) : the_row(); ?>
                    <div class="partner-box">
                        <a  target="_blank" href="<?php the_sub_field('partners_link', 'options'); ?>">
                        <img src="<?php the_sub_field('partners_img', 'options'); ?>" alt="partner">
                        </a>
                    </div>
                    <?php endwhile; endif; ?>

                </div>
				<div class="partner-arrows-area">
					<div class="partner-left-arrow">
						<div class="prev">
                            <img src="https://fieldlogix.com/wp-content/themes/field-logix/images/prev.svg" alt="prev">
                        </div>
					</div>
					<div class="partner-right-arrow">
						<div class="next">
                            <img src="https://fieldlogix.com/wp-content/themes/field-logix/images/next.svg" alt="next">
                        </div>
					</div>
				</div>
	
            </section>