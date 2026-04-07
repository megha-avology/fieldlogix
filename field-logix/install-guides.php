<?php
/* Template Name: Install Guides */
get_header();?>

<main id="main">
            <section class="hero" id="install-banner">
                <div class="banner-content-sol">
                    <div class="container">
                        <div class="left-content-sol">
                            <p><?php the_field('small_heading'); ?></p>
                            <h1><?php the_field('page_heading'); ?></h1>
                        </div>
                    </div>
                    <div class="right-content">
                        <img src="<?php the_field('banner_image'); ?>" alt="#" class="desktop-ban-img">
                        <img src="<?php the_field('mbl_banner');?>" alt="#" class="mbl-ban-img">
                    </div>
                </div>
            </section>
            <section class="fleets-section install-guides " id="dash-camera">
                <div class="container">
                    <div class="about-fleet">
                        <h3><?php the_field('categories_heading'); ?></h3>
                        <div class="fleet-para" id="equipment-para">
                            <p><?php the_field('categories_tagline'); ?></p>
<!--                             <a href="<?php echo esc_url(home_url()); ?>/tools/telematics-device-options/">Learn More</a> -->
                        </div>
                    </div>
                    <div class="border">
                        <div class="box-area">
                            <div class="fleet-boxes">
                                <?php
									// Retrieve categories of custom post type "install-guides"
									$categories = get_categories(array(
										'taxonomy' => 'guide_categories', // Taxonomy name
										'hide_empty' => false, // Include categories with no posts
									));

									// Loop through each category
									foreach ($categories as $category) {
										$category_name = $category->name;
										$category_description = $category->description;
										$category_slug = $category->slug;
										$category_thumbnail_url = z_taxonomy_image_url($category->term_id); // Get category image URL
										$category_slug = str_replace('-', ' ', $category_slug);

										// Output HTML for each category
										echo '<div class="single-fleet-box">';
										// Use category image URL if available
										if ($category_thumbnail_url) {
											echo '<a href="' . str_replace('/news/', '/', get_term_link($category)) . '"><img src="' . $category_thumbnail_url . '" alt="' . $category_name . '"></a>';
										}
        echo '<h3><a href="' . str_replace('/news/', '/', get_term_link($category)) . '">' . $category_description . '</a></h3>';
										echo '</div>';
									}
								?>
								<?php 
$args = array( 
    'post_type' => 'install-guides', 
    'post__in' => array(40246), // Specify the post ID here
);

$the_query = new WP_Query( $args ); 

if ( $the_query->have_posts() ) : 
    while ( $the_query->have_posts() ) : 
        $the_query->the_post(); 
?>

<div class="single-fleet-box">
    <?php if (has_post_thumbnail()) : ?>
	<a href = "<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
    <?php endif; ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</div>

<?php 
    endwhile; 
    wp_reset_postdata(); 
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