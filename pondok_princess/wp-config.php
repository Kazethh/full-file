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
define( 'DB_NAME', 'pondok_princess' );

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
define( 'AUTH_KEY',         '_)#.f1u+xD)}$i4[zt@|hN(?x-^Y-ZT|F!g5A!N?c@Y9|9tqfg(!1kK:H=iNaSfQ' );
define( 'SECURE_AUTH_KEY',  'S!MSPU2.S]oR,j3G-7oZo{yjgX8cq~;k^.SA(Y2#jokJ:KE>LlIf^2-B%,M%uUq=' );
define( 'LOGGED_IN_KEY',    '.bPr3FDAskV|dnO,X/ UR=?y/l[Rr4a)*lL&eWz{_>B2R.F4@Uc?9<Z{-EQZKA-+' );
define( 'NONCE_KEY',        '@VTX,%7DIB||+!ZckY:5&J<Ct<ijb,[K`zg9G}Q`w`0A/4*nRjF7b%*in[u]jK[H' );
define( 'AUTH_SALT',        '`CUXpoI:vYkLv^<D~AK7IXeD[(*5Lo`7by!`:iK>/laXTJh1bS%3wXnF::2<q~Jf' );
define( 'SECURE_AUTH_SALT', 'b-oI2u!.DJ$>CzxvK-1?TM?>2i16-r8>idZpUN^RO?#KZFvy?)qo4}3.*L2Tz(<%' );
define( 'LOGGED_IN_SALT',   'Y^~MLkub;a(Muvw,X}bVc0c[6,f@J&6`6fN`Z#1U/+0*gaf1yhZuAysH.Mz21p|Y' );
define( 'NONCE_SALT',       'l. 4LU41{AuL@RgWe/@8P-E f8@y-g$[f{%rxeZ.4f^h(MYnt(>|D)?j pE)o+>M' );

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
