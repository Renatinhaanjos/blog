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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'PNe|ibl3qtmAL&b]JxVT*89Q2*)u~1J:[](GDFzbuVBS2-NYT@lIxPStq^LK- X>' );
define( 'SECURE_AUTH_KEY',  'DNo[+G*A428{IM0C[Tiac)UjnIK`}A+~4{3JE@sf.vk53#%LqR8~Vdj5s(u1i/o3' );
define( 'LOGGED_IN_KEY',    'X _)B[y!S@oM{Kg_m_],Sg&Nx;!sZ,_(6`y+dY}0FNLy??fjK%xGa7Hepu7OhtDm' );
define( 'NONCE_KEY',        '&~01NMp*:#4d|,]BBkWW!J9XnUIhAdT;&LRQDxNNOz&IL JOx}?P0$vBa_L<LT%N' );
define( 'AUTH_SALT',        'Na30bzgV<@@Ltx3,T<*>7uTd_3ysxFLqC^BNYXG.DjEGdf&%1+}dnpK(3!Q=qF:m' );
define( 'SECURE_AUTH_SALT', '39}2:h~Yf+`9y.LdhK3?-;&xSIvdu yFJH)Hwp<TO>]B[qVI6n-Pz7`x^z%f|vs:' );
define( 'LOGGED_IN_SALT',   'Qf=Md@pr_y+$9q1x9ivLfzpyq%zX@4I;]?Q)c|}[n/EC8([k57%]N@eo$L8@?TLw' );
define( 'NONCE_SALT',       'uLNCk}]3^! |?YVlA;6/Ysh}`N$FuHGo(G6Ohac#%,|Z#IGx}kLPi9~nr%A:]-@]' );

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
