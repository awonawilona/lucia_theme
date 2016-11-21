c<?php get_header(); ?>

	<main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<div id="content">

			<header class="header-category">
        <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
      </header>

			<section id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="section">

				<header class="entry-header section-header">

					<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<p class="byline entry-meta vcard">
						<?php printf( __( 'Posted', 'bestcasestheme' ).' %1$s %2$s',
          							     /* the time the post was published */
          							     '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
               								/* the author of the post */
               								'<span class="by">'.__('by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
            							); ?>
					</p>

				</header>

				<article class="entry-content cf">

					<?php the_post_thumbnail( 'bones-thumb-300' ); ?>

					<?php the_excerpt(); ?>

				</article>

				<footer class="section-footer">

				</footer>

			</section>

			<?php endwhile; ?>

					<?php bones_page_navi(); ?>

			<?php else : ?>

					<section id="post-not-found" class="hentry cf">
						<header class="section-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bestcasestheme' ); ?></h1>
						</header>
						<article class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bestcasestheme' ); ?></p>
						</article>
						<footer class="section-footer">
								<p><?php _e( 'This is the error message in the archive.php template.', 'bestcasestheme' ); ?></p>
						</footer>
					</section>

			<?php endif; ?>


		</div>

	</main>

<?php get_footer(); ?>