<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/
while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ); ?>>
        <?php if ( has_post_thumbnail() ) : ?>
            <header class="article-header">
                <figure>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
                </figure>
            </header>
        <?php endif; ?>
			<div class="post-content">
				<div class="article-content">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php
						if ( ! get_the_content() ) {
							echo '<p>May be content field is empty.</p>'; edit_post_link( 'Edit this post...', '<p>', '</p>' );
						} else {
							//the_excerpt( 'Continue reading...' );
						}
					?>
				</div>					
				<footer class="article-footer">
					<div class="">
						<?php do_action( 'azad_posted_on' ); ?>
					</div>
				</footer>
			</div>
    </article>
<?php endwhile;