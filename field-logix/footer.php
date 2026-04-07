<footer id="footer">
  <div class="container">
    <div class="inner-footer">
      <div class="newsletter-content">
        <div class="subscribe">
          <?php if ($newsletter_heading = get_field('newsletter_heading', 'options')) : ?>
            <h5><?php echo esc_html($newsletter_heading); ?></h5>
          <?php endif; ?>
          <?php if ($newsletter_subheading = get_field('newsletter_subheading', 'options')) : ?>
            <p><?php echo esc_html($newsletter_subheading); ?></p>
          <?php endif; ?>

        </div>
        <div class="news-input">
          <?php echo do_shortcode('[gravityform id="78" title="true" ajax="true"]'); ?>
        </div>
      </div>
      <div class="logo-links">
        <div class="footer-logos">
          <div class="main-logo">
            <a href="<?php echo esc_url(home_url()); ?>">
              <?php if ($footer_logo = get_field('footer_logo', 'option')) : ?>
                <img src="<?php the_field('footer_logo', 'option'); ?>" alt="FieldLogix">
              <?php endif; ?>
            </a>
          </div>
          <div class="social-logos">
            <?php if (have_rows('social_icons_repeater', 'options')):  while (have_rows('social_icons_repeater', 'options')) : the_row(); ?>
                <div class="social">
                  <a href="<?php the_sub_field('social_links', 'options'); ?>">
                    <img src="<?php the_sub_field('social_icon', 'options'); ?>" alt="#">
                  </a>
                </div>
            <?php endwhile;
            endif; ?>
          </div>
        </div>
        <div class="footer-links">
          <div class="links">
            <h4 onclick="toggleDropdown(this)">Our Solutions <img class="dropdown-arrow" src="<?php bloginfo('template_url'); ?>/images/dropdown-arrow.svg" alt="dropdown"></h4>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'solution-menu',
              'menu_id' => '',
              'order' => '',
              'menu_class' => '',
              'container' => false
            ));
            ?>
          </div>
          <div class="links">
            <h4 onclick="toggleDropdown(this)">More From Us<img class="dropdown-arrow" src="<?php bloginfo('template_url'); ?>/images/dropdown-arrow.svg" alt="dropdown"></h4>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'more-menu',
              'menu_id' => '',
              'order' => '',
              'menu_class' => '',
              'container' => false
            ));
            ?>
          </div>
          <div class="links">
            <h4 onclick="toggleDropdown(this)">Company<img class="dropdown-arrow" src="<?php bloginfo('template_url'); ?>/images/dropdown-arrow.svg" alt="dropdown"></h4>
            <?php
            wp_nav_menu(array(
              'theme_location' => 'company-menu',
              'menu_id' => '',
              'order' => '',
              'menu_class' => '',
              'container' => false
            ));
            ?>
          </div>
        </div>
      </div>
      <div class="copy">
        <?php if ($copyright_text = get_field('copyright_text', 'options')) : ?>
          <p><?php echo esc_html($copyright_text); ?>
          <p>
          <?php endif; ?>

          <p class="privacy">
            <?php if (have_rows('bottom_repeater', 'options')):  while (have_rows('bottom_repeater', 'options')) : the_row(); ?>
                <?php
                $link = get_field('footer_links', 'options');
                if ($link):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                  <span><a href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a></span>
                <?php endif; ?>
            <?php endwhile;
            endif; ?>
          </p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</div>



<div class="popup-overlay search-box">
  <div class="popup-container"
    style="padding: 20px; width: 50%; margin: auto; box-sizing: border-box; color: rgb(208, 208, 209); text-align: center;">
    <form role="search" method="get" id="searchheader" action="https://fieldlogix.com/">
      <input type="text" value="" name="s" id="searchheaderinput" placeholder="Search here">
      <button type="submit">
        <img src="<?php echo esc_url(home_url()); ?>/wp-content/themes/field-logix/images/search-popup.svg" alt="Fieldlogix Search">
      </button>
    </form>
  
  </div>
</div>


