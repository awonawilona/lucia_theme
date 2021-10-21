<?php


// Author: Pablo Rueda
// Theme: Lucia Theme
// Owner: www.threepress.es

// For more info:
// https://cmb2.io/ 

if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}



require_once(get_template_directory().'/functions/cpt/frontpage-post-type.php');

?>