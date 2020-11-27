<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/
get_header(); ?>

    <!-- # SECTION BEGINS -->
    <section class="azad-section header-fixed">
        <div class="azad-container">
            <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>
                    <header class="azad-article-header">
                        <h2><?php the_title(); ?></h2>
						<?php do_action( 'azad_posted_on' ); ?>
                    </header>
                    <div class="azad-article-content">
                        <?php
							if ( ! get_the_content() ) {
								echo '<p>May be content field is empty.</p>'; edit_post_link( 'Edit this post...', '<p>', '</p>' );
							} else {
								the_content( 'Continue reading...' );
							}
						?>
                    </div>
					<footer class="azad-article-footer">
                        <?php do_action( 'azad_posted_in' ); ?>
						<?php edit_post_link( 'Edit this post...', '<p>', '</p>' ); ?>
                    </footer>
                </article>
            <?php endwhile; else:

                get_template_part( 'template-parts/content', 'none' );

                endif; 
            ?>
        </div>
    </section><!-- ends # section -->

<?php get_footer(); ?>