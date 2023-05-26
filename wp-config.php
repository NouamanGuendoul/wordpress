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
define( 'AUTH_KEY',         'hbi%d=T*k{I]xV1I}~#UOskQIG/$v)44wePa]wM#fW,;sE]B@Ks{XWwmNzKS@=n=' );
define( 'SECURE_AUTH_KEY',  'G6(P5K%O_?,}e;E54n{a=j{Zw;6%_k(@-,t$$}09zT8/ k>l>pAcAFDkVy8Rb@;8' );
define( 'LOGGED_IN_KEY',    '{(`wf=su`liM.w/oV#/G9~2CzR+2(mH3y3x=(B8Y?$OOiD*v!R].*N!~fUPu}YR<' );
define( 'NONCE_KEY',        '4AX/#*zd}CGcHW2VK+,fa]KDCBY<@|5ZpEOry<Z&(Ixr5/D%kJLL?~O(D|z?#p,u' );
define( 'AUTH_SALT',        'b}8tPGNjTdG!dz*GknifL<Xvhf-)tI${]#7`,gVN_A7X68zN`}Ho[A44~#?;vA|5' );
define( 'SECURE_AUTH_SALT', '7)H5.-$?^~f|,D+X(l{RDIT*B_>FzRp^gvY/GTT|Res^L~Xmx(*S_b#.ct{jG_|f' );
define( 'LOGGED_IN_SALT',   'J:SsCDq@IVRQbqL0lEL$Us6cE^auOMg#NiQnTN#zJm7kf@&G>?!,m5ZRXiZ#3P5J' );
define( 'NONCE_SALT',       '[^c+Mxo5B$,5It-<&@mFV/UH&N[pMs}ylhm>d9B)8sX>c]cys#66b$5s41q_g}1d' );

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
