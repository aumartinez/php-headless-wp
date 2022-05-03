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
define( 'AUTH_KEY',         'H9PO;>TTDPM.PrnW,0jcY$UeweJXo%%()Jxu3,qZnTJPod=?M.|0l$5y?y22tjp`' );
define( 'SECURE_AUTH_KEY',  'U<sVd{jrjjvL)o#x[Q7]dYNQk06z5yC<}k]I1hN6sl=ZPX~U/s{TPW0:nXb^?zzu' );
define( 'LOGGED_IN_KEY',    'xlPH]QDK m#n2Hg8+)$SN)w?pHwZk(YG8q>V(T%PE~ju$U&6aok-{G`sKxu7z_m2' );
define( 'NONCE_KEY',        'n~##E=,ASB=rx?pW#gdCxb^}-vf5o6,u_.NWG|421H=&%}11O%4VAhwQ>n(-O*MI' );
define( 'AUTH_SALT',        'X+M/VUhJ2H>rg+m9ov6sgoH)mawt_7lKi7ZB}UktcRoEv@I6 kV7-LS l Ek^jnY' );
define( 'SECURE_AUTH_SALT', 'e,w?0p:R]Ue1TS5}42!hBt.AZe4$ w6v! q]fFdFuV}Yf|{[+NJz=myk1#Y.mrY{' );
define( 'LOGGED_IN_SALT',   '9 53<`+(&I/]].6mvJZL&O~?%eDm_WeT2i;P)8 q#:[*vR&3^Ka`hNyE!!THP0VC' );
define( 'NONCE_SALT',       'n>>GQf#LL@([7#uMM#b2&oaIYPfL4_@;$=%*K{~4:rh=,7aF)?r}#z6w~t9~wcP.' );

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
