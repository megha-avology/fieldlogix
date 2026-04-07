<?php get_header(); ?>

			<div id="page-content">

				<?php
				/* 
				 * Getting the header banner photo and tagline from page ID# 34522
				 * The page title is "Case Studies Intro Content"
				 */
				?>

				<?php if(get_field('blue_banner', 34522 )) { ?>

					<?php if (has_post_thumbnail( 34522 ) ): ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( 34522 ), 'header-bg' ); ?>
					<?php endif; ?>

					<div class="blue-content" style="background-image:url(<?php echo $image[0]; ?>)">

						<div class="wrap">
							<div class="body_text">
								<?php echo get_field('blue_banner', 34522); ?>
							</div>
						</div> <!-- wrap  -->

					</div> <!-- blue-content  -->

				<?php } ?>

				

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="twelvecol first clearfix case-study-content" role="main">

						<h1 class="center"><?php single_term_title( 'Industry: ' ); ?></h1>

						

							<?php if (have_posts()) { ?>

								<div class="case-study-articles">

									<?php while (have_posts()) : the_post(); ?>

										<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

											<header class="article-header">

												<a href="<?php the_permalink() ?>">
													<?php 
													$custom_image = get_field('excerpt_thumbnail');
													$size = 'bones-thumb-300'; // (thumbnail, medium, large, full or custom size)

													if( $custom_image ) {
														echo wp_get_attachment_image( $custom_image, $size );
													} else {
														the_post_thumbnail( 'bones-thumb-300' );
													} ?>
												</a>

												<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

											</header> <!-- end article header -->

											<section class="entry-content clearfix">

												<div class="excerpt">
													<?php the_excerpt(); ?>
												</div>										

											</section> <!-- end article section -->

											<footer class="article-footer">

												<?php echo get_the_term_list( $post->ID, 'industry', '<p>Industry: ', ', ', '</p>' ); ?>

												<?php echo get_the_term_list( $post->ID, 'region', '<p>Regions: ', ', ', '</p>' ); ?>

											</footer> <!-- end article footer -->

										</article> <!-- end article -->

									<?php endwhile; ?>

								</div> <!-- end .case-study-articles -->
						

								<?php if (function_exists('bones_page_navi')) { ?>
									<?php bones_page_navi(); ?>
								<?php } else { ?>
									<nav class="wp-prev-next">
										<ul class="clearfix">
											<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
											<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
										</ul>
									</nav>
								<?php } ?>

							<?php } else { ?>

								<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e("This is the error message in the archive.php template.", "bonestheme"); ?></p>
									</footer>
								</article>

							<?php } ?>

							<div class="pricing-form-container">
								<?php // Embed "Get a Quote" form
								gravity_form(80, true, false, false, '', true, 12); ?>
							</div>

					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
