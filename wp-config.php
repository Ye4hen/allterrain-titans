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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         'NL[-F|kewUWS$2es#&A6:4npd+,e@n.Ejl&~K<nz nvf>,Ytn1g]Y~kElTkH10M-' );
define( 'SECURE_AUTH_KEY',  'Lf1/u183<o{[t5BO5.^^#9o(G&ZX-Styt2I>U$ q9gl+<`jVq;f@r(UP.b/Ng8Xu' );
define( 'LOGGED_IN_KEY',    '?r<C)<H;2qmbH8T+BI6r4ve,?=_L|+NikF~9:Rkp||X.KMYK^W:6.e{)]e@AYw5X' );
define( 'NONCE_KEY',        'h5Mmh9&OXeJ)Y#xg&<8#v6fl/G,(hxx|~Yvx[[tcm3_:>|=[wgRjv3^$3UW`~Ix!' );
define( 'AUTH_SALT',        '/I%WkBDdu+hJ+ojIwACQ:zj+_(j{{A;6^hGk&:hP1d.PUi|E9x4[DEjiP-kYR0E8' );
define( 'SECURE_AUTH_SALT', 'a%~X2}*.u.}Dt17IxV8YH7IArFbHpx/WVf<86-SUV#xik{:`yZWHvewtoL)wc+9Q' );
define( 'LOGGED_IN_SALT',   '^FI*J$Ngc!,**l$jC6JA6Vu/%9cK1FDErQ9W 2!-Ggn^DM$q#(3o7Q,n3iKk>p08' );
define( 'NONCE_SALT',       '7g@bi8XFdrOfUKsTl%Cj#kCkgt>ShZZzcK%^kcDG.5fNM h3xYYHCx-tFV!S$uv<' );

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
