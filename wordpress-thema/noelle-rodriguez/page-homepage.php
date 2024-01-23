<?php
/**
 * Template Name: Homepage 
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package noelle-rodriguez
 */

get_header();
?>

<div class="get-started-form">
    <?php include get_template_directory() . '/get_started_form.php'; ?>
</div>

<?php if( get_field('general_logo') ): 
    $general_logo = get_field('general_logo'); //acf field name
    if( !empty( $general_logo ) ): ?>
    <img src="<?php echo esc_url($general_logo['url']); ?>" alt="<?php echo esc_attr($general_logo['alt']); ?>" />
<?php endif; endif; ?>

<?php if( get_field('header_photo') ): 
    $header_photo = get_field('header_photo'); //acf field name
    if( !empty( $header_photo ) ): ?>
    <img src="<?php echo esc_url($header_photo['url']); ?>" alt="<?php echo esc_attr($header_photo['alt']); ?>" />
<?php endif; endif; ?>

<?php if( get_field('cta_form') ): ?>
    <!-- get the ninja form code -->
    <?php the_field('cta_form'); ?>

<?php endif; ?>

<hr>

<?php if( have_rows('steps') ): 
    while( have_rows('steps') ): the_row(); 
?>

    <h2><?php the_sub_field('steps_title'); ?></h2>

    <ol>

    <?php if( have_rows('step_1') ): 
        while( have_rows('step_1') ): the_row(); 
    ?>
        <li>
            <h3><?php the_sub_field('step_1_title'); ?></h3>
            <?php the_sub_field('step_1_description'); ?>
        </li>
    <?php endwhile; endif; ?>

    <?php if( have_rows('step_2') ): 
        while( have_rows('step_2') ): the_row(); 
    ?>
        <li>
            <h3><?php the_sub_field('step_2_title'); ?></h3>
            <?php the_sub_field('step_2_description'); ?>
        </li>
    <?php endwhile; endif; ?>

    <?php if( have_rows('step_3') ): 
        while( have_rows('step_3') ): the_row(); 
    ?>
        <li>
            <h3><?php the_sub_field('step_3_title'); ?></h3>
            <?php the_sub_field('step_3_description'); ?>
        </li>
    <?php endwhile; endif; ?>
    
    </ol>

<?php endwhile; endif; ?>

<hr>


<?php if( have_rows('the_program_includes') ): 
    while( have_rows('the_program_includes') ): the_row(); 
        if( have_rows('call_to_action') ): 
        while( have_rows('call_to_action') ): the_row(); 
    ?>

        <p>
            <?php the_sub_field('call_to_action'); ?>
        </p>
        <a href="<?php the_sub_field('call_to_action_link'); ?>">
            <?php the_sub_field('call_to_action_link_microcopy'); ?>
        </a>

    <?php endwhile; 
        endif; 
    ?>

    <?php the_sub_field('benefits_part_1'); ?>
    <?php the_sub_field('benefits_part_2'); ?>

    <?php 
    $benefits_photo = get_field('benefits_photo'); //acf field name

    if( !empty( $benefits_photo ) ): ?>
        <img src="<?php echo esc_url($benefits_photo['url']); ?>" alt="<?php echo esc_attr($benefits_photo['alt']); ?>" />
    <?php endif; ?>
    
<?php 
endwhile;
endif; ?>

<hr>

<?php if( get_field('inspirational_slogan') ): ?>
    <section class="area-4">
        <div class="filter"></div>
        <p><?php the_field('inspirational_slogan'); ?></p>
    </section>
<?php endif; ?>

<hr>

<?php if( have_rows('about_noelle') ): 
    while( have_rows('about_noelle') ): the_row(); 
?>
    <?php 
        $picture_in_footer = get_sub_field('picture_in_footer'); //acf field name
        if( !empty( $picture_in_footer ) ): ?>

<?php echo esc_url($picture_in_footer['url']); ?><br />

        <img src="<?php echo esc_url($picture_in_footer['url']); ?>" alt="<?php echo esc_attr($picture_in_footer['alt']); ?>" />

    <?php endif; ?>

    <?php the_sub_field('about_noelle_text'); ?>

    <a href="<?php the_sub_field('instagram'); ?>">Instagram</a>
<?php endwhile; endif; ?>


<script type="text/javascript" src="/wp-content/themes/noelle-rodriguez/js/form.js"></script>

<?php
// get_sidebar();
// get_footer();
