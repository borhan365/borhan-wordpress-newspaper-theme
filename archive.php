<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/

get_header(); ?>

    <!-- ARCHIVE PAGE BEGINS -->
    <section class="azad-section azad-archive header-fixed">
        <div class="azad-container">
			<div class="archive-container">
				<?php 
					if ( have_posts() ) : 
						get_template_part( 'template-parts/content', 'archive' );
					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
			</div>
        </div>
    </section><!-- ends archive page -->

<?php get_footer();