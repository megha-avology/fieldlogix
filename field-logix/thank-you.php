<?php
/* Template Name: thank-you-page Template */
get_header();?>
<style>
.thank{
  padding-top: 70px;
}

.thankyou-content{
  display: flex;
  flex-direction: column;
  align-items: center;
}

.thankyou-content h1{
  color: #036;
}

.thankyou-content p{
  color: var(--Neutral-Grey-06, #5B5B5F);
  font-size: 18px;
  font-weight: 400;
  line-height: 180%; 
  margin: 16px 0 32px 0;
}
	.thank-you-banner{
		width: 100%;
		max-width: 1440px;
		margin: 0 auto;
		padding-top: 100px;
	}
	.back-home{
		width: max-content;
		color: var(--Main-Colors-White, #FFF);
		font-size: 14px;
		font-weight: 600;
		letter-spacing: 0.84px;
		text-transform: uppercase;
		border-radius: 4px;
		background: var(--Main-Colors-Green-01, #53A42A);
		padding: 13px 20px 12px 20px;
		border: 1px solid transparent;
	}
	
	.back-home:hover{
		background: transparent;
		border: 1px solid #53A42A;
		color: #53A42A;
	}
	.thank-support{
		margin-top: 80px;
		text-align: center;
	}
	
	.thank-support p{
	color: var(--Neutral-Grey-06, #5B5B5F);
	font-size: 18px;
	font-weight: 500;
	line-height: 180%; 
	}
	.thank-support p a{
		color: #53A42A;
	}
	@media screen and (max-width: 1279px) {
		.thank-support{
		margin-top: 50px;
	}
		.thankyou-content p, .thank-support p{
			font-size: 16px;
		}
	}
	@media screen and (max-width: 991px) {
		.thankyou-content h1{
  			font-size: 32px;
}
	}
	@media screen and (max-width: 767px) {
		.thank-support{
		margin-top: 30px;
	}
		.thankyou-content h1{
  			font-size: 28px;
}
		.thankyou-content p, .thank-support p{
			font-size: 14px;
		}
	}
</style>
<main id="main">
	<section class="thank-you-banner">
	<img src="https://fieldlogix.com/wp-content/uploads/2024/05/thanks-banner.svg" alt="thankyou">
	</section>
           <section class="thank">
                <div class="container">
                    <div class="thankyou-content">
                        <h1>Thank You So Much!</h1>
                        <p>We’ve successfully received your request.</p>
                        <a href="<?php echo esc_url(home_url()); ?>" class="back-home">Back to home</a>
						<div class="thank-support">
							<p>If you need any help contact our support team at <a href="#.">support@fieldlogix.com</a></p>
						</div>
                    </div>
                </div>
            </section>
        </main>


<?php get_footer();?>