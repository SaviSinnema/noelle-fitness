<?php 
    add_action( 'init', 'handle_form_submission' );

function handle_form_submission() {

    $goal_options = array('Weight loss', 'Building muscle', 'Body recomposition', 'Healthier lifestyle'); 
    $goal = isset($_POST['goal']) && in_array($_POST['goal'], $goal_options) ? sanitize_text_field($_POST['goal']) : '';

    // $gender_options = array('Male', 'Female'); 
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

    // $age_options = array('Under 18', 'Between 18 and 25', 'Between 25 and 30', 'Over 30'); 
    $age = isset($_POST['age']) ? $_POST['age'] : '';

    $motivation = sanitize_textarea_field($_POST['motivation']);
    $whyme = sanitize_textarea_field($_POST['whyme']);
    $best_outcome = sanitize_textarea_field($_POST['best_outcome']);

    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = intval($_POST['phone']);
    $instagram = sanitize_text_field($_POST['instagram']);

    // Perform additional validation if needed

    // Send email notification
    $to = 'mail@annekesinnema.nl';
    $subject = 'Nieuwe aanmelding';

    $message = "Name: $name<br />";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Instagram: $instagram\n\n";

    $message .= "Goal: $goal\n";
    $message .= "Gender: $gender\n";
    $message .= "Age: $age\n\n";

    $message .= "Motivation:\n$motivation\n\n";
    $message .= "Why me:\n$whyme\n\n";
    $message .= "Best Outcome:\n$best_outcome\n";

    $headers = array('Content-Type: text/html; charset=UTF-8');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submitted']) && $_POST['submitted'] == 1) {
        // Verify that the name and email fields are not empty
        $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
        $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';

        if (empty($name) || empty($email)) {
            exit; // Stop further execution
        } else {
            wp_mail($to, $subject, $message, $headers);
            // exit; 
        }
    }
}
?>
