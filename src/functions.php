<?php
/**
 *
 * @author Varun Sridharan <varunsridharan23@gmail.com>
 * @version 1.0
 * @since 1.0
 * @link
 * @copyright 2018 Varun Sridharan
 * @license GPLV3 Or Greater (https://www.gnu.org/licenses/gpl-3.0.txt)
 */

if ( ! function_exists( 'wp_is_plugin_active' ) ) {
	/**
	 * Checks if Plugin is active.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::is_active()
	 *
	 * @param $plugin_file
	 *
	 * @return bool
	 */
	function wp_is_plugin_active( $plugin_file ) {
		return \Varunsridharan\WordPress\Dependencies::is_active( $plugin_file );
	}
}

if ( ! function_exists( 'wp_is_plugin_network_active' ) ) {
	/**
	 * Checks if Plugin is Network Active.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::is_network_active()
	 *
	 * @param $plugin_file
	 *
	 * @return bool
	 */
	function wp_is_plugin_network_active( $plugin_file ) {
		return \Varunsridharan\WordPress\Dependencies::is_network_active( $plugin_file );
	}
}

if ( ! function_exists( 'wp_is_site_plugin_active' ) ) {
	/**
	 * Checks if Plugin is Active Just for the current site. (Used only if its network enable WP install)
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::is_site_active()
	 *
	 * @param $plugin_file
	 *
	 * @return bool
	 */
	function wp_is_site_plugin_active( $plugin_file ) {
		return \Varunsridharan\WordPress\Dependencies::is_site_active( $plugin_file );
	}
}

if ( ! function_exists( 'wp_is_plugin_inactive' ) ) {
	/**
	 * Checks if Plugin Is InActive.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::is_inactive()
	 *
	 * @param $plugin_file
	 *
	 * @return bool
	 */
	function wp_is_plugin_inactive( $plugin_file ) {
		return \Varunsridharan\WordPress\Dependencies::is_inactive( $plugin_file );
	}
}

if ( ! function_exists( 'plugin_version' ) ) {
	/**
	 * Returns Version for the given plugin slug.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::version()
	 *
	 * @param $plugin
	 *
	 * @return string|bool
	 */
	function plugin_version( $plugin ) {
		return \Varunsridharan\WordPress\Dependencies::version( $plugin );
	}
}

if ( ! function_exists( 'plugin_version_gt' ) ) {
	/**
	 * Validates if plugin's version is greater to the version you provided.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::version_gt()
	 *
	 * @param $plugin
	 * @param $compare_version
	 *
	 * @return bool
	 */
	function plugin_version_gt( $plugin, $compare_version ) {
		return \Varunsridharan\WordPress\Dependencies::version_gt( $plugin, $compare_version );
	}
}

if ( ! function_exists( 'plugin_version_gte' ) ) {
	/**
	 * Validates if plugin's version is greater or equal to the version you provided.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::version_gte()
	 *
	 * @param $plugin
	 * @param $compare_version
	 *
	 * @return bool
	 */
	function plugin_version_gte( $plugin, $compare_version ) {
		return \Varunsridharan\WordPress\Dependencies::version_gte( $plugin, $compare_version );
	}
}

if ( ! function_exists( 'plugin_version_lte' ) ) {
	/**
	 * Validates if plugin's version is less or equal to the version you provided.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::version_lte()
	 *
	 * @param $plugin
	 * @param $compare_version
	 *
	 * @return bool
	 */
	function plugin_version_lte( $plugin, $compare_version ) {
		return \Varunsridharan\WordPress\Dependencies::version_lte( $plugin, $compare_version );
	}
}

if ( ! function_exists( 'plugin_version_lt' ) ) {
	/**
	 * Validates if plugin's version is less or equal to the version you provided.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::version_lt()
	 *
	 * @param $plugin
	 * @param $compare_version
	 *
	 * @return bool
	 */
	function plugin_version_lt( $plugin, $compare_version ) {
		return \Varunsridharan\WordPress\Dependencies::version_lt( $plugin, $compare_version );
	}
}

if ( ! function_exists( 'is_version_gt' ) ) {
	/**
	 * Validates if plugin's version is greater to the version you provided.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::version_gt()
	 *
	 * @param $plugin
	 * @param $compare_version
	 *
	 * @return bool
	 */
	function is_version_gt( $plugin, $compare_version ) {
		return \Varunsridharan\WordPress\Dependencies::version_gt( $plugin, $compare_version );
	}
}

if ( ! function_exists( 'is_version_gte' ) ) {
	/**
	 * Validates if plugin's version is greater or equal to the version you provided.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::version_gte()
	 *
	 * @param $plugin
	 * @param $compare_version
	 *
	 * @return bool
	 */
	function is_version_gte( $plugin, $compare_version ) {
		return \Varunsridharan\WordPress\Dependencies::version_gte( $plugin, $compare_version );
	}
}

if ( ! function_exists( 'is_version_lte' ) ) {
	/**
	 * Validates if plugin's version is less or equal to the version you provided.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::version_lte()
	 *
	 * @param $plugin
	 * @param $compare_version
	 *
	 * @return bool
	 */
	function is_version_lte( $plugin, $compare_version ) {
		return \Varunsridharan\WordPress\Dependencies::version_lte( $plugin, $compare_version );
	}
}

if ( ! function_exists( 'is_version_lt' ) ) {
	/**
	 * Validates if plugin's version is less or equal to the version you provided.
	 *
	 * @uses \Varunsridharan\WordPress\Dependencies::version_lt()
	 *
	 * @param $plugin
	 * @param $compare_version
	 *
	 * @return bool
	 */
	function is_version_lt( $plugin, $compare_version ) {
		return \Varunsridharan\WordPress\Dependencies::version_lt( $plugin, $compare_version );
	}
}
