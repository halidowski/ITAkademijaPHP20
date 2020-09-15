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
define( 'DB_NAME', 'halid_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Pk BZHDns9(REjJYwv3RUSFXXeAR0FR+S]$,1hU}*C tpjF<K]cl(v;lTqP50XK4' );
define( 'SECURE_AUTH_KEY',  '1$h?4s#wS>Xx@5%$WAZ!B$`Kie]R5rTcx0z3;qthf603bDnmT}r.mbRJ?IWgqJC;' );
define( 'LOGGED_IN_KEY',    'QkZ:O C~<^^YWemNQI9@+FUx?.8YGVc:`0x}A+l4V6ow7V-ny UHaIlt>d-=h!G=' );
define( 'NONCE_KEY',        ']AMP9)B}ZP$JwMwJ)n!6P6=+%.Zrh*nvW][??r~Fe{A=3Pe(z)]D%S1V{7 h7G#T' );
define( 'AUTH_SALT',        '?]]%HeY}+z+mo#7JCz>n=4@s#;{TH~LT:<@y??!K<xw@{0-W}ui+EV}0eEdtN^I0' );
define( 'SECURE_AUTH_SALT', '2||H)d?`k0]7UvG]YFmk}eAQCoH9nXj05m*T*3_~e(_aT$ZVl@dQu{Kq!mZ<8098' );
define( 'LOGGED_IN_SALT',   'JtZxok>|</nRI ?PV_Mk1o/lK:fMxe|Q,2|I^$8qm` Z<%|[/IOHZIevtj:Vx($.' );
define( 'NONCE_SALT',       'V(~#3EAocw~Kf@^09CLJpO)Dh:n3l>$Ra2)?My`X4bD_0fyx)@Pnw}OU7H(Pl:/h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphh94_';

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
