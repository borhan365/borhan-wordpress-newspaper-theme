<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/

get_header(); ?>

    <!-- BLOG PAGE BEGINS -->
    <section class="azad-section azad-blog">
        <div class="azad-container">
			<div class="blog-container">
				<?php 
					if ( have_posts() ) : 
						get_template_part( 'template-parts/content', 'home' );						
					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
			</div>
			
			<?php
				
				the_posts_navigation( array(
					'show_all'           => true,
					'prev_text'          => __( '<span></span>', AZAD_NEWS_TEXTDOMAIN ),
					'next_text'          => __( '<span></span>', AZAD_NEWS_TEXTDOMAIN ),
					'screen_reader_text' => __( 'Posts navigation', AZAD_NEWS_TEXTDOMAIN ),// to remove put space
					'before_page_number' => '<b>' ,
					'after_page_number'  => '</b>' ,
				));
			
			?>
        </div>
    </section><!-- ends blog page -->

<?php get_footer();