<?php get_header(); ?>

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

						<div class="breadcrumb"><a href="<?php echo site_url('/case-studies/') ?>">&laquo; All Case Studies</a></div>
						
						<?php the_content(); ?>


						<footer class="article-footer">
							
							<div class="blog-entry-cta">

								<?php // Embed "Get a Quote" form
								gravity_form(80, true, false, false, '', true, 12); ?>

							</div>
							<div class="case-study-tax">
								<?php echo get_the_term_list( $post->ID, 'industry', '<p><strong>Industry:</strong> ', ', ', '</p>' ); ?>

								<?php echo get_the_term_list( $post->ID, 'region', '<p><strong>Regions:</strong> ', ', ', '</p>' ); ?>
							</div>				

						</footer> <!-- end article footer -->

					</div> <!-- end #inner-content -->

				<?php endwhile; else : ?>

				<?php endif; ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
