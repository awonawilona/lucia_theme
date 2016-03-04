<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<section id="post-<?php the_ID(); ?>" role="section">

								<header class="entry-header section-header">

									<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline vcard">
										<?php printf( __( 'Posted', 'mieletheme' ).' %1$s %2$s',
                  							     /* the time the post was published */
                  							     '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__('by', 'mieletheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>

								<article class="entry-content">

									<?php the_post_thumbnail( 'bones-thumb-300' ); ?>

									<?php the_excerpt(); ?>

								</article>

								<footer class="section-footer">

								</footer>

							</section>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<section id="post-not-found">
										<header class="section-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'mieletheme' ); ?></h1>
										</header>
										<article class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'mieletheme' ); ?></p>
										</article>
										<footer class="section-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'mieletheme' ); ?></p>
										</footer>
									</section>

							<?php endif; ?>

						</main>

					<?php // get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
