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


$spl = '/vendor/autoload.php';
// Exit if accessed directly
if (
    file_exists( $composer_autoload = __DIR__ . $spl ) || /* check in self */
    file_exists( $composer_autoload = $_SERVER['DOCUMENT_ROOT']. $spl ) || /* check in root directory */
    (
      function_exists('get_template_directory') &&
      file_exists( $composer_autoload = get_template_directory() . $spl )
    )
  )
{
	   require_once $composer_autoload;
    //  Fewbricks\Fewbricks::construct();
}
