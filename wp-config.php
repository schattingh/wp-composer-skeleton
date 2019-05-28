<?php

//  -----  ansible managed -----

//  database connection
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
  include( dirname( __FILE__ ) . '/local-config.php' );
} else {
  define( 'DB_NAME', '' );
  define( 'DB_USER', '' );
  define( 'DB_PASSWORD', '' );
  define( 'DB_HOST', '' );
}

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// $table_prefix  = 'wp_';

//  disable debug by default
define('WP_DEBUG', false);

//  wordpress settings
define('DISABLE_WP_CRON', 'true');
define('WP_POST_REVISIONS', 10);
define('DISALLOW_FILE_EDIT', true);
define( 'AUTOMATIC_UPDATER_DISABLED', true );

//  absolute path
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

// variables to configure our repository directory structure
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
        $_SERVER['HTTPS'] = 'on';
        $scheme = 'https';
} else {
        $scheme = 'http';
}

define('WP_HOME', $scheme . '://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', $scheme . '://' . $_SERVER['HTTP_HOST'] . '/wp/');
define('WP_CONTENT_DIR', realpath(ABSPATH . '../content/'));
define('WP_CONTENT_URL', WP_HOME . '/content');

require_once(ABSPATH . 'wp-settings.php');
