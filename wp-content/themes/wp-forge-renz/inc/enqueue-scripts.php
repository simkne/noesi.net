<?php
/**
 * main enqueue scripts, for loading scripts, styles. Some into the header, some load in the footer.
 * All should then be minified.
 *
 */
function wpstarter_scripts() {
    if (!is_admin()) {
        // The wpstarter-functions.js file will allow you to add functions to make any additional scripts you add work, i.e. lightbox or maybe a carousel script
        //wp_enqueue_script( 'orbit-js', get_template_directory_uri() . '/js/foundation/foundation.orbit.js', array('jquery','foundation-js'), '', true );
        wp_enqueue_script( 'wpstarter-js', get_stylesheet_directory_uri() . '/js/wpstarter-functions.js', array('jquery','foundation-js','orbit-js'), '', true );
        //wp_enqueue_script( 'scrollanimation-js', get_stylesheet_directory_uri() . '/js/classie.js', array('jquery','foundation-js','orbit-js'), '', true );
        echo('2222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222222');
    }

}

/**
 * addding of stxles to the childtheme
 */
function wpstarter_styles(){
    if (!is_admin()) {
        //TODO: replace with Wordpress http://genericons.com/
        //enabling dashicons in the frontend
        wp_enqueue_style( 'dashicons' );
    }

}
add_action( 'wp_enqueue_scripts', 'wpstarter_styles' );
add_action( 'wp_enqueue_scripts', 'wpstarter_scripts' );

/**
 * zaccordeon script, for category animatino

function zaccordeon_script(){
     wp_enqueue_script( 'zaccordion-js', get_stylesheet_directory_uri() . '/js/jquery.zaccordion.min.js', array('jquery','foundation-js'), '', true );
}
// TODO: only include script on required pages
add_action( 'wp_enqueue_scripts', 'zaccordeon_script', 0 ); */