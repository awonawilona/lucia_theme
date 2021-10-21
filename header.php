<?php

// Author: Pablo Rueda
// Theme: Lucia Theme
// Owner: www.threepress.es

?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

  <head>

    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">    <meta charset="utf-8">

    <title><?php wp_title(''); ?></title>

    <?php // mobile meta (hooray!) ?>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <!--[if IE]>
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <![endif]-->

    <?php // or, set /favicon.ico for IE10 win ?>
    <meta name="msapplication-TileColor" content="#000">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#FFF">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php // wordpress head functions ?>
    <?php wp_head(); ?>
    <?php // end of wordpress head ?>

    <?php // Google Analytics  ?>
    <?php // Reccomend uses https://www.monsterinsights.com/ ?>
    <?php // end Google Analytics ?>

  </head>

  <body <?php body_class(); ?>>  

    <header id="main-header">

      <h1 id="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

      <?php // if you'd like to use the site description you can un-comment it below ?>
      <?php // bloginfo('description'); ?>


      <nav role="navigation">
        <?php 
          wp_nav_menu(array(
             'container' => false,                           // remove nav container
             'container_class' => 'menu cf',                 // class of container (should you choose to use it)
             'menu' => __( 'The Main Menu', 'luciatheme' ),  // nav name
             'menu_class' => 'nav top-nav cf',               // adding custom nav class
             'theme_location' => 'main-nav',                 // where it's located in the theme
             'before' => '',                                 // before the menu
                   'after' => '',                                  // after the menu
                   'link_before' => '',                            // before each link
                   'link_after' => '',                             // after each link
                   'depth' => 0,                                   // limit the depth of the nav
             'fallback_cb' => ''                             // fallback function (if there is one)
          )); 
        ?>
      </nav>

    </header>