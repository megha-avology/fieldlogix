<?php
/* Template Name: Customer Support Template */
get_header();?>
<script> window.CHAT_WIDGET_CONFIG = { primaryColor: '#FF5733', logo: 'https://calstudio.com/img/logo33.png', welcomeMessage: 'Welcome to our support chat. Ask me anything and I hope to provide you with quick and accurate answers.', botId: '69c364d3c5ef2878d8633183', botName: 'GooseBot', textColor: '#ffffff', containerWidth: '380px' }; </script> <script src="https://calstudio.com/js/chat-widget.js" defer></script>


<section class="hero" id="benefits">
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
			<?php 
			$desktop_img = get_field('banner_image');
			if ($desktop_img) :
				$desktop_id  = attachment_url_to_postid($desktop_img);
				$desktop_alt = '';
				if ($desktop_id) {
					$desktop_alt = get_post_meta($desktop_id, '_wp_attachment_image_alt', true);

					if (!$desktop_alt) {
						$desktop_alt = get_the_title($desktop_id);
					}
				}
			?>
				<img src="<?php echo esc_url($desktop_img); ?>" 
					alt="<?php echo esc_attr($desktop_alt); ?>" 
					class="desktop-ban-img">
			<?php endif; ?>
			<?php 
			$mobile_img = get_field('banner_image_mobile');
			if ($mobile_img) :
				$mobile_id  = attachment_url_to_postid($mobile_img);
				$mobile_alt = '';
				if ($mobile_id) {
					$mobile_alt = get_post_meta($mobile_id, '_wp_attachment_image_alt', true);
					if (!$mobile_alt) {
						$mobile_alt = get_the_title($mobile_id);
					}
				}
			?>
				<img src="<?php echo esc_url($mobile_img); ?>" 
					alt="<?php echo esc_attr($mobile_alt); ?>" 
					class="mbl-ban-img">
			<?php endif; ?>
		</div>
	</div>
</section>


