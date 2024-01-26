<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package noelle-rodriguez
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Noëlle Rodriguez Online Coaching</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;1,500&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'noelle-rodriguez' ); ?></a>

<header class="area-1 header">
    <div class="background-color"></div>
    <?php if( get_field('general_logo') ): 
        $general_logo = get_field('general_logo'); ?>
        <img src="<?php echo esc_url($general_logo['url']); ?>" alt="<?php echo esc_attr($general_logo['alt']); ?>" class="logo" />
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/media/logo.png" width="135" height="59" alt="Noelle Rodriguez Fitness logo" class="logo">
    <?php endif; ?>

    <h1>
        <span class="first-name">Noëlle</span> Rodriguez <p class="extra-info">Online Coaching</p>
    </h1>
    
    <?php if( get_field('header_photo') ): 
        $header_photo = get_field('header_photo'); ?>
        <div class="portrait">
            <img src="<?php echo esc_url($header_photo['url']); ?>" alt="<?php echo esc_attr($header_photo['alt']); ?>" class="portrait_photo" />
        </div>
    <?php else: ?>
        <div class="portrait">
            <img src="<?php echo get_template_directory_uri(); ?>/media/noelle-rodriguez-small.jpeg" width="605" height="908" alt="Noelle Rodriguez smiling in the gym" class="portrait_photo">
        </div>
    <?php endif; ?>
    
    <div class="get-started-form" id="get-started">
        <?php if( get_field('form-open', 18) ): ?>
            <?php include get_template_directory() . '/get_started_form.php'; ?>
        <?php else: ?>
            <div class="form-wrapper">
                <div>
                    <p style="font-size: 2rem">Soon, you'll be able to sign up for my coaching sessions.</p>
                    <p style="font-size: 2rem">Please check back with me later!</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</header>
