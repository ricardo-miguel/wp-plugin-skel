<?php
/**
 * WP Plugin Skel - < Admin class >
 * This is a built-in script, please do not
 * modify if is not really necessary.
 *
 * @package wp-plugin-skel
 */

namespace PluginSkel;

/**
 * Admin class
 * All admin related actions and filters are settled here.
 */
class Admin {

	/**
	 * Initializes administration related actions
	 *
	 * @since   0.1
	 * @return  void
	 */
	function init() {
		add_action( 'current_screen', array( $this, 'assets' ) );
		add_action( 'admin_menu', array( $this, 'menu' ) );
	}

	/**
	 * Load front-end assets (like stylesheets, scripts, etc.)
	 *
	 * @since   0.1
	 * @return  void
	 */
	function assets() {
		$current_screen = get_current_screen();
		if ( 'wp-plugin-skel-settings-page' == $current_screen->id ) {
			wp_enqueue_style( 'wp-plugin-skel-css', WP_PLUGIN_SKEL_URL . 'assets/css/admin.css' );
			wp_enqueue_script( 'wp-plugin-skel-js', WP_PLUGIN_SKEL_URL . 'assets/js/admin.js', 'jquery' );

			$this->l10n_assets();
		}
	}

	/**
	 * Set and load localized strings to front-end
	 *
	 * @since   0.1
	 * @return  void
	 */
	function l10n_assets() {
		$l10n = array(
			'HELLO WORLD' => __( 'Hello world!', 'wp-plugin-skel' ),
		);

		wp_localize_script( 'wp-plugin-skel-js', 'l10n_wp_plugin_skel', $l10n );
	}

	/**
	 * Defines how admin is shown at dashboard
	 *
	 * @since   0.1
	 * @return  void
	 */
	function menu() {
		add_submenu_page(
			'tools.php',
			__( 'WP Plugin Skel', 'wp-plugin-skel' ),
			__( 'WP Plugin Skel', 'wp-plugin-skel' ),
			'manage_options',
			'wp-plugin-skel-settings',
			array( $this, 'settings' )
		);
	}

	/**
	 * Settings page (mostly info)
	 *
	 * @since   0.1
	 * @return  void
	 */
	function settings() {
		require( WP_PLUGIN_SKEL_PATH . 'includes/class-htmlizer.php' );

		$vars = array(
			'HELLO_WORLD'  => __( 'Hello world!', 'wp-plugin-skel' ),
			'THIS_IS_DASH' => __( 'This is the dashboard for skeleton plugin', 'wp-plugin-skel' ),
		);

		$htmlizer = new \HTMLizer();
		echo $htmlizer->build_from_file( WP_PLUGIN_SKEL_PATH . 'includes/templates/admin.html', $vars );
	}

}
