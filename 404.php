<?php get_header(); ?>

			<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<div class="container">

					<section id="post-not-found" role="section">

						<header class="section-header">

							<h1 class="page-title" itemprop="headline"><?php _e( 'Epic 404 - Article Not Found', 'mieletheme' ); ?></h1>

						</header> <?php // end section header ?>

						<article class="entry-content" itemprop="sectionBody">

							<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'mieletheme' ); ?></p>

						</article> <?php // end .entry-content ?>

						<article class="search">

									<p><?php get_search_form(); ?></p>

						</article>

						<footer class="section-footer">

						</footer>

						<?php comments_template(); ?>

					</section>

				</div>

				<?php // get_sidebar(); ?>

			</main>

<?php get_footer(); ?>
