<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//Ne diraj iznad

function dotiavatar_function() {
     return '<h2>Ovo je cool </h2>';
}

function dotirating_function( $atts = array() ) {
  
    // set up default parameters
    extract(shortcode_atts(array(
     'rating' => '5'
    ), $atts));
    
    return "<h2>Rating je: $rating zvjezdice </h2>";
}

add_shortcode('dotiavatar', 'dotiavatar_function');
add_shortcode('dotirating', 'dotirating_function');

?>