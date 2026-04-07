<?php
/* Template Name: case-studies Page Template */
get_header();?>



<section class="hero" id="other-services">
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
			
	<?php if ( $all_banner_img1 = get_field( 'all_banner_img1' ) ) :

		$img1_id = attachment_url_to_postid($all_banner_img1);
		$img1_alt = '';

		if ($img1_id) {
			$img1_alt = get_post_meta($img1_id, '_wp_attachment_image_alt', true);

			if (!$img1_alt) {
				$img1_alt = get_the_title($img1_id);
			}
		}

		if (!$img1_alt) {
			$img1_alt = 'Banner Image';
		}

	?>
		<img src="<?php the_field('all_banner_img1');?>" 
		     alt="<?php echo esc_attr($img1_alt); ?>" 
		     class="desktop-ban-img">
	<?php endif; ?>


	<?php if ( $all_banner_img2 = get_field( 'all_banner_img2' ) ) :

		$img2_id = attachment_url_to_postid($all_banner_img2);
		$img2_alt = '';

		if ($img2_id) {
			$img2_alt = get_post_meta($img2_id, '_wp_attachment_image_alt', true);

			if (!$img2_alt) {
				$img2_alt = get_the_title($img2_id);
			}
		}

		if (!$img2_alt) {
			$img2_alt = 'Banner Image';
		}

	?>
		<img src="<?php the_field('all_banner_img2');?>" 
		     alt="<?php echo esc_attr($img2_alt); ?>" 
		     class="mbl-ban-img">
	<?php endif; ?>

</div>
	</div>
</section>


<section class="blog-section">
    <div class="container">
        <div class="blog-border">
            <div class="blog-upper">
                <div  id="searchform">    
					<div class="blog-search">
						<?php
						// Retrieve terms for Industries taxonomy
						$industries_terms = get_terms( array(
							'taxonomy' => 'industry', // Replace 'case_industries' with the actual taxonomy slug
							'hide_empty' => false,
						) );

						// Check if terms are retrieved
						if ( ! empty( $industries_terms ) ) :
						?>
						<select name="industries" id="industries">
							<option value="">Select industry</option>
							<?php foreach ( $industries_terms as $term ) : ?>
								<option value="<?php echo esc_attr( $term->term_id ); ?>"><?php echo esc_html( $term->name ); ?></option>
							<?php endforeach; ?>
						</select>
						<?php endif; ?>

						<?php
						// Retrieve terms for Regions taxonomy
						$regions_terms = get_terms( array(
							'taxonomy' => 'region', // Replace 'case_regions' with the actual taxonomy slug
							'hide_empty' => false,
						) );

						// Check if terms are retrieved
						if ( ! empty( $regions_terms ) ) :
						?>
						<select name="regions" id="regions">
							<option value="">Select region</option>
							<?php foreach ( $regions_terms as $term ) : ?>
								<option value="<?php echo esc_attr( $term->term_id ); ?>"><?php echo esc_html( $term->name ); ?></option>
							<?php endforeach; ?>
						</select>
						<?php endif; ?>
						
					</div>
				</div>

				
				<div id="search-results" class="all-blog"></div>
				
				
               <?php
