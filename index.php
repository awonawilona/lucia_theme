<?php get_header(); ?>
  <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

    <div class="container">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <section id="post-<?php the_ID(); ?>" role="section" itemscope itemtype="http://schema.org/BlogPosting">

        <header class="section_header">

          <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          <p class="byline entry-meta vcard">
                                                                <?php printf( __( 'Posted', 'bestcasestheme' ).' %1$s %2$s',
                              /* the time the post was published */
                              '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                              /* the author of the post */
                              '<span class="by">'.__( 'by', 'bestcasestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                          ); ?>
          </p>

        </header>

        <article class="entry-content">
          <?php the_content(); ?>
        </article>

        <footer class="section-footer cf">
          <p class="footer-comment-count">
            <?php comments_number( __( '<span>No</span> Comments', 'bestcasestheme' ), __( '<span>One</span> Comment', 'bestcasestheme' ), __( '<span>%</span> Comments', 'bestcasestheme' ) );?>
          </p>


          <?php printf( '<p class="footer-category">' . __('filed under', 'bestcasestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

          <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bestcasestheme' ) . '</span> ', ', ', '</p>' ); ?>
        </footer>

      </section>

    <?php endwhile; ?>

        <?php bones_page_navi(); ?>

    <?php else : ?>

      <section id="post-not-found" class="hentry cf">
        <header class="section-header">
          <h1><?php _e( 'Oops, Post Not Found!', 'bestcasestheme' ); ?></h1>
        </header>
        <section class="entry-content">
          <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bestcasestheme' ); ?></p>
        </section>
        <footer class="section-footer">
          <p><?php _e( 'This is the error message in the index.php template.', 'bestcasestheme' ); ?></p>
        </footer>
      </section>

    <?php endif; ?>

    <?php //get_sidebar(); ?>
    </div>
   </main>

<?php get_footer(); ?>
