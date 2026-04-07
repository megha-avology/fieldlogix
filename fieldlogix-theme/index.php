<?php get_header(); ?>
	
	<div id="page-content">
		

		<div id="news-bar">
			<div class="wrap">
				<div id="blog-categories">
					<form action="<?php bloginfo('url'); ?>/" method="get">
						<?php
						$select = wp_dropdown_categories('show_option_none=Select Category&show_count=1&orderby=name&echo=0&selected=6');
						$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
						echo $select;
						?>
						<noscript><input type="submit" value="View" /></noscript>
					</form>
				</div>

				<div id="blog-search">
					<?php get_search_form(); ?>
				</div>

				<div class="clear"></div>
			</div>
		</div>
		<div id="news-title">
			<div class="wrap">
				<h1>FieldLogix Blog</h1>
			</div>
		</div>

		<div id="post-list" class="clearfix wrap">


		<?php 

			$count = 1;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // allow for pagination

                        $args = array (
                        'posts_per_page' => 12,
                        'paged' => $paged
                        );

                        query_posts($args);
			if (have_posts()) : while (have_posts()) : the_post(); 

		?>

				<div class="fourcol<?php if($count == 1) echo " first"; else if($count ==3){ echo " last"; }?>">

					<div class="padding">

                                            <a href="<?php the_permalink(); ?>">
                                                <div class="image" style="background-image: url('<?php echo catch_that_image() ?>');"></div>
                                                </a>
						
						<h2 class="subtitle"><a class="link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<p class="byline vcard"><?php
										printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')));
									?></p>

						<div class="excerpt">

							<?php the_excerpt(); ?>

						</div>

						

					</div> <!-- padding  -->

				</div>	<!-- col  -->

		
	<?php if($count == 3){ $count =  0; } $count++;  endwhile; else : ?>

			<?php endif; ?>
                                
                        <?php if (function_exists('bones_page_navi')) { ?>
                        <div class="clear"></div>
                                <?php bones_page_navi(); ?>
                        <?php } else { ?>

                                <nav class="wp-prev-next">
                                        <ul class="clearfix">
                                                <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
                                                <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
                                        </ul>
                                </nav>
                        <?php } ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->



<?php get_footer(); ?>