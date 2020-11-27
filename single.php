<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/
get_header(); ?>

    <!-- SINGLE PAGE SECTION BEGINS -->
    <section class="azad-section azad-single header-fixed">
        <div class="azad-container">
			<div class="single-wrapper">
				<div class="single-main">
					<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>
							<header class="azad-article-header">
								<h2><?php the_title(); ?></h2>
								<?php echo get_the_date(); ?>
								
								<?php if ( ! in_category( 'ভিডিও' ) ) : ?>
								    <figure><?php the_post_thumbnail( 'single' ); ?></figure>
								<?php endif; ?>
								
							</header>
							<div class="azad-article-content">
								<?php
									if ( ! get_the_content() ) {
										echo '<p>May be content field is empty.</p>'; edit_post_link( 'Edit this post...', '<p>', '</p>' );
									} else {
										the_content();
									}
								?>
							</div>
							<footer class="azad-article-footer">
								<?php //( 'azad_posted_in' ); ?>
								<?php 
									edit_post_link( 'Edit this post...', '<p>', '</p>' ); 
									meks_ess_share();
								?>
							</footer>
						</article>
					<?php endwhile; else: ?>
						<p>No content found for now. You can try <a href="<?php site_url(); ?>"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
				</div>
				<div class="single-sidebar">
					<h3>সর্বাধিক পঠিত : </h3>
					<ol>
						<?php
							$args = array(
							'post_type' 		=> 'post',
							'posts_per_page' 	=> 12,
							'post_status' 		=> 'publish',
						);
						$double = new WP_Query( $args );
						if ( $double->have_posts() ) : ?>
							<?php while ( $double->have_posts() ) : $double->the_post(); ?>
								<li>
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
										<div class="article-header">
											<figure>
												<a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail( 'medium' ); ?></a>
											</figure>
										</div>
										<div class="article-body">
											<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></a></h2>
										</div>						
									</article>
								</li>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
						<?php endif; ?>
					</ol>
				</div>
			</div>
        </div>
    </section><!-- ends single page section -->	
	
	<!--- SINGLE SOCIALS BEGINS -->
	<!--section class="azad-section single-socials">
		<div class="azad-container">
			<div class="single-widget">
				<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'single_page_widget' ) ) : ?>
					<!--p>Please select a widget to display data.</p-->
				<?php endif; // end sidebar widget area ?>
			<!--/div>
		</div>
	</section><!--- ends single-socials -->
	
	<!-- RELATED POSTS SECTION BEGINS -->
    <section class="azad-section azad-related-posts">
        <div class="azad-container">
			<h3>আরো পড়ুন</h3>
			<div class="azad-carousel-four">
				<?php
// 				$tags = wp_get_post_tags( $post->ID );
// 				$first_tag = $tags[0]->term_id;
				$args = array(
// 					'tag__in' 		=> array( $first_tag ),
// 					'post__not_in' 		=> array( $post->ID ),
// 					'posts_per_page' 	=> 4,
// 					'caller_get_posts' 		=> 1,
					
					
							'post_type' 		=> 'post',
							'posts_per_page' 	=> 4,
							'post_status' 		=> 'publish',
				);
				$related = new WP_Query( $args );
				if ( $related->have_posts() ) : ?>
					<?php while ( $related->have_posts() ) : $related->the_post(); ?>				
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
							<div class="post-header">
								<figure>
									<a href="<?php the_permalink(); ?>"><?php ( wp_is_mobile() ) ? the_post_thumbnail( 'thumbnail' ) : the_post_thumbnail( 'medium' ); ?></a>
								</figure>
							</div>
							<div class="post-body">
								<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							</div>						
						</article>					
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
				<?php endif; ?>
			</div>
		</div>
    </section><!-- ends related posts section -->

<?php get_footer(); ?>            