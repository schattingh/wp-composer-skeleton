<?php

//  local database config -
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', '');

// S3 media offload plugin
// define( 'AS3CF_SETTINGS', serialize( array(
//     'provider' => 'aws',
//     'access-key-id' => '',
//     'secret-access-key' => '',
// ) ) );

// local redis config if required
// define('WP_REDIS_DATABASE', '');
// define('WP_REDIS_CLIENT', 'pecl');
// define('WP_CACHE_KEY_SALT', '');
// define('WP_REDIS_SELECTIVE_FLUSH', 'true');

// generate and add a wp salt here https://api.wordpress.org/secret-key/1.1/salt/

$table_prefix  = 'wp_';
