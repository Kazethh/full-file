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
define( 'DB_NAME', 'takamotor' );

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
define( 'AUTH_KEY',         'VTE`eO0+`F{Ivqq;XSL&Izd^+KTrk]%vtD<y;Qn*`r42KnZlr:VBt0WLRjl7:9kB' );
define( 'SECURE_AUTH_KEY',  'xN0,9z#fS/z}T1z:dex/tG,F~N_sq )zsl5N.b9$5yQn09(9q6%tlXdvb5c]d#w~' );
define( 'LOGGED_IN_KEY',    'J27Spc*G@rqocV7zBmT^gAHk6k3NPU>j.mmUHzm<cNrE]=/XwA0eZ.sYZR1^H>46' );
define( 'NONCE_KEY',        '}xay7*$<?+k{r4(A0mdmXARQ4BRSi6.)67nYgX/gIE7Lm4ln@NW4-zQL*jDq+G87' );
define( 'AUTH_SALT',        ';{$}n*C}=x$&zOZGv-^(UHf9I-w:Sg Cd*(zY}y~/X{T{vo/<-cWDhkIO4>p{6_s' );
define( 'SECURE_AUTH_SALT', '^&6$_<BrKzV1BQFZ/YqA%TK:jRQPsJ.e<:fYM/E7wL&]cwz>e]L(gN$Tdu^+>*zt' );
define( 'LOGGED_IN_SALT',   ':mrhH rWH0BPx7CgX+Al?Aud%J@d?=F|66QM@zlnY^$?BjX86C<Fx5/p<u+4ffy|' );
define( 'NONCE_SALT',       ']<wz-Ur0aoDF&i)YS05#|1E=uCq_UxOc~:sG:%!b6Ai>f|NCAQyBchF5WOjlPxLi' );

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