<section class="fleets-section" id="support-fleet">
	<div class="container">
		<div class="about-fleet">
			<h3>Contact Us</h3>
		</div>
		<div class="border">
			<div class="box-area">
				<div class="fleet-boxes">
					<?php if(have_rows('customer_support')) : 
						while(have_rows('customer_support')) : the_row();

							$icon_url_new = get_sub_field('customer_support_icon');
							$heading_new  = get_sub_field('customer_support_heading');

							$icon_alt_tag = '';

							if ($icon_url_new) {
								$icon_id_new = attachment_url_to_postid($icon_url_new);

								if ($icon_id_new) {
									$icon_alt_tag = get_post_meta($icon_id_new, '_wp_attachment_image_alt', true);
									if (!$icon_alt_tag) {
										$icon_alt_tag = get_the_title($icon_id_new);
									}
								}
								if (!$icon_alt_tag && $heading_new) {
									$icon_alt_tag = $heading_new;
								}
							}
					?>
					<div class="single-fleet-box" style="background-color: <?php the_sub_field('customer_support_bg'); ?>;">

						<?php if ($icon_url_new): ?>
							<img src="<?php echo esc_url($icon_url_new); ?>" 
								alt="<?php echo esc_attr($icon_alt_tag); ?>">
						<?php endif; ?>

						<h3><?php echo esc_html($heading_new); ?></h3>

						<?php $mail = get_sub_field('customer_support_mail'); ?>
						<?php if ($mail): ?>
							<a href="mailto:<?php echo esc_attr($mail); ?>">
								<span>
									<img src="<?php bloginfo('template_url'); ?>/images/sp-mail.svg" alt="Email Icon">
									<?php echo esc_html($mail); ?>
								</span>
							</a>
						<?php endif; ?>

						<div class="single-inner">
							<?php the_sub_field('customer_support_timing'); ?>
						</div>
						<div class="single-inner">
							<?php the_sub_field('customer_support_after_hour'); ?>
						</div>
					</div>
						<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
		<div class="about-fleet" id="support-about">
			<h3><?php the_field('support_process_heading');?></h3>
			<div class="fleet-para">
				<?php the_field('support_process_description');?>
			</div>
		</div>

		<div class="about-fleet" id="support-about-2">
			<h3><?php the_field('heading');?></h3>
		</div>
		<div class="border">
			<div class="box-area">
				<div class="fleet-boxes" id="installation-fleet">

					<?php if(have_rows('installation_repeater')) : 
						while(have_rows('installation_repeater')) : the_row();

							$icon_url1  = get_sub_field('installation_icon');
							$heading1   = get_sub_field('installation_heading');
							$file_link = get_sub_field('installation_link');
							$link_type = get_sub_field('installation_link_type');

							$icon_alt_main = '';

							if ($icon_url1) {
								$icon_id_main = attachment_url_to_postid($icon_url1);

								if ($icon_id) {
									// Media Library ALT
									$icon_alt_main = get_post_meta($icon_id, '_wp_attachment_image_alt', true);

									// Fallback to image title
									if (!$icon_alt_main) {
										$icon_alt_main = get_the_title($icon_id_main);
									}
								}

								// Final fallback to heading
								if (!$icon_alt_main && $heading1) {
									$icon_alt_main = $heading1;
								}
							}

							// Download attribute
							$download_attr = ($link_type === "Download") ? 'download' : '';
					?>
					<div class="single-fleet-box">

						<?php if ($icon_url1 && $file_link): ?>
							<a href="<?php echo esc_url($file_link); ?>" <?php echo $download_attr; ?> target="_blank" id="link-img">
								<img src="<?php echo esc_url($icon_url1); ?>" 
									alt="<?php echo esc_attr($icon_alt_main); ?>">
							</a>
						<?php endif; ?>

						<?php if ($heading1 && $file_link): ?>
							<a class="not-uder" href="<?php echo esc_url($file_link); ?>" <?php echo $download_attr; ?> target="_blank" id="link-img">
								<h6><?php echo esc_html($heading1); ?></h6>
							</a>
						<?php endif; ?>

						<?php if ($file_link): ?>
							<a href="<?php echo esc_url($file_link); ?>" <?php echo $download_attr; ?> target="_blank">See guide</a>
						<?php endif; ?>

					</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>

		<div class="about-fleet" id="support-about-3">
			<h3><?php the_field('user_guides_heading');?></h3>
		</div>
		<div class="border">
			<div class="box-area">
				<div class="fleet-boxes" id="user-guide-fleet">
				<?php if(have_rows('user_guides')) : 
					while(have_rows('user_guides')) : the_row();
						$icon_url_link = get_sub_field('user_guide_icon');
						$heading_img_main  = get_sub_field('user_guide_heading');
						$file_link_conn = get_sub_field('user_guide_file_link');
						$icon_alt_img_tag = '';
						if ($icon_url_link) {
							$icon_id_main_1 = attachment_url_to_postid($icon_url_link);
							if ($icon_id_main_1) {

								$icon_alt_img_tag = get_post_meta($icon_id_main_1, '_wp_attachment_image_alt', true);

								if (!$icon_alt_img_tag) {
									$icon_alt_img_tag = get_the_title($icon_id_main_1);
								}
							}
							if (!$icon_alt_img_tag && $heading_img_main) {
								$icon_alt_img_tag = $heading_img_main;
							}
						}
				?>
					<div class="single-fleet-box">

						<?php if ($icon_url_link && $file_link_conn): ?>
							<a id="link-img" href="<?php echo esc_url($file_link_conn); ?>" download target="_blank">
								<img src="<?php echo esc_url($icon_url_link); ?>" 
									alt="<?php echo esc_attr($icon_alt_img_tag); ?>">
							</a>
						<?php endif; ?>

						<?php if ($heading_img_main && $file_link_conn): ?>
							<a class="not-uder" id="link-img" href="<?php echo esc_url($file_link_conn); ?>" download target="_blank">
								<h6><?php echo esc_html($heading_img_main); ?></h6>
							</a>
						<?php endif; ?>

						<?php if ($file_link_conn): ?>
							<a href="<?php echo esc_url($file_link_conn); ?>" download target="_blank">See guide</a>
						<?php endif; ?>

					</div>
				<?php endwhile; endif; ?>
			</div>
			</div>
		</div>

		<div class="about-fleet" id="support-about-3">
			<h3><?php the_field('driver_tools_heading');?></h3>
		</div>
		<div class="border">
			<div class="box-area">
				<div class="fleet-boxes" id="installation-fleet">
					<?php if(have_rows('driver_tools')) : 
						while(have_rows('driver_tools')) : the_row();

							$icon_url_new_con  = get_sub_field('driver_tools_icon');
							$heading_head_new   = get_sub_field('driver_tool_heading');
							$file_link_3 = get_sub_field('driver_tool_file_link');
							$link_type_main = get_sub_field('driver_tool_link_type');
							$link_name_4 = get_sub_field('driver_tool_link_name');

							$icon_alt_5 = '';

							if ($icon_url_new_con) {
								$icon_id_m = attachment_url_to_postid($icon_url_new_con);

								if ($icon_id_m) {
									$icon_alt_5 = get_post_meta($icon_id_m, '_wp_attachment_image_alt', true);
									if (!$icon_alt_5) {
										$icon_alt_5 = get_the_title($icon_id_m);
									}
								}
								if (!$icon_alt_5 && $heading_head_new) {
									$icon_alt_5 = $heading_head_new;
								}
							}

							$download_attr1 = ($link_type_main === "Download") ? 'download' : '';
					?>
						<div class="single-fleet-box">

							<?php if ($icon_url_new_con && $file_link_3): ?>
								<a id="link-img" href="<?php echo esc_url($file_link_3); ?>" <?php echo $download_attr1; ?> target="_blank">
									<img src="<?php echo esc_url($icon_url_new_con); ?>" 
										alt="<?php echo esc_attr($icon_alt_5); ?>">
								</a>
							<?php endif; ?>

							<?php if ($heading_head_new && $file_link_3): ?>
								<a class="not-uder" id="link-img" href="<?php echo esc_url($file_link_3); ?>" <?php echo $download_attr1; ?> target="_blank">
									<h6><?php echo esc_html($heading_head_new); ?></h6>
								</a>
							<?php endif; ?>

							<?php if ($file_link_3 && $link_name_4): ?>
								<a href="<?php echo esc_url($file_link_3); ?>" <?php echo $download_attr1; ?> target="_blank">
									<?php echo esc_html($link_name_4); ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="about-fleet" id="support-about-4">
			<h3><?php the_field('support_warranties_heading');?></h3>
		</div>

		<div class="border">
			<div class="box-area">
				<div class="fleet-boxes" id="warranty-fleet">

				<?php if(have_rows('support_warranties_repeater')) : 
					while(have_rows('support_warranties_repeater')) : the_row();

						// Unique variable names for this repeater
						$warranty_icon_url  = get_sub_field('support_warranties_icon');
						$warranty_heading   = get_sub_field('support_warranty_heading');
						$warranty_link      = get_sub_field('support_warranty_link');

						$warranty_icon_alt  = '';
						$warranty_icon_id   = '';

						if ($warranty_icon_url) {
							$warranty_icon_id = attachment_url_to_postid($warranty_icon_url);

							if ($warranty_icon_id) {
								// Media Library ALT
								$warranty_icon_alt = get_post_meta($warranty_icon_id, '_wp_attachment_image_alt', true);

								// Fallback to image title
								if (!$warranty_icon_alt) {
									$warranty_icon_alt = get_the_title($warranty_icon_id);
								}
							}

							// Final fallback to heading
							if (!$warranty_icon_alt && $warranty_heading) {
								$warranty_icon_alt = $warranty_heading;
							}
						}
				?>
					<div class="single-fleet-box">

						<?php if ($warranty_icon_url && $warranty_link): ?>
							<a href="<?php echo esc_url($warranty_link); ?>">
								<img src="<?php echo esc_url($warranty_icon_url); ?>" 
									alt="<?php echo esc_attr($warranty_icon_alt); ?>">
							</a>
						<?php endif; ?>

						<?php if ($warranty_heading && $warranty_link): ?>
							<a class="not-uder" href="<?php echo esc_url($warranty_link); ?>">
								<h6><?php echo esc_html($warranty_heading); ?></h6>
							</a>
						<?php endif; ?>

						<?php if ($warranty_link): ?>
							<a href="<?php echo esc_url($warranty_link); ?>" target="_blank">See Details</a>
						<?php endif; ?>

					</div>
				<?php endwhile; endif; ?>

			</div>
			</div>
		</div>
		<div class="about-fleet" id="support-about">
			<div id="register-training"  style="position:relative; top:-100px"></div>
			<h3>Weekly User Training Sessions</h3>
			<div class="fleet-para">
				<p>We hold 1 hour user training sessions every Thursday at 9am PT (with the exception of
					holidays). Please complete the form below if you would like to enroll in one of our
					training sessions. We provide on-line training or our web application for unlimited
					users at no additional cost.</p>
				<a href="https://us02web.zoom.us/meeting/register/ubxJ9rR3QnOR1y8LxVvtaQ">Register Here</a>
			</div>
		</div>
		<div id="support-form"></div>
		<div class="border-form">
			<div class="about-fleet" id="support-form-area">
				<h3>Submit a Support Request</h3>
				<div class="fleet-para">
					<span>Need assistance or have a question? Submit a Support Request, and our dedicated team
						will promptly address your needs, ensuring a swift resolution to any concerns you
						may have.</span>

					<div class="contact-form" id="support-form">
						<?php echo do_shortcode( '[gravityform id="26" title="true" description="true" ajax="true"]' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>











<?php get_template_part('template-parts/achivements-template'); ?>
<?php get_template_part('template-parts/tour-section-template'); ?>

<?php get_footer();?>