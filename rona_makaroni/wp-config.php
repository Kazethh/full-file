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
define( 'DB_NAME', 'rona_makaroni' );

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
define( 'AUTH_KEY',         '38l_3F4MKbth% Vgs(g;xPFLCI[PVPA!D#s+*J`?|*|v}dL&M3AjHT8 vb)zY}+%' );
define( 'SECURE_AUTH_KEY',  'N[#6<Jv6W)Fklk%DAwsZ}^$<K4f6^/l*&ShwZF!f1|4{[p_w9BP)r*gw4!.!gtMG' );
define( 'LOGGED_IN_KEY',    'RSYuTHwF0H.7z;s/&<}h$(LAkizo>R!]zS2_4=b M~KOi*Dnw3C|Sq]k!)PmTxSe' );
define( 'NONCE_KEY',        'A@j[LOgPc$|$`Lr3@x3:`d]d..+/P?/OHua-Sezs#W,^5;M@5H3qgBQjod|j7r/[' );
define( 'AUTH_SALT',        '! 7N`5 R>);tu!-Id*i|v|>&UC9adm>Y?:Q4JGY*Gl7|<f$;z#zf@}qYYZNNp6}s' );
define( 'SECURE_AUTH_SALT', '9U#%K9MfU}R 9klE,y7~([oL0yN*,FBYAUAaFX*e3_.5KZ]c$`e)b-&YHR,PADm]' );
define( 'LOGGED_IN_SALT',   '[5;L`q 3y:lX8E/J_q_3L`D`LJPM-E>ZI9*JE{w;M /lLiMZadJ8t15S@]^Jb{)H' );
define( 'NONCE_SALT',       '64GiL&*3kv?/lopErg220Q=>|`}W:Hx,>P^zopO~)*75X!&Buf&n<2gdWU~==B,P' );

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
