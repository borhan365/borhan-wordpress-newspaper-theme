<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/
get_header(); ?>

    <!-- ABOUT PAGE MAIN SECTION BEGINS -->
    <section class="azad-section azad-about header-fixed">
        <div class="azad-container">
            <?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>
                    <header class="azad-article-header">
                        <h2><?php the_title(); ?></h2>
						<?php //do_action( 'azad_posted_on' ); ?>
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
                        <?php //do_action( 'azad_posted_in' ); ?>
						<?php edit_post_link( 'Edit this post...', '<p>', '</p>' ); ?>
                    </footer>
                </article>
            <?php endwhile; else: ?>
                <p>No content found for now. You can try <a href="<?php site_url(); ?>"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif; ?>
			
			<div class="representative">
				<?php if ( have_posts() ): while( have_posts() ): the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'azad-article' ) ?>>
                    <header class="azad-article-header">
                        <h2><?php //the_title(); ?></h2>
						<?php //do_action( 'azad_posted_on' ); ?>
                    </header>
                    <div class="azad-article-content">
                        <?php
							if ( ! get_the_content() ) {
								echo '<p>May be content field is empty.</p>'; edit_post_link( 'Edit this post...', '<p>', '</p>' );
							} else {
								//the_content();
							}
						?>
						<div class="rep-row">
							<div class="rep-left">
								<figure>
									<img src="https://demo.nashvillehometheater.net/wp-content/uploads/2020/08/nathalie-scholtes.jpg"/>
								</figure>
							</div>
							<div class="rep-right">
								<p>জাপানের হিরোশিমা নগরীতে পরমাণু বোমা হামলার ৭৫ বর্ষপূর্তি পালন করছে জাপান। তবে করোনাভাইরাসের মহামারির কারণে এবারের অনুষ্ঠানাদি কমানো হয়েছে। আজকের অনুষ্ঠানে শুধুমাত্র হামলা থেকে বেঁচে যাওয়া লোকজন, হতাহতদের আত্মীয়-স্বজন ও বিদেশি অতিথিরা অংশ নেন। অনুষ্ঠানে বক্তব্য রাখেন হিরোশিমার মেয়র কাজুমি মাৎসুই।</p>
							</div>
						</div>
						<div class="rep-row">
							<div class="rep-left">
								<figure>
									<img src="https://demo.nashvillehometheater.net/wp-content/uploads/2020/08/nathalie-scholtes.jpg"/>
								</figure>
							</div>
							<div class="rep-right">
								<p>জাপানের হিরোশিমা নগরীতে পরমাণু বোমা হামলার ৭৫ বর্ষপূর্তি পালন করছে জাপান। তবে করোনাভাইরাসের মহামারির কারণে এবারের অনুষ্ঠানাদি কমানো হয়েছে। আজকের অনুষ্ঠানে শুধুমাত্র হামলা থেকে বেঁচে যাওয়া লোকজন, হতাহতদের আত্মীয়-স্বজন ও বিদেশি অতিথিরা অংশ নেন। অনুষ্ঠানে বক্তব্য রাখেন হিরোশিমার মেয়র কাজুমি মাৎসুই।</p>
							</div>
						</div>
						<div class="rep-row">
							<div class="rep-left">
								<figure>
									<img src="https://demo.nashvillehometheater.net/wp-content/uploads/2020/08/nathalie-scholtes.jpg"/>
								</figure>
							</div>
							<div class="rep-right">
								<p>জাপানের হিরোশিমা নগরীতে পরমাণু বোমা হামলার ৭৫ বর্ষপূর্তি পালন করছে জাপান। তবে করোনাভাইরাসের মহামারির কারণে এবারের অনুষ্ঠানাদি কমানো হয়েছে। আজকের অনুষ্ঠানে শুধুমাত্র হামলা থেকে বেঁচে যাওয়া লোকজন, হতাহতদের আত্মীয়-স্বজন ও বিদেশি অতিথিরা অংশ নেন। অনুষ্ঠানে বক্তব্য রাখেন হিরোশিমার মেয়র কাজুমি মাৎসুই।</p>
							</div>
						</div>
						<div class="rep-row">
							<div class="rep-left">
								<figure>
									<img src="https://demo.nashvillehometheater.net/wp-content/uploads/2020/08/nathalie-scholtes.jpg"/>
								</figure>
							</div>
							<div class="rep-right">
								<p>জাপানের হিরোশিমা নগরীতে পরমাণু বোমা হামলার ৭৫ বর্ষপূর্তি পালন করছে জাপান। তবে করোনাভাইরাসের মহামারির কারণে এবারের অনুষ্ঠানাদি কমানো হয়েছে। আজকের অনুষ্ঠানে শুধুমাত্র হামলা থেকে বেঁচে যাওয়া লোকজন, হতাহতদের আত্মীয়-স্বজন ও বিদেশি অতিথিরা অংশ নেন। অনুষ্ঠানে বক্তব্য রাখেন হিরোশিমার মেয়র কাজুমি মাৎসুই।</p>
							</div>
						</div>
						<div class="rep-row">
							<div class="rep-left">
								<figure>
									<img src="https://demo.nashvillehometheater.net/wp-content/uploads/2020/08/nathalie-scholtes.jpg"/>
								</figure>
							</div>
							<div class="rep-right">
								<p>জাপানের হিরোশিমা নগরীতে পরমাণু বোমা হামলার ৭৫ বর্ষপূর্তি পালন করছে জাপান। তবে করোনাভাইরাসের মহামারির কারণে এবারের অনুষ্ঠানাদি কমানো হয়েছে। আজকের অনুষ্ঠানে শুধুমাত্র হামলা থেকে বেঁচে যাওয়া লোকজন, হতাহতদের আত্মীয়-স্বজন ও বিদেশি অতিথিরা অংশ নেন। অনুষ্ঠানে বক্তব্য রাখেন হিরোশিমার মেয়র কাজুমি মাৎসুই।</p>
							</div>
						</div>
						
                    </div>
					<footer class="azad-article-footer">
                        <?php //do_action( 'azad_posted_in' ); ?>
						<?php edit_post_link( 'Edit this post...', '<p>', '</p>' ); ?>
                    </footer>
                </article>
            <?php endwhile; else: ?>
                <p>No content found for now. You can try <a href="<?php site_url(); ?>"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif; ?>
			</div>
        </div>
    </section><!-- ends about page main section -->

<?php get_footer(); ?>