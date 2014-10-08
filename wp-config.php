<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ========================
// Store Revision Up to 5 Only
// ========================
define('WP_POST_REVISIONS', 5);

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'hqV^|*q[]_Gc6!C9e6!4n~;;+}>Y2ZbQ_|NAHUO]9&MO>0UJ Z3JSul~?d?V*gtx');
define('SECURE_AUTH_KEY',  '1H<jN/h-3+R^0Z>`gsUH/d{%GjETj[AsyI46hUJ/N!h^+|{wK`1`}sLU]h!R!5~B');
define('LOGGED_IN_KEY',    '=P,;E(Tp9,bF#09=&Ln|Nc?9s]yl|,dKnNWP_~8bxS}${IQ0{TbFachlV|yZA4Nc');
define('NONCE_KEY',        '``x7{7|y^P-K3:C+M|A=n!LPo3WI|QY,Ra7,|3&|FJHi`<D~3f6@!0AI&GMD5 *N');
define('AUTH_SALT',        'jGG*Xo({Gk!D%`;bI=z=Y ]lRI?Tb/{cj^-itT)WE+@OA+yIo|=]09+#buH|f-dR');
define('SECURE_AUTH_SALT', 'mZ=-_J{!9xm^OlskU2M2e`H{8A:ijtzi[ZsgYeDd]GB]ho:gRCw@4q%%Hpj{#apI');
define('LOGGED_IN_SALT',   '&, sIfFXKdFo>v)ub-@-<)-T:GKK=rUJ[3r0 #NkChi!I!Z(8lOndySyz)Q)CY|1');
define('NONCE_SALT',       '24c,aqE,autHPu,)i ElZg@G=J^Ic3iT1*NV4PL,1/0NRch87Je3sbiA<|o^yK,|');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'cfx_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 1 );
define( 'WP_DEBUG_DISPLAY', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/system/' );
require_once( ABSPATH . 'wp-settings.php' );
