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
define( 'DB_NAME', 'was' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_MEMORY_LIMIT', '256M');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'S]GJs`0]+ejz2*X9JoF|<%AdrHw* ?Cmq[,!4w`l+!$}E/W!%JDFk,^yO%3bgD#m' );
define( 'SECURE_AUTH_KEY',  'aC~FZ3Y2_wZ3%ArJk/=89FF tNo.qkoULuQP,! #T5g(f~wD{)v@kvTj/,)2UT#r' );
define( 'LOGGED_IN_KEY',    'U<h=-G5$3jE[vDSuhgOC{:]($Bnr,Wy*lMF75EBPgvw>Q&tYRF3-G3IY]pAKbCp3' );
define( 'NONCE_KEY',        'F%J %:dT;aa=T%v&@J]W3=d6rM^tD2FzF|%$ovY+KR>spg=^[8{)|a*BESzq$FTR' );
define( 'AUTH_SALT',        '4 `Hu^4^2^/VDsG=]4?iSTo1h~d&E0Yf$zwhb,1VU|&BJif ;S:)~ |RmBz2:a2n' );
define( 'SECURE_AUTH_SALT', '`/1pB{nE8KQ7G1,9TyR{*A^5@+4{H~3Z)aa?e*3|e 6&:CgDh.eNVFx*9/!`N +)' );
define( 'LOGGED_IN_SALT',   'my=0>wT-=x6^IPm,&JXZH4_@PN]D;DD!tBF(#k61>?0[+(}sfusJ>5<xfT?I6*u.' );
define( 'NONCE_SALT',       '^j9Co;CPPYpt4-|Px<x@X5W/ejcunP|mD!AoiMMUsxagY~n9@L6k.QmiMXN{|,K!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
