<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flower-power' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':&@~eSmVo^c`&.sbY#{VIL;H_t2E*8TM%4iV`R<lkdAE%#HxK?n3~CO:$4&| -*)' );
define( 'SECURE_AUTH_KEY',  'N|B_;b:-kd(Ce~zllmv.(g1N(0Y=[>RDW<S^&j2n|m7k,@59U<q`>L*@4*keGxJJ' );
define( 'LOGGED_IN_KEY',    'x<e.6w)DOs*?to}leh1MiOo!{D/IWf72TXGItd,0M[XG#0-Z;4BV{Q[Rg1!]ey_Z' );
define( 'NONCE_KEY',        '9zN_%]K) 7-RIV+GBvce~A^JHFKVV_FhMrgY}CHW@^?P$)jh1iv5=$kX;2?2F-W1' );
define( 'AUTH_SALT',        'Ydy}9GQQvBqf#2U4,.K.0t{^vj*A$doDQ87}iJ2<3qp+7(0-EU`z1H,7|,d(VviE' );
define( 'SECURE_AUTH_SALT', '$J*Paa=FcRO@9;~z~<O}e:>!bB<y5MLXs->=gC0!(vCupL%MX2Z-aT>(0Q~,o-P+' );
define( 'LOGGED_IN_SALT',   '&={zAe?8EtT5x.p)}AUB1^KDe;[03`r*~/Fl:10LQ($Rm.H]l+.mHzFwkMt1~i:c' );
define( 'NONCE_SALT',       '1bINg96]yDS[3Rg,XdHM9+1zH>BM98 9,_^?kQ&!>-e:-r]b*Z!h;!U$,Julb&5E' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
