<?php 
/**
*--------------------------------------------
* :: @package azad-woo
* :: @version 1.0.0
*--------------------------------------------
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( "charset" ); ?>" />
        <!-- device code -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<!-- to make the header scripts works -->
	    <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
	
		<!-- BIG WRAPPER BEGINS -->
        <main class="big-wrapper">
            <!-- HEADER SECTION BEGINS -->
            <header class="azad-header">				
				<div class="azad-container">
                    <div class="header-container">
                        <div class="title-wrapper">
                            <div class="logo">
                                <hgroup><?php azad_site_logo(); ?></hgroup>
                            </div>
                            <!-- RESPONSIVE TOGGLE BUTTON BEGINS -->
                            <button class="toggle nav-toggle responsive-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                                <div class="ham-button">
									<span></span>
								</div>
                            </button><!-- ends responsive toggle button -->
                        </div>
						<div class="azad-nav-row">
							<div class="azad-nav">
								<nav class="desktop-menus">
									<div class="burger-button"><span></span></div>
									<!-- THE WAY TO SHOW NAVIGATION -->
									<?php								
										if ( function_exists( 'wp_nav_menu' ) ) {
											$defaults = array(
												'theme_location'  => 'desktop_horizontal',
												'menu'            => '',
												'container'       => 'div',
												'container_class' => '',
												'container_id'    => '',
												'menu_class'      => 'nav navbar-nav',
												'menu_id'         => '',
												'echo'            => true,
												'fallback_cb'     => 'wp_page_menu',
												'before'          => '',
												'after'           => '',
												'link_before'     => '<span>',
												'link_after'      => '</span>',
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
								
								<!-- ICON BUTTONS BEGIN -->
								<div class="azad-search-button">
									<div class="toggle-wrapper search-toggle-wrapper">
										<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
											<span class="toggle-inner">
												<?php azad_the_svg( 'search' ); ?>
											</span>
										</button><!-- .search-toggle -->
									</div>
								</div><!-- ends icon buttons --> 

							</div><!-- ends azad-nav -->
						</div><!-- ends azad-nav-row -->
					</div><!-- ends header-container -->
				</div><!-- ends azad-container -->
            </header><!-- ends header section -->
			
			<?php
                // Output the search modal (if it is activated in the customizer).
                //if ( true === $enable_header_search ) {
                    get_template_part( 'template-parts/modal-search' );
                //}
            ?>

            <!-- RESPONSIVE SLIDER MENU BEGINS -->
            <nav class="mobile-menus">
                <!-- THE WAY TO SHOW NAVIGATION -->
                <?php 
                    // if ( function_exists('wp_nav_menu' ) ) {
                    //     if ( has_nav_menu( 'responsive_toggle' ) ) {
                    //         $defaults = array(
                    //             'theme_location'  => 'responsive_toggle',
                    //             'container'       => 'div',
                    //             'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    //             'show_toggles'   => true,
                    //         );
                    //         wp_nav_menu( $defaults );
                    //     } else {
                    //         echo '<ul><li><a href="">Pleas set the menu first</a><li></ul>';
                    //     }
                    // }
                ?>
                
            </nav><!-- ends responsive slider menu -->
			<script type="text/javascript">
            var navButton = document.querySelector('.burger-button');
            var navMenu = document.querySelector('.azad-nav');
            var win = window;
            
            function openMenu(event) {
                navButton.classList.toggle('active');
                navMenu.classList.toggle('active');
                
                event.preventDefault();
                event.stopImmediatePropagation();
            }
            
            function closeMenu(event) {
                if (navButton.classList.contains('active')) {
                    navButton.classList.remove('active');
                    navMenu.classList.remove('active');
                }
            }
            navButton.addEventListener('click', openMenu, false);
            win.addEventListener('click',closeMenu, false);

            // selector(".burger-button").addEventListener('click', function(){
            //     this.classList.toggle('active');                
            //     selector(".mobile-menus").classList.toggle('active');
            //     selector(".mobile").classList.toggle('active');
            // });

            // function selector(s){
            //     return document.querySelector(s)
            // }
        </script>

            <?php
                // Output the menu modal.
                get_template_part( 'template-parts/modal-menu' );
			