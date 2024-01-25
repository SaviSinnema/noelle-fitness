<?php 
    add_action( 'init', 'handle_form_submission' );

    function handle_form_submission() {

    $goal_options = array('Weight loss', 'Building muscle', 'Body recomposition', 'Healthier lifestyle'); 
    $goal = isset($_POST['goal']) && in_array($_POST['goal'], $goal_options) ? sanitize_text_field($_POST['goal']) : '';

    $gender_options = array('Male', 'Female');
    $gender = isset($_POST['gender']) && in_array($_POST['gender'], $gender_options) ? sanitize_text_field($_POST['gender']) : '';

    $age_options = array('Under 18', 'Between 18 and 25', 'Between 25 and 30', 'Over 30'); 
    $age = isset($_POST['age']) && in_array($_POST['age'], $age_options) ? intval($_POST['age']) : '';

    $motivation = sanitize_textarea_field($_POST['motivation']);
    $whyme = sanitize_textarea_field($_POST['whyme']);
    $best_outcome = sanitize_textarea_field($_POST['best_outcome']);

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = intval($_POST['phone']);
    $instagram = sanitize_text_field($_POST['instagram']);

    // Send email notification
    $to = 'mail@annekesinnema.nl';
    $subject = 'Nieuwe aanmelding';

    $message .= "<dl>";
    $message .= "<dt><strong>Name:</strong></dt><dd>$name</dd>";
    $message .= "<dt><strong>Email:</strong></dt><dd>$email</dd>";
    $message .= "<dt><strong>Phone:</strong></dt><dd>$phone</dd>";
    $message .= "<dt><strong>Instagram:</strong></dt><dd>$instagram</dd></dl>";

    $message .= "<dl>";
    $message .= "<dt><strong>Goal:</strong></dt><dd>$goal</dd>";
    $message .= "<dt><strong>Gender:</strong></dt><dd>$gender</dd>";
    $message .= "<dt><strong>Age:</strong></dt><dd>$age</dd></dl>";

    $message .= "<dl>";
    $message .= "<dt><strong>Motivation:</strong></dt><dd>$motivation</dd>";
    $message .= "<dt><strong>Why me:</strong></dt><dd>$whyme</dd>";
    $message .= "<dt><strong>Best Outcome:</strong></dt><dd>$best_outcome</dd>"
    $message .= "</dl>";

    $headers = array('Content-Type: text/html; charset=UTF-8');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitted']) && $_POST['submitted'] == 1) {
        // Verify that the name and email fields are not empty
        $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
        $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';

        if (empty($name) || empty($email)) {
            exit; // Stop further execution
        } else {
            wp_mail($to, $subject, $message, $headers);
            exit; 
        }
    }

}
?>
