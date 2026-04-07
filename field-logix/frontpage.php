<?php
/* Template Name: home-page Template */
get_header(); ?>
<main id="main">
    <section class="banner-section">
        <div class="banner-content">
            <div class="container">
                <div class="left-content">
                    <?php if ($banner_subheading = get_field('banner_subheading')) : ?>
                        <p> <?php echo esc_html($banner_subheading); ?></p>
                    <?php endif; ?>
                    <?php if ($banner_heading = get_field('banner_heading')) : ?>
                        <h1><?php echo esc_html($banner_heading); ?></h1>
                    <?php endif; ?>
                    <div class="banner-buttons">
                        <?php
                        $link = get_field('get_btn_home');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                        ?>
                            <a class="start-btn" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                        <?php
                        $link = get_field('tour_btn_home');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                        ?>
                            <a class="tour-btn" href="<?php echo esc_url($link_url); ?>"><img src="<?php bloginfo('template_url'); ?>/images/play.svg" alt="tour"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="right-content">
                <?php if ($site_logo = get_field('banner_desktop')) : 
                    $attachment_id = attachment_url_to_postid($site_logo);
                        $alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
                    ?>
                    <img src="<?php the_field('banner_desktop'); ?>" alt="<?php echo $alt_text; ?>" class="desktop-ban-img">
                <?php endif; ?>


                <!-- <?php if ($site_logo = get_field('banner_mobile')) : ?>
                    <img height="200" src="<?php // the_field('banner_mobile'); ?>" alt="img" class="mbl-ban-img">
                <?php endif; ?> -->                 
 
                <?php
                    $image_url = get_field('banner_mobile');
                    if ($image_url) {
                        // Convert image URL to attachment ID
                        $attachment_id = attachment_url_to_postid($image_url);
                        // Get alt text
                        $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>
                        <img  height="200" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>" class="mbl-ban-img">
                <?php } ?>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/achivements-template'); ?>
    <section class="solution-section">
        <div class="container">
            <?php if ($solution_heading = get_field('solution_heading')) : ?>
                <h2><?php echo esc_html($solution_heading); ?></h2>
            <?php endif; ?>
            <div class="solution-portion-1">
                <div class="sol-box-1">
                    <!-- <?php if ($fleet_tracking_img = get_field('fleet_tracking_img')) : ?>
                        <img src="<?php // the_field('fleet_tracking_img'); ?>" alt="solution">
                    <?php endif; ?> -->

                    <?php
                        $image_url = get_field('fleet_tracking_img');
                        if ($image_url) {
                            // Convert image URL to attachment ID
                            $attachment_id = attachment_url_to_postid($image_url);
                            // Get alt text
                            $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>">
                        
                    <?php } ?>


                    <?php if ($fleet_tracking_heading = get_field('fleet_tracking_heading')) : ?>
                        <h3><?php echo esc_html($fleet_tracking_heading); ?></h3>
                    <?php endif; ?>
                    <?php if ($fleet_tracking_tagline = get_field('fleet_tracking_tagline')) : ?>
                        <p><?php echo $fleet_tracking_tagline; ?></p>
                    <?php endif; ?>
                <div class="sol-1-props">
                    <?php if (have_rows('fleet_bullets')): while (have_rows('fleet_bullets')) : the_row(); ?>
                        <div class="props-box-1">
                            <img src="<?php the_sub_field('fleet_icons'); ?>" alt="<?php the_sub_field('fleet_title'); ?>">
                            <h6><?php the_sub_field('fleet_title'); ?></h6>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
                    <?php
                    $link = get_field('learn_more_btn');
                    if ($link):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
                        <a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
                <div class="sol-box-2">

                    <!-- <?php if ($wireless_dash_img = get_field('wireless_dash_img')) : ?>
                        <img src="<?php the_field('wireless_dash_img'); ?>" alt="solution">
                    <?php endif; ?> -->

                        <?php
                            $image_url = get_field('wireless_dash_img');
                            if ($image_url) {
                                // Convert image URL to attachment ID
                                $attachment_id = attachment_url_to_postid($image_url);
                                // Get alt text
                                $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>">
                            
                        <?php } ?>


                    <div class="sol-box-2-content">
                        <?php if ($wireless_dash_heading = get_field('wireless_dash_heading')) : ?>
                            <h3><?php echo esc_html($wireless_dash_heading); ?></h3>
                        <?php endif; ?>
                        <?php if ($wireless_dash_tagline = get_field('wireless_dash_tagline')) : ?>
                            <p><?php echo $wireless_dash_tagline; ?></p>
                        <?php endif; ?>

                     <div class="sol-1-props">
    <?php if (have_rows('wireless_dash_repeater')): while (have_rows('wireless_dash_repeater')) : the_row(); 
        // Use the correct title field for alt
        $title = get_sub_field('wireless_dash_title'); 
    ?>
        <div class="props-box-1">
            <img src="<?php the_sub_field('wireless_dash_icon'); ?>" alt="<?php echo esc_attr($title); ?>">
            <h6><?php echo esc_html($title); ?></h6>
        </div>
    <?php endwhile; endif; ?>
