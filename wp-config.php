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
define( 'AUTH_KEY',         '~ju#=mPA-L>yC9ZlYhRn%9`8uA?{Qv8Qj+R72)rZqK;1RfylIMEk*{+e2D_$@kv0' );
define( 'SECURE_AUTH_KEY',  'KwPohU P$.#tm[(O^@HkE),f*L_TPFaIZe;2}oJMt^AP7]@``BQg]p)j$J1gvW`q' );
define( 'LOGGED_IN_KEY',    ':t%nQM/lf$$0XNY;f9}$Ft~6f^D`&AImKSKL.V|DJ]F?h!<R6Oj|yHOO<yA@sx4,' );
define( 'NONCE_KEY',        'l1Gr$V6/kl3G/E0bjn8n0w9i^`G30TKF}:!k ]hfi-,bD[RO&80%H#]*[O}jnsdO' );
define( 'AUTH_SALT',        '[^q@d.4EAsQ;!VSJts/!gVA.wwe>(!Ay,Juc,S.9bNBZHJ&[E+}6&Y8W_O~Nw3xh' );
define( 'SECURE_AUTH_SALT', '5w@gObD7tHk?!c-z_:dG$pif!QSq^?(Daju.6uG_1vD&FQBKRF-fS%pK6hcd0Ej#' );
define( 'LOGGED_IN_SALT',   '`g^6Dx<OcFvB)B9{^+}8t>21ZIKKJvUZ(M8_Hso!|^j/Z|Q(wfsIL+qiK]UAs>=j' );
define( 'NONCE_SALT',       '{5EAbrQ&tk]O+;R5`tJ,.rq.W1@K4v0%Di_]u*9t0F:6T`<FhEO}GHB&^Y|Jm<^?' );

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
