<?php 
/*
 Template Name: Goose Landing Page
*/

get_header(); ?>
<script>
setTimeout(function(){
jQuery('a[rel="wp-video-lightbox"]').prop('onclick',null);
},1000);
</script>

			<div id="page-content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


					<div id="inner-content" class="clearfix">

						<div class="goose-header">
							<div class="goose-header-container">
								<?php the_content(); ?>
							</div>
						</div>

						<div class="goose_intro">

							<div class="container">


								
								<img src="<?php echo get_stylesheet_directory_uri() ?>/library/images/goose/goose_lrg.png" alt="Goose" class="goose_mascot">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/library/images/goose/hand_screen_3.png" alt="Goose on a smartphone" class="goose_in_hand">
								
								<div class="goose_intro_content">
									
									<div class="goose-video">
										<?php if (get_field('goose_video')) { ?>
											<div class="embed-container">
												<?php the_field('goose_video'); ?>
											</div>
										<?php } ?>
									</div>

									<div class="mobile-space"></div>

								</div>

							</div><!-- end .container -->

						</div><!-- end .goose_intro -->

						<div class="goose_content_columns">

							<div class="container">
								
								<div class="fourcol first">
									<?php
										if (get_field('column_left')) {
											echo get_field('column_left');
										}
									?>
								</div>

								<div class="fourcol middle">
									<?php
										if (get_field('column_center')) {
											echo get_field('column_center');
										}
									?>
								</div>

								<div class="fourcol last">
									<?php
										if (get_field('column_right')) {
											echo get_field('column_right');
										}
									?>
								</div>

								<div class="clear"></div>
							
							</div>

						</div><!-- end .goose_content_columns -->

						<div class="goose_screenshots">

							<div class="container">
								<h2>send routes   >    navigate to jobs   >   send ETA's   >   proof of service   >    receipts & surveys</h2>
								<img src="<?php echo get_stylesheet_directory_uri() ?>/library/images/goose/phonex4_3.jpg" alt="Goose on a mobile device" >
			
							</div>

						</div><!-- end .goose_screemshots -->
						<!-- new conversion form -->
<a name="quote" style="position: relative; top: -250px;"></a> 
						<a name="goose_form"></a> 
<blockquote>
&nbsp;
<h3 style="text-align: center">“Goose makes my life easier!” </h3>
	<p style="text-align: center"><em>- Roger @ Fresh & Fit Meals</em></p>
</blockquote>	
						<div class="container">
									<?php gravity_form(80, true, false, true, '', true, 29); ?>	
						</div>

						</div>
&nbsp;
						<div class="goose_info">
							<div class="container">
								<?php

									// check if the flexible content field has rows of data
									if( have_rows('info_blurb_data') ) {

									     // loop through the rows of data
									    while ( have_rows('info_blurb_data') ) : the_row();

									        if( get_row_layout() == 'info_blurb' ) {

									        	echo '<div class="info_blurb">';

									        		echo '<div class="fourcol first">';

										        		$image = wp_get_attachment_image_src(get_sub_field('info_icon'), 'full');

										        		echo '<img src="' . $image[0] .'" alt="'. get_the_title(get_field('image_test')) . '" />';

										        	echo '</div>';

										        	echo '<div class="eightcol last">';

										        		echo get_sub_field('info_text');

										        	echo '</div>';

										        	echo '<div class="clear"></div>';

										        echo '</div>';



									        }

									    endwhile;

									}

								?>
							</div>
						</div><!-- end .goose_form -->
						

					</div> <!-- end #inner-content -->

				<?php endwhile; else : ?>

				<?php endif; ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>