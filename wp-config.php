<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'AUTH_KEY',         'uL(6CF$:Gh7Ofy&O4[85x;`;S@S!*p(a/,86m(6k%g_]t3,R9#QD}*@j:{--?2J1' );
define( 'SECURE_AUTH_KEY',  'yvr@0u je_S(T2$$.EH+?i3isf_O/`:J;|%^FEUso5j6LqpXm5;1j]vEkF2>k`wh' );
define( 'LOGGED_IN_KEY',    ';v!htaRP%^U8^}E;dY` -vNd>$>/,BOb+.4,n,-*1<t<k?C>>k`H)Q0y/O]@>K@k' );
define( 'NONCE_KEY',        '>G~V,A}@7:o!M9rmV=Y .>g-,iM)%fqEN9%=GW{?2Sh@QOUCT({J+RQ)9oWsD@@U' );
define( 'AUTH_SALT',        'd-FQ!<Oxg_puCX?h^]mXBSp|`oCR~j7+/PD}NHVV=!H<Bq_viL-ma:,C}ft&je&)' );
define( 'SECURE_AUTH_SALT', 'sd.})_z}K/2OHG7=<?~]3>,Sn5_Tf0Cck?bDd:tdwo!C^wOXsk3EB6sLzHw /$&X' );
define( 'LOGGED_IN_SALT',   '7|&m]jDyQrKEj((1)FJlw]~lCt6MUD_De[+lU~~_N>F*E=6A7k]CjNr}eBr?Ei24' );
define( 'NONCE_SALT',       '$g%EydCo:r43-:q =;hv*21 qrsEm-HOZHHBf6_~~&iC8K#hBPigKKY?{gfIZ+iY' );

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
