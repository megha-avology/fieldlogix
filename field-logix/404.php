<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package field-logix
 */

get_header();
?>

	<main id="main" class="site-main">
		
		<section class="error-section">
                <div class="container">
                    <div class="error-content">
                        <img src="<?php bloginfo('template_url');?>/images/404.svg" alt="error">
                        <div class="error-inner">
                            <h3>We Can’t Find the Page You’re Looking for</h3>
                            <p>You may be lost, but you'll never lose track of your field resources with us!</p>

                            <p>The page you were looking for appears to have been moved, deleted, or does not exist.
                                Try selecting a link from our navigation above or searching our website.</p>
							<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search here" style="background: url(<?php bloginfo('template_url');?>/images/search-icon.svg);  background-repeat: no-repeat; background-position: center left 20px;">
							</form>
                            <a href="<?php echo esc_url(home_url()); ?>">Back to home</a>
                            <p>If you think this is an error, contact our support team at <a href="mailto:support@fieldlogix.com"><span>support@fieldlogix.com</span></a></p>
                        </div>
                    </div>
                </div>
            </section>

	</main><!-- #main -->

<?php
get_footer();
