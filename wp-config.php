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
define('DB_NAME', 'mitema');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'zT@i,Cw,zWN[[^m$#vAd_Frc*yw:d0G^#ZU&?|MLW+TiZ+28S[o+bVsy9tpLMoe?');
define('SECURE_AUTH_KEY',  'O{Q)uE^sCn&FGv>JiU~5+{ZfW:ShLjazfo#1o$dY]6UillLSFCSo^0FG.}nnobSo');
define('LOGGED_IN_KEY',    'Pv~eZRt6&(M74$Z^EV=i}EmkE=:BdQ&i)y{%Yw#{q9UC=!F,woyD1y@K?qgq?$rG');
define('NONCE_KEY',        'yTiYvV0RQ}itf/@?+w`DPR6;++vZ)~@7-0cITS45?&idpS9?&Rhw|aa5<OePT~yo');
define('AUTH_SALT',        'jGJ72:ZbAW-4It,,iM<+xjtW*#6+mVRly%|&mv/}($]HU0~Jdb@*{6M!hm,m> Ag');
define('SECURE_AUTH_SALT', 'c@hJ2&zGu_em1tH$a(kCU6189Q36L QWNXRZzdUS{0Pu??73NG4:{13r-da/W*7w');
define('LOGGED_IN_SALT',   '2M.J^#uO$4oJf2aXb&67PD70SP.)?[,,sUpeAETGGM276]t)f0_}M#$3aX>E<8lX');
define('NONCE_SALT',       '+TvKm9`t%rKiHT*!t(FyUA| ~;c`Yy5n^fXQF7_-zcYFlV;H@%.S$UF|Pt~EYYJk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mt_';

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
