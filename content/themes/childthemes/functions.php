<?php
/**
 * Include CalibreFx init file, this is our engine
 */

define('CHILD_THEME_NAME', 'childthemes');
define('CHILD_THEME_URL', 'http://www.calibreworks.com');
define('CHILD_THEME_VERSION', '1.0.0');
define('CHILD_THEME_DB_VERSION', '1');

function childfx_setup(){
	add_theme_support( "calibrefx-template-styles" );
}
add_action( 'after_setup_theme', 'childfx_setup' );
