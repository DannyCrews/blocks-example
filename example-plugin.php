<?php
/**
 * Plugin's bootstrap file to launch the plugin.
 *
 * @package     Example-Plugin
 * @author      Dan Crews (@DannyCrews)
 * @license     GPL2+
 *
 * @wordpress-plugin
 * Plugin Name: Example Plugin
 * Plugin URI:  https://www.bu.edu
 * Description: An plugin containing example blocks.
 * Version:     0.1.0
 * Author:      Dan Crews (@DannyCrews)
 * Author URI:  https://twitter.com/dannycrews
 * Text Domain: exampleplugin
 * Domain Path: /languages
 * License:     GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 **/

namespace DannyCrews\Example_Plugin;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Gets this plugin's absolute directory path.
 *
 * @since  2.1.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_directory() {
	return __DIR__;
}

/**
 * Gets this plugin's URL.
 *
 * @since  2.1.0
 * @ignore
 * @access private
 *
 * @return string
 */
function _get_plugin_url() {
	static $plugin_url;

	if ( empty( $plugin_url ) ) {
		$plugin_url = plugins_url( null, __FILE__ );
	}

	return $plugin_url;
}

// Enqueue JS and CSS.
require __DIR__ . '/lib/enqueue-scripts.php';

// Add custom block category.
add_filter( 'block_categories', function( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'example-plugin',
				'title' => __( 'Example Plugin', 'exampleplugin' ),
			),
		)
	);
}, 10, 2 );
