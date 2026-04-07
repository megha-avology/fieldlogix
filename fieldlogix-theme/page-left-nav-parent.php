<?php 
/*
Template Name: Left Sidebar Nav Parent Page
*/
get_header(); ?>

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
		</div>
		<!-- wrap  -->

	</div>
	<!-- blue-content  -->

	<?php } ?>

	<?php endwhile; else : ?>

	<?php endif; ?>

	<div id="post-list" class="clearfix wrap left-nav-container">

		<div id="main" class="left-nav-content" role="main">

			<div id="parent_page_content">
				<?php the_content(); // Display content on parent page ?>
			</div>

			<div id="child_pages_content">

				<?php
				// Getting all child page of current page.
				// See http://codex.wordpress.org/Function_Reference/get_pages#Displaying_Child_pages_of_the_current_page_in_post_format
				$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order', 'sort_order' => 'asc' ) );

				foreach( $mypages as $page ) {			
				?>
				<div class="fourcol">

					<div class="padding">

						<a href="<?php echo get_page_link( $page->ID );?>">
							<?php 
							// Getting image by ID of child page.
							// See http://www.advancedcustomfields.com/resources/image/
							// and http://www.advancedcustomfields.com/resources/how-to-get-values-from-another-page/
							$custom_image = get_field('parent_page_photo', $page->ID);
							$size = 'bones-thumb-300'; // (thumbnail, medium, large, full or custom size)

							if( $custom_image ) {
								echo wp_get_attachment_image( $custom_image, $size );
							}

							?>
						</a>

						<h2 class="subtitle">
							<a href="<?php echo get_page_link( $page->ID ); ?>">
								<?php echo $page->post_title; ?>
							</a>
						</h2>

						<div class="excerpt">
							<?php $custom_exceprt = get_field('parent_page_excerpt', $page->ID);
							echo $custom_exceprt; ?> <a href="<?php echo get_page_link( $page->ID );?>">Read More</a>
						</div>

					</div>
					<!-- padding  -->

				</div>
				<!-- col  -->

				<?php }	?>

				<div class="clear"></div>
			</div><!-- end #child_pages_content -->
		</div>
		<!-- end #main -->

		<div class="left-nav-sidebar">
			<?php dynamic_sidebar( 'left-nav-sidebar' ); ?>
		</div>

	</div>

	<div class="clear"></div>

</div>
<!-- end #content -->

<?php get_footer(); ?>