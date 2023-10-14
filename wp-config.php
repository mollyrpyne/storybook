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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'storybook' );

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
define( 'AUTH_KEY',         'r[uRCu|0NYVUj5*/bHsSu3fZ5-h4Ci(5(]`!1t*4AF<qjVx!__5P!Z`ejuyZjFcG' );
define( 'SECURE_AUTH_KEY',  'S:R)(f<ec%vt%#`:b6@}+w:$ra31%O7Xg iK U@4ssq+[~dy tntYgQw.J 2ZoW)' );
define( 'LOGGED_IN_KEY',    '~w+q|c!-3O+n0_1B/O77A1Y{j0)azh{B~rn0U}PNz<q`8cx!p[3o7Xjl+6k<b ,{' );
define( 'NONCE_KEY',        '=FI}ft|5vP-O6N-P+8#z_zVwy2T5G l|:}}F5!Yo30OuP[xd[i8oQn8]l$gWpJjG' );
define( 'AUTH_SALT',        'M+*PsX3+SP$4$!0e-X`D4 61+_Ww55]%zGvd6ziMA,MnwrzFLbJ/7:O}h>q=-mgq' );
define( 'SECURE_AUTH_SALT', '^FLYM*i^qg7MyF7=gPieBcz:<|-qPP9?D}xP?SoX5a(EoE{^O6V$wsjq>SR^bXjn' );
define( 'LOGGED_IN_SALT',   'gmXY-oJ8qg:C=!`@11~IGu_vv[443dbo&HRy)<+F,-r|[AShG+OQND$Dqueu:Eo+' );
define( 'NONCE_SALT',       'i)42wnNb$9TL5da+Vh>ctDXwpj8$JV[<Dpr83A:kfc&apJC/eb=GeQRc>]^zFiO}' );

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
