<?php
/* Template Name: Submit Form Template */
get_header();?>

<section class="hero " id="routing-dispatching">
	<div class="banner-content-sol">
		<div class="container">
			<div class="left-content-sol">
				<p><?php the_field('banner_sub_heading');?></p>
				<h1><?php the_field('banner_heading');?></h1>
				<div class="banner-buttons-sol">
					<a class="start-btn" href="<?php the_field('banner_button_link');?>"><?php the_field('banner_button_text');?></a>

				</div>
			</div>
		</div>
		<div class="right-content">
			<img src="<?php the_field('banner_image');?>" alt="dashboard" class="desktop-ban-img">
			<img src="<?php the_field('banner_image_mobile');?>" alt="msg" class="mbl-ban-img">
		</div>
	</div>
</section>


<section class="fleets-section" id="resume-fleet">
                <div class="container">
                    <div class="border-form" id="partner-border-form">
                        <div class="about-fleet" id="partner-form">
                            <h3><?php the_field('submit_form_heading_left')?></h3>
                            <div class="fleet-para">
                                <p><?php the_field('submit_form_description_right')?></p>

                                <div class="contact-form" id="resume">

									<div class="apply-now-form">
										<?php echo do_shortcode( '[gravityform id="9" name="Careers - Submitted Resumes" title="false" description="false" ajax="false"]' ); ?>
										</div>
                                </div>

                                <div class="assist">
                                    <p>To assist us in evaluating prospective candidates, it is helpful if you provide
                                        us with a link to a video where you tell us more about yourself.
                                        In particular, we would like to hear:</p>
                                    <ul>
                                        <li>Why are you interested in working with us?</li>
                                        <li>Why are you great at what you do?</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>







<?php get_template_part('template-parts/achivements-template'); ?>
<?php get_template_part('template-parts/tour-section-template'); ?>

<?php get_footer();?>