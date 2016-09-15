<?php
/**
 * Activator class for Flexslider Plugin
 * 
 * @package     WordPress
 * @subpackage  Arconix Flexslider
 * @author      John Gardner
 * @link        http://arconixpc.com/plugins/arconix-flexslider
 * @license     GPL-2.0+
 * @since       
 */
class Arconix_Flexslider_Activator {

	public static function activate( $wp = '4.6', $php = '5.3' ) {

		global $wp_version;

		if( version_compare( $wp_version, $wp, '<' ) && version_compare( PHP_VERSION, $php, '<' ) ) {
			$string = sprintf( __( 'This plugin requires either WordPress 4.6 or PHP 5.3. You are running versions %s and %s, respectively', 
			'arconix-flexslider' ), $wp_version , PHP_VERSION );

			deactivate_plugins( basename( __FILE__ ) );

			wp_die( $string, __( 'Plugin Activation Error', 'arconix-flexslider' ), array( 'response' => 200, 'back_link' => TRUE ) );
		
		}
	}

}
