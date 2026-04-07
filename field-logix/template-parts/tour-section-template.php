<section class="tour-section" id="dash-tour">
                <div class="container">
                    <div class="tour-box">
<!--                         <h2>Instant System Tour</h2>
                        <p class="tour-p">Watch short videos to see how we will dramatically improve your fleet
                            operations.!</p> -->
<!--                         <div class="tour-tab">
                            <div class="tour-type type-active" data-tab="tab-1">
                                <p>Take System Tour</p>
                            </div>
                            <div class="tour-type" data-tab="tab-2">
                                <p>Talk to an Expert</p>
                            </div>
                        </div> -->
                        <div class="tab-content current" id="tab-1">
<!--                             <div class="tour-content">
                                <div class="system">
                          
                                    <input type="email" placeholder="Your email address">
                                 
                                </div>
                                <a href="#.">Take the tour now</a>
                            </div> -->
							<?php echo do_shortcode( '[gravityform id="64" title="true" description="true" ajax="true"]' ); ?>
							
                        </div>
                        <div class="tab-content " id="tab-2">
                            <div class="tour-content">
                                <div class="system">
                                    <input type="text" placeholder="Your full name">
                                    <input type="email" placeholder="Your email address">
                                    <input type="number" placeholder="Your phone number">
                                </div>
                                <a href="#.">Take the tour now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>