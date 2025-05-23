<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Love-to-Dream' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'osjlIAUnohwr1YDomwE6pqr1yEjj48YmGD7E0SC2vDOdUlPkoWgJjdTuXgDk8YoB' );
define( 'SECURE_AUTH_KEY',  'ZH28rsYzC71yMWGr1WQJbV4LBjfUfG9EpzS2b00n2FcbqXPuijsuNmvUu4JggNxx' );
define( 'LOGGED_IN_KEY',    'rBnCAKEVCjVhs2NYPJOTmVk7Yr4cDsC2tAQlDEVgwgvRgwjarh4mC4mT49m3FJ9X' );
define( 'NONCE_KEY',        '5FrsIhxkTNNZYc6DUyyUgjxIbfMmier3C1Pe5QEJ3EpobTcshvTAZzEEPm6MvhFw' );
define( 'AUTH_SALT',        'SHyIfGuZud2h9HL3HPB04VgsoSa2Gdhoem3dSGxWzcqmCRksJPCGQf5x6cwfs0wR' );
define( 'SECURE_AUTH_SALT', 'QTnkLkFImVex9hCzJ8qeAUXurbtykernU9fMEdnK8v5b8EQ5ToA9gKWczb4FQEil' );
define( 'LOGGED_IN_SALT',   'YeUihc4uuVoMZYDd2s2aPgANkaGZefWZEkuVpscaGCiQIgJgJdOYe4gChkG3FL1X' );
define( 'NONCE_SALT',       'lcaPYfbW30HM1pxQV334gBUXxf85LTNoGpmckcyxfAH7E1Dq5PdCug5TWWhKYEOB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
