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

<main id="main">
            <section class="hero " id="dash-camera">
                <div class="banner-content-sol">
                    <div class="container">
                        <div class="left-content-sol">
                            <p>Installation Guides</p>
                            <h1><?php the_title();?></h1>
                            <div class="banner-buttons-sol">
                                <a class="start-btn" href="#.">Get Started</a>

                            </div>
                        </div>
                    </div>
                    <div class="right-content">
                        <img src="<?php the_field('install_banner_single');?>" alt="#" class="desktop-ban-img">
                        <img src="<?php the_field('install_banner_mobile');?>" alt="#" class="mbl-ban-img">
                    </div>
                </div>
            </section>
            <section class="fleets-section guide-details" id="plug">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </section>
            
            <?php get_template_part('template-parts/tour-section-template'); ?>
	<?php get_template_part ( 'template-parts/achivements-template' ) ;?>
        </main>

<?php
get_footer();
?>
