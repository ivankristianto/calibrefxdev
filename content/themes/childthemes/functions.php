<?php

define( 'CHILD_THEME_NAME', 'childthemes' );
define( 'CHILD_THEME_URL', 'http://www.calibreworks.com' );
define( 'CHILD_THEME_VERSION', '1.0.0' );
define( 'CHILD_THEME_DB_VERSION', '1' );
define( 'CHILD_APP_DIR', 'app' );

add_theme_support( "calibrefx-template-styles" );

// add_filter( 'secondary_menu_text', 'change_text' );
function change_text(){
	return 'Mobile Menu';
}

function change_primary_menu_text(){
	return 'Header Menu';
}
add_filter( 'primary_menu_text', 'change_primary_menu_text' );

function change_secondary_menu_text(){
	return 'Footer Menu';
}
add_filter( 'secondary_menu_text', 'change_secondary_menu_text' );

// add_action( 'admin_init', 'test_api' );
function test_api(){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
	include_once( ABSPATH . 'wp-admin/includes/theme-install.php' ); //for themes_api..

	$api = themes_api('theme_information', array('slug' => 'twentyfifteen', 'fields' => array('sections' => false, 'tags' => false) ) ); //Save on a bit of bandwidth.

	die_dump($api);
}