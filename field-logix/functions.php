<?php

/**
 * field-logix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package field-logix
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function field_logix_setup()
{
    /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on field-logix, use a find and replace
		* to change 'field-logix' to the name of your theme in all the template files.
		*/
    load_theme_textdomain('field-logix', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
    add_theme_support('title-tag');

    /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
    add_theme_support('post-thumbnails');



    /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'field_logix_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'field_logix_setup');

add_action('template_redirect', function () {

    $request_uri = rtrim($_SERVER['REQUEST_URI'], '/');

    // Redirect /tag → homepage
    if ($request_uri === '/tag') {
        wp_redirect(home_url('/'), 301);
        exit;
    }

    // Redirect any /page without number → parent URL
    if (preg_match('#/page$#', $request_uri)) {

        $redirect_url = preg_replace('#/page$#', '', $request_uri);

        // Safety fallback
        if ($redirect_url === '') {
            $redirect_url = '/';
        }

        wp_redirect(home_url($redirect_url . '/'), 301);
        exit;
    }
});


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function field_logix_content_width()
{
    $GLOBALS['content_width'] = apply_filters('field_logix_content_width', 640);
}
add_action('after_setup_theme', 'field_logix_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function field_logix_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'field-logix'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'field-logix'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'field_logix_widgets_init');

/**
 * Enqueue scripts and styles.
 */
// function field_logix_scripts() {
// 	wp_enqueue_style( 'field-logix-style', get_stylesheet_uri(), array(), _S_VERSION );
// 	wp_style_add_data( 'field-logix-style', 'rtl', 'replace' );

// 	wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), _S_VERSION );
// 	wp_enqueue_style( 'slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), _S_VERSION );
// 	wp_enqueue_style( 'custom',  get_template_directory_uri() . '/css/all.css', array(), _S_VERSION );
// 	wp_enqueue_style( 'custom',  get_template_directory_uri() . '/css/responsive.css', array(), _S_VERSION );

// 	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.js', array(), _S_VERSION, true );
// 	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
// 	wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), _S_VERSION, true );

// 	wp_enqueue_script( 'field-logix-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'field_logix_scripts' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
add_theme_support('menus');
register_nav_menu('header-menu', 'Primary');
register_nav_menu('solution-menu', 'Secondary');
register_nav_menu('more-menu', 'Third');
register_nav_menu('company-menu', 'Fourth');
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array());
};

