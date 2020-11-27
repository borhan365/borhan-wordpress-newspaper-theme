<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/
get_header(); ?>

    <!-- ABOUT SECTION BEGINS -->
    <section class="azad-section azad-single-page">
        <div class="azad-container">
		
            <?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>
                    <header class="article-header">
						<?php the_title(  '<h2 class="article-title">', '</h2>' ); ?>
						<?php //do_action( 'azad_posted_on' ); ?>
                    </header>
                    <div class="article-body">
                        <?php
							if ( ! get_the_content() ) {
								echo '<p>May be content field is empty.</p>'; edit_post_link( 'Edit this post...', '<p>', '</p>' );
							} else {
								the_content();
							}
						?>
                    </div>
					<footer class="article-footer">
                        <?php //do_action( 'azad_posted_in' ); ?>
						<?php //edit_post_link( 'Edit this post...', '<p>', '</p>' ); ?>
                    </footer>
                </article>
            <?php endwhile; else: ?>
                <p>No content found for now. You can try <a href="<?php site_url(); ?>"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif; ?>			
			
        </div>
    </section><!-- ends about section -->

<?php get_footer(); ?>