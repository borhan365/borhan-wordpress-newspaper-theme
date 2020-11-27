<?php
/**
 * Displays the menu icon and modal
 *
 * @package azad-x
 * @since 1.0.0
 */
?>

<div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">

	<div class="menu-modal-inner modal-inner">

		<div class="menu-wrapper section-inner">

			<div class="menu-top">

				<button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".menu-modal">
					<span class="toggle-text"><?php _e( 'বন্ধ করুন', 'azad-news' ); ?></span>
					<?php azad_the_svg( 'cross' ); ?>
				</button><!-- .nav-toggle -->

				<?php

				$mobile_menu_location = '';

				// If the mobile menu location is not set, use the primary and expanded locations as fallbacks, in that order.
				if ( has_nav_menu( 'responsive_toggle' ) ) {
					$mobile_menu_location = 'responsive_toggle';
				} elseif ( has_nav_menu( 'responsive_expanded' ) ) {
					$mobile_menu_location = 'responsive_expanded';
				} elseif ( has_nav_menu( 'desktop_expanded' ) ) {
					$mobile_menu_location = 'desktop_expanded';
				}

				if ( has_nav_menu( 'desktop_expanded' ) ) {

					$expanded_nav_classes = '';

					if ( 'desktop_expanded' === $mobile_menu_location ) {
						$expanded_nav_classes .= ' mobile-menu';
					}

					?>

					<nav class="expanded-menu<?php echo esc_attr( $expanded_nav_classes ); ?>" aria-label="<?php esc_attr_e( 'Desktop Expanded', 'azad-guineapig' ); ?>" role="navigation">

						<ul class="modal-menu reset-list-style">
							<?php
							if ( has_nav_menu( 'desktop_expanded' ) ) {
								wp_nav_menu(
									array(
										'container'      => '',
										'items_wrap'     => '%3$s',
										'show_toggles'   => true,
										'theme_location' => 'desktop_expanded',
									)
								);
							}
							?>
						</ul>

					</nav>

					<?php
				}

				if ( 'expanded' !== $mobile_menu_location ) {
					?>

					<nav class="mobile-menu" aria-label="<?php esc_attr_e( 'Mobile', 'azad-guineapig' ); ?>" role="navigation">

						<ul class="modal-menu reset-list-style">

						<?php
						if ( $mobile_menu_location ) {

							wp_nav_menu(
								array(
									'container'      => '',
									'items_wrap'     => '%3$s',
									'show_toggles'   => true,
									'theme_location' => $mobile_menu_location,
								)
							);

						} else {

							wp_list_pages(
								array(
									'match_menu_classes' => true,
									'show_toggles'       => true,
									'title_li'           => false,
									'walker'             => ''//new TwentyTwenty_Walker_Page(),
								)
							);

						}
						?>

						</ul>

					</nav>

					<?php
				}
				?>

			</div><!-- .menu-top -->

			<div class="menu-bottom">

				<?php if ( has_nav_menu( 'social' ) ) { ?>

					<nav aria-label="<?php esc_attr_e( 'Expanded Social links', 'azad-guineapig' ); ?>" role="navigation">
						<ul class="social-menu reset-list-style social-icons fill-children-current-color">

							<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'social',
									'container'       => '',
									'container_class' => '',
									'items_wrap'      => '%3$s',
									'menu_id'         => '',
									'menu_class'      => '',
									'depth'           => 1,
									'link_before'     => '<span class="screen-reader-text">',
									'link_after'      => '</span>',
									'fallback_cb'     => '',
								)
							);
							?>

						</ul>
					</nav><!-- .social-menu -->

				<?php } ?>

			</div><!-- .menu-bottom -->

		</div><!-- .menu-wrapper -->

	</div><!-- .menu-modal-inner -->

</div><!-- .menu-modal -->