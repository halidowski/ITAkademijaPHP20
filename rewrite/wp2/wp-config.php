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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'halid_wp2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
	define('AUTH_KEY',         '.f;(3?8%nr4sQ+|~^6oQrq9Qv(D|hp,cN=V#bib F}RzUDZi{A`gQTc0Tv3+y$-U');
	define('SECURE_AUTH_KEY',  '?s<<|rcqHzh:.LIsMt8Aw@6#O[RdSnC]YE${KG%u_k5X.&LQ9ShVEm(b*X2NTQIS');
	define('LOGGED_IN_KEY',    't<T|Uykg;Gi^E5r9#-MXi8{+28s$?h^)Ki!21^@St0T vVk)]+HNv3&{Pb)1TQ:d');
	define('NONCE_KEY',        '!FD/*Oi.P5C ^iv*_wlC-@u{t@S^G,E4Gi~fguc9?~1#a,3Fg=;cYNXlO=^bAcn-');
	define('AUTH_SALT',        'N&-_K=L|p,QGS8it*+~*7Gi|/yDlM7<_-qyiBJ7P`b>*`I+{%xXp[,{TU<mW4wv`');
	define('SECURE_AUTH_SALT', 'olUM,:bH :UE4f:f_=)~|e8S +K&UzbUF!~$+b1m`I8~~5rE8Ek945jqHqE[?A8(');
	define('LOGGED_IN_SALT',   'yls&+t2[mt|3q6+,s:En9-GEK{@r?PzZu0O2L(SE6fzHrCX6WALEej+Zhm;?HhU?');
	define('NONCE_SALT',       ' -.by[l_ :g-p3o)|`jwv09-oFW>L?9{UbIEzVvBX/D0VFP $Wu33yl:nI dmT2g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2hh94_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
