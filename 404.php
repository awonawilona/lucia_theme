<?php


// Author: Pablo Rueda
// Theme: Lucia Theme
// Owner: www.threepress.es

// For more info: 
// https://codex.wordpress.org/Creating_an_Error_404_Page

?>

<?php get_header(); ?>
  
  <main>

    <section class="content-not-found">

      <header class="section-header">

        <h1><?php _e( 'Content Not Found', 'luciatheme' ); ?></h1>

      </header><?php // end section-header ?>

      <article class="section-article">

				<p><?php _e( 'The content you are looking for was not found. Apologies, for the inconvenience.', 'luciatheme' ); ?></p>

      </article><?php // end section-article ?>

      <footer class="section-footer">
     
      </footer><?php // end section-footer ?>

    </section>

    <?php get_sidebar(); ?>
                
  </main> <!-- end #main -->

<?php get_footer(); ?>