$featured_query = new WP_Query(array(
    'post_type' => 'case-studies',
    'case_taxonomies' => 'featured',
    'posts_per_page' => 1
));
if ($featured_query->have_posts()) {
    while ($featured_query->have_posts()) {
        $featured_query->the_post();

        // Get thumbnail ID
        $thumb_id = get_post_thumbnail_id(get_the_ID());

        // Default ALT
        $thumb_alt = '';

        if ($thumb_id) {
            $thumb_alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

            // fallback if ALT empty
            if (!$thumb_alt) {
                $thumb_alt = get_the_title($thumb_id);
            }
        }

        // final fallback
        if (!$thumb_alt) {
            $thumb_alt = get_the_title();
        }
?>
        <div class="blog-upper-box">
            <div class="blog-upper-left">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" 
                         alt="<?php echo esc_attr($thumb_alt); ?>">
                </a>
            </div>
            <div class="blog-upper-right">
                <div class="blog-content">
                    <ul>
                        <li><?php the_time('F jS, Y') ?></li>
                        <li><?php the_author_posts_link() ?></li>
                    </ul>
                    <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                    <?php the_excerpt(); ?> 
                </div>
                <div class="read">
                    <a href="<?php the_permalink(); ?>">Read Article</a>
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo '<p>No featured post found.</p>';
}
wp_reset_postdata(); 
?>
            </div>

            <div class="all-blogs all-blogs-loop">
				<?php
				if (get_query_var('paged')) {
					$paged = get_query_var('paged');
				} elseif (get_query_var('page')) {
					$paged = get_query_var('page');
				} else {
					$paged = 1;
				}

				$custom_query_args = array(
					'post_type' => 'case-studies',
					'posts_per_page' => 9,
					'paged' => $paged,
					'post_status' => 'publish',
					'ignore_sticky_posts' => true,
					'order' => 'DESC',
					'orderby' => 'date'
				);
				$custom_query = new WP_Query($custom_query_args);

				if ($custom_query->have_posts()) :
					while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
						<div <?php post_class('blog-box'); ?>>
							<div class="blog-content">
								<div class="single-blog-image">
									<?php if (has_post_thumbnail()) : 

										// Get thumbnail ID
										$thumb_id = get_post_thumbnail_id(get_the_ID());

										// Default ALT
										$thumb_alt = '';

										if ($thumb_id) {
											$thumb_alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

											// fallback if ALT empty
											if (!$thumb_alt) {
												$thumb_alt = get_the_title($thumb_id);
											}
										}

										// final fallback
										if (!$thumb_alt) {
											$thumb_alt = get_the_title();
										}

									?>
										<a href="<?php the_permalink(); ?>">
											<img class="content-image" 
												src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" 
												alt="<?php echo esc_attr($thumb_alt); ?>" />
										</a>
									<?php endif; ?>
								</div>
					

								<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
								<?php the_excerpt(); ?>
							</div>
										<?php
								$taxonomy_names = array('industry', 'region');
								foreach ($taxonomy_names as $taxonomy_name) {
									$terms = get_the_terms(get_the_ID(), $taxonomy_name);
									if ($terms && !is_wp_error($terms)) {
										$taxonomy_labels = array(
											'industry' => 'Industries',
											'region' => 'Regions'
										);
										$taxonomy_label = isset($taxonomy_labels[$taxonomy_name]) ? $taxonomy_labels[$taxonomy_name] : '';
										echo '<div class="casestudy-cat-container">';
										if ($taxonomy_label) {
											echo '<p class="casestudy-cat-name">' . esc_html($taxonomy_label) . '</p>';
										}
										foreach ($terms as $term) {
											$term_link = str_replace('/news/', '/', get_term_link($term));
											echo '<a href="' . esc_url($term_link) . '">' . $term->name . '</a> ,';
										}
										echo '</div>';
									}
								}
								?>
							<div class="read">
								<a href="<?php the_permalink(); ?>">Read Article</a>
							</div>
						</div>
					<?php
					endwhile;
					?>
					<?php
					wp_reset_postdata(); // reset the query 
				else :
					echo '<p>' . __('Sorry, no posts matched your criteria.') . '</p>';
				endif;
				?>
			</div>



            <div class="page-navigation">

            <?php
                if (get_query_var('paged')) {
                    $paged = get_query_var('paged');
                } elseif (get_query_var('page')) {
                    $paged = get_query_var('page');
                } else {
                    $paged = 1;
                }?>

                    <?php
					echo paginate_links(array(
						'total' => $custom_query->max_num_pages,
						'current' => max(1, get_query_var('paged')),
						'prev_text' => '<img src="' . esc_url(get_bloginfo('template_url')) . '/images/back-arrow-small.svg" alt="FieldLogix Case Studies">',
						'next_text' => '<img src="' . esc_url(get_bloginfo('template_url')) . '/images/next-arrow-small.svg" alt="FieldLogix Case Studies">',
					));
					?>
                <?php wp_reset_postdata();?>
            </div>
        </div>
    </div>
</section>
<style>
.ajax-pagination a.current {
    background: #e6e6e7;
}
</style>
<?php get_template_part('template-parts/tour-section-template'); ?>
<?php get_template_part('template-parts/achivements-template'); ?>


<?php get_footer();?>