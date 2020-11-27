<?php
/**
*-----------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------
*/ 
get_header(); ?>

	<!-- 404 SECTION BEGINS -->
	<section class="azad-section azad-404 header-fixed">
        <div class="azad-container">
			<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', AZAD_NEWS_TEXTDOMAIN ); ?><?php get_search_form(); ?></p>
			
			<?php //get_sidebar(); ?>
		</div>
	</section><!-- ends 404 section -->

<?php get_footer();