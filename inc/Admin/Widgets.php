<?php
/**
*-----------------------------------------------
* :: @package azad-woo
* :: @version 1.0.0
*-----------------------------------------------
*/
namespace Azad_News\Admin;

// EXIT IF ACCESSED DIRECTLY
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Widgets' ) ):

    class Widgets {
		
        public static $_instance = null;
		
        public function __construct() {
            add_action( 'widgets_init', array( $this, 'azad_register_widget' ) );
            add_action( 'widgets_init', array( $this, 'azad_register_widgets' ) );
        }
		
        public function azad_register_widgets() {
            $widgets = array(
                array(
                    'name'          => __( 'Popular Posts Widget', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for popular menu', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'popular_posts_widget',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
                array(
                    'name'          => __( 'Slider Menu Widget', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for slider menu', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'slider_menu_widget',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
				array(
                    'name'          => __( 'Search Result Sidebar', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for search result sidebar', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'search_result_sidebar',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
				array(
                    'name'          => __( 'Header Top Add', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for shop page sidebar', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'header_top_add',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
                array(
                    'name'          => __( 'Left Sidebar', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for the left sidebar', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'left_sidebar',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
                array(
					'name'          => __( 'Right Sidebar', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for the right sidebar', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'right_sidebar',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
				array(
					'name'          => __( 'Single Page Widget', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for the right sidebar', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'single_page_widget',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
                array(
                    'name'          => __( 'Footer Widget One', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for footer one', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'footer_widget_one',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
                array(
                    'name'          => __( 'Footer Widget Two', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for footer two', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'footer_widget_two',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
                array(
                    'name'          => __( 'Footer Widget Three', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for footer three', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'footer_widget_three',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
                array(
                    'name'          => __( 'Footer Widget Four', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for footer four', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'footer_widget_four',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                ),
				array(
                    'name'          => __( 'Copyright Widget', AZAD_NEWS_TEXTDOMAIN ),
                    'description'   => __( 'Widget for footer social icons', AZAD_NEWS_TEXTDOMAIN ),
                    'id'            => 'copyright_widget',
                    'before_widget' => '<li>',
                    'after_widget'  => '</li>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>'
                )
            );
			
            foreach ( $widgets as $widget ) {
                $this->get_azad_register_widgets( $widget['name'], $widget['id'], $widget['description'] );    
            }
            
        }
		
        public static function get_azad_register_widgets( $name, $id, $description ) {
            if ( function_exists( 'register_sidebar' ) ) {
                register_sidebar( array(
                    'name' => esc_html( $name, 'azad' ),
                    'id'   => $id,
                    'description'   => esc_html( $description, 'azad' ),
                    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</aside>',
                    'before_title'  => '<h3>',
                    'after_title'   => '</h3>'
                ) );
            }
        }
		
        public static function azad_register_widget() {
            if ( function_exists( 'register_sidebar' ) ) {
                register_sidebar( array(
                    'name' => 'Default Sidebar',
                    'id'   => 'default_sidebar',
                    'description'   => 'Widget for default sidebar.',
                    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</aside>',
                    'before_title'  => '<h3>',
                    'after_title'   => '</h3>'
                ) );
            }
        }
		
        public static function register() {
            //echo 'Register';   
        }
		
        public static function get_instance() {
            if ( is_null( self::$_instance ) && ! isset( self::$_instance ) && ! ( self::$_instance instanceof self ) ) {
                self::$_instance = new self();            
            }
            return self::$_instance;
        }
		
        public function __destruct() {}
		
     }
	 
endif;

if ( ! function_exists( 'load_widgets' ) ) {
    function load_widgets() {
        return Widgets::get_instance();
    }
}
//$GLOBALS['widgets'] = load_widgets();