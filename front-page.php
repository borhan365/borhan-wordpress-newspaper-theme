<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/
get_header();

$args = array(
	'post_type' 		=> 'post',
	'posts_per_page' 	=> 4,
	'post_status' 		=> 'publish',
);
$custom_query = new WP_Query( $args );

?>
	
	<!-- ADD SECTION BEGINS -->
	<!--section class="azad-section azad-news-scroll header-fixed">
		<div class="azad-container">
			<div class="azad-breaking-news">				
				<div class="breaking-news-container">					
					<h4 class="bn-title">শিরোনাম</h4>
					<div class="bn-content">
						<marquee behavior="scroll" scrollamount="3" scrolldelay="20" direction="left" onmouseover="stop();" onmouseout="start();">
							<ul>
								<li><a href="#"> জামিন পেলেন সিনহার সহকর্মী সিফাত</a></li>
								<li><a href="#"> জামিন পেলেন সিনহার সহকর্মী সিফাত</a></li>
								<li><a href="#"> জামিন পেলেন সিনহার সহকর্মী সিফাত</a></li>
								<li><a href="#"> জামিন পেলেন সিনহার সহকর্মী সিফাত</a></li>
							</ul>
						</marquee>
					</div>					
				</div>				
			</div>
		</div>
	</section><!-- ends add section -->
			
	<!-- BLOG PAGE BEGINS -->
    <section class="azad-section azad-front-main-content">
        <div class="azad-container">
			<div class="azad-front-main-content-container">		
				<div class="azad-banner">
			        <?php
						$args = array(
						'post_type' 		=> 'post',
						'posts_per_page' 	=> 1,
						'post_status' 		=> 'publish',
						'category_name'		=> 'one'
					);
					$one = new WP_Query( $args );
					if ( $one->have_posts() ) : ?>
						<?php while ( $one->have_posts() ) : $one->the_post(); ?>				
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
								<div class="article-header">
									<figure>
										<a href="<?php the_permalink(); ?>"><?php (wp_is_mobile()) ? the_post_thumbnail( 'medium' ): the_post_thumbnail( 'banner' ); ?></a>
									</figure>
								</div>
								<div class="article-body">
									<div class="article-body-inner">
										<h2><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title(), 8, '...' ); ?></a></h2>

                                    <div class="cat-name">
									<?php 
										$cats = array();
										foreach( get_the_category() as $c){
											if($c->name != 'one'){
												$cat = get_category( $c );
												$category_id = get_cat_ID( $cat->name );
												$category_link = get_category_link( $category_id );
												array_push($cats, '<a href="' . esc_url( $category_link ) . '"><span>' . $cat->name . '</span></a>');
											}
										}
										
										if (sizeOf($cats) > 0) {
											$post_categories = implode(', ', $cats);
										} else {
											$post_categories = 'Not Assigned';
										}
										echo $post_categories;
									?>
									</div>
										
										</div>								</div>						
							</article>					
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e( 'Sorry, please select the catgeory \'one\' in any post you like to stick in this position.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
					<?php endif; ?>
				</div>
				
				<div class="azad-front-main-content-col">
					<?php
						$args = array(
						'post_type' 		=> 'post',
						'posts_per_page' 	=> 3,
						'post_status' 		=> 'publish',
						'category_name'		=> 'two'
					);
					$two = new WP_Query( $args );
					if ( $two->have_posts() ) : ?>
						<?php while ( $two->have_posts() ) : $two->the_post();
						
						?>				
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
								<div class="article-header">
									<figure>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
									</figure>
								</div>
								<div class="article-body">
									<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 13, '...' ); ?></a></h2>
									
									<div class="cat-name">
									<?php 
										$cats = array();
										foreach( get_the_category() as $c){
											if($c->name != 'two' && $c->name != 'carousel'){
												$cat = get_category( $c );
												$category_id = get_cat_ID( $cat->name );
												$category_link = get_category_link( $category_id );
												array_push($cats, '<a href="' . esc_url( $category_link ) . '"><span>' . $cat->name . '</span></a>');
											}
										}
										
										if (sizeOf($cats) > 0) {
											$post_categories = implode(', ', $cats);
										} else {
											$post_categories = 'Not Assigned';
										}
										echo $post_categories;
									?>
									</div>
								</div>						
							</article>					
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
					<?php endif; ?>
				</div>				
				
			</div>		
		</div>
    </section><!-- ends blog page -->
	
	<!-- BLOG PAGE BEGINS -->
    <section class="azad-section azad-carousel">
        <div class="azad-container">
			<div class="swiper-container gallery-blog">
				<div class="azad-carousel-four swiper-wrapper">
					<?php
						$args = array(
						    //'post__not_in' => $firstPosts,
						    'post_type' 		=> 'post',
						    'posts_per_page' 	=> 7,
						    'post_status' 		=> 'publish',
						    'category_name'     => 'carousel'
					);
					$swiper_blog = new WP_Query( $args );
					if ( $swiper_blog->have_posts() ) : ?>
						<?php while ( $swiper_blog->have_posts() ) : $swiper_blog->the_post(); ?>				
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'swiper-slide' ) ?>>						
								<div class="post-header">
									<figure>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
									</figure>
								</div>
								<div class="post-body">
									<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
									<div class="cat-name">
									<?php 
										$cats = array();
										foreach( get_the_category() as $c){
											if($c->name != 'two' && $c->name != 'carousel' && $c->name != 'one'){
												$cat = get_category( $c );
												$category_id = get_cat_ID( $cat->name );
												$category_link = get_category_link( $category_id );
												array_push($cats, '<a href="' . esc_url( $category_link ) . '"><span>' . $cat->name . '</span></a>');
											}
										}
										
										if (sizeOf($cats) > 0) {
											$post_categories = implode(', ', $cats);
										} else {
											$post_categories = 'Not Assigned';
										}
										echo $post_categories;
									?>
									</div>
								</div>						
							</article>					
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
					<?php endif; ?>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next swiper-button-white"></div>
				<div class="swiper-button-prev swiper-button-white"></div>
			</div>
		</div>
    </section><!-- ends blog page -->
	
	<!-- TABS SECTION BEGINS -->
    <section class="azad-section azad-tabs-section">
        <div class="azad-container">
			<h3>শরণার্থী </h3>
			<div class="azad-tabs-row">
				<div class="azad-tabs-container">		
					<div class="azad-single-post">
						<?php
						$args = array(
							'post_type' 		=> 'post',
							'posts_per_page' 	=> 1,
							'category_name'     => 'শরণার্থী'
						);
						$refugee_one = new WP_Query( $args );
						$exrefugee = array();
						if ( $refugee_one->have_posts() ) : ?>
							<?php while ( $refugee_one->have_posts() ) : $refugee_one->the_post(); 
							    $exrefugee[] = $post->ID; // add post id to array
							?>				
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
									<div class="article-header">
										<figure>
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
										</figure>
									</div>
									<div class="article-body">
										<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
									</div>						
								</article>					
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
						<?php endif; ?>
					</div>
					
					<div class="azad-multi-posts">
						<?php
						$args = array(
						    'post__not_in'      => $exrefugee,
							'post_type' 		=> 'post',
							'posts_per_page' 	=> 3,
							'post_status' 		=> 'publish',
							'category_name'     => 'শরণার্থী'
						);
						$refugee_three = new WP_Query( $args );
						if ( $refugee_three->have_posts() ) : ?>
							<?php while ( $refugee_three->have_posts() ) : $refugee_three->the_post(); ?>				
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
									<div class="article-header">
										<figure>
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
										</figure>
									</div>
									<div class="article-body">
										<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></a></h2>
									</div>						
								</article>					
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
						<?php endif; ?>
					</div>				
					
				</div>	
				<div class="azad-tabs-group">
					<ul class="double-tab">					
						<li class="active"><a href="#tab-one">সর্বাধিক পঠিত</a></li>
						<li><a href="#tab-two">সর্বশেষ</a></li>
					</ul>
					<div class="azad-category">
						<div id="tab-one" class="cat-wrap double-tab-pane active">
							<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'popular_posts_widget' )) : ?>
								<p>Please select a widget to display data.</p>
							<?php endif; // end sidebar widget area ?>
						</div>
						<div id="tab-two" class="cat-wrap double-tab-pane">
							<?php
								$args = array(
									'post_type' 		=> 'post',
									'posts_per_page' 	=> 7,
									'post_status' 		=> 'publish',
								);
								$tab_2 = new WP_Query( $args );
							
								if ( $tab_2->have_posts() ) : ?>
								<?php while ( $tab_2->have_posts() ) : $tab_2->the_post(); ?>				
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>
										<div class="post-body">
											<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 8, '...' ); ?></a></h2>
										</div>						
									</article>					
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section><!-- ends tabs section -->
	
	<!-- DOUBLE POSTS SECTION BEGINS -->
    <section class="azad-section azad-double-posts">
        <div class="azad-container">
			<div class="azad-double-posts-row">
				<div class="azad-tabs-container">		
					<div class="azad-single-post">
					<h3>জাতীয়</h3>
						<?php
						$args = array(
							'post_type' 		=> 'post',
							'posts_per_page' 	=> 1,
							'category_name'     => 'জাতীয়',
							'post_status' 		=> 'publish'
						);
						$nationnal = new WP_Query( $args );
						$exnational = array();
						if ( $nationnal->have_posts() ) : ?>
							<?php while ( $nationnal->have_posts() ) : $nationnal->the_post();
							    $exnational[] = $post->ID; // add post id to array
							
							?>				
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
									<div class="article-header">
										<figure>
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'double-left' ); ?></a>
										</figure>
									</div>
									<div class="article-body">
										<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></a></h2>
									</div>						
								</article>					
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
						<?php endif; ?>
					</div>
					
					<div class="azad-multi-posts">
						
						<?php
						$args = array(
							    'post__not_in' => $expolitics,
							    'post_type' 		=> 'post',
							    'category_name'     => 'জাতীয়',
							    'posts_per_page' 	=> 2,
							    'post_status' 		=> 'publish'
						);
						$nationnal = new WP_Query( $args );
						if ( $nationnal->have_posts() ) : ?>
							<?php while ( $nationnal->have_posts() ) : $nationnal->the_post(); ?>				
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
									<div class="article-header">
										<figure>
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'banner' ); ?></a>
										</figure>
									</div>
									<div class="article-body">
										<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></a></h2>
									</div>						
								</article>					
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
						<?php endif; ?>
					</div>				
					
				</div>	
				<div class="azad-tabs-container">		
					<div class="azad-single-post">
						<h3>আন্তর্জাতিক</h3>
						<?php
							$args = array(
							'post_type' 		=> 'post',
							'posts_per_page' 	=> 1,
							'category_name'     => 'আন্তর্জাতিক',
							'post_status' 		=> 'publish',
						);
						$international = new WP_Query( $args );
						$exinternational = array();
						if ( $international->have_posts() ) : ?>
							<?php while ( $international->have_posts() ) : $international->the_post(); 
							    $exinternational[] = $post->ID; // add post id to array
							?>				
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
									<div class="article-header">
										<figure>
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'double-left' ); ?></a>
										</figure>
									</div>
									<div class="article-body">
										<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></a></h2>
									</div>						
								</article>					
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
						<?php endif; ?>
					</div>
					
					<div class="azad-multi-posts">
						<?php
							$args = array(
							    'post__not_in' => $exinternational,
							    'post_type' 		=> 'post',
							    'posts_per_page' 	=> 2,
							    'category_name'     => 'আন্তর্জাতিক',
							    'post_status' 		=> 'publish',
						);
						$international = new WP_Query( $args );
						if ( $international->have_posts() ) : ?>
							<?php while ( $international->have_posts() ) : $international->the_post(); ?>				
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
									<div class="article-header">
										<figure>
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'banner' ); ?></a>
										</figure>
									</div>
									<div class="article-body">
										<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></a></h2>
									</div>						
								</article>					
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
						<?php endif; ?>
					</div>				
					
				</div>
			</div>
		</div>
    </section><!-- ends double posts section -->
		
	<!-- PORTFOLIO SECTION BEGINS -->
    <section class="azad-section azad-portfolio-section">
        <div class="azad-container">
			<div class="tabs">
				<h5>কক্সবাজার</h5>
				<div class="mobile-tab">
					<h4>আরও</h4>
					<ul class="nav nav-tabs">					
						<li class="active"><a href="#tab-1">জাতীয়</a></li>
						<li><a href="#tab-2">চকরিয়া</a></li>
						<li><a href="#tab-3">পেকুয়া</a></li>
						<li><a href="#tab-4">কুতুবদিয়া</a></li>
						<li><a href="#tab-5">মহেশখালি</a></li>
						<li><a href="#tab-6">সদর</a></li>
						<li><a href="#tab-7">রামু</a></li>
						<li><a href="#tab-8">উখিয়া</a></li>
						<li><a href="#tab-9">টেকনাফ</a></li>
					</ul>
				</div>
			</div>
			
			<div class="azad-portfolio-section-container">
				<div class="azad-tab-content">
					<div id="tab-1" class="azad-tab-row  tab-pane active">
						<div class="azad-tabs-container">
						
						    <?php
							$args = array(
								'post_type' 		=> 'post',
								'category_name' 	=> 'কক্সবাজার',
								'posts_per_page' 	=> 5,
								'post_status' 		=> 'publish'
							);
							$cox = new WP_Query( $args );
							
							if ( $cox->have_posts() ) : $x = 0; ?>
								<?php while ( $cox->have_posts() ) : $cox->the_post(); ?>	
										
									<?php if ( $x == 0 ) { ?>
										<div class="azad-single-post">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
												<div class="article-header">
													<figure>
														<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
													</figure>
												</div>
												<div class="article-body">
													<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></a></h2>
												</div>						
											</article>	
										</div>
									<?php } ?>
									
							<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
							
							<?php if ( $cox->have_posts() ) : $x = 0; ?>
								<div class="azad-multi-posts">
								<?php while ( $cox->have_posts() ) : $cox->the_post(); ?>
									
									<?php if ( $x != 0 ) { ?>				
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
											<div class="article-header">
												<figure>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
												</figure>
											</div>
											<div class="article-body">
												<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></a></h2>
											</div>						
										</article>
									<?php } ?>
																	
								<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
						    
						</div>
					</div>
					
					<div id="tab-2" class="azad-tab-row  tab-pane">
						<div class="azad-tabs-container">						
							<?php
							$args = array(
								'post_type' 		=> 'post',
								'category_name' => 'চকরিয়া',
								'posts_per_page' 	=> 5,
								'post_status' 		=> 'publish',
							);
							$int = new WP_Query( $args );
							
							if ( $int->have_posts() ) : $x = 0; ?>
								<?php while ( $int->have_posts() ) : $int->the_post(); ?>	
										
									<?php if ( $x == 0 ) { ?>
										<div class="azad-single-post">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
												<div class="article-header">
													<figure>
														<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
													</figure>
												</div>
												<div class="article-body">
													<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></a></h2>
												</div>						
											</article>	
										</div>
									<?php } ?>
									
							<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
									
							<?php if ( $int->have_posts() ) : $x = 0; ?>
								<div class="azad-multi-posts">
								<?php while ( $int->have_posts() ) : $int->the_post(); ?>
									
									<?php if ( $x != 0 ) { ?>				
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
											<div class="article-header">
												<figure>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
												</figure>
											</div>
											<div class="article-body">
												<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
											</div>						
										</article>
									<?php } ?>
																	
								<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
						</div>
					</div>
					
					<div id="tab-3" class="azad-tab-row  tab-pane">
						<div class="azad-tabs-container">						
							<?php
							$args = array(
								'post_type' 		=> 'post',
								'category_name'     => 'পেকুয়া',
								'posts_per_page' 	=> 5,
								'post_status' 		=> 'publish',
							);
							$econo = new WP_Query( $args );
							
							if ( $econo->have_posts() ) : $x = 0; ?>
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>	
										
									<?php if ( $x == 0 ) { ?>
										<div class="azad-single-post">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
												<div class="article-header">
													<figure>
														<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
													</figure>
												</div>
												<div class="article-body">
													<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
												</div>						
											</article>	
										</div>
									<?php } ?>
									
							<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
									
							<?php if ( $econo->have_posts() ) : $x = 0; ?>
								<div class="azad-multi-posts">
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>
									
									<?php if ( $x != 0 ) { ?>				
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
											<div class="article-header">
												<figure>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
												</figure>
											</div>
											<div class="article-body">
												<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
											</div>						
										</article>
									<?php } ?>
																	
								<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
						</div>
					</div>
					
					<div id="tab-4" class="azad-tab-row  tab-pane">
						<div class="azad-tabs-container">						
							<?php
							$args = array(
								'post_type' 		=> 'post',
								'category_name' => 'কুতুবদিয়া',
								'posts_per_page' 	=> 5,
								'post_status' 		=> 'publish',
							);
							$econo = new WP_Query( $args );
							
							if ( $econo->have_posts() ) : $x = 0; ?>
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>	
										
									<?php if ( $x == 0 ) { ?>
										<div class="azad-single-post">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
												<div class="article-header">
													<figure>
														<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
													</figure>
												</div>
												<div class="article-body">
													<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
												</div>						
											</article>	
										</div>
									<?php } ?>
									
							<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
									
							<?php if ( $econo->have_posts() ) : $x = 0; ?>
								<div class="azad-multi-posts">
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>
									
									<?php if ( $x != 0 ) { ?>				
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
											<div class="article-header">
												<figure>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
												</figure>
											</div>
											<div class="article-body">
												<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
											</div>						
										</article>
									<?php } ?>
																	
								<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
						</div>
					</div>
					
					<div id="tab-5" class="azad-tab-row  tab-pane">
						<div class="azad-tabs-container">						
							<?php
							$args = array(
								'post_type' 		=> 'post',
								'category_name'     => 'মহেশখালি',
								'posts_per_page' 	=> 5,
								'post_status' 		=> 'publish',
							);
							$econo = new WP_Query( $args );
							
							if ( $econo->have_posts() ) : $x = 0; ?>
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>	
										
									<?php if ( $x == 0 ) { ?>
										<div class="azad-single-post">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
												<div class="article-header">
													<figure>
														<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
													</figure>
												</div>
												<div class="article-body">
													<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
												</div>						
											</article>	
										</div>
									<?php } ?>
									
							<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
									
							<?php if ( $econo->have_posts() ) : $x = 0; ?>
								<div class="azad-multi-posts">
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>
									
									<?php if ( $x != 0 ) { ?>				
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
											<div class="article-header">
												<figure>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
												</figure>
											</div>
											<div class="article-body">
												<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
											</div>						
										</article>
									<?php } ?>
																	
								<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
						</div>
					</div>
					
					<div id="tab-6" class="azad-tab-row  tab-pane">	
						<div class="azad-tabs-container">						
							<?php
							$args = array(
								'post_type' 		=> 'post',
								'category_name' => 'সদর',
								'posts_per_page' 	=> 5,
								'post_status' 		=> 'publish',
							);
							$econo = new WP_Query( $args );
							
							if ( $econo->have_posts() ) : $x = 0; ?>
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>	
										
									<?php if ( $x == 0 ) { ?>
										<div class="azad-single-post">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
												<div class="article-header">
													<figure>
														<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
													</figure>
												</div>
												<div class="article-body">
													<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
												</div>						
											</article>	
										</div>
									<?php } ?>
									
							<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
									
							<?php if ( $econo->have_posts() ) : $x = 0; ?>
								<div class="azad-multi-posts">
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>
									
									<?php if ( $x != 0 ) { ?>				
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
											<div class="article-header">
												<figure>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
												</figure>
											</div>
											<div class="article-body">
												<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
											</div>						
										</article>
									<?php } ?>
																	
								<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
						</div>
					</div>
					
					<div id="tab-7" class="azad-tab-row  tab-pane">
						<div class="azad-tabs-container">						
							<?php
							$args = array(
								'post_type' 		=> 'post',
								'category_name' => 'রামু',
								'posts_per_page' 	=> 5,
								'post_status' 		=> 'publish',
							);
							$econo = new WP_Query( $args );
							
							if ( $econo->have_posts() ) : $x = 0; ?>
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>	
										
									<?php if ( $x == 0 ) { ?>
										<div class="azad-single-post">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
												<div class="article-header">
													<figure>
														<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
													</figure>
												</div>
												<div class="article-body">
													<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
												</div>						
											</article>	
										</div>
									<?php } ?>
									
							<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
									
							<?php if ( $econo->have_posts() ) : $x = 0; ?>
								<div class="azad-multi-posts">
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>
									
									<?php if ( $x != 0 ) { ?>				
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
											<div class="article-header">
												<figure>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
												</figure>
											</div>
											<div class="article-body">
												<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
											</div>						
										</article>
									<?php } ?>
																	
								<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
						</div>
					</div>
					
					<div id="tab-8" class="azad-tab-row  tab-pane">
						<div class="azad-tabs-container">						
							<?php
							$args = array(
								'post_type' 		=> 'post',
								'category_name' => 'উখিয়া',
								'posts_per_page' 	=> 5,
								'post_status' 		=> 'publish',
							);
							$econo = new WP_Query( $args );
							
							if ( $econo->have_posts() ) : $x = 0; ?>
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>	
										
									<?php if ( $x == 0 ) { ?>
										<div class="azad-single-post">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
												<div class="article-header">
													<figure>
														<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
													</figure>
												</div>
												<div class="article-body">
													<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
												</div>						
											</article>	
										</div>
									<?php } ?>
									
							<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
									
							<?php if ( $econo->have_posts() ) : $x = 0; ?>
								<div class="azad-multi-posts">
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>
									
									<?php if ( $x != 0 ) { ?>				
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
											<div class="article-header">
												<figure>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
												</figure>
											</div>
											<div class="article-body">
												<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
											</div>						
										</article>
									<?php } ?>
																	
								<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
						</div>
					</div>
					
					<div id="tab-9" class="azad-tab-row  tab-pane">
						<div class="azad-tabs-container">						
							<?php
							$args = array(
								'post_type' 		=> 'post',
								'category_name' => 'টেকনাফ',
								'posts_per_page' 	=> 5,
								'post_status' 		=> 'publish',
							);
							$econo = new WP_Query( $args );
							
							if ( $econo->have_posts() ) : $x = 0; ?>
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>	
										
									<?php if ( $x == 0 ) { ?>
										<div class="azad-single-post">
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
												<div class="article-header">
													<figure>
														<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
													</figure>
												</div>
												<div class="article-body">
													<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
												</div>						
											</article>	
										</div>
									<?php } ?>
									
							<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
									
							<?php if ( $econo->have_posts() ) : $x = 0; ?>
								<div class="azad-multi-posts">
								<?php while ( $econo->have_posts() ) : $econo->the_post(); ?>
									
									<?php if ( $x != 0 ) { ?>				
										<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
											<div class="article-header">
												<figure>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium' ); ?></a>
												</figure>
											</div>
											<div class="article-body">
												<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
											</div>						
										</article>
									<?php } ?>
																	
								<?php $x++; endwhile; ?>
								<?php wp_reset_postdata(); ?>
								</div>
							<?php else : ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
							<?php endif; ?>
						</div>
					</div>
					
				</div>
				
				
			    <div class="portfolio">		
					<div class="azad-single-post">
						<h3>মুক্ত মত</h3>
						<?php
							$authors = get_users();							
							$i = 0;
							//get all users list
							foreach( $authors as $author ) {
								$authorList[$i]['id'] = $author->data->ID;
								$authorList[$i]['name'] = $author->data->display_name;
								$authorList[$i]['url'] = $author->data->user_url;
								$i++;
							}							
							foreach( $authorList as $author ) {
								$args = array(
										'showposts' => 1,
										'author' => $author['id'],
										'caller_get_posts' => 1
								);								
								$query = new WP_Query( $args );								
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) {
										$query->the_post();
										
										if ( $author['id'] == 1 || $author['id'] == 10 ){
								?>
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
										<div class="article-header">
											<figure>
												<a href="<?php //the_permalink(); ?>"><?php echo get_avatar( get_the_author_meta( $author['id'] )); ?></a>
											</figure>
										</div>
										<div class="article-body">
											<h2><a href="<?php echo get_permalink(); ?>"> <?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></a></h2>
											<h4><a href="<?php echo get_author_posts_url( $author['id'] ); ?>"><?php echo $author['name']; ?></a></h4>
										</div>						
									</article>									
								<?php
										}
									}
									wp_reset_postdata();
								}
							}
						?>
						
					</div>
				</div>
			
			</div>
		</div>
    </section><!-- ends portfolio section -->
	
	<!-- BOTTOM POSTS BEGINS -->
    <section class="azad-section azad-bottom-posts">
        <div class="azad-container">
			<h3>ছবি</h3>
			<div class="azad-bottom-posts-container">
				
				<div class="azad-category">
					
					<!-- SLIDER TEXT BEGINS -->
					<div class="cat-coll">
						<div class="space">
							<div class="swiper-container gallery-thumbs">
								<div class="swiper-wrapper">
									<?php
										$args = array(
											'post_type' 		=> 'post',
											'posts_per_page' 	=> 12,
											'category_name' 	=> 'ছবি'
										);
										$swiper = new WP_Query( $args );
								
									if ( $swiper->have_posts() ) : ?>
										<?php while ( $swiper->have_posts() ) : $swiper->the_post(); ?>				
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'swiper-slide' ) ?>>						
												<div class="slider-desc">
													<h2 class="slider-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
													<div class="slider-text"><?php the_excerpt(); ?>
													</div>
												</div>
											</article>					
										<?php endwhile; ?>							
									<?php wp_reset_postdata(); ?>								
								</div>
								<?php else : ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
								<?php endif; ?>
							</div><!-- ends slider text -->
						</div>
					</div>
					<div class="cat-coll">
						<div class="azad-figure">
							<!-- THUMBNAIL BEGINS -->
							<div class="swiper-container gallery-top">
								<div class="swiper-wrapper">
									<?php						
									if ( $swiper->have_posts() ) : ?>
										<?php while ( $swiper->have_posts() ) : $swiper->the_post(); ?>				
											<article id="post-<?php the_ID(); ?>" <?php post_class( 'swiper-slide' ) ?>>
												<div class="slider-thumb">
													<figure>
														<a href="<?php the_permalink(); ?>">
														    <?php
														    
														    if( has_post_thumbnail() ){
														       the_post_thumbnail( 'picture-slider' );  
														    }else{
														        echo '<img src="http://demo.voiceworld24.com/wp-content/uploads/2020/08/photo.png">';
														    }
														    
														    
														    ?></a>
													</figure>
												</div>
											</article>					
										<?php endwhile; ?>							
									<?php wp_reset_postdata(); ?>								
								</div>
								<!-- Add Arrows -->
								<div class="swiper-button-next swiper-button-white"></div>
								<div class="swiper-button-prev swiper-button-white"></div>
								<?php else : ?>
									<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
								<?php endif; ?>
							</div><!-- ends thumbnail -->
						</div>
					</div>
				</div>


				<div class="azad-video-posts">
				<h3 style="font-size: 1.4rem;font-weight: bold;margin-top: 30px;"><a style="color:white;" href="https://voiceworld24.com/category/videonews/">ভিডিও</a></h3>			
					<?php 
						$args = array(
							'post_type' 		=> 'post',
							'posts_per_page' 	=> 4,
							'category_name' 	=> 'videonews'
							);
						$video = new WP_Query( $args );
						
					if ( $video->have_posts() ) : ?>
						<?php while ( $video->have_posts() ) : $video->the_post(); ?>				
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>						
								<div class="post-header">
									<figure>
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
									</figure>
								</div>
								<div class="post-body">
									<h2><a href="<?php the_permalink() ?>" alt="<?php esc_attr( the_title_attribute() ); ?>"><?php echo wp_trim_words( get_the_title(), 20, '...' ); ?></a></h2>
								</div>						
							</article>					
						<?php endwhile; ?>						
						<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.', AZAD_NEWS_TEXTDOMAIN ); ?></p>
					<?php endif; ?>
				</div>

				
			</div>
		</div>
    </section><!-- ends bottom posts -->
	
<?php get_footer(); ?>