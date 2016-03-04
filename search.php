<?php get_header(); ?>

			<main id="main" role="main">

        <div class="container">

						<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'mieletheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<section id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="section">

								<header class="entry-header section-header">

									<h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                  						<p class="byline entry-meta vcard">
                    							<?php printf( __( 'Posted %1$s by %2$s', 'mieletheme' ),
                   							    /* the time the post was published */
                   							    '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                      							    /* the author of the post */
                       							    '<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
                  						</p>

								</header>

								<article class="entry-content">

										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'mieletheme' ) . '</span>' ); ?>

								</article>

								<footer class="section-footer">

									<?php if(get_the_category_list(', ') != ''): ?>
                  					<?php printf( __( 'Filed under: %1$s', 'mieletheme' ), get_the_category_list(', ') ); ?>
                  					<?php endif; ?>

                 					<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'mieletheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer> <!-- end section footer -->

							</section>

						<?php endwhile; ?>

								<?php bones_page_navi(); ?>

							<?php else : ?>

									<section id="post-not-found" class="hentry cf">
										<header class="section-header">
											<h1><?php _e( 'Sorry, No Results.', 'mieletheme' ); ?></h1>
										</header>
										<article class="entry-content">
											<p><?php _e( 'Try your search again.', 'mieletheme' ); ?></p>
										</article>
										<footer class="section-footer">
												<p><?php _e( 'This is the error message in the search.php template.', 'mieletheme' ); ?></p>
										</footer>
									</section>

							<?php endif; ?>

							<?php // get_sidebar(); ?>

					</div>

			</main>

<?php get_footer(); ?>
