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
define( 'DB_NAME', 'oasis4' );

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
define( 'AUTH_KEY',         'rvp1>zF@t:vDf>+tkH4XWzjF7Q2C,DvwQ(:Ut0Q0<b>~LkbU~yq%+h(e3F6iX_S)' );
define( 'SECURE_AUTH_KEY',  'lUzb5x4Q0R>BM/_zTqYYQB $Ge,D[GYJ>vAh_nM1[axE<n]7tq=B?b!6F6f!n6?V' );
define( 'LOGGED_IN_KEY',    '==ngL)t3vN=JsM-%U5!k^KR]d>Vv$S4B#; 5VE*e[(eIa.6,!qA,![pk9I/;-G)t' );
define( 'NONCE_KEY',        'Tq`|9X&Vgp_z{<Cin5zls&43+WSPoERJNT Cu&Lu[e4CUYYCG?9cZPovGF Xk`N7' );
define( 'AUTH_SALT',        '(NHRoh4[W*E/Ja=nQ3%`J.84t9%)+[&x$BmA56CWalhz>xRVCC]XD/Tbi]ww`bo2' );
define( 'SECURE_AUTH_SALT', 'dk4UlWlv(u1%3B{!>qIznZAxTQPIpcJgkVX6ZjdR]},,JDj{8x{S2K,LNE5O|8&~' );
define( 'LOGGED_IN_SALT',   'TdA12L4FD#<2[>vOGmce?KgkGxt>`{-(V![Wi|D`&Fg*+o{6rJ_W+2`E)n2Ux80a' );
define( 'NONCE_SALT',       'Kb6DYLR@v0}tyC+eJ Ll^<mw`_y4~A3Mq4{o**GB$?:9O7`c(l&$=S ]h26P_@LI' );

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
