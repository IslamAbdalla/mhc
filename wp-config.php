<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mhc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Islam1993');

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
define('AUTH_KEY',         '8ublfk? {AS:r|GSikj[S^EsQH^/nx+IaZn5=%Acq>f:P(Ai{o dGY7rE@bleJ 6');
define('SECURE_AUTH_KEY',  'i,C^)XIIA*1.p/WVO[ I,.[|Y:%n|y^i*8f2PEvDhFX^fda2]m0K(0=gPN>~lY&+');
define('LOGGED_IN_KEY',    'J~:AL4Pq:R~^>cMWD=TNFl<3uvM4-}|v}w3?[Mt~GT~,zD[)UPrILZI4n]u<E$+$');
define('NONCE_KEY',        '6I&+6=nJ0FELBKMF$[t8U!Y5cRk_V*_gS-3<yyT9fZZ=0+)S&W0?4{#vXQRI5]G1');
define('AUTH_SALT',        'PJ0.x%/BbLClmqV;O0Z(9f7>pL+Rwf6(<sgAY3p/qmgj3+eC4IB;zY$>a{->]Z[]');
define('SECURE_AUTH_SALT', '!eQ&9)m)4Mi$(,vO.wQG]<|/on+-ssF{_WPVy1R5]YiAlUk|j33)|#pQs?@E;NWa');
define('LOGGED_IN_SALT',   '#KB_HBoyue|FUh?tcSOe)`Z{=B1nujjWCwbH?!2f61|LV|;.nR4dj9+a?,~/l((]');
define('NONCE_SALT',       'D+Z(p7X)l=DI,|ti^&82Os5`ggw|g47HV.2h{,xb|80]dIbER#]i~r,-uChDM#<=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mhc_';

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