<div id="fieldlogix-links"  class="orphan-pages" style="display:none;">
<a href="https://fieldlogix.com/tag/state-of-colorado-department-of-fleet-management/">https://fieldlogix.com/tag/state-of-colorado-department-of-fleet-management/</a>
<a href="https://fieldlogix.com/tag/fleetinsurance-fleetsafety/">https://fieldlogix.com/tag/fleetinsurance-fleetsafety/</a>
<a href="https://fieldlogix.com/tag/fresno-county/">https://fieldlogix.com/tag/fresno-county/</a>
<a href="https://fieldlogix.com/tag/campolicy/">https://fieldlogix.com/tag/campolicy/</a>
<a href="https://fieldlogix.com/test-fuel-calc/">https://fieldlogix.com/test-fuel-calc/</a>
<a href="https://fieldlogix.com/tag/tasia-martinez/">https://fieldlogix.com/tag/tasia-martinez/</a>
<a href="https://fieldlogix.com/tag/geotag/">https://fieldlogix.com/tag/geotag/</a>
<a href="https://fieldlogix.com/tag/pnc-bank/">https://fieldlogix.com/tag/pnc-bank/</a>
<a href="https://fieldlogix.com/tag/gps-tracking-software/">https://fieldlogix.com/tag/gps-tracking-software/</a>
<a href="https://fieldlogix.com/tag/peggye-woodson/">https://fieldlogix.com/tag/peggye-woodson/</a>
<a href="https://fieldlogix.com/tag/california-state-department-of-corrections-and-rehabilitation/">https://fieldlogix.com/tag/california-state-department-of-corrections-and-rehabilitation/</a>
<a href="https://fieldlogix.com/tag/summer-fleet-maintenance/">https://fieldlogix.com/tag/summer-fleet-maintenance/</a>
<a href="https://fieldlogix.com/tag/ipad/">https://fieldlogix.com/tag/ipad/</a>
<a href="https://fieldlogix.com/tst/">https://fieldlogix.com/tst/</a>
<a href="https://fieldlogix.com/tag/starbucks/">https://fieldlogix.com/tag/starbucks/</a>
<a href="https://fieldlogix.com/tag/hey-goose/">https://fieldlogix.com/tag/hey-goose/</a>
<a href="https://fieldlogix.com/tag/small-businesses/">https://fieldlogix.com/tag/small-businesses/</a>
<a href="https://fieldlogix.com/ici-testimonial/">https://fieldlogix.com/ici-testimonial/</a>
<a href="https://fieldlogix.com/tag/stolen-police-uniform/">https://fieldlogix.com/tag/stolen-police-uniform/</a>
<a href="https://fieldlogix.com/tag/gps-sytems/">https://fieldlogix.com/tag/gps-sytems/</a>
<a href="https://fieldlogix.com/tag/gps-goggles/">https://fieldlogix.com/tag/gps-goggles/</a>
<a href="https://fieldlogix.com/tag/rfid/">https://fieldlogix.com/tag/rfid/</a>
<a href="https://fieldlogix.com/tag/mcdonalds/">https://fieldlogix.com/tag/mcdonalds/</a>
<a href="https://fieldlogix.com/webinar-goosev4/">https://fieldlogix.com/webinar-goosev4/</a>
<a href="https://fieldlogix.com/tag/idling-laws/">https://fieldlogix.com/tag/idling-laws/</a>
<a href="https://fieldlogix.com/tag/thomas-b-stockwell-jr/">https://fieldlogix.com/tag/thomas-b-stockwell-jr/</a>
<a href="https://fieldlogix.com/tag/sdbj/">https://fieldlogix.com/tag/sdbj/</a>
<a href="https://fieldlogix.com/dangerous-driving-accident-risk/">https://fieldlogix.com/dangerous-driving-accident-risk/</a>
<a href="https://fieldlogix.com/rlh-theft-testimonial/">https://fieldlogix.com/rlh-theft-testimonial/</a>
<a href="https://fieldlogix.com/maximizing-fleet-safety-5-things-video/">https://fieldlogix.com/maximizing-fleet-safety-5-things-video/</a>
<a href="https://fieldlogix.com/tag/best-fleet-fuel-management-principles/">https://fieldlogix.com/tag/best-fleet-fuel-management-principles/</a>
<a href="https://fieldlogix.com/tag/fleets/">https://fieldlogix.com/tag/fleets/</a>
<a href="https://fieldlogix.com/tag/real-time-gps/">https://fieldlogix.com/tag/real-time-gps/</a>
<a href="https://fieldlogix.com/tag/fleet-vehicle-maintenance/">https://fieldlogix.com/tag/fleet-vehicle-maintenance/</a>
<a href="https://fieldlogix.com/tag/recover/">https://fieldlogix.com/tag/recover/</a>
<a href="https://fieldlogix.com/tag/iphone-gps/">https://fieldlogix.com/tag/iphone-gps/</a>
<a href="https://fieldlogix.com/tag/matt-cahill/">https://fieldlogix.com/tag/matt-cahill/</a>
<a href="https://fieldlogix.com/tag/fleet-costs/">https://fieldlogix.com/tag/fleet-costs/</a>
<a href="https://fieldlogix.com/tag/gps-fleet-tracking-devices/">https://fieldlogix.com/tag/gps-fleet-tracking-devices/</a>
<a href="https://fieldlogix.com/tag/fleet-services/">https://fieldlogix.com/tag/fleet-services/</a>
<a href="https://fieldlogix.com/tag/hvac-fleet/">https://fieldlogix.com/tag/hvac-fleet/</a>
<a href="https://fieldlogix.com/tag/aaa-fuel-gauge-report/">https://fieldlogix.com/tag/aaa-fuel-gauge-report/</a>
<a href="https://fieldlogix.com/tag/jim-edwards/">https://fieldlogix.com/tag/jim-edwards/</a>
<a href="https://fieldlogix.com/fieldlogix-wennsoft-benefits-finance-hr/">https://fieldlogix.com/fieldlogix-wennsoft-benefits-finance-hr/</a>
<a href="https://fieldlogix.com/tag/ankle-monitoring/">https://fieldlogix.com/tag/ankle-monitoring/</a>
<a href="https://fieldlogix.com/tag/vehicle-tracking-devices/">https://fieldlogix.com/tag/vehicle-tracking-devices/</a>
<a href="https://fieldlogix.com/tag/tsa/">https://fieldlogix.com/tag/tsa/</a>
<a href="https://fieldlogix.com/tag/relayrides/">https://fieldlogix.com/tag/relayrides/</a>
<a href="https://fieldlogix.com/tag/safety/">https://fieldlogix.com/tag/safety/</a>
<a href="https://fieldlogix.com/tag/gps-fleet-management/">https://fieldlogix.com/tag/gps-fleet-management/</a>
<a href="https://fieldlogix.com/tag/advocates-for-public-safety/">https://fieldlogix.com/tag/advocates-for-public-safety/</a>
<a href="https://fieldlogix.com/artic-testimonial/">https://fieldlogix.com/artic-testimonial/</a>
<a href="https://fieldlogix.com/company-distracted-driving/">https://fieldlogix.com/company-distracted-driving/</a>
<a href="https://fieldlogix.com/tag/personal-use-policy/">https://fieldlogix.com/tag/personal-use-policy/</a>
<a href="https://fieldlogix.com/addressing-the-driver-shortage-video/">https://fieldlogix.com/addressing-the-driver-shortage-video/</a>
<a href="https://fieldlogix.com/tag/tennessees-board-of-probation-and-parole/">https://fieldlogix.com/tag/tennessees-board-of-probation-and-parole/</a>
<a href="https://fieldlogix.com/tag/secret-service/">https://fieldlogix.com/tag/secret-service/</a>
<a href="https://fieldlogix.com/tag/green-fleet-study/">https://fieldlogix.com/tag/green-fleet-study/</a>
<a href="https://fieldlogix.com/tag/julian-deherrera/">https://fieldlogix.com/tag/julian-deherrera/</a>
<a href="https://fieldlogix.com/tag/aspen-security-forum/">https://fieldlogix.com/tag/aspen-security-forum/</a>
<a href="https://fieldlogix.com/addressing-the-driver-shortage-key-ways-to-win-in-the-uber-competitive-labor-market-video/">https://fieldlogix.com/addressing-the-driver-shortage-key-ways-to-win-in-the-uber-competitive-labor-market-video/</a>
<a href="https://fieldlogix.com/test-assessment/">https://fieldlogix.com/test-assessment/</a>
<a href="https://fieldlogix.com/tag/gps-vehicle-tracking-systems/">https://fieldlogix.com/tag/gps-vehicle-tracking-systems/</a>
<a href="https://fieldlogix.com/tag/artificialintelligence/">https://fieldlogix.com/tag/artificialintelligence/</a>
<a href="https://fieldlogix.com/tag/andy-ramirez/">https://fieldlogix.com/tag/andy-ramirez/</a>
<a href="https://fieldlogix.com/tag/jimmy-carter/">https://fieldlogix.com/tag/jimmy-carter/</a>
<a href="https://fieldlogix.com/tag/abc-news/">https://fieldlogix.com/tag/abc-news/</a>
<a href="https://fieldlogix.com/tag/autism-research/">https://fieldlogix.com/tag/autism-research/</a>
<a href="https://fieldlogix.com/fleet-transparency/">https://fieldlogix.com/fleet-transparency/</a>
<a href="https://fieldlogix.com/tag/save-the-environment/">https://fieldlogix.com/tag/save-the-environment/</a>
<a href="https://fieldlogix.com/tag/nyc/">https://fieldlogix.com/tag/nyc/</a>
<a href="https://fieldlogix.com/proven-ways-to-streamline-operational-efficiency-with-field-resource-management-video/">https://fieldlogix.com/proven-ways-to-streamline-operational-efficiency-with-field-resource-management-video/</a>
<a href="https://fieldlogix.com/tag/amendolas-fence/">https://fieldlogix.com/tag/amendolas-fence/</a>
<a href="https://fieldlogix.com/tag/government-fleet/">https://fieldlogix.com/tag/government-fleet/</a>
<a href="https://fieldlogix.com/new-feature-releases/">https://fieldlogix.com/new-feature-releases/</a>
<a href="https://fieldlogix.com/unique-token-test/">https://fieldlogix.com/unique-token-test/</a>
<a href="https://fieldlogix.com/tag/city-fleet/">https://fieldlogix.com/tag/city-fleet/</a>
<a href="https://fieldlogix.com/2023-section-179-results/">https://fieldlogix.com/2023-section-179-results/</a>
<a href="https://fieldlogix.com/tag/killiu-ford/">https://fieldlogix.com/tag/killiu-ford/</a>
<a href="https://fieldlogix.com/tag/id-analytics/">https://fieldlogix.com/tag/id-analytics/</a>
<a href="https://fieldlogix.com/tag/snow-plow-stolen/">https://fieldlogix.com/tag/snow-plow-stolen/</a>
<a href="https://fieldlogix.com/tag/delivery/">https://fieldlogix.com/tag/delivery/</a>
<a href="https://fieldlogix.com/tag/smartphone/">https://fieldlogix.com/tag/smartphone/</a>
<a href="https://fieldlogix.com/tag/phillip-garrido/">https://fieldlogix.com/tag/phillip-garrido/</a>
<a href="https://fieldlogix.com/tag/melanie-white/">https://fieldlogix.com/tag/melanie-white/</a>
<a href="https://fieldlogix.com/tag/fleet-gps-savings/">https://fieldlogix.com/tag/fleet-gps-savings/</a>
<a href="https://fieldlogix.com/whats-new-with-gps-technology/">https://fieldlogix.com/whats-new-with-gps-technology/</a>
<a href="https://fieldlogix.com/tag/green-gps-tracking/">https://fieldlogix.com/tag/green-gps-tracking/</a>
<a href="https://fieldlogix.com/tag/art-hale/">https://fieldlogix.com/tag/art-hale/</a>
<a href="https://fieldlogix.com/tag/real-time-vehicle-tracking/">https://fieldlogix.com/tag/real-time-vehicle-tracking/</a>
<a href="https://fieldlogix.com/tag/aurora-il/">https://fieldlogix.com/tag/aurora-il/</a>
<a href="https://fieldlogix.com/product-warranty/">https://fieldlogix.com/product-warranty/</a>
<a href="https://fieldlogix.com/5-reasons-why-all-fleets-need-field-resource-management-download/">https://fieldlogix.com/5-reasons-why-all-fleets-need-field-resource-management-download/</a>
<a href="https://fieldlogix.com/tag/truck-monitoring-system/">https://fieldlogix.com/tag/truck-monitoring-system/</a>
<a href="https://fieldlogix.com/tag/telematics/">https://fieldlogix.com/tag/telematics/</a>
<a href="https://fieldlogix.com/tag/carrier-corporation/">https://fieldlogix.com/tag/carrier-corporation/</a>
<a href="https://fieldlogix.com/tag/palm-bay/">https://fieldlogix.com/tag/palm-bay/</a>
<a href="https://fieldlogix.com/tag/miguel-a-ramirez/">https://fieldlogix.com/tag/miguel-a-ramirez/</a>
<a href="https://fieldlogix.com/tools/5-things-to-consider-when-starting-a-food-delivery-service/">https://fieldlogix.com/tools/5-things-to-consider-when-starting-a-food-delivery-service/</a>
<a href="https://fieldlogix.com/tag/ford-bronco/">https://fieldlogix.com/tag/ford-bronco/</a>
<a href="https://fieldlogix.com/tag/stalking/">https://fieldlogix.com/tag/stalking/</a>
<a href="https://fieldlogix.com/tag/gps-dispatching/">https://fieldlogix.com/tag/gps-dispatching/</a>
<a href="https://fieldlogix.com/tag/donald-rebovich/">https://fieldlogix.com/tag/donald-rebovich/</a>
<a href="https://fieldlogix.com/tag/stolen/">https://fieldlogix.com/tag/stolen/</a>
<a href="https://fieldlogix.com/tag/fuel-reduction/">https://fieldlogix.com/tag/fuel-reduction/</a>
<a href="https://fieldlogix.com/tag/vehicle-gps-2/">https://fieldlogix.com/tag/vehicle-gps-2/</a>
<a href="https://fieldlogix.com/tag/idfa/">https://fieldlogix.com/tag/idfa/</a>
<a href="https://fieldlogix.com/tag/cyrpus/">https://fieldlogix.com/tag/cyrpus/</a>
<a href="https://fieldlogix.com/tag/fbi/">https://fieldlogix.com/tag/fbi/</a>
<a href="https://fieldlogix.com/tag/david-durose/">https://fieldlogix.com/tag/david-durose/</a>
<a href="https://fieldlogix.com/tag/vehicle-tracking-system/">https://fieldlogix.com/tag/vehicle-tracking-system/</a>
<a href="https://fieldlogix.com/tag/cyprus/">https://fieldlogix.com/tag/cyprus/</a>
<a href="https://fieldlogix.com/2022-section-179-gps-equipment-tax-deduction-calculator/">https://fieldlogix.com/2022-section-179-gps-equipment-tax-deduction-calculator/</a>
<a href="https://fieldlogix.com/tag/parolee-tracking/">https://fieldlogix.com/tag/parolee-tracking/</a>
<a href="https://fieldlogix.com/tag/vehicles/">https://fieldlogix.com/tag/vehicles/</a>
<a href="https://fieldlogix.com/tag/general-motors/">https://fieldlogix.com/tag/general-motors/</a>
<a href="https://fieldlogix.com/sunshine-testimonial/">https://fieldlogix.com/sunshine-testimonial/</a>
<a href="https://fieldlogix.com/tag/city-of-dallas/">https://fieldlogix.com/tag/city-of-dallas/</a>
<a href="https://fieldlogix.com/tag/fleet-managers/">https://fieldlogix.com/tag/fleet-managers/</a>
<a href="https://fieldlogix.com/tag/vehicle-emissions/">https://fieldlogix.com/tag/vehicle-emissions/</a>
<a href="https://fieldlogix.com/tag/gps-tracking-system/">https://fieldlogix.com/tag/gps-tracking-system/</a>
<a href="https://fieldlogix.com/tag/phccsandiego/">https://fieldlogix.com/tag/phccsandiego/</a>
<a href="https://fieldlogix.com/tag/student-tracking/">https://fieldlogix.com/tag/student-tracking/</a>
<a href="https://fieldlogix.com/tag/apple/">https://fieldlogix.com/tag/apple/</a>
<a href="https://fieldlogix.com/tag/fleet-vehicle/">https://fieldlogix.com/tag/fleet-vehicle/</a>
<a href="https://fieldlogix.com/tag/delivery-fleet/">https://fieldlogix.com/tag/delivery-fleet/</a>
<a href="https://fieldlogix.com/tag/carbon-emissions/">https://fieldlogix.com/tag/carbon-emissions/</a>
<a href="https://fieldlogix.com/ready-refresh/">https://fieldlogix.com/ready-refresh/</a>
<a href="https://fieldlogix.com/emerging-triumphant-in-2021-video/">https://fieldlogix.com/emerging-triumphant-in-2021-video/</a>
<a href="https://fieldlogix.com/tag/tracking-systems/">https://fieldlogix.com/tag/tracking-systems/</a>
<a href="https://fieldlogix.com/tag/thanksgiving/">https://fieldlogix.com/tag/thanksgiving/</a>
<a href="https://fieldlogix.com/tag/find-my-phone/">https://fieldlogix.com/tag/find-my-phone/</a>
<a href="https://fieldlogix.com/evaluating-field-resource-management-providers/">https://fieldlogix.com/evaluating-field-resource-management-providers/</a>
<a href="https://fieldlogix.com/tag/phillip-and-nancy-garrido/">https://fieldlogix.com/tag/phillip-and-nancy-garrido/</a>
<a href="https://fieldlogix.com/tag/gps-tracking-systems/">https://fieldlogix.com/tag/gps-tracking-systems/</a>
<a href="https://fieldlogix.com/tag/diane-sawyer/">https://fieldlogix.com/tag/diane-sawyer/</a>
<a href="https://fieldlogix.com/tag/fleet-management-solutions/">https://fieldlogix.com/tag/fleet-management-solutions/</a>
<a href="https://fieldlogix.com/tag/real-time-gps-tracking/">https://fieldlogix.com/tag/real-time-gps-tracking/</a>
<a href="https://fieldlogix.com/tools/2023-section-179-telematics-tax-deduction-calculator/">https://fieldlogix.com/tools/2023-section-179-telematics-tax-deduction-calculator/</a>
<a href="https://fieldlogix.com/tag/jay-high-school/">https://fieldlogix.com/tag/jay-high-school/</a>
<a href="https://fieldlogix.com/new-capabilities-fraud-safety/">https://fieldlogix.com/new-capabilities-fraud-safety/</a>
<a href="https://fieldlogix.com/tag/m2m/">https://fieldlogix.com/tag/m2m/</a>
<a href="https://fieldlogix.com/tag/distracted-driving/">https://fieldlogix.com/tag/distracted-driving/</a>
<a href="https://fieldlogix.com/tag/emission-regulations/">https://fieldlogix.com/tag/emission-regulations/</a>
<a href="https://fieldlogix.com/tag/accidents/">https://fieldlogix.com/tag/accidents/</a>
<a href="https://fieldlogix.com/tag/navsop/">https://fieldlogix.com/tag/navsop/</a>
<a href="https://fieldlogix.com/tag/gps-fleet-management-systems/">https://fieldlogix.com/tag/gps-fleet-management-systems/</a>
<a href="https://fieldlogix.com/telematics-3g-upgrades/">https://fieldlogix.com/telematics-3g-upgrades/</a>
<a href="https://fieldlogix.com/tag/john-choi/">https://fieldlogix.com/tag/john-choi/</a>
<a href="https://fieldlogix.com/improve-driver-supervision/">https://fieldlogix.com/improve-driver-supervision/</a>
<a href="https://fieldlogix.com/tag/drivers/">https://fieldlogix.com/tag/drivers/</a>
<a href="https://fieldlogix.com/tag/boston-herald/">https://fieldlogix.com/tag/boston-herald/</a>
<a href="https://fieldlogix.com/tag/school-bus-gps/">https://fieldlogix.com/tag/school-bus-gps/</a>
<a href="https://fieldlogix.com/tag/u-s-department-of-transportation/">https://fieldlogix.com/tag/u-s-department-of-transportation/</a>
<a href="https://fieldlogix.com/tag/aicollege/">https://fieldlogix.com/tag/aicollege/</a>
<a href="https://fieldlogix.com/tag/luxury-vehicles/">https://fieldlogix.com/tag/luxury-vehicles/</a>
<a href="https://fieldlogix.com/ai-in-field-service-management-eguide/">https://fieldlogix.com/ai-in-field-service-management-eguide/</a>
<a href="https://fieldlogix.com/tag/university-of-massachusetts-lowell/">https://fieldlogix.com/tag/university-of-massachusetts-lowell/</a>
<a href="https://fieldlogix.com/tag/gps-tracking-crime/">https://fieldlogix.com/tag/gps-tracking-crime/</a>
<a href="https://fieldlogix.com/tag/csa-2010/">https://fieldlogix.com/tag/csa-2010/</a>
<a href="https://fieldlogix.com/servicetrade-and-fieldlogix/">https://fieldlogix.com/servicetrade-and-fieldlogix/</a>
<a href="https://fieldlogix.com/tag/dashcameras/">https://fieldlogix.com/tag/dashcameras/</a>
<a href="https://fieldlogix.com/tag/tracking-fleet-vehicles/">https://fieldlogix.com/tag/tracking-fleet-vehicles/</a>
<a href="https://fieldlogix.com/fieldlogix-wennsoft-benefits-it-managers/">https://fieldlogix.com/fieldlogix-wennsoft-benefits-it-managers/</a>
<a href="https://fieldlogix.com/tag/center-for-identity-management-and-information-protection/">https://fieldlogix.com/tag/center-for-identity-management-and-information-protection/</a>
<a href="https://fieldlogix.com/tag/gps-nav-iphone/">https://fieldlogix.com/tag/gps-nav-iphone/</a>
<a href="https://fieldlogix.com/tag/food_delivery-eta-uber-deliver-deliveryexperience/">https://fieldlogix.com/tag/food_delivery-eta-uber-deliver-deliveryexperience/</a>
<a href="https://fieldlogix.com/fleet-security-2-0/">https://fieldlogix.com/fleet-security-2-0/</a>
<a href="https://fieldlogix.com/tag/driving-risks-summer/">https://fieldlogix.com/tag/driving-risks-summer/</a>
<a href="https://fieldlogix.com/tag/insurance/">https://fieldlogix.com/tag/insurance/</a>
<a href="https://fieldlogix.com/tag/truck-driver-jobs/">https://fieldlogix.com/tag/truck-driver-jobs/</a>
<a href="https://fieldlogix.com/tag/satellite-navigation/">https://fieldlogix.com/tag/satellite-navigation/</a>
<a href="https://fieldlogix.com/tag/indus-entrepreneurs/">https://fieldlogix.com/tag/indus-entrepreneurs/</a>
<a href="https://fieldlogix.com/tag/fuel-price/">https://fieldlogix.com/tag/fuel-price/</a>
<a href="https://fieldlogix.com/nov23-fieldlogix-feature-updates/">https://fieldlogix.com/nov23-fieldlogix-feature-updates/</a>
<a href="https://fieldlogix.com/tag/pollution/">https://fieldlogix.com/tag/pollution/</a>
<a href="https://fieldlogix.com/tag/uxbridge/">https://fieldlogix.com/tag/uxbridge/</a>
<a href="https://fieldlogix.com/tag/telematics-expert/">https://fieldlogix.com/tag/telematics-expert/</a>
<a href="https://fieldlogix.com/tag/northside-independent-school-district/">https://fieldlogix.com/tag/northside-independent-school-district/</a>
<a href="https://fieldlogix.com/tag/ooida/">https://fieldlogix.com/tag/ooida/</a>
<a href="https://fieldlogix.com/tag/vincent-george-williams/">https://fieldlogix.com/tag/vincent-george-williams/</a>
<a href="https://fieldlogix.com/dwc24/">https://fieldlogix.com/dwc24/</a>
<a href="https://fieldlogix.com/tag/corpus-christi/">https://fieldlogix.com/tag/corpus-christi/</a>
<a href="https://fieldlogix.com/tag/tie/">https://fieldlogix.com/tag/tie/</a>
<a href="https://fieldlogix.com/tag/cdcr/">https://fieldlogix.com/tag/cdcr/</a>
<a href="https://fieldlogix.com/tag/fieldlogix/">https://fieldlogix.com/tag/fieldlogix/</a>
<a href="https://fieldlogix.com/tag/fleet-emissions/">https://fieldlogix.com/tag/fleet-emissions/</a>
<a href="https://fieldlogix.com/goose_plans/">https://fieldlogix.com/goose_plans/</a>
<a href="https://fieldlogix.com/tag/gps-satellite-navigation/">https://fieldlogix.com/tag/gps-satellite-navigation/</a>
<a href="https://fieldlogix.com/tag/gps-policy/">https://fieldlogix.com/tag/gps-policy/</a>
<a href="https://fieldlogix.com/tag/patricia-malone/">https://fieldlogix.com/tag/patricia-malone/</a>
<a href="https://fieldlogix.com/tag/2016/">https://fieldlogix.com/tag/2016/</a>
<a href="https://fieldlogix.com/replace-the-surfsight-dashcam-sd-card/">https://fieldlogix.com/replace-the-surfsight-dashcam-sd-card/</a>
<a href="https://fieldlogix.com/tag/driver-training/">https://fieldlogix.com/tag/driver-training/</a>
<a href="https://fieldlogix.com/tag/gps-systems/">https://fieldlogix.com/tag/gps-systems/</a>
<a href="https://fieldlogix.com/how-goose-works/">https://fieldlogix.com/how-goose-works/</a>
<a href="https://fieldlogix.com/thank-you/">https://fieldlogix.com/thank-you/</a>
<a href="https://fieldlogix.com/tag/fleet-legislation/">https://fieldlogix.com/tag/fleet-legislation/</a>
<a href="https://fieldlogix.com/tag/supt-paul-fitzgerald/">https://fieldlogix.com/tag/supt-paul-fitzgerald/</a>
<a href="https://fieldlogix.com/tag/yukon-palmer/">https://fieldlogix.com/tag/yukon-palmer/</a>
<a href="https://fieldlogix.com/tag/dashcams/">https://fieldlogix.com/tag/dashcams/</a>
<a href="https://fieldlogix.com/tag/garmin/">https://fieldlogix.com/tag/garmin/</a>
<a href="https://fieldlogix.com/tag/garmin-fleet/">https://fieldlogix.com/tag/garmin-fleet/</a>
<a href="https://fieldlogix.com/tag/mayor-menino/">https://fieldlogix.com/tag/mayor-menino/</a>
<a href="https://fieldlogix.com/tag/bp-gas/">https://fieldlogix.com/tag/bp-gas/</a>
<a href="https://fieldlogix.com/tag/fuel-management/">https://fieldlogix.com/tag/fuel-management/</a>
<a href="https://fieldlogix.com/tag/gps-technology/">https://fieldlogix.com/tag/gps-technology/</a>
<a href="https://fieldlogix.com/fleet-courier-tracking/">https://fieldlogix.com/fleet-courier-tracking/</a>
<a href="https://fieldlogix.com/tag/fleet-tracking-system-with-gps/">https://fieldlogix.com/tag/fleet-tracking-system-with-gps/</a>
<a href="https://fieldlogix.com/tag/joseph-ferreira/">https://fieldlogix.com/tag/joseph-ferreira/</a>
<a href="https://fieldlogix.com/tag/domestic-violence/">https://fieldlogix.com/tag/domestic-violence/</a>
<a href="https://fieldlogix.com/tag/fleet-gps-system/">https://fieldlogix.com/tag/fleet-gps-system/</a>
<a href="https://fieldlogix.com/tag/mobile-resources-management/">https://fieldlogix.com/tag/mobile-resources-management/</a>
<a href="https://fieldlogix.com/use-telematics-to-avoid-negative-entrustment-fleets/">https://fieldlogix.com/use-telematics-to-avoid-negative-entrustment-fleets/</a>
<a href="https://fieldlogix.com/tag/real-time-fleet-tracking/">https://fieldlogix.com/tag/real-time-fleet-tracking/</a>
<a href="https://fieldlogix.com/tag/gps-fleet-tracking-device/">https://fieldlogix.com/tag/gps-fleet-tracking-device/</a>
<a href="https://fieldlogix.com/tag/iphone/">https://fieldlogix.com/tag/iphone/</a>
<a href="https://fieldlogix.com/tag/raymond-kelly/">https://fieldlogix.com/tag/raymond-kelly/</a>
<a href="https://fieldlogix.com/tag/self-driving-car/">https://fieldlogix.com/tag/self-driving-car/</a>
<a href="https://fieldlogix.com/tag/green-fleet-management/">https://fieldlogix.com/tag/green-fleet-management/</a>
<a href="https://fieldlogix.com/tag/equipment-tax-deduction/">https://fieldlogix.com/tag/equipment-tax-deduction/</a>
<a href="https://fieldlogix.com/tag/family-kidnapped/">https://fieldlogix.com/tag/family-kidnapped/</a>
<a href="https://fieldlogix.com/tag/gary-goldman/">https://fieldlogix.com/tag/gary-goldman/</a>
<a href="https://fieldlogix.com/sustainable-fleet-management/">https://fieldlogix.com/sustainable-fleet-management/</a>
<a href="https://fieldlogix.com/tag/john-guilfoil/">https://fieldlogix.com/tag/john-guilfoil/</a>
<a href="https://fieldlogix.com/tag/stanislaus-county/">https://fieldlogix.com/tag/stanislaus-county/</a>
<a href="https://fieldlogix.com/tag/employee-busted/">https://fieldlogix.com/tag/employee-busted/</a>
<a href="https://fieldlogix.com/tag/iphone-tracking/">https://fieldlogix.com/tag/iphone-tracking/</a>
<a href="https://fieldlogix.com/tag/victoria-reinhardt/">https://fieldlogix.com/tag/victoria-reinhardt/</a>
<a href="https://fieldlogix.com/tag/sex-offender-tracking/">https://fieldlogix.com/tag/sex-offender-tracking/</a>
<a href="https://fieldlogix.com/tag/public-security/">https://fieldlogix.com/tag/public-security/</a>
<a href="https://fieldlogix.com/nafed-raffle/">https://fieldlogix.com/nafed-raffle/</a>
<a href="https://fieldlogix.com/tag/fleet-gps-devices/">https://fieldlogix.com/tag/fleet-gps-devices/</a>
<a href="https://fieldlogix.com/tag/identity-project-and-privacy-activism/">https://fieldlogix.com/tag/identity-project-and-privacy-activism/</a>
<a href="https://fieldlogix.com/tag/truckers/">https://fieldlogix.com/tag/truckers/</a>
<a href="https://fieldlogix.com/job-costing/">https://fieldlogix.com/job-costing/</a>
<a href="https://fieldlogix.com/tag/orlando-international-airport/">https://fieldlogix.com/tag/orlando-international-airport/</a>
<a href="https://fieldlogix.com/tag/car-theft-ring/">https://fieldlogix.com/tag/car-theft-ring/</a>
<a href="https://fieldlogix.com/tag/charles-cogliano/">https://fieldlogix.com/tag/charles-cogliano/</a>
<a href="https://fieldlogix.com/estimated-time-of-arrival-alerts/">https://fieldlogix.com/estimated-time-of-arrival-alerts/</a>
<a href="https://fieldlogix.com/tag/ios-6/">https://fieldlogix.com/tag/ios-6/</a>
<a href="https://fieldlogix.com/tag/iphone-app-golf/">https://fieldlogix.com/tag/iphone-app-golf/</a>
<a href="https://fieldlogix.com/tag/vehicle/">https://fieldlogix.com/tag/vehicle/</a>
<a href="https://fieldlogix.com/tag/albuquerque/">https://fieldlogix.com/tag/albuquerque/</a>
<a href="https://fieldlogix.com/sustainability-webinar-video/">https://fieldlogix.com/sustainability-webinar-video/</a>
<a href="https://fieldlogix.com/tag/golf-gps/">https://fieldlogix.com/tag/golf-gps/</a>
<a href="https://fieldlogix.com/tag/truck-driver/">https://fieldlogix.com/tag/truck-driver/</a>
<a href="https://fieldlogix.com/better-customer-support/">https://fieldlogix.com/better-customer-support/</a>
<a href="https://fieldlogix.com/tst-2/">https://fieldlogix.com/tst-2/</a>
<a href="https://fieldlogix.com/tag/jason-carter/">https://fieldlogix.com/tag/jason-carter/</a>
<a href="https://fieldlogix.com/insurance-telematics-solutions/">https://fieldlogix.com/insurance-telematics-solutions/</a>
<a href="https://fieldlogix.com/tag/gangs-gps/">https://fieldlogix.com/tag/gangs-gps/</a>
<a href="https://fieldlogix.com/service-overview/">https://fieldlogix.com/service-overview/</a>
<a href="https://fieldlogix.com/tag/kerry-roberts/">https://fieldlogix.com/tag/kerry-roberts/</a>
<a href="https://fieldlogix.com/fleet-accountability/">https://fieldlogix.com/fleet-accountability/</a>
<a href="https://fieldlogix.com/tag/mileage-tax/">https://fieldlogix.com/tag/mileage-tax/</a>
<a href="https://fieldlogix.com/tag/business-insider/">https://fieldlogix.com/tag/business-insider/</a>
<a href="https://fieldlogix.com/tag/technology/">https://fieldlogix.com/tag/technology/</a>
<a href="https://fieldlogix.com/tag/navigation/">https://fieldlogix.com/tag/navigation/</a>
<a href="https://fieldlogix.com/move-alert-thank-you/">https://fieldlogix.com/move-alert-thank-you/</a>
<a href="https://fieldlogix.com/email-honey/">https://fieldlogix.com/email-honey/</a>
<a href="https://fieldlogix.com/tag/aberdeen-group/">https://fieldlogix.com/tag/aberdeen-group/</a>
<a href="https://fieldlogix.com/tag/realignment/">https://fieldlogix.com/tag/realignment/</a>
<a href="https://fieldlogix.com/tag/sprint/">https://fieldlogix.com/tag/sprint/</a>
<a href="https://fieldlogix.com/tag/kern-county/">https://fieldlogix.com/tag/kern-county/</a>
<a href="https://fieldlogix.com/tag/fleet-fleetmanagement/">https://fieldlogix.com/tag/fleet-fleetmanagement/</a>
<a href="https://fieldlogix.com/tag/gps-fleet-devices/">https://fieldlogix.com/tag/gps-fleet-devices/</a>
<a href="https://fieldlogix.com/tag/city-of-san-diego/">https://fieldlogix.com/tag/city-of-san-diego/</a>
<a href="https://fieldlogix.com/tools/dash-camera-benefits-fleets/">https://fieldlogix.com/tools/dash-camera-benefits-fleets/</a>
<a href="https://fieldlogix.com/tag/bmw/">https://fieldlogix.com/tag/bmw/</a>
<a href="https://fieldlogix.com/tag/driving/">https://fieldlogix.com/tag/driving/</a>
<a href="https://fieldlogix.com/tag/gsp-busts-burglar/">https://fieldlogix.com/tag/gsp-busts-burglar/</a>
<a href="https://fieldlogix.com/tag/sdbj-fastest-growing-companies/">https://fieldlogix.com/tag/sdbj-fastest-growing-companies/</a>
<a href="https://fieldlogix.com/tag/fleet-tracking-system/">https://fieldlogix.com/tag/fleet-tracking-system/</a>
<a href="https://fieldlogix.com/tag/sunshine-landscape/">https://fieldlogix.com/tag/sunshine-landscape/</a>
<a href="https://fieldlogix.com/tools/4-ways-goose-can-help-your-meal-delivery-company/">https://fieldlogix.com/tools/4-ways-goose-can-help-your-meal-delivery-company/</a>
<a href="https://fieldlogix.com/tag/roslyn-cumming/">https://fieldlogix.com/tag/roslyn-cumming/</a>
<a href="https://fieldlogix.com/tag/rising-gas-prices/">https://fieldlogix.com/tag/rising-gas-prices/</a>
<a href="https://fieldlogix.com/tag/parolee-monitoring-2/">https://fieldlogix.com/tag/parolee-monitoring-2/</a>
<a href="https://fieldlogix.com/q2-2024-fieldlogix-feature-updates/">https://fieldlogix.com/q2-2024-fieldlogix-feature-updates/</a>
<a href="https://fieldlogix.com/emaint-fieldlogix/">https://fieldlogix.com/emaint-fieldlogix/</a>
<a href="https://fieldlogix.com/tag/ramsey-county/">https://fieldlogix.com/tag/ramsey-county/</a>
<a href="https://fieldlogix.com/tag/essex/">https://fieldlogix.com/tag/essex/</a>
<a href="https://fieldlogix.com/tag/section-179/">https://fieldlogix.com/tag/section-179/</a>
<a href="https://fieldlogix.com/tag/emissions/">https://fieldlogix.com/tag/emissions/</a>
<a href="https://fieldlogix.com/tag/route-efficiency/">https://fieldlogix.com/tag/route-efficiency/</a>
<a href="https://fieldlogix.com/tag/walmart/">https://fieldlogix.com/tag/walmart/</a>
<a href="https://fieldlogix.com/tag/autism/">https://fieldlogix.com/tag/autism/</a>
<a href="https://fieldlogix.com/tag/hybrid/">https://fieldlogix.com/tag/hybrid/</a>
<a href="https://fieldlogix.com/tag/fleet-safety-tips/">https://fieldlogix.com/tag/fleet-safety-tips/</a>
<a href="https://fieldlogix.com/tag/ifta/">https://fieldlogix.com/tag/ifta/</a>
<a href="https://fieldlogix.com/goose_terms/">https://fieldlogix.com/goose_terms/</a>
<a href="https://fieldlogix.com/tag/tracking/">https://fieldlogix.com/tag/tracking/</a>
<a href="https://fieldlogix.com/tag/home-depot/">https://fieldlogix.com/tag/home-depot/</a>
<a href="https://fieldlogix.com/tag/domain-awareness-system/">https://fieldlogix.com/tag/domain-awareness-system/</a>
<a href="https://fieldlogix.com/tag/greenhouse-gas/">https://fieldlogix.com/tag/greenhouse-gas/</a>
<a href="https://fieldlogix.com/5x5/">https://fieldlogix.com/5x5/</a>
<a href="https://fieldlogix.com/tag/att-fleet/">https://fieldlogix.com/tag/att-fleet/</a>
<a href="https://fieldlogix.com/tag/tracking-devices/">https://fieldlogix.com/tag/tracking-devices/</a>
<a href="https://fieldlogix.com/tag/comprehensive-safety-analysis-2010/">https://fieldlogix.com/tag/comprehensive-safety-analysis-2010/</a>
<a href="https://fieldlogix.com/tag/gps-tracking-devices/">https://fieldlogix.com/tag/gps-tracking-devices/</a>
<a href="https://fieldlogix.com/tag/hvac/">https://fieldlogix.com/tag/hvac/</a>
<a href="https://fieldlogix.com/service_logic_landing_page/">https://fieldlogix.com/service_logic_landing_page/</a>
<a href="https://fieldlogix.com/tag/fuel-consumption/">https://fieldlogix.com/tag/fuel-consumption/</a>
<a href="https://fieldlogix.com/tag/aclu/">https://fieldlogix.com/tag/aclu/</a>
<a href="https://fieldlogix.com/tag/advanced-auto-parts/">https://fieldlogix.com/tag/advanced-auto-parts/</a>
<a href="https://fieldlogix.com/tag/gps-phone/">https://fieldlogix.com/tag/gps-phone/</a>
<a href="https://fieldlogix.com/tag/mobile-worker/">https://fieldlogix.com/tag/mobile-worker/</a>
<a href="https://fieldlogix.com/tag/gps-asset-management/">https://fieldlogix.com/tag/gps-asset-management/</a>
<a href="https://fieldlogix.com/tag/melting-pot/">https://fieldlogix.com/tag/melting-pot/</a>
<a href="https://fieldlogix.com/tag/driver/">https://fieldlogix.com/tag/driver/</a>
<a href="https://fieldlogix.com/tag/summer-driver-safety/">https://fieldlogix.com/tag/summer-driver-safety/</a>
<a href="https://fieldlogix.com/tag/stolen-vehicle-recovery/">https://fieldlogix.com/tag/stolen-vehicle-recovery/</a>
<a href="https://fieldlogix.com/tag/gps-stalking/">https://fieldlogix.com/tag/gps-stalking/</a>
<a href="https://fieldlogix.com/tag/phh-arval/">https://fieldlogix.com/tag/phh-arval/</a>
<a href="https://fieldlogix.com/tag/personal-use-work-vehicle/">https://fieldlogix.com/tag/personal-use-work-vehicle/</a>
<a href="https://fieldlogix.com/tag/south-tyneside/">https://fieldlogix.com/tag/south-tyneside/</a>
<a href="https://fieldlogix.com/tag/ned-pepper/">https://fieldlogix.com/tag/ned-pepper/</a>
<a href="https://fieldlogix.com/tag/systems/">https://fieldlogix.com/tag/systems/</a>
<a href="https://fieldlogix.com/tag/carb/">https://fieldlogix.com/tag/carb/</a>
<a href="https://fieldlogix.com/tag/devices/">https://fieldlogix.com/tag/devices/</a>
<a href="https://fieldlogix.com/tag/ai-jobs/">https://fieldlogix.com/tag/ai-jobs/</a>
<a href="https://fieldlogix.com/tag/todd-humphreys/">https://fieldlogix.com/tag/todd-humphreys/</a>
<a href="https://fieldlogix.com/tag/vehicle-manufacturers/">https://fieldlogix.com/tag/vehicle-manufacturers/</a>
<a href="https://fieldlogix.com/tag/gps-crime/">https://fieldlogix.com/tag/gps-crime/</a>
<a href="https://fieldlogix.com/route_optimization_2/">https://fieldlogix.com/route_optimization_2/</a>
<a href="https://fieldlogix.com/tag/nafa/">https://fieldlogix.com/tag/nafa/</a>
<a href="https://fieldlogix.com/tag/jeep-liberty/">https://fieldlogix.com/tag/jeep-liberty/</a>
<a href="https://fieldlogix.com/tag/sex-offenders/">https://fieldlogix.com/tag/sex-offenders/</a>
<a href="https://fieldlogix.com/tag/best-fleet/">https://fieldlogix.com/tag/best-fleet/</a>
<a href="https://fieldlogix.com/tag/android-app/">https://fieldlogix.com/tag/android-app/</a>
<a href="https://fieldlogix.com/tag/chief-deputy-francis-moore/">https://fieldlogix.com/tag/chief-deputy-francis-moore/</a>
<a href="https://fieldlogix.com/tag/sukvinder-matto/">https://fieldlogix.com/tag/sukvinder-matto/</a>
<a href="https://fieldlogix.com/tag/texting/">https://fieldlogix.com/tag/texting/</a>
<a href="https://fieldlogix.com/tag/gps-fleet-tracking-systems/">https://fieldlogix.com/tag/gps-fleet-tracking-systems/</a>
<a href="https://fieldlogix.com/field-resource-management-5-reasons/">https://fieldlogix.com/field-resource-management-5-reasons/</a>
<a href="https://fieldlogix.com/fieldlogix-wennsoft-benefits-operations/">https://fieldlogix.com/fieldlogix-wennsoft-benefits-operations/</a>
<a href="https://fieldlogix.com/tag/san-diego-100-fastest/">https://fieldlogix.com/tag/san-diego-100-fastest/</a>
<a href="https://fieldlogix.com/tag/gps-management-system/">https://fieldlogix.com/tag/gps-management-system/</a>
<a href="https://fieldlogix.com/tag/johnny-ray-morgan/">https://fieldlogix.com/tag/johnny-ray-morgan/</a>
<a href="https://fieldlogix.com/tag/fleet-fleetmanagement-telematics-iot-gpsfleettracking/">https://fieldlogix.com/tag/fleet-fleetmanagement-telematics-iot-gpsfleettracking/</a>
<a href="https://fieldlogix.com/tag/fuel-costs/">https://fieldlogix.com/tag/fuel-costs/</a>
<a href="https://fieldlogix.com/improve_driver_safety-2/">https://fieldlogix.com/improve_driver_safety-2/</a>
<a href="https://fieldlogix.com/tag/best-gps/">https://fieldlogix.com/tag/best-gps/</a>
<a href="https://fieldlogix.com/tag/gps-savings/">https://fieldlogix.com/tag/gps-savings/</a>
<a href="https://fieldlogix.com/tow-truck-gps-tracking/">https://fieldlogix.com/tow-truck-gps-tracking/</a>
<a href="https://fieldlogix.com/v5-update/">https://fieldlogix.com/v5-update/</a>
<a href="https://fieldlogix.com/tag/jobs/">https://fieldlogix.com/tag/jobs/</a>
<a href="https://fieldlogix.com/case_taxonomies/featured/">https://fieldlogix.com/case_taxonomies/featured/</a>
<a href="https://fieldlogix.com/tag/vehicle-recovery/">https://fieldlogix.com/tag/vehicle-recovery/</a>
<a href="https://fieldlogix.com/fleet-telematics-in-insurance/">https://fieldlogix.com/fleet-telematics-in-insurance/</a>
<a href="https://fieldlogix.com/tag/real-time/">https://fieldlogix.com/tag/real-time/</a>
<a href="https://fieldlogix.com/tag/dunkin-donuts/">https://fieldlogix.com/tag/dunkin-donuts/</a>
<a href="https://fieldlogix.com/fieldlogix_comparison-gt-fm/">https://fieldlogix.com/fieldlogix_comparison-gt-fm/</a>
<a href="https://fieldlogix.com/tag/burger-king/">https://fieldlogix.com/tag/burger-king/</a>
<a href="https://fieldlogix.com/tag/sergeant-colin-coyle/">https://fieldlogix.com/tag/sergeant-colin-coyle/</a>
<a href="https://fieldlogix.com/roi-results/">https://fieldlogix.com/roi-results/</a>
<a href="https://fieldlogix.com/tag/american-recovery-and-reinvestment-act/">https://fieldlogix.com/tag/american-recovery-and-reinvestment-act/</a>
<a href="https://fieldlogix.com/tag/fuel-tax/">https://fieldlogix.com/tag/fuel-tax/</a>
<a href="https://fieldlogix.com/tag/gps-vehicle-tracking/">https://fieldlogix.com/tag/gps-vehicle-tracking/</a>
<a href="https://fieldlogix.com/tag/dylan-villarreal/">https://fieldlogix.com/tag/dylan-villarreal/</a>
<a href="https://fieldlogix.com/tag/grmn/">https://fieldlogix.com/tag/grmn/</a>
<a href="https://fieldlogix.com/delivery_drivers/">https://fieldlogix.com/delivery_drivers/</a>
<a href="https://fieldlogix.com/5-free-fuel-savings-tips/">https://fieldlogix.com/5-free-fuel-savings-tips/</a>
<a href="https://fieldlogix.com/rental-program/">https://fieldlogix.com/rental-program/</a>
<a href="https://fieldlogix.com/tag/california-department-of-corrections/">https://fieldlogix.com/tag/california-department-of-corrections/</a>
<a href="https://fieldlogix.com/tag/dartmouth-massachusetts/">https://fieldlogix.com/tag/dartmouth-massachusetts/</a>
<a href="https://fieldlogix.com/tag/truck-tracking/">https://fieldlogix.com/tag/truck-tracking/</a>
<a href="https://fieldlogix.com/tag/fuel-price-impact/">https://fieldlogix.com/tag/fuel-price-impact/</a>
<a href="https://fieldlogix.com/new-product-updates/">https://fieldlogix.com/new-product-updates/</a>
<a href="https://fieldlogix.com/dashboard-camera-protects-tools-equipment/">https://fieldlogix.com/dashboard-camera-protects-tools-equipment/</a>
<a href="https://fieldlogix.com/tag/nafed2025/">https://fieldlogix.com/tag/nafed2025/</a>
<a href="https://fieldlogix.com/tag/gps-tracking-device/">https://fieldlogix.com/tag/gps-tracking-device/</a>
<a href="https://fieldlogix.com/tag/fireprotectionleadership/">https://fieldlogix.com/tag/fireprotectionleadership/</a>
<a href="https://fieldlogix.com/tag/california-department-of-corrections-and-rehabilitation/">https://fieldlogix.com/tag/california-department-of-corrections-and-rehabilitation/</a>
<a href="https://fieldlogix.com/tag/telematics-industry/">https://fieldlogix.com/tag/telematics-industry/</a>
<a href="https://fieldlogix.com/tag/vehicle-gps-systems/">https://fieldlogix.com/tag/vehicle-gps-systems/</a>
<a href="https://fieldlogix.com/improve-fleets-health/">https://fieldlogix.com/improve-fleets-health/</a>
<a href="https://fieldlogix.com/telematics-insurance-policies/">https://fieldlogix.com/telematics-insurance-policies/</a>
<a href="https://fieldlogix.com/tag/audi/">https://fieldlogix.com/tag/audi/</a>
<a href="https://fieldlogix.com/medical-delivery-tracking/">https://fieldlogix.com/medical-delivery-tracking/</a>
<a href="https://fieldlogix.com/tag/street-cameras/">https://fieldlogix.com/tag/street-cameras/</a>
<a href="https://fieldlogix.com/payroll-fraud-calculator-results/">https://fieldlogix.com/payroll-fraud-calculator-results/</a>
<a href="https://fieldlogix.com/tag/nicole-ozer/">https://fieldlogix.com/tag/nicole-ozer/</a>
<a href="https://fieldlogix.com/tag/business-driver-magazine/">https://fieldlogix.com/tag/business-driver-magazine/</a>
<a href="https://fieldlogix.com/tag/northumbria/">https://fieldlogix.com/tag/northumbria/</a>
<a href="https://fieldlogix.com/tag/jeremy-durrwachter/">https://fieldlogix.com/tag/jeremy-durrwachter/</a>
<a href="https://fieldlogix.com/tag/gps-management/">https://fieldlogix.com/tag/gps-management/</a>
<a href="https://fieldlogix.com/tag/fleets-envoirnmental-impact/">https://fieldlogix.com/tag/fleets-envoirnmental-impact/</a>
<a href="https://fieldlogix.com/tag/david-charris/">https://fieldlogix.com/tag/david-charris/</a>
<a href="https://fieldlogix.com/fuel_expense_calc_results/">https://fieldlogix.com/fuel_expense_calc_results/</a>
<a href="https://fieldlogix.com/home-speed-test/">https://fieldlogix.com/home-speed-test/</a>
<a href="https://fieldlogix.com/tag/usc/">https://fieldlogix.com/tag/usc/</a>
<a href="https://fieldlogix.com/tag/fleet-accidents/">https://fieldlogix.com/tag/fleet-accidents/</a>
<a href="https://fieldlogix.com/tag/aicareers/">https://fieldlogix.com/tag/aicareers/</a>
<a href="https://fieldlogix.com/tag/bls-trucking/">https://fieldlogix.com/tag/bls-trucking/</a>
<a href="https://fieldlogix.com/tag/spoof/">https://fieldlogix.com/tag/spoof/</a>
<a href="https://fieldlogix.com/tag/scavenger-hunt/">https://fieldlogix.com/tag/scavenger-hunt/</a>
<a href="https://fieldlogix.com/tag/7-11-robbery/">https://fieldlogix.com/tag/7-11-robbery/</a>
<a href="https://fieldlogix.com/tag/trucks/">https://fieldlogix.com/tag/trucks/</a>
<a href="https://fieldlogix.com/testing-vpc-form/">https://fieldlogix.com/testing-vpc-form/</a>
<a href="https://fieldlogix.com/tag/u-s-supreme-court/">https://fieldlogix.com/tag/u-s-supreme-court/</a>
<a href="https://fieldlogix.com/tag/gps-mapping/">https://fieldlogix.com/tag/gps-mapping/</a>
<a href="https://fieldlogix.com/tag/abc-2020/">https://fieldlogix.com/tag/abc-2020/</a>
<a href="https://fieldlogix.com/tag/mobile-asset-management/">https://fieldlogix.com/tag/mobile-asset-management/</a>
<a href="https://fieldlogix.com/improve-fleet-safety-2/">https://fieldlogix.com/improve-fleet-safety-2/</a>
<a href="https://fieldlogix.com/tag/fleet-management-system/">https://fieldlogix.com/tag/fleet-management-system/</a>
<a href="https://fieldlogix.com/tag/jaycee-dugard/">https://fieldlogix.com/tag/jaycee-dugard/</a>
<a href="https://fieldlogix.com/tag/gps-navigation/">https://fieldlogix.com/tag/gps-navigation/</a>
<a href="https://fieldlogix.com/tag/dashcampolicy/">https://fieldlogix.com/tag/dashcampolicy/</a>
<a href="https://fieldlogix.com/tag/commercial-drivers/">https://fieldlogix.com/tag/commercial-drivers/</a>
<a href="https://fieldlogix.com/tag/jones-middle-school/">https://fieldlogix.com/tag/jones-middle-school/</a>
<a href="https://fieldlogix.com/tag/shotspotter/">https://fieldlogix.com/tag/shotspotter/</a>
<a href="https://fieldlogix.com/tag/bob-allen/">https://fieldlogix.com/tag/bob-allen/</a>
<a href="https://fieldlogix.com/tag/winter-blend-gas/">https://fieldlogix.com/tag/winter-blend-gas/</a>
<a href="https://fieldlogix.com/tag/fuel/">https://fieldlogix.com/tag/fuel/</a>
<a href="https://fieldlogix.com/tag/gps-satellite/">https://fieldlogix.com/tag/gps-satellite/</a>
<a href="https://fieldlogix.com/tag/green-gps/">https://fieldlogix.com/tag/green-gps/</a>
<a href="https://fieldlogix.com/tag/doi/">https://fieldlogix.com/tag/doi/</a>
<a href="https://fieldlogix.com/tag/state-fleet/">https://fieldlogix.com/tag/state-fleet/</a>
<a href="https://fieldlogix.com/media-waiver/">https://fieldlogix.com/media-waiver/</a>
<a href="https://fieldlogix.com/tag/university-of-texas/">https://fieldlogix.com/tag/university-of-texas/</a>
<a href="https://fieldlogix.com/tag/gps-tracker/">https://fieldlogix.com/tag/gps-tracker/</a>
<a href="https://fieldlogix.com/tag/clean-cities/">https://fieldlogix.com/tag/clean-cities/</a>
<a href="https://fieldlogix.com/tag/kirsten-bokenkamp/">https://fieldlogix.com/tag/kirsten-bokenkamp/</a>
<a href="https://fieldlogix.com/tag/vehicle-tracking-systems/">https://fieldlogix.com/tag/vehicle-tracking-systems/</a>
<a href="https://fieldlogix.com/tag/walmart-lawsuit/">https://fieldlogix.com/tag/walmart-lawsuit/</a>
<a href="https://fieldlogix.com/personal_vehicle_use-2/">https://fieldlogix.com/personal_vehicle_use-2/</a>
<a href="https://fieldlogix.com/august-2022-fieldlogix-enhancements/">https://fieldlogix.com/august-2022-fieldlogix-enhancements/</a>
<a href="https://fieldlogix.com/tag/peter-maass/">https://fieldlogix.com/tag/peter-maass/</a>
<a href="https://fieldlogix.com/tag/best-gps-fleet-tracking/">https://fieldlogix.com/tag/best-gps-fleet-tracking/</a>
<a href="https://fieldlogix.com/tag/microsoft/">https://fieldlogix.com/tag/microsoft/</a>
<a href="https://fieldlogix.com/use-telematics-to-write-more-commercial-auto-policies/">https://fieldlogix.com/use-telematics-to-write-more-commercial-auto-policies/</a>
<a href="https://fieldlogix.com/tag/u-s-department-of-justice/">https://fieldlogix.com/tag/u-s-department-of-justice/</a>
<a href="https://fieldlogix.com/tag/dispatching/">https://fieldlogix.com/tag/dispatching/</a>
<a href="https://fieldlogix.com/tag/fleet-gps-tracking/">https://fieldlogix.com/tag/fleet-gps-tracking/</a>
<a href="https://fieldlogix.com/tag/gps-vehicle-tracking-system/">https://fieldlogix.com/tag/gps-vehicle-tracking-system/</a>
<a href="https://fieldlogix.com/reduce-labor-costs-2-0/">https://fieldlogix.com/reduce-labor-costs-2-0/</a>
<a href="https://fieldlogix.com/fieldlogix-training-center-37jfasdxdsgs/">https://fieldlogix.com/fieldlogix-training-center-37jfasdxdsgs/</a>
<a href="https://fieldlogix.com/tag/federal-motor-carrier-safety-administration/">https://fieldlogix.com/tag/federal-motor-carrier-safety-administration/</a>
<a href="https://fieldlogix.com/tag/car-sharing/">https://fieldlogix.com/tag/car-sharing/</a>
<a href="https://fieldlogix.com/q2-2022-feature-updates/">https://fieldlogix.com/q2-2022-feature-updates/</a>
<a href="https://fieldlogix.com/tag/lynn-brown/">https://fieldlogix.com/tag/lynn-brown/</a>
<a href="https://fieldlogix.com/tag/global-positioning-system/">https://fieldlogix.com/tag/global-positioning-system/</a>
<a href="https://fieldlogix.com/tag/sustainability/">https://fieldlogix.com/tag/sustainability/</a>
<a href="https://fieldlogix.com/tag/bank-robbery/">https://fieldlogix.com/tag/bank-robbery/</a>
<a href="https://fieldlogix.com/tag/best/">https://fieldlogix.com/tag/best/</a>
<a href="https://fieldlogix.com/tag/productivity/">https://fieldlogix.com/tag/productivity/</a>
<a href="https://fieldlogix.com/tag/vehicle-fleet/">https://fieldlogix.com/tag/vehicle-fleet/</a>
<a href="https://fieldlogix.com/tag/san-diego/">https://fieldlogix.com/tag/san-diego/</a>
<a href="https://fieldlogix.com/tag/green/">https://fieldlogix.com/tag/green/</a>
<a href="https://fieldlogix.com/tag/fleet-maintenance/">https://fieldlogix.com/tag/fleet-maintenance/</a>
<a href="https://fieldlogix.com/tag/car-theft/">https://fieldlogix.com/tag/car-theft/</a>
<a href="https://fieldlogix.com/tag/whitinsville-golf-club/">https://fieldlogix.com/tag/whitinsville-golf-club/</a>
<a href="https://fieldlogix.com/2022-fieldlogix-feature-updates/">https://fieldlogix.com/2022-fieldlogix-feature-updates/</a>
<a href="https://fieldlogix.com/tag/brake/">https://fieldlogix.com/tag/brake/</a>
<a href="https://fieldlogix.com/fleet-insurance-telematics/">https://fieldlogix.com/fleet-insurance-telematics/</a>
<a href="https://fieldlogix.com/advanced-telematics-ga/">https://fieldlogix.com/advanced-telematics-ga/</a>
<a href="https://fieldlogix.com/fleet_idling2/">https://fieldlogix.com/fleet_idling2/</a>
<a href="https://fieldlogix.com/tag/university-of-southern-california/">https://fieldlogix.com/tag/university-of-southern-california/</a>
<a href="https://fieldlogix.com/tag/boston-police/">https://fieldlogix.com/tag/boston-police/</a>
<a href="https://fieldlogix.com/tag/fleet-operations/">https://fieldlogix.com/tag/fleet-operations/</a>
<a href="https://fieldlogix.com/tools/2023-section-179-gps-equipment-tax-deduction-calculator/">https://fieldlogix.com/tools/2023-section-179-gps-equipment-tax-deduction-calculator/</a>
<a href="https://fieldlogix.com/tag/ai/">https://fieldlogix.com/tag/ai/</a>
<a href="https://fieldlogix.com/tag/vehicle-tracking/">https://fieldlogix.com/tag/vehicle-tracking/</a>
<a href="https://fieldlogix.com/tag/dair/">https://fieldlogix.com/tag/dair/</a>
<a href="https://fieldlogix.com/tag/utica-college/">https://fieldlogix.com/tag/utica-college/</a>
<a href="https://fieldlogix.com/tag/truck-emissions/">https://fieldlogix.com/tag/truck-emissions/</a>
<a href="https://fieldlogix.com/tag/phcc/">https://fieldlogix.com/tag/phcc/</a>
<a href="https://fieldlogix.com/tag/mycars/">https://fieldlogix.com/tag/mycars/</a>
<a href="https://fieldlogix.com/tag/gps-fleet-management-system/">https://fieldlogix.com/tag/gps-fleet-management-system/</a>
<a href="https://fieldlogix.com/tag/automotive-fleet/">https://fieldlogix.com/tag/automotive-fleet/</a>
<a href="https://fieldlogix.com/tag/7-eleven-robbery/">https://fieldlogix.com/tag/7-eleven-robbery/</a>
<a href="https://fieldlogix.com/tag/google-android/">https://fieldlogix.com/tag/google-android/</a>
<a href="https://fieldlogix.com/tag/tracy-morgan/">https://fieldlogix.com/tag/tracy-morgan/</a>
<a href="https://fieldlogix.com/tag/removing-tracking/">https://fieldlogix.com/tag/removing-tracking/</a>
<a href="https://fieldlogix.com/tag/bae/">https://fieldlogix.com/tag/bae/</a>
<a href="https://fieldlogix.com/tag/new-bedford/">https://fieldlogix.com/tag/new-bedford/</a>
<a href="https://fieldlogix.com/tag/lee-fullick/">https://fieldlogix.com/tag/lee-fullick/</a>
<a href="https://fieldlogix.com/goose-download/">https://fieldlogix.com/goose-download/</a>
<a href="https://fieldlogix.com/tag/truck-drivers/">https://fieldlogix.com/tag/truck-drivers/</a>
<a href="https://fieldlogix.com/tag/fleet-manager/">https://fieldlogix.com/tag/fleet-manager/</a>
<a href="https://fieldlogix.com/tag/customer-service/">https://fieldlogix.com/tag/customer-service/</a>
<a href="https://fieldlogix.com/january-2023-feature-updates/">https://fieldlogix.com/january-2023-feature-updates/</a>
<a href="https://fieldlogix.com/tag/fleet-fuel/">https://fieldlogix.com/tag/fleet-fuel/</a>
<a href="https://fieldlogix.com/tag/todd-clement/">https://fieldlogix.com/tag/todd-clement/</a>
<a href="https://fieldlogix.com/tag/onstar/">https://fieldlogix.com/tag/onstar/</a>
<a href="https://fieldlogix.com/tag/lockheed-martin/">https://fieldlogix.com/tag/lockheed-martin/</a>
<a href="https://fieldlogix.com/mobile/">https://fieldlogix.com/mobile/</a>
<a href="https://fieldlogix.com/tag/stolen-property/">https://fieldlogix.com/tag/stolen-property/</a>
<a href="https://fieldlogix.com/tag/gps-sytem/">https://fieldlogix.com/tag/gps-sytem/</a>
<a href="https://fieldlogix.com/tag/iphone-app/">https://fieldlogix.com/tag/iphone-app/</a>
<a href="https://fieldlogix.com/fleet-vehicle-software/">https://fieldlogix.com/fleet-vehicle-software/</a>
<a href="https://fieldlogix.com/tag/gps-jamming/">https://fieldlogix.com/tag/gps-jamming/</a>
<a href="https://fieldlogix.com/tag/volk-autism/">https://fieldlogix.com/tag/volk-autism/</a>
<a href="https://fieldlogix.com/tag/garmin-gps/">https://fieldlogix.com/tag/garmin-gps/</a>
<a href="https://fieldlogix.com/whats_new_2022/">https://fieldlogix.com/whats_new_2022/</a>
<a href="https://fieldlogix.com/tag/governor-brown/">https://fieldlogix.com/tag/governor-brown/</a>
<a href="https://fieldlogix.com/iot_investments/">https://fieldlogix.com/iot_investments/</a>
<a href="https://fieldlogix.com/tag/privacy/">https://fieldlogix.com/tag/privacy/</a>
<a href="https://fieldlogix.com/tag/bae-systems-advanced-technology-centre/">https://fieldlogix.com/tag/bae-systems-advanced-technology-centre/</a>
<a href="https://fieldlogix.com/tag/pay-per-mile/">https://fieldlogix.com/tag/pay-per-mile/</a>
<a href="https://fieldlogix.com/tag/gps-device/">https://fieldlogix.com/tag/gps-device/</a>
<a href="https://fieldlogix.com/tag/gps-devices/">https://fieldlogix.com/tag/gps-devices/</a>
<a href="https://fieldlogix.com/tag/state-of-california/">https://fieldlogix.com/tag/state-of-california/</a>
<a href="https://fieldlogix.com/tag/eco-friendly/">https://fieldlogix.com/tag/eco-friendly/</a>
<a href="https://fieldlogix.com/tag/drunk-driving/">https://fieldlogix.com/tag/drunk-driving/</a>
<a href="https://fieldlogix.com/tag/brevard-county-detention-center/">https://fieldlogix.com/tag/brevard-county-detention-center/</a>
<a href="https://fieldlogix.com/tag/gas-prices/">https://fieldlogix.com/tag/gas-prices/</a>
<a href="https://fieldlogix.com/tag/greenhouse-gas-emissions/">https://fieldlogix.com/tag/greenhouse-gas-emissions/</a>
<a href="https://fieldlogix.com/tag/microsoft-tracking/">https://fieldlogix.com/tag/microsoft-tracking/</a>
<a href="https://fieldlogix.com/tag/mindy-ragsdale/">https://fieldlogix.com/tag/mindy-ragsdale/</a>
<a href="https://fieldlogix.com/tag/nafedcommunity/">https://fieldlogix.com/tag/nafedcommunity/</a>
<a href="https://fieldlogix.com/tag/environmental-defense-fund/">https://fieldlogix.com/tag/environmental-defense-fund/</a>
<a href="https://fieldlogix.com/tag/fleet-tracking-systems/">https://fieldlogix.com/tag/fleet-tracking-systems/</a>
<a href="https://fieldlogix.com/dash-cameras-staged-accidents/">https://fieldlogix.com/dash-cameras-staged-accidents/</a>
<a href="https://fieldlogix.com/tag/fleet-management-association/">https://fieldlogix.com/tag/fleet-management-association/</a>
<a href="https://fieldlogix.com/tag/habitat-for-humanity/">https://fieldlogix.com/tag/habitat-for-humanity/</a>
<a href="https://fieldlogix.com/tag/fleet-management-software/">https://fieldlogix.com/tag/fleet-management-software/</a>
<a href="https://fieldlogix.com/tag/fleet-fuel-management/">https://fieldlogix.com/tag/fleet-fuel-management/</a>
<a href="https://fieldlogix.com/tag/fmcsa/">https://fieldlogix.com/tag/fmcsa/</a>
<a href="https://fieldlogix.com/tag/kristin-dacosta/">https://fieldlogix.com/tag/kristin-dacosta/</a>
<a href="https://fieldlogix.com/high-tech-sales-agents/">https://fieldlogix.com/high-tech-sales-agents/</a>
<a href="https://fieldlogix.com/nafed-raffle-winner/">https://fieldlogix.com/nafed-raffle-winner/</a>
<a href="https://fieldlogix.com/tag/goose/">https://fieldlogix.com/tag/goose/</a>
<a href="https://fieldlogix.com/tag/propublica/">https://fieldlogix.com/tag/propublica/</a>
<a href="https://fieldlogix.com/tag/imperial-beach/">https://fieldlogix.com/tag/imperial-beach/</a>
<a href="https://fieldlogix.com/tag/sun-glare-driving/">https://fieldlogix.com/tag/sun-glare-driving/</a>
<a href="https://fieldlogix.com/tag/fleet-telematics/">https://fieldlogix.com/tag/fleet-telematics/</a>
<a href="https://fieldlogix.com/tag/aggressive-driving/">https://fieldlogix.com/tag/aggressive-driving/</a>
<a href="https://fieldlogix.com/accident-losses/">https://fieldlogix.com/accident-losses/</a>
<a href="https://fieldlogix.com/tag/driver-education/">https://fieldlogix.com/tag/driver-education/</a>
<a href="https://fieldlogix.com/scroll-demo-page/">https://fieldlogix.com/scroll-demo-page/</a>
<a href="https://fieldlogix.com/tag/gps-tracking-solution/">https://fieldlogix.com/tag/gps-tracking-solution/</a>
<a href="https://fieldlogix.com/tag/national-highway-traffic-safety-administration/">https://fieldlogix.com/tag/national-highway-traffic-safety-administration/</a>
<a href="https://fieldlogix.com/eco-matics-works/">https://fieldlogix.com/eco-matics-works/</a>
<a href="https://fieldlogix.com/tag/police-chase/">https://fieldlogix.com/tag/police-chase/</a>
<a href="https://fieldlogix.com/tag/realignment-plan/">https://fieldlogix.com/tag/realignment-plan/</a>
<a href="https://fieldlogix.com/tag/find-my-iphone/">https://fieldlogix.com/tag/find-my-iphone/</a>
<a href="https://fieldlogix.com/tag/vehicle-maintenance/">https://fieldlogix.com/tag/vehicle-maintenance/</a>
<a href="https://fieldlogix.com/tag/edward-nugent/">https://fieldlogix.com/tag/edward-nugent/</a>
<a href="https://fieldlogix.com/tag/texting-while-driving/">https://fieldlogix.com/tag/texting-while-driving/</a>
<a href="https://fieldlogix.com/tag/gps-vehicles/">https://fieldlogix.com/tag/gps-vehicles/</a>
<a href="https://fieldlogix.com/dispatching2/">https://fieldlogix.com/dispatching2/</a>
<a href="https://fieldlogix.com/tag/driver-aid-information-and-recruiting/">https://fieldlogix.com/tag/driver-aid-information-and-recruiting/</a>
<a href="https://fieldlogix.com/tag/augustus-sanford/">https://fieldlogix.com/tag/augustus-sanford/</a>
<a href="https://fieldlogix.com/telematics-single-sign-on-active-directory/">https://fieldlogix.com/telematics-single-sign-on-active-directory/</a>
<a href="https://fieldlogix.com/tag/aireconomics/">https://fieldlogix.com/tag/aireconomics/</a>
<a href="https://fieldlogix.com/payroll-fraud-calculator-testing/">https://fieldlogix.com/payroll-fraud-calculator-testing/</a>
<a href="https://fieldlogix.com/tag/department-of-the-interior/">https://fieldlogix.com/tag/department-of-the-interior/</a>

