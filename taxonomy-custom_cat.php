<?php
/*
 * CUSTOM POST TYPE TAXONOMY TEMPLATE
 *
 * This is the custom post type taxonomy template. If you edit the custom taxonomy name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom taxonomy is called "register_taxonomy('shoes')",
 * then your template name should be taxonomy-shoes.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates#Displaying_Custom_Taxonomies
*/
?>

<?php get_header(); ?>

			<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<div class="container">

						<h1 class="archive-title h2"><span><?php _e( 'Posts Categorized:', 'bestcasestheme' ); ?></span> <?php single_cat_title(); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<section id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="section">

							<header class="section-header">

								<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
								<p class="byline vcard"><?php
									printf(__('Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bestcasestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bestcasestheme')), bones_get_the_author_posts_link(), get_the_term_list( get_the_ID(), 'custom_cat', "", ", ", "" ));
								?></p>

							</header>

							<section class="entry-content">
								<?php the_excerpt( '<span class="read-more">' . __( 'Read More &raquo;', 'bestcasestheme' ) . '</span>' ); ?>

							</section>

							<footer class="section-footer">

							</footer>

						</section>

						<?php endwhile; ?>

								<?php bones_page_navi(); ?>

						<?php else : ?>

								<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bestcasestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bestcasestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the taxonomy-custom_cat.php template.', 'bestcasestheme' ); ?></p>
									</footer>
								</article>

						<?php endif; ?>

						<?php // get_sidebar(); ?>

				</div>

			</main>

<?php get_footer(); ?>
