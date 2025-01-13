<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tT*Nv&a!jn <7<M)yl4f7rfIsc`hbrE/#;n&d2FZ+BcWXv)S^QpwGzt!v)a:w|TS' );
define( 'SECURE_AUTH_KEY',  'XQ-en.]Gqg<<M3rXw(,Mit-/<(c~HxB>A&=GzB}+jJ$L]un|~Vm]L{gLB%(|VO}g' );
define( 'LOGGED_IN_KEY',    'T}2QIK1!QH<,RhZ>?=F@Jsb!K|XZ76zhdiN/EXhcRnvdXeNH}XFJV=Zee;;6AH_Q' );
define( 'NONCE_KEY',        '%w@sQUB2WONUURt7d+!.Qs@t^+/ioEq$Q(6LO`rjKw?9S9)Q:-:E_BG/HFy.7z%c' );
define( 'AUTH_SALT',        'Xq 9l/ 1LJ`sWJ! N:vFp%/>&zyX$p>va9v<g%]t<RT=4Na|b.dzy2,1v2&$+dRn' );
define( 'SECURE_AUTH_SALT', '6^ao?Ni<F^^kC@^7LIY^;nMVqEAJH+Z@>pHT!6G+j?@q0dG@a6y;>9?k/^qIWY75' );
define( 'LOGGED_IN_SALT',   '5y^hb2eX;(4zkF{j;hDOxTpJEVIOadWENHpfXqh?cY:>6Hb<xj8=?I/^m0bp&Sod' );
define( 'NONCE_SALT',       'Q#C;i3%+<2nq%:AdnDHBg)NW7FAt{rkGV=n}0?ylFJa21d.?U2D6nzw)7)rR8VGa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