<a href="https://fieldlogix.com/tag/management/">https://fieldlogix.com/tag/management/</a>
<a href="https://fieldlogix.com/tag/meal-delivery/">https://fieldlogix.com/tag/meal-delivery/</a>
<a href="https://fieldlogix.com/tag/gps-system/">https://fieldlogix.com/tag/gps-system/</a>
<a href="https://fieldlogix.com/tag/department-of-correction/">https://fieldlogix.com/tag/department-of-correction/</a>
<a href="https://fieldlogix.com/tag/rang-rover/">https://fieldlogix.com/tag/rang-rover/</a>
<a href="https://fieldlogix.com/tag/fuel-prices/">https://fieldlogix.com/tag/fuel-prices/</a>
<a href="https://fieldlogix.com/5-ways-to-better-manage-mobile-workforce/">https://fieldlogix.com/5-ways-to-better-manage-mobile-workforce/</a>
<a href="https://fieldlogix.com/tag/garminfone/">https://fieldlogix.com/tag/garminfone/</a>
<a href="https://fieldlogix.com/tag/driver-monitor/">https://fieldlogix.com/tag/driver-monitor/</a>
<a href="https://fieldlogix.com/tag/california-gas-price/">https://fieldlogix.com/tag/california-gas-price/</a>
<a href="https://fieldlogix.com/tag/florida-transportation-commission/">https://fieldlogix.com/tag/florida-transportation-commission/</a>
<a href="https://fieldlogix.com/tag/grocery-delivery/">https://fieldlogix.com/tag/grocery-delivery/</a>
<a href="https://fieldlogix.com/tag/prevent-tire-blowouts/">https://fieldlogix.com/tag/prevent-tire-blowouts/</a>
<a href="https://fieldlogix.com/tag/system/">https://fieldlogix.com/tag/system/</a>
<a href="https://fieldlogix.com/tag/garmin-phone/">https://fieldlogix.com/tag/garmin-phone/</a>
<a href="https://fieldlogix.com/tag/san-antonio/">https://fieldlogix.com/tag/san-antonio/</a>
<a href="https://fieldlogix.com/tag/truck-driver-safety/">https://fieldlogix.com/tag/truck-driver-safety/</a>
<a href="https://fieldlogix.com/tag/licence-bureau/">https://fieldlogix.com/tag/licence-bureau/</a>
<a href="https://fieldlogix.com/tag/gary-tullock/">https://fieldlogix.com/tag/gary-tullock/</a>
<a href="https://fieldlogix.com/tag/mobile-workforce-management/">https://fieldlogix.com/tag/mobile-workforce-management/</a>
<a href="https://fieldlogix.com/tag/benefits-of-route-optimization/">https://fieldlogix.com/tag/benefits-of-route-optimization/</a>
<a href="https://fieldlogix.com/miva/">https://fieldlogix.com/miva/</a>
<a href="https://fieldlogix.com/alpine-materials-testimonial/">https://fieldlogix.com/alpine-materials-testimonial/</a>
<a href="https://fieldlogix.com/tag/truck/">https://fieldlogix.com/tag/truck/</a>
<a href="https://fieldlogix.com/tag/truck-fuel-tax/">https://fieldlogix.com/tag/truck-fuel-tax/</a>
<a href="https://fieldlogix.com/scorecard-modification-feb-2023/">https://fieldlogix.com/scorecard-modification-feb-2023/</a>
<a href="https://fieldlogix.com/sierra-solutions-testimonial/">https://fieldlogix.com/sierra-solutions-testimonial/</a>
<a href="https://fieldlogix.com/goose_video/">https://fieldlogix.com/goose_video/</a>
<a href="https://fieldlogix.com/tag/city-of-boston/">https://fieldlogix.com/tag/city-of-boston/</a>
<a href="https://fieldlogix.com/sdsu/">https://fieldlogix.com/sdsu/</a>
<a href="https://fieldlogix.com/tag/traffic-navigation/">https://fieldlogix.com/tag/traffic-navigation/</a>
<a href="https://fieldlogix.com/tag/gps-navigation-system/">https://fieldlogix.com/tag/gps-navigation-system/</a>
<a href="https://fieldlogix.com/tag/sendum/">https://fieldlogix.com/tag/sendum/</a>
<a href="https://fieldlogix.com/tag/fleet-management-costs/">https://fieldlogix.com/tag/fleet-management-costs/</a>
<a href="https://fieldlogix.com/tag/alan-watkins/">https://fieldlogix.com/tag/alan-watkins/</a>
<a href="https://fieldlogix.com/tag/ifta-fuel-tax/">https://fieldlogix.com/tag/ifta-fuel-tax/</a>
<a href="https://fieldlogix.com/tag/justice-kennedy/">https://fieldlogix.com/tag/justice-kennedy/</a>
<a href="https://fieldlogix.com/use-telematics-to-compare-fleet-safety-practices/">https://fieldlogix.com/use-telematics-to-compare-fleet-safety-practices/</a>
<a href="https://fieldlogix.com/advanced-fleet-management/">https://fieldlogix.com/advanced-fleet-management/</a>
<a href="https://fieldlogix.com/innovative-fleet-driver-management/">https://fieldlogix.com/innovative-fleet-driver-management/</a>
<a href="https://fieldlogix.com/gps-tracking-companies/">https://fieldlogix.com/gps-tracking-companies/</a>
<a href="https://fieldlogix.com/dispatching/">https://fieldlogix.com/dispatching/</a>
<a href="https://fieldlogix.com/route-planning/">https://fieldlogix.com/route-planning/</a>
<a href="https://fieldlogix.com/sitemap/">https://fieldlogix.com/sitemap/</a>
<a href="https://fieldlogix.com/mobile-workforce-management/">https://fieldlogix.com/mobile-workforce-management/</a>
<a href="https://fieldlogix.com/request-a-quote-form/">https://fieldlogix.com/request-a-quote-form/</a>
<a href="https://fieldlogix.com/book-a-demo/">https://fieldlogix.com/book-a-demo/</a>
<a href="https://fieldlogix.com/about-fieldlogix-frm/">https://fieldlogix.com/about-fieldlogix-frm/</a>
<a href="https://fieldlogix.com/request-quote/">https://fieldlogix.com/request-quote/</a>
</div>

