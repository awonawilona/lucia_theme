<?php


// Author: Pablo Rueda
// Theme: Lucia Theme
// Owner: www.threepress.es


// Adding WP Functions & Theme Support
function luciatheme_theme_support() {

	// Default thumbnail size
	set_post_thumbnail_size( 150, 150, true);

	add_image_size( 'luciatheme-thumb', 150 );

	// Add RSS Support
	//add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
	$GLOBALS['content_width'] = apply_filters( 'luciatheme_theme_support', 980 );

} /* end theme support */

add_action( 'after_setup_theme', 'luciatheme_theme_support' );


function post_image_sizes($sizes){
    $custom_sizes = array(
        'luciatheme-thumb' => 'Lucia thumb'
    );
    return array_merge( $sizes, $custom_sizes );
}
add_filter('image_size_names_choose', 'post_image_sizes');


add_action( 'admin_menu', 'remove_menus' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1568, 9999 );



add_action( 'after_setup_theme', function() {
    add_theme_support( 'responsive-embeds' );
} );



// Dashboard Setup
function remove_menus(){
  
  // remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack* 
  remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings
  
}
add_action( 'admin_menu', 'remove_menus' );
