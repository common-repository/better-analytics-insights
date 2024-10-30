<?php

/**
 * Plugin Name:       Better Analytics & Insights
 * Plugin URI:        https://ecomfit.com/
 * Description:       Making informed decisions based on data and optimize conversion in the easy way.
 * Version:           1.0.0
 * Author:            ecomfit
 * Author URI:        https://ecomfit.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('ECOMFIT_ANALYTICS_VERSION', '1.0.0');
/**
 * Currently url app.
 */
define('ECOMFIT_ANALYTICS_APP_URL', 'https://apps.ecomfit.com');

/**
 * Currently url api.
 */
define('ECOMFIT_ANALYTICS_API_URL', 'https://apps.ecomfit.com/api');

/**
 * Currently url sdk.
 */
define('ECOMFIT_ANALYTICS_SDK_URL', 'https://apps.ecomfit.com/cdn/ecf.min.js');

/**
 * Currently version sdk.
 */
define('ECOMFIT_ANALYTICS_SDK_VERSION', '190212');

/**
 * Currently app type.
 */
define('ECOMFIT_ANALYTICS_APP_TYPE', 'analytics');


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ecomfit-analytics-activator.php
 */
function activate_ecomfit_analytics()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-ecomfit-analytics-activator.php';
    Ecomfit_Analytics_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ecomfit-analytics-deactivator.php
 */
function deactivate_ecomfit_analytics()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-ecomfit-analytics-deactivator.php';
    Ecomfit_Analytics_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_ecomfit_analytics');
register_deactivation_hook(__FILE__, 'deactivate_ecomfit_analytics');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-ecomfit-analytics.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ecomfit_analytics()
{

    $plugin = new Ecomfit_Analytics();
    $plugin->run();

}

run_ecomfit_analytics();
