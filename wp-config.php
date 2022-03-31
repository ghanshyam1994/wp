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
define( 'DB_NAME', 'wp' );

define('FS_METHOD', 'direct');

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'QYK,,=Qz!qL^zr4`{:P15=is-&zkNV2q%-u3]U8nIcIGhfcm)oZ7-]88LtD0(e9`' );
define( 'SECURE_AUTH_KEY',  'fb0[S6{@C0Gch#I{YI3lsL^vQ`hzOJ&}7>/`w(zln%`DaN^H1W@c1jPjh9+H)a*e' );
define( 'LOGGED_IN_KEY',    'w~Y<X!nGtoP=HdXSyDH; nlwt[?Q+(i}l/5p$#n<7O!3mRrr_q1uJ}%l;$&/W:U)' );
define( 'NONCE_KEY',        'ZGpE5kpzamLIvX^T(Xu(]:_`PYOKfK*Nyq%n8:1s]Nl)^,W|Dz^w:h-KS&+e7NgR' );
define( 'AUTH_SALT',        'tvYp?aqyx,eC#FLLR*;]-C.5;,B)hffaE,/}X~Y$32>wNv4N{R?AV<$a&Dd[CEW}' );
define( 'SECURE_AUTH_SALT', '?C8!{^=N$?4!3q@j6C}3jeoU.S3gcKO2oe@Q~X{Xae6N/dm*TA0G@Yr6=QvfSokc' );
define( 'LOGGED_IN_SALT',   'tZm^0dI5Z/B]1hQ5EyrPHcLiICAA<7;!s{}bRs4<F_~fuO|eH7V ptv(A1;bP5mJ' );
define( 'NONCE_SALT',       'M6v[a!=6YmZHx>,^}dI~67)t$K:1Sh]>Y9K!bn@Zdpj46JPWn5nF37Ab3`tpdH~*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Gh_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
