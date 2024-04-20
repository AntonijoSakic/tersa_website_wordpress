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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tersa_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8k%zcW}A7-3?:*$@%fZ9o+|cr7uCMX]!Id!.Ty70[K=V0y|]aF7-|$NR$e(pL7p[' );
define( 'SECURE_AUTH_KEY',  '>sAX8;V/]!]XE?]u,Mt2by,d>JP^&MR=|Kois!~0{?3r4(#+}?flTV?]vG+mP;I|' );
define( 'LOGGED_IN_KEY',    '$4[VRL6p8]o(eBEE!lss}}P,?EFjL_:zEe{QteG1MjhJ7mOFt(/V~.AX7uOj| Y`' );
define( 'NONCE_KEY',        'Ej(:i3I^T53-K~}ig[-KM@8GJAQRz9+>rf-W4xKE!4s@x;%ou&o$;e5Y#1;A~PVx' );
define( 'AUTH_SALT',        'oGP5K<O>dAqUkcy;<vhg^N{WF1<rF}%UZrL8^}u5^^|{xd1zVrz;<u}-Bk}R^!|-' );
define( 'SECURE_AUTH_SALT', 'a] Y-.k@VB~}E|U/2Kr2y|~v.F]!Q.^h6>G6`Fl7-<VmO{`)ZdbevMk`1!UU.l,M' );
define( 'LOGGED_IN_SALT',   '|ytFahHsq ]pWj.:Gxk^9Q>0Oon&>MDNi`1Iqo%N*J2FD!OP_cgg$f68>,U3MWRf' );
define( 'NONCE_SALT',       'sGzmQMCkPFCt%%~-+f|YE-c/$oN*Xik$rh9t4:f$^<^8daLvRU`:M#cSdSm|@gBF' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