<script src="<?php bloginfo('template_url'); ?>/js/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom-new.js?ver=<?php echo time(); ?>"></script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5B5K8QQ"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->








<script>
  $(document).ready(function() {
    $("a:containsIgnoreCase('See how we transform fleets')")
      .css("background-color", "#FF7300")
      .hover(
        function() {
          $(this).css({
            "background-color": "transparent",
            border: "1px solid #FF7300",
            color: "#FF7300",
          });
        },
        function() {
          $(this).css({
            "background-color": "#FF7300",
            border: "none",
            color: "#fff",
          });
        }
      );
  });

  $.expr[":"].containsIgnoreCase = function(n, i, m) {
    return jQuery(n).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
  };

  $(document).ready(function() {
    $(".box-area").first().show();

    $(".device-tabbing p").click(function() {
      $(".device-tabbing p").removeClass("active-track");

      $(this).addClass("active-track");

      $(".box-area").hide();

      $(".box-area").eq($(this).index()).show();
    });
  });




  $(document).ready(function() {
    $(".dropdown-menu").hide();

    function toggleMenu($menu) {
      $(".dropdown-menu").not($menu).hide();
      $menu.toggle();
    }

    $(".mbl-dropdown > a img").click(function(e) {
      e.preventDefault();
      var $menu = $(this).parent().siblings(".dropdown-menu");
      toggleMenu($menu);
    });

    $(".dropdown-parent").hover(function() {
      if ($(window).width() > 1279) {
        var $menu = $(this).find('.dropdown-menu');
        toggleMenu($menu);
      }
    }, function() {
      if ($(window).width() > 1279) {
        var $menu = $(this).find('.dropdown-menu');
        $menu.hide();
      }
    });

    $(document).on("click", function(event) {
      if (
        !$(event.target).closest(".dropdown-menu").length &&
        !$(event.target).closest(".mbl-dropdown > a img").length
      ) {
        $(".dropdown-menu").hide();
      }
    });

    if ($(window).width() > 1279) {
      $(".dropdown-menu").show();
    }

    $(window).resize(function() {
      if ($(window).width() > 1279) {
        $(".dropdown-menu").show();
      } else {
        $(".dropdown-menu").hide();
      }
    });
  });


  $(document).ready(function() {
    $('.navbtn,.start-btn,.tour-btn,.see,.page-id-607 .fleet-para>a').click(function() {

      var headerHeight = $('#header').innerHeight();
      var lovePosition = $('#dash-tour').offset().top - headerHeight - 40;

      // Animate scrolling to the #love div
      $('html, body').animate({
        scrollTop: lovePosition
      }, 'slow');
    });
  });


  $.extend($.expr[':'], {
    'containsInsensitive': function(elem, i, match, array) {
      return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || '').toLowerCase()) >= 0;
    }
  });
  $('a:containsInsensitive("see how we transform fleets")').removeAttr('target');
  $('.banner-buttons a, .head-button a, .plan-head a, .banner-buttons-sol a').removeAttr('target');


  jQuery(document).ready(function() {
    jQuery(".hamburger button").click(function() {
      jQuery(this).toggleClass("active");
      jQuery("#navbar").toggleClass("active");
      if (jQuery(this).hasClass("active")) {
        jQuery("html").addClass("overflow");
      } else {
        jQuery("html").removeClass("overflow");
      }
    });
  });
