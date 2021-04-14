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
define( 'DB_NAME', 'socialityconnect' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '_A/fbAqi;}w)x[rG7bG=JkC$iXaXX5bf#DqZ*$. VliDje5S}UG=0^_L<*u.?mrU' );
define( 'SECURE_AUTH_KEY',  'LUZ`j[QLF<>6SpQ9xLY^;&Oa?OIRYF.mTS`v`gUr9|^n;}V5Tk[852[b[x@ f`B{' );
define( 'LOGGED_IN_KEY',    '{cTxeDImK88fmS(mb7bw^t%Hs|w`8a!3r2@uJ|B8-L^ _s1#i56>_zyR.&eGcseq' );
define( 'NONCE_KEY',        'p|C+$AMqUGn`1h%aoJw0N5ZnU /_^a|ZUC >R&lDIbl&1jeb,0D3n^tk[7l&0ida' );
define( 'AUTH_SALT',        'K|z<Jcx[ e{w;jc<coC.G?pj[G[8Kx;r5h%y2j.U9} c%)Qr4:M;BI-$ctbMm|@Y' );
define( 'SECURE_AUTH_SALT', 'VpJh@G{Ih:KA+>n{b:L=)#o<L[TPUD12e&TBVTCji9PK_nnUAg%K`rF^#_TKeA)Q' );
define( 'LOGGED_IN_SALT',   'el*/<Y*bN`?$L!V..$h5QsF$?xr.cq|&/c =; T/wbq/gT1`)_N3 9CNNplpT<a6' );
define( 'NONCE_SALT',       '^edZ4~V-Au =>l|JrP;1(}A 5&q7Toc(FQr.b-J&|Z;U2``{&(=OG$]Rz+:7%cQt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sc_';

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

