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
define('DB_NAME', 'db_tranquil_wp');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=k]dDINf1_0K/* OL_sFON=?-^q9OMq5UfeeqT2dZ%i.m9{/-~4TvuU7]N*Z@(%N');
define('SECURE_AUTH_KEY',  '-VNY=YJ)Lhz[4:/`RlAM{c-!dmBk~q_Do?+aUhK3C[fxE~j_ybt`rW*`KrF;_A3h');
define('LOGGED_IN_KEY',    'cXpHtIE{y^nv/aa-{o,qh)|{]yR71m`KLM`FHNp]=m&Wj>Q0:}Cg?I0>kq-y~NYB');
define('NONCE_KEY',        'pXvB9Jv:(8)<|$~?)7TGUwiSfb_8/(I)?yV$0@;~(N{qV[y?lJ(83D0JS|XRWm4A');
define('AUTH_SALT',        '-d4 #xMQTp]/;<r+ZBpb5pe/ZV>fZem9/~c0Iz|*p<.#(XHKC,PRt}Ka,Lb>QOJW');
define('SECURE_AUTH_SALT', '{[Zo/,((;o?8vq_]KzD:48QmYKLm#8+#<:$$CBoWUi;D^`s-$^RTM: Mv9UvQR;r');
define('LOGGED_IN_SALT',   'R<]G<5yil2pB|U-$BqLea0q-JL>j2Pn<0D9JsiB(jy66p+WO#nS_BH|Rg>4a1?3H');
define('NONCE_SALT',       '8?v]*CF^;9wPY7&~?*a0h;IRCKsN+v*UIetccBZGLH#MxOu=z-@Lh8]:S~^$? h}');

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
