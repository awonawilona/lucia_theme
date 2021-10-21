<?php

/* 
 *
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 *
 */

?>

<?php get_header(); ?>
  
  <main>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section id="post-<?php the_ID(); ?>">

      <header class="section-header">

        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        <p class="byline vcard">
          <?php 
          	printf( 
	          	__( 'Posted', 'luciatheme').
	          	' <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> '
	          	.__( 'by',  'luciatheme').' <span class="author">%3$s</span>',
	          	get_the_time('Y-m-j'),
	          	get_the_time(get_option('date_format')),
	          	get_the_author_link( get_the_author_meta( 'ID' ) )
	          ); 
          ?>
        </p>

      </header><?php // end section-header ?>

      <article class="section-article">

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
				    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
				    'after'       => '</div>',
				    'link_before' => '<span>',
				    'link_after'  => '</span>',
				  ) );
				?>

      </article><?php // end section-article ?>

      <footer class="section-footer">
     
      </footer><?php // end section-footer ?>


      <?php // comments_template(); ?>

    </section>

    <?php endwhile; endif; ?>

    <?php get_sidebar(); ?>
                
  </main> <!-- end #main -->

<?php get_footer(); ?>