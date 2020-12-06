<?php

/**
 * Fired during plugin activation
 *
 * @link       ericktomaliwan.net
 * @since      1.0.0
 *
 * @package    Wp_data_display
 * @subpackage Wp_data_display/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wp_data_display
 * @subpackage Wp_data_display/includes
 * @author     Erick Tomaliwan <hi@ericktomaliwan.net>
 */
class Wp_data_display_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		$db = new Class_Wp_Data_Display_Db();
		$db->create_db();


	}

}
