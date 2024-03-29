<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    K8lang_Chng
 * @subpackage K8lang_Chng/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    K8lang_Chng
 * @subpackage K8lang_Chng/includes
 * @author     Your Name <email@example.com>
 */
class K8lang_Chng_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$us = get_users(array( 'fields' => array( 'ID' )));
		foreach ($us as $value) {
			update_user_meta($value->ID,'locale', 'en_US');
		}
	}

}
