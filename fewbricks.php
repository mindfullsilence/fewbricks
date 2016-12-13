<?php

/*
Plugin Name: Fewbricks
Plugin URI: https://github.com/mindfullsilence/fewbricks
Description: A module extension to Advanced Custom Fields
Author: Timothy Anderson
Original Author: Björn Folbert
Version: 0.0.0
Author URI: http://github.com/mindfullsilence
Original Author URI: http://folbert.com
License: GPLv3
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

$fewbricks_lib_path = plugin_dir_path(__FILE__) . 'lib/';

require_once($fewbricks_lib_path . 'fewbricks.php');

fewbricks\fewbricks::construct();

/**
 * Update related stuff
 */
require_once($fewbricks_lib_path . 'wp-autoupdate.php');

add_action('init', function() {

    // set auto-update params
    $plugin_current_version = '1.4.0';
    $plugin_remote_path = 'http://fewbricks.folbert.com/update/update.php';
    $plugin_slug = plugin_basename(__FILE__);
    $license_user = 'null';
    $license_key = 'null';

    // only perform Auto-Update call if a license_user and license_key is given
    if ($license_user && $license_key && $plugin_remote_path) {
        new wp_autoupdate ($plugin_current_version, $plugin_remote_path, $plugin_slug, $license_user, $license_key);
    }

});
