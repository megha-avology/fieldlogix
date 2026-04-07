<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package field-logix
 */

get_header();
?>

	<main id="main" class="site-main">
		<section class="blog-section search-section archive-section">
        	<div class="container">	
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							printf( esc_html__( 'Search Results for: %s', 'field-logix' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header>
						<div class="all-blogs all-blogs-loop">
							<?php
							while ( have_posts() ) :
								the_post();?>

									<?php get_template_part( 'template-parts/content', 'search' );?>		

							<?php endwhile;?>
						</div>
					<?php the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</section>
	</main>

<?php
get_footer();