function auto_featured_image()
{
    global $post;

    if (!has_post_thumbnail($post->ID)) {
        $attached_image = get_children("post_parent=$post->ID&amp;post_type=attachment&amp;post_mime_type=image&amp;numberposts=1");

        if ($attached_image) {
            foreach ($attached_image as $attachment_id => $attachment) {
                set_post_thumbnail($post->ID, $attachment_id);
            }
        }
    }
}
// Use it temporary to generate all featured images
add_action('the_post', 'auto_featured_image');
// Used for new posts
add_action('save_post', 'auto_featured_image');
add_action('draft_to_publish', 'auto_featured_image');
add_action('new_to_publish', 'auto_featured_image');
add_action('pending_to_publish', 'auto_featured_image');
add_action('future_to_publish', 'auto_featured_image');
function create_posttype()
{
    register_post_type(
        'case-studies',

        array(
            'labels' => array(
                'name' => __('Case Studies'),
                'singular_name' => __('case-studies')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'case-studies', 'with_front' => false),
            'supports' => array('title', 'thumbnail', 'editor', 'page-attributes', 'excerpt'),
        )
    );
}
add_action('init', 'create_posttype');
add_action('init', 'case_categories');
function case_categories()
{
    $labels = array(
        'name' => _x('Categories', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' =>  __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
    );
    register_taxonomy('case_taxonomies', 'case-studies', array(
        'hierarchical' => true,
        'labels' => $labels

    ));
}
add_action('init', 'register_case_industries_taxonomy');
function register_case_industries_taxonomy()
{
    $labels = array(
        'name' => _x('Industries', 'taxonomy general name'),
        'singular_name' => _x('Industry', 'taxonomy singular name'),
        'search_items' =>  __('Search Industries'),
        'all_items' => __('All Industries'),
        'parent_item' => __('Parent Industry'),
        'parent_item_colon' => __('Parent Industry:'),
        'edit_item' => __('Edit Industry'),
        'update_item' => __('Update Industry'),
        'add_new_item' => __('Add New Industry'),
        'new_item_name' => __('New Industry Name'),
    );
    register_taxonomy('industry', 'case-studies', array(
        'hierarchical' => true,
        'rewrite' => ['slug' => 'industry', 'with_front' => false],
        'labels' => $labels
    ));
}
add_action('init', 'register_case_regions_taxonomy');
function register_case_regions_taxonomy()
{
    $labels = array(
        'name' => _x('Regions', 'taxonomy general name'),
        'singular_name' => _x('Region', 'taxonomy singular name'),
        'search_items' =>  __('Search Regions'),
        'all_items' => __('All Regions'),
        'parent_item' => __('Parent Region'),
        'parent_item_colon' => __('Parent Region:'),
        'edit_item' => __('Edit Region'),
        'update_item' => __('Update Region'),
        'add_new_item' => __('Add New Region'),
        'new_item_name' => __('New Region Name'),
    );
    register_taxonomy('region', 'case-studies', array(
        'hierarchical' => true,
        'rewrite' => ['slug' => 'region', 'with_front' => false],
        'labels' => $labels
    ));
}
function create_posttype1()
{
    register_post_type(
        'install-guides',

        array(


            'labels' => array(
                'name' => __('Install Guides'),
                'singular_name' => __('install-guides')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => '', 'with_front' => false),
            'supports' => array('title', 'thumbnail', 'editor', 'page-attributes', 'excerpt'),
        )
    );
}
add_action('init', 'create_posttype1');
add_action('init', 'guide_categories');
function guide_categories()
{
    $labels = array(
        'name' => _x('Categories', 'taxonomy general name'),
        'singular_name' => _x('Category', 'taxonomy singular name'),
        'search_items' =>  __('Search Categories'),
        'all_items' => __('All Categories'),
        'parent_item' => __('Parent Category'),
        'parent_item_colon' => __('Parent Category:'),
        'edit_item' => __('Edit Category'),
        'update_item' => __('Update Category'),
        'add_new_item' => __('Add New Category'),
        'new_item_name' => __('New Category Name'),
    );
    register_taxonomy('guide_categories', 'install-guides', array(
        'hierarchical' => true,
        'rewrite' => array('slug' => '', 'with_front' => false),
        'labels' => $labels

    ));
}


// Remove 'guide_categories' from URL structure
function remove_guide_categories_from_url($args, $taxonomy)
{
    if ('guide_categories' === $taxonomy) {
        $args['rewrite'] = false;
    }
    return $args;
}
add_filter('register_taxonomy_args', 'remove_guide_categories_from_url', 10, 2);

// Remove post type base from URLs
function remove_install_guides_base($url, $post)
{
    if ($post->post_type == 'install-guides') {
        $url = str_replace('/install-guides/', '', $url);
    }
    return $url;
}
add_filter('post_type_link', 'remove_install_guides_base', 10, 2);








function gpi_find_image_id($post_id)
{
    if (!$img_id = get_post_thumbnail_id($post_id)) {
        $attachments = get_children(array(
            'post_parent' => $post_id,
            'post_type' => 'post',
            'numberposts' => 1,
            'post_mime_type' => 'image'
        ));
        if (is_array($attachments)) foreach ($attachments as $a)
            $img_id = $a->ID;
    }
    if ($img_id)
        return $img_id;
    return false;
}
function find_img_src($post)
{
    if (!$img = gpi_find_image_id($post->ID))
        if ($img = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches))
            $img = $matches[1][0];
    if (is_int($img)) {
        $img = wp_get_attachment_image_src($img);
        if ($img) {
            $img = $img[0];
        }
    }
    return $img;
}
function custom_ajax_search() {
	$industry = isset($_POST['industries']) ? intval($_POST['industries']) : '';
	$region   = isset($_POST['regions']) ? intval($_POST['regions']) : '';
	$paged    = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
	$tax_query = array('relation' => 'AND');
	if ($industry) {
		$tax_query[] = array(
			'taxonomy' => 'industry',
			'field' => 'term_id',
			'terms' => $industry,
		);
	}
	if ($region) {
		$tax_query[] = array(
			'taxonomy' => 'region',
			'field' => 'term_id',
			'terms' => $region,
		);
	}
	$args = array(
		'post_type' => 'case-studies',
		'posts_per_page' => 9,
		'paged' => $paged,
		'post_status' => 'publish',
	);
	if (count($tax_query) > 1) {
		$args['tax_query'] = $tax_query;
	}
	$query = new WP_Query($args);
	if ($query->have_posts()) :
	echo '<div class="all-blogs">';
	while ($query->have_posts()) : $query->the_post(); ?>
		<div <?php post_class('blog-box'); ?>>
			<div class="blog-content">
				<div class="single-blog-image">
					<?php if (has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
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
	<?php endwhile;
	echo '</div>';
	// AJAX pagination
	echo '<div class="ajax-pagination page-navigation">';
	// Prev button
	if ($paged > 1) {
		echo '<a href="#" class="prev page-numbers" data-page="' . ($paged - 1) . '">
		<img src="' . esc_url(get_template_directory_uri()) . '/images/back-arrow-small.svg">
		</a>';
	}
	// Page numbers
	for ($i = 1; $i <= $query->max_num_pages; $i++) {
		echo '<a href="#" 
		data-page="' . $i . '" 
		class="page-numbers ' . ($paged == $i ? 'current' : '') . '">
		' . $i . '
		</a>';
	}
	// Next button
	if ($paged < $query->max_num_pages) {
		echo '<a href="#" class="next page-numbers" data-page="' . ($paged + 1) . '">
		<img src="' . esc_url(get_template_directory_uri()) . '/images/next-arrow-small.svg">
		</a>';
	}
	echo '</div>';
	else :
	echo '<p>No results found.</p>';
	endif;
	wp_reset_postdata();
	wp_die();
}

add_action('wp_ajax_custom_ajax_search', 'custom_ajax_search');
add_action('wp_ajax_nopriv_custom_ajax_search', 'custom_ajax_search');
function enqueue_custom_scripts()
{
    wp_enqueue_script('custom-ajax-search', get_template_directory_uri() . '/js/custom.js', array('jquery'), time(), true);
    wp_localize_script('custom-ajax-search', 'ajax_params', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



function add_categories($classes = '')
{

    $categories = get_the_category();
    foreach ($categories as $category) {
        $classes[] = 'category-' . $category->slug;
    }
    return $classes;
}
add_filter('body_class', 'add_categories');



add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template($template)
{
    foreach ((array) get_the_category() as $category) {
        if ($category->slug === 'press-release' && file_exists(STYLESHEETPATH . "/single-category-press-release.php")) {
            return STYLESHEETPATH . "/single-category-press-release.php";
        } elseif ($category->parent) {
            $parent_category = get_category($category->parent);
            if ($parent_category && $parent_category->slug === 'press-release' && file_exists(STYLESHEETPATH . "/single-category-press-release.php")) {
                return STYLESHEETPATH . "/single-category-press-release.php";
            }
        }
    }
    return $template;
}





// Guide cat
// 
// Function to add new image fields to all taxonomies
function add_custom_images_field_to_all_taxonomies($taxonomy)
{
?>
    <div class="form-field">
        <label for="taxonomy_banner_image"><?php _e('Banner Image', 'textdomain'); ?></label>
        <input type="text" name="taxonomy_banner_image" id="taxonomy_banner_image" value="" />
        <button class="button taxonomy-banner-image-upload"><?php _e('Upload Banner Image', 'textdomain'); ?></button>
        <p><?php _e('Upload a banner image for this taxonomy.', 'textdomain'); ?></p>
    </div>
    <!--     <div class="form-field">
        <label for="taxonomy_thumbnail_image"><?php _e('Thumbnail Image', 'textdomain'); ?></label>
        <input type="text" name="taxonomy_thumbnail_image" id="taxonomy_thumbnail_image" value="" />
        <button class="button taxonomy-thumbnail-image-upload"><?php _e('Upload Thumbnail Image', 'textdomain'); ?></button>
        <p><?php _e('Upload a thumbnail image for this taxonomy.', 'textdomain'); ?></p>
    </div> -->
<?php
}

// Function to display image fields when editing a taxonomy term
function edit_custom_images_field_for_all_taxonomies($term)
{
    $banner_image = get_term_meta($term->term_id, 'taxonomy_banner_image', true);
    $thumbnail_image = get_term_meta($term->term_id, 'taxonomy_thumbnail_image', true);
?>
    <tr class="form-field">
        <th scope="row"><label for="taxonomy_banner_image"><?php _e('Banner Image', 'textdomain'); ?></label></th>
        <td>
            <img class="zci-taxonomy-image" src="<?php echo esc_url($banner_image); ?>">
            <input type="text" name="taxonomy_banner_image" id="taxonomy_banner_image" value="<?php echo esc_url($banner_image); ?>" />
            <button class="button taxonomy-banner-image-upload"><?php _e('Upload Banner Image', 'textdomain'); ?></button>
            <p><?php _e('Upload a banner image for this taxonomy.', 'textdomain'); ?></p>
        </td>
    </tr>
    <!--     <tr class="form-field">
        <th scope="row"><label for="taxonomy_thumbnail_image"><?php _e('Thumbnail Image', 'textdomain'); ?></label></th>
        <td>
            <input type="text" name="taxonomy_thumbnail_image" id="taxonomy_thumbnail_image" value="<?php echo esc_url($thumbnail_image); ?>" />
            <button class="button taxonomy-thumbnail-image-upload"><?php _e('Upload Thumbnail Image', 'textdomain'); ?></button>
            <p><?php _e('Upload a thumbnail image for this taxonomy.', 'textdomain'); ?></p>
        </td>
    </tr> -->
<?php
}

// Save the custom images for all taxonomies
function save_custom_images_for_all_taxonomies($term_id)
{
    if (isset($_POST['taxonomy_banner_image'])) {
        update_term_meta($term_id, 'taxonomy_banner_image', esc_url($_POST['taxonomy_banner_image']));
    }
    if (isset($_POST['taxonomy_thumbnail_image'])) {
        update_term_meta($term_id, 'taxonomy_thumbnail_image', esc_url($_POST['taxonomy_thumbnail_image']));
    }
}

// Enqueue media uploader for taxonomy image upload buttons across the site
function enqueue_media_uploader_for_taxonomy()
{
    wp_enqueue_media();
?>
    <script>
        jQuery(document).ready(function($) {
            var mediaUploader;

            // Upload banner image
            $('.taxonomy-banner-image-upload').click(function(e) {
                e.preventDefault();

                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }

                mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose Banner Image',
                    button: {
                        text: 'Choose Image'
                    },
                    multiple: false
                });

                mediaUploader.on('select', function() {
                    var attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#taxonomy_banner_image').val(attachment.url);
                });

                mediaUploader.open();
            });

            // Upload thumbnail image
            $('.taxonomy-thumbnail-image-upload').click(function(e) {
                e.preventDefault();

                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }

                mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose Thumbnail Image',
                    button: {
                        text: 'Choose Image'
                    },
                    multiple: false
                });

                mediaUploader.on('select', function() {
                    var attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#taxonomy_thumbnail_image').val(attachment.url);
                });

                mediaUploader.open();
            });
        });
    </script>
