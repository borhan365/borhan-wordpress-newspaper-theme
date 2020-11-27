<?php
namespace Azad_News\Admin;

// EXIT IF ACCESSED DIRECTLY
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Enqueue' ) ) :

    class Enqueue {
		
        private static $_instance;
		
        public function __construct() {
            add_action( 'wp_enqueue_scripts', array( $this, 'azad_enqueue_scripts' ) );
        }
		
        public function azad_enqueue_scripts() {
			
			// LOAD STYLESHEETS
            
            wp_enqueue_style( 'style' );
			
            wp_register_style(
                'swiper',
                trailingslashit( get_template_directory_uri() ) . 'assets/css/swiper.min.css',
                array(),
                AZAD_NEWS_VERSION,
                'all'
            );
            wp_enqueue_style( 'swiper' );
			
			wp_register_style(
                'main',
                trailingslashit( get_template_directory_uri() ) . 'assets/css/main-style.min.css',
                array(),
                AZAD_NEWS_VERSION,
                'all'
            );
            wp_enqueue_style( 'main' );

            // LOAD JAVASCRIPTS
            wp_register_script(
                'headroom',
                trailingslashit( get_template_directory_uri() ) . 'assets/js/headroom.min.js',
                array( 'jquery' ),
                AZAD_NEWS_VERSION,
                true
            );
            //wp_enqueue_script( 'headroom' );
			
			wp_register_script(
                'toggles',
                trailingslashit( get_template_directory_uri() ) . 'assets/js/toggles.js',
                array( 'jquery' ),
                AZAD_NEWS_VERSION,
                true
            );
			wp_enqueue_script( 'toggles' );
			
			wp_register_script(
                'swiper',
                trailingslashit( get_template_directory_uri() ) . 'assets/js/swiper.min.js',
                array( 'jquery' ),
                AZAD_NEWS_VERSION,
                true
            );
			wp_enqueue_script( 'swiper' );
			
			wp_register_script(
                'activations',
                trailingslashit( get_template_directory_uri() ) . 'assets/js/activations.js',
                array( 'swiper' ),
                AZAD_NEWS_VERSION,
                true
            );
			wp_enqueue_script( 'activations' );

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

if ( ! function_exists( 'load_azad_enqueue' ) ) {
    function load_azad_enqueue(){
        return Enqueue::get_instance();
    }
}
//$GLOBALS['enqueue'] = load_azad_enqueue();