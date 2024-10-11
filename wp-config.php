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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bright' );

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
define( 'AUTH_KEY',         'HDt4ZKwf&qvUT.2eA8wzQ#*OZxK(Jqu(}nN;FCg2#A7He#m~J7-o{<OJoUJ85r$B' );
define( 'SECURE_AUTH_KEY',  'mqJ4[2@?OMScJF6XPS>KBIYPLwPqgL2M>AzFN?f Icc. ?85gD4k3DIs$r<5M&d%' );
define( 'LOGGED_IN_KEY',    '-je2MenL,C)8K8|X/+lX){K^l`s*6.a(AZucK3QtfU`#gM0X0%NWPI5wq8<,!yO4' );
define( 'NONCE_KEY',        'f.{QuUAiaXM22LUV,H%R{JdIxfXEW-p Zyf2gHkdoM6QkRB1GM0E>-K2=bz6ve%s' );
define( 'AUTH_SALT',        '>^3sE0+c_q9Al(e>Jt*I}^ 0q/De{ga0C4(xkaqFU5_Dm%;DOS(yr*Lm{Y @ok`)' );
define( 'SECURE_AUTH_SALT', 'NW@anamUrHvmrd5e9IQ5;A{8FZ#z7zk4(FC3*q,#T<6/K-aWaw&SB}AN&B$0VJ$S' );
define( 'LOGGED_IN_SALT',   'HFSIN_`(Bv|dR&^O~wNZ49lj?~nS0<_N*2$$l3(n~!-iE.<b*_3E+W8,pcu*hXt{' );
define( 'NONCE_SALT',       '_*CQfH|&hPAav*/Q8h[z9<`T|j?0z9+[$EYq q0{e@h(Of[rTqTMgaGa!o%S3:y)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ysk';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
