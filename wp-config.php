<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'telavice');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Pj2M^0(zmaf)2!)lsaW@^M$=F;$+NGV0I],R t|3,3,**d>xOOJ,+p Nd,YUiH<c');
define('SECURE_AUTH_KEY',  '~cNcS04.o_|^8yW}$ur=XYw$.Oy@)RelUMEl3(+rS2TY{lUC}%v`G`kw!L/eTw#]');
define('LOGGED_IN_KEY',    '(j|w]-F)hW~qbC?NaI|T92sf#JcH<tZLgCY4gNeYV@DUL)-Umb%IU_VKqj8/7+uB');
define('NONCE_KEY',        '8:=~#T5aW]1]|!6W`(`4ks-]am-IjHbv}~+KqNzBJRNA&T7;-*5k$G@gMy)ik_oC');
define('AUTH_SALT',        '}=oO2]:DFlUHw.d}mT:QI`+VFBD+kha7<^tKTg|Qe Ow8VXJS7dZ5,CiY@B%hFBI');
define('SECURE_AUTH_SALT', 'cSTxcnwBck~B;j#^YCaQd5EbLz)I`x#>zAqU}|?p~Cv:|}BW9vv[IW% MAYs+.X]');
define('LOGGED_IN_SALT',   '|jxLNTGx%)4u-<Y!QS/.OlsyB(<Dwa=}+kdBRwRI+5R|`#)ifShz6;|>hN9Wd^ba');
define('NONCE_SALT',       'I^~qIjBj;%bR&hpi31-YL!X.D7R|4Mn| X$)-yI`vd1i^NEe~VYNw:vFE$be6hc~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wc';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/site');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
