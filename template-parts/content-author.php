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
        <div class="article-body">
            <div class="article-content">
				<div class="azad-time">
					<span><?php the_time(); ?>, </span> <span><?php the_date(); ?></span>
				</div>
                <h2><a href="<?php the_permalink(); ?>">				
					<?php
				
						if ( strlen( $post->post_title ) > 200 ) {
							echo substr( the_title( $before = '', $after = '', false ), 0, 200 ) . '...'; 
						} else {
							the_title();
						}
				
					?>
				</a></h2>
                <?php
                    if ( ! get_the_content() ) {
                        echo '<p>May be content field is empty.</p>';
                    } else {
                        the_excerpt( 'Continue reading...' );
                    }
                ?>
            </div>					
            <footer class="article-footer">
                <div class="">
                    <?php the_author(); ?>
                </div>
            </footer>
        </div>
    </article>
<?php endwhile;