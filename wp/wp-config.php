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
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'abc123.' );

/** Database hostname */
define( 'DB_HOST', 'basedatos' );

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
define( 'AUTH_KEY',         '6zrfp>l0^D0m%P50#6}_<^P4&R8$9tw`4QZX=KmA?3xcoXF7hX[P@e7M.PMDfW~y' );
define( 'SECURE_AUTH_KEY',  'c2oP?1L.MYnAbcC0{wYic@/hwb(@m)dM#I;si0V`-6%(z7Fl1Cvf7r{x.N3fx:0k' );
define( 'LOGGED_IN_KEY',    'jbqNg=sg3zR9<sNmzO)&3|~,WM>E6fc]Jo*{}Eg6 Q=_|IfQ9Mz%c,5QH(04)Tz1' );
define( 'NONCE_KEY',        'ri2Htq@44@kx6NuNY9+[J~.i;r=E%c/}o1;Md_aqr3ZWD`aUA3!6H&p81GK;gJ*_' );
define( 'AUTH_SALT',        '16yYR|+X#{+9kguoV-oq+/?[sIte8do!,;H#/m!8[.PS*X@ hBcRDM40@[L}.TG#' );
define( 'SECURE_AUTH_SALT', 'IzJ$,;7{R^]N|`_?%n+~b%WVl}#$Pc%lewg%XZYd2yY;8u,?BCK*X52n]&z->7u]' );
define( 'LOGGED_IN_SALT',   'kJ3C>phO7E_]C*d.rA;TVEb6SfYQF6.Sf!9,Eyz}2SVrTAW>cNnHmJE(H-0&O32w' );
define( 'NONCE_SALT',       'hQ4ADQ^4t|Qa|Mrf0QB[At;Yt0{Uh)e )?oB/?*!8p<EW`e^<^!dXJ$cE<VQ^)I$' );

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
