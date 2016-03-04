<?php get_header(); ?>

			<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<div class="container">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php
							/*
							 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
							 *
							 * So this function will bring in the needed template file depending on what the post
							 * format is. The different post formats are located in the post-formats folder.
							 *
							 *
							 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "fosrmat.php" FOR POSTS THAT AREN'T
							 * A SPECIFIC POST FORMAT.
							 *
							 * If you want to remove post formats, just delete the post-formats folder and
							 * replace the function below with the contents of the "format.php" file.
							*/
							get_template_part( 'post-formats/format', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php else : ?>

						<section id="post-not-found" class="hentry cf">
								<header class="section-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'mieletheme' ); ?></h1>
								</header>
								<article class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'mieletheme' ); ?></p>
								</article>
								<footer class="section-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'mieletheme' ); ?></p>
								</footer>
						</section>

					<?php endif; ?>

					<?php //get_sidebar(); ?>

				</div>

			</main>

<?php get_footer(); ?>
