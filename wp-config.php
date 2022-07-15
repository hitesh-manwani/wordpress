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
define( 'DB_NAME', 'hiteshmanwani' );

/** Database username */
define( 'DB_USER', 'hiteshmanwani' );

/** Database password */
define( 'DB_PASSWORD', 'hiteshmanwani' );

/** Database hostname */
define( 'DB_HOST', 'hitesh-database1.cnbwakbdzeez.us-east-2.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME','https://hitesh.rtd.squareops.co.in');
define('WP_SITEURL','https://hitesh.rtd.squareops.co.in');
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)   $_SERVER['HTTPS']='on';

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
define('AUTH_KEY',         '%%PE3Z-|ISN]:Gs?wBogO(gD*u`g?,:XRqk_NeguwWSWeH@qAy65It?[#4#$F(#f');
define('SECURE_AUTH_KEY',  '$9ZsPFwSYdgX-n a+{lDeCX>Uvfl1f/O #45`p[/)0yEXJL8l=S: eM7]K!Lsw.W');
define('LOGGED_IN_KEY',    '8a1MAS{IQI%,q#`o>++HuG~fX}?PM3QmEMGQICQ/r&}B@!s|iGVs)r-+dD9WZavV');
define('NONCE_KEY',        'R~bD @/%lkd_/5U{VHd5YV+j9VHkTxx)W5! 3Ht>~wEO^W^)hpU|Vnn=FCuN-B=+');
define('AUTH_SALT',        '}q&NX+ej`Cd%DsT/|6 S.5`$I&@21=tivl8=TO|1|UBn]]1?cNPEa%oqSIit7Z[c');
define('SECURE_AUTH_SALT', 'v{}%&K?qY9Buw1A3Mah`;mh,2fMbGeJh|5,|LK|gviHQN|U+]37Dh-MsdMbL1zLo');
define('LOGGED_IN_SALT',   'updzwgkw^^3kCDNddwfy|OP_`V?8h8P[g`8Jc;|Y^5C&AX;Z9|t]P~N>u~AB0Dbm');
define('NONCE_SALT',       'cE:;x+wNqm+.R)5ujPAMUgbsrDMOeRL&`D0[`<]|Wvec+TC8gzg-Gt7XY*y_-BCV');


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




