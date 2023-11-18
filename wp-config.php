<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'j4mb44051392988' );

/** MySQL database username */
define( 'DB_USER', 'j4mb44051392988' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wFz/}MOGX5' );

/** MySQL hostname */
define( 'DB_HOST', 'j4mb44051392988.db.44051392.1ae.hostedresource.net:3313' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+IAjvFHyENvOTX8EBjnv' );
define( 'SECURE_AUTH_KEY',  'MDjTX60=/Gj@7CBkp)BY' );
define( 'LOGGED_IN_KEY',    'VTDzIWP5jsv@bHTzW/7#' );
define( 'NONCE_KEY',        '695MX==q&w!fxXK-!aFX' );
define( 'AUTH_SALT',        'nj41NqTHq!BCrD$=Q$gR' );
define( 'SECURE_AUTH_SALT', 'QNV*_FdT+g 0$*JSS4k$' );
define( 'LOGGED_IN_SALT',   'L!kA3O2BYz/Hm-PPFffM' );
define( 'NONCE_SALT',       'w=B!kPtggz96R*DHG Kf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
//define( 'WP_CACHE', true );
require_once( dirname( __FILE__ ) . '/gd-config.php' );
define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', (0705 & ~ umask()) );
define( 'FS_CHMOD_FILE', (0604 & ~ umask()) );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';