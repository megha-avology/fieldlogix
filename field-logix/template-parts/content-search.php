<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package field-logix
 */

?> 

<div id="post-<?php the_ID(); ?>" <?php post_class('blog-box'); ?>>
	<div class="blog-content">
		<ul>
			<li><?php the_time( 'F jS, Y' ) ?></li>
			<li><?php the_author_posts_link() ?></li>
		</ul>
		<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
		<div class="search-excerpt">
			<?php the_excerpt();?>
		</div>
	</div>
	<div class="read">
		<a href="<?php the_permalink(); ?>">Learn More</a>
	</div>
</div>
