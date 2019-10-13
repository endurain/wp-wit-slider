<?php
/*
Plugin Name:  Wit Slider
Plugin URI:   https://github.com/endurain
Description:  A slider built with Glider.js
Version:      1.0
Author:       Zac Sanders
Author URI:   https://github.com/endurain
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wp-wit-slider
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
 die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WIT_SLIDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wit-slider-activator.php
 */
function activate_Wit_Slider() {
 require_once plugin_dir_path( __FILE__ ) . 'includes/class-wit-slider-activator.php';
 Wit_Slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wit-slider-deactivator.php
 */
function deactivate_Wit_Slider() {
 require_once plugin_dir_path( __FILE__ ) . 'includes/class-wit-slider-deactivator.php';
 Wit_Slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Wit_Slider' );
register_deactivation_hook( __FILE__, 'deactivate_Wit_Slider' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wit-slider.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Wit_Slider() {

 $plugin = new Wit_Slider();
 $plugin->run();

}
run_Wit_Slider();
