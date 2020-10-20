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
define( 'DB_NAME', 'svo' );

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
define( 'AUTH_KEY',         ':x(^_co~0uyrZr&Zvf(rz|uew%C2ShHh@Lj# YWJvv<-6ZaQOL$CuLt^A,r/VJXV' );
define( 'SECURE_AUTH_KEY',  '`WDHxoN[v0/=oR)1803!x3{`hom%P[3&<NPVhBwSn+841oR4{=PJj-,?g.: q/`m' );
define( 'LOGGED_IN_KEY',    'ICx} _eqMwgAbwHk$QEEE.<.@l YE>qTl/+/WWseZ}vV>?+t}u)9T%MdnPEa<&Q!' );
define( 'NONCE_KEY',        'f?^m=PG5 F^8&r*9m,Y~D$Ve?8]SGkKRK8qq8P`AX,V%/&N-%CT:#kS|}*f%SA` ' );
define( 'AUTH_SALT',        '#IdV}UnCw+mCi7mUP(i`$x4cd4_#`4PKK=j};ekG_b0OqJ synA,;j!Fdo7HZB%B' );
define( 'SECURE_AUTH_SALT', '`wtp1fSCdbrZ7x]]RpASjg4,CD<P2DEQmj`BwaxoL-&CEusZC1+VY+729y(= _]3' );
define( 'LOGGED_IN_SALT',   '2nzk,X?pbo9q@*qX8hK)lby}xSlINi,:nZ*^,X<,c|FOnF7K^nQ44Zl1X3GSN}/0' );
define( 'NONCE_SALT',       'Sd-)O0v1bJ.6gURs]wLX,t=]rVU4d[dIt;FoOPJ2zDU`No75<sh/XbhV{`S>!Ew.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
