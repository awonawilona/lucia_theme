<?php


// Author: Pablo Rueda
// Theme: Lucia Theme
// Owner: www.threepress.es


function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/js/'), true );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_template_directory() . '/assets/stylus/'), 'all' );

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);

if ( ! is_admin() ) add_action( 'wp_enqueue_scripts', 'jquery_enqueue', 11);

function jquery_enqueue() {
   wp_deregister_script( 'jquery' );
   wp_register_script( 'jquery', "//code.jquery.com/jquery-3.5.0.min.js", false, null );
   wp_enqueue_script( 'jquery' );
}

