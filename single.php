<?php get_header(); ?>

            <main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                <div class="container">

                    <header class="header-category">
                <div class="header-category__container">
                  <h1><?php echo get_the_title();  ?></h1>
                </div>
              </header>

                    <section id="post-<?php the_ID(); ?>" role="section">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <?php $categories = get_the_category(); ?>

                        <?php if (in_category( 'news' ) or in_category( 'news-it' )) { ?>
                        <div class="news-meta">
                            <div class="news-meta-left"><a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="link_to_category"><?php _e('Back to','bestcasestheme'); ?> <?php echo $categories[0]->name; ?></a></div>
                            <div class="news-meta-right"><p class="entry-time"><time class="updated entry-time" datetime="<?php echo get_the_time('Y-m-d'); ?>" itemprop="datePublished"><?php echo get_the_time(get_option('date_format')); ?></time></p></div>
                        </div>
                        <?php } else { ?>
                        <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>" class="link_to_category"><?php echo $categories[0]->name; ?></a>
                        <?php } ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>

                    <?php else : ?>

                    </section>

                    <section id="post-not-found" class="hentry cf">
                            <header class="section-header">
                                <h1><?php _e( 'Oops, Post Not Found!', 'bestcasestheme' ); ?></h1>
                            </header>
                            <article class="entry-content">
                                <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bestcasestheme' ); ?></p>
                            </article>
                            <footer class="section-footer">
                                    <p><?php _e( 'This is the error message in the single.php template.', 'bestcasestheme' ); ?></p>
                            </footer>
                    </section>

                    <?php endif; ?>

                    <footer class="article-footer">

                        <?php // get_socialmedia_btns(); ?>

                    </footer>

                    <?php //get_sidebar(); ?>

                </div>

            </main>

<?php get_footer(); ?>
