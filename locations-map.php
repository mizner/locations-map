<?php
/**
 * Plugin Name: Location Map
 * Plugin URI: http://mizner.io
 * Description:
 * Version: 9999.0
 * Author: Michael Mizner
 * Author URI: http://mizner.io
 * License:
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

define( 'PLUGIN_PATH', dirname( __FILE__ ) );

add_action( 'template_include', 'the_location_map' );
function the_location_map( $template ) {
	if ( is_post_type_archive( 'location' ) ) {
		$template = PLUGIN_PATH . '/map-template.php';
	}

	return $template;
}