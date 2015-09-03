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
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'qburst');

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
define('AUTH_KEY',         'ECNEu<~j(X|l||(B%_|S_=IUWzG@=}]AXqy^F!+7thx!FDSnIBFDxc`B4y.!Dmz5');
define('SECURE_AUTH_KEY',  'N=>b(W.n&7ri-}X#kNclt~([-tHzF65r,!5Le`vKWmWTPaaXA<*fv.=OhYNb5Qjk');
define('LOGGED_IN_KEY',    '!7pD*+l9X2Dx^,jmOf{/f{0lP-7Nd&pQo{S?E8+}2~BsDHW5a`dI~p)eVw|lfQ_6');
define('NONCE_KEY',        'n[]/g@d{6_N5AMzLU8V;Gpd91G#GI-06^ +USb9UgmX8PlyQ!Qj7l4Yp@W^vlMw=');
define('AUTH_SALT',        '-y2VNIzvC._;7%~![k}fvM-3UWnGSQlark[7S.@BWsU(<C.y%7.TKXuN!z`2.+k>');
define('SECURE_AUTH_SALT', 'f-$+q7_tlzQ@A^TGaZNvL4v[aOZj:k..XSe&1vRpG.j`kCneKu8x&&8s|obKH#<#');
define('LOGGED_IN_SALT',   'ty*LU9K@vwI)|c%L;rjY8EIS!P(=u+u ,o&:OfD|i6[yy1,Uj(h9lw[p|6CoM:Gt');
define('NONCE_SALT',       'E>sE>4O`>B*zIz{0>WX[Le{+7dJ!Z<o|b[kM7l0yKaP3hdi`aY+g$Rb0J][KD*S2');

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

