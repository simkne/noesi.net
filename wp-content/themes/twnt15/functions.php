<?php

//custom scripts
// animated header from codrops

function scrpz(){



    wp_enqueue_script( 'bganim-script', get_template_directory_uri() . '/js/demo-1.js', array( 'jquery' ),  true );
    //wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ),  true );
    //wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ),  true );

}
add_action( 'wp_enqueue_scripts', 'bganim-script' );



?>