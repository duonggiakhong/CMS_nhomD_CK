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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'HOajwcnPOc}uRexC#E]t9+fZ{_/aL<VR{DP5aKs_BZ5q0O_BsxHBD>*c|nn<]an`' );
define( 'SECURE_AUTH_KEY',  'h4>d|%rd<!H~CQRg.X>jcNA$m2phU<I%ZcY(6P(T1?:P0Q40md)D/Y~$uJ?lPXLL' );
define( 'LOGGED_IN_KEY',    'cHEIM/FU(vZ 9rsx3Y3{)=JNhG,Y{;K2QD0s8y:dA4=f|FX5l!v8yj4PdOGfB@zb' );
define( 'NONCE_KEY',        'J2Zr?JhxRjKIh<XF 8]UMYWHkAVW{PftQz=gju1#]C x+V+YRlxDM2KRx4uM_zDG' );
define( 'AUTH_SALT',        '(JEu,yWW%S*.UK*ObEA%R:!vrSe})Ytq8ZYSYE+h6lrkKUooLE p jU^Gh 59kh_' );
define( 'SECURE_AUTH_SALT', 'U^[=.r@YSZL H,KR~|}2wdF7sS6w&rzQ|1|/Tsvh-o@H]:`:LE,bM$*ziZ^n)&tm' );
define( 'LOGGED_IN_SALT',   'u?GJ!{SV1X ]=evZ{~6jn+2^^q]T&Q=@&!L ;(f7Sv5KEuM4->+5ry7W0M16b;J+' );
define( 'NONCE_SALT',       '@b&@acGW#Sdp}V*y+-q*NkJ%={k5|<k N8W>Ut2 8=3/cDf8z}1wY~lzLkDV?O}/' );

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
