<?php
/* Template Name: solutions-page Template */
get_header();?>
<main id="main">
    <section class="solution">
        <div class="hero">
            <div class="banner-content-sol">
                <div class="container">
                    <div class="left-content-sol">
                        <?php if ( $solutions_heading = get_field( 'solutions_heading' ) ) : ?>
                           <p><?php echo esc_html( $solutions_heading ); ?></p>
                        <?php endif; ?>
                        <?php if ( $solutions_subheading = get_field( 'solutions_subheading' ) ) : ?>
                            <h1><?php echo esc_html( $solutions_subheading ); ?></h1>
                        <?php endif; ?>
                        <div class="banner-buttons-sol">
                            <?php
                            $link = get_field( 'solutions_learn_btn' );
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
                    <?php if ($solutions_desktop_img = get_field('solutions_desktop_img')) :

                    // Convert URL to attachment ID
                    $desktop_img_id = attachment_url_to_postid($solutions_desktop_img);

                    // Default ALT
                    $desktop_alt = '';

                    if ($desktop_img_id) {
                        $desktop_alt = get_post_meta($desktop_img_id, '_wp_attachment_image_alt', true);

                        // fallback if ALT empty
                        if (!$desktop_alt) {
                            $desktop_alt = get_the_title($desktop_img_id);
                        }
                    }

                ?>
                    <img src="<?php echo esc_url($solutions_desktop_img); ?>" alt="<?php echo esc_attr($desktop_alt); ?>" class="desktop-ban-img">
                <?php endif; ?>

                <?php if ($solutions_mobile_img = get_field('solutions_mobile_img')) :

                    // Convert URL to attachment ID
                    $mobile_img_id = attachment_url_to_postid($solutions_mobile_img);

                    // Default ALT
                    $mobile_alt = '';

                    if ($mobile_img_id) {
                        $mobile_alt = get_post_meta($mobile_img_id, '_wp_attachment_image_alt', true);

                        // fallback if ALT empty
                        if (!$mobile_alt) {
                            $mobile_alt = get_the_title($mobile_img_id);
                        }
                    }

                ?>
                    <img src="<?php echo esc_url($solutions_mobile_img); ?>" alt="<?php echo esc_attr($mobile_alt); ?>" class="mbl-ban-img">
                <?php endif; ?>

                </div>
            </div>
        </div>

    </section>
    <?php if( have_rows('solutions_repeater') ):  while ( have_rows('solutions_repeater') ) : the_row(); ?>
    <section class="solution">
        <div class="gps-section">
            <div class="container">
                <div class="gps-head">
                        <?php if ( $_main_heading = get_sub_field( '_main_heading' ) ) : ?>
                            <h3><?php echo esc_html( $_main_heading ); ?></h3>
                        <?php endif; ?>
                    <div class="gps-para">
                            <?php if ( $main_tagline = get_sub_field( 'main_tagline' ) ) : ?>
                               <p> <?php echo $main_tagline; ?></p>
                            <?php endif; ?>
                        <div class="gps-btns">
                            <?php
                            $link = get_sub_field( 'learn_more_main_btn' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                ?>
                                <a class="gps-learn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                                <?php
                                $link = get_sub_field( 'more_benefits_btn' );
                                if ( $link ) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                   
                                    ?>
                                    <a class="gps-benefits" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="capabilities-container">
                    <div class="capability-slider-2">
                         <?php if( have_rows('inner_solutions_repeater') ):  
                            while ( have_rows('inner_solutions_repeater') ) : the_row(); 

                                // Get image URL from sub field
                                $icon_url1 = get_sub_field('solutions_icon'); 
                                $icon_alt1 = 'cap'; // default fallback

                                if ($icon_url1) {
                                    // Convert URL to attachment ID
                                    $icon_id1 = attachment_url_to_postid($icon_url1);

                                    if ($icon_id1) {
                                        // Get ALT text from media library
                                        $icon_alt1 = get_post_meta($icon_id1, '_wp_attachment_image_alt', true);

                                        // Fallback if ALT is empty
                                        if (!$icon_alt1) {
                                            $icon_alt1 = get_the_title($icon_id1);
                                        }
                                    }
                                }
                        ?>
                                <a href="<?php the_sub_field('solutions_icon_link'); ?>">
                                    <div class="cap-box">
                                        <img src="<?php echo esc_url($icon_url1); ?>" alt="<?php echo esc_attr($icon_alt1); ?>" />
                                        <h6><?php the_sub_field('solutions_title'); ?></h6>
                                    </div>
                                </a>
                        <?php 
                         endwhile; 
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>

<!--     <section class="solution">
        <div class="testimonial-section">
            <div class="container">
                <div class="test-head">
                    <h2>Hear Words From Our Clients</h2>
                    <p>We are very selective with our partnerships to ensure that we can properly support our
                        relationships.</p>
                </div>
                <div class="test-tab-area">
                    <div class="all-users">
                        <div class="user user-active">
                            <img src="<?php bloginfo('template_url');?>/images/client-1.svg" alt="user">
                            <div class="user-info">
                                <h6>Krystal Smith</h6>
                                <p>Interwest Construction</p>
                            </div>
                        </div>
                        <div class="user">
                            <img src="<?php bloginfo('template_url');?>/images/client-2.svg" alt="user">
                            <div class="user-info">
                                <h6>Sarah Rodriguez</h6>
                                <p>Swift Logistics</p>
                            </div>
                        </div>
                        <div class="user">
                            <img src="<?php bloginfo('template_url');?>/images/client-3.svg" alt="user">
                            <div class="user-info">
                                <h6>Emily White</h6>
                                <p>White's Deliveries</p>
                            </div>
                        </div>
                    </div>
                    <div class="all-comments">
                        <div class="comment-box">
                            <div class="comment-slides">
                                <div class="comment">
                                    <img src="<?php bloginfo('template_url');?>/images/stars.svg" alt="rating">
                                    <h5>FieldLogix has been a game-changer!</h5>
                                    <p>"We evaluated several systems and went with FieldLogix due to its ease of
                                        use, reporting features, and cost. FieldLogix revolutionized our fleet
                                        management, boosting efficiency with an intuitive interface and advanced
                                        features. Responsive support and streamlined routing led to quicker job
                                        completions and increased customer satisfaction. Highly recommend!"</p>
                                </div>
                            </div>
                            <div class="comment-slides">
                                <div class="comment">
                                    <img src="<?php bloginfo('template_url');?>/images/stars.svg" alt="rating">
                                    <h5>FieldLogix has been a game-changer!</h5>
                                    <p>"We evaluated several systems and went with FieldLogix due to its ease of
                                        use, reporting features, and cost. FieldLogix revolutionized our fleet
                                        management, boosting efficiency with an intuitive interface and advanced
                                        features. Responsive support and streamlined routing led to quicker job
                                        completions and increased customer satisfaction. Highly recommend!"</p>
                                </div>
                            </div>
                            <div class="comment-slides">
                                <div class="comment">
                                    <img src="<?php bloginfo('template_url');?>/images/stars.svg" alt="rating">
                                    <h5>FieldLogix has been a game-changer!</h5>
                                    <p>"We evaluated several systems and went with FieldLogix due to its ease of
                                        use, reporting features, and cost. FieldLogix revolutionized our fleet
                                        management, boosting efficiency with an intuitive interface and advanced
                                        features. Responsive support and streamlined routing led to quicker job
                                        completions and increased customer satisfaction. Highly recommend!"</p>
                                </div>
                            </div>
                        </div>
                        <div class="cap-slide-arrows">
                            <div class="prev-comment">
                                <img src="<?php bloginfo('template_url');?>/images/prev.svg" alt="prev">
                            </div>
                            <div class="next-comment">
                                <img src="<?php bloginfo('template_url');?>/images/next.svg" alt="next">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
	
	  <section class="testimonial-section">
                <div class="container">
                    <div class="test-head">
                        <?php if ( $hear_words_heading = get_field( 'hear_words_heading', 'options' ) ) : ?>
                            <h2><?php echo esc_html( $hear_words_heading ); ?></h2>
                        <?php endif; ?>
                        <?php if ( $hear_words_tagline = get_field( 'hear_words_tagline', 'options' ) ) : ?>
                            <p><?php echo esc_html( $hear_words_tagline ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="test-tab-area">
                        <div class="all-users">
    <?php if( have_rows('hear_words_repeater', 'options') ):  
        while ( have_rows('hear_words_repeater', 'options') ) : the_row(); 

            // Get image URL from sub field
            $user_image_url = get_sub_field('hear_words_img', 'options'); 
            $user_image_alt = 'user'; // default fallback

            if ($user_image_url) {
                // Convert URL to attachment ID
                $user_image_id = attachment_url_to_postid($user_image_url);

                if ($user_image_id) {
                    // Fetch ALT text from media library
                    $user_image_alt = get_post_meta($user_image_id, '_wp_attachment_image_alt', true);

                    // Fallback if ALT is empty
                    if (!$user_image_alt) {
                        $user_image_alt = get_the_title($user_image_id);
                    }
                }
            }
    ?>
            <div class="user user-active">
                <img src="<?php echo esc_url($user_image_url); ?>" alt="<?php echo esc_attr($user_image_alt); ?>" />
                <div class="user-info">
                    <h6><?php the_sub_field('hear_title', 'options'); ?></h6>
                    <p><?php the_sub_field('hear_heading', 'options'); ?></p>
                </div>
            </div>
    <?php 
        endwhile; 
    endif; ?>
</div>
                        <div class="all-comments">
                            <div class="comment-box">
                                <?php if( have_rows('hear_words_repeater', 'options') ):  while ( have_rows('hear_words_repeater', 'options') ) : the_row(); ?>
                                <div class="comment-slides">
                                    <div class="comment">
<!--                                         <img src="<?php the_sub_field('stars_img', 'options'); ?>" alt="rating"> -->
										<div class="rating-flex">
                                            <?php if ( have_rows( 'rating_repeater', 'options' ) ) : ?>
                                                <?php while ( have_rows( 'rating_repeater', 'options' ) ) : the_row(); ?>
                                                    
                                                    <?php 
                                                    $rating_image = get_sub_field( 'rating_image', 'options' ); // URL
                                                    
                                                    // Get attachment ID from URL
                                                    $attachment_id = attachment_url_to_postid( $rating_image );
                                                    
                                                    // Get alt text from media library
                                                    $rating_alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
                                                    ?>
                                                    
                                                    <img 
                                                        src="<?php echo esc_url( $rating_image ); ?>" 
                                                        alt="<?php echo esc_attr( $rating_alt ); ?>"
                                                    >
                                                    
                                                <?php endwhile; ?>
                                            <?php endif; ?>    
                                        </div>
                                            <h5><?php the_sub_field('review_heading', 'options'); ?></h5>
                                          <p><?php the_sub_field('review_tagline', 'options'); ?></p>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
         
                            </div>
                            <div class="cap-slide-arrows">
                                <div class="prev-comment">
                                    <img src="<?php bloginfo('template_url');?>/images/prev.svg" alt="prev">
                                </div>
                                <div class="next-comment">
                                    <img src="<?php bloginfo('template_url');?>/images/next.svg" alt="next">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
 
    <?php get_template_part('template-parts/tour-section-template'); ?>
</main>


<?php get_footer();?>