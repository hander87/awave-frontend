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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'awavefrontend_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4jF~eDz@LE~/~EbF}p/B}TW|Sn,~7N2RV%x%x8m9I||wB_VhGRUOw}{+mY-wHYXw');
define('SECURE_AUTH_KEY',  '`5p: S7~+&y#Z-=tBvg~t`od=+z[k8R{Een#<rC%OKc!hWz61w1vE|Om)207#%*^');
define('LOGGED_IN_KEY',    '7Yo4yX.(!hablG?T0M`F[;xKh?O6~Ha!;C*)k0v*=U{RZG>Qw.xqpE;%*8,Nh)n`');
define('NONCE_KEY',        'mo:D6`+T.r#Q+f+;Y^x5lSumYV%64lPV2@W nyG8]uGwDi.yh70,GPuk4aSqwP7p');
define('AUTH_SALT',        'bP}OR!]YvL5yNCg2GWpywPbs;U*u$@-cRWkY>0IF=i0*nN2}#{+E@*J>KY)5h8y@');
define('SECURE_AUTH_SALT', ' >#ppV|xQVy9}a^3Maztv?&;(V.gBh}G814HTfmZ}j+a9wzV]s=1!OCFP1T/GSMY');
define('LOGGED_IN_SALT',   'l?_G|,Ebnf6=7E}HDE4g2F!DvF)0Rstb_j5=b75U^WIhcfifu=U2S!1+B/g~F};K');
define('NONCE_SALT',       '#/S@)nk~%[GcKC*N3#FAz|fP[r:4:s-$7Eoq+!F=pP~%@[qHD^|y^CR?i:MV7C$<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aw_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
