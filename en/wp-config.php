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
define( 'DB_NAME', 'suffering' );

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
define( 'AUTH_KEY',         'EhXmDf]]6VF! -Aovp&$u:UdzXCU^!@pMJ@KadL>GC]_tfVi;>z<@vZ/&R{58_y{' );
define( 'SECURE_AUTH_KEY',  ']ur+Nyx6!~-H7 Uwql#Y-cWXz[Wop]R`th}#)@$W@|;T:^|s*7TS08]R*FmEBGJh' );
define( 'LOGGED_IN_KEY',    '5(j6D7sv&A2D!;;JM:Kc$3SOor?*_L-i|TJh^q!d*@LdqJh/*Y_UZ>CMb>zEF6~4' );
define( 'NONCE_KEY',        '>x*/}3Ou6%+n>.4=b-u:3u*bD2|G$u2!K/_N,:5KMt]z7n{hYcb2usQ>nVEe^Ym_' );
define( 'AUTH_SALT',        '?&!lzP5cD.:{nsYI1R=W}vU0$*|[C6Fs60o8>&-&F%[C8h2~OEcxM+Qokn?NE[;W' );
define( 'SECURE_AUTH_SALT', '/v,Df wX-]{I`uwONOk2f^6kcjg|qB*`Ggb1ckd5<vxYzu?p  h%.r*/hDRx*flq' );
define( 'LOGGED_IN_SALT',   '7~3H#Bc@Q6KqsnEDy&3,/<hT0oa:?OYj#Dgc8tYZf_+oZE%_m$4lMi0l}L~t4!x4' );
define( 'NONCE_SALT',       'O2>GuGwH>#sqcdWL/l58|!`m,oxS/Wt>%D&YdHW1%&c$egHk 3S[PV 6Ix~75M4p' );

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
