<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/bones.php'); // if you remove this, bones will break
/*
2. library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
require_once('library/custom-post-type.php'); // you can disable this if you like
/*
3. library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
// require_once('library/admin.php'); // this comes turned off by default
/*
4. library/translation/translation.php
	- adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default


//* Enqueue Custom Styles and Scripts
add_action( 'wp_enqueue_scripts', 'field_logix_scripts' );
function field_logix_scripts() {

	if (is_page(28700)) { // Goose landing page
		wp_enqueue_style( 'goose-styles', get_stylesheet_directory_uri().'/library/css/goose.css');
		
	}

}

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'main-style-css', get_template_directory_uri(). '/style.css');
  
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );




/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
add_image_size( 'header-bg', 1920, 576, true );

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'bonestheme'),
		'description' => __('The first (primary) sidebar.', 'bonestheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title_container"><h4 class="widgettitle">',
		'after_title' => '</h4></div>',
	));

	register_sidebar(array(
		'id' => 'left-nav-sidebar',
		'name' => __('Left Nav Sidebar', 'bonestheme'),
		'description' => __('The first (primary) sidebar.', 'bonestheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widget_title_container"><h4 class="widgettitle">',
		'after_title' => '</h4></div>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'bonestheme'),
		'description' => __('The second (secondary) sidebar.', 'bonestheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<!-- custom gravatar call -->
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>?s=32" class="load-gravatar avatar avatar-48 photo" height="32" width="32" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
				<!-- end custom gravatar call -->
				<?php printf(__('<cite class="fn">%s</cite>', 'bonestheme'), get_comment_author_link()) ?>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__('F jS, Y', 'bonestheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'bonestheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e('Your comment is awaiting moderation.', 'bonestheme') ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<label class="screen-reader-text" for="s">' . __('Search for:', 'bonestheme') . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search','bonestheme').'" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
	<div class="clear"></div>
	</form>';
	return $form;
} // don't remove this bracket!
/*********************** shortcode layout ***********************/
function layout_grid_row( $atts, $content = null ) {
	
	extract(shortcode_atts( array('class' => ''), $atts)); 
	
	return '<div class="post-content wrap '. $class .'">' . do_shortcode($content) . '</div>';

}
add_shortcode('row', 'layout_grid_row');

function layout_grid_full( $atts, $content = null ) {
	
	extract(shortcode_atts( array('class' => ''), $atts)); 
	
	return '<div class="full-width '. $class .'">' . do_shortcode($content) . '</div>';

}
add_shortcode('full', 'layout_grid_full');

function layout_grid_fourcol( $atts, $content = null ) {

	extract(shortcode_atts( array('class' => ''), $atts)); 

	$output = '<div class="threecol '. $class .'"><div class="padding">' . do_shortcode($content) . '</div></div>';

	if($class == 'last'){

		$output .= '<div class="clear"></div>';

	}

	return $output;

}
add_shortcode('fourcol', 'layout_grid_fourcol');

function layout_grid_threecol( $atts, $content = null ) {

	extract(shortcode_atts( array('class' => ''), $atts)); 

	if($class == 'mid'){

		$output = '<div class="fourcol '. $class .'"><div class="padding">' . do_shortcode($content) . '</div></div>';

	}else{

		$output = '<div class="fourcol '. $class .'"><div class="padding">' . do_shortcode($content) . '</div></div>';

	}

	if($class == 'last'){

		$output .= '<div class="clear"></div>';

	}

	return $output;

}
add_shortcode('threecol', 'layout_grid_threecol');

function layout_grid_twocol( $atts, $content = null ) {

    extract(shortcode_atts( array('class' => ''), $atts)); 

	$output = '<div class="sixcol '. $class .'">' . do_shortcode($content) . '</div>';
	
	if($class == 'last'){

		$output .= '<div class="clear"></div>';

	}
	return $output;

}
add_shortcode('twocol', 'layout_grid_twocol');

function layout_grid_content( $atts, $content = null ) {

   extract(shortcode_atts( array('class' => ''), $atts)); 

   $output = '<div class="eightcol '.$class.'">' . do_shortcode($content) . '</div>';

   if($class == 'last'){

		$output .= '<div class="clear"></div>';

	}

	return $output;

}
add_shortcode('content', 'layout_grid_content');

function layout_grid_sidebar( $atts, $content = null ) {

	extract(shortcode_atts( array('class' => ''), $atts)); 

    $output = '<div class="fourcol '.$class.'">' . do_shortcode($content) . '</div>';

    if($class == 'last'){

		$output .= '<div class="clear"></div>';

	}

	return $output;

}
add_shortcode('sidebar', 'layout_grid_sidebar');

