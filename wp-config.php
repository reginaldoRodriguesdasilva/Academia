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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Academia' );

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
define( 'AUTH_KEY',         'jnxW8zpwHFZXZYFoP8ujLdWLODfstGUPZpyGYS9QD9iXmqbyvn0CmpgEKlfSX6wT' );
define( 'SECURE_AUTH_KEY',  '4c3O6YH3tMSZX2pAhyJYz8FplC7pqN3xzfP8lMsW5vCvCnwt7OQydLhuFtDuzneR' );
define( 'LOGGED_IN_KEY',    'xoO8ScfRPDCfKkhM0KyGc3GcxvIKLgQrPctrxae5v3LtxeQsbskGMeMvC94LHTRO' );
define( 'NONCE_KEY',        '1LemfMWt8PXUMpVmywP2H670AgxuExYCGFVekBP6VdoS4jjikfalqjB0jnQg9H69' );
define( 'AUTH_SALT',        'E7I22fHmJYE0rNXGFJpz5n4dCP4Ig37924A8vGzOnw0H4Y2S70URxAyVucmuGPEd' );
define( 'SECURE_AUTH_SALT', 'sAT3MXGhCoknWib83ZLYa2XAu6tQ8xAiqRhBFth0PDwn0t83yhSKdFWtTbYGGz9s' );
define( 'LOGGED_IN_SALT',   'uTtxlbyHSpJLPj2Vy6ZYiNZVwjm1atJwI5oGAOkliew4ajl4znoXhi0v1dVotnk6' );
define( 'NONCE_SALT',       'Dvpku1NWm4IxOdNdSOqr15mHe5mv2cxEEdjP6Va1MgC2Qd5xlQv5Ym8X7Xlh264e' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
