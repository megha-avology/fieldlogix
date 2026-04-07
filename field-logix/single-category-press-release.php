<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package field-logix
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    while (have_posts()) :
        the_post();
    ?>

    <section class="detail-section" id="blog-detail">
        <div class="container">
            <div class="detail-banner">
                <a class="back" href="<?php echo esc_url(home_url()); ?>/press-release"><img
                        src="<?php bloginfo('template_url');?>/images/back-blog.svg"
                        alt="back">Back to Press Release</a>
              		<div class="blog-upper">
                            <div class="blog-upper-box">
                               <div class="blog-upper-left">
                    <?php if ($img_src = find_img_src($post)) : 

                        // Convert URL to attachment ID
                        $img_id = attachment_url_to_postid($img_src);

                        // Default ALT
                        $img_alt = '';

                        if ($img_id) {
                            // Try to get ALT from media library
                            $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

                            // Fallback to image title if ALT empty
                            if (!$img_alt) {
                                $img_alt = get_the_title($img_id);
                            }
                        }

                        // Final fallback: post title
                        if (!$img_alt) {
                            $img_alt = get_the_title();
                        }
                    ?>
                        <img class="blog-detail-image" 
                            src="<?php echo esc_url($img_src); ?>" 
                            alt="<?php echo esc_attr($img_alt); ?>" />
                    <?php endif; ?>
                </div>
                                <div class="blog-upper-right">
                                    <div class="blog-content">
                                         <div class="person-info">
                                <p><?php the_author_posts_link(); ?></p>
                                <p><?php the_time('F jS, Y'); ?></p>
                            </div>
                                        <h1><?php the_title(); ?></h1>
                                      
                                    </div>
									
                                
                                </div>
                            </div>
                        </div>
            </div>
            <div class="detail-content">

                <div class="press-user">
                    <div class="press-left-top">
<!--                         <div class="press-person">
							<?php
								$author_id = get_the_author_meta('ID');
								$author_name = get_the_author_meta('display_name', $author_id);
								$author_avatar = get_avatar($author_id, 80);
								echo '<div class="author-info">';
								echo '<div class="author-avatar">' . $author_avatar . '</div>';
								echo '</div>';
							?>
                            <div class="person-info">
                                <h6><?php the_author_posts_link(); ?></h6>
                                <p><?php the_time('F jS, Y'); ?></p>
                            </div>
                        </div> -->
                        <div class="press-share">
                            <span>Share:</span>
                            <div class="press-social">
								<a href="#" onclick="shareOnFacebook()">
									<div class="press-social-icon">
										<img src="<?php bloginfo('template_url');?>/images/facebook-svg.svg" alt="facebook">
									</div>
								</a>
								<a href="#" onclick="shareOnInstagram()">
									<div class="press-social-icon">
										<img src="<?php bloginfo('template_url');?>/images/instagram-svg.svg" alt="instagram">
									</div>
								</a>
								<a href="#" onclick="shareOnTwitter()">
									<div class="press-social-icon">
										<img src="<?php bloginfo('template_url');?>/images/twitter-svg.svg" alt="twitter">
									</div>
								</a>
								<a href="#" onclick="shareOnLinkedin()">
									<div class="press-social-icon">
										<img src="<?php bloginfo('template_url');?>/images/linkedin-svg.svg" alt="linkedon">
									</div>
								</a>
                            </div>
							<script>
								function shareOnFacebook() {
									window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL), 'facebook-share-dialog', 'width=626,height=436');
									return false;
								}

								function shareOnTwitter() {
									window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(document.URL) + '&text=' + encodeURIComponent(document.title), 'twitter-share', 'width=550,height=350');
									return false;
								}

								function shareOnLinkedIn() {
									window.open('https://www.linkedin.com/shareArticle?url=' + encodeURIComponent(document.URL) + '&title=' + encodeURIComponent(document.title), 'linkedin-share', 'width=550,height=350');
									return false;
								}

								function shareOnInstagram() {
									// Replace 'your_post_url' with the actual URL of your WordPress post
									var postUrl = '<?php the_permalink();?>';

									// Open Instagram in a new tab or window
									window.open('https://www.instagram.com/?url=' + encodeURIComponent(postUrl), '_blank');
								}
							</script>
                        </div>
                    </div>

					<?php if (has_category()) { ?>
                    <div class="press-categories">
                        <h6>Categories</h6>
						<div class="post-detail-categories">
							<?php
								echo get_the_category_list(', ');
							?>
						</div>
                    </div>
                    <?php } ?>







                </div>

                <div class="press-user-details">
                    <?php the_content(); ?>

                    <div class="detail-routes">
                        <?php
                        the_post_navigation(
                            array(
                                'prev_text' => '<div class="router"><div class="prev-route"><img src="' . esc_url(get_bloginfo('template_url')) . '/images/back-arrow-long.svg" alt="Previous Page"></div><h6>%title</h6></div>',
                                'next_text' => '<div class="router"><h6>%title</h6><div class="prev-route"><img src="' . esc_url(get_bloginfo('template_url')) . '/images/next-arrow-long.svg" alt="Next Page"></div></div>',
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    endwhile;
    ?>
	<?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part('template-parts/achivements-template'); ?>

</main>

<?php
get_footer();
?>