<?php
}

// Apply functions to all taxonomies across the site
function apply_custom_image_fields_to_all_taxonomies()
{
    $taxonomies = get_taxonomies(array('public' => true), 'names');

    foreach ($taxonomies as $taxonomy) {
        add_action("{$taxonomy}_add_form_fields", 'add_custom_images_field_to_all_taxonomies');
        add_action("{$taxonomy}_edit_form_fields", 'edit_custom_images_field_for_all_taxonomies');
        add_action("edited_{$taxonomy}", 'save_custom_images_for_all_taxonomies');
        add_action("create_{$taxonomy}", 'save_custom_images_for_all_taxonomies');
    }
}

// Enqueue the media uploader for all taxonomies
add_action('admin_footer', 'enqueue_media_uploader_for_taxonomy');

// Run the custom image fields function for all taxonomies
add_action('init', 'apply_custom_image_fields_to_all_taxonomies');

function field_logix_my_scripts()
{
    wp_enqueue_style('datatables-css', 'https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.min.css', array(), time());
    wp_enqueue_script('datatables-js', 'https://cdn.datatables.net/2.2.1/js/dataTables.min.js', array(), time(), true);
}

add_action('wp_enqueue_scripts', 'field_logix_my_scripts');
add_action('init', 'get_rec');
add_filter( 'wpseo_canonical', 'force_self_canonical_for_paginated_pages', 99 );
function force_self_canonical_for_paginated_pages( $canonical ) {

    if ( is_paged() ) {
        return get_pagenum_link( get_query_var( 'paged' ) );
    }

    return $canonical;
}


