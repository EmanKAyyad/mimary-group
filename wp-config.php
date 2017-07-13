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
define('DB_NAME', 'theappco_mimary');

/** MySQL database username */
define('DB_USER', 'theappco_mimaryadmin');

/** MySQL database password */
define('DB_PASSWORD', 'VdZ5kfBshKjPh0HT');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ELw;FN}G&$,7YwhT#KaO7,HUdCdVZzP|A`$6p2++:s]Nj=nRE+QOjCX}F5Pkb<Fj');
define('SECURE_AUTH_KEY',  '~~zW&}ObIlALx2$CY|A-CHm&e;(K1aXb=(d+k~aM[ATL6epQvN?rYTG@PaJo]7CV');
define('LOGGED_IN_KEY',    ']^&;/t_Lk1K%99yzXOrxZt]muX5-!Dt2T_DK!Ih>dV9S9Ow],d0XRZTlTP6F4FHm');
define('NONCE_KEY',        'GeH7~>u<JBG=][<_og2l9?fY*%2h0H;@wN|}mE.Va(:PPT!}IfPmtBZ[NjcvY&T[');
define('AUTH_SALT',        '9Tlrwp0Xg{5z&P@p?KK9}9LLJ75NkesdcVr*Y`#a1^>ha[buAxu=Fc8zc!7P0Yz9');
define('SECURE_AUTH_SALT', 'FdLy+v_w:A!S|Or}P)y@+^5I;r}#9dgr0R!u4%K@4W7tJ43eg)e+alyj$lAgP{wU');
define('LOGGED_IN_SALT',   'Q6{O.ZRGR=C*p Y1}=xh$cvbTv[#EewpDFKRzhG{%L&0C)qqT-W7Up~dwtgO;ChQ');
define('NONCE_SALT',       'N*g%;{s0r@KM_t@0 6xhT8l?-?]VqYZ~$KxtC/zD6~C5+Tq>.q`tMVxpOH#`eAqX');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'theappco_mimary12';

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
