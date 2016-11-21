<?php get_header(); ?>

			<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<div class="container">

					<section id="post-not-found" role="section">

						<header class="section-header">

							<h1 class="page-title" itemprop="headline"><?php _e( 'Ooooooooops!', 'bestcasestheme' ); ?></h1>
							<h3 class="page-subtitle"><?php _e( 'It’s not what you are looking for?<br/>Try again!', 'bestcasestheme' ); ?></h3>

						</header> <?php // end section header ?>

						<article class="entry-content" itemprop="sectionBody">
							<p>Error Page: 404</p>
							<p>Here are some helpful links instead:</p>
							<div class="nav-main-404">
		    				<nav role="navigation">
		    					<?php wp_nav_menu(array(
				          'container' => false,                           // remove nav container
				          'container_class' => '',                        // class of container (should you choose to use it)
				          'menu' => __( 'The Main Menu', 'bestcasestheme' ),  // nav name
				          'menu_class' => '',                             // adding custom nav class
				          'theme_location' => 'main-nav',                 // where it's located in the theme
				          'before' => '',                                 // before the menu
				          'after' => '',                                  // after the menu
				          'link_before' => '',                            // before each link
				          'link_after' => '',                             // after each link
				          'depth' => 0,                                   // limit the depth of the nav
				          'fallback_cb' => '',                             // fallback function (if there is one)
				          )); ?>
		    				</nav>
		          </div>

						</article> <?php // end .entry-content ?>


						<footer class="section-footer">

						</footer>

						<?php comments_template(); ?>

					</section>

				</div>

				<?php // get_sidebar(); ?>

			</main>

<?php get_footer(); ?>

