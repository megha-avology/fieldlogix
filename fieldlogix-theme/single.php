<?php get_header(); ?>
			<div id="page-content">

				<div id="news-bar">
					<div class="wrap">
						<div id="blog-categories">
							<form action="<?php bloginfo('url'); ?>/" method="get">
								<?php
								$select = wp_dropdown_categories('show_option_none=Select Category&show_count=1&orderby=name&echo=0&selected=6');
								$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
								echo $select;
								?>
								<noscript><input type="submit" value="View" /></noscript>
							</form>
						</div>

						<div id="blog-search">
							<?php get_search_form(); ?>
						</div>

						<div class="clear"></div>
					</div>
				</div>

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/Article">
							
							<?php /*
								$feat = catch_that_image();
								$my_excerpt = get_the_excerpt();
								if(empty($feat))
								{
									$feat = "http://cdn.fieldlogix.com/wp-content/themes/fieldlogix-theme/library/images/logo-field-logix.jpg";
								}
								echo "<meta content='$feat' itemprop='thumbnailUrl' />"; 
								global $post;
								$post_author_id = $post->post_author;
								$post_author_display = get_the_author_meta('display_name', $post_author_id );
								*/ ?>
								<meta content="<?php echo $post_author_display; ?>" itemprop="author"/>

								<header class="article-header">

									<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
									<p class="byline vcard"><?php
										printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_category_list(', '));
										// printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')));
									?></p>

								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									
									<?php the_content(); ?>
									
									

								</section> <!-- end article section -->

								<footer class="article-footer">
									
									<div class="blog-entry-cta">
										<!--
										<a href="<?php bloginfo('siteurl'); ?>/fleet-gps-tracking-system-benefits/">
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/news_section_footer_mobile_banner_web.png" alt="We can help your fleet - Learn More" class="mobile">
											<img src="<?php echo get_template_directory_uri(); ?>/library/images/news_section_footer_desktop_banner_web.png" alt="We can help your fleet - Learn More" class="desktop">
										</a>
										-->	

										<?php // Embed "Get a Quote" form
										gravity_form(80, true, false, false, '', true, 12); ?>

									</div>
									

									<?php echo '<p class="categories">Categories: ' . get_the_category_list(', ') . '</p>'; ?>
									<?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>
									<?php // echo do_shortcode('[fbcomments]'); // Manually displaying Facebook Comments plugin comments. ?>
									<?php // related_posts();  Manually displaying YARPP plugin related posts. See http://wordpress.org/plugins/yet-another-related-posts-plugin/faq/ ?>

								</footer> <!-- end article footer -->

								<?php //comments_template(); ?>

							</article> <!-- end article -->

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div> <!-- end #main -->


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->
<?php get_footer(); ?>
