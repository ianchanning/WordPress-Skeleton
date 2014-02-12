<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'db152024_zwartearend' );
	define( 'DB_USER', 'db152024_zwarte' );
	define( 'DB_PASSWORD', 'tip-darkness-no-fear' );
	define( 'DB_HOST', $_ENV['DATABASE_SERVER'] ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/zwartearend.be/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         'i=de3DByhQ~,]C|-<T2P:J!|oOCD5c#S-ME7e{$FtlvNY83?h}_]:s@edKwX2H-+');
define('SECURE_AUTH_KEY',  '?RV;2@?0G6*zhbQ5t^1l18~;hRL)Ea`5k2>+ff/P+X;nt>![gz8GfiR[k}e/X|{S');
define('LOGGED_IN_KEY',    '>||?=q`z}-_K x_|.mD(.tL-|>HJY.-0PMmzI2[fwO6O%m=$@Mh&TI.kU+GCS2-,');
define('NONCE_KEY',        'dCa90Zx&iAVJ&.!J#o)*K6/YG@cf?cU+| Q*`7O=+Ud%MZGT:6Ex[0nV?;N/^Roc');
define('AUTH_SALT',        'zP+92Zsx>)iW)q|-C?aZeEREl;~-.#*5ri 5Jd9#CPzZVlzv_#2>UN7r+NRC-]:E');
define('SECURE_AUTH_SALT', '~/<(|]lJ<5Q|SiTJ5+R;aO+3:r<B[}4qH1G0!wy0?v{&w)-_/`G`XI-1m.d0#@!`');
define('LOGGED_IN_SALT',   'a|d;Llx*;+pl`L)b|=18kYex],~z597MYPE^_$gO4M>tVT)/&puSCJ+^dQ++/R>m');
define('NONCE_SALT',       'Uy45WqhIp{vyGrkqe808~Kw.XwyHhg69#?!lI;s&st61;o5~1+Q*FP-4wN%lg|$z');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', 'nl_NL' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
