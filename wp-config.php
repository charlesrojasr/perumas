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
define( 'DB_NAME', 'pag_wordpress' );

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
define( 'AUTH_KEY',         '95HS-w eXgc4vs=}@QPegD/qW_8~rKs>FRDd!mR|RCJVKRjXI~|)rJE~f|4r:Un*' );
define( 'SECURE_AUTH_KEY',  '7Gc>#/xhuZo_?U+/emsW>1q!E:y_G.B( wVd<?2{/|2%!y|Wnigm`Pve{a.d<CF{' );
define( 'LOGGED_IN_KEY',    'c4$|G;LfMxX(9y0a7 T;7B34/6v:n}i#<?s#nzz@o=64D<3<$[-Io-ECtad3K?w`' );
define( 'NONCE_KEY',        'L3ah[WB%l-P6Ra;;Ze}SJcNVz@,uBe;;n_!IU=AtWg*@Prk)2N)@+|ZyhpL.^3G-' );
define( 'AUTH_SALT',        'Fu`{T6;i8!W!@8}m-{N%{B.L/Zfh6}u}J.|vR1*%n3f-m_>Ru)F?25$u1Z-8+[@l' );
define( 'SECURE_AUTH_SALT', 'f6d8nA0A7z_~DPNrlL(Mo&%I8UA[tgw4nkFoQ>d0fIUVt)ZI xH_T>*dymp0iuV1' );
define( 'LOGGED_IN_SALT',   '>HNM:YJ[SAZdeKu=)48AxDS9}`S|u@4TOuxFoe~c{rPb*o>jp{U=6bfevQ6U:=N)' );
define( 'NONCE_SALT',       '9Zang%!> $,W]So??zq9/|_$O[[Sqbx[ZPGkyoy?%g.R!{Owj7OrSgpTm5`equ k' );

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
