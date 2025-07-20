<!-- footer begin -->
<div id="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 sm-text-center">
        <img class="logo footer-logo" src="<?php echo get_template_directory_uri(); ?>/02_images/logo.png" alt="">
        National Headquarters
8 west 126th Street, 
New York, N.Y. 10027  
<br>
		  <br>
        <a href="tel:2126335007" class="phone-number">(212) 633-5007</a>
      </div>
      <div class="col-lg-8 text-center">
        <h3 class="text-center">Sign Up to Receive Healthy Eating Tips</h3>
        <p>Natural Remedies Straight to Your Inbox!</p>
        <?php echo do_shortcode('[contact-form-7 id="1dc4db5" title="Newsletter Form"]'); ?>
		  
		  <a href="https://calendly.com/consultation-ofh/30min" class="btn-custom" target="_blank">Schedule Consultation</a>
      </div>
      <div class="col-lg-2 text-lg-end text-center">
        <h3 class="text-center">SITE MAP</h3>
        <ul class="quick-links text-center">
          <li><a href="https://healthyboost.life/">Home</a></li>
          <li><a href="https://healthyboost.life/menu/">Menu</a></li>
          <li><a href="https://healthyboost.life/about/">About</a></li>
          <li><a href="https://healthyboost.life/license/">License</a></li>
          <li><a href="https://healthyboost.life/contact/">Contact</a></li>
          <li><a href="https://healthyboost.life/location-selection/">Location Selection</a></li>
        </ul>
      </div>

    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p>© 2025 Healthy Boost All rights reserved.</p>
        </div>
        <div class="col-lg-6 text-lg-end text-center">
          <div class="terms-policy">
			  <a href="https://healthyboost.life/applicant-certification/">Applicant Certification </a>
			  <a href="https://healthyboost.life/investment-risk-disclosure/">Investment Risk  </a>
			  <a href="https://healthyboost.life/earnings-disclaimer/">Earnings Disclaimer  </a>
			  <a href="https://healthyboost.life/refund-and-cancellation-policy/">Refund Policy </a>
			  <a href="https://healthyboost.life/privacy-policy/">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer close -->

<div id="preloader">
            <div class="preloader1"></div>
        </div>



<!-- Javascript Files
    ================================================== -->
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/designesia.js"></script>

<!-- RS5.0 Core JS Files -->
<script src="<?php echo get_template_directory_uri(); ?>/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script src="<?php echo get_template_directory_uri(); ?>/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

<!-- RS5.0 Extensions Files -->
<script src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/form.js"></script>

<script>
  jQuery(document).ready(function() {
    // revolution slider
    jQuery("#revolution-slider").revolution({
      sliderType: "standard",
      sliderLayout: "fullscreen",
      delay: 9000000,
      navigation: {
        arrows: {
          enable: true
        }
      },
      parallax: {
        type: "mouse",
        origo: "slidercenter",
        speed: 2000,
        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
      },
      spinner: "off",
      gridwidth: 1140,
      gridheight: 600,
      disableProgressBar: "on"
    });
  });

//   $('.form-control').unwrap();
//   $('.control-label').unwrap();
</script>
<script>
  $(document).ready(function() {
    $('.newsletter-form p').contents().unwrap();
  });
	
</script>






<?php wp_footer(); ?>
</body>

</html>
