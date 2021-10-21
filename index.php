<?php

/*
 *
 * index.php: The most generic template file in a WordPress theme
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
          <?php printf( __( 'Posted', 'luciatheme' ).' %1$s %2$s',
          /* the time the post was published */
          '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
          /* the author of the post */
          '<span class="by">'.__( 'by', 'luciatheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
          ); ?>
        </p>

      </header><?php // end section-header ?>

      <article class="section-article">

        <?php the_content(); ?>

      </article><?php // end section-article ?>

      <footer class="section-footer">
        <p class="footer-comment-count">
          <?php comments_number( __( '<span>No</span> Comments', 'luciatheme' ), __( '<span>One</span> Comment', 'luciatheme' ), __( '<span>%</span> Comments', 'luciatheme' ) );?>
        </p>


        <?php printf( '<p class="footer-category">' . __('filed under', 'luciatheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

        <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'luciatheme' ) . '</span> ', ', ', '</p>' ); ?>


      </footer><?php // end section-footer ?>

    </section>

    <?php endwhile; ?>  

      <?php // bones_page_navi(); ?>

    <?php else : ?>

      <section id="post-not-found">

        <header class="section-header">

          <h1><?php _e( 'Oops, Post Not Found!', 'luciatheme' ); ?></h1>

        </header>

        <article class="section-article">

          <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'luciatheme' ); ?></p>

        </article>

        <footer class="section-footer">

          <p><?php _e( 'This is the error message in the index.php template.', 'luciatheme' ); ?></p>

        </footer>

      </section>

    <?php endif; ?>

    <?php get_sidebar(); ?>
                
  </main> <!-- end #main -->

<?php get_footer(); ?>