function layout_btn_green( $atts, $content = null ) {

	 extract(shortcode_atts( array('url' => ''), $atts)); 

   return '<a class="btn-green" href="'. $url .'">' . do_shortcode($content) . '</a>';

}
add_shortcode('btn_green', 'layout_btn_green');

function layout_padding( $atts, $content = null ) {

	 extract(shortcode_atts( array('class' => ''), $atts)); 

   return '<div class="padding ' . $class .'">' . do_shortcode($content) . '</div>';

}
add_shortcode('padding', 'layout_padding');

function vimeo_video( $atts, $content = null ) {

    extract(shortcode_atts( array('class' => '', 'width'=> '','height'=> '', 'url'=>'' ), $atts)); 

    $video = str_replace('http://vimeo.com/','', $url);
	
    $output = '<object width="'.$width.'" height="'.$height.'" id="vimeo_video">';
    $output .= '<param value="true" name="allowfullscreen">';    
    $output .= '<param value="always" name="allowscriptaccess">';
    $output .= '<param value="transparent" name="wmode">';    
    $output .= '<param value="http://vimeo.com/moogaloop.swf?clip_id='.$video.'&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1&amp;autoplay=0&amp;loop=0" name="movie">';    
    $output .= '<embed width="'.$width.'" height="'.$height.'" wmode="transparent" allowscriptaccess="always" allowfullscreen="true" type="application/x-shockwave-flash" src="http://vimeo.com/moogaloop.swf?clip_id='.$video.'&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1&amp;autoplay=0&amp;loop=0">';    
    $output .= '</object>';

	return $output;

}
add_shortcode('vimeo', 'vimeo_video');

function vimeo($url,$width,$height){

	$video = str_replace('http://vimeo.com/','', $url);

	$output = '<object width="'.$width.'" height="'.$height.'" id="vimeo_video">';
	$output .= '<param value="true" name="allowfullscreen">';    
	$output .= '<param value="always" name="allowscriptaccess">';
	$output .= '<param value="transparent" name="wmode">';    
	$output .= '<param value="http://vimeo.com/moogaloop.swf?clip_id='.$video.'&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1&amp;autoplay=0&amp;loop=0" name="movie">';    
	$output .= '<embed width="'.$width.'" height="'.$height.'" wmode="transparent" allowscriptaccess="always" allowfullscreen="true" type="application/x-shockwave-flash" src="http://vimeo.com/moogaloop.swf?clip_id='.$video.'&amp;server=vimeo.com&amp;show_title=1&amp;show_byline=0&amp;show_portrait=0&amp;color=ffffff&amp;fullscreen=1&amp;autoplay=0&amp;loop=0">';    
	$output .= '</object>';

	echo $output;

}

/**************DISABLE WORDPRESS WPAUTOOP AND TEXTURIZE**************/
function layout_formatter($content) {
	$new_content = '';

	/* Matches the contents and the open and closing tags */
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';

	/* Matches just the contents */
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';

	/* Divide content into pieces */
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	/* Loop over pieces */
	foreach ($pieces as $piece) {
		/* Look for presence of the shortcode */
		if (preg_match($pattern_contents, $piece, $matches)) {

			/* Append to content (no formatting) */
			$new_content .= $matches[1];
		} else {

			/* Format and append to content */
			$new_content .= wptexturize(wpautop($piece));
		}
	}

	return $new_content;
}
/************** CUSTOM EXCERPT *******************/
function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Remove the 2 main auto-formatters
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

// Before displaying for viewing, apply this function
add_filter('the_content', 'layout_formatter', 99);
add_filter('widget_text', 'layout_formatter', 99);

/******* GET FIRST IMAGE OF POST **************/
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = bloginfo('stylesheet_directory') . "/library/images/default.jpg";
  }
  return $first_img;
}

/******* Gravity Forms to Sugar **************/
add_action('gform_after_submission_4', 'post_to_sugar_full_form', 10, 2);
add_action('gform_after_submission_5', 'post_to_sugar_full_form', 10, 2);
add_action('gform_after_submission_6', 'post_to_sugar_full_form', 10, 2);
add_action('gform_after_submission_7', 'post_to_sugar_full_form', 10, 2);
function post_to_sugar_full_form($entry, $form) {
    
    $post_url = 'http://www.fieldtechnologies.com/wp-content/actions/gravity/contact-us.php';
    $body = array(
        'form_id'		=> $entry['form_id'], 
        'name'			=> $entry['1'], 
        'email'			=> $entry['2'],
        'phone'			=> $entry['5'],
        'company_name'  => $entry['4'],
        'company_role'	=> $entry['9'],
        'num_vehicles'	=> $entry['6'],
        'timeframe'		=> $entry['10'],
        'install_quote'	=> $entry['8'],
        'plan_interest'	=> $entry['12'],
        'phase'			=> $entry['13'],
        'live_demo'		=> $entry['14'],
        'message'		=> $entry['15']
        );
    
    $request = new WP_Http();
    $response = $request->post($post_url, array('body' => $body));
    
}