</div>
                        <?php
                        $link = get_field('wireless_learn_btn');
                        if ($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];

                        ?>
                            <a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="solution-portion-2">
                <div class="sol-box-3">
                    <div class="sol-box-2-content">
                        <?php if ($routing_heading = get_field('routing_heading')) : ?>
                            <h3><?php echo esc_html($routing_heading); ?></h3>
                        <?php endif; ?>
                        <?php if ($routing_tagline = get_field('routing_tagline')) : ?>
                            <p><?php echo $routing_tagline; ?></p>
                        <?php endif; ?>

                        <div class="sol-1-props">
                            <?php if (have_rows('routing_repeater')):  while (have_rows('routing_repeater')) : the_row(); ?>
                                    <div class="props-box-1">
                                        <img src="<?php the_sub_field('routing_icon'); ?>" alt="prop">
                                        <h6><?php the_sub_field('routing_title'); ?></h6>
                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </div>
                        <?php
                        $link = get_field('routing_learn_more');
                        if ($link) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];

                        ?>
                            <a class="button" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>
                    </div>
                    <?php //$routing_img = get_field('routing_img'); ?>
                        <!-- src="<?php //bloginfo('template_url'); ?>/images/sol-3.svg" -->
                    <!-- <img src="<?php //echo $routing_img; ?>" alt="solution" class="sol-3-img"> -->
                             <?php 
                            $routing_img = get_field('routing_img'); 

                            if ($routing_img) : 
                                // URL se attachment ID nikaalo
                                $attachment_id = attachment_url_to_postid($routing_img);

                                // Media ALT text fetch karo
                                $alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);

                                // Fallback in case ALT nahi ho
                                if (!$alt_text) {
                                    $alt_text = get_the_title();
                                }
                            ?>
                                <img src="<?php echo esc_url($routing_img); ?>" 
                                    alt="<?php echo esc_attr($alt_text); ?>" 
                                    class="sol-3-img">
                            <?php endif; ?>
                </div>
                <div class="sol-box-4">
                    <?php if ($mobile_heading = get_field('mobile_heading')) : ?>
                        <h3><?php echo esc_html($mobile_heading); ?></h3>
                    <?php endif; ?>
                    <?php if ($mobile_tagline = get_field('mobile_tagline')) : ?>
                        <p><?php echo $mobile_tagline; ?></p>
                    <?php endif; ?>
                    <div class="sol-1-props">
                        <?php if (have_rows('mobile_repeater')):  while (have_rows('mobile_repeater')) : the_row(); ?>
                                <div class="props-box-1">
                                    <img src="<?php the_sub_field('mobile_icon'); ?>" alt="prop">
                                    <h6><?php the_sub_field('mobile_title'); ?></h6>
                                </div>
                        <?php endwhile;
                        endif; ?>


                    </div>
                    <?php
                    $link = get_field('mobile_learn_more');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                    ?>
                        <a class="button" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                    <?php 
$mobile_img = get_field('mobile_img'); 

