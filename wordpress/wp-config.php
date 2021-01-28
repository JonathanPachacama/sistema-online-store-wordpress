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
define( 'AUTH_KEY',         '&<12,;J@O5yzbd4] !h*u<Zi*.UxS9EF_3)o5Oj=o*yF@$NKM~yF:T^)`XqmA8rp' );
define( 'SECURE_AUTH_KEY',  'Myq@n>|q)oU B`bUmSk4!U|y?1,9I7a`P7ZkNL]c@&y^sJ*jvQF)Z5rhswN`~#[:' );
define( 'LOGGED_IN_KEY',    '9p33K*1B%spz>tW)?X<:E~|aZ@Xps}KLrj<zP(suop9pKReyl.s[4Q7s C>k,?H6' );
define( 'NONCE_KEY',        '7bB~}F$t]MMXnmi<>f<YXqc`!_:h;/v^05WOxdqieXk9V!,zBxK|3o!.F(JW~#BH' );
define( 'AUTH_SALT',        'W62qb|>0RS$!/$~ ^3X$KHU8(wSzwT=+-zZ:#!j[#R}!Rw!G_o+P8{lC|[}<1&<Q' );
define( 'SECURE_AUTH_SALT', 'whuH,9:%Kul>Wsb%>=28WWy=p 4AqBC^8wV|bC[W_DK3a(L&c}}efT@5o_#511&<' );
define( 'LOGGED_IN_SALT',   '#YTf@fqGp!;FG;5J__,xSAM57v`9WGa#CmDfaz[.]~gOkhOom2//`B1}LdNpy,r}' );
define( 'NONCE_SALT',       '(d>8/MLq!i7}Cj@g$nBeAU<@OyWOMC[e|-tTo7X[O$tlgXNCly/=eQ[93})~Xi%`' );

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
