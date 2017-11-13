<?php
/**
 * Plugin Name:
 * Plugin URI:
 * Description:
 * Version:
 * Author:
 * Author URI:
 * Text Domain:
 * Domain Path:
 * License: GPLv3
 * License URI: //www.gnu.org/licenses/gpl-3.0-standalone.html
 *
 * @package wp-plugin-skel
 */

/**
 * Geo IP Library is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Geo IP Library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Geo IP Library. If not, see https://www.gnu.org/licenses/gpl-3.0-standalone.html.
 */

/**
 * Avoid direct file access
 *
 * @since   0.1
 */
defined( 'ABSPATH' ) || die( 'No script kiddies, please!' );

/**
 * Set current version
 *
 * @since   0.1
 */
define( 'WP_PLUGIN_SKEL_VERSION', '0.1' );

/**
 * Set common constants
 *
 * @since   0.1
 */
define( 'WP_PLUGIN_SKEL_URL', plugin_dir_url( __FILE__ ) );
define( 'WP_PLUGIN_SKEL_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP_PLUGIN_SKEL_DIR', basename( dirname( __FILE__ ) ) );

/**
 * Load plugin core
 *
 * @since   0.1
 */
require( WP_PLUGIN_SKEL_PATH . 'includes/class-core.php' );

/**
 * Initializes plugin
 *
 * @since   0.1
 * @return  void
 */
function wp_plugin_skel_init() {
	$wp_plugin_skel = new PluginSkel\Core();
	$wp_plugin_skel->init();
}

add_action( 'init', 'wp_plugin_skel_init' );
