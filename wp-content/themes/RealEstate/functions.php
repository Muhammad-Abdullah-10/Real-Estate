<?php
// Stylesheet
// wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/inc/css/styles.css', array(), filemtime(get_template_directory() . '/inc/css/styles.css'), false);
// wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/inc/css/main.css'), false);
// wp_enqueue_script( 'bootstrap-js',  get_template_directory_uri() . '/inc/js/app.js'  );

// Theme Support

define("THEME_DIR", get_template_directory_uri());

function register_theme_setup()
{
    add_theme_support('custom-logo');
    add_theme_support('widgets');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('admin_bar');
    add_theme_support('widgets');
    add_filter('show_admin_bar', '__return_false');
}
add_action('after_setup_theme', 'register_theme_setup');

function bootstrap_script()
{
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_script('boot1', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'), '', true);
    wp_enqueue_script('boot2', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '', true);
    wp_enqueue_script('boot3', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), '', true);
    
    // css
    wp_register_style( 'main-css', THEME_DIR . '/style.css', array(), '1', 'all');
    wp_enqueue_style( 'main-css' );

    // js
    // wp_enqueue_script('app-js', '/inc/js/app.js');
}
add_action('wp_enqueue_scripts', 'bootstrap_script');


function register_sitebar_and_menu()
{
    register_nav_menus(array(
        'HeaderMenuOne' => 'Header Menu One',
        'FooterMenuOne' => 'Footer Menu One',
        'FooterMenuTwo' => 'Footer Menu Two',
        'FooterMenuThree' => 'Footer Menu Three',
        'FooterMenuFour' => 'Footer Menu Four',
    ));
}
add_action('after_setup_theme', 'register_sitebar_and_menu');

// GSAP
// The proper way to enqueue GSAP script in WordPress

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/inc/js/app.js', array('gsap-js'), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

// GSAP

/* Allow WebP*/
function wpdocs_add_webp( $wp_get_mime_types ) {
	$wp_get_mime_types['webp'] = 'image/webp';
	return $wp_get_mime_types;
}

add_filter( 'mime_types', 'wpdocs_add_webp' );