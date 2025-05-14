<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

/**
 * BOUTON ADMIN
 */

//  function add_admin_link( $items , $args) {
// 	if(is_user_logged_in()) {
// 		$items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';
// 	}
// 	return $items;
// }

// add_filter( 'wp_nav_menu_items', 'add_admin_link', 10, 2);


add_filter('wp_nav_menu_items', 'add_admin_link_elementor', 10, 2);

function add_admin_link_elementor($items, $args) {
    if (is_user_logged_in() && current_user_can('administrator')) {
        $items .= '<li class="menu-item admin-link"><a href="' . esc_url(admin_url()) . '">Admin</a></li>';
    }
    return $items;
}


// add_filter('wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2);

// function add_admin_link_to_menu($items, $args) {
//     if (is_user_logged_in()) {
//         if ($args->theme_location == 'primary') {
//             $admin_link = '<li class="menu-item admin-link"><a href="' . get_admin_url() . '">Admin</a></li>';
//             $items .= $admin_link;
//         }
//     }

//     return $items;
// }
