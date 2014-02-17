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
if( strlen(getenv("DB_NAME")) > 0 ) {
  define('DB_NAME', getenv("DB_NAME"));
} else {
  define('DB_NAME', 'wordpress');
}

/** MySQL database username */
if( strlen(getenv("DB_USER")) > 0 ) {
  define('DB_USER', getenv("DB_USER"));
} else {
  define('DB_USER', 'admin');
}

/** MySQL database password */
define('DB_PASSWORD', getenv("DB_PASSWORD"));

/** MySQL hostname */
if( strlen(getenv("DB_HOST")) > 0 ) {
  define('DB_HOST', getenv("DB_HOST"));
} else {
  define('DB_HOST', (getenv("DB_1_PORT_3306_TCP_ADDR") . ":" . getenv("DB_1_PORT_3306_TCP_PORT")));
}

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
define('AUTH_KEY',         '6kH9]Zz+s<BVDnu+&0ko]9crGcCRxC`-+b;tW|D}LB8ozS]|s+<dzO`XCN#E$3I`');
define('SECURE_AUTH_KEY',  '9Uy 4`ky|x3W_|*$GuH,8mZu}5;L(Xe1PxN}w.C&oHj/A_K,<-kGGh}I{m}t;C9*');
define('LOGGED_IN_KEY',    ',g[lSJ=wT6H %T5|!T+Uos$d+w+A e 6n#L|pdON2wH-T^_BJq0%p,+cH9Qj@<mm');
define('NONCE_KEY',        'jm)++1N~(-;3H=T*uzdc]`nU&M@x|+e?T?tA^QQC2V+&mg,mRB0vT7>0eh9`]0+C');
define('AUTH_SALT',        'g@pzwb`&P1C/YJ#T+o+mq!t?`#kSkeJ+<s-JW1m|V5%m<4[p n}nyH;/KfOC*6 n');
define('SECURE_AUTH_SALT', '&B&hugVsl9|O>Vk|CS/?P|(Vj/5(R;f|#U.j:,U2qUj0[U+(4=F([COIpb?rm8t}');
define('LOGGED_IN_SALT',   '-Kg/P9Z-_h7&(R3<O|<{Dk()J |+-[u*^K<J K[rI]t--!n|}7ng44|DOU7*G*+!');
define('NONCE_SALT',       'e?*  vlC=-oufZ)a`~E^?-Zl98?xlBH?v|(Vr7~GBaYYwIPvsv4;4{+Qe7E6_U#f');

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
