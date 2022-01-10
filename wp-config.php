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
define( 'DB_NAME', 'wordpress_formularios' );

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
define( 'AUTH_KEY',         'Tv_gARfEh,Y1R=?Hd}XOUb}zJAFg{($B0(yMvT!JI(;5r2G:m4_>IK$(2b7Tt(br' );
define( 'SECURE_AUTH_KEY',  'S^958N_VSGnAQ=![IX76<Fxm71OEvEfe;*QvDO:)X{!-<1ZKyg7:,bjoIfF~nt,r' );
define( 'LOGGED_IN_KEY',    ')*fpTS>yn+ s_/_j1 e+!Vl:#Puh108F[f$hsvJv;;g#HR{}HIlT;cfJ34jMTh1K' );
define( 'NONCE_KEY',        'r*tKf9Wt#]6k/?zRh;LRe*6-tV-GsI]hfCm2*Xl5$RAsr Va$mD?(<C%.cVE={#3' );
define( 'AUTH_SALT',        '$k&XH#mdO*0:#+Cu+oAZPdva2So$y`a17p7T1hJl8=DufO?F#DlAX}qf_sAdm*gY' );
define( 'SECURE_AUTH_SALT', 'MrZ%!Lf{Nz)C)h_q#L9+f?q<KkuwNpfHX8!;-YE]q.S1~Ud$#S=q_K0)e/s4NLTL' );
define( 'LOGGED_IN_SALT',   '-!Y^;on~]ezK$8Z52`>qr>[~m9~][:*/JS=97v?n_$Y]8hbIJuu:DPI~)pai{uMp' );
define( 'NONCE_SALT',       'U{Qy% 0F|ZO/m<1r4U[W$D5FXx)`}f$jPIC):@|_I~rsN0&GFBiojDbhdH!87fRJ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