</script>

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    // List of specific pages to skip the script on
    var pagesToSkip = [
      "/tres", // Change this to the actual URL path
      "/fieldlogix-training-center-37jfasdxdsgs/",
      "/tres/",
      "/?N=%242.00&O=37%25&P=%242.00&Q=&R=%242.00&S=%240.74&T=%241.26",
      "/2023-section-179-results/?N=%242.00&O=37%25&P=%242.00&Q=&R=%242.00&S=%240.74&T=%241.26",
      "/fleet-tracking-dispatching-dash-camera-plans-and-pricing"

    ];

    // Check if the current page path is in the pagesToSkip list
    if (pagesToSkip.includes(window.location.pathname)) {
      return; // Exit the script if on one of the specified pages
    }

    // Continue with the link modification logic if not on specified pages
    var links = document.querySelectorAll("a");
    links.forEach(function(link) {
      var isExternal = link.hostname !== window.location.hostname;
      if (isExternal) {
        link.setAttribute("target", "_blank");
      } else {
        link.removeAttribute("target");
      }
    });
  });








  // jQuery(document).ready(function($) {
  //   if ($("body").hasClass("page-template-custom-page")) {
  //     $("#print_result_179-new").on("click", function(e) {
  //       e.preventDefault();

  //       // Extract the dynamic content from the section
  //       var dynamicContent = $(".fleet-para").html();

  //       // Print styles
  //       var printStyles = `
  //             <style>
  //                   body {
  //                       font-family: Arial, sans-serif;
  //                       margin: 0;
  //                       padding: 20px;
  //                       background: none;
  //                   }
  //                   .fleet-para {
  //                       width: 100%;
  //                       padding: 0;
  //                       margin: 0;
  //                   }
  //                   .fleet-para h3 {
  //                       width: 50%;
  //                       text-align: center;
  //                       margin-top: 10px;
  //                       font-weight: 500;
  //                   }
  //                   .fleet-para h2 {
  //                       text-align: left;
  //                       margin-bottom: 20px;
  //                   }

  //                   #print_result_179-new {
  //                       display: none;
  //                   }

  //                   .rslt-flx-new {
  //                       width: 100%;
  //                       display: flex;
  //                       flex-direction: column;
  //                   }

  //                   .flx-rgt {
  //                       display: flex;
  //                       flex-wrap: wrap;
  //                       flex-direction: row;
  //                       width: 80%;
  //                       margin: 0 auto;
  //                   }

  //                   .rslt-flx-new .flx-rgt {
  //                       flex-direction: row;
  //                   }

  //                   .rslt-flx {
  //                       display: flex;
  //                       justify-content: space-between;
  //                       flex-wrap: wrap;
  //                       align-items: flex-start;
  //                       width: 100%;
  //                   }

  //                   .page-id-47018 .result-clc .center, 
  //                   .page-id-47030 .result-clc .center, 
  //                   .page-id-46986 .result-clc .center {
  //                       display: flex;
  //                       flex-direction: column;
  //                       justify-content: center;
  //                       align-items: center;
  //                       text-align: center;
  //                   }

  //                   .page-id-47018 .result-clc .center h1, 
  //                   .page-id-47030 .result-clc .center h1, 
  //                   .page-id-46986 .result-clc .center h1 {
  //                       justify-content: center;
  //                       color: #036;
  //                   }

  //                   .main-print h4 {
  //                       display: none;
  //                   }

  //                   .page-id-47030 .new-sub-div {
  //                       width: 50%;
  //                       margin-top: 20px;
  //                       display: flex;
  //                       flex-direction: column;
  //                       gap: 10px;
  //                   }

  //                   .page-id-47030 .new-div h4 {
  //                       text-align: center !important;
  //                       display: block;
  //                       width: 100%;
  //                   }

  //                   .new-sub-div h4, .new-sub-div h2, .new-div h2 {
  //                       text-align: left;
  //                   }

  //                   .page-id-47030 .new-sub-div {
  //                       align-items: flex-start !important;
  //                       justify-content: flex-start !important;
  //                   }

  //                   .new-sub-div {
  //                       margin-left: 20px;
  //                   }

  //                   .clear-losess {
  //                       align-items: flex-start !important;
  //                       text-align: left !important;
  //                   }

  //                   .page-id-47030 .clear-losess {
  //                       align-items: flex-start !important;
  //                       text-align: left !important;
  //                   }

  //                   .page-id-47030 .clear-losess h2 {
  //                       text-align: left !important;
  //                   }

  //                   .page-id-47030 .fleet-para h2 {
  //                       text-align: left !important;
  //                   }
  //               </style>
  //           `;

  //       // Open a new print window
  //       var printWindow = window.open("", "_blank");
  //       printWindow.document.write(`
  //               <html>
  //                   <head>
  //                       ${printStyles}
  //                   </head>
  //                   <body>
  //                       <div class="fleet-para">
  //                           ${dynamicContent} 
  //                       </div>
  //                   </body>
  //               </html>
  //           `);

  //       printWindow.document.close();

  //       // Ensure styles are applied before printing
  //       setTimeout(function() {
  //         printWindow.focus();
  //         printWindow.print();
  //         printWindow.close();
  //       }, 500);
  //     });
  //   }
  // });


</script>
</body>

</html>