<section class="achievements-section">
    <div class="container">
        <?php if ($achievements_heading = get_field('achievements_heading', 'options')) : ?>
            <p><?php echo esc_html($achievements_heading); ?></p>
        <?php endif; ?>
        <div class="achievements">
            <?php if (have_rows('achievements_repeater', 'options')): ?>
                <!-- <div style="width: 100%;"> -->
                <?php while (have_rows('achievements_repeater', 'options')) : the_row(); ?>
                    <!-- <div class="img-wrapper"> -->
                    <img height="150" src="<?php the_sub_field('achievements_icons', 'options'); ?>" alt="achievement">
                    <!-- </div> -->
                <?php endwhile; ?>
                <!-- </div> -->
            <?php endif; ?>
            <?php //if (have_rows('achievements_repeater', 'options')):
            //while (have_rows('achievements_repeater', 'options')) : the_row(); 
            ?>
            <!-- <img width="198" height="128" src="<?php //the_sub_field('achievements_icons', 'options'); 
                                                    ?>" alt="achievement" data-no-lazy="1"> -->
            <?php //endwhile;
            //endif; 
            ?>
        </div>
    </div>
</section>