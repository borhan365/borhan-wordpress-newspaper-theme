<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/

get_header(); ?>
	
	<!-- AUTHOR MAIN BEGINS -->
    <section class="azad-section azad-author-bio">
        <div class="azad-container">
			<div class="author-bio-container">
				<?php echo get_avatar( 120 ); ?>
				<div class="author-name"><?php the_author(); ?></div>
			</div>
			<div class="author-bottom"></div>
        </div>
    </section><!-- ends author main -->
	
    <!-- AUTHOR MAIN BEGINS -->
    <section class="azad-section azad-author">
        <div class="azad-container">
			<div class="author-container">
				<div class="author-main">
					<?php 
						if ( have_posts() ) : 
							get_template_part( 'template-parts/content', 'author' );
						else:
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>
				</div>
				<div class="author-sidebar"></div>
			</div>
        </div>
    </section><!-- ends author main -->

<?php get_footer();