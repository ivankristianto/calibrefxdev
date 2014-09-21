<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', '%%DB_NAME%%' );
define( 'DB_USER', '%%DB_USER%%' );
define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'

// =================================================================
// Debug mode
// Debugging? Enable these.
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );