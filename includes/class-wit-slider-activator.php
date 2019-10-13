<?php
/**
 * Fired during plugin activation
 *
 * @link       https://github.com/endurain
 * @since      1.0.0
 *
 * @package    Wit_Slider
 * @subpackage Wit_Slider/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wit_Slider
 * @subpackage Wit_Slider/includes
 * @author     Zac Sanders <zacharyjsanders@gmail.com>
 */
class Wit_Slider_Activator {

	/**
	 * Fired during plugin activation.
	 *
	 * @since 1.0.0
	 */
	public static function activate() {

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wit-slider-cpt.php';
		Wit_Slider_CPT::new_cpt_slide();
		flush_rewrite_rules();

	}

}
