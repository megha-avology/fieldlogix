<?php
/* Template Name: custom-detail-page Template */
get_header();
?>

<main id="primary" class="site-main">
	  <section class="detail-section" id="blog-detail">
                <div class="container">
                    <div class="detail-banner">
                        <a class="back" href="<?php echo esc_url(home_url()); ?>/news"><img src="<?php bloginfo('template_url');?>/images/back-arrow.svg" alt="back">Back to Blogs</a>
                        <h1><?php the_title()?></h1>
                       <?php the_post_thumbnail();?>
                    </div>
                    <div class="detail-content">

                        <div class="press-user">
                            <div class="press-left-top">
                                <div class="press-person">
                            
								
                                    <div class="person-info">
                                        <h6><?php the_title()?>r</h6>
                                     
                                    </div>
                                </div>
                       
                            </div>
                           
                        </div>


                        <div class="press-user-details">
                            <?php the_content();?>
                            </div>
      
                        </div>
                    </div>
              
            </section>

           <?php get_template_part('template-parts/achivements-template'); ?>
            <?php get_template_part('template-parts/tour-section-template'); ?>
</main>

<?php
get_footer();
?>