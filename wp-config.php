<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Gl8yHMzdd89HQv9' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'vnhlQllameB5+1Z8cROLJdlz6DDkT2aTnMPW+pzC1WOPQA+9263iv6BFCEy1NvFRGsyCwuRMS6GKw1NFIQnaEg==');
define('SECURE_AUTH_KEY',  'vgh7dGjC9sXhoe8KlR8BxRwr+lTf+ACONMsOIrB6tmuyNmdH9T4IoHPc6kqVfGRQvTILPfvgOXE2u7pc1Z2p8w==');
define('LOGGED_IN_KEY',    'gt/co/ZIk9Ek8W5jyn7nt4b7E9eie49z1BCzKH6SFl3w/KXc9REyVrDjsbbjtl97DO6cHwUGLcUtQO2vctnYyg==');
define('NONCE_KEY',        '9kvLy4Lw0udIJeCnHfDYuXyFMk/gWSEpWxJtKdfSJmZ1kTAwLxHOwBtRajCXag4omCBgaiQNcD5rsWv3/LaB9g==');
define('AUTH_SALT',        'SDOeC6nh7GURzPo+V9nBYEjz3IHecNoHNj0w0e+/ZES3uudgcaJzwp+upLqQ1xSCXobfchc39Tx3T47DFJi3rw==');
define('SECURE_AUTH_SALT', 'Wdv8yiIfz24qNt1NQ2a5e7eJOw9rYZn0vPzySot2/rTdXax3Qr7Fopw/UIsvlYLxxQcQ4Fd6XWDa38iydPgONw==');
define('LOGGED_IN_SALT',   'zPsdiBOg8wQQP2woKWtT4kqsf7O6bK+436ju4hkEs0JCxvlmlSJOyLSsykB/wPhF6evPKBavSm6JetRXBNpH8A==');
define('NONCE_SALT',       'r4j8Ro6gAXOPFFrm1sRAcnOFduh7tvYZ7UZX/XzbGlmV9whhBxf8OomjtiUGtcnVMTmYQemiX4NluHhn1QKEJw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
