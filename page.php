<?php get_header(); ?>

			<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<div class="container">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<section id="post-<?php the_ID(); ?>" role="section" itemscope itemtype="http://schema.org/BlogPosting">


						<article class="entry-content" itemprop="sectionBody">
							<?php
								// the content (pretty self explanatory huh)
								the_content();

								/*
								 * Link Pages is used in case you have posts that are set to break into
								 * multiple pages. You can remove this if you don't plan on doing that.
								 *
								 * Also, breaking content up into multiple pages is a horrible experience,
								 * so don't do it. While there are SOME edge cases where this is useful, it's
								 * mostly used for people to get more ad views. It's up to you but if you want
								 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
								 *
								 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
								 *
								*/
								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bestcasestheme' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
								) );
							?>
						</article> <?php // end .entry-content ?>

						<footer class="section-footer">

						</footer>

						<?php comments_template(); ?>

					</section>

					<?php endwhile; endif; ?>

				</div>

				<?php // get_sidebar(); ?>

			</main>


<?php get_footer(); ?>
