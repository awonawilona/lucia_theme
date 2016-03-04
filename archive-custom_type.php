<?php
/*
 * CUSTOM POST TYPE ARCHIVE TEMPLATE
 *
 * This is the custom post type archive template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be archive-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<div class="container">

					<section id="post-<?php the_ID(); ?>" role="section" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<h1 class="section-title"><?php post_type_archive_title(); ?></h1>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" role="article">

								<header class="article-header">

									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p><?php
										printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'mieletheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'mieletheme' ) ), get_author_posts_url( get_the_author_meta( 'ID' ) ));
									?></p>

								</header>

								<div class="entry-content">

									<?php the_excerpt(); ?>

								</div>

								<footer class="article-footer">

								</footer>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'mieletheme' ); ?></h1>
										</header>
										<div class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'mieletheme' ); ?></p>
										</div>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the custom posty type archive template.', 'mieletheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</section>

					<?php // get_sidebar(); ?>

				</div>

			</main>

<?php get_footer(); ?>
