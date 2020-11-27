<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/

get_header(); ?>

    <!-- TAG PAGE BEGINS -->
    <section class="azad-section azad-tag">
        <div class="azad-container">
			<div class="tag-container">
				<?php 
					if ( have_posts() ) : 
						get_template_part( 'template-parts/content', 'home' );
					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
			</div>
        </div>
    </section><!-- ends tag page -->

<?php get_footer();