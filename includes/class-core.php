<?php
/**
 * WP Skel Plugin - < Core class >
 * This is a built-in script, please do not
 * modify if is not really necessary.
 *
 * @package wp-plugin-skel
 */

namespace PluginSkel;

/**
 * Load all required classes
 */
require( WP_PLUGIN_SKEL_PATH . 'includes/class-admin.php' );
require( WP_PLUGIN_SKEL_PATH . 'includes/class-shortcode.php' );

/**
 * Core class
 * All needed actions and filters are settled here.
 */
class Core {

	/**
	 * Loads all needed plugin classes and/or components
	 *
	 * @since   0.1
	 * @return  void
	 */
	function init() {
		$admin = new Admin();
		$admin->init();

				$shortcode = new Shortcode();
		$shortcode->init();

		$this->i18n();
	}

	/**
	 * Load text domain for i18n
	 *
	 * @since   0.1
	 * @return  void
	 */
	function i18n() {
		load_plugin_textdomain( 'wp-plugin-skel', false, WP_PLUGIN_SKEL_DIR . '/languages/' );
	}

}