function post_to_sugar_short_form($entry, $form) {
    
    $post_url = 'http://www.fieldtechnologies.com/wp-content/actions/gravity/contact-us.php';
    $body = array(
        'form_id'		=> $entry['form_id'],
        'name'			=> $entry['1'], 
        'email'			=> $entry['2'],
        'phone'			=> $entry['3']
        );
    
    $request = new WP_Http();
    $response = $request->post($post_url, array('body' => $body));
    
}



/******* Gravity Forms to Sales Force, by Evan **************/
// See http://www.gravityhelp.com/documentation/page/Gform_field_input

add_filter("gform_field_input", "tracker", 10, 5);
function tracker($input, $field, $value, $lead_id, $form_id)
{
      //because this will fire for every form/field, only do it when it is the specific form and field
	if ($form_id == 12 && $field["id"] == 5)
	{
		$input = '<input type="hidden" name="lead_source" value="Web Lead">';
		
	}

	if ($form_id == 3 && $field["id"] == 4)
	{
		$input = '<input type="hidden" name="lead_source" value="Web Lead">';
		
	}

	if ($form_id == 4 && $field["id"] == 17)
	{
		$input = '<input type="hidden" name="lead_source" value="Web Lead">';
		
	}

       return $input;
}

// Gravity forms hide label field
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


// Gravity Forms anchor - disable auto scrolling of forms
// See https://gist.github.com/lekkerduidelijk/4994751
add_filter("gform_confirmation_anchor_23", create_function("","return false;")); // Standard Quote Form
add_filter("gform_confirmation_anchor_28", create_function("","return false;")); // Goose Quote Form
add_filter("gform_confirmation_anchor_34", create_function("","return false;")); // ROI Form
add_filter("gform_confirmation_anchor_41", create_function("","return false;")); // 2 months free quote form
add_filter("gform_confirmation_anchor_42", create_function("","return false;")); // 2 months free quote form
add_filter("gform_confirmation_anchor_47", create_function("","return false;")); // 2 months free quote form


//* Gravity Forms notification popup instead of the page redirect or AJAX notification
//* @link https://anythinggraphic.net/gravity-forms-notification-popup
/* Override the default Gravity Forms confirmation behavior, displaying it in a popup. Remember to style the divs.
----------------------------------------------------------------------------------------*/

/*
add_filter( 'gform_confirmation_23', 'ag_custom_confirmation', 10, 4 );
function ag_custom_confirmation( $confirmation, $form, $entry, $ajax ) {
	
	// add_action( 'wp_footer', 'ag_overlay');

	$popup = '<div id="custom-overlay"></div>';
	$popup .= '
		<script type="text/javascript">
			jQuery("body").addClass("message-sent");
			jQuery("#gform-notification a").click(function() {
				jQuery("#custom-overlay,#gform-notification").fadeOut("normal", function() {
					jQuery(this).remove();
				});
			});
		</script>
	';

	
	return $popup . '<div id="gform-notification">' . $confirmation . '<a class="close-button" href="#">OK</a></div>';
}
*/


/* Add script to remove the overlay and confirmation message once the button in the popup is clicked.
----------------------------------------------------------------------------------------*/
/*
function ag_overlay() {
	echo '<div id="custom-overlay"></div>';
	echo '
		<script type="text/javascript">
			jQuery("body").addClass("message-sent");
			jQuery("#gform-notification a").click(function() {
				jQuery("#custom-overlay,#gform-notification").fadeOut("normal", function() {
					jQuery(this).remove();
				});
			});
		</script>
	';
}
*/

/* Adding custom graphic to "Get a Quick Quote" submission notification
----------------------------------------------------------------------------------------*/

add_filter( 'gform_confirmation_23', 'ag_custom_confirmation', 10, 4 ); // Standard Quote Form
add_filter( 'gform_confirmation_28', 'ag_custom_confirmation', 10, 4 ); // Goose Quote Form
function ag_custom_confirmation( $confirmation, $form, $entry, $ajax ) {
	
	return $popup . '<div id="gform-notification-container-23"><img class="check-icon" src="' . get_stylesheet_directory_uri() . '/library/images/submit-check-icon.png">' . $confirmation . '</div>';
}





/* Setting custom number of posts-per-page for the Case Study archive page
 * https://docs.pluginize.com/article/109-changing-posts-per-page-for-a-post-type
----------------------------------------------------------------------------------------*/
function set_case_study_posts_per_page( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
       return;
    }

    if ( is_post_type_archive( 'case_study' ) ) {
       $query->set( 'posts_per_page', 12 );
    }
}
add_filter( 'pre_get_posts', 'set_case_study_posts_per_page' );



?>