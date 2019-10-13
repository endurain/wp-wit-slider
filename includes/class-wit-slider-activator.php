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
		/**
		 * The class responsible for defining the behavior of the custom post type.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wit-slider-cpt.php';
		/**
		 * The class responsible for the functionality of the custom taxonomy.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-wit-slider-tax.php';

		Wit_Slider_CPT::new_cpt_slide();
		Wit_Slider_TAX::new_tax_slider();

		flush_rewrite_rules();
	}


}
