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
define( 'DB_NAME', 'vjjg2114_libela' );

/** MySQL database username */
define( 'DB_USER', 'vjjg2114_libela' );

/** MySQL database password */
define( 'DB_PASSWORD', '.7S0]pg1YG' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8vkw1fsbgbkgzqmh0ux4hydzzs649mkbmklnv2hyxhvlgerncgxcmokbsiccm4mb' );
define( 'SECURE_AUTH_KEY',  'zhzydgd74cm5pcsmc1jwao1skiiwjrj33qxlmcwboinq5rdlunyes7pkdinfxc2p' );
define( 'LOGGED_IN_KEY',    'a7uhth0bjvunn0tqqefztoa1et2yjrl7dk1arquytu5fvzj3zgzhkaaxiogeli8d' );
define( 'NONCE_KEY',        '2aczlmftaof3lhbrfclmaj8pihdgbsh8urzt2nt6mjm7genbl0daxrwqz9w96nuu' );
define( 'AUTH_SALT',        'jemeuga3lfxilx1c6xgtdvuuxzpkpfhccwu5mb9rqgqrfaeamtubl9tjdzgjc5gh' );
define( 'SECURE_AUTH_SALT', 'qbzmzh3t2gon8sak55cigv5bbp6yzzghtewrlvpfvwl1zmpp1sl2uyqfpxropmk0' );
define( 'LOGGED_IN_SALT',   'd7zhcgb3idkbwehklz2rvlsfxcabcln6jmrgdmq8iftrvewmoki7etmjuiyqhq2n' );
define( 'NONCE_SALT',       '3hdlxempawzlzx98s9whwpi0f7bkw3hr3bestohzj1hlwoobes6ejkiqaabdldk7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wps1_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
