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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'WG!F:NL KxvR7H,2d/N@x| *>%F_R=*L;00n<(~o0JDOyy&WY,e_^brJOJ))_Qos' );
define( 'SECURE_AUTH_KEY',  '*Y<`!sQsnE8|{X]gzP82AmVY@0~hmO0xf%Nk^Jh8UGauHkEAJ4 cH,h4ZfmR8Au{' );
define( 'LOGGED_IN_KEY',    'wAM!vL*.b`>zcW{?CKz0>|W09yrGl9wI^A4}xN&l#Y7uGPJPR;vAZE?&;sJ2)BJY' );
define( 'NONCE_KEY',        'Z>/L((=a~z4,}y5kB!RINncQMzv#nP>^LT&br{,o9.SNE>!o,[$*Q=/MdMTn=<Il' );
define( 'AUTH_SALT',        'D0`7?aRY@y<$-> q_86T*5x| <ojX)7.<<o4o(x2WdtMn8vmQv&AZ$Bn]*y61QUF' );
define( 'SECURE_AUTH_SALT', '>i$|/]]ky7kG.Wvnw*gcMFe:q>wG^j2*p8haD#2&)IRiot]%%) Chh}#r{E[_8Zl' );
define( 'LOGGED_IN_SALT',   'Pf~ta|+WbnCPk>N!_@7k/&1$WA#lu?iR3*?a=x>iFrW qT[h5P>,tYJT;Wb;Q`/D' );
define( 'NONCE_SALT',       '6>&3J/OOLiQUK4lQN?PI&./exB44R.uW$Ojy7~.6g60bj)smWg,fo:8Wbi&.RUf3' );

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
