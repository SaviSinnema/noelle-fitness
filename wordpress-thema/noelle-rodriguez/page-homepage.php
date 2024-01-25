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

<?php if( have_rows('steps') ): 
    while( have_rows('steps') ): the_row(); 
?>
    <section class="area-2">
        <h2><?php the_sub_field('steps_title'); ?></h2>
        <ol class="steps">
            <?php if( have_rows('step_1') ): 
            while( have_rows('step_1') ): the_row(); 
            ?>
                <li>
                    <div class="step_number">1</div>
                    <h3><?php the_sub_field('step_1_title'); ?></h3>
                    <p><?php the_sub_field('step_1_description'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/arrow.svg" alt="" class="step_arrow">
                </li>
            <?php endwhile; endif; ?>

            <?php if( have_rows('step_2') ): 
                while( have_rows('step_2') ): the_row(); 
            ?>
                <li>
                    <div class="step_number">2</div>
                    <h3><?php the_sub_field('step_2_title'); ?></h3>
                    <p><?php the_sub_field('step_2_description'); ?></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/media/arrow.svg" alt="" class="step_arrow">
                </li>
            <?php endwhile; endif; ?>

            <?php if( have_rows('step_3') ): 
                while( have_rows('step_3') ): the_row(); 
            ?>
                <li>
                    <div class="step_number">3</div>
                    <h3><?php the_sub_field('step_3_title'); ?></h3>
                    <p><?php the_sub_field('step_3_description'); ?></p>
                </li>
        <?php endwhile; endif; ?>
        </ol>
    </section>
<?php endwhile; endif; ?>

<!-------------------->

<?php if( have_rows('the_program_includes') ): 
    while( have_rows('the_program_includes') ): the_row(); ?>

    <section class="area-3 area-split benefits-wrapper">
        <?php if (get_sub_field('benefits_title')): ?>
            <h2><?php the_sub_field('benefits_title'); ?></h2>
        <?php endif; ?>

    <?php 
        if( have_rows('call_to_action') ): 
        while( have_rows('call_to_action') ): the_row(); 
    ?>

            <div class="call-to-action">
                <p size="large">
                    <?php the_sub_field('call_to_action'); ?>
                </p>

                <?php if( get_sub_field('call_to_action_link') ): ?>
                    <a class="cta" href="<?php the_sub_field('call_to_action_link'); ?>">
                        <?php the_sub_field('call_to_action_link_microcopy'); ?>
                    </a>
                <?php else: ?>
                    <a class="cta" href="#get-started">
                        Get started
                    </a>
                <?php endif; ?>
            </div>

        <?php endwhile; 
            endif; 
        ?>
            <div class="benefits benefits-1">
                <?php the_sub_field('benefits_part_1'); ?>
            </div>
            <div class="benefits benefits-2">
                <?php the_sub_field('benefits_part_2'); ?>
            </div>

            <div class="puppy <?php if (get_sub_field('maak_foto_puur_decoratief')): ?>decorative<?php endif; ?>">
                <?php if( get_sub_field('benefits_photo') ): 
                    $benefits_photo = get_sub_field('benefits_photo'); //acf field name ?>
                    <img src="<?php echo esc_url($benefits_photo['url']); ?>" alt="<?php echo esc_attr($benefits_photo['alt']); ?>" />
                <?php else: ?>
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/media/noelle-rodriguez-small.jpeg" width="605" height="908" alt="Noelle Rodriguez smiling in the gym"> -->
                <?php endif; ?>

            </div>
    </div>
    
</section>
<?php 
endwhile;
endif; ?>

<?php if( get_field('inspirational_slogan') ): ?>
    <section class="area-4">
        <div class="filter"></div>
        <p><?php the_field('inspirational_slogan'); ?></p>
    </section>
<?php endif; ?>

<?php if( have_rows('about_noelle') ): 
    while( have_rows('about_noelle') ): the_row(); 
?>
        <section class="area-5 area-split about-wrapper">
            <h2 class="sr-only">About me</h2>
            <div class="puppy">
                <?php 
                    $picture_in_footer = get_sub_field('picture_in_footer'); //acf field name
                    if( !empty( $picture_in_footer ) ): ?>
                        <img src="<?php echo esc_url($picture_in_footer['url']); ?>" alt="<?php echo esc_attr($picture_in_footer['alt']); ?>" />
                    <?php else: ?>
                        <img src="media/noelle-dumbbell-small.jpeg" width="764" height="1144" alt="Noelle Rodriguez squatting in front of a dumbbell">
                    <?php endif; ?>
            </div>
            <div class="about-noelle">
                <?php the_sub_field('about_noelle_text'); ?>

                <a href="<?php the_sub_field('instagram'); ?>" class="instagram">
                    <img src="<?php echo get_template_directory_uri(); ?>/media/instagram.svg" width="50" height="50" alt="Follow me on Instagram">
                </a>
            </div>
        </section>
<?php endwhile; endif; ?>

<footer>
    <a href="#">
        <?php if( get_field('general_logo') ): 
            $general_logo = get_field('general_logo'); ?>
            <img src="<?php echo esc_url($general_logo['url']); ?>" alt="<?php echo esc_attr($general_logo['alt']); ?>" />
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/media/logo.png" width="231" height="101" alt="Noelle Rodriguez Fitness logo">
        <?php endif; ?>
    </a>

    <p>
        <a href="<?php the_field('terms-and-conditions'); ?>">Terms and Conditions</a>
    </p>

</footer>

<script type="text/javascript" src="/wp-content/themes/noelle-rodriguez/js/form.js"></script>

<?php
// get_sidebar();
// get_footer();
