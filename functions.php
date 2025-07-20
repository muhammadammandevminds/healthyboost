<?php 
// Change WordPress default sender name and email
add_filter( 'wp_mail_from_name', function( $name ) {
    return get_bloginfo( 'Healthy Boost' ); // Use your site name
});

// ====stripe===

function enqueue_jquery() {
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'enqueue_jquery');
// Handle form data via session
add_action('init', function() {
    if (!session_id()) {
        session_start();
    }

    // Capture form data via AJAX
    if (isset($_POST['cf7_payment_data'])) {
        $_SESSION['cf7_form_data'] = json_decode(stripslashes($_POST['cf7_payment_data']), true);
        wp_send_json_success();
    }
});

// Fetch session data after payment
add_action('template_redirect', function () {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['get_cf7_session_data'])) {
        session_start();
        $data = $_SESSION['cf7_form_data'] ?? [];
        wp_send_json_success($data);
    }
});

