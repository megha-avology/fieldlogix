<?php
/* Template Name: Blog Page Template */
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
    $banner_img = get_field('banner_image');
    if ($banner_img) :

        $img_id = attachment_url_to_postid($banner_img);
        $img_alt = '';

        if ($img_id) {
            $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

            if (!$img_alt) {
                $img_alt = get_the_title($img_id);
            }
        }

        if (!$img_alt) {
            $img_alt = get_the_title();
        }
    ?>
        <img src="<?php echo esc_url($banner_img); ?>" 
             alt="<?php echo esc_attr($img_alt); ?>" 
             class="desktop-ban-img">
    <?php endif; ?>


    <?php 
    $banner_img_mbl = get_field('banner_image_mobile');
    if ($banner_img_mbl) :

        $img_id_mbl = attachment_url_to_postid($banner_img_mbl);
        $img_alt_mbl = '';

        if ($img_id_mbl) {
            $img_alt_mbl = get_post_meta($img_id_mbl, '_wp_attachment_image_alt', true);

            if (!$img_alt_mbl) {
                $img_alt_mbl = get_the_title($img_id_mbl);
            }
        }

        if (!$img_alt_mbl) {
            $img_alt_mbl = get_the_title();
        }
    ?>
        <img src="<?php echo esc_url($banner_img_mbl); ?>" 
             alt="<?php echo esc_attr($img_alt_mbl); ?>" 
             class="mbl-ban-img">
    <?php endif; ?>

</div>
    </div>
</section>


<section class="blog-section">
    <div class="container">
        <div class="blog-border">
            <div class="blog-upper">
				<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">    
					<div class="blog-search">
						<?php
							$args = array(
								'show_option_all' => 'Select category',
								'orderby' => 'name',
								'hide_empty' => 0,
								'echo' => 0,
								'name' => 'category', 
								'selected' => get_query_var('category'),
								'value_field' => 'slug',
								'walker' => new Walker_Category_Post_Count(),
							);
							$select = wp_dropdown_categories($args);
							?>
							<?php if ($select) : ?>
								<?php echo $select; ?>
							<?php endif; ?>
							
							
						
						
							<?php
							// Custom walker class to display post count
							class Walker_Category_Post_Count extends Walker_CategoryDropdown {
								function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {
									$pad = str_repeat(' ', $depth * 3);
									$cat_name = apply_filters('list_cats', $category->name, $category);
									$value = $category->slug; // Get the taxonomy slug
									$output .= "\t<option class=\"level-$depth\" value=\"".$value."\""; // Use slug as value
									if ( $value == $args['selected'] )
										$output .= ' selected="selected"';
									$output .= '>';
									$output .= $pad.$cat_name;
									$output .= ' ('. $category->count .')';
									$output .= "</option>\n";
								}
							}
							?>

						<label for="s" class="screen-reader-text"><?php _e('Search for:'); ?></label> 
						<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_attr_e('Search blog'); ?>" />
						<input type="hidden" name="post_type" value="post">
					</div>
				</form>
				<script>
					document.getElementById('category').addEventListener('change', function() {
						var categorySlug = this.value;
						if (categorySlug) {
							var categoryUrl = '<?php echo esc_url(home_url('/')); ?>news/'  + categorySlug;
							window.location.href = categoryUrl;
						}
					});
				</script>







                <?php
                    $featured_query = new WP_Query(array(
                        'post_type' => 'post',
                        'category_name' => 'featured',
                        'posts_per_page' => 1
                    ));
                    if ($featured_query->have_posts()) {
                        while ($featured_query->have_posts()) {
                            $featured_query->the_post();
                            ?>
                            <div class="blog-upper-box">
                               <div class="blog-upper-left">
                                <?php 
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
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" 
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

            <div class="all-blogs">
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
							<?php if ($img_src = find_img_src($post)) : ?>
    <?php if ($img_src = find_img_src($post)) : 
    // Get featured image ALT
    $thumb_id = get_post_thumbnail_id($post->ID);
    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

    // Fallback to post title
    if (empty($alt)) {
        $alt = get_the_title($post->ID);
    }
?>
    <a href="<?php the_permalink(); ?>">
        <img class="content-image"
             src="<?php echo esc_url($img_src); ?>"
             alt="<?php echo esc_attr($alt); ?>" />
    </a>
<?php endif; ?>
<?php else : ?>
    <a href="<?php the_permalink(); ?>">
        <img class="content-image" src="https://fieldlogix.com/wp-content/uploads/2024/09/Default-Blog-Image.svg" alt="Default Blog Image" />
    </a>
<?php endif; ?>


								</div>
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