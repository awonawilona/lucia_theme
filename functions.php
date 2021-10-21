<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// CMB2
require_once(get_template_directory().'/functions/cmb2.php');

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php');

// Customize the WordPress login menu
require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
require_once(get_template_directory().'/functions/admin.php');

// Duplicate Post
require_once(get_template_directory().'/functions/duplicate-post.php');
