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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nickhargreaves');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'eliana22');

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
define('AUTH_KEY',         'fie,1gor^obA(ehs^9E_g?.6gUuKD<XID1YR8`OGr_20d7nw+3lfyc/}@jvV_Q]t');
define('SECURE_AUTH_KEY',  '3cN~YR+DXE^FN+x$k,L|Za:pOmtGim;m`vQ.=j7b(r!T.}h!Ae@[,H<Q~@[|vX9-');
define('LOGGED_IN_KEY',    'UIT+YT?reYiaXBQ6sHp@#(7x4e<h?IMt{nBn-UJ[fV!~<A5rmhFUUh5vul[<]M2/');
define('NONCE_KEY',        'T293#PkEYbR]KMk4eBk?@%j7!8-;WyE(R`s/^JCpzmYqAQrX!jw@]Vmn7Nv:xGd,');
define('AUTH_SALT',        '{fG***zDjO,QESf$M@OlJTTTw]iPC@[eB`8Jtr.Jr,4&m7O+;_^W9lNjG!DZ^rqB');
define('SECURE_AUTH_SALT', 's&vDT=Y~4NBUwnJ]B^m,2BEBz,W8P by$5d}B(USSi]UTX7{T^TB1_4;Uf)we5}V');
define('LOGGED_IN_SALT',   'g$_=X`hE>qXc%u{i |V|5T(J@>V]}VZp^v>Q}WCw*8!5DzkmDnU^=v#t4TpM>xl)');
define('NONCE_SALT',       'kdj0U]vYl:2#>uE4YjR#1B|?9>[?3{<-7Tag$mXt$uEONZ6KY&%hLmBY;*og2Q^n');
define('FS_METHOD','direct');
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
define('WPLANG', '');

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
