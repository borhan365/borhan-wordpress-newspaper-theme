<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/

get_header(); ?>

    <!-- CATEGORY PAGE BEGINS -->
    <section class="azad-section azad-category">
        <div class="azad-container">
		
			<div class="cat-meta">
				<div class="cat-meta-top">
					<div class="cat-meta-header">
						<h4 class="cat-title"><?php printf( __( '%s', AZAD_NEWS_TEXTDOMAIN ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h4>
						<?php
							$category_description = category_description();
							if ( ! empty( $category_description ) ) {
								echo '<div class="cat-desc">' . $category_description . '</div>';
							}
						?>
					</div>
					<div class="cat-meta-body">
						<?php if (function_exists('z_taxonomy_image')) z_taxonomy_image(); ?>
					</div>
				</div>
				
			</div>
			
			<div class="category-container">
				<?php 
					if ( have_posts() ) : 
						get_template_part( 'template-parts/content', 'category' );
					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
			</div>
        </div>
    </section><!-- ends category page -->

<?php get_footer();