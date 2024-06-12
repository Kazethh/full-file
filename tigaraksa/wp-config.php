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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tigaraksa' );

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
define( 'AUTH_KEY',         '*pV=CF7*&:F?y$7X^fSD26m,rGI(R&FZOKIifs%0]gLOwRA#UGYP&z;D{3DXbgE*' );
define( 'SECURE_AUTH_KEY',  '3u#[QOpk!25#JM$W/MD_{B{p0C=I^A?.[g!-e]S(9Ol#QU]5AhHrm&=du>9DpU1J' );
define( 'LOGGED_IN_KEY',    '<sXxhW<so&&G[u@WhBm$W$;o,Jcm]2)#h8>!Bx*}htO1Uatd6#3J<`~7fuF2XIt:' );
define( 'NONCE_KEY',        '3.9OW-Nl/;oIMna!]!hV|$;4bV4Dvinb12imRugYR!y#6XOYM=Rvq0tBH?#bWm^1' );
define( 'AUTH_SALT',        '8Sz.G_<3&Mu]aSA[N&eN.p67EfnkH6S}EB>`%@#p5Y}(,=l2W#m%q%deamwE0=H7' );
define( 'SECURE_AUTH_SALT', 'Sw>ir5smvCUqn!0Sgcqaf=4!{z+V._|qJLARh;~i%u2da W<B*q2k|~_M`][.6Aa' );
define( 'LOGGED_IN_SALT',   'C:7z}UG8 08?@eSv45_LJ|?$$[}Sy47lYp.{E&vn:-1Z%1nJ7+@l>oxI]H(`h}r]' );
define( 'NONCE_SALT',       'v(}9EJK!@V,gV>MvOVgO{6AmjS5*G[TOG~GgD5g@v-aB??H;R-awR*z>o0_^&s`.' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
