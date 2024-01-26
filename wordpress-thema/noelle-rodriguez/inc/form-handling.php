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
    $subject = "Nieuwe aanmelding: $name";

    $message = "<dl>";
    $message .= "<dt><strong>Name:</strong></dt><dd><br />$name</dd>";
    $message .= "<dt><br /><strong>Email:</strong></dt><dd><br />$email</dd>";
    $message .= "<dt><br /><strong>Phone:</strong></dt><dd><br />$phone</dd>";
    $message .= "<dt><br /><strong>Instagram:</strong></dt><dd><br /><a href='https://www.instagram.com/$instagram'>https://www.instagram.com/$instagram</a></dd></dl>";

    $message .= "<br /><br /><dl>";
    $message .= "<dt><strong>Goal:</strong></dt><dd><br />$goal</dd>";
    $message .= "<dt><br /><strong>Gender:</strong></dt><dd><br />$gender</dd>";
    $message .= "<dt><br /><strong>Age:</strong></dt><dd><br />$age</dd></dl>";

    $message .= "<br /><br /><dl>";
    $message .= "<dt><strong>Motivation:</strong></dt><dd><br />$motivation</dd>";
    $message .= "<dt><br /><strong>Why me:</strong></dt><dd><br />$whyme</dd>";
    $message .= "<dt><br /><strong>Best Outcome:</strong></dt><dd><br />$best_outcome</dd></dl>";

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
