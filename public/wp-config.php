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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'kNHP8c3Ks5H[_I,4eZz7[FY@z,Z)$!,*$aY5eY_aD!(0 ]$R}%sblU-Z,VDV+%HF' );
define( 'SECURE_AUTH_KEY',   'p#imSf_<r;t @d9,k:[w{74k8#&]}u#ra*W^`p$78J(L3q|?&pLdJ4it3m7Hl,[M' );
define( 'LOGGED_IN_KEY',     'G3,~08v8c4?fgXciKe7m0d[.PJG-ztk@{K<3)v2$v}zR>g_mEF6UUEco)::lXpLq' );
define( 'NONCE_KEY',         'h7P@4,2[xK*F<~l^7_yWl#w0@!s#yXrDX.I-cq}.oxy9@{}j|T<sGv.:UfZ1:C?~' );
define( 'AUTH_SALT',         'qes:Q){o,n1< *f[?Q~hfavlTMmSq?.?C4u*Giagthy!v|+Kl<._hY[}[l%d5<er' );
define( 'SECURE_AUTH_SALT',  '2H1<L/VVH%d[OeKj;xotIz5C 2.$2tM-sZXjhrZI>V*;<B;roOcyCx@_g#SSq9Sf' );
define( 'LOGGED_IN_SALT',    'Zegvy2gErRM~`{IMLkXJL1g]j49hjG}~qrnD6y.Z~~gxyEeSLw2(X]Rstdm;OHmz' );
define( 'NONCE_SALT',        '5i7nr3zvdlhNuX=47Gz$0&AqC`Fn#.~Vf0v%OefQ?r.*3I0l_osG-kE`~ (;ZFKI' );
define( 'WP_CACHE_KEY_SALT', 'bBK+WOJ$a%vDtc!:u }2E&=D<wz~kU3k:+@w&bFf,xkq*Xi|k=-hQhARO!K>Z#]{' );


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
