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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'NGT,an%~J&#=spA|jM) hh|YH,tyL @ygSpJI,z2KRq< 8jEAp)m.#qpMaxt/p K' );
define( 'SECURE_AUTH_KEY',   'Nf-bjn|d;f4F[+op?(F1eQZ6+g@fIMrbi&-?C*bN%G8=U,u_A~;z>H6dSC&S/*B`' );
define( 'LOGGED_IN_KEY',     '6sATjH`BE%-jO11ugL:Ht@9p(?cBASgSce@OWMv-$thIx(5g%FPYSzf?fc![Qyx;' );
define( 'NONCE_KEY',         'WpP_~K%A!&nKk pli0:l-8*k!|$lfaK|&#o6OM65(<9PIQH,n#3C@wv},h4@E3l^' );
define( 'AUTH_SALT',         'nQU6aX9`]h<ygs<ve#P;pl&kY/!9M5gwMR&*#94E sxCVUnK&?5d@v**I:dY]c0U' );
define( 'SECURE_AUTH_SALT',  '1I[elm9CG+[Y:Kygr>onN*gb[@/135/4&z> uUP2E RYP(Z @T4C0]4B- @RSbm(' );
define( 'LOGGED_IN_SALT',    'h}@HV1U$.DV/v?n-t;lx/=d%mZUpTq}%f%sDISn$$16Ql~otim`87UtXM6g>%@7O' );
define( 'NONCE_SALT',        'G-1z[IY@qrWd[ F[ax$u~$^)um6cb6wIwE>GIh`Le]s]tez^U7StaU6gHxmg) 5(' );
define( 'WP_CACHE_KEY_SALT', 'bqOxKxj^{MX7V*@(UUE`x+)~-+y |fH5LX?T%<9DjZ%I*!8pNKkZm4=z`P~YpDju' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
