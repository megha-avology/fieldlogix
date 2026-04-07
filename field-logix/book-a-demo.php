<?php
/* Template Name: book-demo-page Template */
get_header();?>
<style>
#new-template-fleet .about-fleet .fleet-para p {
  font-size: 18px;
  margin-bottom: 32px;
}

#fleet-ul-list {
  margin-top: 80px;
}

#fleet-ul-list ul {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

#fleet-ul-list ul li {
  position: relative;
  color: var(--Neutral-Grey-06, #5b5b5f);
  font-size: 18px;
  font-weight: 400;
  line-height: 180%;
  padding-left: 25px;
  text-align: start;
}

#fleet-ul-list ul li::before {
  content: "";
  position: absolute;
  width: 18px;
  height: 18px;
  background: url(https://fieldlogix.com/wp-content/uploads/2024/03/arrow.svg);
  background-size: contain;
  background-repeat: no-repeat;
  left: 0;
  top: 5px;
}

#fleet-ul-list ul li a {
  color: #53a42a;
  width: unset;
  height: unset;
  background: unset;
  margin: unset;
  padding: unset;
  display: block;
  
}

#fleet-ul-list ul li a:hover {
  width: unset;
  height: unset;
  background: unset;
  margin: unset;
  padding: unset;
  display: block;
  border: unset;
  color: #38373c;
}

.newfleetbuttons {
  display: flex;
  gap: 8px;
}

.newfleetbuttons .new-green {
  width: max-content;
  padding: 13px 20px 12px 20px;
  border: 1px solid transparent;
}

.newfleetbuttons .new-blue {
  background: #036;
  width: max-content;
  padding: 13px 20px 12px 20px;
  border: 1px solid transparent;
}

.newfleetbuttons .new-blue:hover {
  border: 1px solid #036;
  color: #036;
}

#first-fleet .fleet-para a {
  margin: unset;
}

.help-offers {
  border-top: 1px solid #e6e6e7;
  margin-top: 80px;
  padding-top: 80px;
  padding-bottom: 80px;
  border-bottom: 1px solid #e6e6e7;
}

.help-offers h2 {
  color: var(--Main-Colors-Blue, #036);
  text-align: center;
  font-size: 48px;
  font-weight: 700;
}

.help-boxes {
  display: flex;
  margin: 48px 0;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.single-help {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 25%;
  gap: 16px;
  margin-bottom: 48px;
	text-align:center;
}

.help-btn {
  display: flex;
  justify-content: center;
  margin-top: -40px;
}

.help-btn a {
  width: max-content;
  padding: 13px 20px 12px 20px;
  background: #ff7300;
  border-radius: 4px;
  color: #fff;
  border: 1px solid transparent;
}

.help-btn a:hover {
  background: transparent;
  color: #ff7300;
  border: 1px solid #ff7300;
}

#new-safety-purposes {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
#new-safety-purposes .partner-content {
  width: 30%;
  display: flex;
  flex-direction: column;
  align-items: center;
}
#new-safety-purposes .partner-content p {
  color: var(--Neutral-Grey-06, #5b5b5f);
  text-align: center;
  font-size: 16px;
  font-weight: 400;
  line-height: 180%;
}
/* news CSS */
/ test-benefits /
#first-fleet .fleet-para p > a {
  color: #53a42a;
  width: unset;
  height: unset;
  background: unset;
  margin: unset;
  padding: unset;
  display: inline;
  font-size: 18px;
}

#first-fleet .fleet-para p > a:hover {
  border: unset;
  color: #5b5b5f;
}

.test-border {
  border-bottom: 1px solid #e6e6e7;
  padding-bottom: 80px;
}

.new-dash-flex {
  display: flex;
  flex-direction: column;
  gap: 32px;
}

.single-dash-flex {
  display: flex;
  gap: 44px;
}

.dash-left {
  width: 80px;
  height: 80px;
}

.dash-left img{
  width: 100%;
}

.dash-right {
  width: 80%;
}

.dash-right h5{
  color: var(--Main-Colors-Blue, #036);
  font-size: 24px;
  font-weight: 700;
  line-height: 140%;
  margin-bottom: 16px;
}

#test-border-two {
  margin-top: 80px;
}

#test-border-two .fleet-para a{
  width: max-content;
  padding: 13px 20px 12px 20px;
}

#test-border-two .fleet-para img{
  margin-top: 32px;
}
	.single-dash-flex {
    margin-top: 50px;
}


/ responsive /
@media screen and (max-width: 1279px) {
  #new-template-fleet .about-fleet .fleet-para p {
    font-size: 16px;
    margin-bottom: 24px;
  }
  #fleet-ul-list {
    margin-top: 50px;
  }
  .help-offers {
    margin-top: 50px;
    padding-top: 50px;
    padding-bottom: 50px;
  }
  .all-purposes {
    padding-bottom: 50px;
  }
  #fleet-ul-list ul li{
    font-size: 16px;
  }
}

@media screen and (max-width: 991px) {
  .newfleetbuttons {
    justify-content: center;
}

.newfleetbuttons .new-blue, .newfleetbuttons .new-green{
  margin: unset;
  margin-top: 20px;
}
#new-safety-purposes .partner-content{
  width: 100%;
}
}

@media screen and (max-width: 767px) {
  #new-template-fleet .about-fleet .fleet-para p {
    font-size: 14px;
    margin-bottom: 10px;
  }
  #fleet-ul-list {
    margin-top: 20px;
  }
  .help-offers {
    margin-top: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
  }
  .all-purposes {
    padding-bottom: 20px;
  }

  .newfleetbuttons{
    flex-direction: column;
    align-items: center;
  }
  #fleet-ul-list ul li{
    font-size: 14px;
  }

  .help-offers h2{
    font-size: 28px;
  }

  .single-help{
    width: 50%;
  }
}
</style>
<main id="main">
            <section class="hero " id="partner-detail-hero">
                <div class="banner-content-sol">
                    <div class="container">
                        <div class="left-content-sol">
                            <?php if ( $all_banner_subheading = get_field( 'all_banner_subheading' ) ) : ?>
                            <p><?php echo esc_html( $all_banner_subheading ); ?></p>
                        <?php endif; ?>
                        <?php if ( $all_banner_heading = get_field( 'all_banner_heading' ) ) : ?>
                            <h1><?php echo esc_html( $all_banner_heading ); ?></h1>
                        <?php endif; ?>
                            <div class="banner-buttons-sol">
                                                     <?php
                            $link = get_field( 'all_banner_get_btn' );
                            if ( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                          
                                ?>
                                <a class="start-btn" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="right-content">
      <?php if ( $all_banner_img1 = get_field( 'all_banner_img1' ) ) : ?>
                    <img src="<?php the_field('all_banner_img1');?>" alt="" class="desktop-ban-img">
                    <?php endif; ?>
                    <?php if ( $all_banner_img2 = get_field( 'all_banner_img2' ) ) : ?>
                    <img src="<?php the_field('all_banner_img2');?>" alt="" class="mbl-ban-img">
                    <?php endif; ?>
                    </div>
                </div>
            </section>
          
        </main>

<section>
<div class="container">
	<?php the_content() ?>
	</div>
</section>
<?php get_footer();