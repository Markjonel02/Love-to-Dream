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
define( 'AUTH_KEY',         '46CcvyJUfapFrIc4u450T8Yn7oOxXgjCklM6ys7dwRism4yUtcBxXQziRNc2WUxZ' );
define( 'SECURE_AUTH_KEY',  'pNDAuW1On8t18JpbQXCXwqOWI0yGEoGdgJosUNugIA1O941vYyJPOaiyRe0qBqud' );
define( 'LOGGED_IN_KEY',    '6xxgk4BzGhJLXaffjjQboot0tGU9jNFnjodsilDUMm7SPw2LMTuXlgx3RKgWSDX0' );
define( 'NONCE_KEY',        '98GgrwmncjyxKdWRmviaEWwRx7FuoEXPTOrC94LhIz8fQdtMO4wnsvX67Nantflp' );
define( 'AUTH_SALT',        'u1fZxsxifUjgfrYITLhQnes8iTeC2wVxB6HXV0ORGllj2yHZfI3yGmgHN0gIV7AX' );
define( 'SECURE_AUTH_SALT', 'aceoDR0jQ5ZXrRkNX7NdyfgVH4CxaqyvrdZrGENEFHL7nxFo3S3t3RsQWPyXfaGM' );
define( 'LOGGED_IN_SALT',   '1xVaIuZnHwDDuoR1fs5rtD32XTTmAlx6kLjwoQJ3FPOKOm2pwhhLXa6KjGW0ZRJK' );
define( 'NONCE_SALT',       'Ztn32E4M7eGdJZ6noQqHrqT1H36yMNu76d9ErFtaBkMY1wJbHK2ffG974QB1d3kK' );

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
