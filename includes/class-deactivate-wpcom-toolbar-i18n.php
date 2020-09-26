<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/GeoJunkie/
 * @since      1.0.0
 *
 * @package    Deactivate_Wpcom_Toolbar
 * @subpackage Deactivate_Wpcom_Toolbar/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Deactivate_Wpcom_Toolbar
 * @subpackage Deactivate_Wpcom_Toolbar/includes
 * @author     Mike Straw <mike.straw@automattic.com>
 */
class Deactivate_Wpcom_Toolbar_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'deactivate-wpcom-toolbar',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
