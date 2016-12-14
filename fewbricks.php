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
if ( file_exists( $composer_autoload = __DIR__ . '/vendor/autoload.php' ) /* check in self */
	|| file_exists( $composer_autoload = $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php') /* check in root directory */
) {
	require_once $composer_autoload;
  fewbricks\fewbricks::construct();
}
