<?php
/**
 * WP Skel Plugin - < Shortcode class >
 * This is a built-in script, please do not
 * modify if is not really necessary.
 *
 * @package wp-plugin-skel
 */

namespace PluginSkel;

/**
 * Shortcode class
 * It defines and handles all available
 * shortcodes to use within pages and posts.
 */
class Shortcode {

	/**
	 * Initializes shortcode related actions
	 *
	 * @since   0.1
	 * @return  void
	 */
	function init() {
		if ( ! shortcode_exists( 'wp-plugin-shortcode' ) ) {
			add_shortcode( 'wp-plugin-shortcode', array( $this, 'shortcode' ) );
		}
	}

	/**
	 * Main shortcode function.
	 *
	 * @since   0.1
	 * @param   array  $atts       Shortcode attributes collection.
	 * @param   string $content    Content between opening and closing tags.
	 * @return  string|false
	 */
	function shortcode( $atts = array(), $content = null ) {
		$attributes = (object) shortcode_atts(
			array(
				'param_one'   => '*',
				'param_two'   => '',
			), $atts
		);

		if ( ! empty( $attributes ) ) {
			return do_shortcode( $content );
		}

		return false;
	}

}
