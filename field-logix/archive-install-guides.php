<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package field-logix
 */

get_header();
?> 	

<main id="main">
    <section class="blog-section archive-section">
        <div class="container">
            <?php if ( have_posts() ) : ?>   
                <header class="page-header">
                    <?php
                    if ( is_category() ) {
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        printf( '<span class="category-count">%d posts</span>', $current_category->count );
                    } elseif ( is_author() ) {
                        echo '<h1 class="page-title">' . get_the_author() . '</h1>';
                        printf( '<span class="category-count">%d posts</span>', $wp_query->found_posts );
                    } elseif ( is_date() ) {
                        echo '<h1 class="page-title">' . get_the_date( 'F Y' ) . '</h1>';
                        printf( '<span class="category-count">%d posts</span>', $wp_query->found_posts );
                    }
                    ?>
                </header>
                <div class="all-blogs">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div <?php post_class('blog-box'); ?>>
                            <div class="blog-content">
                                <div class="single-blog-image">
                                    <?php if ( $img_src = find_img_src( $post ) ) : ?>
									<a href="<?php the_permalink(); ?>"><img class="content-image" src="<?php echo $img_src; ?>" /></a>
                                    <?php endif; ?>
                                </div>
                                <ul>
                                    <li><?php the_time( 'F jS, Y' ) ?></li>
                                    <li><?php the_author_posts_link() ?></li>
                                </ul>
								 <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="read">
                                <a href="<?php the_permalink(); ?>">Read Article</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <div class="page-navigation">
                <?php
                echo paginate_links( array(
                    'total' => $wp_query->max_num_pages,
                    'current' => max( 1, get_query_var( 'paged' ) ),
                    'prev_text' => '<img src="' . esc_url( get_template_directory_uri() ) . '/images/back-arrow-small.svg">',
                    'next_text' => '<img src="' . esc_url( get_template_directory_uri() ) . '/images/next-arrow-small.svg">',
                ) );
                ?>
            </div>

        </div>
    </section>
</main>

<?php get_template_part( 'template-parts/achivements-template' ); ?>

<?php get_template_part( 'template-parts/tour-section-template' ); ?>

<?php
get_footer();
