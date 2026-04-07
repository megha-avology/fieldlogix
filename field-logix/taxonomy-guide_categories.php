<?php get_header(); ?>

<main id="main">
            <section class="hero guide-new" id="new-imp">
                <div class="banner-content-sol">
                    <div class="container">
                        <div class="left-content-sol">
                            <p><?php the_field('small_heading', 40145); ?></p>
                            <h1><?php the_field('page_heading', 40145); ?></h1>
                            <div class="banner-buttons-sol">
                                <a class="start-btn" href="#dash-tour">See It Now</a>

                            </div>
                        </div>
                    </div>
                    <div class="right-content">
						<?php
// // Get the current category object
// $current_category = get_queried_object();

// // Get the category name
// $category_name = $current_category->name;

// // Get the category thumbnail image (assuming you have a function like z_taxonomy_image_url for taxonomy images)
// $category_thumbnail_url = z_taxonomy_image_url($current_category->term_id); // Get category image URL

// if ($category_thumbnail_url) {
//     echo '<img src="' . esc_url($category_thumbnail_url) . '" alt="' . esc_attr($category_name) . '">'; // Display category image
// }
$term = get_queried_object();
$banner_image = get_term_meta($term->term_id, 'taxonomy_banner_image', true);
$thumbnail_image = get_term_meta($term->term_id, 'taxonomy_thumbnail_image', true);

if ($banner_image) {
    echo '<img src="' . esc_url($banner_image) . '" alt="Banner Image">';
}



?>
						
<!--                         <img src="<?php the_field('banner_image', 40145); ?>" alt="#" class="desktop-ban-img">
                        <img src="<?php bloginfo('template_url'); ?>/images/dash-camera-banner.svg" alt="#" class="mbl-ban-img"> -->
                    </div>
                </div>
            </section>
            <section class="fleets-section  " id="plug">
                <div class="container">
                    <div class="about-fleet">
<?php
// Get the current category object
$current_category = get_queried_object();

// Get the category name
$category_name = $current_category->name;

// Get the category thumbnail image (assuming you have a function like z_taxonomy_image_url for taxonomy images)
$category_thumbnail_url = z_taxonomy_image_url($current_category->term_id); // Get category image URL

// Output the category name and image
echo '<h3>' . esc_html($category_name) . '</h3>'; // Display the category name



?>

                        <div class="fleet-para" id="equipment-para">
                            <p>Please select the type of wiring harness that you are using</p>
<!--                             <a href="#.">Learn More</a> -->
                        </div>
                    </div>
                    <div class="border">
                        <div class="box-area">
                            <div class="fleet-boxes">
								<?php
									// Get the current category object
									$current_category = get_queried_object();

									// Query posts in the current category
									$args = array(
										'post_type' => 'install-guides', // Your custom post type
										'tax_query' => array(
											array(
												'taxonomy' => 'guide_categories', // Your custom taxonomy
												'field' => 'id',
												'terms' => $current_category->term_id, // ID of the current category
											),
										),
									);

									$related_posts = new WP_Query($args);

									// Display the posts
									if ($related_posts->have_posts()) :
										while ($related_posts->have_posts()) :
											$related_posts->the_post();
									?>
										<div class="single-fleet-box">
											<a href="<?php the_permalink(); ?>">
											<?php
											if (has_post_thumbnail()) {
            // Display the featured thumbnail
            the_post_thumbnail('thumbnail');
        }
											?>
											</a>
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										</div>
									<?php
										endwhile;
										wp_reset_postdata(); // Reset the post data
									else :
										echo 'No posts found'; // If no posts are found
									endif;
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php get_template_part ( 'template-parts/achivements-template' ) ;?>
            <?php get_template_part('template-parts/tour-section-template'); ?>
        </main>

<?php get_footer();?>