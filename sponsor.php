<?php

/**
 *
 * @link              http://marcobrughi.com
 * @since             1.0.0
 * @package           Sponsor Banners
 *
 * @wordpress-plugin
 * Plugin Name:       Sponsor Banners
 * Plugin URI:        http://diginetwork.biz/wp-plugins/sponsor
 * Description:       Manage banners for personal blog and web sites.
 * Version:           1.0.0
 * Author:            Marco Brughi
 * Author URI:        http://marcobrughi.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sponsor
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sponsor-activator.php
 */
function activate_sponsor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sponsor-activator.php';
	Sponsor_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sponsor-deactivator.php
 */
function deactivate_sponsor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sponsor-deactivator.php';
	Sponsor_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sponsor' );
register_deactivation_hook( __FILE__, 'deactivate_sponsor' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sponsor.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sponsor() {

	$plugin = new Sponsor();
	$plugin->run();

}
run_sponsor();
