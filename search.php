<?php
/**
*-----------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------
*/
get_header(); ?>
	
	<!-- SEARCH SECTION BEGINS -->
    <section class="azad-section azad-search header-fixed">
        <div class="azad-container">
			<div class="search-container">
				<?php 
					if ( have_posts() ) : 
						get_template_part( 'template-parts/content', 'search' );
					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
			</div>
        </div>
	</section>
	<!-- ends search section -->
    
<?php get_footer(); ?>