<?php
/**
*-----------------------------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------------------------
*/
namespace Azad_News;

// EXIT IF ACCESSED DIRECTLY
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Azad_Supports' ) ) :

    class Azad_Supports {
		
		public function __construct() {
            add_action( 'after_setup_theme', array( $this, 'azad_supports' ) );
        }
		
		public function azad_supports() {
			
			//  1.. TO SHOW TITLE TAG
            if ( function_exists( 'add_theme_support' ) ) {
                add_theme_support( 'title-tag' );
            }
			
			// 2.. TO ADD CUSTOM HEADER
            if ( function_exists( 'add_theme_support' ) ) {
                $defaults = array(
                    'height'      => 100,
                    'width'       => 400,
                    'flex-height' => true,
                    'flex-width'  => true,
                    'header-text' => array( 'site-title', 'site-description' )
                );
                add_theme_support( 'custom-logo', $defaults );
            }
			
			// 3.. TO ADD CUSTOM IMAGE SIZE
            if ( function_exists( 'add_theme_support' ) ) {
                add_image_size( 'picture-slider', 405, 273, true );
				add_image_size( 'banner', 845, 334, true );
				add_image_size( 'double-left', 395, 314, true );
				add_image_size( 'single', 800, 400, true );
            }
			
			// 6.. TO SUPPORT FEATURED IMAGES
            if ( function_exists( 'add_theme_support' ) ) {
                add_theme_support( 'post-thumbnails', array( 'post', 'page', 'sliders', 'portfolio', 'promotion' ) );
            }
			
			// 9.. MULTIPLE MENU REGISTER SYSTEM
            if ( function_exists( 'register_nav_menus' ) ) {
                register_nav_menus( array(
                    'desktop_horizontal'   		=> __( 'Desktop Horizontal Menu', AZAD_NEWS_TEXTDOMAIN ),
                    'desktop_sticky' 		=> __( 'Desktop Sticky Menu', AZAD_NEWS_TEXTDOMAIN ),
                    'desktop_expanded'  	=> __( 'Desktop Expanded Menu', AZAD_NEWS_TEXTDOMAIN ),
                    'responsive_toggle'  	=> __( 'Responsive Toggle Menu', AZAD_NEWS_TEXTDOMAIN ),
                    'responsive_expanded'	=> __( 'Responsive Expanded Menu', AZAD_NEWS_TEXTDOMAIN ),
                    'footer'				=> __( 'Footer Menu', AZAD_NEWS_TEXTDOMAIN ),
                    'left_sidebar'			=> __( 'Left Sidebar Menu', AZAD_NEWS_TEXTDOMAIN ),
                    'right_sidebar'			=> __( 'Right Sidebar Menu', AZAD_NEWS_TEXTDOMAIN ),
                    'search_page'			=> __( 'Search Page Menu', AZAD_NEWS_TEXTDOMAIN ),
                    'no_page'				=> __( '404 Page Menu', AZAD_NEWS_TEXTDOMAIN )
                ));
            }
		}
		
	}
	
endif;