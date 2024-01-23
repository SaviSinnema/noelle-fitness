<?php
/**
 * noelle-rodriguez functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package noelle-rodriguez
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function noelle_rodriguez_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on noelle-rodriguez, use a find and replace
		* to change 'noelle-rodriguez' to the name of your theme in all the template files.
		*/
	// load_theme_textdomain( 'noelle-rodriguez', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	// add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	// add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	// register_nav_menus(
	// 	array(
	// 		'menu-1' => esc_html__( 'Primary', 'noelle-rodriguez' ),
	// 	)
	// );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// // Set up the WordPress core custom background feature.
	// add_theme_support(
	// 	'custom-background',
	// 	apply_filters(
	// 		'noelle_rodriguez_custom_background_args',
	// 		array(
	// 			'default-color' => 'ffffff',
	// 			'default-image' => '',
	// 		)
	// 	)
	// );

	// // Add theme support for selective refresh for widgets.
	// add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	// add_theme_support(
	// 	'custom-logo',
	// 	array(
	// 		'height'      => 250,
	// 		'width'       => 250,
	// 		'flex-width'  => true,
	// 		'flex-height' => true,
	// 	)
	// );
}
add_action( 'after_setup_theme', 'noelle_rodriguez_setup' );

// /**
//  * Set the content width in pixels, based on the theme's design and stylesheet.
//  *
//  * Priority 0 to make it available to lower priority callbacks.
//  *
//  * @global int $content_width
//  */
// function noelle_rodriguez_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'noelle_rodriguez_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'noelle_rodriguez_content_width', 0 );

// /**
//  * Register widget area.
//  *
//  * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
//  */
// function noelle_rodriguez_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'noelle-rodriguez' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'noelle-rodriguez' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'noelle_rodriguez_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function noelle_rodriguez_scripts() {
	wp_enqueue_style( 'noelle-rodriguez-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'noelle-rodriguez-style', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'noelle_rodriguez_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Get the current user role through the function get_user_role().
 */
function get_user_role() {
    global $current_user;

    $user_roles = $current_user->roles;
    $user_role = array_shift($user_roles);

    return $user_role;
}

/**
 * Remove unnecessary noise from the dashboard.
 */
function customize_dashboard() {
    global $wp_meta_boxes;
  
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_site_health']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    unset($wp_meta_boxes['dashboard']['normal']['high']['rank_math_dashboard_widget']);

    remove_action('welcome_panel', 'wp_welcome_panel');
}
// run the function
add_action('wp_dashboard_setup', 'customize_dashboard', 999 );

// replace the dashboard with my own anyway
require get_template_directory() . '/inc/replace-dashboard.php';

// Customize the admin navigation; remove menu items that I find are confusing for people who just want to edit the one page they have

function customize_admin_navigation() {
    remove_menu_page('edit.php');
    remove_menu_page('upload.php');
    remove_menu_page('edit-comments.php');
    remove_menu_page('separator1');
    remove_submenu_page('themes.php', 'theme-editor.php');
    remove_submenu_page('options.php', 'options-media.php');
    remove_submenu_page('options.php', 'options-discussion.php');

    // hide the customize page
    global $current_user;
    $current_user = wp_get_current_user();
    $user_name = $current_user->user_login;

    //check condition for the user means show menu for this user
    if(is_admin() &&  $user_name != 'USERNAME') {
        //We need this because the submenu's link (key from the array too) will always be generated with the current SERVER_URI in mind.
        $customizer_url = add_query_arg( 'return', urlencode( remove_query_arg( wp_removable_query_args(), wp_unslash( $_SERVER['REQUEST_URI'] ) ) ), 'customize.php' );
        remove_submenu_page( 'themes.php', $customizer_url );
   }
}
// run the function
add_action('admin_init', 'customize_admin_navigation', 999 );
 
function preset_some_admin_settings() {

    // set the Settings/Discussion fields so the client won't have to
    update_option('default_pingback_flag', false);
    update_option('default_ping_status', false);
    update_option('default_comment_status', false);
    update_option('require_name_email', false);
    update_option('comment_registration', false);
    update_option('close_comments_for_old_posts', false);
    update_option('show_comments_cookies_opt_in', false);
    update_option('thread_comments', false);
    update_option('page_comments', false);
    update_option('comments_notify', false);
    update_option('moderation_notify', false);
    update_option('comment_moderation', false);
    update_option('comment_previously_approved', false);
    update_option('show_avatars', false);

    // set Settings/Reading
    update_option('show_on_front', 'page');
    update_option('page_on_front', '2');
}
add_action('init', 'preset_some_admin_settings');

// Turn off Gutenberg editor, blegh
add_filter('use_block_editor_for_post', '__return_false');

// Remove h1, h2 and formatted text option from the wysiwyg editor
function change_editor_options($arr){
    $arr['block_formats'] = 'Paragraph=p;Heading 3=h3;Heading 4=h4';
    return $arr;
}
add_filter('tiny_mce_before_init', 'change_editor_options');


// add Advanced Custom Fields settings for the Homepage template
require get_template_directory() . '/inc/setup-ACF-home.php';

function enqueue_form_handler_script() {
    // Localize the script with a nonce
    // wp_localize_script('form-handler', 'ajax_object', array('nonce' => wp_create_nonce('noelle_nonce')));
    // wp_enqueue_script('form-handler', get_template_directory_uri() . '/inc/form-handling.php', array('jquery'), null, true);

    // Enqueue other scripts
    wp_enqueue_script('custom-form-script', get_template_directory_uri() . '/js/form.js', array('jquery'), null, true);
}

add_action('init', 'enqueue_form_handler_script');
