<?php

add_action('wp_ajax_submit_form', 'handle_form_submission');
add_action('wp_ajax_nopriv_submit_form', 'handle_form_submission');

function handle_form_submission() {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $age = intval($_POST['age']);
    $country = sanitize_text_field($_POST['country']);

    // Perform additional validation if needed

    // Send email notification
    $to = 'your-email@example.com';
    $subject = 'New Form Submission';
    $message = "Name: $name\nEmail: $email\nAge: $age\nCountry: $country";
    $headers = array('Content-Type: text/html; charset=UTF-8');

    if (wp_mail($to, $subject, $message, $headers)) {
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false));
    }

    wp_die();
}
?>
