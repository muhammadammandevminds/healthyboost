<?php
//Template Name:contact
get_header();

?>

<!-- subheader -->
<section id="subheader" class="jarallax text-light img-overlay">
    <img src="<?php echo get_template_directory_uri(); ?>/02_images/background/new-bg.png" class="jarallax-img" alt="">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center wow fadeInUp">
                    <h2 class="s1 mb-40 outline-heading">Get In</h2>
                    <h2 class="s2">Touch</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://healthyboost.life/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="no-bottom no-top">


    <section>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 sm-text-center">
					<p class="contact-text">Have a question, partnership idea, or want to learn more about our juice bar licensing? Fill out the form below, and a team member will reach out!</p>
                    <h3>Our Location</h3>
                    National Headquarters 8 West 126th Street New York, NY 10027<br>
                   <a href="tel:2126335007" class="contact-info">T: (212) 633-5007</a> <br>
                    <a href="mailto:Support@ofhinitiative.com" class="contact-info">E: Support@ofhinitiative.com</a><br>
                </div>
                <div class="col-lg-8">
                    <?php echo do_shortcode('[contact-form-7 id="a938466" title="contact form 2"]'); ?>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>