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
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '12345678');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '~Pm64|yslL6G!:ruos2E#5.CTFO~#mKmV}hsjBuaA|;S}J;-g6r(K-R43quO2Daw');
define('SECURE_AUTH_KEY',  ':Ef/t/W [i$9_r}_A#S5`)OTEm,89|EE$iFhaD/K~u9~}QI(b5?`XyQJksEW9WH2');
define('LOGGED_IN_KEY',    'AAM6q=HutdLQ!aw`SxIN9h%Q)*mByglVC$gD!Q;P+0]]G7T9HtVeF~<3Y#>#qT9w');
define('NONCE_KEY',        'TE(Vzy&bEgn*-x7(cE+teynr(5?xiU7<_fF/bw,{:]-d.UphKHe#>ADSb~*b3(jO');
define('AUTH_SALT',        '5N1!o4$5J P|R8Um)B[2*Inv0uG^.58:$fme)`*j`N]8LctJTKm{TilB)l2De.Y~');
define('SECURE_AUTH_SALT', '4CH3pBpkTY#,mhR7c:%w^bd?!=2EC9EbMQwXq??YV[<_ ?|-&>jL7Vz94VHa7_a=');
define('LOGGED_IN_SALT',   'S_HVsx! ?ka);[_!(!=0pyq_:H/$ZA!4bbBt/Ofcp]D@Kmz+9&sXMzx/*ILSV!^v');
define('NONCE_SALT',       '$#=;]UD8QLOT7;TLHE!eY,gMai2)?tbwx]J_4c%|)f3xp?eIuI<v1mGX=,5}J6C}');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