if ($mobile_img) : 
    // URL se attachment ID nikaalo
    $attachment_id1 = attachment_url_to_postid($mobile_img);

    // Media ALT text fetch karo
    $alt_text1 = get_post_meta($attachment_id1, '_wp_attachment_image_alt', true);

    // Fallback in case ALT nahi ho
    if (!$alt_text1 && $attachment_id1) {
        $alt_text1 = get_the_title($attachment_id1);
    }
?>
    <img src="<?php echo esc_url($mobile_img); ?>" 
         alt="<?php echo esc_attr($alt_text1); ?>" />
<?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="choices-section">
        <div class="container">
            <div class="choice-content">
                <div class="top-choice">
                    <?php if ($top_choice_heading = get_field('top_choice_heading')) : ?>
                        <h2><?php echo esc_html($top_choice_heading); ?></h2>
                    <?php endif; ?>
                    <?php if ($top_choice_tagline = get_field('top_choice_tagline')) : ?>
                        <p><?php echo $top_choice_tagline; ?></p>
                    <?php endif; ?>
                    <?php
                    $link = get_field('top_choice_btn');
                    if ($link) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];

                    ?>
                        <a class="button" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>

                </div>
                <div class="choice-boxes">
                    <div class="first-2-box">
                        <div class="choice-box">
                            <h2>23</h2>
                            <p>Years In Business</p>
                        </div>
                        <div class="choice-box end">
                            <h2>12+</h2>
                            <p>Awards Recieved</p>
                        </div>
                    </div>
                    <div class="last-2-box">
                        <div class="choice-box">
                            <h2>97%</h2>
                            <p>Customer Satisfaction</p>
                        </div>
                        <div class="choice-box">
                            <h2>A+</h2>
                            <p>BBB Rating</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="capabilitites-section">
        <div class="container">
            <?php if ($our_capabilities_heading = get_field('our_capabilities_heading')) : ?>
                <h2><?php echo esc_html($our_capabilities_heading); ?></h2>
            <?php endif; ?>

            <?php if ($our_capabilities_tagline = get_field('our_capabilities_tagline')) : ?>
                <?php echo $our_capabilities_tagline; ?>
            <?php endif; ?>
            <?php
            $link = get_field('capabilities_more_btn');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
            ?>
                <a class="button-new" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
        </div>
        <div class="capabilities-container">
            <div class="capability-slider">
                <?php if (have_rows('our_capabilities_repeater')):  
    while (have_rows('our_capabilities_repeater')) : the_row(); 

        // Get image URL from sub field
        $cap_image_url = get_sub_field('our_capabilities_icon'); 
        $cap_image_alt = 'cap'; // default fallback

        if ($cap_image_url) {
            // Convert URL to attachment ID
            $cap_image_id = attachment_url_to_postid($cap_image_url);

            if ($cap_image_id) {
                // Fetch ALT text
                $cap_image_alt = get_post_meta($cap_image_id, '_wp_attachment_image_alt', true);

                // Fallback if ALT is empty
                if (!$cap_image_alt) {
                    $cap_image_alt = get_the_title($cap_image_id);
                }
            }
        }
?>
        <a href="<?php the_sub_field('our_capabilities_link'); ?>">
            <div class="cap-box">
                <img src="<?php echo esc_url($cap_image_url); ?>" alt="<?php echo esc_attr($cap_image_alt); ?>" />
                <h6><?php the_sub_field('our_capabilities_title'); ?></h6>
            </div>
        </a>
<?php 
    endwhile;
