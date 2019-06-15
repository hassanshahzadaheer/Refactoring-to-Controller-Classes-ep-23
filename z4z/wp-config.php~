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
define('DB_NAME', 'z4z');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define(‘FS_METHOD’,’direct’);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iVdSLWj)Bw^p7qIaj?P#>4)$NMCgjDQq>VUq/|N(ih:vyVmUqu`S{VYd?V26tBOx');
define('SECURE_AUTH_KEY',  '%a020}Ce.fP-<1Hc0X5_M`I1AaMW=_laQ:||i)Vxgjz5X5^u(GITrX#z)x@>t@xC');
define('LOGGED_IN_KEY',    'B54t]U?@35h_U}fii]LH0pqwyR1FD6{4N@A2z2m8M7EMl-j3WnoaQGlN^~|2Ekr-');
define('NONCE_KEY',        'L6%8N]5EyU$7r:3GHPj:~v-WGE%tNG}L|1Adv~=y njMYqcQki!1y1e &04>Zna#');
define('AUTH_SALT',        ';>{AF;h@vq1RRUT0c?<JO>SN#k{gFWc)w,:p#]UPl~!5^vE|g<#tyclw|MYY9!7U');
define('SECURE_AUTH_SALT', 'MCpZtW#G;[>6~G9QOW6g9Nj*}6Yei2KC9!@ c;-o4H6Fq0al&@U3.Z%{c;<-)A9Q');
define('LOGGED_IN_SALT',   'qtzt}YO2V/I+;|~jB->hQ5gRSH0o ;Gw<x]S:OU_s u~V4uXaVg<m?+?f,R[CB:^');
define('NONCE_SALT',       'Q<pq=R@~sY:]F.hVpw|/0E?SiLfzswIQ5JQwVSurcpv%`T<xU+-VzI>jB+GyLHGm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
