<?php
/**
*---------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*---------------------------------------------
*/
?>
            <!-- FOOTER SECTION BEGINS -->
            <footer class="azad-footer">
				<div class="footer-widgets">
					<div class="azad-container">
						<div class="widgets-container">
							<div class="footer-widget">
								<?php if ( ! function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'footer_widget_one' )) : ?>
									<p>Please select a widget to display data.</p>
								<?php endif; // end sidebar widget area ?>
							</div>
							<div class="footer-widget">
								<p>ভয়েসওয়ার্ল্ড ২৪.কম বাংলাদেশের একটি অনলাইন সংবাদপত্র। এটি বাংলা ও ইংরেজি ভাষায় প্রকাশিত। ভয়েসওয়ার্ল্ড এর নীতিনির্ধারকরা নিরপেক্ষ, নির্ভীক, পেশাদারিত্ব, অনুসন্ধানমূলক, তথ্যনির্ভর, বিশ্বাসযোগ্য, নির্ভরযোগ্য ও নৈতিক সাংবাদিকতায় বিশ্বাসী। </p>
							</div>
							<div class="footer-widget">
								<p><span>প্রধান সম্পাদক: </span> অজয় দাশগুপ্ত</p>
								<p><span>ভারপ্রাপ্ত সম্পাদক: </span>একেএম রাশেদুল মজিদ</p>
								<p><span>ঢাকা অফিস: </span>৬ষ্ঠ তলা, সোলেমান প্লাজা, পুরানা পল্টন, ঢাকা।  </p>
								<p><span>কক্সবাজার অফিস: </span>২য় তলা, হোটেল সৈকত, প্রধান সড়ক, সদর, কক্সবাজার। </p>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="azad-container">
						<div class="copyright-container">
							<div class="copyright-left"><p>©  ভয়েসওয়ার্ল্ড ২৪.কম সকল অধিকার সংরক্ষিত ২০১৯।</p></div>
							<div class="copyright-right">
								<nav>
									<?php
										if ( function_exists( 'wp_nav_menu' ) ) {
											
											$defaults = array(
												'theme_location'  => 'footer',
												'menu'            => '',
												'container'       => 'div',
												'container_class' => '',
												'container_id'    => '',
												'menu_class'      => 'menu',
												'menu_id'         => '',
												'echo'            => true,
												'fallback_cb'     => 'wp_page_menu',
												'before'          => '',
												'after'           => '',
												'link_before'     => '',
												'link_after'      => '',
												'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
												'depth'           => 0,
												'walker'          => ''
											);
											wp_nav_menu( $defaults );
											
										} else {
											
											echo "Pleas set the menu to display here...";
											
										}
									?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer><!-- ends footer -->
			
		</main><!-- ends big wrapper -->
		<!-- TO MAKE THE FOOTER SCRIPTS WORK -->
        <?php wp_footer(); ?>
	</body>
</html>