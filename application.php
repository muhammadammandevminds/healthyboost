<?php
//Template Name:application
get_header();

?>
<!-- subheader -->
<section id="subheader" class="jarallax text-light">
    <img src="<?php echo get_template_directory_uri(); ?>/02_images/background/new-bg.png" class="jarallax-img" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center wow fadeInUp">
                    <h2 class="s1 mb-40  outline-heading">Kiosk Licensing </h2>
                    <h2>Application</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://healthyboost.life/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">License</li>
            </ol>
        </div>
    </div>
</section>
<!-- subheader close -->

<section class="contact-main">
    <div class="container">
  <?php echo do_shortcode('[contact-form-7 id="fc82811" title="Application form"]'); ?>
  
  <!-- Custom Pay Now button -->
		<div class="payNowButton-wrap">
    <button id="payNowButton">
      Submit and Pay Now
    </button>
		</div>
</div>
	
	
<script>
document.addEventListener('DOMContentLoaded', function () {
  const stripeUrl = 'https://buy.stripe.com/00g8wP5E82JlcW45kk';
  const payNowButton = document.getElementById('payNowButton');
  const urlParams = new URLSearchParams(window.location.search);
  const paid = urlParams.get('paid');

  // Function to restore form data from localStorage
  const restoreFormData = (form) => {
    const savedData = localStorage.getItem('cf7_form_data');
    if (!savedData) return;

    const formData = JSON.parse(savedData);

    Object.entries(formData).forEach(([name, value]) => {
      const field = form.querySelector(`[name="${name}"]`);

      // Handle radio buttons
      const radioButtons = form.querySelectorAll(`input[type="radio"][name="${name}"]`);
      if (radioButtons.length > 0) {
        radioButtons.forEach(radio => {
          if (radio.value === value) {
            radio.checked = true;
            radio.dispatchEvent(new Event('change', { bubbles: true }));
          }
        });
        return;
      }

      // Handle checkboxes
      const checkboxes = form.querySelectorAll(`input[type="checkbox"][name="${name}"]`);
      if (checkboxes.length > 0) {
        checkboxes.forEach(checkbox => {
          if (Array.isArray(value) ? value.includes(checkbox.value) : checkbox.value === value) {
            checkbox.checked = true;
            checkbox.dispatchEvent(new Event('change', { bubbles: true }));
          }
        });
        return;
      }

      // Handle other input types
      if (field) {
        field.value = value;
        field.dispatchEvent(new Event('input', { bubbles: true }));
        field.dispatchEvent(new Event('change', { bubbles: true }));
      }
    });

    const submitButton = form.querySelector('input[type="submit"], button[type="submit"]');
    if (submitButton) submitButton.style.display = 'inline-block';
    if (payNowButton) payNowButton.style.display = 'none';

    localStorage.removeItem('cf7_form_data');
  };

  // Form handling interval
  const formInterval = setInterval(() => {
    const form = document.querySelector('.wpcf7 form');
    if (!form) return;

    clearInterval(formInterval);

    const submitButton = form.querySelector('input[type="submit"], button[type="submit"]');
    if (submitButton) submitButton.style.display = 'none';
    if (payNowButton) payNowButton.style.display = 'inline-block';

    if (paid === 'true') {
      setTimeout(() => restoreFormData(form), 800); // ensure CF7 is initialized
    }

    payNowButton.addEventListener('click', function (e) {
      e.preventDefault();

      let isValid = true;
      const formData = {};

      // Collect form data
      form.querySelectorAll('input, textarea, select').forEach(el => {
        if (!el.name) return;

        const isRequired = el.required || el.hasAttribute('aria-required');

        // Handle radio buttons by name
        if (el.type === 'radio') {
          if (!formData[el.name]) {
            const selected = form.querySelector(`input[type="radio"][name="${el.name}"]:checked`);
            if (selected) {
              formData[el.name] = selected.value;
            } else if (isRequired) {
              isValid = false;
            }
          }
        }

        // Handle checkboxes
        else if (el.type === 'checkbox') {
          if (!formData[el.name]) formData[el.name] = [];
          if (el.checked) formData[el.name].push(el.value);
        }

        // Handle other fields (text, select, etc.)
        else {
          const value = el.value.trim();
          formData[el.name] = value;

          if (isRequired && !value) {
            isValid = false;
            el.style.border = '2px solid red';
          } else {
            el.style.border = '';
          }
        }
      });

      // If the form is not valid, stop the process
      if (!isValid) {
        alert('Please fill in all required fields.');
        return;
      }

      // Save form data to localStorage
      localStorage.setItem('cf7_form_data', JSON.stringify(formData));

      // Redirect to Stripe URL
      window.location.href = stripeUrl;
    });
  }, 200);
});


</script>





    </div>
</section>


<div id="thankYouPopup" class="thank-you-popup" style="display:none;">
  <div class="popup-content">
    <h2>🎉 Thank you!</h2>
    <p>Your application has been received.</p>
    <button onclick="document.getElementById('thankYouPopup').style.display='none'">Close</button>
  </div>
</div> 

<script>
document.addEventListener('wpcf7mailsent', function(event) {
  document.getElementById('thankYouPopup').style.display = 'flex';
}, false);
</script>
 


<?php get_footer(); ?>