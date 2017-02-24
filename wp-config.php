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
define('DB_NAME', 'dejanmar_ihv');

/** MySQL database username */
define('DB_USER', 'dejanmar');

/** MySQL database password */
define('DB_PASSWORD', 'UPKD4uxh6zPxcYpZ');

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
define('AUTH_KEY',         '8?/?I*/Txf+Hon4g7JsG9w$92NKep71rZ&d9%l =Kjz?-/z^/G3}/9Ay%kx,Brd=');
define('SECURE_AUTH_KEY',  'cFu5e.|Fr&N}/~X*kYJ_M:w8nAdd^RVJV0yBs~~~DA3`U?i<]P`lG#.M<<[n`TDi');
define('LOGGED_IN_KEY',    'gZ!Dl]9`F/K)$ID?[])5jL[c42]9@B$ jZ]yqHO2mpy2l%p+4.kgk[!1}62uJ*T2');
define('NONCE_KEY',        '#cv/T/y]x~K$In41rsOfKmfBgP |[fTI4ABj8p}0-Wc*`XdZ6>x*hb+/N7X8U5LO');
define('AUTH_SALT',        '^6SZsdJVJdxRmg=g?ui4*%1CF</o]55`cT2_,lSQo.^MQBDWV7V^K;TX(mP6OabT');
define('SECURE_AUTH_SALT', 'XQ8P. m]Qnv:@aw1o{*/Y+[S+PCh#-<[N#KDNL8,Lkk=5+e@t,$7YG0-nJA*9?tl');
define('LOGGED_IN_SALT',   'u]IkDjT~@TiP/j``A4AgPEdeI<js_rvsGM_$,~2%9MghD*>tI$i^Y[S^f2E*d{@_');
define('NONCE_SALT',       '-.-C+|.{A~k]R6Y>t5obV4ka37KdvW(8z&[qh8KDHl~Nmus7s~rVVxC$5|wCIgjC');

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
