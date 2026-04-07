<?php
/* Template Name: Press Release Template */
get_header();?>

<section class="hero" id="other-services">
	<div class="banner-content-sol">
		<div class="container">
			<div class="left-content-sol">
				<p><?php the_field('banner_sub_heading');?></p>
				<h1><?php the_field('banner_heading');?></h1>
				<div class="banner-buttons-sol">
					<a class="start-btn" href="<?php the_field('banner_link');?>"><?php the_field('banner_link_text');?></a>
				</div>
			</div>
		</div>
		<div class="right-content">
			<?php 
			$desktop_img = get_field('banner_image');
			if ($desktop_img) :
				$desktop_alt = '';
				$desktop_id  = attachment_url_to_postid($desktop_img);

				if ($desktop_id) {
					$desktop_alt = get_post_meta($desktop_id, '_wp_attachment_image_alt', true);
					if (!$desktop_alt) {
						$desktop_alt = get_the_title($desktop_id);
					}
				}
			?>
				<img src="<?php echo esc_url($desktop_img); ?>" 
					alt="<?php echo esc_attr($desktop_alt); ?>" 
					class="desktop-ban-img">
			<?php endif; ?>
			<?php 
			$mobile_img = get_field('banner_image_mobile');
			if ($mobile_img) :
				$mobile_alt = '';
				$mobile_id  = attachment_url_to_postid($mobile_img);
				if ($mobile_id) {
					$mobile_alt = get_post_meta($mobile_id, '_wp_attachment_image_alt', true);
					if (!$mobile_alt) {
						$mobile_alt = get_the_title($mobile_id);
					}
				}
			?>
				<img src="<?php echo esc_url($mobile_img); ?>" 
					alt="<?php echo esc_attr($mobile_alt); ?>" 
					class="mbl-ban-img">
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="fleets-section " id="event-gallery-section">

	<div class="container">

		<div class="about-fleet">
			<h3><?php the_field('heading_left');?></h3>
			<div class="fleet-para" id="company-event-para">
				<?php the_field('description_right');?>
			</div>

		</div>

		<div class="border">
			<div class="pagination-boxes">
				   <?php
                if (get_query_var('paged')) {
                    $paged = get_query_var('paged');
                } elseif (get_query_var('page')) {
                    $paged = get_query_var('page');
                } else {
                    $paged = 1;
                }

                $custom_query_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 8,
					'category_name' => 'press-release',
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
						'prev_text' => '<img src="' . esc_url(get_bloginfo('template_url')) . '/images/back-arrow-small.svg" alt="Previous Page">',
						'next_text' => '<img src="' . esc_url(get_bloginfo('template_url')) . '/images/next-arrow-small.svg" alt="Next Page">',
					));
					?>
                <?php wp_reset_postdata();?>
            </div>

		</div>

	</div>
</section>



<?php get_template_part('template-parts/tour-section-template'); ?>

<?php get_template_part('template-parts/achivements-template'); ?>



<?php get_footer();?>