endif; ?>

            </div>
            <div class="cap-slide-arrows">
                <div class="prev">
                    <img src="<?php bloginfo('template_url'); ?>/images/prev.svg" alt="prev">
                </div>
                <div class="next">
                    <img src="<?php bloginfo('template_url'); ?>/images/next.svg" alt="next">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="container">
            <div class="test-head">
                <?php if ($hear_words_heading = get_field('hear_words_heading', 'options')) : ?>
                    <h2><?php echo esc_html($hear_words_heading); ?></h2>
                <?php endif; ?>
                <?php if ($hear_words_tagline = get_field('hear_words_tagline', 'options')) : ?>
                    <p><?php echo esc_html($hear_words_tagline); ?></p>
                <?php endif; ?>
            </div>
            <div class="test-tab-area">
                <div class="all-users">
                    <?php if (have_rows('hear_words_repeater', 'options')):  while (have_rows('hear_words_repeater', 'options')) : the_row(); ?>
                            <div class="user user-active">
                                <img src="<?php the_sub_field('hear_words_img', 'options'); ?>" alt="user">
                                <div class="user-info">
                                    <h6><?php the_sub_field('hear_title', 'options'); ?></h6>
                                    <p><?php the_sub_field('hear_heading', 'options'); ?></p>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
                <div class="all-comments">
                    <div class="comment-box">
                        <?php if (have_rows('hear_words_repeater', 'options')):  while (have_rows('hear_words_repeater', 'options')) : the_row(); ?>
                                <div class="comment-slides">
                                    <div class="comment">
                                        <!--                                         <img src="<?php the_sub_field('stars_img', 'options'); ?>" alt="rating"> -->
                                        <div class="rating-flex">

                                            <?php if (have_rows('rating_repeater', 'options')) : ?>
                                                <?php while (have_rows('rating_repeater', 'options')) :
                                                    the_row(); ?>


                                                    <img src="<?php echo esc_url(get_sub_field('rating_image', 'options')); ?> " alt="rating">
                                                <?php endwhile; ?>
                                            <?php endif; ?>

                                        </div>
                                        <h5><?php the_sub_field('review_heading', 'options'); ?></h5>
                                        <p><?php the_sub_field('review_tagline', 'options'); ?></p>
                                    </div>
                                </div>
                        <?php endwhile;
                        endif; ?>

                    </div>
                    <div class="cap-slide-arrows">
                        <div class="prev-comment">
                            <img src="<?php bloginfo('template_url'); ?>/images/prev.svg" alt="prev">
                        </div>
                        <div class="next-comment">
                            <img src="<?php bloginfo('template_url'); ?>/images/next.svg" alt="next">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/tour-section-template'); ?>
    <?php get_template_part('template-parts/partner-template'); ?>
    <section class="blog-section">
        <div class="container">
            <div class="blog-head">
                <h2>Latest updates</h2>
                <!--                         <div class="cap-slide-arrows">
                            <div class="prev-blog">
                                <img src="<?php bloginfo('template_url'); ?>/images/prev.svg" alt="prev">
                            </div>
                            <div class="next-blog">
                                <img src="<?php bloginfo('template_url'); ?>/images/next.svg" alt="next">
                            </div>
                        </div> -->
            </div>
            <div class="blog-slider">
                <?php

                $custom_query_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
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
    <?php if ($img_src = find_img_src($post)) : 

        // Default ALT
        $img_alt = 'post image';

        // Convert URL to attachment ID
        $img_id = attachment_url_to_postid($img_src);

        if ($img_id) {
            // Fetch ALT text
            $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

            // Fallback if ALT empty
            if (!$img_alt) {
                $img_alt = get_the_title($img_id);
            }
        }

    ?>
        <a href="<?php the_permalink(); ?>">
            <img class="content-image" src="<?php echo esc_url($img_src); ?>" alt="<?php echo esc_attr($img_alt); ?>" />
        </a>
    <?php endif; ?>
</div>
                                <ul>
                                    <li><?php the_time('F jS, Y') ?></li>
                                    <li><?php the_author_posts_link() ?></li>
                                </ul>
                                <a href="<?php the_permalink(); ?>">
                                    <h5><?php the_title(); ?></h5>
                                </a>
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
                    wp_reset_postdata(); 

                endif;
                ?>




            </div>

            <div class="cap-slide-arrows blog-slide-arrows">
                <div class="prev-blog">
                    <img src="<?php bloginfo('template_url'); ?>/images/prev.svg" alt="prev">
                </div>
                <div class="next-blog">
                    <img src="<?php bloginfo('template_url'); ?>/images/next.svg" alt="next">
                </div>
            </div>

            <a href="<?php echo esc_url(home_url()); ?>/news" class="article">Read more articles</a>
        </div>
    </section>
</main>


<?php get_footer(); ?>