function get_rec()
{
    add_shortcode('ninja_table_with_pagination', 'render_ninja_table_with_pagination');
}

function render_ninja_table_with_pagination($atts)
{
    // Extract attributes
    $atts = shortcode_atts(array(
        'table_id' => 0, // Table ID (required)
    ), $atts);

    $table_id = intval($atts['table_id']);
    if (!$table_id) {
        return '<p>Please provide a valid table ID.</p>';
    }

    // Fetch data using the Ninja Tables function
    $data = ninjaTablesGetTablesDataByID($table_id, [], false, true, false, false, false);



    if (empty($data)) {
        return '<p>No data found for the specified table.</p>';
    }

    // Build the table HTML
    ob_start();
?>
    <table id="ninja-datatable-<?php echo $table_id; ?>" class="display" style="width:100%">
        <thead>
            <tr>
                <?php
                $tableColumns   = ninja_table_get_table_columns($table_id);

                foreach ($tableColumns as $table_col) {
                    echo '<th>' . $table_col['name'] . '</th>';
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as $row) {
                echo '<tr>';

                echo '<td>' . esc_html($row['type']) . '</td>';
                echo '<td>' . esc_html($row['code'])  . '</td>';
                echo '<td>' . esc_html($row['description'])  . '</td>';

                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <script>
        jQuery(document).ready(function($) {
            $('#ninja-datatable-<?php echo $table_id; ?>').DataTable({
                pageLength: 10 // Number of rows per page
            });
        });
    </script>
<?php
    return ob_get_clean();
}
add_action('wp_head', function () {
?>
<style>
.banner-section{min-height:520px;display:flex;align-items:center}
.banner-content{display:flex}
.left-content h1{font-size:48px;line-height:1.2;margin:0}
</style>
<?php
}, 1);

add_action('wp_head', function () {
?>
<link rel="preload"
      href="/wp-content/themes/field-logix/fonts/poppins-semibold.woff2"
      as="font"
      type="font/woff2"
      crossorigin>
<?php
}, 1);

