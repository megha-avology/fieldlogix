<?php 

/*
Template Name: No Header / Footer
*/


	get_header('header'); ?>

			<div id="page-content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php if(get_field('blue_banner')){ ?>

						<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'header-bg' ); ?>
						<?php endif; ?>

					<div class="blue-content" style="background-image:url(<?php echo $image[0]; ?>)">



						<div class="wrap">
							<div class="body_text">

								<?php echo get_field('blue_banner'); ?>
	
							</div>

						</div> <!-- wrap  -->

					</div> <!-- blue-content  -->

					<?php } ?>

					<div id="inner-content" class="clearfix">
						
						<?php the_content(); ?>

					</div> <!-- end #inner-content -->

				<?php endwhile; else : ?>

				<?php endif; ?>

			</div> <!-- end #content -->
<p><?php the_field('static_section_text'); ?></p>


<?php get_footer('footer'); ?>
