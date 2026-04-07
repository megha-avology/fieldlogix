<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" as="style"> <!-- to preload fonts -->
	<link rel="preload" as="image" href="/wp-content/uploads/2026/04/Maskgroup.webp" fetchpriority="high">
	<link rel="preload" href="/wp-content/themes/field-logix/css/all.min.css" as="style">
	<!-- <link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/fonts/poppins/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/fonts/poppins/Poppins-Regular.woff" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/fonts/poppins/Poppins-Medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/fonts/poppins/Poppins-Medium.woff" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php //echo get_template_directory_uri(); ?>/fonts/Gilroy-Bold.ttf" as="font" type="font/ttf" crossorigin> -->


	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5B5K8QQ');
	</script>
	<!-- End Google Tag Manager -->
	<meta name="google-site-verification" content="E59Rh4OrfVebOFlJ01ScU-x7tpUV1WVTlpqgw3nraFY" />
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" /> -->

	<link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
	</noscript>

	<link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
	</noscript>

	<link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	</noscript>

	<link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	</noscript>

	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/all.css?ver=<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css?ver=<?php echo time(); ?>">
	
</head>
<?php wp_head(); ?>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5B5K8QQ"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="wrapper">
		<header id="header">
			<div class="top-header">
				<div class="container">
					<div class="inner-top-header">
						<div class="general-info">
							<a href="tel:<?php the_field('phone_number', 'options') ?>"><img src="<?php bloginfo('template_url'); ?>/images/top-call.svg" alt="contact">
								<p><?php the_field('phone_number', 'options') ?></p>
							</a>
							<!--                             <a href="mailto:<?php the_field('email_address', 'options') ?>"><img src="<?php bloginfo('template_url'); ?>/images/top-email.svg" alt="email">
                                <p><?php the_field('email_address', 'options') ?></p>
                            </a> -->
						</div>
						<div class="login">
							<a href="https://secure.fieldlogixgps.com/">
								<img src="<?php bloginfo('template_url'); ?>/images/top-person.svg" 
									alt="<?php bloginfo('name'); ?> Login Icon" aria-hidden="true">
								<p>Login</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="innerHeader">
					<div class="logo">
						<a class="logo-img" href="<?php echo esc_url(home_url()); ?>">
							<!-- <?php if ($site_logo = get_field('site_logo', 'option')) : ?>
								<img src="<?php // the_field('site_logo', 'option'); ?>" alt="FieldLogix">
							<?php endif; ?> -->
 
 
							<?php
								$image_url = get_field('site_logo', 'option');
								if ($image_url) {
									// Convert image URL to attachment ID
									$attachment_id = attachment_url_to_postid($image_url);
									// Get alt text
									$alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true); ?>
								
									<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>">
						
							<?php } ?>



						</a>
					</div>
					<div class="get-started">
						<nav id="navbar">
							<div class="mobile-logo">
								<div class="logo">
									<a class="logo-img" href="<?php echo esc_url(home_url()); ?>">
										<?php
										$mobile_nav_logo = get_field('mobile_nav_logo', 'options');
										if ($mobile_nav_logo) : ?>
											<img src="<?php echo esc_url($mobile_nav_logo['url']); ?>" alt="<?php echo esc_attr($mobile_nav_logo['alt']); ?>" />
										<?php endif; ?>
									</a>
								</div>
							</div>

							<?php
							wp_nav_menu(array(
								'theme_location' => 'header-menu',
								'menu_id' => '',
								'order' => '',
								'menu_class' => ''
							));
							?>
							<div class="li-none">
								<ul>
									<li>
										<a href="https://secure.fieldlogixgps.com/"><img src="<?php bloginfo('template_url'); ?>/images/login-person.svg" alt="user"> Login</a>
									</li>
									<li>
										<a href="tel:<?php the_field('phone_number', 'options') ?>"><img src="<?php bloginfo('template_url'); ?>/images/volume.svg" alt="phone"><?php the_field('phone_number', 'options') ?></a>
									</li>
									<!-- 								<a href="#dash-tour" class="btn-none see-now-header">See It Now</a> -->
								</ul>
							</div>

						</nav>
						<div class="head-button">
							<img src="<?php bloginfo('template_url'); ?>/images/search.svg" alt="Fieldlogix Search">
							<?php
							$link = get_field('get_started_btn', 'option');
							if ($link):
								$link_url = $link['url'];
								$link_title = $link['title'];
							?>
								<a href="<?php echo esc_url($link_url); ?>" class="navbtn"><?php echo esc_html($link_title); ?></a>
							<?php endif; ?>
						</div>
						<div class="hamburger">
							<button>
								<span id="bar-1"></span>
								<span id="bar-2"></span>
								<span id="bar-3"></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</header>