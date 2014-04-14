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
define('URL_PREFIX', '');
 
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . URL_PREFIX .'/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . URL_PREFIX);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . URL_PREFIX. '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . URL_PREFIX .'/wp-content');
define('WP_DEFAULT_THEME', 'twentyeleven');
 
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'svetloe86');

/** MySQL database username */
define('DB_USER', 'svetloe86');

/** MySQL database password */
define('DB_PASSWORD', 'QPmqk2uS');

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
define('AUTH_KEY',         '-r(Q ZXI<_>)he$*J?1+M!|Z*pVVt.|Y +EiIO<L-/+UGcoj&&s,X>+h=r2;-=:i');
define('SECURE_AUTH_KEY',  '}3G$9+$*!?>C,AzYPVV:2|AsA,3|+]0hw[K[-%7VN!L>el! |U%H5Mn<X?[v~H~L');
define('LOGGED_IN_KEY',    '#`7ZMzF3[##Hwx2>B[&_4lAl/@mo<|FQ>F$$mD wRn*zes[&&GZ/f-I=^v{e%]cH');
define('NONCE_KEY',        '$&FA%liLWcWOX99MPD][CHc$u8 @WAk|!=}wdb1Pl5L@,bINDp!f*xRuN((% (H#');
define('AUTH_SALT',        '(N56}![jD%1mTUhV,fCs5#&pM-GPC1J:0miksdpHQ`>uS;euI(<AW8>O~Gg`,v9g');
define('SECURE_AUTH_SALT', '?iuGSUUB $_aiIdThBC8g}+8|2WgK(7g!{ZBku@-J;+ML7Fz_&`++[ivWt2nL#Xj');
define('LOGGED_IN_SALT',   'ApPs1ak#|YBZo^2?KL>:-XlrlCOLO,[Q7e->$+}a_70q,qvh$7<9IApuK|V.FTZB');
define('NONCE_SALT',       'f)X/Bd]4vC+:r*y{KX$!Lae~A(@pqdzEDK~.6bZwvu9Gm|1cP<{+$+L=[Gs1qV|#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'ru_RU');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
